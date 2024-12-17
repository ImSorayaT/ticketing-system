@extends('layout')
@section('content')
    <main class="max-w-screen-lg mx-auto mt-10 bg-sidebar p-10 rounded-lg">
        <livewire:single-ticket :id="$id">
    </main>
@stop
