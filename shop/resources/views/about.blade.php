<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flowerbed</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/nav_bar_style.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/row_product_style.css">
    <link rel="stylesheet" href="css/footer_style.css">
</head>
<body>

<!-- Header part starts -->
<div id="parent__intro">

    <header class="container header__nav">
        <div class="header_wrapper">
            <div class="logo">
                <a href="./index.html">
                    <img src="./image/svg/logo.svg" alt="Flower bed">
                </a>
            </div>

            <div class="hamburger__menu">
                <img src="./image/icons/hamburger.svg" alt="ham">
            </div>

            <div class="nav__bar">

                <div class="telephon_numbers">
                    <img src="./image/icons/telephone.svg" alt="telephone">
                    <span>+ 38 067 056 53 45</span>
                    <span>+ 38 096 041 00 32</span>
                </div>

                <div class="second_level">
                    <nav class="navigation">
                        <ul class="nav_list">
                            <li>Квіти</li>
                            <li>
                                <a href="./cataloge.html">Букети</a>
                            </li>
                            <li>
                                <a href="./cataloge.html">Квіти в коробці</a>
                            </li>
                            <li>
                                <a href="./cataloge.html">Квіти в коробці</a>
                            </li>
                            <li>Привід</li>
                            <li>Для кого</li>
                        </ul>
                    </nav>

                    <div class="header_icons">
                        <img src="./image/icons/heart.svg" alt="favorite">
                        <img class="prof" src="./image/icons/user.svg" alt="profile">
                        <img src="./image/icons/cart.svg" alt="cart">
                    </div>
                </div>
            </div>

        </div>
    </header>

    <!-- Header part ends -->

    <!-- Intro part starts -->

    <section class="intro">
        <div class="container intro__wrapper">
            <h1 class="motto">Розквітай разом з нами: придбай свої квіти сьогодні!</h1>
            <a href="./catalog">
                <button class="btn__cataloge">До каталогу</button>
            </a>
        </div>
    </section>

    <!-- Intro part ends -->

</div>

<!-- Bestseller part starts -->

<section class="bestseller">
    <div class="product__line">
        <div class="arrow__prev" >
            <img  src="./image/svg/prev.svg" alt="Previous" onclick="changeSlide1(-1)">
        </div>

        <div class="wrapper">

            <div class="category__title">
                <h2>Хіти продажів</h2>
                <img src="./image/svg/Line.svg" alt="Line">
            </div>

            <div class="product__row" id="slider1">
                @foreach($bestsellersSlides as $slide)
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
                                        <img src={{$flower->image}} alt="Product-1">
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
            <img src="./image/svg/next.svg" alt="Next" onclick="changeSlide1(1)">
        </a>
        <div class="scroll">
            <img src="./image/svg/scroll.svg" alt="Scroll">
        </div>
    </div>

</section>

<!-- Bestseller part ends -->

<!-- Discount part starts -->

<section class="discount_products">

    <div class="product__line">
        <a class="arrow__prev" >
            <img  src="./image/svg/prev.svg" alt="Previous" onclick="changeSlide2(-1)">
        </a>

        <div class="wrapper">

            <div class="category__title">
                <h2>Акції</h2>
                <img src="./image/svg/Line.svg" alt="Line">
            </div>

            <div class="product__row" id="slider2">
                @foreach($discountsSlides as $slide)
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
                                                <img src={{$flower->image}} alt="Product-1">
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
            <img src="./image/svg/next.svg" alt="Next" onclick="changeSlide2(1)">
        </a>
        <div class="scroll">
            <img src="./image/svg/scroll.svg" alt="Scroll">
        </div>
    </div>

</section>

<!-- Discount part ends -->

<!-- New part starts -->

<section class="new__products">

    <div class="product__line">
        <a class="arrow__prev" >
            <img  src="./image/svg/prev.svg" alt="Previous" onclick="changeSlide3(-1)">
        </a>

        <div class="wrapper">

            <div class="category__title">
                <h2>Новинки</h2>
                <img src="./image/svg/Line.svg" alt="Line">
            </div>

            <div class="product__row" id="slider3">
                @foreach($newsSlides as $slide)
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
                                                <img src={{$flower->image}} alt="Product-1">
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
            <img src="./image/svg/next.svg" alt="Next" onclick="changeSlide3(1)">
        </a>
        <div class="scroll">
            <img src="./image/svg/scroll.svg" alt="Scroll">
        </div>
    </div>
</section>

<!-- New part ends -->

<!-- About_us part starts -->

<section class="container">
    <div class="wrapper__about">
        <h2 class="center">Про нас</h2>

        <div class="text__about">
            <p>
                Наш квітковий магазин "Flower Bed" вже успішно працює
                на ринку протягом п'яти років.
                "Flower Bed" пропонує великий вибір квітів у залежності
                від пори року та попиту клієнтів. У нашому асортименті можна знайти
                різні види квітів, такі як троянди, ромашки, іриси, хризонтеми,
                орхідеї та інші.
            </p>
            <p>
                Ми працюємо з досвідченим та творчим персоналом,
                який завжди готовий допомогти клієнтам вибрати найкращі квіти для їхніх потреб.
                Наша п'ятирічна успішна робота на ринку квітів
                свідчить про високу якість наших послуг та продуктів,
                що пропонуються.
            </p>
        </div>

        <div class="florist__image">
            <img src="./image/jpg/ac06f605d6c04b728c453737d08bed821507756533-960x560-1.jpg" alt="Florist-1">
            <img src="./image/jpg/florist-1568x1053.jpg.optimal.jpg" alt="Florist-2">
        </div>
    </div>
</section>

<!-- About_us part ends -->

<!-- Footer part starts -->

<section class="container footer">

    <div class="footer__wrapper">
        <div class="client">
            <p class="main__text">Клієнтам</p>
            <a href="./">Про нас</a>
            <a href="./info">Конфіденційність даних</a>
            <a href="./info">Повернення коштів</a>
            <a href="./info">Оплата та доставка</a>
            <a href="">Контактна інформація</a>
        </div>
        <div class="contacts">
            <p class="main__text">Контактна інформація</p>
            <div class="group tele">
                <img src="./image/icons/tele.svg" alt="Telephone">
                <div class="block">
                    <p>+ 38 067 056 53 45</p>
                    <p>+ 38 096 041 00 32</p>
                </div>
            </div>
            <div class="group email">
                <img src="./image/icons/email.svg" alt="Email">
                <p>fbshop@gmail.com</p>
            </div>
            <div class="social">
                <div class="social__icons">
                    <a href="https://facebook.com/">
                        <img src="./image/icons/facebook.svg" alt="Facebook">
                    </a>
                    <a href="https://www.instagram.com/">
                        <img src="./image/icons/instagram.svg" alt="Instagram">
                    </a>
                    <a href="https://twitter.com/">
                        <img src="./image/icons/twitter.svg" alt="Twitter">
                    </a>
                </div>
                <p>Ми у соцмережах</p>
            </div>
        </div>
        <div class="continue">
            <div class="group location">
                <img src="./image/icons/location.svg" alt="Location">
                <div class="block">
                    <p>м. Київ</p>
                    <p>вул. Січових Стрільців, 60</p>
                </div>
            </div>
            <div class="group time">
                <img src="./image/icons/clock.svg" alt="Clock">
                <div class="block">
                    <p>Будні: 08:00 - 22:00</p>
                    <p>Вихідні: 09:00 - 20:00</p>
                </div>
            </div>
        </div>

        <div class="addition">
            <img class="footer_logo" src="./image/svg/footer-logo.svg" alt="Logo">
            <div class="brand__group">
                <img src="./image/icons/brand.svg" alt="Brand">
                <div class="block">
                    <p>Flower bed</p>
                    <p>Квітковий магазин</p>
                    <p>2018-2023</p>
                </div>
            </div>
            <div class="payment">
                <img class="master" src="./image/icons/Mastercard-logo.svg" alt="Mastercard">
                <img class="visa" src="./image/icons/Visa-Logo.svg" alt="Visa">
            </div>
        </div>
    </div>

    <script src="js/slider.js">
    </script>

</section>

<!-- Footer part ends -->

</body>
</html>
