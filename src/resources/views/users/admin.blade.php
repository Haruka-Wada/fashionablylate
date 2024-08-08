@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="css/admin.css">
@endsection

@section('livewire')
@livewireStyles
@endsection

@section('section-title')
Admin
@endsection

@section('section-contents')
<div class="search">
    <form action="/search" method="get">
        @csrf
        <input type="text" name="keyword" value="{{ old('keyword') }}">
        <select name="gender">
            <option value="" selected disabled>性別</option>
            <option value="1">男性</option>
            <option value="2">女性</option>
            <option value="3">その他</option>
        </select>
        <select name='category'>
            <option value="" selected disabled>お問い合わせの種類</option>
            @foreach($categories as $category)
            <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>
            @endforeach
        </select>
        <input type="date" name="date" pattern="\d{4}-\d{2}-\d{2}">
        <button>検索</button>
    </form>
    <button onclick="location.href='./admin'">リセット</button>
</div>

<div class="option">
    <button>エクスポート</button>
</div>
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
                @if($contact['gender'] === 1)
                男性
                @elseif($contact['gender'] === 2)
                女性
                @else($contact['gender'] === 3)
                その他
                @endif
            </th>
            <th>
                {{ $contact['email']}}
            </th>
            <th>
                {{ $contact['category']['content'] }}
            </th>
            <th>
                @livewire('modal', ['contact' => $contact])
            </th>
        </tr>
        @endforeach
    </table>
</div>
@endsection

@section('livewireScripts')
@livewireScripts
@endsection