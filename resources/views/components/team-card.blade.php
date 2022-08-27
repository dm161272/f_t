@props(['team'])

    <x-card>

        <div class="flex">
            <img
                class="hidden w-24 mr-6 md:block"
               
                src="{{$team->logo ? asset('storage/' . $team->logo) : asset('/images/noimage.png')}}" alt=""/>
            
            <div>
                <h3 class="text-2xl">
                    <a href="/teams/{{ $team->id }}">{{ $team->name }}</a>
                </h3>
             
                <ul class="flex">
                    <li
                        class="flex items-center justify-center bg-sky-500 text-white rounded-xl py-1 px-3 mr-2 text-xs"
                    >
                        <h3>{{'City: ' . $team->city }}</h3>
                    </li>
                    <li
                        class="flex items-center justify-center bg-sky-500 text-white rounded-xl py-1 px-3 mr-2 text-xs"
                    >
                        <h2>{{'Country: ' . $team->country }}</h2>
                    </li>
                   
                </ul>
              
            </div>
        </div>

        
    </x-card>
 
