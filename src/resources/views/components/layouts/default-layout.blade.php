@php use function PHPUnit\Framework\isEmpty; @endphp
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>

    <link rel="stylesheet" href="{{ asset("css/global.css") }}" />
    <link rel="stylesheet" href="{{ asset("css/ui/header.css") }}" />
    <link rel="stylesheet" href="{{ asset("css/ui/footer.css") }}" />
    <link rel="stylesheet" href="{{ asset("css/components/button.css") }}" />

    {{ $head }}
</head>
<body>
<div class="home">
    <div class="promo-bar">
        <div class="promo-bar-content">
            <a class="promo-content-link">
                Free shipping on order over $666
            </a>
        </div>
    </div>

    {{ $header }}

    {{ $main }}

    <x-ui.footer />
</div>
</body>
</html>
