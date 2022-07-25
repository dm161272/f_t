@extends('layout')

@section('content')

<x-card class="p-10">
    <div class="flex flex-row justify-center items-center">
        <div  class="text-2xl font-bold uppercase mb-6">Manage s</div>
    
        <div class="w-5 mb-6"><img src="{{ asset('images/soccerballnoshadow.svg') }}" alt="logo ball" class="logo"></div>
        <div class="text-2xl font-bold uppercase mb-6">ccer team</div>
    </div>

    <table class="w-full table-auto rounded-sm">
        <tbody>
            @unless ($listings->isEmpty())
            @foreach ($listings as $listing)
               
            <tr class="border-gray-300">
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                    <a href="/listings/{{ $listing->id }}">
                       {{$listing->name}}
                    </a>
                </td>
                <td
                class="px-4 py-8 border-t border-b border-gray-300 text-lg"
            >
                <a
                    href="/listings/{{$listing->id}}/add_player"
                    class="text-blue-400 px-6 py-2 rounded-xl"
                    ><i
                        class="fa-solid fa-pen-to-square"
                    ></i>
                    Add player</a
                >
            </td>
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                    <a
                        href="/listings/{{$listing->id}}/edit"
                        class="text-blue-400 px-6 py-2 rounded-xl"
                        ><i
                            class="fa-solid fa-pen-to-square"
                        ></i>
                        Edit</a
                    >
                </td>
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                <form method="POST" action="/listings/{{$listing->id}}">
                    @csrf
                   @method('DELETE')
                    <button class="text-red-500"><i class="fa-solid fa-trash"></i>
                    Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            @else
            <tr class="border gray 300">
                <td class="px-4 py08 border-t border-b">
                    <p>No teams assigned to this user!</p>
                </td>
            </tr>
           @endunless
        </tbody>
    </table>
</x-card>

@endsection