<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('/css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/common.css') }}">
    @yield('css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&display=swap" rel="stylesheet">
    @yield('livewire')
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
            <div class="section-container">
                @yield('section-contents')
            </div>
        </div>
    </main>
@yield('livewireScripts')
</body>

</html>