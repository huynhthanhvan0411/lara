<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class UserController extends Controller
{
    public function show(Request $request)
    {
        $posts = Post::where('status', 1)->get();
        return view('dashboard', compact('posts'));
    }
}