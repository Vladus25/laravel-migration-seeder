@extends('layouts.main-layout')
@section('content')
  <main>
    <div>
      <ul>
        <li><h1>Game:</h1></li>
        <li><h1>ID: {{ $game -> id }}</h1></li>
        <li><h1>Name: {{ $game -> Name }}</h1></li>
        <li><h1>Campaign: {{ $game -> Campaign }}</h1></li>
        <li><h1>Release-Date: {{ $game -> Release_Date }}</h1></li>
        <li><h1>Rating: {{ $game -> Rating }}</h1></li>
        <li><h1>Review : {{ $game -> Review }}</h1></li>
      </ul>
    </div>
    <a class="home" href="{{route('home')}}">List Games</a>
  </main>
@endsection
