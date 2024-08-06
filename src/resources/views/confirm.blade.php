@extends('layouts.default')

@section('section-title')
Confirm
@endsection

@section('section-contents')
<div class="section-contents">
    <form action="/thanks" method="post">
        @csrf
        <table class="confirm">
            <tr>
                <th>お名前</th>
                <td>
                    <input type="text" name="first_name" value="{{ $contact['first_name'] }}" readonly>
                    <input type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly>
                </td>
            </tr>
            <tr>
                <th>性別</th>
                <td>
                    @if($contact['gender'] = "男性")
                    <input type="text" value="男性" readonly>
                    <input type="hidden" name="gender" value="1">
                    @elseif($contact['gender'] = "女性")
                    <input type="text" value="女性" readonly>
                    <input type="hidden" name="gender" value="2">
                    @else
                    <input type="text" value="その他" readonly>
                    <input type="hidden" name="gender" value="その他">
                    @endif
                </td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td>
                    <input type="text" name="email" value="{{ $contact['email'] }}" readonly>
                </td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td>
                    <input type="text" name="tell" value="{{ $contact['tell1'] }}{{ $contact['tell2'] }}{{ $contact['tell3'] }}" readonly>
                </td>
            </tr>
            <tr>
                <th>住所</th>
                <td>
                    <input type="text" name="address" value="{{ $contact['address'] }}" readonly>
                </td>
            </tr>
            <tr>
                <th>建物名</th>
                <td>
                    <input type="text" name="building" value="{{ $contact['building'] }}" readonly>
                </td>
            </tr>
            <tr>
                <th>お問い合わせの種類</th>
                <td>
                    <input type="text" name="category" value="{{ $contact['category'] }}" readonly>
                </td>
            </tr>
            <tr>
                <th>お問い合わせ内容</th>
                <td>
                    <input type="textarea" name="detail" value="{{ $contact['detail'] }}" readonly>
                </td>
            </tr>
        </table>
        <button class=" submit">送信</button>
    </form>
    <form action="/" method="get">
        <button>修正</button>
    </form>
</div>

@endsection