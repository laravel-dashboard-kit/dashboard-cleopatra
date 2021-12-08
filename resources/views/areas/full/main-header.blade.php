<div class="main-wrapper main-wrapper-1">
    <div class="navbar-bg"></div>

    <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto"
            action="">
            <ul class="navbar-nav mr-3">
                <li>
                    <a href="javascript:void(0);"
                        data-toggle="sidebar"
                        class="nav-link nav-link-lg">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
            </ul>
        </form>

        <ul class="navbar-nav navbar-right">
            <li class="dropdown">
                <a href="javascript:void(0);"
                    data-toggle="dropdown"
                    class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <div class="d-sm-none d-lg-inline-block">
                        {{ __('Hi, ') . optional(auth()->user())->name }}
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-title">{{ __('Welcome, ') . optional(auth()->user())->name }}</div>
                    {{-- <a href="{{ url('admin/admin_profile') }}"
                                class="dropdown-item has-icon">
                                <i class="far fa-user"></i> {{ __('Profile Settings') }}
                            </a> --}}

                    <div class="dropdown-divider"></div>
                    <a href="#"
                        onclick="event.preventDefault();
document.getElementById('logout-form').submit();"
                        class="dropdown-item text-danger">
                        <i class="fas fa-sign-out-alt"></i>
                        {{ __('Logout') }}
                    </a>
                </div>
            </li>
        </ul>
    </nav>

</div>
