@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('header-button')
<div class="header-button">
    <a class="header-button-item" href="/login">login</a>
</div>
@endsection

@section('section-title')
<div class="section-title">
    <p>Register</p>
</div>
@endsection

@section('section-contents')
<div class="section">
    <div class="section-container">
        <div class="section-contents">
            <form action="/register" method="post">
                <div class="form">
                    @csrf
                    <dl class="register-form">
                        <dt>
                            <label for="name" class="form-label">お名前</label>
                            <div class="error">
                                @error('name')
                                {{ $message }}
                                @enderror
                            </div>
                        </dt>
                        <dd>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="例:山田 太郎">
                        </dd>
                        <dt>
                            <label for="email" class="form-label">メールアドレス</label>
                            <div class="error">
                                @error('email')
                                {{ $message }}
                                @enderror
                            </div>
                        </dt>
                        <dd>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="例:test@example">
                        </dd>
                        <dt>
                            <label for="password" class="form-label">パスワード</label>
                            <div class="error">
                                @error('password')
                                {{ $message }}
                                @enderror
                            </div>
                        </dt>
                        <dd>
                            <input type="text" id="password" name="password" placeholder="例:coachtech1106">
                        </dd>
                    </dl>
                </div>
                <div class=button>
                    <button class="register-button">登録</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection