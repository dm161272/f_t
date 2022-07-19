@extends('layout')

@section('content')
@include('partials._hero')
@include('partials._search')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">


@if(count($listings) == 0)
<p>No listings found!</p>
@endif

@foreach ($listings as $listing)
  <div class="bg-gray-50 border border-gray-200 rounded p-6">
                    <div class="flex">
                        <img
                            class="hidden w-24 mr-6 md:block"
                            src="{{ asset('images/noimage.png') }}"
                            alt=""
                        />
                        <div>
                            <h3 class="text-2xl">
                                <a href="/listings/{{ $listing->id }}">{{ $listing->name }}</a>
                            </h3>
                         
                            <ul class="flex">
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    <h3>{{ $listing->city }}</h3>
                                </li>
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    <h2>{{ $listing->country }}</h2>
                                </li>
                               
                            </ul>
                          
                        </div>
                    </div>
                </div>
@endforeach

</div>

@endsection
 