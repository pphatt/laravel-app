<x-layouts.account-layout title="Manage Product" route-name="Manage Product" includeMainComponent="false">
    <x-slot:head>
        <link rel="stylesheet" href="{{ asset("css/admin/product-details.css")}}" />
    </x-slot:head>

    <x-slot:content>
        <div style="flex: 1; overflow: auto; max-height: 100vh">
            <section class="table">
                <div class="-inner-layout">
                    <div class="-table-layout">
                        <table class="-table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Category</th>
                                @if (!empty($products[0]->variant))
                                    <th>Color</th>
                                    <th>Size</th>
                                @endif
                                <th>Quantity</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @for($i = 0; $i < count($products); $i += 2)
                                <tr>
                                    <td>
                                        <span>{{str_pad($products[$i]->id, 7 - strlen($products[$i]->id), "0", STR_PAD_LEFT)}}</span>
                                    </td>
                                    <td>
                                        <span>
                                            {{$products[$i]->name}}
                                            @if (!empty($products[0]->variant))
                                                (Color: {{$products[$i]->variant}}, Size: {{$products[$i + 1]->variant}}
                                                )
                                            @endif
                                        </span>
                                    </td>
                                    <td>
                                        <span>{{$products[$i]->category}}</span>
                                    </td>
                                    @if (!empty($products[0]->variant))
                                        <td>
                                            <span>{{$products[$i]->variant}}</span>
                                        </td>
                                        <td>
                                            <span>{{$products[$i + 1]->variant}}</span>
                                        </td>
                                    @endif
                                    @if (!empty($products[0]->variant))
                                        <td>
                                            <span>{{$products[$i + 1]->quantity}}</span>
                                        </td>
                                    @else
                                        <td>
                                            <span>{{$products[$i]->quantity}}</span>
                                        </td>
                                    @endif
                                    <td>
                                        <span>${{(str_contains($products[$i]->price, ".")) ? $products[$i]->price : number_format((float)$products[$i]->price, 2, ".", "")}}</span>
                                    </td>
                                    <td style="width: 160px">
                                        <div class="view">
                                            <button data-state="false" data-pos="{{$products[$i]->id}}">
                                                <span>View Image</span>
                                            </button>
                                            <div class="modal" data-pos="{{$products[$i]->id}}" style="display: none">
                                                <div class="back-drop"></div>

                                                <div class="modal-layout">
                                                    <div class="modal-card">
                                                        <div class="modal-head">Image viewing</div>
                                                        <div class="-view-photo">
                                                            <img
                                                                src="{{$products[$i]->image}}"
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
        <script>
            document.querySelectorAll("button[data-state]").forEach((node) => {
                node.addEventListener("click", () => {
                    if (node.getAttribute("data-state") === "false") {
                        node.setAttribute("data-state", "true")

                        const modal = document.querySelector(`div[data-pos="${node.getAttribute("data-pos")}"]`)
                        modal.removeAttribute("style")

                        modal.querySelector("div").addEventListener("click", () => {
                            modal.setAttribute("style", "display: none")
                            node.setAttribute("data-state", "false")
                        })
                    }
                })
            })
        </script>
    </x-slot:content>
</x-layouts.account-layout>
