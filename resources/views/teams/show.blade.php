@extends('layout')

@section('content')
@include('partials._logo')

<div class="mx-4">
    <x-slot class="p-10">

       Content

    </x-slot> 
       
</div>

<a href="..\" class="inline-block text-black mt-4 ml-4"
><i class="fa-solid fa-arrow-left"></i> Back
</a>
@endsection