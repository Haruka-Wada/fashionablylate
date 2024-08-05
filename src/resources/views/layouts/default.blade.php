<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
</head>
<body>
    <header class="header">
        <p class="header-title">FashionablyLate</p>
        @yield('header-button')
    </header>

    <main class="main">
        <div class="section">
            <div class="section-title">
                <p>@yield('section-title')</p>
            </div>
            <div class="section-contents">
                @yield('section-contents')
            </div>
        </div>
    </main>
</body>
</html>