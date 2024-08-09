@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/login.css') }}">
@endsection

@section('header-button')
<div class="header-button">
    <a class="header-button-item" href="/register">register</a>
</div>
@endsection

@section('section-title')
<div class="section-title">
    <p>Login</p>
</div>
@endsection

@section('section-contents')
<div class="section-container">
    <div class="section-contents">
        <form action="/login" method="post">
            <div class="form">
                @csrf
                <dl class="login-form">
                    <dt>
                        <label for="email" class="form-label">メールアドレス</label>
                        @error('email')
                        {{ $message }}
                        @enderror
                    </dt>
                    <dd>
                        <input type="email" id="email" name="email" value="{{ old('email') }}">
                    </dd>
                    <dt>
                        <label for="password" class="form-label">パスワード</label>
                        @error('password')
                        {{ $message }}
                        @enderror
                    </dt>
                    <dd>
                        <input type="text" id="password" name="password">
                    </dd>
                </dl>
                <div class="button">
                    <button class="login-button">ログイン</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection