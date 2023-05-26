<!DOCTYPE html>
<html>
    <head>
        <title>Feedback</title>
    </head>
    <body>
        <h1>{{ $product->getName() }}</h1>
        <div>
            <img src="{{ $product->getImg() }}">
        </div>
        <div>Description: {{ $product->getDescription()  }}</div>
        <div>Price: {{ $product->getPrice() }}</div>
    </body>
</html>
