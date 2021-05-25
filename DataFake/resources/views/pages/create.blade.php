@extends('layouts.main-layout')
@section('content')
  <main>
    <div>
      <form method="POST" action="{{ route('store') }}">
        @csrf
        @method('POST')

        <ul>
          <li><h1>Game:</h1></li>
          <li><input type="text" name="Name" placeholder="Name"></li>
          <li><input type="text" name="Campaign" placeholder="Campaign"></li>
          <li><input type="date" name="Release_Date" placeholder="Release_Date"></li>
          <li><input type="number" name="Rating" placeholder="Rating"></li>
          <li><input type="text" name="Review" placeholder="Review"></li>
        </ul>
        <button type="submit" class="home">Ad Game</button>
      </form>
    </div>
  </main>
@endsection
