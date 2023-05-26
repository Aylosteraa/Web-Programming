<!DOCTYPE html>
<html>
<head>
    <title>Example</title>
</head>
<body>
    <header style="height: 50px; padding-top: 10px; margin-bottom: 20px; background-color: powderblue">
        <div style="font-size: 25px">Views</div>
    </header>
    <div>@yield('title')</div>
    <div style="display: flex">
        @yield('child')
    </div>
</body>
</html>
