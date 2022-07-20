   <section
            class="relative h-72 bg-laravel flex flex-col justify-center align-center text-center space-y-4 mb-4"
        >


            <div class="z-10">
               <div class="flex flex-row  justify-center items-end">
                    <div>
                    <h1 class="text-6xl font-bold uppercase text-white">
                    SOCCER</h1>
                    </div>
                    <div>
                    <img class="w-12" src="{{ asset('images/soccerballnoshadow.svg') }}" alt="logo ball" class="logo">
                    </div>
                    <div>
                        <h1 class="text-6xl font-bold uppercase text-black">TEAMS</h1>
                    </div>
               </div>
        
                <p class="text-2xl text-gray-200 font-bold my-4">
                    | management |
                </p>
                <div>
                    <x-flash-message />
                </div>
            </div>
            
        </section>