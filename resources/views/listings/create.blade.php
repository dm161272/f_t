@extends('layout')

@section('content')

<x-card
class="p-10 rounded max-w-lg mx-auto 
mt-24"
>
<div class="flex flex-row justify-center items-center">
    <div  class="text-2xl font-bold uppercase mb-6">Create a new s</div>

    <div class="w-5 mb-6"><img src="{{ asset('images/soccerballnoshadow.svg') }}" alt="logo ball" class="logo"></div>
    <div class="text-2xl font-bold uppercase mb-6">ccer team</div>
</div>

</header>

<form method="POST" action="/listings">
    @csrf
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
            placeholder="Example: PHP Jedis"
        />
    </div>

    <div class="mb-6">
        <label for="city" class="inline-block text-lg mb-2"
            >City</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="city"
            placeholder="Example: Mos Espa"
        />
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
            placeholder="Example: Tatooine"
        />
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