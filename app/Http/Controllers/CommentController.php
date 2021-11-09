<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    public function index(Request $request)
    {
        $comments = Comment::with('post')
            ->whereNotExists(function ($query) {
                $query->from('users')
                    ->whereRaw('comments.email = users.email');
            })->get();

        $request->session()->flash('success', 'Berhasil mengambil Comment Guest!');
        return view('pages.comment', compact('comments'));
    }
}
