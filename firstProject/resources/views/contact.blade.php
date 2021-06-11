@extends("layouts.app")

@section("title-block")
    Contact
@endsection

@section("content")
    <h1>Страница Contact</h1>

    

    <form action="{{@route('submit')}}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Имя:</label>
            <input type="text" name="name" placeholder="Введите имя" class="form-control" id="name">
        </div>

        <div class="form-group">
            <label for="name">email:</label>
            <input type="text" name="email" placeholder="Введите email" class="form-control" id="name">
        </div>

        <div class="form-group">
            <label for="subject">Тема сообщении:</label>
            <input type="text" name="subject" placeholder="Тема сообщении" class="form-control" id="subject">
        </div>

        <div class="form-group">
            <label for="name">Сообщение:</label>
            <textarea name="message" placeholder="Введите сообщение" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Отправить</button>
        </div>
    </form>
@endsection

@section("aside")
@parent
    <p>Дополнительный текст</p>
@endsection