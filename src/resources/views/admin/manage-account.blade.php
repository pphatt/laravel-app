<x-layouts.account-layout title="Manage Account" route-name="Manage Account" includeMainComponent="false">
    <x-slot:head>
        <link rel="stylesheet" href="{{ asset("css/admin/manage-account.css")}}" />

        <script type="module" src="{{ asset("js/add-account.js")}}" defer></script>
    </x-slot:head>

    <x-slot:content>
        <div style="flex: 1; overflow: auto; max-height: 100vh">
            <div class="-action-bar">
                <div class="-action-bar-layout">
                    <div class="-action-input-group">
                        <div class="-search">
                            <input type="text" placeholder="Search" />
                            <span>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="14"
                                    height="14"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                  <circle cx="11" cy="11" r="8"></circle>
                                  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg>
                            </span>
                        </div>
                        <div class="-filter-table-by">
                            <button data-state="false" data-pos="1">
                                <span class="-text">
                                    <span>User</span>
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
                        <div class="-filter-table-by">
                            <button data-state="false" data-pos="2">
                                <span class="-text">
                                    <span>Name</span>
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
                    </div>
                    <div class="-action-button-group">
                        <button onclick="redirect(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                 style="display: block; vertical-align: middle;">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                            <span style="margin-left: 8px;">Add new user</span>
                        </button>

                        <script>
                            function redirect() {
                                return window.location.href = window.location.protocol + "//" + window.location.hostname + ":8000" + "/admin/add-account"
                            }
                        </script>
                    </div>
                </div>
            </div>
            <section class="table">
                <div class="-inner-layout">
                    <div class="-table-layout">
                        <table class="-table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Role</th>
                                <th>Email</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Address</th>
                                <th>Phone number</th>
                                <th>Sex</th>
                                <th>State</th>
                                <th>Created</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @if (count($users) > 0)
                                @foreach($users as $user)
                                    <tr>
                                        <td>
                                            <span>{{str_pad($user->id, 7 - strlen($user->id), "0", STR_PAD_LEFT)}}</span>
                                        </td>
                                        <td>
                                            <span>{{($user->role == "1") ? "Admin" : "User"}}</span>
                                        </td>
                                        <td>
                                            <span>{{$user->email}}</span>
                                        </td>
                                        <td>
                                            <span>{{$user->name}}</span>
                                        </td>
                                        <td>
                                            <span>{{empty($user->age) ? "-" : $user->age}}</span>
                                        </td>
                                        <td>
                                            <span>{{empty($user->address) || ($user->address == "null") ? "-" : $user->address}}</span>
                                        </td>
                                        <td>
                                            <div>
                                                <span>{{empty($user->phone_number) || ($user->phone_number == "null") ? "-" : $user->phone_number}}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span>{{ $user->sex }}</span>
                                        </td>
                                        <td>
                                            <span class="status"
                                                  data-status="{{$user->state}}">{{($user->state == 0) ? "Active" : "Deleted"}}</span>
                                        </td>
                                        <td style="width: 170px">
                                            <div>
                                                <span>{{empty($user->created_at) ? "-" : date("M j, Y H:i", strtotime($user->created_at))}}</span>
                                            </div>
                                        </td>
                                        <td style="width: 200px">
                                            <div class="view">
                                                <a
                                                    data-edit="true"
                                                    href="{{route("admin.edit_account_get", ["id" => $user->id])}}"
                                                    target="_blank"
                                                >
                                                    <p>Edit</p>
                                                </a>
                                                <a
                                                    data-details="true"
                                                    href="{{route("admin.account_details", ["id" => $user->id])}}"
                                                    target="_blank"
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
                            @else
                                <tr>
                                    <td colspan="10">
                                        <div class="no-account-message">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="12" y1="8" x2="12" y2="12"></line>
                                                <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                            </svg>
                                            <p>No users in database</p>
                                        </div>
                                    </td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </x-slot:content>
</x-layouts.account-layout>
