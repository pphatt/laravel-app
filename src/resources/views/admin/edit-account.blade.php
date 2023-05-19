<x-layouts.account-layout title="Manage Account" route-name="Manage Account" includeMainComponent="false">
    <x-slot:head>
        <link rel="stylesheet" href="{{ asset("css/admin/edit-account.css")}}" />
    </x-slot:head>

    <x-slot:content>
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
                                                    <span>Role</span>
                                                </div>
                                                <div class="-row-input">
                                                    <select id="role" name="role">
                                                        <option
                                                            value="admin" {{$user[0]->role == 1 ? "selected" : null}}>
                                                            Admin
                                                        </option>
                                                        <option
                                                            value="user" {{$user[0]->role == 0 ? "selected" : null}}>
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
