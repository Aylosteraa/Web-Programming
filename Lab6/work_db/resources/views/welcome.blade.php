<!DOCTYPE html>
<html lang="uk">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Books</title>
    </head>
    <body>
    <h1>{{$book->title}}</h1>
    <div>
        <div>Автор: </div>
        <div>
            <a href="/author/{{$author->id}}">
                {{$author->name}} {{$author->surname}}
            </a>
        </div>
    </div>
    <div>
        <img src="{{$book->image}}">
    </div>
    <div>
        <div>Рік: </div>
        <div>{{$book->year}}</div>
    </div>
    <div>

            <div>Видавництво: </div>
            @foreach($publishHouses as $publishHouse)
                <div>
                    <a href="/publish/{{$publishHouse->id}}">
                        {{$publishHouse->title}}
                    </a>
                </div>
            @endforeach

    </div>
    <div>
        <div>Опис:</div>
        <div>{{$book->description}}</div>
    </div>
    </body>
</html>
