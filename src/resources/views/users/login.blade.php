@extends('layouts.default')

@section('header-button')
<div class="header-button">
    <a href="/register">register</a>
</div>
@endsection

@section('section-title')
login
@endsection

@section('section-contents')
<div class="section-contents">
    <form action="/login" method="post">
        @csrf
        <dl class="login-form">
            <dt>
                <label for="email">メールアドレス</label>
            </dt>
            <dd>
                <input type="text" id="email" name="email" value="{{ old('email') }}">
            </dd>
            <dt>
                <label for="password">パスワード</label>
            </dt>
            <dd>
                <input type="text" id="password" name="password">
            </dd>
        </dl>
        <button>ログイン</button>
    </form>
</div>
@endsection