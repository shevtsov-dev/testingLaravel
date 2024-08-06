<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container py-3">
    <header>
        <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom bg">
            <a href="/" class="d-flex align-items-center link-body-emphasis text-decoration-none">
                <span class="fs-4">RomanShevtsov.Dev Laravel</span>
            </a>

            <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="/">Главная</a>
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="/about">Обо мне</a>
            </nav>
            <a class="btn btn-outline-primary text-dark border-black" href="/review">Отзывы</a>
        </div>
    </header>
</div>

<div class="container mt-3">
    @yield('main_content')
</div>

<div class="container mt-3">
    @yield('joke_content')
</div>

<div class="container mt-3">
    @yield('review_content')
</div>

</body>
</html>

