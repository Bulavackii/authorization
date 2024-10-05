@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Информация о пользователе</h1>
        <p>ID: {{ $user->id }}</p>
        <p>Имя: {{ $user->name }}</p>
        <p>Email: {{ $user->email }}</p>
    </div>
@endsection