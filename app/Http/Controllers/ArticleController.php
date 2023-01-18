<?php
// ArticleController.php

namespace App\Http\Controllers;


use App\Models\Article;
use Illuminate\Http\Request;


class ArticleController extends Controller
{

    /**
     * Affiche la liste des articles
     */
    public function index()
    {
        $articles = Article::all();
        return  view('entry',['render'=>'blog','articles'=>compact('articles')['articles']]);

    }


    /**
     * Affiche les détails d'un article spécifique
     */

    public function show($id)
    {

        $article = Article::findOrFail($id);
        return  view('entry',['render'=>'article_blog','article'=>compact('article')['article']]);

    }




}
