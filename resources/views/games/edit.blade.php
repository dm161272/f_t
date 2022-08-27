@extends('layout')

@section('content')

<x-card
class="p-10 rounded max-w-lg mx-auto 
mt-24"
>
<div class="flex flex-row justify-center items-center">
    <div  class="text-2xl font-bold uppercase mb-6">Edit match</div>

    <div class="w-5 mb-6"><img src="{{ asset('images/soccerballnoshadow.svg') }}" alt="logo ball" class="logo"></div>
    
</div>
<div class="text-2xl text-center font-bold uppercase mb-6">
    <p>{{$game->name}}</p>
</div>


</header>


<form action="/games/{{$game->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-6">
        <label
            for="name"
            class="inline-block text-lg mb-2"
            >Match name</label>
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
    Select second team
    <div class="mb-6">
        <select name="teams_id2" class="inline-block text-lg mb-2">
            
            @foreach ($teams as $team)
            <option value="{{$team->id}}">{{$team->name}}</option>
            @endforeach
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
            value="{{ $game->date }}"
            
        />
       
        @error('date')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    
    </div>
      
    <div class="mb-6">
        <button
            class="bg-laravel text-white rounded py-2 px-4 hover:hover:bg-sky-600"
        >
            Save
        </button>
        <a href="/" class="text-black ml-4"> Back </a>
    </div>
</form>
</x-card>


@endsection