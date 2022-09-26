@extends('layout')

@section('content')
@include('partials._logo')

<x-card class="p-10">
    <div class="flex flex-row justify-center items-center">
        <div  class="text-2xl font-bold uppercase mb-6">Manage matches</div>

    </div>

    <table class="w-full table-auto rounded-sm">
        <tbody>
            <!--{{var_dump($games)}} -->
            @unless ($games->isEmpty())
            @foreach ($games as $game)
               
            <tr class="border-gray-300 text-lg">
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                    <a href="/games/{{ $game->id }}">
                       {{$game->name}}
                    </a>
                </td>
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                    <a
                        href="/games/{{$game->id}}/edit"
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
                <form method="POST" action="/games/{{$game->id}}">
                    @csrf
                   @method('DELETE')
                    <button class="text-red-500"><i class="fa-solid fa-trash"></i>
                    Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            @else
            <tr class="border-gray-300">
                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                    <p class="text-center">No matches assigned to this user!</p>
                </td>
            </tr>
           @endunless
        </tbody>
    </table>
</x-card>

@endsection