<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Comment;
use Illuminate\Support\Facades\Auth;


class CommentsController extends Controller
{
    public function store(Team $team)
    {
        $this->validate(request(), ['content' => 'required|min:10']);

        Comment::create([
            'team_id' => $team->id,
            'user_id' => Auth::id(),
            'content' => request('content')
        ]);

        return redirect('/teams/' . $team->id);
    }
}
