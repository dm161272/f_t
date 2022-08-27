@extends('layout')

@section('content')
@include('partials._logo')
@include('partials._search')
<div class="mt-6 p-4"> 
    {{$teams->links()}}
</div>

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">


@if(count($teams) == 0)
<p>No teams found!</p>
@endif

@foreach ($teams as $team)
 <x-team-card :team="$team"/>
@endforeach

</div>

<div class="mx-4 p-4"> 
    {{$teams->links()}}
</div>
@endsection
 