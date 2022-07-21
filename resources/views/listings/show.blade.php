@extends('layout')

@section('content')

<div class="mx-4">
    <x-card class="p-10">

        <div class="flex flex-col items-center justify-center text-center">
            <img
                class="hidden w-24 mr-6 md:block"
               
                src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/noimage.png')}}" alt=""/>
    
            <h3 class="text-2xl mb-2">{{ $listing->name }}</h3>
            <ul class="flex">
                <li
                    class="bg-sky-500 text-white rounded-xl px-3 py-1 mr-2"
                >
                    <h2>{{'City: ' . $listing->city }}</h2>
                </li>
                <li
                    class="bg-sky-500 text-white rounded-xl px-3 py-1 mr-2"
                >
                    <h2>{{'Country: ' . $listing->country }}</h2>
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