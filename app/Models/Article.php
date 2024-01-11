<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'autor', 'content', 'categorie', 'data', 'prezentare', 'status'];

    // Adaugă orice alte metode necesare aici
}
