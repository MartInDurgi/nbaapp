<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;


class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('isAuth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::paginate(6);
        return view('pages.teams', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $team = Team::find($id);
        $players = Player::where('team_id', $team->id)->paginate(6);
        $team->comments = Comment::where('team_id', $id)->paginate(2);
        return view('pages.singleteam', compact('team'), compact('players'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
