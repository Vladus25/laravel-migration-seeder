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
}
