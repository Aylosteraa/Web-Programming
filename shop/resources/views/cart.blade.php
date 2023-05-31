@extends ('header_footer')

@section('css__links')
    <link rel="stylesheet" href="css/cart_style/reset.css">
@endsection

@section('page')

    <style>
        body {
            background-color: #FCFCFC;
        }

        body * {
            font-family: 'Fira Sans', sans-serif;
        }

        .main {
            margin: 150px 170px 100px 75px;
        }
        h1{
            font-size: 42px;
            color: #2F3537;
            line-height: 75px;
            padding-bottom: 15px;
        }

        .image, .image img{
            width: 150px;
            height: 150px;
        }
        .cart__list{
            padding-top: 15px;
        }
        .title a {
            font-size: 16px;
            line-height: 23px;
            color: #77878B;
            text-decoration: none;
        }
        .del__btn button {
            width: 100px;
            height: 35px;
            background: #A27C91;
            border-left: 1px solid #3C2A34;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 50px;
            font-size: 16px;
            line-height: 26px;
            color: #2F3537;
        }
        .del__btn{
            padding-bottom: 15px;
        }
        .new__price {
            font-size: 32px;
            line-height: 29px;
            color: #4b3742;
        }

        .old__price {
            font-size: 18px;
            line-height: 29px;
            text-decoration-line: line-through;
            color: #77878B;
        }
        .group_price span {
            font-size: 18px;
            line-height: 29px;
            color: #77878B;
        }

        .group__cart {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .flower_info{
            display: flex;
            flex-direction: row;
            column-gap: 20px;
        }

        .group_price{
            display: flex;
            flex-direction: column;
            justify-content: space-between;

        }

        .flower__purch{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            margin: 25px 0px;
            padding: 15px;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);

        }
        .price{
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: flex-end;
            padding-bottom: 15px;
        }

        .buy_btn button{
            width: 250px;
            height: 50px;
            background: #A27C91;
            border-left: 1px solid #3C2A34;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 50px;
            font-size: 24px;
            line-height: 26px;
            color: #2F3537;
        }

        .tot__pr{
            display: flex;
        }

        .tot__pr span{
            font-size: 32px;
            line-height: 29px;
            color: #4b3742
        }
        .total__price{
            font-size: 32px;
            line-height: 29px;
            color: #4b3742;
            padding-left: 15px;
        }

        .total {
            padding-top: 50px;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
        }
    </style>

    <div class="main">
        <h1>Корзина</h1>
        @if($flowers)
        <ul class="cart__list">
           @foreach($flowers as $flower)
                <li class="flower__purch">
                    <div class="flower_info">
                        <div class="image">
                            <img src={{$flower->image}}>
                        </div>
                        <div class="group__cart">
                            <div class="title">
                                <a href="/product/{{$flower->id}}">{{$flower->name}}</a>
                            </div>
                            <div class="del__btn">
                                <form action="/removeFromCart" method="POST">
                                    @csrf
                                    <input type="hidden" name="flower_id" value={{$flower->id}}>
                                    <input type="hidden" name="cart_id" value={{$cart->id}}>
                                    <button type="submit">Видалити</button>
                                </form>

                            </div>
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
        <div class="total">
            <div class="tot__pr">
                <span>Сума: </span>
                <div class="total__price">{{$total}} грн</div>
            </div>
            @if($total!==0)
            <form action="/order" method="POST">
                @csrf
                <input type="hidden" name="cart_id" value={{$cart->id}}>
                <input type="hidden" name="total_price" value={{$total}}>
                <div class="buy_btn">
                    <button type="submit">Замовити</button>
                </div>
            </form>
            @else
                <input type="hidden" name="cart_id" value={{$cart->id}}>
                <input type="hidden" name="total_price" value={{$total}}>
                <div class="buy_btn">
                    <button type="submit">Замовити</button>
                </div>
            @endif
        </div>
    </div>
    @else
        <div class="title">Корзина порожня</div>
    @endif

@endsection
