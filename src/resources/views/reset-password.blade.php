<div class="-layout">
    <div class="-inner-layout">
        <div class="-inner">
            <div class="-nav">
                <div class="-inner-nav">
                    <a href={"/"}>
                        <span class="-logo">
                          <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="mr-2 h-6 w-6"
                          >
                            <path d="M15 6v12a3 3 0 1 0 3-3H6a3 3 0 1 0 3 3V6a3 3 0 1 0-3 3h12a3 3 0 1 0-3-3"></path>
                          </svg>
                        </span>
                        <span class="-title">Tune Source</span>
                    </a>
                </div>
            </div>
            <div class="-reset-form-layout">
                <div class="-inner-reset-form-layout">
                    <div class="-reset-form-header">
                        <h1>Reset Your Password</h1>
                        <h2>
                            Type in a new secure password and press save to update your
                            password
                        </h2>
                    </div>
                    <div class="-reset-form-form">
                        <form method="POST" action="{{route("reset-password-post")}}">
                            <div class="-inner-reset-form-form">
                                <div class="-reset-form-input">
                                    <div class="-title">
                                        <label htmlFor="password">New password</label>
                                    </div>
                                    <div class="-input">
                                        <input
                                            id="password"
                                            type="password"
                                            placeholder="••••••••"
                                            autoComplete="email"
                                            autoCorrect="off"
                                            autoCapitalize="none"
                                        />
                                        <p></p>
                                    </div>
                                </div>
                                <div class="-set-password-description">
                                    <div class="-inner-set-password-description" id="password-description">
                                        <div class="-des" data-contain="false">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"
                                                ></path>
                                            </svg>
                                            <p>Uppercase letter</p>
                                        </div>
                                        <div class="-des" data-contain="false">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"
                                                ></path>
                                            </svg>
                                            <p>Lowercase letter</p>
                                        </div>
                                        <div class="-des" data-contain="false">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"
                                                ></path>
                                            </svg>
                                            <p>Number</p>
                                        </div>
                                        <div class="-des" data-contain="false">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"
                                                ></path>
                                            </svg>
                                            <p>Special character (e.g. !?<>@#$%)</p>
                                        </div>
                                        <div class="-des" data-contain="false">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"
                                                ></path>
                                            </svg>
                                            <p>> 7 characters</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="-form-line"></div>
                                <div class="-submit-button">
                                    <button type="submit" disabled>
                                        <span>Save New Password</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="-reset-form-description">
                        <p>
                            When you hit the save new password, it will save
                            automatically.
                        </p>
                        <p>It don&apos;t need to confirm the old password</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
