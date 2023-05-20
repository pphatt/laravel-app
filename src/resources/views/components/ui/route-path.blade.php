@php
    $url_parser = explode("/", explode("?", url()->full())[0]);
    $url_path = [];
    $flag = 0;

    array_push($url_path, $url_parser[3].".general");

    for ($i = 4; $i < count($url_parser); $i++) {
        if ($i == 5) {
            if ($url_parser[$i - 1] == "manage-account") {
                array_push($url_path, $url_parser[3] . "." . "account_details");
            } else if ($url_parser[$i - 1] == "manage-product") {
                array_push($url_path, $url_parser[3] . "." . "product_details");
            } else if ($url_parser[$i - 1] == "order") {
                array_push($url_path, $url_parser[3] . "." . "order_detail");
            }

            continue;
        }

        if ($url_parser[$i] == "add-product") {
            array_push($url_path, $url_parser[3] . "." . "add_product_get");
        } else if ($url_parser[$i] == "edit-product") {
            array_push($url_path, $url_parser[3] . "." . "edit_product_get");
            $flag++;
        } else if ($url_parser[$i] == "edit-account") {
            array_push($url_path, $url_parser[3] . "." . "edit_account_get");
            $flag++;
        } else if ($url_parser[$i] == "add-account") {
            array_push($url_path, $url_parser[3] . "." . "add_user_get");
        } else if ($url_parser[$i] == "profile" && $url_parser[3] == "user") {
            array_push($url_path, $url_parser[3] . "." . "profile_get");
        } else {
            array_push($url_path, $url_parser[3] . "." . str_replace("-", "_", $url_parser[$i]));
        }
    }

    /*
     * user/general
     * user/order
     * user/order/1
     *
     *
     * */
@endphp

<div class="-bar">
    <div class="-route">
        <a class="-home-route" href="{{ route("home") }}">
            Tune Source
        </a>
        @for($i = 3; $i < count($url_parser) - $flag; $i++)
            <div class="-sub-route">
                <span>
                    <svg
                        viewBox="0 0 24 24"
                        width="16"
                        height="16"
                        stroke="currentColor"
                        stroke-width="1"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        fill="none"
                        shape-rendering="geometricPrecision"
                    >
                        <path d="M16 3.549L7.12 20.600"></path>
                    </svg>
                </span>
                @if ($i == 5)
                    <a class="-current-route" style="text-transform: capitalize"
                       href="{{ route($url_path[$i - 3], ["id" => $url_parser[5]]) }}">{{ str_replace("-", " ", $url_parser[$i]) }}</a>
                @elseif($url_parser[$i] == "edit-product" || $url_parser[$i] == "edit-account")
                    <a class="-current-route" style="text-transform: capitalize"
                       href="{{ route($url_path[$i - 3], ["id" => $url_parser[5]]) }}">{{ str_replace("-", " ", $url_parser[$i]) }}</a>
                @else
                    <a class="-current-route" style="text-transform: capitalize"
                       href="{{ route($url_path[$i - 3]) }}">{{ str_replace("-", " ", $url_parser[$i]) }}</a>
                @endif
            </div>
        @endfor
    </div>
    <div class="-help-bar">
        <button>
        <span class="-text">
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
              <path
                  d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
            </svg>
            <span>Feedback system</span>
          </span>
        </button>
        <div></div>
    </div>
</div>
