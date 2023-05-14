@extends("layouts.sign-layout")

@section("header")
    <div class="-sign-header">
        <h1>Welcome back</h1>
        <h2>Sign in to your account</h2>
    </div>
@endsection

@section("form")
    <div class="-auth-section">
        <div class="-form-layout">
            <form>
                <div class="-form-inner-layout">
                    <div class="-input-section">
                        <div class="-input-title">
                            <div>
                                <span>Email</span>
                            </div>
                        </div>
                        <div class="-input">
                            <div>
                                <input
                                    id="email"
                                    type="email"
                                    placeholder="name@example.com"
                                    autocomplete="email"
                                    autocapitalize="none"
                                />
                            </div>
                            <p></p>
                        </div>
                    </div>
                    <div class="-input-section">
                        <div class="-input-email-title">
                            <div class="-input-title">
                                <div>
                                    <span>Password</span>
                                    <a href="">Forgot Password?</a>
                                </div>
                            </div>
                        </div>
                        <div class="-input">
                            <div>
                                <input
                                    id="password"
                                    type="password"
                                    placeholder="••••••••"
                                    autoComplete="email"
                                    autoCapitalize="none"
                                />
                            </div>
                            <p></p>
                        </div>
                    </div>
                    <div class="-sign-in">
                        <x-button disabled type="submit">Sign In</x-button>
                    </div>
                </div>
            </form>
        </div>
        <div class="-separator">
            <div class="-line">
                <div></div>
            </div>
            <div class="-text">
                <span>or</span>
            </div>
        </div>
        <div class="-third-party-auth">
            <div class="-github">
                <x-button>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="18"
                        height="18"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    >
                        <path
                            d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                    </svg>
                    <span>Continue with Github</span>
                </x-button>
            </div>
            <div class="-gmail">
                <x-button>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    >
                        <path
                            d="m18.73 5.41-1.28 1L12 10.46 6.55 6.37l-1.28-1A2 2 0 0 0 2 7.05v11.59A1.36 1.36 0 0 0 3.36 20h3.19v-7.72L12 16.37l5.45-4.09V20h3.19A1.36 1.36 0 0 0 22 18.64V7.05a2 2 0 0 0-3.27-1.64z"></path>
                    </svg>
                    <span>Continue with Gmail</span>
                </x-button>
            </div>
        </div>
        <div class="-sign-up-section">
            <span>Don&apos;t have an account?</span>
            <a href="/sign-up">Sign Up Now</a>
        </div>
    </div>
@endsection
