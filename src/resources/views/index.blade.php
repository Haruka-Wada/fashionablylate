@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/index.css') }}">
@endsection

@section('section-title')
Contact
@endsection

@section('section-contents')
<div class="section-contents">
    <form action="/confirm" method="post" class="contact__form">
        @csrf
        <dl class="contact__form-input">
            <dt class="contact__form-item">
                <label for="name">お名前<span>※</span></label>
                @error('first_name')
                {{ $message }}
                @enderror
                @error('last_name')
                {{ $message }}
                @enderror
            </dt>
            <dd class="contact__form-input">
                <input type="text" id="name" placeholder='例:山田' name="first_name" value="{{ old('first_name') }}">
                <input type="text" placeholder='例:太郎' name="last_name" value="{{ old('last_name') }}">
            </dd>
            <dt class="contact__form-item">
                性別<span>※</span>
                @error('gender')
                {{ $message }}
                @enderror
            </dt>
            <dd class="contact__form-input">
                <input type="radio" id="man" name="gender" value="1" {{ old('gender') === 1 ? 'checked' : '' }}>
                <label for="man">男性</label>
                <label><input type="radio" name="gender" value='2'>女性</label>
                <label><input type="radio" name="gender" value='3'>その他</label>
            </dd>
            <dt class="contact__form-item">
                <label for="email">メールアドレス<span>※</span></label>
                @error('email')
                {{ $message }}
                @enderror
            </dt>
            <dd class="contact__form-input">
                <input type="email" id="email" placeholder='例:test@example.com' name="email" value="{{ old('email') }}">
            </dd>
            <dt class="contact__form-item">
                <label for="tell">電話番号<span>※</span></label>
                @error('tell1')
                {{ $message }}
                @enderror
                @error('tell2')
                {{ $message }}
                @enderror
                @error('tell3')
                {{ $message }}
                @enderror
            </dt>
            <dd class="contact__form-input">
                <input type="text" id="tell" placeholder='080' name="tell1" value="{{ old('tell1') }}">
                -
                <input type="text" placeholder='1234' name="tell2" value="{{ old('tell2') }}">
                -
                <input type="text" placeholder='5678' name="tell3" value="{{ old('tell3') }}">
            </dd>
            <dt class="contact__form-item">
                <label for="address">住所<span>※</span></label>
                @error('address')
                {{ $message }}
                @enderror
            </dt>
            <dd class="contact__form-input">
                <input type="text" id="address" placeholder='例:東京都渋谷区千駄ヶ谷1-2-3' name="address" value="{{ old('address') }}">
            </dd>
            <dt class="contact__form-item">
                <label for="building">建物名</label>
                @error('building')
                {{ $message }}
                @enderror
            </dt>
            <dd class="contact__form-input">
                <input type="text" id="building" placeholder='例:千駄ヶ谷マンション101' name="building" value="{{ old('building') }}">
            </dd>
            <dt class="contact__form-item">
                <label for="category">お問い合わせの種類<span>※</span></label>
                @error('category_id')
                {{ $message }}
                @enderror
            </dt>
            <dd class="contact__form-input">
                <select name="category_id" id="category">
                    <option value="" selected disabled>選択してください</option>
                    @foreach($categories as $category)
                    <option value="{{ $category['id'] }} @if( old('$category_id') == $category['id']) selected @endif">{{ $category['content'] }}</option>
                    @endforeach
                </select>
            </dd>
            <dt class="contact__form-item">
                <label for="detail">お問い合わせ内容<span>※</span></label>
                @error('detail')
                {{ $message }}
                @enderror
            </dt>
            <dd class="contact__form-input">
                <input type="textarea" id="detail" placeholder='お問い合わせ内容をご記載ください' name="detail" value="{{ old('detail') }}">
            </dd>
        </dl>
        <button>確認画面</button>
    </form>
</div>
@endsection