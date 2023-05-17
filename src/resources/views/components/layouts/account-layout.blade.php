@php use function PHPUnit\Framework\isEmpty; @endphp
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>

    <link rel="stylesheet" href="{{ asset("css/global.css") }}" />
    <link rel="stylesheet" href="{{ asset("css/components/button.css") }}" />
    <link rel="stylesheet" href="{{ asset("css/layout/account-layout.css") }}" />
    <link rel="stylesheet" href="{{ asset("css/ui/user-navigation.css") }}" />
    <link rel="stylesheet" href="{{ asset("css/ui/admin-navigation.css") }}" />
    <link rel="stylesheet" href="{{ asset("css/ui/route-path.css") }}" />

    <script type="module" src="{{ asset("js/feedback-helper.js") }}" defer></script>

    {{ $head }}
</head>
<body>
<div class="home">
    <div class="-layout">
        <main>
            <div class="-main-layout">
                @if (auth()->user()->role == 0)
                    <x-ui.user-navigation route-name="{{ $routeName }}" />
                @else
                    <x-ui.admin-navigation route-name="{{ $routeName }}" />
                @endif

                <div class="-panel">
                    <x-ui.route-path />

                    @if ($includeMainComponent == "true")
                        <div class="-main">
                            <div class="-inner-main">
                                {{ $content }}
                            </div>
                        </div>
                    @else
                        {{ $content }}
                    @endif
                </div>
            </div>
        </main>
    </div>
</div>
</body>
</html>
