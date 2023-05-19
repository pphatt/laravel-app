<x-layouts.account-layout title="Profile" route-name="Profile" includeMainComponent="true">
    <x-slot:head>
        <link rel="stylesheet" href="{{ asset("css/user/profile.css")}}" />

        <script type="module" src="{{ asset("js/user-profile.js")}}" defer></script>
    </x-slot:head>

    <x-slot:content>
        @if($errors->any())
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
        @elseif (!empty(Session::get("profile")))
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
                            <span>{{Session::get("profile")}}</span>
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
        <div class="-header-section">
            <section>
                <h1>{{auth()->user()->name}}</h1>
            </section>
            <nav>
                <div class="-nav-layout">
                    <div class="-inner-nav-layout">
                        <button onclick="redirect()">
                            <span>General</span>
                        </button>
                        <button class="-active">
                            <span>Profile</span>
                        </button>

                        <script>
                            function redirect() {
                                return window.location.href = window.location.protocol + "//" + window.location.hostname + ":8000" + "/user/general"
                            }
                        </script>
                    </div>
                </div>
            </nav>
        </div>
        <div class="-table">
            <article class="-inner-table">
                <section>
                    <div class="-table-layout">
                        <div class="-table-header">
                            <div>
                                <h5>Profile</h5>
                            </div>
                        </div>
                        <div class="-table-content">
                            <form method="POST" action="{{ route("user.profile_post") }}" class="-form"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="-inner-table-content">
                                    <div class="-content">
                                        <div class="-inner-content">
                                            <div class="-content-title">
                                                <span>Username</span>
                                            </div>
                                            <div class="-content-input">
                                                <input type="text" name="old_user_name" value="{{$user[0]->name}}"
                                                       hidden />
                                                <input type="text" name="user_name" value="{{$user[0]->name}}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="-content">
                                        <div class="-inner-content">
                                            <div class="-content-title">
                                                <span>First name</span>
                                            </div>
                                            <div class="-content-input">
                                                <input type="text" name="old_first_name"
                                                       value="{{$user[0]->first_name}}" hidden />
                                                <input type="text" name="first_name" value="{{$user[0]->first_name}}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="-content">
                                        <div class="-inner-content">
                                            <div class="-content-title">
                                                <span>Last name</span>
                                            </div>
                                            <div class="-content-input">
                                                <input type="text" name="old_last_name" value="{{$user[0]->last_name}}"
                                                       hidden />
                                                <input type="text" name="last_name" value="{{$user[0]->last_name}}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="-content">
                                        <div class="-inner-content">
                                            <div class="-content-title">
                                                <span>Age</span>
                                            </div>
                                            <div class="-content-input">
                                                <input type="text" name="old_age" value="{{$user[0]->age}}" hidden />
                                                <input type="text" name="age" value="{{$user[0]->age}}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="-content">
                                        <div class="-inner-content">
                                            <div class="-content-title">
                                                <span>Address</span>
                                            </div>
                                            <div class="-content-input">
                                                <input type="text" name="old_address" value="{{$user[0]->address}}"
                                                       hidden />
                                                <input type="text" name="address" value="{{$user[0]->address}}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="-content">
                                        <div class="-inner-content">
                                            <div class="-content-title">
                                                <span>Phone number</span>
                                            </div>
                                            <div class="-content-input">
                                                <input type="text" name="old_phone_number"
                                                       value="{{$user[0]->phone_number}}" hidden />
                                                <input type="text" name="phone_number"
                                                       value="{{$user[0]->phone_number}}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="-content">
                                        <div class="-inner-content">
                                            <div class="-content-title">
                                                <span>Sex</span>
                                            </div>
                                            <div class="-content-input">
                                                <select id="sex" name="sex">
                                                    <option
                                                        value="male" {{($user[0]->sex == "Male") ? "selected" : null}}>
                                                        Male
                                                    </option>
                                                    <option
                                                        value="female" {{($user[0]->sex == "Male") ? "selected" : null}}>
                                                        Female
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="-content" style="margin: 8px 0">
                                        <div class="-inner-content">
                                            <div class="-content-title">
                                                <span>Photo</span>
                                            </div>
                                            <div class="-content-input">
                                                <div style="display: flex; align-items: center; gap: 8px">
                                                    <div style="display: flex; align-items: center">
                                                        <input id="old_image" type="file"
                                                               value="{{asset("storage/images/" . $user[0]->image)}}"
                                                               hidden />
                                                        <input id="image" type="file" name="image"
                                                               accept="image/png, image/jpg, image/jpeg" />

                                                        <label for="image" class="photo">
                                                            Upload Image
                                                        </label>
                                                    </div>
                                                    <div class="view-photo-btn-group"
                                                         style="display: flex; align-items: center; gap: 8px">
                                                        <button
                                                            {{empty($user[0]->image) ? "disabled" : null}} type="button"
                                                            data-state="false">
                                                            <span>View Old Image</span>
                                                        </button>
                                                        <button disabled type="button" data-state="false">
                                                            <span>View New Image</span>
                                                        </button>
                                                    </div>
                                                </div>
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
    </x-slot:content>
</x-layouts.account-layout>
