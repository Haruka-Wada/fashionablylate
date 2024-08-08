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
    <form action="/register" method="post">
        @csrf
        <dl class="register-form">
            <dt>
                <label for="name">お名前</label>
                @error('name')
                {{ $message }}
                @enderror
            </dt>
            <dd>
                <input type="text" id="name"
                name="name" value="{{ old('name') }}">
            </dd>
            <dt>
                <label for="email">メールアドレス</label>
                @error('email')
                {{ $message }}
                @enderror
            </dt>
            <dd>
                <input type="email" id="email" name="email" value="{{ old('email') }}">
            </dd>
            <dt>
                <label for="password">パスワード</label>
                @error('password')
                {{ $message }}
                @enderror
            </dt>
            <dd>
                <input type="text" id="password" name="password">
            </dd>
        </dl>
        <button>登録</button>
    </form>
</div>

@endsection