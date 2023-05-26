<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Books</title>
</head>
<body>
<h1>Додати книгу</h1>
<form method="POST" action="/postBook">
    @csrf
    <div>
        <label>Назва</label>
        <input type="text" id="title" name="title">
    </div>
    <div>
        <label>Автор</label>
        <select name="author">
            <option></option>
            @foreach($authors as $author)
                <option value="{{$author->id}}">{{$author->surname}} {{$author->name}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="image">Картинка:</label>
        <input type="text" id="image" name="image">
    </div>
    <div>
        <label for="image">Рік:</label>
        <input type="text" id="year" name="year">
    </div>
    <div>
        <label>Видавництво</label>
        <select name="publishHouse">
            <option></option>
            @foreach($publishHouses as $publishHouse)
                <option value="{{$publishHouse->id}}">{{$publishHouse->title}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="description">Опис</label>
        <textarea id="description" name="description"></textarea>
    </div>
    <div>
        <button type="submit">Додати книгу</button>
    </div>
</form>
</body>
</html>
