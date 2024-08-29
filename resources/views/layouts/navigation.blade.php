<header class="navbar-expand-md bg-white">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar">
            <div class="container-xl">
                <div class="row flex-fill align-items-center">
                    <div class="col">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a
                                    class="nav-link {{request()->routeIs('dashboard') ? 'active-link' : ''}}"
                                    href="{{ route('dashboard') }}"
                                >
                                    <span
                                        class="nav-link-icon d-md-none d-lg-inline-block"
                                        ><!-- Download SVG icon from http://tabler-icons.io/i/home -->
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
                                            class="icon"
                                        >
                                            <path
                                                stroke="none"
                                                d="M0 0h24v24H0z"
                                                fill="none"
                                            ></path>
                                            <path
                                                d="M5 12l-2 0l9 -9l9 9l-2 0"
                                            ></path>
                                            <path
                                                d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"
                                            ></path>
                                            <path
                                                d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"
                                            ></path>
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Dashboard
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link {{request()->routeIs('task') ? 'active-link' : ''}}"
                                    href="{{ route('task') }}"
                                >
                                    <span
                                        class="nav-link-icon d-md-none d-lg-inline-block"
                                        ><!-- Download SVG icon from http://tabler-icons.io/i/package -->
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
                                            class="icon"
                                        >
                                            <path
                                                stroke="none"
                                                d="M0 0h24v24H0z"
                                                fill="none"
                                            ></path>
                                            <path
                                                d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5"
                                            ></path>
                                            <path d="M12 12l8 -4.5"></path>
                                            <path d="M12 12l0 9"></path>
                                            <path d="M12 12l-8 -4.5"></path>
                                            <path d="M16 5.25l-8 4.5"></path>
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Task Management
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-2 d-flex justify-content-end">
                        <div class="dropdown">
                            <a
                                href="#"
                                class="btn dropdown-toggle"
                                data-bs-toggle="dropdown"
                                >{{Auth::user()->name}}</a
                            >
                            <div class="dropdown-menu">
                                <a
                                    class="dropdown-item"
                                    href="{{ route('profile.edit') }}"
                                    >Profile</a
                                >
                                <a
                                    class="dropdown-item p-2 fs-4"
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();"
                                >
                                    <i class="ti ti-power me-2"></i
                                    >{{ __("Logout") }}
                                </a>
                                <form
                                    id="logout-form"
                                    action="{{ route('logout') }}"
                                    method="POST"
                                    class="d-none"
                                >
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
