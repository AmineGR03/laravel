<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auteur;

class AuteurController extends Controller
{
    public function FormAuteur()
    {
        return view('FormAuteur');
    }
    public function AddAuteur(Request $request)
    {
        // $request->validate([
        //     'nom' => 'required|unique:auteurs',
        //     'tel' => 'required',
        //     'fichier'=>'fichier',
        // ]);

        $auteur = Auteur::create([
            "name" => $request->input('name'),
            "tel" => $request->input('tel'),

        ]);

        return redirect('/blog');
    }
}

