@extends('layouts.default')

@section('section-title')
Admin
@endsection

@section('section-contents')
<div class="search">

</div>
<div class="option"></div>
<div class="container">
    <table class="table">
        <tr>
            <th>お名前</th>
            <th>性別</th>
            <th>メールアドレス</th>
            <th>お問い合わせの種類</th>
            <th></th>
        </tr>
        @foreach($contacts as $contact)
        <tr>
            <th>
                {{ $contact['first_name'] }} {{ $contact['last_name'] }}
            </th>
            <th>
                @if($contact['gender'] === 1)男性@elseif($contact['gender'] === 2)女性 @else($contact['gender'] === 3)その他@endif
            </th>
            <th>
                {{ $contact['email']}}
            </th>
            <th>
                {{ $contact['category']['content'] }}
            </th>
            <th>
                <button></button>
            </th>
        </tr>
        @endforeach
    </table>
</div>
@endsection