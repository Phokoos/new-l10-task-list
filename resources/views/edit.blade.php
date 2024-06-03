@extends('layouts.app')

@section('title', 'Edit task')

@section('styles')
    <style>
        .error-message {
            color: red;
            font-size: 80%;
        }
    </style>
@endsection

@section('content')
{{--    <form action="{{ route('tasks.update', $task->id) }}" method="post">--}}
{{--        @csrf--}}
{{--        @method('PUT')--}}
{{--        <div>--}}
{{--            <label for="title">--}}
{{--                Title--}}
{{--            </label>--}}
{{--            <input type="text" name="title" value="{{$task->title}}" id="title">--}}
{{--            @error('title')--}}
{{--            <p class="error-message">{{ $message }}</p>--}}
{{--            @enderror--}}
{{--        </div>--}}

{{--        <div>--}}
{{--            <label for="description">--}}
{{--                Description--}}
{{--            </label>--}}
{{--            <textarea name="description" id="description" rows="5">--}}
{{--                {{$task->description}}--}}
{{--            </textarea>--}}
{{--            @error('description')--}}
{{--            <p class="error-message">{{ $message }}</p>--}}
{{--            @enderror--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <label for="long_description">--}}
{{--                Long Description--}}
{{--            </label>--}}
{{--            <textarea name="long-description" id="long_description" rows="5">--}}
{{--                {{$task['long-description']}}--}}
{{--            </textarea>--}}
{{--            @error('long-description')--}}
{{--            <p class="error-message">{{ $message }}</p>--}}
{{--            @enderror--}}
{{--        </div>--}}

{{--        <div>--}}
{{--            <button type="submit">Add Task</button>--}}
{{--        </div>--}}
{{--    </form>--}}
    @include('form', ['task' => $task]);
@endsection
