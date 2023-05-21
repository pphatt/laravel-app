<section class="marquee-section">
    <div class="marquee">
        <div id="-parent-marquee" class="marquee-layout">
            @for ($i = 0; $i < 2; $i++)
                <div data-marquee="true">
                    @for($j = 0; $j < 2; $j++)
                        <div class="marquee-items">
                            @foreach($products as $product)
                                <div class="marquee-product">
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
                                            <div class="-add-cart">
                                                <x-button>View details</x-button>
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
                                </div>
                            @endforeach
                        </div>
                    @endfor
                </div>
            @endfor
        </div>
    </div>
</section>
