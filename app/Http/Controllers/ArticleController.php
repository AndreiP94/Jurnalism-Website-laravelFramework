<?php
namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function showCategorizedArticles()
    {
        $categories = ['Artistic', 'Tehnic', 'Science', 'Moda'];
        $categorizedArticles = [];

        foreach ($categories as $category) {
            $categorizedArticles[$category] = Article::where('status', 'aprobat')
                ->where('categorie', strtolower($category))
                ->get();
        }

        return view('welcome', compact('categorizedArticles'));
    }

    public function showCategorizedArticlesCititor()
    {
        $categories = ['Artistic', 'Tehnic', 'Science', 'Moda'];
        $categorizedArticles = [];

        foreach ($categories as $category) {
            $categorizedArticles[$category] = Article::where('status', 'aprobat')
                ->where('categorie', strtolower($category))
                ->get();
        }

        return view('pagina-cititor', compact('categorizedArticles'));
    }

    public function showCategorizedArticlesEditor()
    {
        $categories = ['Artistic', 'Tehnic', 'Science', 'Moda'];
        $categorizedArticles = [];

        foreach ($categories as $category) {
            $categorizedArticles[$category] = Article::where('categorie', strtolower($category))
                ->get();
        }

        return view('paginaEditor', compact('categorizedArticles'));
    }

    public function showForm()
    {
        return view('paginaJurnalist');
    }
public function paginaJurnalist(Request $request)
{

    $validatedData = $request->validate([
        'title' => 'required',
        'content' => 'required',
        'categorie' => 'required',
        'prezentare' => 'required'
    ]);


    $authorName = $request->session()->get('author_name');
    $article = new Article();
    $article->title = $validatedData['title'];
    $article->autor = $authorName;
    $article->content = $validatedData['content'];
    $article->categorie = $validatedData['categorie'];
    $article->prezentare = $validatedData['prezentare'];
    $article->status = 'in asteptare';
    $article->data = now();



    $article->save();


    return redirect('/');
}
    public function aprobaArticol($id)
    {
        $article = Article::findOrFail($id);
        $article->status = 'aprobat';
        $article->save();

        return back();
    }

    public function stergeArticol($id)
    {
        $article = Article::findOrFail($id);
        $article->status = 'sters';
        $article->save();

        return back();
    }

}
