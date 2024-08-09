@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/index.css') }}">
@endsection

@section('section-title')
<div class="section-title">
    <p>Contact</p>
</div>
@endsection

@section('section-contents')
<div class="section-contents">
    <form action="/confirm" method="post" class="contact__form">
        @csrf
        <dl class="contact__form-list">
            <dt class="contact__form-item">
                <div class=label>
                    <label for="name">お名前<span>※</span></label>
                </div>
                <div class="error">
                    @error('first_name')
                    {{ $message }}
                    @enderror
                    @error('last_name')
                    {{ $message }}
                    @enderror
                </div>
            </dt>
            <dd class="contact__form-input">
                <div class="contact__form-input-name">
                    <input type="text" id="name" class="contact__form-input-name" placeholder='例:山田' name="first_name" value="{{ old('first_name') }}">
                    <input type="text" class="contact__form-input-name" placeholder='例:太郎' name="last_name" value="{{ old('last_name') }}">
                </div>
            </dd>
            <dt class="contact__form-item">
                <div class="label">
                    <p>性別<span>※</span></p>
                </div>
                <div class="error">
                    @error('gender')
                    {{ $message }}
                    @enderror
                </div>
            </dt>
            <dd class="contact__form-input">
                <label class="gender-label"><input type="radio" class="contact__form-input-gender" name="gender" value="1" {{old('gender') == 1 ? 'checked': '' }} checked>男性</label>
                <label class="gender-label"><input type="radio" class="contact__form-input-gender" name="gender" value='2' {{old('gender') == 2 ? 'checked': '' }}>女性</label>
                <label class="gender-label"><input type="radio" class="contact__form-input-gender" name="gender" value='3' {{old('gender') == 3 ? 'checked': '' }}>その他</label>
            </dd>
            <dt class="contact__form-item">
                <div class="label">
                    <label for="email">メールアドレス<span>※</span></label>
                </div>
                <div class="error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </dt>
            <dd class="contact__form-input">
                <input type="email" id="email" class="contact__form-input-email" placeholder='例:test@example.com' name="email" value="{{ old('email') }}">
            </dd>
            <dt class="contact__form-item">
                <div class="label">
                    <label for="tell">電話番号<span>※</span></label>
                </div>
                <div class="error">
                    @error('tell1')
                    {{ $message }}
                    @enderror
                    @error('tell2')
                    {{ $message }}
                    @enderror
                    @error('tell3')
                    {{ $message }}
                    @enderror
                </div>
            </dt>
            <dd class="contact__form-input-tell">
                <input type="text" id="tell" placeholder='080' name="tell1" value="{{ old('tell1') }}">
                -
                <input type="text" placeholder='1234' name="tell2" value="{{ old('tell2') }}">
                -
                <input type="text" placeholder='5678' name="tell3" value="{{ old('tell3') }}">
            </dd>
            <dt class="contact__form-item">
                <div class="label">
                    <label for="address">住所<span>※</span></label>
                </div>
                <div class="error">
                    @error('address')
                    {{ $message }}
                    @enderror
                </div>
            </dt>
            <dd class="contact__form-input">
                <input type="text" id="address" class="contact__form-input-address" placeholder='例:東京都渋谷区千駄ヶ谷1-2-3' name="address" value="{{ old('address') }}">
            </dd>
            <dt class="contact__form-item">
                <div class="label">
                    <label for="building">建物名</label>
                </div>
                <div class="error">
                    @error('building')
                    {{ $message }}
                    @enderror
                </div>
            </dt>
            <dd class="contact__form-input">
                <input type="text" id="building" class="contact__form-input-building" placeholder='例:千駄ヶ谷マンション101' name="building" value="{{ old('building') }}">
            </dd>
            <dt class="contact__form-item">
                <div class="label">
                    <label for="category">お問い合わせの種類<span>※</span></label>
                </div>
                <div class="error">
                    @error('category_id')
                    {{ $message }}
                    @enderror
                </div>
            </dt>
            <dd class="contact__form-input">
                <select name="category_id" id="category" class="contact__form-input-category">
                    @if(empty(old('category_id')))
                    <option value="" disabled selected>選択してください</option>
                    @endif
                    @foreach($categories as $category)
                    @if(old('category_id')==$category['id'])
                    <option value="{{ old('category_id') }}" selected>{{ $category['content'] }}</option>
                    @else
                    <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>
                    @endif
                    @endforeach
                </select>
            </dd>
            <dt class="contact__form-item">
                <div class="label">
                    <label for="detail">お問い合わせ内容<span>※</span></label>
                </div>
                <div class="error">
                    @error('detail')
                    {{ $message }}
                    @enderror
                </div>
            </dt>
            <dd class="contact__form-input">
                <input type="textarea" id="detail" class="contact__form-input-detail" placeholder='お問い合わせ内容をご記載ください' name="detail" value="{{ old('detail') }}">
            </dd>
        </dl>
        <div class="button">
            <button>確認画面</button>
        </div>
    </form>
</div>
@endsection