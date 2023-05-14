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
                                        <x-product-card
                                            name="{{ $product->name}}"
                                            price="{{$product->price}}"
                                            discount="{{$product->discount}}"
                                            price-after-discount="{{round(((100 - $product->discount) / 100 * $product->price), 2)}}"
                                            default-image="{{$product->default_image}}"
                                            hover-image="{{$product->hover_image}}"
                                        >
                                            <x-slot:visual>
                                                <div class="-add-cart">
                                                    <x-button>Add to Card</x-button>
                                                </div>
                                            </x-slot:visual>
                                            <x-slot:details></x-slot:details>
                                        </x-product-card>
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
