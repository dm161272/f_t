<!DOCTYPE html>
<html lang="en">
<head>

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

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404:Page not found</title>
</head>
<body>
    
<div
  class="
    flex
    items-center
    justify-center
    w-screen
    h-screen
    bg-sky-500
  "
>
  <div class="px-40 py-20 bg-white rounded-md shadow-xl">
    <div class="flex flex-col items-center">
      <h1 class="font-bold text-sky-500 text-9xl">404</h1>

      <h6 class="mb-2 text-2xl font-bold text-center text-gray-800 md:text-3xl">
        <span class="text-red-500">Oops!</span> Page not found
      </h6>

      <p class="mb-8 text-center text-gray-500 md:text-lg">
        The page you’re looking for doesn’t exist.
      </p>

      <a
        href="/"
        class="px-6 py-2 text-sm font-semibold text-white bg-sky-500"
        >Go home</a
      >
    </div>
  </div>
</div>

</body>
</html>