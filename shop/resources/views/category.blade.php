@extends('cataloge')

@section('category')

    <img class="cat__arrow" src="{{asset('image/svg/category-arrow.svg')}}">
    <h1>{{$category->name}}</h1>
@endsection
