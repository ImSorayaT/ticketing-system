@extends('layout')

@section('content')
    <livewire:ListTicketsByAssignee :assigneeId="request()->route()->parameters['assigneeid']">
@stop