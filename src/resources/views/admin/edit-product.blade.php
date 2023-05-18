<x-layouts.account-layout title="Manage Account" route-name="Manage Account" includeMainComponent="false">
    <x-slot:head>
        <link rel="stylesheet" href="{{ asset("css/admin/edit-product.css")}}" />

        <script type="module" src="{{ asset("js/edit-product.js")}}" defer></script>
    </x-slot:head>

    <x-slot:content>
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
                                <form method="POST" action="{{ route("admin.edit_product_post", ["id" => $id]) }}"
                                      class="-form"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="-inner-card-content">
                                        <div class="-row">
                                            <div class="-inner-row">
                                                <div class="-row-title">
                                                    <span>Name</span>
                                                </div>
                                                <div class="-row-input">
                                                    <input type="text" name="old_name" value="{{$product[0]->name}}"
                                                           hidden />
                                                    <input type="text" name="name" placeholder="Input name"
                                                           value="{{$product[0]->name}}"
                                                           required />
                                                    <p data-error-name="name"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="-row">
                                            <div class="-inner-row">
                                                <div class="-row-title">
                                                    <span>Category</span>
                                                </div>
                                                <div class="-row-input">
                                                    <div class="-category-dropdown">
                                                        <button data-state="false" type="button">
                                                            <span class="-text">
                                                                <span
                                                                    style="font-size: 0.875rem; line-height: 1.25rem;">{{$product[0]->category}}</span>
                                                                <input hidden name="category" value="{{$product[0]->category}}" required />
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
                                        <div class="-row">
                                            <div class="-inner-row">
                                                <div class="-row-title">
                                                    <span>Price</span>
                                                </div>
                                                <div class="-row-input">
                                                    <input type="text" name="old_price" value="{{$product[0]->price}}"
                                                           hidden />
                                                    <input type="text" name="price" placeholder="Input price"
                                                           value="{{$product[0]->price}}"
                                                           required />
                                                    <p data-error-name="price"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="-row">
                                            <div class="-inner-row">
                                                <div class="-row-title">
                                                    <span>Quantity</span>
                                                </div>
                                                <div class="-row-input">
                                                    <input type="text" name="old_quantity"
                                                           value="{{$product[0]->quantity}}" hidden />
                                                    <input type="text" name="quantity" placeholder="Input quantity"
                                                           value="{{$product[0]->quantity}}"
                                                           required />
                                                    <p data-error-name="quantity"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="-row">
                                            <div class="-inner-row">
                                                <div class="-row-title">
                                                    <span>Description</span>
                                                </div>
                                                <div class="-row-input">
                                                    <textarea name="old_description"
                                                              hidden>{{$product[0]->description}}</textarea>
                                                    <textarea placeholder="Input description" name="description"
                                                              required>{{$product[0]->description}}</textarea>
                                                    <p data-error-name="description"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="-row" style="margin: 8px 0">
                                            <div class="-inner-row">
                                                <div class="-row-title">
                                                    <span>Photo 1</span>
                                                </div>
                                                <div class="-row-input">
                                                    <div style="display: flex; align-items: center; gap: 8px">
                                                        <div
                                                            style="display: flex; align-items: center">
                                                            <input id="old_photo_1" type="file" name="old_image_1"
                                                                   src="{{asset("storage/images/" . $product[0]->image_1)}}"
                                                                   hidden />
                                                            <input id="photo_1" type="file" name="image_1"
                                                                   accept="image/png, image/jpg" />
                                                            <label for="photo_1" class="photo">
                                                                Upload Photo
                                                            </label>
                                                        </div>
                                                        <div style="display: flex; align-items: center; gap: 8px">
                                                            <button type="button" data-image="old_image_1"
                                                                    data-state="false">
                                                                <span>View Old Photo</span>
                                                            </button>
                                                        </div>
                                                        <div style="display: flex; align-items: center; gap: 8px">
                                                            <button type="button" data-image="image_1"
                                                                    data-state="false" disabled>
                                                                <span>View New Photo</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <p data-error-name="image_1"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="-row" style="margin: 8px 0">
                                            <div class="-inner-row">
                                                <div class="-row-title">
                                                    <span>Photo 2</span>
                                                </div>
                                                <div class="-row-input">
                                                    <div style="display: flex; align-items: center; gap: 8px">
                                                        <div
                                                            style="display: flex; align-items: center">
                                                            <input id="old_photo_2" type="file" name="old_image_2"
                                                                   src="{{asset("storage/images/" . $product[0]->image_2)}}"
                                                                   hidden />

                                                            <input id="photo_2" type="file" name="image_2"
                                                                   accept="image/png, image/jpg" />

                                                            <label for="photo_2" class="photo">
                                                                Upload Photo
                                                            </label>
                                                        </div>
                                                        <div style="display: flex; align-items: center; gap: 8px"
                                                             disabled>
                                                            <button type="button" data-image="old_image_2"
                                                                    data-state="false">
                                                                <span>View Old Photo</span>
                                                            </button>
                                                        </div>
                                                        <div style="display: flex; align-items: center; gap: 8px"
                                                             disabled>
                                                            <button type="button" data-image="image_2"
                                                                    data-state="false" disabled>
                                                                <span>View New Photo</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <p data-error-name="image_2"></p>
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
                <div></div>
            </div>
        </div>
    </x-slot:content>
</x-layouts.account-layout>
