<?php

namespace App\Http\Controllers;

use App\Mail\CommentRecieved;
use App\Models\Comment;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('badWord')->only('store');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|min:5|max:5000|string',
            'team_id' => 'required|exists:teams,id',
        ]);

        $comment = Comment::create([
            'content' => $request->content,
            'team_id' => $request->team_id,
            'user_id' => Auth::user()->id,
        ]);
        $team = Team::where('id', $comment->team_id)->first();
        $mailData = $comment;
        Mail::to($team->email)->send(new CommentRecieved($mailData));

        return redirect('/teams/' . $request->team_id)->with('status', 'Comment successfully created.');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('pages.forbidden-comment', compact('needle'));
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
