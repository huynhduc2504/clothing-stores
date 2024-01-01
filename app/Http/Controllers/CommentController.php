<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function show($clothesId)
    {
        $comments = Comment::where('clothes_id', $clothesId)->get();
        return view('home.detail', compact('comments'));
    }
    public function store(Request $request, $clothesId)
    {
        $request->validate([
            'content' => 'required',
        ]);

        Comment::create([
            'user_id' => $request->input('IdCustomer'),
            'clothes_id' => $clothesId,
            'content' => $request->input('content'),
        ]);

        return back();
    }
}
