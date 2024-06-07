@extends("layouts.app")
@section("content")
        <section class="bg-gray-400 p-9 rounded-lg">
            <h1 class="text-6xl p-6">List of tasks</h1>
          

            

        </section>
        <section>
            
             
            @forelse($tasks as $task)
                <div>
                    <a href="{{route("tasks.show",["id"=>$task->id])}}">
                        <h1 class="text-4xl">{{$task->title}}</h1>
                    </a>
                            
                    <p>{{$task->description}}</p>
                </div>
                @empty
                <p>No tasks available</p>
            @endforelse
                
            
           
        </section>
@endsection
   