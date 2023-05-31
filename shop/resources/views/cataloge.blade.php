@extends('products_container')

@section('additional')
        <!-- Title part starts -->


    <div class="cataloge__title">
        <div class="path">
            <h1><a href="/catalog">Каталог</a></h1>
            @yield('category')
        </div>
        <img src="{{asset('image/svg/catalogeLine.svg')}}" alt="Line">
    </div>
    <!-- Title part ends -->

    <form class="container filter" action="/filter" method="GET">
        @csrf
        <div class="filter__by">
            <span>Сортувати за</span>
            <select class="select__filter" name="sort">
                <option class="sort__option">Cортування</option>
                <option value="popular">За популярністю</option>
                <option value="rising">За зростанням цін</option>
                <option value="falling">За спаданням цін</option>
            </select>
        </div>

        <div class="filter__buttons">
            <label class="checkbox__container">Акції
                <input type="checkbox" name="discount">
                <span class="checkmark"></span>
            </label>

            <label class="checkbox__container">Новинки
                <input type="checkbox" name="new">
                <span class="checkmark"></span>
            </label>

            <label class="checkbox__container">Хіти продажів
                <input type="checkbox" name="bestseller">
                <span class="checkmark"></span>
            </label>

            <label class="checkbox__container">В наявності
                <input type="checkbox">
                <span class="checkmark" name="avail"></span>
            </label>
        </div>

        <div class="price__filter">
            <span>Ціна від</span>
            <input type="text" name="min" placeholder="min">
            <span>до</span>
            <input type="text" name="max" placeholder="max">
            <button type="submit">OK</button>
        </div>

    </form>
@endsection
