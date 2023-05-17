<x-layouts.account-layout title="Manage Product" route-name="Manage Product" includeMainComponent="false">
    <x-slot:head>
        <link rel="stylesheet" href="{{ asset("css/admin/product-details.css")}}" />

        <script type="module" src="{{ asset("js/product-details.js")}}" defer></script>
    </x-slot:head>

    <x-slot:content>
        <div style="flex: 1; overflow: auto; max-height: 100vh">
            <section class="table">
                <div class="-info-table">
                    <article class="-inner-info-table">
                        <section>
                            <div class="-table">
                                <div class="-table-title">
                                    <div class="-table-title-s1">
                                        <div class="-title">
                                            <p>Current product&apos;s description</p>
                                            <h3>Product ID: {{$product_description[0]->id}}</h3>
                                        </div>
                                    </div>
                                    <div class="-view-image">
                                        <button class="-view-image" data-image="1" data-state="false">View image 1</button>
                                        <div class="modal" data-image="1" style="display: none">
                                            <div class="back-drop"></div>

                                            <div class="modal-layout">
                                                <div class="modal-card">
                                                    <div class="modal-head">Image viewing</div>
                                                    <div class="-view-photo">
                                                        <img
                                                            src="{{ $product_description[0]->image_1 }}"
                                                            alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="-view-image" data-image="2" data-state="false">View image 2</button>
                                        <div class="modal" data-image="2" style="display: none">
                                            <div class="back-drop"></div>

                                            <div class="modal-layout">
                                                <div class="modal-card">
                                                    <div class="modal-head">Image viewing</div>
                                                    <div class="-view-photo">
                                                        <img
                                                            src="{{$product_description[0]->image_2}}"
                                                            alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="-table-description">
                                    <div class="-table-title-s1">
                                        <div class="-title">
                                            <p>Product name:</p>
                                            <p class="-description">
                                                {{$product_description[0]->name}}
                                            </p>
                                        </div>
                                        <div class="-title">
                                            <p>Product category: </p>
                                            <p class="-description">{{$product_description[0]->category}}</p>
                                        </div>
                                        <div class="-title">
                                            <p>Description: </p>
                                            <p class="-description">{{$product_description[0]->description}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </article>
                </div>
                <div class="-inner-layout">
                    <div class="-table-layout">
                        <table class="-table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Category</th>
                                @if (!empty($product_variants[0]->variant))
                                    <th>Color</th>
                                    <th>Size</th>
                                @endif
                                <th>Quantity</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @for($i = 0; $i < count($product_variants); $i += 2)
                                <tr>
                                    <td>
                                        <span>{{str_pad($product_variants[$i]->id, 7 - strlen($product_variants[$i]->id), "0", STR_PAD_LEFT)}}</span>
                                    </td>
                                    <td>
                                        <span>
                                            {{$product_variants[$i]->name}}
                                            @if (!empty($product_variants[0]->variant))
                                                (Color: {{$product_variants[$i]->variant}},
                                                Size: {{$product_variants[$i + 1]->variant}}
                                                )
                                            @endif
                                        </span>
                                    </td>
                                    <td>
                                        <span>{{$product_variants[$i]->category}}</span>
                                    </td>
                                    @if (!empty($product_variants[0]->variant))
                                        <td>
                                            <span>{{$product_variants[$i]->variant}}</span>
                                        </td>
                                        <td>
                                            <span>{{$product_variants[$i + 1]->variant}}</span>
                                        </td>
                                    @endif
                                    @if (!empty($product_variants[0]->variant))
                                        <td>
                                            <span>{{$product_variants[$i + 1]->quantity}}</span>
                                        </td>
                                    @else
                                        <td>
                                            <span>{{$product_variants[$i]->quantity}}</span>
                                        </td>
                                    @endif
                                    <td>
                                        <span>${{(str_contains($product_variants[$i]->price, ".")) ? $product_variants[$i]->price : number_format((float)$product_variants[$i]->price, 2, ".", "")}}</span>
                                    </td>
                                    <td style="width: 160px">
                                        <div class="view">
                                            <button data-state="false" data-pos="{{$product_variants[$i]->id}}">
                                                <span>View Image</span>
                                            </button>
                                            <div class="modal" data-pos="{{$product_variants[$i]->id}}" style="display: none">
                                                <div class="back-drop"></div>

                                                <div class="modal-layout">
                                                    <div class="modal-card">
                                                        <div class="modal-head">Image viewing</div>
                                                        <div class="-view-photo">
                                                            <img
                                                                src="{{$product_variants[$i]->image}}"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </x-slot:content>
</x-layouts.account-layout>
