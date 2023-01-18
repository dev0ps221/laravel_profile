<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function nouveau(Request $request){
        $request->validate([
            'nom_complet'=>'required',
            'telephone'=> 'required',
            'email'=> 'required',
            'message' => 'required'
        ]);
        $message = new Message();
        $message->nom_complet = $request->get('nom_complet');
        $message->telephone = $request->get('telephone');
        $message->email = $request->get('email');
        $message->message = $request->get('message');
        $message->save();
        return redirect('/accueil?success_message')->with('success', 'ok');
    }
}
