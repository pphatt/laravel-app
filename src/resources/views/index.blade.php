<x-default-layout title="Tune Source" is-scroll="false" :$products>
    <x-slot:head>
        <link rel="stylesheet" href="{{ asset("css/index.css") }}" />
    </x-slot:head>

    <x-slot:main>
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
                        <a href="/" class="button shop-vinyls" data-btn-type="link">
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
                                <a href="/shop" class="button"
                                   data-btn-type="link">
                                    Start shopping
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <x-marquee :$products />

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
                                <p>Duis do sunt quis anim veniam elit nostrud sint velit non ad. Reprehenderit sit ipsum
                                    do
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
    </x-slot:main>
</x-default-layout>
