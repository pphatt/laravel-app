<div class="-navigation">
    <div class="-current-route-title">
        <div>
            <h4>{{ $routeName }}</h4>
        </div>
    </div>
    <div class="-main-nav-section">
        <nav>
            <ul>
                <li>
                    <div class="-title">
                        <span>Account</span>
                    </div>
                    <div class="-content">
                        <a href="{{route("admin.general")}}">
                            <span>References</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="-title">
                        <span>Manage</span>
                    </div>
                    <div class="-content">
                        <a href="{{ route("admin.manage_account") }}">
                            <span>Manage Accounts</span>
                        </a>
                        <a href="/admin/manage-product">
                            <span>Manage Products</span>
                        </a>
                        <a href="/admin/manage-music">
                            <span>Manage Musics</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="-content">
                        <a href="" class="-logout">
                            <div>
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
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg>
                            </div>
                            <span>Logout</span>
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>
