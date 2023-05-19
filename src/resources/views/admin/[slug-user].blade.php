<x-layouts.account-layout title="Manage User" route-name="Manage User" includeMainComponent="false">
    <x-slot:head>
        <link rel="stylesheet" href="{{ asset("css/admin/user-details.css")}}" />
    </x-slot:head>

    <x-slot:content>
        <div style="flex: 1; overflow: auto; max-height: 100vh">
            <section class="table">
                <div class="-info-table">
                    <article class="-inner-info-table">
                        <section>
                            <div class="-table">
                                <div class="-table-title">
                                    <div class="-table-title-s1">
                                        <div class="-title">
                                            <p>Current {{($user[0]->role == 1) ? "admin" : "user"}}&apos;s description</p>
                                            <h3>{{($user[0]->role == 1) ? "Admin" : "User"}} ID: {{$user[0]->id}}</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="-table-description">
                                    <div class="-table-title-s1">
                                        <div class="-title">
                                            <p>User email: </p>
                                            <p class="-description">{{$user[0]->email}}</p>
                                        </div>
                                        <div class="-title">
                                            <p>User name:</p>
                                            <p class="-description">{{$user[0]->name}}</p>
                                        </div>
                                        <div class="-title">
                                            <p>First name: </p>
                                            <p class="-description">
                                                {{(empty($user[0]->first_name)) ? "-" : $user[0]->first_name}}
                                            </p>
                                        </div>
                                        <div class="-title">
                                            <p>Last name: </p>
                                            <p class="-description">
                                                {{(empty($user[0]->last_name)) ? "-" : $user[0]->last_name}}
                                            </p>
                                        </div>
                                        <div class="-title">
                                            <p>Age: </p>
                                            <p class="-description">
                                                {{(empty($user[0]->age)) ? "-" : $user[0]->age}}
                                            </p>
                                        </div>
                                        <div class="-title">
                                            <p>Address: </p>
                                            <p class="-description">
                                                {{(empty($user[0]->address)) ? "-" : $user[0]->address}}
                                            </p>
                                        </div>
                                        <div class="-title">
                                            <p>Phone number: </p>
                                            <p class="-description">
                                                {{(empty($user[0]->phone_number)) ? "-" : $user[0]->phone_number}}
                                            </p>
                                        </div>
                                        <div class="-title">
                                            <p>Sex: </p>
                                            <p class="-description">
                                                {{(empty($user[0]->sex)) ? "-" : $user[0]->sex}}
                                            </p>
                                        </div>
                                        <div class="-title">
                                            <p>Email verified at: </p>
                                            <p class="-description">
                                                {{(empty($user[0]->email_verified_at)) ? "-" : $user[0]->email_verified_at}}
                                            </p>
                                        </div>
                                        <div class="-title">
                                            <p>Created at: </p>
                                            <p class="-description">
                                                {{(empty($user[0]->created_at)) ? "-" : $user[0]->created_at}}
                                            </p>
                                        </div>
                                        <div class="-title">
                                            <p>Updated at: </p>
                                            <p class="-description">
                                                {{(empty($user[0]->updated_at)) ? "-" : $user[0]->updated_at}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </article>
                </div>
            </section>
        </div>
    </x-slot:content>
</x-layouts.account-layout>
