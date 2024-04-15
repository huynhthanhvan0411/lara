<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function show (Request $request){
        $posts= Post::all();
        return view('admin.Post.post',compact('posts'));
    }
    public function create (){
        return view('posts.create');
    }
    public function store (){
        return redirect()->route('posts.show');
    }
    public function edit (){
        return view('posts.edit');
    }
    public function update (){
        return redirect()->route('posts.show');
    }
    public function destroy (){
        return redirect()->route('posts.show');
    }
}