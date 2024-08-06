@extends('layout')

@section('title')Отзывы@endsection

@section('review_content')
    <style>
        .custom-textarea {
            width: 100%;
            height: 250px;
            overflow: hidden;
            resize: none;
            white-space: pre-wrap;
            box-sizing: border-box;
        }
    </style>

    <form id="feedback-form" action="submit_form.php" method="post">
        <h1 class="display-5 fw-bold">Оставь свой отзыв!</h1>
        <p class="fs-4">Если мы когда-то работали вместе, оставьте свой отзыв о работе со мной и я его обязательно добавлю. Мне будет очень приятно!</p>
        <div class="bd-example m-0 border-0">

            <div class="row align-items-md-stretch mb-3 ">
                <div class="col-md-6">
                    <label for="exampleFormControlInput1" class="form-label">Имя:</label>
                    <input type="text" class="form-control" name="name" id="name" minlength="2" maxlength="30" placeholder="Эрлих Бахман">
                </div>
                <div class="col-md-6">
                    <label for="exampleFormControlInput1" class="form-label">Компания:</label>
                <input type="text" class="form-control" name="company" id="company" minlength="3" maxlength="30" placeholder="Pied Piper">
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Отзыв:</label>
                <textarea class="form-control custom-textarea" name="message" id="message" minlength="15" maxlength="1000" placeholder="Я помню, как нам было хорошо, а ты?"></textarea>
            </div>
        </div>
        <button class="btn btn-outline-primary text-dark border-black" type="submit">Отправить отзыв</button>
    </form>

    <script>
        document.getElementById('feedback-form').addEventListener('submit', function(event) {
            // Останавливаем отправку формы
            event.preventDefault();

            // Получаем значения полей формы
            var name = document.getElementById('name').value.trim();
            var company = document.getElementById('company').value.trim();
            var feedback = document.getElementById('message').value.trim();

            // Проверяем, заполнены ли все поля
            if (name === '' || company === '' || feedback === '') {
                alert('Пожалуйста, заполните все поля формы.');
            } else {
                alert('Спасибо! Мне было приятно получить фидбек. Хорошего дня!');
                this.reset();
            }
        });
    </script>
@endsection
