@extends('products_container')

@section('additional')
    <!-- Title part starts -->

    <div class="cataloge__title">
        <div class="path">
            <h1><a href="/catalog">Результати за пошуком "{{$search}}":</a></h1>
        </div>
        <img src="./image/svg/catalogeLine.svg" alt="Line">
    </div>
    <!-- Title part ends -->
@endsection
