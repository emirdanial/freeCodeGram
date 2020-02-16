<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $data = $request->validate([
            'content' => 'required',
        ]);

        $data['post_id'] = $post->id;

        auth()->user()->comments()->create($data);

        return back();
    }
}
