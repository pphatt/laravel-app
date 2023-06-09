@php use function PHPUnit\Framework\isEmpty; @endphp
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <link rel="stylesheet" href="{{ asset("css/global.css") }}" />
    <link rel="stylesheet" href="{{ asset("css/components/button.css") }}" />
    <link rel="stylesheet" href="{{ asset("css/layout/account-layout.css") }}" />
    <link rel="stylesheet" href="{{ asset("css/ui/user-navigation.css") }}" />
    <link rel="stylesheet" href="{{ asset("css/ui/route-path.css") }}" />

    <script type="module" src="{{ asset("js/feedback-helper.js") }}" defer></script>

    @yield("head")
</head>
<body>
<div class="home">
    <div class="-layout">
        <main>
            <div class="-main-layout">
                <x-ui.user-navigation route-name="{{ $routeName }}" />

                <div class="-panel">
                    <x-ui.route-path />

                    <div class="-main">
                        <div class="-inner-main">
                            @yield("content")
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
</body>
</html>
