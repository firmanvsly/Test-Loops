<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::all();

        $users->map(function($item) {
            $comment = Comment::where('email', $item->email)->get();

            return $item->comment = $comment;
        });

        $request->session()->flash('success', 'Berhasil mengambil User List!');
        return view('pages.user', compact('users'));
    }
}
