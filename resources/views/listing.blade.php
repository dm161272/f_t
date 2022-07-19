@extends('layout')

@section('content')

<div class="mx-4">
    <x-card class="p-10">

        <div class="flex flex-col items-center justify-center text-center">
            <img
                class="w-48 mr-6 mb-6"
                src="images/acme.png"
                alt=""
            />
    
            <h3 class="text-2xl mb-2">{{ $listing->name }}</h3>
            <ul class="flex">
                <li
                    class="bg-black text-white rounded-xl px-3 py-1 mr-2"
                >
                    <h2>{{ $listing->city }}</h2>
                </li>
                <li
                    class="bg-black text-white rounded-xl px-3 py-1 mr-2"
                >
                    <h2>{{ $listing->country }}</h2>
                </li>
            </ul>
                </div>
            </div>
        </div>

    </x-card> 

</div>

<a href="..\" class="inline-block text-black mt-4 ml-4"
><i class="fa-solid fa-arrow-left"></i> Back
</a>
@endsection