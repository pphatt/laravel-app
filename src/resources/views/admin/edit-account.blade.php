<x-layouts.account-layout title="Manage Account" route-name="Manage Account" includeMainComponent="false">
    <x-slot:head>
        <link rel="stylesheet" href="{{ asset("css/admin/edit-account.css")}}" />
    </x-slot:head>

    <x-slot:content>
        @if ($errors->any())
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
                                    <h5>Edit Account</h5>
                                </div>
                            </div>
                            <div class="-card-content">
                                <form method="POST" action="{{ route("admin.edit_account_post", ["id" => $id]) }}"
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
                                                    <input type="text" name="old_name" value="{{$user[0]->name}}"
                                                           hidden />
                                                    <input type="text" name="name" placeholder="Input name"
                                                           value="{{$user[0]->name}}"
                                                           required />
                                                    <p data-error-name="name"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="-row">
                                            <div class="-inner-row">
                                                <div class="-row-title">
                                                    <span>Firstname</span>
                                                </div>
                                                <div class="-row-input">
                                                    <input type="text" name="old_first_name"
                                                           value="{{$user[0]->first_name}}"
                                                           hidden />
                                                    <input type="text" name="first_name" placeholder="Input first name"
                                                           value="{{$user[0]->first_name}}"
                                                           required />
                                                    <p data-error-name="first_name"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="-row">
                                            <div class="-inner-row">
                                                <div class="-row-title">
                                                    <span>Lastname</span>
                                                </div>
                                                <div class="-row-input">
                                                    <input type="text" name="old_last_name"
                                                           value="{{$user[0]->last_name}}" hidden />
                                                    <input type="text" name="last_name" placeholder="Input lastname"
                                                           value="{{$user[0]->last_name}}"
                                                           required />
                                                    <p data-error-name="last_name"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="-row">
                                            <div class="-inner-row">
                                                <div class="-row-title">
                                                    <span>Age</span>
                                                </div>
                                                <div class="-row-input">
                                                    <input type="text" name="old_age"
                                                           value="{{$user[0]->age}}" hidden />
                                                    <input type="text" name="age" placeholder="Input age"
                                                           value="{{$user[0]->age}}"
                                                           required />
                                                    <p data-error-name="last_name"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="-row">
                                            <div class="-inner-row">
                                                <div class="-row-title">
                                                    <span>Address</span>
                                                </div>
                                                <div class="-row-input">
                                                    <input type="text" name="old_address"
                                                           value="{{$user[0]->address}}" hidden />
                                                    <input type="text" name="address" placeholder="Input address"
                                                           value="{{$user[0]->address}}"
                                                           required />
                                                    <p data-error-name="address"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="-row">
                                            <div class="-inner-row">
                                                <div class="-row-title">
                                                    <span>Phone number</span>
                                                </div>
                                                <div class="-row-input">
                                                    <input type="text" name="old_phone_number"
                                                           value="{{$user[0]->phone_number}}" hidden />
                                                    <input type="text" name="phone_number"
                                                           placeholder="Input phone number"
                                                           value="{{$user[0]->phone_number}}"
                                                           required />
                                                    <p data-error-name="phone_number"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="-row">
                                            <div class="-inner-row">
                                                <div class="-row-title">
                                                    <span>Sex</span>
                                                </div>
                                                <div class="-row-input">
                                                    <input type="text" name="old_sex"
                                                           value="{{$user[0]->sex}}" hidden />

                                                    <select id="sex" name="sex">
                                                        <option
                                                            value="male" {{$user[0]->sex == "male" ? "selected" : null}}>
                                                            Male
                                                        </option>
                                                        <option
                                                            value="female" {{$user[0]->sex == "female" ? "selected" : null}}>
                                                            Female
                                                        </option>
                                                    </select>
                                                    <p data-error-name="last_name"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="-row">
                                            <div class="-inner-row">
                                                <div class="-row-title">
                                                    <span>Role</span>
                                                </div>
                                                <div class="-row-input">
                                                    <input type="text" name="old_role"
                                                           value="{{$user[0]->role}}" hidden />

                                                    <select id="role" name="role">
                                                        <option
                                                            value="1" {{$user[0]->role == 1 ? "selected" : null}}>
                                                            Admin
                                                        </option>
                                                        <option
                                                            value="0" {{$user[0]->role == 0 ? "selected" : null}}>
                                                            User
                                                        </option>
                                                    </select>
                                                    <p data-error-name="last_name"></p>
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
