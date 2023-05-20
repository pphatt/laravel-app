<x-layouts.account-layout title="Manage Account" route-name="Manage Account" includeMainComponent="false">
    <x-slot:head>
        <link rel="stylesheet" href="{{ asset("css/admin/manage-account.css")}}" />

        <script type="module" src="{{ asset("js/manage-account.js")}}" defer></script>
    </x-slot:head>

    <x-slot:content>
        @if(!empty(Session::get("edit")) || !empty(Session::get("delete")))
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
                            @if (!empty(Session::get("edit")))
                                <span>{{Session::get("edit")}}</span>
                            @else
                                <span>{{Session::get("delete")}}</span>
                            @endif
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
                                            <span>{{ ucfirst($user->sex) }}</span>
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
                                                <button data-open="false" data-account-id="{{$user->id}}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-linecap="round" stroke-linejoin="round">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                    </svg>
                                                </button>
                                                <a
                                                    href="{{route("admin.edit_account_get", ["id" => $user->id])}}"
                                                    target="_blank"
                                                >
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M12 20h9"></path>
                                                        <path
                                                            d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                    </svg>
                                                </a>
                                                <a
                                                    href="{{route("admin.account_details", ["id" => $user->id])}}"
                                                    target="_blank"
                                                >
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-linecap="round" stroke-linejoin="round">
                                                        <path
                                                            d="M12 3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-7m0-18H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7m0-18v18"></path>
                                                    </svg>
                                                </a>
                                                <div class="modal" data-account-id="{{$user->id}}"
                                                     style="display: none">
                                                    <div class="back-drop"></div>

                                                    <div class="modal-layout">
                                                        <div class="modal-card">
                                                            <div class="modal-head">Delete conformation</div>
                                                            <div class="modal-body">
                                                                <form method="POST"
                                                                      action="{{route("admin.delete_account_post", ["id" => $user->id])}}">
                                                                    @csrf
                                                                    <div class="form">
                                                                        <div style="display: flex">
                                                                            <p style="width: 150px">User ID: </p>
                                                                            <span>{{$user->id}}</span>
                                                                        </div>
                                                                        <div style="display:flex">
                                                                            <p style="width: 150px">Username: </p>
                                                                            <span>{{$user->name}}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="submit-delete">
                                                                        <button type="button" class="cancel-button">
                                                                            <span>Cancel</span>
                                                                        </button>
                                                                        <button type="submit" class="delete-button">
                                                                            <span>Delete</span>
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
