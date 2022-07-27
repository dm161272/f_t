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
        
            Select first team
        
        <select name="listings_id1" class="inline-block text-lg mb-2">
    @foreach ($listings as $listing)
    <option value="{{$listing->id}}">{{$listing->name}}</option>
    @endforeach
        </select>
        
    
    </div>
    Select second team
    <div class="mb-6">
        <select name="listings_id2" class="inline-block text-lg mb-2">
            @foreach ($listings as $listing)
            <option value="{{$listing->id}}">{{$listing->name}}</option>
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
            
        />
       
        @error('date')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    
    </div>


    <div class="mb-6">
        <button
            class="bg-laravel text-white rounded py-2 px-4 hover:hover:bg-sky-600"
        >
            Save match
        </button>

        <a href="/game" class="text-black ml-4"> Back </a>
    </div>
</form>
</x-card>


@endsection