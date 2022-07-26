@extends('layout')

@section('content')
@include('partials._logo')
@include('partials._search_match')
<div class="mt-6 p-4"> 
    {{$games->links()}}
</div>

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

{{var_dump($games)}}
@if(count($games) == 0)
<p>No matches found!</p>
@endif

@foreach ($games as $game)
 <x-game-card :game="$game"/>
@endforeach

</div>

<div class="mx-4 p-4"> 
    {{$games->links()}}
</div>
@endsection
 