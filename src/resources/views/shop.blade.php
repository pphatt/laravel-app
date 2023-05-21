<x-layouts.default-layout title="Tune Source" :$products>
    <x-slot:head>
        <link rel="stylesheet" href="{{ asset("css/shop.css") }}" />

        <script type="module" src="{{ asset("js/nav-animate-shop.js") }}" defer></script>
        <style>
            .header {
                height: auto;
            }
        </style>
    </x-slot:head>

    <x-slot:header>
        <x-ui.header is-scroll="true" :$products />
    </x-slot:header>

    <x-slot:main>
        <main class="main">
            <section class="collection">
                <div class="collection-tool">
                    <div class="sort">
                        <button class="-sort">
                            <span class="-sv">
                              <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="18"
                                  height="18"
                                  fill="currentColor"
                                  viewBox="0 0 16 16"
                              >
                                <path
                                    d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                              </svg>
                            </span>
                            <span class="-s">Sort:</span>
                            <span class="-o">Feature</span>
                        </button>
                    </div>
                </div>

                <div class="-a">
                    <div class="drawer">
                        <div class="inner-drawer">
                            <div class="-ft-section">
                                <div class="-ft-e">
                                    <div class="-ft-header">
                                        <span class="-ft-h-group">
                                          <span class="-ft-title">Sizes</span>
                                          <span class="-ft-arrow">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                color="currentColor"
                                            >
                                              <path
                                                  d="m12 6.879-7.061 7.06 2.122 2.122L12 11.121l4.939 4.94 2.122-2.122z"></path>
                                            </svg>
                                          </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="-ft-e">
                                    <div class="-ft-header">
                                      <span class="-ft-h-group">
                                        <span class="-ft-title">Color</span>
                                        <span class="-ft-arrow">
                                          <svg
                                              xmlns="http://www.w3.org/2000/svg"
                                              width="24"
                                              height="24"
                                              viewBox="0 0 24 24"
                                              color="currentColor"
                                          >
                                            <path
                                                d="m12 6.879-7.061 7.06 2.122 2.122L12 11.121l4.939 4.94 2.122-2.122z"></path>
                                          </svg>
                                        </span>
                                      </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="collection-content">
                        <div class="collection-products">
                            @foreach($products as $product)
                                <div class="-product-card">
                                    <div class="-product-card-visual">
                                        <div class="photo">
                                            <figure class="is-default">
                                                <div>
                                                    <picture>
                                                        <img
                                                            width="1200"
                                                            sizes="(min-width: 1200px) 33vw, (min-width: 768px) 50vw, 100vw"
                                                            decoding="async" alt={product_image_alt}
                                                            class="object-cover is-loaded"
                                                            src={{ asset("storage/images/" . $product->default_image) }} />
                                                    </picture>
                                                </div>
                                            </figure>
                                            @empty(!$product->hover_image)
                                                <figure class="is-hover">
                                                    <div>
                                                        <picture>
                                                            <img
                                                                width="1200"
                                                                sizes="(min-width: 1200px) 33vw, (min-width: 768px) 50vw, 100vw"
                                                                decoding="async" alt={product_image_alt}
                                                                class="object-cover is-loaded"
                                                                src={{ asset("storage/images/" . $product->hover_image) }} />
                                                        </picture>
                                                    </div>
                                                </figure>
                                            @endempty
                                        </div>
                                    </div>

                                    <div class="-product-card-details">
                                        <div class="-product-card-header">
                                            <h2 class="-product-title">
                                                <a class="-product-link" href="{{route("products", ["id" => $product->id])}}">{{$product->name}}</a>
                                            </h2>
                                            <div class="-price">
                                                @if(!empty($product->discount))
                                                    <span
                                                        class="-price-current">${{round(((100 - $product->discount) / 100 * $product->price), 2)}}</span>
                                                    <span class="-price-discount">{{$product->discount}}% off</span>
                                                @else
                                                    <span class="-price-current">${{$product->price}}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </x-slot:main>
</x-layouts.default-layout>
