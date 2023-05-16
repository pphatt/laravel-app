<x-layouts.account-layout title="General" route-name="General">
    <x-slot:head>
        <link rel="stylesheet" href="{{ asset("css/user/order.css")}}" />
    </x-slot:head>

    <x-slot:content>
        <div class="-header-section">
            <section>
                <h1>{{auth()->user()->name}}</h1>
            </section>
            <nav>
                <div class="-nav-layout">
                    <div class="-inner-nav-layout">
                        <button class="-active">
                            <span>Order</span>
                        </button>
                        <button>
                            <span>Voucher</span>
                        </button>
                    </div>
                </div>
            </nav>
        </div>
        <section class="-layout-1">
            <div class="-inner-layout">
                <div class="-table-layout">
                    <table class="-table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Address</th>
                            <th>Phone number</th>
                            <th>Total</th>
                            <th>Order date</th>
                            <th>Receive date</th>
                            <th>Shipping method</th>
                            <th>Payment method</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @if (empty($orders))
                            <tr></tr>
                        @else
                            @foreach($orders as $order)
                                <tr>
                                    <td>
                                        <span>{{$order->id}}</span>
                                    </td>
                                    <td>
                                        <span>{{$order->address}}</span>
                                    </td>
                                    <td>
                                        <span>{{$order->phone}}</span>
                                    </td>
                                    <td>
                                        <span>{{$order->total}}</span>
                                    </td>
                                    <td>
                                        <span>{{$order->order_date}}</span>
                                    </td>
                                    <td>
                                        <span>{{$order->received_date}}</span>
                                    </td>
                                    <td>
                                        <span>{{$order->shipping_method}}</span>
                                    </td>
                                    <td>
                                        <span>{{$order->payment_method}}</span>
                                    </td>
                                    <td>
                                        <span
                                            class="{{$order->order_status == "Successful" ? 'success' : $order->order_status}}">{{$order->order_status}}</span>
                                    </td>
                                    <td style="width: 200px">
                                        <div class="view">
                                            <a
                                                data-details={true}
                                                href="{{ route("user.order_detail", ["id" => $order->id]) }}"
                                                target={"_blank"}
                                            >
                                                <p>View details</p>
                                            </a>
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="21"
                                                height="21"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            >
                                                <polyline points="9 18 15 12 9 6"></polyline>
                                            </svg>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </x-slot:content>
</x-layouts.account-layout>
