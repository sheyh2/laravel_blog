@extends("layouts.app")

@section("title-block")
    {{$data->subject}}
@endsection

@section("content")
    <h1>{{$data->subject}}</h1>
        <div class="alert alert-info">
            <p>{{$data->message}}</p>
            <p>{{ $data->email }} - {{ $data->neme }}</p>
            <p><small>{{ $data->created_at }}</small></p>
            <a href="{{ route('contact-message', ['id' => $data->id]) }}"><button class="btn btn-primary">Редактировать</button></a>
            <a href="{{ route('delete-message', ['id' => $data->id]) }}"><button class="btn btn-danger">Удалить</button></a>
            <a href="{{route('messages')}}"><button class="btn btn-warning">Назад</button></a>
        </div>
@endsection