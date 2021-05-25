<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class TestController extends Controller
{
  public function home() {

    $games = Game::all();
    // dd($games);
    return view('pages.home', compact('games'));
  }

  public function game($id) {
    $game = Game::findorFail($id);
    // dd($game);

    return view('pages.game', compact('game'));
  }

  public function create() {

    return view ('pages.create');
  }

  public function store(Request $request) {


    $validate = $request -> validate ([
      'Name' => 'nullable|max:100',
      'Campaign' => 'nullable|max:100',
      'Release_Date' => 'nullable|date',
      'Rating' => 'nullable|numeric',
      'Review' => 'nullable|max:1000',
    ]);

    $game = Game::create($validate);
    return redirect() -> route('game', $game -> id);
  }
}
