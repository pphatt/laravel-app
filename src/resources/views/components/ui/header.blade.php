<header class="header">
    <div @class(["main-navigator", "isScroll" => $isScroll]) id="main-navigator">
        <div class="navigator-left">
            <a class="button -shop-nav" id="-shop-nav" data-btn-type="default">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M5 12c0 3.859 3.14 7 7 7 3.859 0 7-3.141 7-7s-3.141-7-7-7c-3.86 0-7 3.141-7 7zm12 0c0 2.757-2.243 5-5 5s-5-2.243-5-5 2.243-5 5-5 5 2.243 5 5z"></path>
                </svg>
                Shop
            </a>
            <a class="button -info-nav" id="-info-nav" data-btn-type="default">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M5 12c0 3.859 3.14 7 7 7 3.859 0 7-3.141 7-7s-3.141-7-7-7c-3.86 0-7 3.141-7 7zm12 0c0 2.757-2.243 5-5 5s-5-2.243-5-5 2.243-5 5-5 5 2.243 5 5z"></path>
                </svg>
                Info
            </a>
        </div>
        <div class="header-title">
            <div class="header-content-title">
                <a href="/">
                    Tune Source
                </a>
            </div>
        </div>
        <div class="navigator-right">
            @auth
                <a href="{{ (auth()->user()->role == 0) ? (route("user.general")) : (route("admin.general")) }}" class="button" data-btn-type="link"
                   style="
                       text-overflow: ellipsis;
                       overflow: hidden;
                       white-space: nowrap;
                ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         fill="currentColor">
                        <path
                            d="M5 12c0 3.859 3.14 7 7 7 3.859 0 7-3.141 7-7s-3.141-7-7-7c-3.86 0-7 3.141-7 7zm12 0c0 2.757-2.243 5-5 5s-5-2.243-5-5 2.243-5 5-5 5 2.243 5 5z"></path>
                    </svg>
                    {{ explode("@", auth()->user()->name)[0] }}
                </a>
            @else
                <a href="{{ route("login") }}" class="button" data-btn-type="link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         fill="currentColor">
                        <path
                            d="M5 12c0 3.859 3.14 7 7 7 3.859 0 7-3.141 7-7s-3.141-7-7-7c-3.86 0-7 3.141-7 7zm12 0c0 2.757-2.243 5-5 5s-5-2.243-5-5 2.243-5 5-5 5 2.243 5 5z"></path>
                    </svg>
                    Sign in
                </a>
            @endauth
            <a href="/cart" class="button" data-btn-type="link">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921zM17.307 15h-6.64l-2.5-6h11.39l-2.25 6z"></path>
                    <circle cx="10.5" cy="19.5" r="1.5"></circle>
                    <circle cx="17.5" cy="19.5" r="1.5"></circle>
                </svg>
                Cart
                <span class="cart">0</span>
            </a>
        </div>
    </div>
    <div class="-nav-expand">
        <div class="-nav-expand-outer" id="-nav-expand-outer">
            <div class="-nav-expand-inner">
                <div id="-div" class="-div">
                    <div class="-nav-expand-content">
                        <ul id="-ul-nav"></ul>
                    </div>
                    <div id="line" class="line"></div>
                    <div id="-nav-expand-feature" class="-nav-expand-feature">
                        <div class="-feature-title">
                            <span id="-ft">Feature</span>
                        </div>
                        <div class="-product-card-featured">
                            <div class="-product-card-visual">
                                <div class="photo">
                                    <figure class="is-default">
                                        <div>
                                            <picture>
                                                <img
                                                    width="1200"
                                                    sizes="(min-width: 1200px) 33vw, (min-width: 768px) 50vw, 100vw"
                                                    decoding="async"
                                                    alt="{{ $products[4]->image_alt }}"
                                                    src="{{ asset("storage/images/" . $products[4]->default_image) }}"
                                                />
                                            </picture>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                            <div class="-product-card-details">
                                <div class="-product-card-header">
                                    <h2 class="-product-title">
                                        <a
                                            class="-product-link"
                                            href=""
                                        >
                                            {{$products[4]->name}}
                                        </a>
                                    </h2>
                                    <div class="-price">
                                        <span class="-price-current">${{$products[4]->price}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="-product-card-featured">
                            <div class="-product-card-visual">
                                <div class="photo">
                                    <figure class="is-default">
                                        <div>
                                            <picture>
                                                <img
                                                    width="1200"
                                                    sizes="(min-width: 1200px) 33vw, (min-width: 768px) 50vw, 100vw"
                                                    decoding="async"
                                                    alt="{{ $products[6]->image_alt }}"
                                                    src="{{ asset("storage/images/" . $products[6]->default_image) }}"
                                                />
                                            </picture>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                            <div class="-product-card-details">
                                <div class="-product-card-header">
                                    <h2 class="-product-title">
                                        <a
                                            class="-product-link"
                                            href=""
                                        >
                                            {{$products[6]->name}}
                                        </a>
                                    </h2>
                                    <div class="-price">
                                        <span class="-price-current">${{$products[6]->price}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="-back-drop" class="-back-drop"></div>
</header>
