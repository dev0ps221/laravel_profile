<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;

class BlogadminController extends Controller
{

    private $views = [
        'liste','nouveau'
    ];
    function showboard(){
        $ldview = $this->views[0];
        return redirect("/blogadmin/$ldview");
    }
    function showview($ldview){
        $views = $this->views;
        if(!in_array($ldview,$views)){
            return redirect('/blogadmin');                
        }else{
            if($ldview == 'liste'){
                $articles = Article::all();
                return view('blogadmin',['ldview'=>$ldview,'views'=>$views,'articles'=>compact('articles')['articles']]);
            }else{
                return view('blogadmin',['ldview'=>$ldview,'views'=>$views]);
            }
        }
    }
    function nouveau(Request $request){

        $request->validate([
            'titre'=>'required',
            'content'=> 'required',
            'auteur' => 'required'
        ]);

        $article = new Article();
        $article->titre =$request->get('titre');
        $article->content =$request->get('content');
        $article->auteur =$request->get('auteur');
        
        $article->save();
        return redirect('/blogadmin')->with('success', 'article Ajouté avec succès');
    }
    function modifier(Request $request,$id){


        $request->validate([

            'titre'=>'required',
            'content'=> 'required',
            'auteur' => 'required'

        ]);




        $article = article::findOrFail($id);
        $article->titre = $request->get('titre');
        $article->content = $request->get('content');
        $article->auteur = $request->get('auteur');
        $article->update();

        return redirect("/blogadmin/modifier/".$id)->with('success', 'article Modifié avec succès');
        
    }
    function modifier_article($id){
        $article = Article::findOrFail($id);
        $article = compact('article')['article'];
        return view('blogadmin',['ldview'=>'modifier','article'=>$article,'views'=>$this->views]);
    }
    function supprimer($id){
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect('/blogadmin/liste')->with('success', 'article Supprimé avec succès');   
    }
}
