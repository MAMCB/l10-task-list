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
            <h1 class="text-6xl p-6">{{$task->title}}</h1>
          

            

        </section>
        <section>
            
             
                    
                        <div>
                           
                            <p>{{$task->long_description?($task->long_description):($task->description)}}</p>
                        </div>
                       
                
            
           
        </section>
    </body>
</html>