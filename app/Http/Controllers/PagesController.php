<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Categorie;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    function Home()
    {
        return view('home');
    }
    function Blog()
    {
        return view('section');
    }
    function Item_Creation()
    {
        $article=new Article();
        $article->title="Chaeise";
        $article->content="Chaise de famille";

        $article->save();
        dd($article);
        return "Article créer avec succes";
    }
    function Items()
    {
        $article=Article::all();
        $categorie=Categorie::All();
        return view('section',compact(['article','categorie']));
    }
    function Item ($id) {
        $article=Article::find($id);
        if(!$article){
            abort(404);};

        return view('items', ['article' => $article]);
    }
    function Contact()
    {
        return view('contact');
    }
    function Admin()
    {
        $items=array(
            array('img'=>'x','title'=>'item1'),
            array('img'=>'x','title'=>'item2'),
            array('img'=>'x','title'=>'item3'),
            array('img'=>'x','title'=>'item4')
        );
        return view('admin.articles',compact('items'));
    }
    function ItemAdmin($item)
    {
        return view('admin.item', ['item' => $item]);
    }
    function Creation()
    {
        $categories=Categorie::All();
        return view('creation',compact('categories'));
    }
    function Store(Request $request)
    {
       $categories=$request->get('cat');
        $article = Article::create([
            "title"=>$request ->get('title'),
         "content"=>$request ->get('content'),
           ]);
        $article->categories()->attach($categories);
           


        return redirect('/blog');

    }
    function Update($id)
    {
       $article= Article::find($id);
       return view('modifier',["article"=>$article]);
    }
    function UpdateData(Request $request)
    {
        $article =Article::findOrFail($request->input('id'))
        ->
        update(['title' => $request->input('title'),
            'content' => $request->input('content')
            ]);

        return redirect('/blog');
    }
    public function DeleteArticle($id)
    {
        $article = Article::find($id);
        $article->delete();

        return redirect('/blog');
    }
}
