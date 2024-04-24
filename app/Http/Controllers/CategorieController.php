<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Article;

class CategorieController extends Controller
{
    public function Form()
    {
        return view('formCat');
    }
    public function Insert(Request $request)
    {
        $categorie=Categorie::create(["type"=>$request->input('type'),]);
        return redirect('/blog');
    }

}
