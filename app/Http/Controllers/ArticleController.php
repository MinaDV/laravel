<?php

namespace App\Http\Controllers;
use DB; 
use Illuminate\Http\Request;
use App\Article;
class ArticleController extends Controller
{
    public function index(){  
 // return DB::table('articles')->get();
   $articles=  Article::all();

 return view("articles.index",compact('articles'));//resources/views/articles/index.blade.php
//return view("articles.index")->withArticles($articles);//resources/views/articles/index.blade.php
//return view("articles.index")->with('articles',$articles);//resources/views/articles/index.blade.php

} 
public function store(){
     /*DB::table('articles')- >insert(
        [
            'name'=>'mon article',
            'body'=>'Text text',
            'published_at'=>'2019-02-12 00:00',
        ]    );*/ 
        Article::insert(
            [
                'name'=>'mon article',
                'body'=>'Text text',
                'published_at'=>'2019-02-12 00:00',
            ]    );
}

public function update(){
   /* DB::table('articles')
    
    ->where('id',1)
    ->update([
       
           'name'=>'title changed',
             ] );*/
             Article::where('id',3)
             ->update([
                
                    'name'=>'title changed',
                      ] );
}
public function destroy(){
   /* DB::table('articles')
    
    ->where('id',2)
    ->delete();*/
    Article::where('id',4)
    ->delete();
}
public function show($id){
    
   $article= Article::findOrFail($id);
   return view('articles.show',compact('article'));
}
}