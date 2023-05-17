<x-layouts.default-layout title="Tune Source" is-scroll="true" :$products>
    <x-slot:head>
        <link rel="stylesheet" href="{{ asset("css/shop.css") }}" />
    </x-slot:head>

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

                    <div class="collection-content">
                        <div class="collection-products">

                        </div>
                    </div>
                </div>
            </section>
        </main>
    </x-slot:main>
</x-layouts.default-layout>
