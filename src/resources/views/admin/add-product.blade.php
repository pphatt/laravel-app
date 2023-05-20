<x-layouts.account-layout title="Add Product" route-name="Add Product" includeMainComponent="false">
    <x-slot:head>
        <link rel="stylesheet" href="{{ asset("css/admin/add-product.css")}}" />

        <script>var exports = {}</script>
        <script type="module" src="{{ asset("js/dropdown.js")}}" defer></script>
        <script type="module" src="{{ asset("js/add-product.js")}}" defer></script>
    </x-slot:head>

    <x-slot:content>
        @if(!empty($success))
            <div class="alert">
                <div class="alert-panel">
                    <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                             viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </svg>
                    </span>
                    <div class="alert-content">
                        <div class="message">
                            <span>{{ $success }}</span>
                        </div>
                        <div class="close-btn">
                            <button>
                                <span>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="14"
                                        height="14"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                      <line x1="18" y1="6" x2="6" y2="18"></line>
                                      <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @elseif ($errors->any())
            <div class="alert">
                <div class="alert-panel">
                    <span class="icon">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="20"
                            height="20"
                            fill="currentColor"
                            viewBox="0 0 16 16"
                        >
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                        </svg>
                    </span>
                    <div class="alert-content">
                        <div class="message">
                            <span>{{ $errors->first() }}</span>
                        </div>
                        <div class="close-btn">
                            <button>
                                <span>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="14"
                                        height="14"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                      <line x1="18" y1="6" x2="6" y2="18"></line>
                                      <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
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
                                <form method="POST" action="{{ route("admin.add_product_post") }}" class="-form"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="-inner-card-content">
                                        <div class="-row">
                                            <div class="-inner-row">
                                                <div class="-row-title">
                                                    <span>Name</span>
                                                </div>
                                                <div class="-row-input">
                                                    <input type="text" name="name" placeholder="Input name" required />
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
                                                                    style="font-size: 0.875rem; line-height: 1.25rem;">Select</span>
                                                                <input hidden name="category" required />
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
                                                    <input type="text" name="price" placeholder="Input price"
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
                                                    <input type="text" name="quantity" placeholder="Input quantity"
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
                                                    <textarea placeholder="Input description"
                                                              name="description" required></textarea>
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
                                                            <input id="photo_1" type="file" name="image_1"
                                                                   accept="image/png, image/jpg, image/jpeg" required />
                                                            <label for="photo_1" class="photo">
                                                                Upload Photo
                                                            </label>
                                                        </div>
                                                        <div style="display: flex; align-items: center; gap: 8px">
                                                            <button type="button" data-image="image_1"
                                                                    data-state="false" disabled>
                                                                <span>View Photo</span>
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
                                                            <input id="photo_2" type="file" name="image_2"
                                                                   accept="image/png, image/jpg, image/jpeg" required />
                                                            <label for="photo_2" class="photo">
                                                                Upload Photo
                                                            </label>
                                                        </div>
                                                        <div style="display: flex; align-items: center; gap: 8px"
                                                             disabled>
                                                            <button type="button" data-image="image_2"
                                                                    data-state="false" disabled>
                                                                <span>View Photo</span>
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
                <div>

                </div>
            </div>
        </div>
    </x-slot:content>
</x-layouts.account-layout>
