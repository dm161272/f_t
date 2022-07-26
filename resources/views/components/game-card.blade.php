@props(['game'])

    <x-card>

        <div class="flex">
            
            <div>
                <h3 class="text-2xl">
                    <a href="/games/{{ $game->id }}">{{ $game->name }}</a>
                </h3>
             
                <ul class="flex">
                    <li
                        class="flex items-center justify-center bg-sky-500 text-white rounded-xl py-1 px-3 mr-2 text-xs"
                    >
                        <h3>{{'Location: ' . $game->location }}</h3>
                    </li>
                    <li
                        class="flex items-center justify-center bg-sky-500 text-white rounded-xl py-1 px-3 mr-2 text-xs"
                    >
                        <h2>{{'Team 1: ' . $game->listings_id1 }}</h2>
                    </li>
                    <li
                        class="flex items-center justify-center bg-sky-500 text-white rounded-xl py-1 px-3 mr-2 text-xs"
                    >
                        <h2>{{'Team 2: ' . $game->listings_id2 }}</h2>
                    </li>
                   
                </ul>
              
            </div>
        </div>

        
    </x-card>
 
