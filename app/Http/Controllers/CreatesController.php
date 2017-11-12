<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class CreatesController extends Controller
{
    //
   public function getData(){
         $articles=Article::all();
         return view('homepage',['articles'=>$articles]);

   }
   public function addData(Request $request){
         
         $this->validate($request,[
                   'title'=>'required',
                   'description'=>'required'
         	]);
               $articles=new Article;
               $articles->title=$request->input('title');
               $articles->description=$request->input('description');
               $articles->user=$request->input('user');
               $articles->save();
               return redirect ('/homepage')->with('info','Article Saved Success');

            }
           

}
