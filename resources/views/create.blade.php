@extends('layouts.app')

@section('title', 'Add task')

@section('styles')
    <style>
        .error-message {
            color: red;
            font-size: 80%;
        }
    </style>
@endsection

@section('content')

    @include('form');

@endsection
