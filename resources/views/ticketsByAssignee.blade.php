@extends('layout')

@section('content')
    <h1 class="my-6 text-3xl">Tickets</h1>

    <livewire:ListTicketsByAssignee :assigneeId="request()->route()->parameters['assigneeid']">
@stop