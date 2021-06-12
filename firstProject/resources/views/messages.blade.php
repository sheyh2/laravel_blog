@extends("layouts.app")

@section("title-block")
    Сообщении
@endsection

@section("content")
    <h1>Все сообщение</h1>
    @foreach($data as $el)
        <div class="alert alert-info">
            <h3>{{ $el->subject }}</h3>
            <p>{{ $el->email }}</p>
            <p><small>{{ $el->created_at }}</small></p>
            <a href="{{ route('messages' , [$el->id]) }}"><button class="btn btn-warning">Читать больше</button></a>
        </div>
    @endforeach
@endsection