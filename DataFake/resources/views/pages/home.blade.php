@extends('layouts.main-layout')
@section('content')
  <main>
    {{-- Tabella fake di Games --}}
    <h1>Games</h1>
    <ul>
      @foreach ($games as $game)
        <li>
          <a href="{{route('game', $game -> id)}}">
            {{ $game -> id }}.
            {{ $game -> Name }}
          </a>
        </li>
      @endforeach
    </ul>
  </main>

@endsection
