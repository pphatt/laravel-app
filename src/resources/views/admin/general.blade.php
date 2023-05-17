<x-layouts.account-layout title="General" route-name="General" includeMainComponent="true">
    <x-slot:head>
        <link rel="stylesheet" href="{{ asset("css/admin/general.css")}}" />
    </x-slot:head>

    <x-slot:content>
        <div class="-header-section">
            <section>
                <h1>{{ auth()->user()->name }}</h1>
            </section>
            <nav>
                <div class="-nav-layout">
                    <div class="-inner-nav-layout">
                        <button class="-active">
                            <span>General</span>
                        </button>
                        <button>
                            <span>Profile</span>
                        </button>
                    </div>
                </div>
            </nav>
        </div>
        <div class="-card">
            <article class="-inner-card">
                <section>
                    <div class="-card-layout">
                        <div class="-card-header">
                            <div class="-text">
                                <h5>Account Information</h5>
                            </div>
                            <div class="-role">
                                <span>Admin</span>
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
                                                <a href="/reset-password">
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
    </x-slot:content>
</x-layouts.account-layout>
