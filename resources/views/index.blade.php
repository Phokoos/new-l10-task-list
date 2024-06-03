@extends('layouts.app')

@section('title', 'The list of tasks')
@section('content')
    <nav class="mb-4">
        <a href="{{route('tasks.create')}}"
           class="link">Add new!</a>
    </nav>


    @forelse($tasks as $task)
        <a href="{{route('tasks.show', $task->id)}}"
            @class(['font-bold' => !$task->completed , 'line-through' => $task->completed])
        >{{$task->title}}</a>
        <br>
    @empty
        <h2>We haven't tasks</h2>
    @endforelse

    @if($tasks->count())
        <nav class="mt-4">
            {{$tasks->links()}}
        </nav>
    @endif
@endsection
