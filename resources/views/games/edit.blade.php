@extends('layout')

@section('content')
@include('partials._logo')

<x-card
class="p-10 rounded max-w-lg mx-auto 
mt-24"
>
<div class="flex flex-row justify-center items-center">
    <div  class="text-2xl font-bold uppercase mb-6">Edit match</div>
</div>



<form action="/games/{{$game->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-6">
        <label
            for="name"
            class="inline-block text-lg mb-2">Game name</label>

        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="name"
            value="{{ $game->name }}"
            placeholder="Example: First game"
        />
        @error('name')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="location" class="inline-block text-lg mb-2"
            >Location</label
        >

       
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="location"
            value="{{ $game->location }}"
            placeholder="Example: Barcelona stadium"
        />
        @error('location')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    
    </div>

    <div class="mb-6">
    Select first team
        <select name="teams_id1" class="inline-block text-lg mb-2">
         @foreach ($teams as $team)
         <option value="{{$team->id}}">{{$team->name}}</option>
         @endforeach
        </select>
    
    </div>

    <div class="mb-6">
        Select first team score
            <select name="score_team1" class="inline-block text-lg mb-2">
             @for ($i = 0; $i <=13; $i++)
             <option value="{{$i}}">{{$i}}</option>
             @endfor
            </select>
        </div>

    
    <div class="mb-6">
        Select second team
        <select name="teams_id2" class="inline-block text-lg mb-2">
         @foreach ($teams as $team)
         <option value="{{$team->id}}">{{$team->name}}</option>
         @endforeach
        </select>
    
    </div>

    <div class="mb-6">
        Select second team score
            <select name="score_team2" class="inline-block text-lg mb-2">
             @for ($i = 0; $i <=13; $i++)
             <option value="{{$i}}">{{$i}}</option>
             @endfor
            </select>
        </div>

    <div class="mb-6">
        <label
            for="date"
            class="inline-block text-lg mb-2"
            >Set date</label
        >
        <input
            type="date"
            class="border border-gray-200 rounded p-2 w-full"
            name="date"
        />
       
        @error('date')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    
    </div>


    <div class="mb-6">
        <button
            class="bg-laravel text-white rounded py-2 px-4 hover:hover:bg-sky-600"
        >
            Save game
        </button>

        <a href="/" class="text-black ml-4"> Back </a>
    </div>
</form>
</x-card>


@endsection


