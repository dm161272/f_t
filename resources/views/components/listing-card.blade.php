@props(['listing'])

    <x-card>

        <div class="flex">
            <img
                class="hidden w-24 mr-6 md:block"
               
                src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/noimage.png')}}" alt=""/>
            
            <div>
                <h3 class="text-2xl">
                    <a href="/listings/{{ $listing->id }}">{{ $listing->name }}</a>
                </h3>
             
                <ul class="flex">
                    <li
                        class="flex items-center justify-center bg-sky-500 text-white rounded-xl py-1 px-3 mr-2 text-xs"
                    >
                        <h3>{{'City: ' . $listing->city }}</h3>
                    </li>
                    <li
                        class="flex items-center justify-center bg-sky-500 text-white rounded-xl py-1 px-3 mr-2 text-xs"
                    >
                        <h2>{{'Country: ' . $listing->country }}</h2>
                    </li>
                   
                </ul>
              
            </div>
        </div>

        
    </x-card>
 
