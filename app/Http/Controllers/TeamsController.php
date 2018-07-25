<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\User;

class TeamsController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    } 

    public function index()
    {
        $teams = Team::all();
        $users = User::all();

        return view('teams', ['teams' => $teams, 'users' => $users]);
    }

    public function show($id)
    {
        $team = Team::findOrFail($id);
        $users = User::all();
        
        return view('team', ['team' => $team, 'users' => $users]);
    }
}
