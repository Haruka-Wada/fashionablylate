@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/index.css') }}">
@endsection

@section('section-title')
Contact
@endsection

@section('section-contents')
<div class="section-contents">
    <form action="/" method="post" class="contact__form">
        <dl class="contact__form-input">
            <dt class="contact__form-item">
                <label for="name">お名前<span>※</span></label>
            </dt>
            <dd class="contact__form-input">
                <input type="text" id="name" placeholder="例:山田" name="first_name">
                <input type="text" placeholder="例:太郎" name="last_name">
            </dd>
            <dt class="contact__form-item">
                性別<span>※</span>
            </dt>
            <dd class="contact__form-input">
                <label><input type="radio" name="gender" value="1" checked>男性</label>
                <label><input type="radio" name="gender" value="2">女性</label>
                <label><input type="radio" name="gender" value="3">その他</label>
            </dd>
            <dt class="contact__form-item">
                <label for="email">メールアドレス<span>※</span></label>
            </dt>
            <dd class="contact__form-input">
                <input type="text" id="email" placeholder="例:test@example.com" name="email">
            </dd>
            <dt class="contact__form-item">
                <label for="tell">電話番号<span>※</span></label>
            </dt>
            <dd class="contact__form-input">
                <input type="text" id="tell" placeholder="080" name="tell1">
                -
                <input type="text" placeholder="1234" name="tell2">
                -
                <input type="text" placeholder="5678" name="tell3">
            </dd>
            <dt class="contact__form-item">
                <label for="address">住所<span>※</span></label>
            </dt>
            <dd class="contact__form-input">
                <input type="text" id="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" name="address">
            </dd>
            <dt class="contact__form-item">
                <label for="building">建物名</label>
            </dt>
            <dd class="contact__form-input">
                <input type="text" id="building" placeholder="例:千駄ヶ谷マンション101" name="building">
            </dd>
            <dt class="contact__form-item">
                <label for="category">お問い合わせの種類<span>※</span></label>
            </dt>
            <dd class="contact__form-input">
                <select name="category_id" id="category">
                    <option value="" selected disabled>選択してください</option>
                    @foreach($categories as $category)
                    <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>
                    @endforeach
                </select>
            </dd>
            <dt class="contact__form-item">
                <label for="detail">お問い合わせ内容</label>
            </dt>
            <dd class="contact__form-input">
                <input type="textarea" id="detail" placeholder="お問い合わせ内容をご記載ください" name="detail">
            </dd>
        </dl>
        <button>確認画面</button>
    </form>
</div>
@endsection