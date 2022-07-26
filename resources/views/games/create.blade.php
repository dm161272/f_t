@extends('layout')

@section('content')

<x-card
class="p-10 rounded max-w-lg mx-auto 
mt-24"
>
<div class="flex flex-row justify-center items-center">
    <div  class="text-2xl font-bold uppercase mb-6">Add new match</div>
    <div class="w-5 mb-6"><img src="{{ asset('images/soccerballnoshadow.svg') }}" alt="logo ball" class="logo"></div>
</div>



<form action="/games" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-6">
        <label
            for="name"
            class="inline-block text-lg mb-2"
            >Match name</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="name"
            value="{{ old('name') }}"
            placeholder="Example: First match"
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
            value="{{ old('location') }}"
            placeholder="Example: Barcelona stadium"
        />
        @error('location')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    
    </div>

    <div class="mb-6">
      <!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative inline-block text-left">
    <div>
      <button type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium 
      text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500" 
      id="menu-button" aria-expanded="true" aria-haspopup="true">
        Options
        <!-- Heroicon name: solid/chevron-down -->
        <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
           clip-rule="evenodd" />
        </svg>
      </button>
    </div>
  
    <!--
      Dropdown menu, show/hide based on menu state.
  
      Entering: "transition ease-out duration-100"
        From: "transform opacity-0 scale-95"
        To: "transform opacity-100 scale-100"
      Leaving: "transition ease-in duration-75"
        From: "transform opacity-100 scale-100"
        To: "transform opacity-0 scale-95"
    -->
    <div class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
     role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
      <div class="py-1" role="none">
        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
       
        @foreach ($games as $game)
         <x-game-card :game="$game"/>
        @endforeach
      </div>
    </div>
  </div>
  
        @error('team1')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    
    </div>

    <div class="mb-6">
        <label
            for="team2"
            class="inline-block text-lg mb-2"
            >Select second team</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="team2"
            value="{{ old('team2') }}"
            placeholder="Example: Team2"
        />
       
        @error('team2')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    
    </div>


    <div class="mb-6">
        <button
            class="bg-laravel text-white rounded py-2 px-4 hover:hover:bg-sky-600"
        >
            Save match
        </button>

        <a href="/" class="text-black ml-4"> Back </a>
    </div>
</form>
</x-card>


@endsection