@extends('layouts.default')

@section('header-button')
<div class="header-button">
    <a href="/login">login</a>
</div>
@endsection

@section('section-title')
register
@endsection

@section('section-contents')
<div class="section-contents">
    <form action="/login" method="post">
        @csrf
        <dl class="register-form">
            <dt>
                <label for="name">お名前</label>
            </dt>
            <dd>
                <input type="text" id="name" value="{{ old('name') }}">
            </dd>
            <dt>
                <label for="email">メールアドレス</label>
            </dt>
            <dd>
                <input type="text" id="email" value="{{ old('email') }}">
            </dd>
            <dt>
                <label for="password">パスワード</label>
            </dt>
            <dd>
                <input type="text" id="password">
            </dd>
        </dl>
        <button>登録</button>
    </form>
</div>

@endsection