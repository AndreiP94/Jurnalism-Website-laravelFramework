<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required',
        ]);

        $user = new User();
        $user->first_name = $validatedData['first_name'];
        $user->last_name = $validatedData['last_name'];
        $user->username = $validatedData['username'];
        $user->password = Hash::make($request->password);
       // $user->password = $validatedData['password'];
        $user->rol= 'cititor';
        $user->tema='';
        $user->save();


        return redirect('/login');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();


            $userRole = Auth::user()->rol;
            $request->session()->put('author_name', Auth::user()->first_name);



            if($userRole == 'jurnalist') {
                return redirect('/paginaJurnalist');
            } elseif($userRole == 'editor') {
                return redirect('/paginaEditor');
            } elseif($userRole == 'cititor') {
                return redirect('/pagina-cititor');
            }


        }

        return back()->withErrors([
            'username' => 'Credențialele furnizate nu corespund cu înregistrările noastre.',
        ]);
    }

}
