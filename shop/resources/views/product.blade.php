@extends('header_footer')

@section('css_links')
    <link rel="stylesheet" href="{{ asset('css/product_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/row_product_style.css') }}">
@endsection

@section('page')
    <!-- About product part starts -->

    <div class="container product__inform">
        <div id="mobile__path">
            <div class="group__two__elem">
                <div class="path">
                    <a href="/catalog">Каталог</a>
                    @if($categories==null)
                        <div></div>
                    @else
                    @foreach($categories as $category)
                        <img src="{{ asset('image/svg/down-arrow.svg') }}" alt="Arrow">
                        <a href="/catalog/{{$category->id}}">{{$category->name}}</a>
                    @endforeach
                    @endif
                </div>
                <div class="single__title">{{$flower->name}}</div>
            </div>
        </div>

        <div class="product__image">

            <div class="single__stickers">
                @if($flower->discount)
                    <div>
                        <img src="{{ asset('image/icons/discount.svg') }}" alt="discount">
                    </div>
                @endif

                @if($flower->new)
                    <div>
                        <img src="{{ asset('image/icons/new.svg') }}" alt="new">
                    </div>
                @endif

            </div>

            <div class="single__image">
                <img src={{asset($flower->image)}} alt="image">
            </div>
        </div>
        <div class="t__info">
            <div id="desktop__path">
                <div class="group__two__elem" id="desktop__path ">
                    <div class="path">
                        <a href="/catalog">Каталог</a>
                        @foreach($categories as $category)
                            <img src="{{ asset('image/svg/down-arrow.svg') }}" alt="Arrow">
                            <a href="/catalog/{{$category->id}}">{{$category->name}}</a>
                        @endforeach
                    </div>
                    <div class="single__title">{{$flower->name}}</div>
                </div>
            </div>

            <div class="group__two__elem">
                <div class="single__price">
                    @if($flower->new_price)
                        <div class="new__pr">{{$flower->new_price}} грн</div>
                        <div class="old__pr">{{$flower->price}} грн</div>
                    @else
                        <div class="new__pr">{{$flower->price}} грн</div>
                    @endif
                </div>
                <div class="user__do">
                    <form action="/addToCart" method="POST">
                        @csrf
                        <input type="hidden" name="flower_id" value={{$flower->id}}>
                        <button type = "submit">Замовити</button>
                    </form>

                    <a href="/{{$flower->id}}/review_form">
                        <img src="{{ asset('image/icons/feedback.svg') }}" alt="feedback">
                    </a>
                </div>
            </div>
            @if($flower->decoration!=null || $flower->cont_flowers!=null)
            <div class="composition">
                <p class="title__composition">Склад</p>
                @if($flower->cont_flowers!=null)
                    <div class="cont">
                        <p>Квіти:</p>
                        <p>{{$flower->cont_flowers}}</p>
                    </div>
                @endif
                @if($flower->decoration!=null)
                    <div class="cont">
                        <p>Упакування:</p>
                        <p>{{$flower->decoration}}</p>
                    </div>
                @endif
                @endif
            </div>
        </div>

    </div>

    <!-- About product part ends -->

    <!-- Recomendation products part starts -->
@if($recommendationsSlides->isEmpty())
    <div></div>
@else
    <section class="recomendation">
        <div class="product__line">
            <div class="arrow__prev" >
                <img  src="{{ asset('image/svg/prev.svg') }}" alt="Previous" onclick="changeSlide1(-1)">
            </div>

            <div class="wrapper">

                <div class="category__title">
                    <h2>Рекомендації</h2>
                    <img src="{{ asset('image/svg/Line.svg') }}" alt="Line">
                </div>

                <div class="product__row" id="slider1">
                    @foreach($recommendationsSlides as $slide)
                        <div class="slide">
                            <div class="product__slide">
                                @foreach($slide as $flower)
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
                                                    <img src="{{asset($flower->image)}}" alt="Product-1">
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
                                                <button class="btn__card">Додати у кошик</button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <a class="arrow__next" >
                <img src="{{ asset('image/svg/next.svg') }}" alt="Next" onclick="changeSlide1(1)">
            </a>
            <div class="scroll">
                <img src="./image/svg/scroll.svg" alt="Scroll">
            </div>
        </div>

    </section>
@endif
    <!-- Recomendation products part ends -->

    <!-- Feedbacks part starts -->
@if($reviews->isEmpty())
    <div></div>
@else

    <div class="container feedbacks">
        <h2>Відгуки</h2>
        <div class="two__feedbacks">
            @foreach($reviews as $review)
                <div class="feedback__form">
                    <div class="user__name">{{$review->user_name}}</div>
                    <div class="date">{{$review->created_at->format('d.m.Y')}}</div>
                    <p class="feedback__p">{{$review->comment}}</p>
                </div>
            @endforeach
        </div>
        <a href="/{{$flower->id}}/review_form" class="your__feed">
            <div class="add__feedback">
                <img src="{{ asset('image/icons/feedback.svg')}}" alt="feedback">
                <div class="your__feed">Залишити свій відгук</div>
            </div>
        </a>
    </div>
@endif

    <script src="{{asset('js/slider.js')}}">

    </script>

    <!-- Feedbacks part ends -->
@endsection
