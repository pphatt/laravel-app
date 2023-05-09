<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset("css/global.css") }}" />
    <link rel="stylesheet" href="{{ asset("css/index.css") }}" />
    <link rel="stylesheet" href="{{ asset("css/components/button.css") }}" />

    <title>Tune Source</title>
    <script>var exports = {}</script>
    <script type="module" src="{{ asset("js/helper.js") }}" defer></script>
    <script type="module" src="{{ asset("js/marquee.js") }}" defer></script>
    <script type="module" src="{{ asset("js/nav-animate.js") }}" defer></script>
</head>
<body>
<div class="home">
    <div class="promo-bar">
        <div class="promo-bar-content">
            <a class="promo-content-link">
                Free shipping on order over $666
            </a>
        </div>
    </div>

    <header class="header">
        <div class="main-navigator" id="main-navigator">
            <div class="navigator-left">
                <button class="button -shop-nav" id="-shop-nav" data-btn-type="default">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         fill="currentColor">
                        <path
                            d="M5 12c0 3.859 3.14 7 7 7 3.859 0 7-3.141 7-7s-3.141-7-7-7c-3.86 0-7 3.141-7 7zm12 0c0 2.757-2.243 5-5 5s-5-2.243-5-5 2.243-5 5-5 5 2.243 5 5z"></path>
                    </svg>
                    Shop
                </button>
                <button class="button -info-nav" id="-info-nav" data-btn-type="default">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         fill="currentColor">
                        <path
                            d="M5 12c0 3.859 3.14 7 7 7 3.859 0 7-3.141 7-7s-3.141-7-7-7c-3.86 0-7 3.141-7 7zm12 0c0 2.757-2.243 5-5 5s-5-2.243-5-5 2.243-5 5-5 5 2.243 5 5z"></path>
                    </svg>
                    Info
                </button>
            </div>
            <div class="header-title">
                <div class="header-content-title">
                    <a href="">
                        Tune Source
                    </a>
                </div>
            </div>
            <div class="navigator-right">
                <a href="" class="button" data-btn-type="link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         fill="currentColor">
                        <path
                            d="M5 12c0 3.859 3.14 7 7 7 3.859 0 7-3.141 7-7s-3.141-7-7-7c-3.86 0-7 3.141-7 7zm12 0c0 2.757-2.243 5-5 5s-5-2.243-5-5 2.243-5 5-5 5 2.243 5 5z"></path>
                    </svg>
                    Sign in
                </a>
                <a href="" class="button" data-btn-type="link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         fill="currentColor">
                        <path
                            d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921zM17.307 15h-6.64l-2.5-6h11.39l-2.25 6z"></path>
                        <circle cx="10.5" cy="19.5" r="1.5"></circle>
                        <circle cx="17.5" cy="19.5" r="1.5"></circle>
                    </svg>
                    Cart
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
                                                        alt="front of black Ultra Magic shirt"
                                                        src="https://cdn.sanity.io/images/ieasd5lg/production/44465ea927eb678f562b5f2d938a81c7d054cbb4-2400x1800.jpg?w=1200&amp;q=80&amp;fit=max&amp;auto=format"
                                                    />
                                                </picture>
                                            </div>
                                        </figure>
                                        <figure class="is-hover">
                                            <div>
                                                <picture>
                                                    <img
                                                        width="1200"
                                                        sizes="(min-width: 1200px) 33vw, (min-width: 768px) 50vw, 100vw"
                                                        decoding="async"
                                                        alt="front of black Ultra Magic shirt"
                                                        src="https://cdn.sanity.io/images/ieasd5lg/production/9fcd6d25c0f0cb7851f47fb62426e03e317ccbbd-2400x1800.jpg?w=1200&amp;q=80&amp;fit=max&amp;auto=format"
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
                                                Ultra Magic Tee
                                            </a>
                                        </h2>
                                        <div class="-price">
                                            <span class="-price-current">$24.95</span>
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
                                                        alt="front cover of Ultra Magic vinyl"
                                                        src="https://cdn.sanity.io/images/ieasd5lg/production/6f7afac34661661fd162cb89f8b01f3534fa9f3b-2049x2016.jpg?w=1200&amp;q=80&amp;fit=max&amp;auto=format"
                                                    />
                                                </picture>
                                            </div>
                                        </figure>
                                        <figure class="is-hover">
                                            <div>
                                                <picture>
                                                    <img
                                                        width="1200"
                                                        sizes="(min-width: 1200px) 33vw, (min-width: 768px) 50vw, 100vw"
                                                        decoding="async"
                                                        alt="front cover of Ultra Magic vinyl"
                                                        src="https://cdn.sanity.io/images/ieasd5lg/production/a2e872eb3708f987cb0ec98d9fead7a09a42a7c4-2049x2016.jpg?w=1200&amp;q=80&amp;fit=max&amp;auto=format"
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
                                                Ultra Magic
                                            </a>
                                        </h2>
                                        <div class="-price">
                                            <span class="-price-current">$28</span>
                                            <span class="-price-discount">20%</span>
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

    <main>
        <section class="hero">
            <div class="hero-overlay">
                <div class="hero-content">
                    <div class="hero-src">
                        <h1> Your music. Delivered.</h1>
                        <p>Find and buy music vinyls.</p>
                    </div>
                </div>
                <div>
                    <a href="" class="button shop-vinyls" data-btn-type="link">
                        Shop vinyls
                    </a>
                </div>
            </div>
            <figure class="hero-picture">
                <div class="hero-picture-layout">
                    <picture>
                        <img width="1600" sizes="100vw" decoding="async"
                             alt="Person looking at the Ultra Magic vinyl from a bin"
                             src="https://cdn.sanity.io/images/ieasd5lg/production/19b0007fbc7e3c56883c5ee06d9ad04240fefa86-1800x1200.jpg?w=1600&amp;q=80&amp;fit=max&amp;auto=format"
                             srcSet="https://cdn.sanity.io/images/ieasd5lg/production/19b0007fbc7e3c56883c5ee06d9ad04240fefa86-1800x1200.jpg?rect=0,100,1800,1013&amp;w=800&amp;h=450&amp;q=80&amp;fit=max&amp;auto=format 800w,https://cdn.sanity.io/images/ieasd5lg/production/19b0007fbc7e3c56883c5ee06d9ad04240fefa86-1800x1200.jpg?rect=0,100,1800,1013&amp;w=1000&amp;h=563&amp;q=80&amp;fit=max&amp;auto=format 1000w,https://cdn.sanity.io/images/ieasd5lg/production/19b0007fbc7e3c56883c5ee06d9ad04240fefa86-1800x1200.jpg?rect=0,100,1800,1013&amp;w=1200&amp;h=675&amp;q=80&amp;fit=max&amp;auto=format 1200w,https://cdn.sanity.io/images/ieasd5lg/production/19b0007fbc7e3c56883c5ee06d9ad04240fefa86-1800x1200.jpg?rect=0,100,1800,1013&amp;w=1600&amp;h=900&amp;q=80&amp;fit=max&amp;auto=format 1600w" />
                    </picture>
                </div>
            </figure>
        </section>

        <section class="section">
            <div class="section-content">
                <div class="section-inner-content">
                    <div class="s-c">
                        <p class="section-content-src">
                            Laboris laboris nostrud et cillum
                            pariatur id deserunt fugiat magna reprehenderit. Reprehenderit laborum quis est pariatur
                            ipsum dolor
                            consequat ut minim.
                        </p>
                        <div class="section-content-b">
                            <a href="" class="button"
                               data-btn-type="link">
                                Start shopping
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="marquee-section">
            <div class="marquee">
                <div id="-parent-marquee" class="marquee-layout"></div>
            </div>
        </section>

        <section class="section-1">
            <div class="section-content">
                <div class="inner-section-content">
                    <div class="-picture">
                        <div class="rc">
                            <figure>
                                <div class="ar">
                                    <picture>
                                        <img sizes="(min-width: 940px) 50vw, 100vw" decoding="async"
                                             alt="Person wearing the red American Towers tee at night"
                                             class="object-cover is-loaded"
                                             src="https://cdn.sanity.io/images/ieasd5lg/production/a4715c4e851f8a7834af0aeee4b9c7507bb3e769-1920x1440.png?q=80&amp;fit=max&amp;auto=format"
                                             srcSet="https://cdn.sanity.io/images/ieasd5lg/production/a4715c4e851f8a7834af0aeee4b9c7507bb3e769-1920x1440.png?rect=240,0,1440,1440&amp;w=400&amp;h=400&amp;q=80&amp;fit=max&amp;auto=format 400w,https://cdn.sanity.io/images/ieasd5lg/production/a4715c4e851f8a7834af0aeee4b9c7507bb3e769-1920x1440.png?rect=240,0,1440,1440&amp;w=600&amp;h=600&amp;q=80&amp;fit=max&amp;auto=format 600w,https://cdn.sanity.io/images/ieasd5lg/production/a4715c4e851f8a7834af0aeee4b9c7507bb3e769-1920x1440.png?rect=240,0,1440,1440&amp;w=800&amp;h=800&amp;q=80&amp;fit=max&amp;auto=format 800w,https://cdn.sanity.io/images/ieasd5lg/production/a4715c4e851f8a7834af0aeee4b9c7507bb3e769-1920x1440.png?rect=240,0,1440,1440&amp;w=1000&amp;h=1000&amp;q=80&amp;fit=max&amp;auto=format 1000w,https://cdn.sanity.io/images/ieasd5lg/production/a4715c4e851f8a7834af0aeee4b9c7507bb3e769-1920x1440.png?rect=240,0,1440,1440&amp;w=1200&amp;h=1200&amp;q=80&amp;fit=max&amp;auto=format 1200w" />
                                    </picture>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <div class="-content-right">
                        <div class="-content-right-src">
                            <h2>Nostrud id proident</h2>
                            <p>Duis do sunt quis anim veniam elit nostrud sint velit non ad. Reprehenderit sit ipsum do
                                ipsum nostrud.
                                Eiusmod minim velit ex dolor enim irure consectetur deserunt aliqua non.
                            </p>
                            <a href="" class="button shop-vinyls" data-btn-type="link">Our Story</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="-footer">
        <div class="-footer-">
            <div class="-footer-block">
                <h2>Newsletter</h2>
                <form>
                    <div>
                        <input type="email" name="email" inputMode="email" autoComplete="email"
                               placeholder="Email Address" />
                        <button class="button" data-btn-type="default">Send</button>
                    </div>
                </form>
            </div>
            <div class="-footer-block">
                <h2>Shop</h2>
                <ul>
                    <li><a href="">Everything</a></li>
                    <li><a href="">Vinyls</a></li>
                    <li><a href="">Apparel</a></li>
                    <li><a href="">Posters</a></li>
                </ul>
            </div>
            <div class="-footer-block">
                <h2>Info</h2>
                <ul>
                    <li><a href="">Our Story</a></li>
                    <li><a href="">FAQ</a></li>
                    <li><a href="">Returns</a></li>
                    <li><a href="">Terms of Service</a></li>
                    <li><a href="">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="-footer-block">
                <h2>Get Social</h2>
                <div class="-social-link">
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" aria-labelledby="github-"
                             class="icon">
                            <title id="github-">Github</title>
                            <path
                                d="M50,20.056a30.705,30.705,0,0,0-9.7,59.835c1.535.282,2.1-.666,2.1-1.48,0-.728-.027-2.659-.042-5.221-8.54,1.855-10.342-4.116-10.342-4.116-1.4-3.547-3.409-4.491-3.409-4.491-2.787-1.905.211-1.866.211-1.866,3.081.217,4.7,3.164,4.7,3.164,2.739,4.691,7.186,3.337,8.935,2.551A6.564,6.564,0,0,1,44.4,64.327c-6.817-.775-13.985-3.409-13.985-15.174a11.866,11.866,0,0,1,3.161-8.238,11.039,11.039,0,0,1,.3-8.126s2.577-.825,8.442,3.148a29.087,29.087,0,0,1,15.373,0c5.862-3.973,8.435-3.148,8.435-3.148a11.027,11.027,0,0,1,.3,8.126,11.844,11.844,0,0,1,3.156,8.238c0,11.8-7.178,14.39-14.018,15.15,1.1.948,2.084,2.822,2.084,5.686,0,4.1-.037,7.416-.037,8.422,0,.821.553,1.777,2.111,1.477A30.707,30.707,0,0,0,50,20.056Z"></path>
                        </svg>
                    </a>
                    <a href="" target="_blank" rel="noopener noreferrer">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" aria-labelledby="instagram-"
                             class="icon">
                            <title id="instagram-">Instagram</title>
                            <path
                                d="M50.007,34.62A15.38,15.38,0,1,0,65.387,50,15.355,15.355,0,0,0,50.007,34.62Zm0,25.379a10,10,0,1,1,10-10,10.017,10.017,0,0,1-10,10h0ZM69.6,33.991A3.587,3.587,0,1,1,66.016,30.4,3.579,3.579,0,0,1,69.6,33.991Zm10.186,3.641c-0.228-4.805-1.325-9.062-4.846-12.569s-7.764-4.6-12.569-4.846c-4.953-.281-19.8-0.281-24.75,0-4.792.228-9.049,1.325-12.569,4.832s-4.6,7.764-4.846,12.569c-0.281,4.953-.281,19.8,0,24.75,0.228,4.805,1.325,9.062,4.846,12.569s7.764,4.6,12.569,4.846c4.953,0.281,19.8.281,24.75,0,4.805-.228,9.062-1.325,12.569-4.846s4.6-7.764,4.846-12.569c0.281-4.953.281-19.784,0-24.736h0Zm-6.4,30.05a10.123,10.123,0,0,1-5.7,5.7c-3.949,1.566-13.318,1.2-17.682,1.2s-13.747.348-17.682-1.2a10.123,10.123,0,0,1-5.7-5.7c-1.566-3.949-1.2-13.318-1.2-17.682s-0.348-13.747,1.2-17.682a10.123,10.123,0,0,1,5.7-5.7c3.949-1.566,13.318-1.2,17.682-1.2s13.747-.348,17.682,1.2a10.123,10.123,0,0,1,5.7,5.7C74.957,36.267,74.6,45.636,74.6,50S74.957,63.747,73.391,67.682Z"></path>
                        </svg>
                    </a>
                    <a href="" target="_blank" rel="noopener noreferrer">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" aria-labelledby="twitter-"
                             class="icon">
                            <title id="twitter-">Twitter</title>
                            <path
                                d="M69.861,39.816c0.032,0.444.032,0.888,0.032,1.333C69.892,54.7,59.581,70.3,40.736,70.3A28.958,28.958,0,0,1,25,65.7a21.2,21.2,0,0,0,2.475.127A20.523,20.523,0,0,0,40.2,61.453a10.266,10.266,0,0,1-9.581-7.107,12.923,12.923,0,0,0,1.935.159,10.838,10.838,0,0,0,2.7-.349A10.249,10.249,0,0,1,27.03,44.1V43.972a10.32,10.32,0,0,0,4.632,1.3A10.263,10.263,0,0,1,28.49,31.567,29.128,29.128,0,0,0,49.619,42.291a11.568,11.568,0,0,1-.254-2.348A10.257,10.257,0,0,1,67.1,32.931a20.175,20.175,0,0,0,6.5-2.475A10.22,10.22,0,0,1,69.1,36.1,20.543,20.543,0,0,0,75,34.518a22.028,22.028,0,0,1-5.139,5.3h0Z"></path>
                        </svg>
                    </a>
                </div>
                <p>© 2023. All Rights Reserved.</p></div>
        </div>
    </footer>
</div>
</body>
</html>
