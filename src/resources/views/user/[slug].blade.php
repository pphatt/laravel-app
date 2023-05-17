<x-layouts.account-layout title="General" route-name="Details" includeMainComponent="true">
    <x-slot:head>
        <link rel="stylesheet" href="{{ asset("css/user/order-details.css")}}" />
    </x-slot:head>

    <x-slot:content>
        <div class="-info-table">
            <article class="-inner-info-table">
                <section>
                    <div class="-table">
                        <div class="-table-title">
                            <div class="-table-title-s1">
                                <div class="-title">
                                    <p>Current order&apos;s description</p>
                                    <h3>Orders ID: {{$order_description[0]->id}}</h3>
                                </div>
                            </div>
                            <div class="-download">
                                <button>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="16"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                        <polyline points="7 10 12 15 17 10"></polyline>
                                        <line x1="12" y1="15" x2="12" y2="3"></line>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="-table-description">
                            <div class="-table-title-s1">
                                <div class="-title">
                                    <p>Address:</p>
                                    <p class="-description">
                                        {{$order_description[0]->address}}
                                    </p>
                                </div>
                                <div class="-title">
                                    <p>Order date:</p>
                                    <p class="-description">{{date("M j, Y", strtotime($order_description[0]->order_date))}}</p>
                                </div>
                                <div class="-title">
                                    <p>Deliver date:</p>
                                    <p class="-description">{{date("M j, Y", strtotime($order_description[0]->received_date))}}</p>
                                </div>
                                <div class="-title">
                                    <p>Payment method:</p>
                                    <p class="-description">{{$order_description[0]->payment}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="-table-header">
                            <div class="-inner">
                                <div class="-item">
                                    <p>item</p>
                                </div>
                                <div class="-amount">
                                    <p>amount</p>
                                </div>
                                <div class="-unit-price">
                                    <p>unit price</p>
                                </div>
                                <div class="-price">
                                    <p>price</p>
                                </div>
                            </div>
                        </div>
                        <div class="-table-content">
                            @foreach($order_details as $detail)
                                <div class="-row">
                                    <div class="-row-content">
                                        <div class="item">
                                            <p>{{$detail->name}}</p>
                                        </div>
                                        <div class="amount">
                                            <p>{{$detail->quantity}}</p>
                                        </div>
                                        <div class="unit-price">
                                            <p>
                                                ${{(str_contains($detail->unit_price, ".")) ? $detail->unit_price : number_format((float)$detail->unit_price, 2, ".", "")}}
                                            </p>
                                        </div>
                                        <div class="price">
                                            <p>${{(str_contains($detail->price, ".")) ? $detail->price : number_format((float)$detail->price, 2, ".", "")}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="-table-description-price">
                            <div class="-total">
                                <div class="-total-text">
                                    <p>Original Total</p>
                                </div>
                                <div class="-price">
                                    <span>$</span>
                                    <span>{{number_format((float)$order_description[0]->price, 1, ".", '')}}</span>
                                </div>
                            </div>
                            <div class="-shipping">
                                <div class="-shipping-text">
                                    <p>Shipping</p>
                                </div>
                                <div class="-price">
                                    <span>$</span>
                                    <span>10</span>
                                </div>
                            </div>
                            <div class="-sale">
                                <div class="-sale-text">
                                    <p>Voucher A (Free ship)</p>
                                </div>
                                <div class="-price">
                                    <span>-</span>
                                    <span>$</span>
                                    <span>10</span>
                                </div>
                            </div>
                            <div class="-total">
                                <div class="-total-text">
                                    <p>Total</p>
                                </div>
                                <div class="-price">
                                    <span>$</span>
                                    <h3>{{number_format((float)$order_description[0]->price, 1, ".", '')}}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </article>
        </div>
    </x-slot:content>
</x-layouts.account-layout>
