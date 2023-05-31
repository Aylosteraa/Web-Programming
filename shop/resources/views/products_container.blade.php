@extends('header_footer')

@section('css_links')
    <link rel="stylesheet" href="{{ asset('css/cataloge_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/row_product_style.css') }}">
@endsection

@section('page')
    <!-- Search part starts -->
    <div class="move">
        <form class="input__form" action="/search" method="GET">
            @csrf
            <input class="input__field" name="search" type="text" placeholder="Пошук">
            <div class="search__icon">
                <button type="submit"><img src="{{ asset('image/icons/search-interface-symbol.svg') }}" alt="Search"></button>
            </div>
        </form>
    </div>

    <!-- Search part ends -->
    @yield('additional')
    @if($flowers->isEmpty())
        <p style="padding: 35px 75px 500px; font-size: 20px; color: #77878B">Нічого не знайдено</p>
    @else
    <div class="cataloge__products">

        @foreach($flowers as $flower)
            <div class="product">
                <div class="product__container">
                    <div  class="product_image">
                        <div class="stickers">

                            @if($flower->discount)
                                <div class="discount">Акція</div>
                            @endif

                            @if($flower->new)
                                <div class="new">Новинка</div>
                            @endif

                        </div>
                        <a href="/product/{{$flower->id}}" class="image">
                            <img src={{ asset($flower->image) }} alt="Product-1">
                        </a>
                    </div>

                    <div class="product__info">
                        <a href="/product/{{$flower->id}}" class="title">{{$flower->name}}</a>
                        <div class="price">
                            @if($flower->new_price)
                                <div class="new__price">{{$flower->new_price}} грн</div>
                                <div class="old__price">{{$flower->price}} грн</div>
                            @else
                                <div class="new__price">{{$flower->price}} грн</div>
                            @endif
                        </div>
                        <form action="/addToCart" method="POST">
                            @csrf
                            <input type="hidden" name="flower_id" value={{$flower->id}}>
                            <button class="btn__card" type = "submit">Додати у кошик</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @if(count($flowers) > 40)
        <p class="more">Показати більше</p>
    @endif
    @endif
@endsection
