@extends('layout')

@section('title')Главная страница@endsection

@section('main_content')
    <div class="p-5 mb-4 bg-body-tertiary rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Вас приветствует Web-Developer Роман Шевцов!</h1>
            <p class="fs-4">Это тестовая страница написанная на языке программирования PHP, c использованием фреймворков Laravel и Bootstrap</p>
            <a class="btn btn-outline-primary text-dark border-black" href="/about">Обо мне</a>
        </div>
    </div>

    <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <div class="h-100 p-5 rounded-3">
                <h2>Изучаю РHP</h2>
                <p>Ознакомьмесь что приходится изучать PHP программисту</p>
                <a class="btn btn-outline-primary text-dark border-black" href="/joke">Подробнее</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="h-100 p-5 rounded-3">
                <h2>Изучаю Java Script</h2>
                <p>Ознакомьмесь что приходится изучать JS программисту</p>
                <a class="btn btn-outline-primary text-dark border-black" href="/joke">Подробнее</a>
            </div>
        </div>
    </div>
@endsection
