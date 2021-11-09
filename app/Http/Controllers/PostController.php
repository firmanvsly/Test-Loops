<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::with('user')->get();

        $request->session()->flash('success', 'Berhasil mengambil Content Post!');
        return view('pages.post', compact('posts'));
    }
}
