@extends("layouts.app")

@section("title-block")
    Contact
@endsection

@section("content")
    <h1>Страница Contact</h1>
    <form action="/contact/submit" method="post">
        
    </form>
@endsection

@section("aside")
@parent
    <p>Дополнительный текст</p>
@endsection