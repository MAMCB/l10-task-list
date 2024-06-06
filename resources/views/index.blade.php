<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Main</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
       @vite('resources/css/app.css')
    </head>
    <body>
        <section class="bg-gray-400 p-9 rounded-lg">
            <h1 class="text-6xl text-red-500 p-6">Welcome to the main page</h1>
            @isset($name)
                <p class="text-4xl font-bold p-6">Welcome {{$name}}</p>
            @endisset
            

        </section>
    </body>
</html>