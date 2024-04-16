<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function show (Request $request){
        $posts= Post::all();
        return view('Admin.Post.post',compact('posts'));
    }
    public function create (){

        return view('Admin.Post.addpost');
    }
    public function store (REQUEST $request){

        // Validate request
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:0,1',

        ]);

        // Upload image
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('source/images/posts'), $imageName); // Thay đổi đường dẫn lưu ảnh

        // Create new News instance
        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->image = $imageName; // Lưu tên ảnh vào cơ sở dữ liệu
        $post->status = $request->status;

        // Save news to database
        $post->save();

        // Redirect back or wherever you want
        return redirect()->route('post');
    }
    public function edit ( $id){
        $post = Post::findorfail($id);
        return view('Admin.Post.editPost', compact('post'));
    }
    public function update (Request $request, $id){
        //validation
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|in:1,2,0',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $post = Post::findorfail($id);
        //upload data
        $post->title = $request->title;
        $post->description = $request->description;
        $post->status = $request->status;
        //upload image
          if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('source/images/posts'), $imageName);
            $post->image = $imageName;
        }
        //save
        $post->save();
        //redicrect
        return redirect()->route('post');
    }
    public function delete ( $id){
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('post');
    }
}