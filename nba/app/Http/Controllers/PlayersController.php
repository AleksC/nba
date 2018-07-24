<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class PlayersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 

    public function show($id)
    {
        $player = Player::findOrFail($id);
        
        return view('player', compact('player'));
    }
}
