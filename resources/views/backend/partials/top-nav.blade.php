<!-- main header @s -->
<div class="nk-header nk-header-fixed is-light">
    <div class="container-fluid">
        <div class="nk-header-wrap">
            <div class="nk-menu-trigger d-xl-none ms-n1">
                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
            </div>
            <div class="nk-header-app-name">
                <div class="nk-header-app-logo">
                    <em class="icon ni ni-home bg-purple-dim"></em>
                    {{-- <img src="{{ asset('frontend/logo/logo transparent.png') }}" alt="logo"> --}}
                </div>
                <div class="nk-header-app-info">
                    <span class="sub-text">NewsBoard</span>
                    <span class="lead-text">Dashboard</span>
                </div>
            </div> 

            <div class="nk-header-tools">
                <ul class="nk-quick-nav">
                    <li>
                        <div>
                            <a href="{{ route('homepage') }}" target="_blank">
                                <span class="nk-menu-icon"><em class="icon ni ni-home"></em></span>  
                            </a>                                                  
                        </div>
                    </li>
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <div class="user-toggle">
                                <div class="user-avatar sm">
                                    <em class="icon ni ni-user-alt"></em>
                                </div>
                                <div class="user-info d-none d-md-block">
                                    <div class="user-status">Administrator</div>
                                    <div class="user-name dropdown-indicator">{{ Auth::user()->name }}</div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1">
                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                <div class="user-card">
                                    <div class="">
                                        @if (Auth::user()->avatar == null)
                                            <img src="{{ asset('assets/backend/avatar.png') }}" alt="avatar" width="60px;" height="auto" >
                                        @else
                                            <img src="{{ asset('storage/avatar') }}/{{ Auth::user()->avatar }}"  alt="avatar" width="60px;" height="auto">
                                        @endif                                        
                                    </div>
                                    <div class="user-info">
                                        <span class="lead-text" style="margin-left: 12px;">{{ Auth::user()->name }}</span>
                                        <span class="sub-text" style="margin-left: 12px;">{{ Auth::user()->email }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    {{-- <li><a href="{{ route('admin.profile') }}"><em class="icon ni ni-account-setting"></em><span>View Profile</span></a></li>                                     --}}
                                    <li>
                                        <a id="theme-toggle"><em class="icon ni ni-{{ $theme == 'dark' ? 'sun-fill' : 'moon-fill' }}"></em><span>Dark Mode</span></a>                                        
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <em class="icon ni ni-signout"></em><span>Sign out</span>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"> @csrf</form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- main header @e -->

<script>
    var toggle_icon = document.getElementById('theme-toggle');
    var body = document.getElementsByTagName('body')[0];
    var sun_class = 'icon ni ni-sun-fill';
    var moon_class = 'icon ni ni-moon-fill';
    var dark_theme_class = 'dark-switch';

    toggle_icon.addEventListener('click', function() {
        if (body.classList.contains(dark_theme_class)) {
            toggle_icon.classList.add(moon_class);
            toggle_icon.classList.remove(sun_class);

            body.classList.remove(dark_theme_class);

            setCookie('theme', 'light');
        }
        else {
            toggle_icon.classList.add(sun_class);
            toggle_icon.classList.remove(moon_class);

            body.classList.add(dark_theme_class);

            setCookie('theme', 'dark');
        }
    });

    function setCookie(name, value) {
        var d = new Date();
        d.setTime(d.getTime() + (365*24*60*60*1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = name + "=" + value + ";" + expires + ";path=/";
    }
</script>

