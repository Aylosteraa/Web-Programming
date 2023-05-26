@extends('base_view')

@section('child')
    @foreach($colors as $color)
        @if($color == 'red')
            <div style="width: 150px; height: 150px; background-color: red">{{$color}}</div>
        @elseif($color == 'blue')
            <div style="width: 150px; height: 150px; background-color: blue">{{$color}}</div>
        @elseif($color == 'green')
            <div style="width: 150px; height: 150px; background-color: green">{{$color}}</div>
        @else
            <div style="width: 150px; height: 150px; background-color: mediumpurple">{{$color}}</div>
        @endif
    @endforeach
@endsection

@section('title')
    <h1 style="font-size: 34px">Colors</h1>
@endsection

