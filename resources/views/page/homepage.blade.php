@extends('layout')

@section('content')
    <div class="flex flex-col gap-10">
        <livewire:widgetMyTickets>
        <livewire:list-tickets grouped="assignee">
    </div>
@stop