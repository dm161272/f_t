@extends('layout')

@section('content')
@include('partials._search')

<h2>{{ $listing['name  '] }}</h2>


<p>{{ $listing['city'] }}</p>

<p>{{ $listing['country'] }}</p>

<a href="../">Back</a>

@endsection