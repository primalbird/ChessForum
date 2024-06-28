<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Discussion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, $discussion_id)
    {
        $request->validate([
            'content' => 'required',
        ]);

        $comment = new Comment();
        $comment->content = $request->content;
        $comment->user_id = Auth::id();
        $comment->discussion_id = $discussion_id;
        $comment->save();

        return redirect()->route('discussions.show', $discussion_id);
    }
}

