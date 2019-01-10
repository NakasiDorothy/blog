<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    public function index(){

    	$posts = Post::all();  //fetch all posts

    	return view('posts.indez',compact('posts'));
    }

    public function show(Post $post){

    	// $post = Post::find($id);

    	return view('posts.show', compact('post'));
    }

    public function create(){ 

    	return view('posts.create');
    }

    public function store(){

    	$this->validate(request(),[
    		'title'=>'required',
    		'body'=> 'required'
    	]);

   		//create a new post using the request data
    	$post = new Post;

    	$post->title = request('title');  
    	$post->body = request('body');

   		//save it to the database

    	$post->save();
   		//And then redirect to the homepage

  		return redirect('/');					  
    }
}
