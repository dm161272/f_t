@extends('layout')

@section('content')

<div class="mx-4">
    <x-card class="p-10">

        <div class="flex flex-col items-center justify-center text-center">
    
            <h3 class="text-2xl mb-2">{{ $game->name }}</h3>
            <ul class="flex">
                <li
                    class="bg-sky-500 text-white rounded-xl px-3 py-1 mr-2"
                >
                    <h2>{{'Location: ' . $game->location }}</h2>
                </li>
              
            </ul>
                </div>
 
            </div>
          
            </div>
        </div>

    </x-card> 
       
</div>

<a href="..\" class="inline-block text-black mt-4 ml-4"
><i class="fa-solid fa-arrow-left"></i> Back
</a>
@endsection