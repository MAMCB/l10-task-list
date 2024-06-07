@extends("layouts.app")
@section("content")
        <section class="bg-gray-400 p-9 rounded-lg">
            <h1 class="text-6xl p-6">{{$task->title}}</h1>
        

        </section>
        <section>
            
            <div>
                           
                <p>{{$task->long_description?($task->long_description):($task->description)}}</p>
                <p>Created at: {{$task->created_at}}</p>
                <p>Updated at: {{$task->updated_at}}</p>
            </div>
                       
              
        </section>
@endsection
 