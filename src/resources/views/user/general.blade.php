<x-layouts.account-layout title="General" route-name="General" includeMainComponent="true">
    <x-slot:head>
        <link rel="stylesheet" href="{{ asset("css/user/general.css")}}" />
    </x-slot:head>

    <x-slot:content>
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
                                                <a href={"/reset-password"}>
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
