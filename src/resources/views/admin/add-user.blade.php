<x-layouts.account-layout title="Add Account" route-name="Add Account" includeMainComponent="false">
    <x-slot:head>
        <link rel="stylesheet" href="{{ asset("css/admin/add-user.css")}}" />

        <script type="module" src="{{ asset("js/add-user.js")}}" defer></script>
    </x-slot:head>

    <x-slot:content>
        @if(!empty($success))
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
                            <span>{{ $success }}</span>
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
        <div style="flex: 1; overflow: auto; max-height: 100vh">
            <div class="-card">
                <article class="-inner-card">
                    <section>
                        <div class="-card-layout">
                            <div class="-card-header">
                                <div class="-text">
                                    <h5>Add new product</h5>
                                </div>
                            </div>
                            <div class="-card-content">
                                <form method="POST" action="{{ route("admin.add_user_post") }}" class="-form">
                                    @csrf
                                    <div class="-inner-card-content">
                                        <div class="-row">
                                            <div class="-inner-row">
                                                <div class="-row-title">
                                                    <span>Email</span>
                                                </div>
                                                <div class="-row-input">
                                                    <input type="email" name="email" placeholder="Input email"
                                                           required />
                                                    <p data-error-name="name"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="-row">
                                            <div class="-inner-row">
                                                <div class="-row-title">
                                                    <span>Password</span>
                                                </div>
                                                <div class="-row-input">
                                                    <input type="password" name="password" placeholder="Input password"
                                                           required />
                                                    <p data-error-name="name"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="-row">
                                            <div class="-inner-row">
                                                <div class="-row-title">
                                                    <span>Role</span>
                                                </div>
                                                <div class="-row-input">
                                                    <div class="-category-dropdown">
                                                        <button data-state="false" type="button">
                                                            <span class="-text">
                                                                <span
                                                                    style="font-size: 0.875rem; line-height: 1.25rem;">
                                                                    Select
                                                                </span>
                                                                <input hidden name="role" required />
                                                            </span>
                                                            <span class="-svg">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 20 20"
                                                                    fill="currentColor"
                                                                    aria-hidden="true"
                                                                >
                                                                    <path
                                                                        fill-rule="evenodd"
                                                                        d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                                        clip-rule="evenodd"
                                                                    ></path>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        <div></div>
                                                    </div>
                                                    <p data-error-name="category"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="-action-button">
                                        <button type="reset">Cancel</button>
                                        <button type="submit">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </article>
                <div>

                </div>
            </div>
        </div>
    </x-slot:content>
</x-layouts.account-layout>
