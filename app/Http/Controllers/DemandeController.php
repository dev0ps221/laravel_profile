<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use Illuminate\Http\Request;

class DemandeController extends Controller
{
    function nouvelle(Request $request){
        $request->validate([
            'nom_complet'=>'required',
            'cible_demande'=> 'required',
            'telephone'=> 'required',
            'description'=> 'required',
            'besoin' => 'required'
        ]);
        print_r('okok');
        $demande = new Demande();
        $demande->nom_complet = $request->get('nom_complet');
        $demande->cible_demande = $request->get('cible_demande');
        $demande->telephone = $request->get('telephone');
        $demande->besoin = $request->get('besoin');
        $demande->description = $request->get('description');
        $demande->save();
        return redirect('/accueil?success_demande')->with('success', 'ok');
    }
}
