@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">

@section('section-title')
<div class="section-title">
    <p>Contact</p>
</div>
@endsection

@section('section-contents')
<div class="section-contents">
    <form crass="confirm" method="post" action="/thanks">
        @csrf
        <table class="confirm-form">
            <tr>
                <th>お名前</th>
                <td>
                    <p>{{ $contact['first_name'] }} {{ $contact['last_name'] }}</p>
                    <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}">
                    <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}">
                </td>
            </tr>
            <tr>
                <th>性別</th>
                <td>
                    @if($contact['gender'] = "1")
                    <p>男性</p>
                    <input type="hidden" name="gender" value="1">
                    @elseif($contact['gender'] = "2")
                    <p>女性</p>
                    <input type="hidden" name="gender" value="2">
                    @else
                    <p>その他</p>
                    <input type="hidden" name="gender" value="3">
                    @endif
                </td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td>
                    <p>{{ $contact['email'] }}</p>
                    <input type="hidden" name="email" value="{{ $contact['email'] }}">
                </td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td>
                    <p>{{ $contact['tell1'] }}{{ $contact['tell2'] }}{{ $contact['tell3'] }}</p>
                    <input type="hidden" name="tell1" value="{{ $contact['tell1'] }}">
                    <input type="hidden" name="tell2" value="{{ $contact['tell2'] }}">
                    <input type="hidden" name="tell3" value="{{ $contact['tell3'] }}">
                    <input type="hidden" name="tell" value="{{ $contact['tell1'] }}{{ $contact['tell2'] }}{{ $contact['tell3'] }}">
                </td>
            </tr>
            <tr>
                <th>住所</th>
                <td>
                    <p>{{ $contact['address'] }}</p>
                    <input type="hidden" name="address" value="{{ $contact['address'] }}">
                </td>
            </tr>
            <tr>
                <th>建物名</th>
                <td>
                    <p>{{ $contact['building'] }}</p>
                    <input type="hidden" name="building" value="{{ $contact['building'] }}">
                </td>
            </tr>
            <tr>
                <th>お問い合わせの種類</th>
                <td>
                    <p>
                        {{ $category['content'] }}
                    </p>
                    <input type="hidden" name="category_id" value="{{ $contact['category_id'] }}">
                </td>
            </tr>
            <tr>
                <th>お問い合わせ内容</th>
                <td>
                    <p>{{ $contact['detail'] }}</p>
                    <input type="hidden" name="detail" value="{{ $contact['detail'] }}" readonly>
                </td>
            </tr>
        </table>
        <div class="button">
            <button type="submit" name="submit" value="complete" class="submit-button">送信</button>
            <button type="submit" name="back" value="back" class="edit-button">修正</button>
        </div>
    </form>
</div>

@endsection