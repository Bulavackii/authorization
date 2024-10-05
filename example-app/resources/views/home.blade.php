@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Добро пожаловать на главную страницу</h1>
        <p>Вы успешно авторизованы!</p>

        <a href="{{ route('user') }}">Перейти к информации о пользователе</a>
    </div>
@endsection