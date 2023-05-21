<x-layouts.account-layout title="General" route-name="General" includeMainComponent="true">
    <x-slot:head>
        <link rel="stylesheet" href="{{ asset("css/user/general.css")}}" />
    </x-slot:head>

    <x-slot:content>
        @if(!empty(Session::get("reset")))
            <div class="alert">
                <div class="alert-panel">
                    <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                             viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </svg>
                    </span>
                    <div class="alert-content">
                        <div class="message">
                            <span>{{Session::get("reset")}}</span>
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
        <div class="-header-section">
            <section>
                <h1>{{auth()->user()->name}}</h1>
            </section>
            <nav>
                <div class="-nav-layout">
                    <div class="-inner-nav-layout">
                        <button class="-active">
                            <span>General</span>
                        </button>
                        <button onclick="redirect()">
                            <span>Profile</span>
                        </button>

                        <script>
                            function redirect() {
                                return window.location.href = window.location.protocol + "//" + window.location.hostname + ":8000" + "/user/profile"
                            }
                        </script>
                    </div>
                </div>
            </nav>
        </div>
        <div class="-card">
            <article class="-inner-card">
                <section>
                    <div class="-card-layout">
                        <div class="-card-header">
                            <div>
                                <h5>Account Information</h5>
                            </div>
                        </div>
                        <div class="-card-content">
                            <div class="-inner">
                                <div class="-inner-card-content">
                                    <div class="-row">
                                        <div class="-row-content">
                                            <div class="-row-title">
                                                <span>Username</span>
                                            </div>
                                            <div class="-row-input">
                                                <input
                                                    disabled
                                                    type="text"
                                                    readOnly
                                                    value="{{auth()->user()->name}}"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="-row">
                                        <div class="-row-content">
                                            <div class="-row-title">
                                                <span>Email</span>
                                            </div>
                                            <div class="-row-input">
                                                <input
                                                    disabled
                                                    type="text"
                                                    readOnly
                                                    value="{{auth()->user()->email}}"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="-row">
                                        <div class="-row-content">
                                            <div class="-row-title">
                                                <span>Reset Password</span>
                                            </div>
                                            <div class="-row-input">
                                                <a href="{{route("reset-password-get")}}">
                                                    <button>
                                                        <span>Reset Password</span>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </article>
        </div>
        <div class="-danger-zone">
            <article class="-inner-danger-zone">
                <section>
                    <div class="-danger-zone-content">
                        <div class="-danger-zone-header">
                            <div>
                                <h5 style="text-transform: uppercase">
                                    Danger zone
                                </h5>
                            </div>
                        </div>
                        <div class="-danger-zone-layout">
                            <div class="-inner">
                                <div class="-delete-account-card">
                                    <div class="-inner-delete-account-card">
                                        <div class="-svg">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="18"
                                                height="18"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            >
                                                <polygon
                                                    points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                                                <line
                                                    x1="12"
                                                    y1="8"
                                                    x2="12"
                                                    y2="12"
                                                ></line>
                                                <line
                                                    x1="12"
                                                    y1="16"
                                                    x2="12.01"
                                                    y2="16"
                                                ></line>
                                            </svg>
                                        </div>
                                        <div class="-content">
                                            <div>
                                                <h3>
                                                    <span>Delete your account will also remove all your personal information, order and payment method</span>
                                                </h3>
                                                <div>
                                                    <p>Make sure you understand what are you doing</p>
                                                    <div>
                                                        <button>
                                                            <span>Delete account</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </article>
        </div>
    </x-slot:content>
</x-layouts.account-layout>
