@props(['listing'])

    <x-card>

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

        
    </x-card>
 
