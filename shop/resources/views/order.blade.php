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
    <link rel="stylesheet" href="css/order_style.css">
</head>
<body>
<!-- Header part starts -->
<header class="container header__nav">
    <div class="header_wrapper">
        <div class="logo">
            <a href="/">
                <img src="./image/svg/logo.svg" alt="Flower bed">
            </a>
        </div>
    </div>
</header>
<!-- Header part ends -->
<form class="order" action="/createOrder" method="POST">
    @csrf
    <div class="order">
        <h1>Оформлення замовлення</h1>
        <h2>Ваші дані: </h2>
        <div class="input__buyer">

            <div class="group__form">
                <label for="username">Прізвище:</label>
                <input name="surname"  type="text" placeholder="Введіть ваше прізвище">
                @error('surname')
                <div>{{ $message }}</div>
                @enderror
            </div>
            <div class="group__form">
                <label for="username">Ім'я:</label>
                <input name="name"  type="text" placeholder="Введіть ваше ім'я">
                @error('name')
                <div>{{ $message }}</div>
                @enderror
            </div>
            <div class="group__form">
                <label for="username">Телефон:</label>
                <input name="phone_number"  type="text" placeholder="Введіть ваш телефон">
                @error('phone_number')
                <div>{{ $message }}</div>
                @enderror
            </div>
            <div class="group__form">
                <label for="username">Email:</label>
                <input name="email"  type="text" placeholder="Введіть ваш email">
                @error('email')
                <div>{{ $message }}</div>
                @enderror
            </div>
            <div class="group__form">
                <label for="username">Адреса:</label>
                <input name="address"  type="text" placeholder="Введіть адресу">
                @error('address')
                <div>{{ $message }}</div>
                @enderror
            </div>
            <div class="group__form">
                <label for="username">Дата отримання:</label>
                <input name="date"  type="text" placeholder="d/m/Y H:i:">
                @error('date')
                <div>{{ $message }}</div>
                @enderror
            </div>
        </div>

        <h2>Квіти: </h2>
        <ul class="cart__list">
            @foreach($flowers as $flower)
                <li class="flower__purch">
                    <div class="flower_info">
                        <div class="image">
                            <img src={{$flower->image}}>
                        </div>
                        <div class="title">
                            <a href="/product">{{$flower->name}}</a>
                        </div>
                    </div>
                    <div class="group_price">
                        <span>Ціна: </span>
                        <div class="price">
                            @if($flower->new_price)
                                <div class="old__price">{{$flower->price}} грн</div>
                                <div class="new__price">{{$flower->new_price}} грн</div>
                            @else
                                <div class="new__price">{{$flower->price}} грн</div>
                            @endif
                        </div>
                    </div>
                </li>
            @endforeach

        </ul>

        <h2>Доставка: </h2>
        <div class="delivery">
            <label class="radio__container" id="rc_1">Самовивіз з магазину
                <input type="radio" checked="checked" name="delivery_id" value=1>
                <span class="checkmark"></span>
            </label>
            <label class="radio__container"  id="rc_1">Доставка кур'єром
                <input type="radio" name="delivery_id" value=2>
                <span class="checkmark"></span>
            </label>
        </div>

        <h2>Оплата: </h2>
        <div class="payment">
            <label class="radio__container" id="rc_2">Готівка при отримані товару
                <input type="radio" checked="checked" name="payment_id" value=1>
                <span class="checkmark"></span>
            </label>
            <label class="radio__container" id="rc_2">Безготівковий спосіб на сайті
                <input type="radio" name="payment_id" value=2>
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="total">
            <div class="tot__pr">
                <span>Сума: </span>
                <div class="total__price">{{$total_price}} грн</div>
            </div>
            <input type="hidden" name="cart_id" value={{$cart_id}}>
            <input type="hidden" name="total_price" value={{$total_price}}>
            <div class="buy_btn">
                <button type="submit">Підтвердити замовлення</button>
            </div>

        </div>

    </div>

</form>
</body>
</html>
