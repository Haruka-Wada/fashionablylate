@extends('layouts.default')

@section('section-title')
Confirm
@endsection

@section('section-contents')
<div class="section-contents">
    <table class="confirm">
        <tr>
            <th>お名前</th>
            <td>{{ $contact['first_name'] $contact['last_name'] }}</td>
        </tr>
        <tr>
            <th>性別</th>
            <td>{{ $contact['gender'] }}</td>
        </tr>
        <tr>
            <th>メールアドレス</th>
            <td>{{ $contact['email'] }}</td>
        </tr>
        <tr>
            <th>住所</th>
            <td>{{ $contact['address'] }}</td>
        </tr>
        <tr>
            <th>建物名</th>
            <td>{{ $contact['building'] }}</td>
        </tr>
        <tr>
            <th>お問い合わせの種類</th>
            <td>{{ $contact[$category_content] }}</td>
        </tr>
        <tr>
            <th>お問い合わせ内容</th>
            <td>{{ $contact['detail'] }}</td>
        </tr>
    </table>
    <button class="submit">送信</button>
    <a href="index.blade.php">修正</a>
</div>

@endsection