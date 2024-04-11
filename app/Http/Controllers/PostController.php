<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show()
    {
         if (Gate::allows('admin-only')) {
            return view('admin.post');
        } elseif (Gate::allows('user-only')) {
            return redirect()->route('admin.client');
        } else {
            abort(403); // Nếu không có quyền, hiển thị lỗi 403
        }
    }
}
