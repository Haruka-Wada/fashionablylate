@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/admin.css') }}">
@endsection

@section('livewire')
@livewireStyles
@endsection

@section('section-title')
<div class="section-title">
    <p>Admin</p>
</div>
@endsection

@section('section-contents')
<div class="search">
    <form action="/search" method="get" name="search-form">
        @csrf
        <input type="text" class="search-input-keyword" name="keyword" value="{{ old('keyword') }}" placeholder="名前やメールアドレスを入力してください">
        <select name="gender" class="search-input">
            <option value="" selected disabled>性別</option>
            <option value="1">男性</option>
            <option value="2">女性</option>
            <option value="3">その他</option>
        </select>
        <select name='category' class="search-input-category">
            <option value="" selected disabled>お問い合わせの種類</option>
            @foreach($categories as $category)
            <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>
            @endforeach
        </select>
        <input type="date" name="date" class="search-input-date" pattern="\d{4}-\d{2}-\d{2}">
        <button class="search-button">検索</button>
    </form>
    <button class="reset-button" onclick="location.href='./admin'">リセット</button>
</div>

<div class="option">
    <button class="export-button">エクスポート</button>
    <div class="pagination">
        {{ $contacts->links() }}
    </div>
</div>
<div class="container">
    <table class="table">
        <tr class="table-heading">
            <th class="name">お名前</th>
            <th class="gender">性別</th>
            <th class="email">メールアドレス</th>
            <th class="category">お問い合わせの種類</th>
            <th></th>
        </tr>
        @foreach($contacts as $contact)
        <tr class="table-item">
            <th class="name">
                {{ $contact['first_name'] }} {{ $contact['last_name'] }}
            </th>
            <th class="gender">
                @if($contact['gender'] === 1)
                男性
                @elseif($contact['gender'] === 2)
                女性
                @else($contact['gender'] === 3)
                その他
                @endif
            </th>
            <th class="email">
                {{ $contact['email']}}
            </th>
            <th class="category">
                {{ $contact['category']['content'] }}
            </th>
            <th class="table-item-detail">
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