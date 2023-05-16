@php use function PHPUnit\Framework\isEmpty; @endphp
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/global.css") }}" />
    <link rel="stylesheet" href="{{ asset("css/components/button.css") }}" />

    @switch($child)
        @case("sign-up")
            <link rel="stylesheet" href="{{ asset("css/sign-up.css") }}" />
            <script type="module" src="{{ asset("js/sign-up-form.js") }}" defer></script>
            @break
        @default
            <link rel="stylesheet" href="{{ asset("css/sign-in.css") }}" />
            <script type="module" src="{{ asset("js/sign-in-form.js") }}" defer></script>
            @break
    @endswitch

    <title>{{ $child }}</title>
</head>
<body>
<div class="home">
    <div class="-layout">
        <div class="-nav-layout">
            <div class="-nav">
                <div class="-inner-nav">
                    <a href={"/"}>
                        <span class="-page-logo">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="mr-2 h-6 w-6"
                            >
                                <path
                                    d="M15 6v12a3 3 0 1 0 3-3H6a3 3 0 1 0 3 3V6a3 3 0 1 0-3 3h12a3 3 0 1 0-3-3"></path>
                              </svg>
                        </span>
                        <span class="-page">Tune Source</span>
                    </a>
                </div>
                <div class="-about">
                    <a href="">About</a>
                </div>
            </div>
        </div>
        <div class="-main-layout">
            <main class="-sign-layout">
                <div class="-sign-main">
                    @yield("header")
                    @yield("form")
                </div>
                <div class="-auth-policy">
                    <p>
                        By clicking continue, you agree to our
                        <a href="">Terms of Service</a> and
                        <a href="">Privacy Policy</a>.
                    </p>
                </div>
            </main>
            <section>
                <div class="-quotes"></div>
            </section>
        </div>
    </div>
</div>
</body>
</html>
