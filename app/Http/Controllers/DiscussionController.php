<?php

namespace App\Http\Controllers;

use App\Models\Discussion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiscussionController extends Controller
{
    public function index()
    {
        $discussions = Discussion::all();
        return view('discussions.index', compact('discussions'));
    }

    public function create()
    {
        return view('discussions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $discussion = new Discussion();
        $discussion->title = $request->title;
        $discussion->content = $request->content;
        $discussion->user_id = Auth::id();
        $discussion->save();

        return redirect()->route('discussions.index');
    }

    public function show($id)
    {
        $discussion = Discussion::findOrFail($id);
        return view('discussions.show', compact('discussion'));
    }
}

