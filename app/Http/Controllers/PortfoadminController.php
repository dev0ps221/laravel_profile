<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Message;
use App\Models\Demande;
use Illuminate\Http\Request;

class PortfoadminController extends Controller
{

    private $views = [
        'demandes','messages'
    ];
    function showboard(){
        $ldview = $this->views[0];
        return redirect("/portfoadmin/$ldview");
    }
    function showview($ldview){
        $views = $this->views;
        if(!in_array($ldview,$views)){
            return redirect('/portfoadmin');                
        }else{
            if($ldview == 'demandes'){
                $demandes = Demande::all();
                return view('portfoadmin',['ldview'=>$ldview,'views'=>$views,'demandes'=>compact('demandes')['demandes']]);
            }else{
                $messages = Message::all();
                return view('portfoadmin',['ldview'=>$ldview,'views'=>$views,'messages'=>compact('messages')['messages']]);
            }
        }
    }
}
