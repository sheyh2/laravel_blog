@extends("layouts.app")

@section("title-block")
    Update
@endsection

@section("content")
    <h1>Страница Update</h1>

    <form action="{{ route('update-message', ['id' => $data->id]) }}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Имя:</label>
            <input type="text" name="name" value="{{ $data->name }}" placeholder="Введите имя" class="form-control" id="name">
        </div>

        <div class="form-group">
            <label for="name">email:</label>
            <input type="text" name="email" value="{{ $data->email }}" placeholder="Введите email" class="form-control" id="name">
        </div>

        <div class="form-group">
            <label for="subject">Тема сообщении:</label>
            <input type="text" name="subject" value="{{ $data->subject }}" placeholder="Тема сообщении" class="form-control" id="subject">
        </div>

        <div class="form-group">
            <label for="name">Сообщение:</label>
            <textarea name="message" placeholder="Введите сообщение" class="form-control">{{ $data->message }}</textarea>
        </div><br>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Изменить</button>
            <a href="{{ route('more', ['id' => $data->id]) }}" class="btn btn-warning">Назад</a>
        </div>
    </form>
@endsection

@section("aside")
@parent
    <p>Дополнительный текст</p>
@endsection