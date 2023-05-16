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
                        src={{ $defaultImage }} />
                </picture>
            </div>
        </figure>
        @empty(!$hoverImage)
            <figure class="is-hover">
                <div>
                    <picture>
                        <img
                            width="1200"
                            sizes="(min-width: 1200px) 33vw, (min-width: 768px) 50vw, 100vw"
                            decoding="async" alt={product_image_alt}
                            class="object-cover is-loaded"
                            src={{$hoverImage}} />
                    </picture>
                </div>
            </figure>
        @endempty
    </div>

    {{ $visual }}
</div>

<div class="-product-card-details">
    <div class="-product-card-header">
        <h2 class="-product-title">
            <a class="-product-link" href="">{{$name}}</a>
        </h2>
        <div class="-price">
            @if(!empty($discount))
                <span
                    class="-price-current">${{$priceAfterDiscount}}</span>
                <span class="-price-discount">{{$discount}}% off</span>
            @else
                <span class="-price-current">${{$price}}</span>
            @endif
        </div>
    </div>

    {{ $details }}
</div>
