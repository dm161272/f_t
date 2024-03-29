
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#0ea5e9",
                        },
                    },
                },
            };
        </script>
        <title>SOCCER TEAM MANAGEMENT</title>
    </head>
    <body class="mb-48">
        <div class="bg-sky-500 text-white text-center font-bold uppercase mb-2 py-2">
            @auth
             
                    Welcome{{", " . auth()->user()->f_name . "  " .auth()->user()->l_name . "!"}}  
            @endauth
        </div>
        <nav class="flex justify-end items-center mb-4">
           
            <ul class="flex space-x-6 mr-6 text-lg">
                <li>
                    <a href="/" class="hover:text-laravel"
                        ><i class="fa-solid fa-house"></i>Home</a>
                </li>
                @auth
                <li>
                    <a href="/teams/create" class="hover:text-laravel text-black py-2"><i class="fa-solid fa-people-group"></i>
                        Add team</a>
                </li>
                <li>
                    <a href="/teams/manage" class="hover:text-laravel"
                        ><i class="fa-solid fa-gear"></i>
                        Manage teams</a>
                </li>
                <li>
                    <a href="/games/" class="hover:text-laravel text-black py-2"><i class="fa-solid fa-circle-exclamation"></i>
                        View Matches</a>
                </li>
                <li>
                    <a href="/games/create" class="hover:text-laravel text-black py-2"><i class="fa-solid fa-futbol"></i>
                        Add Match</a>
                </li>
                <li>
                    <a href="/games/manage" class="hover:text-laravel"
                        ><i class="fa-solid fa-ranking-star"></i>
                        Manage Matches</a>
                </li>
                @endauth
                
                <li>
                    <a href="/register" class="hover:text-laravel"
                        ><i class="fa-solid fa-user-plus"></i>Register</a>
                </li>
                <li>
                    <a href="/login" class="hover:text-laravel"
                        ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a>
                </li>
                
                @auth
                <li>
                    <form class="inline" method="POST" action="/logout">
                    @csrf
                    <button type="submit">
                        <i class="fa-solid fa-door-open"></i>
                        Logout
                    </button>
                </form>
                </li>
                @endauth
            </ul>
        </nav>

        <main>
   @yield('content')
    	</main>

 <footer
            class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center"
        >
            <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>

    
 </footer>



</body>
</html>