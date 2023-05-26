<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{--    <link rel="stylesheet" type="text/css" href="css/category.css">--}}
    <title>Books</title>
</head>
<body>

<div>@yield('title')</div>
    <div class="books">
        @foreach($books as $book)
            <div class="book">
                <div class="image">
                    <img src="{{$book->image}}">
                </div>
                <div class="title">
                    <a href="/book/{{$book->id}}">
                        {{$book->title}}
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
