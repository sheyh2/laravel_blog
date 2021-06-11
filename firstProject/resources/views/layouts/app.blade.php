<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <title>@yield("title-block")</title>
</head>
<body>
    <div class="container py-3">
    @include("include.header")

    @if(Request::is('/'))
        @include("include.hero")
    @endif

    <div class="container md-5">

        @include('include.messages')

        <div class="row">
            <div class="col-8">
                @yield("content")
            </div>
            <div class="col-4">
                @include('include.aside')
            </div>
        </div>
    </div>

    @include("include.footer")
</body>
</html>