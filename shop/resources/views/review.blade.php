@extends('header_footer')

@section('css_links')
    <link rel="stylesheet" href="{{asset('css/review_style.css')}}">
@endsection

@section('page')
    <form id="y__feedback" action="/review" method="POST">
        @csrf
        <input type="hidden" name="flower_id" value="{{ $flower->id }}">
        <div class="input__name">
            <input name="user_name"  type="text" placeholder="Введіть ваше ім'я">
            @error('user_name')
                <div>{{ $message }}</div>
            @enderror
            <input name="email"  type="text" placeholder="Введіть ваш email">
            @error('email')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <textarea name="comment" class="input__feed" type="text" placeholder="Введіть відгук"></textarea>
        @error('comment')
            <div>{{ $message }}</div>
        @enderror
        <button type="submit" class="feedback_post">Додати відгук</button>
    </form>
@endsection
