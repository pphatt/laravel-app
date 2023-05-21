<x-layouts.default-layout title="Tune Source">
    <x-slot:head>
        <link rel="stylesheet" href="{{ asset("css/products.css") }}" />

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
            <section class="-product">
                <div class="-product-content">
                    <div class="-product-gallery">
                        <div>
                            <div class="-carousel">
                                <div class="-carousel-container">
                                    <div class="-carousel-p">
                                        <figure>
                                            <div>
                                                <picture>
                                                    <img sizes="(min-width: 940px) 50vw, 100vw" decoding="async"
                                                         alt="{{$product[0]->image_alt}}"
                                                         src="{{asset("storage/images/" . $product[0]->image_1)}}" />
                                                </picture>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="-product-details">
                        <div class="-product-info">
                            <div class="-product-header">
                                @if (!empty($product_variant_option))
                                    <div class="-product-variant">{{$product_variant_option[0]->name}} / {{$product_variant_option[1]->name}}</div>
                                @endif
                                <div class="-product-a">
                                    <span class="-product-name">{{$product[0]->name}}</span>
                                    <span
                                        class="-product-price">${{(str_contains($product[0]->price, ".")) ? $product[0]->price : number_format((float)$product[0]->price, 2, ".", "")}}</span>
                                </div>
                            </div>
                            <div class="-product-desc">
                                <p>
                                    {{$product[0]->description}}
                                </p>
                            </div>

                            @if (!empty($product_variant_option))
                                <div class="-product-options">
                                    <div class="option" data-option="color">
                                        <div class="option-title">Color</div>
                                        <div class="option-group">
                                            <button class="black" data-select="selected">
                                                <span></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="option" data-option="size">
                                        <div class="option-title">Size</div>
                                        <div class="option-group">
                                            <button class="small" data-select="selected">Small</button>
                                            <button class="medium" onclick="redirect()">Medium</button>

                                            <script>
                                                function redirect() {
                                                    return window.location.href = window.location.protocol + "//" + window.location.hostname + ":8000" + "/products/9"
                                                }
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="-product-action">
                            <form>
                                <input name="quantity" type="number" max="10" min="1" value="1" />
                                <button type="submit">Add to cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </x-slot:main>
</x-layouts.default-layout>
