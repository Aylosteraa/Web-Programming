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
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav_bar_style.css') }}">
    @yield('css_links')
    <link rel="stylesheet" href="{{ asset('css/footer_style.css') }}">
</head>
<body>
<!-- Header part starts -->
<header class="container header__nav">
    <div class="header_wrapper">
        <div class="logo">
            <a href="/">
                <img src="{{asset('./image/svg/logo.svg')}}" alt="Flower bed">
            </a>
        </div>

        <div class="hamburger__menu">
            <img src="{{asset('./image/icons/hamburger.svg')}}" alt="ham">
        </div>

        <div class="nav__bar">

            <div class="telephon_numbers">
                <img src="{{asset('./image/icons/telephone.svg')}}" alt="telephone">
                <span>+ 38 067 056 53 45</span>
                <span>+ 38 096 041 00 32</span>
            </div>

            <div class="second_level">
                <nav class="navigation">
                    <ul class="nav_list">
                        <li>Квіти</li>
                        <li>
                            <a href="/catalog">Букети</a>
                        </li>
                        <li>
                            <a href="/catalog/2">Квіти в коробці</a>
                        </li>
                        <li>
                            <a href="/catalog/4">Квіти в коробці</a>
                        </li>
                        <li>Привід</li>
                        <li>Для кого</li>
                    </ul>
                </nav>

                <div class="header_icons">
                    <a href="/cart">
                        <img src="{{asset('./image/icons/cart.svg')}}" alt="cart">
                    </a>
                </div>
            </div>
        </div>

    </div>
</header>
<!-- Header part ends -->













@yield('page')

<!-- Footer part starts -->

<section class="container footer">

    <div class="footer__wrapper">
        <div class="client">
            <p class="main__text">Клієнтам</p>
            <a href="./index.html">Про нас</a>
            <a href="./inform_page.html">Конфіденційність даних</a>
            <a href="./inform_page.html">Повернення коштів</a>
            <a href="./inform_page.html">Оплата та доставка</a>
            <a href="">Контактна інформація</a>
        </div>
        <div class="contacts">
            <p class="main__text">Контактна інформація</p>
            <div class="group tele">
                <img src="{{asset('./image/icons/tele.svg')}}" alt="Telephone">
                <div class="block">
                    <p>+ 38 067 056 53 45</p>
                    <p>+ 38 096 041 00 32</p>
                </div>
            </div>
            <div class="group email">
                <img src="{{asset('./image/icons/email.svg')}}" alt="Email">
                <p>fbshop@gmail.com</p>
            </div>
            <div class="social">
                <div class="social__icons">
                    <a href="https://facebook.com/">
                        <img src="{{asset('./image/icons/facebook.svg')}}" alt="Facebook">
                    </a>
                    <a href="https://www.instagram.com/">
                        <img src="{{asset('./image/icons/instagram.svg')}}" alt="Instagram">
                    </a>
                    <a href="https://twitter.com/">
                        <img src="{{asset('./image/icons/twitter.svg')}}" alt="Twitter">
                    </a>
                </div>
                <p>Ми у соцмережах</p>
            </div>
        </div>
        <div class="continue">
            <div class="group location">
                <img src="{{asset('./image/icons/location.svg')}}" alt="Location">
                <div class="block">
                    <p>м. Київ</p>
                    <p>вул. Січових Стрільців, 60</p>
                </div>
            </div>
            <div class="group time">
                <img src="{{asset('./image/icons/clock.svg')}}" alt="Clock">
                <div class="block">
                    <p>Будні: 08:00 - 22:00</p>
                    <p>Вихідні: 09:00 - 20:00</p>
                </div>
            </div>
        </div>

        <div class="addition">
            <img class="footer_logo" src="{{asset('./image/svg/footer-logo.svg')}}" alt="Logo">
            <div class="brand__group">
                <img src="{{asset('./image/icons/brand.svg')}}" alt="Brand">
                <div class="block">
                    <p>Flower bed</p>
                    <p>Квітковий магазин</p>
                    <p>2018-2023</p>
                </div>
            </div>
            <div class="payment">
                <img class="master" src="{{asset('./image/icons/Mastercard-logo.svg')}}" alt="Mastercard">
                <img class="visa" src="{{asset('./image/icons/Visa-Logo.svg')}}" alt="Visa">
            </div>
        </div>
    </div>

</section>

<!-- Footer part ends -->

</body>
</html>
