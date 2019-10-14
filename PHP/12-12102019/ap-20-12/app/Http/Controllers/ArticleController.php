<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    
    function index(){
        $articles = Article::get();
        return view('index',['articles'=>$articles]);
    }
    function show($id){
        $article= Article::where('id','=',$id)->first();
        return view('show',['article'=>$article]);

    }

    function destroy($id){
        Article::destroy($id);
        $articles = Article::get();
        return view('index',['articles'=>$articles]);
    }
    function create(){
        return view('create');
    }
    function store(){
         
         dd($_POST);
        Article::insert(
            [
                "title"=>$_POST['tieude'],
                "description"=>$_POST['nhapthu'],
                
            ]
            );
            $articles = Article::get();
            return view('index',['articles'=>$articles]);

    }

    public function edit($id)
    {
        $article= Article::where('id','=',$id)->first();
        

        return view('edit',['article'=>$article]);
    }

    public function update($id)
    {
        $article  = Article::where('id','=',$id)->first();
        $article->title =$_POST['de'];
        $article->description =$_POST['chinh'];
      
        $article->save();
        return redirect()->route('articles.index');
    }
}
