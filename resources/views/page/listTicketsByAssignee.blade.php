@extends('layout')

@section('content')
    <div class="flex flex-col gap-10">
        <livewire:widgetMyTickets>
        <livewire:ListTicketsByAssignee :assigneeId="request()->route()->parameters['assigneeid']">
    </div>
@stop