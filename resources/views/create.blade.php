@extends("layouts.app")
@section("content")
<div><h1>Create task form</h1></div>
<form method="POST" action="{{route('tasks.store')}}">
    @csrf
    <div class="flex gap-4">
        <label for="title">Title</label>
        <input class="bg-gray-500 rounded-lg" type="text" name="title" id="title" required>
    </div>
    <div class="flex gap-4">
        <label class="self-center" for="description">Description</label>
        <textarea class="rounded-lg" name="description" id="description" rows="5" required></textarea>
    </div>
    <div>
        <label for="long_description">Long description</label>
        <textarea name="long_description" id="long_description" rows="10"></textarea>
    </div>
    <div>
        <button type="submit">Create task</button>
    </div>
</form>
@endsection