@php use function PHPUnit\Framework\isEmpty; @endphp
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Reset password</title>

    <link rel="stylesheet" href="{{ asset("css/global.css") }}"/>
    <link rel="stylesheet" href="{{ asset("css/components/button.css") }}"/>
    <link rel="stylesheet" href="{{ asset("css/reset-password.css") }}"/>

    <script type="module" src="{{ asset("js/reset-password.js") }}" defer></script>
</head>
<body>
<div class="-layout">
    @if ($errors->any())
        <div class="alert">
            <div class="alert-panel">
                    <span class="icon">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="20"
                            height="20"
                            fill="currentColor"
                            viewBox="0 0 16 16"
                        >
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                        </svg>
                    </span>
                <div class="alert-content">
                    <div class="message">
                        <span>{{ $errors->first() }}</span>
                    </div>
                    <div class="close-btn">
                        <button>
                                <span>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="14"
                                        height="14"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                      <line x1="18" y1="6" x2="6" y2="18"></line>
                                      <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="-inner-layout">
        <div class="-inner">
            <div class="-nav">
                <div class="-inner-nav">
                    <a href="{{ route("home") }}">
                        <span class="-logo">
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
                            <path d="M15 6v12a3 3 0 1 0 3-3H6a3 3 0 1 0 3 3V6a3 3 0 1 0-3 3h12a3 3 0 1 0-3-3"></path>
                          </svg>
                        </span>
                        <span class="-title">Tune Source</span>
                    </a>
                </div>
            </div>
            <div class="-reset-form-layout">
                <div class="-inner-reset-form-layout">
                    <div class="-reset-form-header">
                        <h1>Reset Your Password</h1>
                        <h2>
                            Type in a new secure password and press save to update your
                            password
                        </h2>
                    </div>
                    <div class="-reset-form-form">
                        <form method="POST" action="{{route("reset-password-post")}}">
                            @csrf
                            <div class="-inner-reset-form-form">
                                <div class="-reset-form-input">
                                    <div class="-title">
                                        <label htmlFor="password">New password</label>
                                    </div>
                                    <div class="-input">
                                        <input
                                            id="password"
                                            type="password"
                                            name="password"
                                            placeholder="••••••••"
                                            autoComplete="email"
                                            autoCorrect="off"
                                            autoCapitalize="none"
                                        />
                                        <p></p>
                                    </div>
                                </div>
                                <div class="-set-password-description">
                                    <div class="-inner-set-password-description" id="password-description">
                                        <div class="-des" data-contain="false">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"
                                                ></path>
                                            </svg>
                                            <p>Uppercase letter</p>
                                        </div>
                                        <div class="-des" data-contain="false">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"
                                                ></path>
                                            </svg>
                                            <p>Lowercase letter</p>
                                        </div>
                                        <div class="-des" data-contain="false">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"
                                                ></path>
                                            </svg>
                                            <p>Number</p>
                                        </div>
                                        <div class="-des" data-contain="false">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"
                                                ></path>
                                            </svg>
                                            <p>Special character (e.g. !?<>@#$%)</p>
                                        </div>
                                        <div class="-des" data-contain="false">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"
                                                ></path>
                                            </svg>
                                            <p>> 7 characters</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="-form-line"></div>
                                <div class="-submit-button">
                                    <button type="submit" disabled>
                                        <span>Save New Password</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="-reset-form-description">
                        <p>
                            When you hit the save new password, it will save
                            automatically.
                        </p>
                        <p>It don&apos;t need to confirm the old password</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
