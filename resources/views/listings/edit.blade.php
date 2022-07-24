@extends('layout')

@section('content')

<x-card
class="p-10 rounded max-w-lg mx-auto 
mt-24"
>
<div class="flex flex-row justify-center items-center">
    <div  class="text-2xl font-bold uppercase mb-6">Edit s</div>

    <div class="w-5 mb-6"><img src="{{ asset('images/soccerballnoshadow.svg') }}" alt="logo ball" class="logo"></div>
    <div class="text-2xl font-bold uppercase mb-6">ccer team</div>
    
</div>
<div class="text-2xl text-center font-bold uppercase mb-6">
    <p>{{$listing->name}}</p>
</div>


</header>

<form method="POST" action="/listings/{{$listing->id}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-6">
        <label
            for="name"
            class="inline-block text-lg mb-2"
            >Team name</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="name"
            value="{{ $listing->name }}"
            placeholder="Example: PHP Jedis"
        />
        @error('name')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="city" class="inline-block text-lg mb-2"
            >City</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="city"
            value="{{ $listing->city }}"
            placeholder="Example: Mos Espa"
        />
        @error('city')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    
    </div>

    <div class="mb-6">
        <label
            for="country"
            class="inline-block text-lg mb-2"
            >Country</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="country"
            value="{{ $listing->country }}"
            placeholder="Example: Tatooine"
        />
        @error('country')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    
    </div>

    <div class="mb-6">
        <label for="logo" 
               class="inline-block text-lg mb-2">
          Team Logo
        </label>
        <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />

        @error('logo')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>
   
      <div>
        <img
      class="hidden w-24 mx-auto md:block"
     
      src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/noimage.png')}}" alt=""/>
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