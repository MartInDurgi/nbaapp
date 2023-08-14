<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class NewsController extends Controller
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
        $news = News::paginate(6);
        //$user = User::where('id', $news->);
        return view('pages.news', compact('news'));
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
        $post = News::find($id);
        // $players = News::where('team_id', $team->id)->paginate(6);
        //$team->comments = Comment::where('team_id', $id)->get();
        return view('pages.singlenews', compact('post'));
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
