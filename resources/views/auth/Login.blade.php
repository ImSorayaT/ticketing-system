@extends('layout')
@section('content')
    <main class="max-w-screen-lg mx-auto mt-10 bg-[#2b2e2f] p-10 rounded-lg">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <label>email</label><br>
            <input type="email" name="email"><br>
            <label>Password</label><br>
            <input type="password" name="password"><br>
            <input type="checkbox" name="remember">
            <input type="submit">
        </form>
    </main>
@stop
