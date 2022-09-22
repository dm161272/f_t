@extends('layout')

@section('content')
@include('partials._logo')
@include('partials._search_match')


<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

@if(count($games) == 0)
<p>No games found!</p>
@endif

@foreach ($games as $game)
<div class="flex">
            
    <div>
        <h3 class="text-2xl">
            <a href="/games/{{ $game['id'] }}">{{ 'Match name: ' . $game['name'] }}</a>
        </h3>
     
        <ul class="flex">
        <li
                class="flex items-center justify-center bg-sky-500 text-white rounded-xl py-1 px-3 mr-2"
            >
                <h3>{{'Location: ' . $game['location']}}</h3>
            </li>
            <li
                class="flex items-center justify-center bg-sky-500 text-white rounded-xl py-1 px-3 mr-2">
                <h2>{{'Team 1: ' . $game['team1'] . ' | Score: ' . $game['score_team1']}}</h2>
            </li>
            <li
                class="flex items-center justify-center bg-sky-500 text-white rounded-xl py-1 px-3 mr-2">
                <h2>{{'Team 2: ' .  $game['team2'] . ' | Score: ' .  $game['score_team2']}}</h2>
            </li>
            <li
            class="flex items-center justify-center bg-sky-500 text-white rounded-xl py-1 px-3 mr-2">
            <h2>{{'Match date: ' . $game['date']}}</h2>
        </li>
           
        </ul>
      
    </div>
</div>
@endforeach

</div>


@endsection
 