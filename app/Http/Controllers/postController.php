<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){

/*       $post = DB::select('SELECT * FROM POSTS');
       $post = DB::select('SELECT id, title FROM POSTS');
       $post = DB::table('posts')->take(2);
       $post = DB::table('posts')->count();
       $post = DB::table('posts')->orderBy('title', 'desc')->get();

       $post = DB::table('posts')->where('id', 'condition/ vide == equal', 2)->get(['title as heading', 'id']);
       $post = DB::table('posts')
           ->whereTitle('entre titre')
           ->orWhere('content', 'entre content')
           ->get();

        $post = DB::table('posts')
            ->whereTitle('entre titre')
            ->WhereContent('entre content')
            ->get();*/


        $posts = Post::all();
        return view('articles', compact('posts'));
    }

    public function show($id){

        $post = Post::findOrfail($id);

        /*$findtitle =Post::where('title', 'chaine a chercher')->firstOrFail();*/

        return view('article',[
            'post' => $post
        ]);
    }

    public function contact(){
        return view('contact');
    }

    public function create(){
        return view('form');
    }


    public function store(Request $request){

      /*  $title = $request->title;
        $content = $request->description;
        DB::insert('INSERT INTO POSTS(title, content) VALUES(:titre, :body)',[
                'titre' => $title,
                'body' => $content
        ]); /*VALUES(?, ?)',[ $title, $content] *

        DB::table('posts')->insert([
            [
            'title' => $title,
            'content' => $content
            ]
        ]);*/

        Post::create([
                'title' =>$request->title,
                'content' =>$request->description,
            ]);
    }

    public function update($id){

/*        DB::table('posts')->whereId($id)->update([
            'title'=>'new title',
            'content' => 'new content'
        ]);*/

        $post = Post::findOrfail($id);
        return view('form_update',[
            'post' => $post
        ]);
    }

    public function delete($id){
    /*    DB::table('posts')->whereId($id)->delete();
        DB::table('posts')->where('column', 'condition', 'value')->delete();*/
    }

}
