<div class="nk-sidebar" data-content="sidebarMenu">
    <div class="nk-sidebar-inner" data-simplebar>
        <ul class="nk-menu nk-menu-md">
            <li class="nk-menu-heading">
                <h6 class="overline-title text-primary-alt">Quick Links</h6>
            </li><!-- .nk-menu-heading -->            
            <li class="nk-menu-item">
                <a href="{{ route('admin.dashboard') }}" class="nk-menu-link">
                    <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                    <span class="nk-menu-text">Dashboard</span>
                </a>
            </li><!-- .nk-menu-item -->
            <li class="nk-menu-heading">
                <h6 class="overline-title text-primary-alt">Administrative Pages</h6>
            </li><!-- .nk-menu-heading -->
            {{-- <li class="nk-menu-item has-sub">
                <a href="#" class="nk-menu-link nk-menu-toggle">
                    <span class="nk-menu-icon"><em class="icon ni ni-setting"></em></span>
                    <span class="nk-menu-text">Services Section</span>
                </a>
                <ul class="nk-menu-sub">
                    <li class="nk-menu-item">
                        <a href="{{ route('admin.services') }}" class="nk-menu-link"><span class="nk-menu-text">All Services</span></a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ route('admin.service.add') }}" class="nk-menu-link"><span class="nk-menu-text">Add New Service</span></a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ route('admin.accordion') }}" class="nk-menu-link"><span class="nk-menu-text">Our Tests</span></a>
                    </li>
                </ul><!-- .nk-menu-sub -->
            </li><!-- .nk-menu-item --> --}}

            <li class="nk-menu-item has-sub">
                <a href="#" class="nk-menu-link nk-menu-toggle">
                    <span class="nk-menu-icon"><em class="icon ni ni-monitor"></em></span>
                    <span class="nk-menu-text">Blog Section</span>
                </a>
                <ul class="nk-menu-sub">
                    <li class="nk-menu-item">
                        <a href="{{ route('admin.categories') }}" class="nk-menu-link"><span class="nk-menu-text">Categories</span></a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ route('admin.blogs') }}" class="nk-menu-link"><span class="nk-menu-text">Blogs</span></a>
                    </li>
                    {{-- <li class="nk-menu-item">
                        <a href="{{ route('admin.blog.subscribers') }}" class="nk-menu-link"><span class="nk-menu-text">Blog Subscribers</span></a>
                    </li> --}}
                </ul><!-- .nk-menu-sub -->
            </li>

            {{-- <li class="nk-menu-item has-sub">
                <a href="#" class="nk-menu-link nk-menu-toggle">
                    <span class="nk-menu-icon"><em class="icon ni ni-php"></em></em></span>
                    <span class="nk-menu-text">Careers Section</span>
                </a>
                <ul class="nk-menu-sub">
                    <li class="nk-menu-item">
                        <a href="{{ route('admin.careers') }}" class="nk-menu-link"><span class="nk-menu-text">All Openings</span></a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ route('admin.career.subscribers') }}" class="nk-menu-link"><span class="nk-menu-text">Career Subscribers</span></a>
                    </li>                   
                </ul><!-- .nk-menu-sub -->
            </li> --}}

            {{-- <li class="nk-menu-item has-sub">
                <a href="#" class="nk-menu-link nk-menu-toggle">
                    <span class="nk-menu-icon"><em class="icon ni ni-contact"></em></span>
                    <span class="nk-menu-text">Case Studies</span>
                </a>
                <ul class="nk-menu-sub">
                    <li class="nk-menu-item">
                        <a href="{{ route('admin.case-studies') }}" class="nk-menu-link"><span class="nk-menu-text">All Case Studies</span></a>
                    </li>  
                    <li class="nk-menu-item">
                        <a href="{{ route('admin.case-testimonials') }}" class="nk-menu-link"><span class="nk-menu-text">Testimonials</span></a>
                    </li>                  
                </ul><!-- .nk-menu-sub -->
            </li>

            <li class="nk-menu-item has-sub">
                <a href="#" class="nk-menu-link nk-menu-toggle">
                    <span class="nk-menu-icon"><em class="icon ni ni-chat-circle"></em></span>
                    <span class="nk-menu-text">Blog Comments</span>
                </a>
                <ul class="nk-menu-sub">
                    <li class="nk-menu-item">
                        <a href="{{ route('admin.comments') }}" class="nk-menu-link"><span class="nk-menu-text">All Comments</span></a>
                    </li>                   
                </ul><!-- .nk-menu-sub -->
            </li> --}}

            <li class="nk-menu-heading">
                <h6 class="overline-title text-primary-alt">User Administration</h6>
            </li><!-- .nk-menu-heading -->

            {{-- <li class="nk-menu-item has-sub">
                <a href="#" class="nk-menu-link nk-menu-toggle">
                    <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                    <span class="nk-menu-text">System Users</span>
                </a>
                <ul class="nk-menu-sub">
                    <li class="nk-menu-item">
                        <a href="{{ route('admin.users') }}" class="nk-menu-link"><span class="nk-menu-text">All Users</span></a>
                    </li>                   
                </ul><!-- .nk-menu-sub -->
            </li> --}}

            {{-- <li class="nk-menu-item has-sub">
                <a href="#" class="nk-menu-link nk-menu-toggle">
                    <span class="nk-menu-icon"><em class="icon ni ni-account-setting"></em></span>
                    <span class="nk-menu-text">Account Management</span>
                </a>
                <ul class="nk-menu-sub">
                    <li class="nk-menu-item">
                        <a href="{{ route('admin.profile') }}" class="nk-menu-link"><span class="nk-menu-text">Profile</span></a>
                    </li>                   
                </ul><!-- .nk-menu-sub -->
            </li> --}}

            {{-- <li class="nk-menu-item has-sub">
                <a href="#" class="nk-menu-link nk-menu-toggle">
                    <span class="nk-menu-icon"><em class="icon ni ni-call-alt"></em></span>
                    <span class="nk-menu-text">Callback Requests</span>
                </a>
                <ul class="nk-menu-sub">
                    <li class="nk-menu-item">
                        <a href="{{ route('admin.callback') }}" class="nk-menu-link"><span class="nk-menu-text">All Call Requests</span></a>
                    </li>                   
                </ul><!-- .nk-menu-sub -->
            </li> --}}

            {{-- <li class="nk-menu-item has-sub">
                <a href="#" class="nk-menu-link nk-menu-toggle">
                    <span class="nk-menu-icon"><em class="icon ni ni-chat"></em></span>
                    <span class="nk-menu-text">Contact Messages</span>
                </a>
                <ul class="nk-menu-sub">
                    <li class="nk-menu-item">
                        <a href="{{ route('admin.contact.messages') }}" class="nk-menu-link"><span class="nk-menu-text">All Contact Messages</span></a>
                    </li>                   
                </ul><!-- .nk-menu-sub -->
            </li> --}}
            
            <li class="nk-menu-heading">
                <h6 class="overline-title text-primary-alt">Configurations</h6>
            </li><!-- .nk-menu-heading -->
            {{-- <li class="nk-menu-item has-sub">
                <a href="#" class="nk-menu-link nk-menu-toggle">
                    <span class="nk-menu-icon"><em class="icon ni ni-network"></em></span>
                    <span class="nk-menu-text">Page Config</span>
                </a>
                <ul class="nk-menu-sub">
                    <li class="nk-menu-item">
                        <a href="{{ route('admin.config') }}" class="nk-menu-link"><span class="nk-menu-text">Clear Config</span></a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ route('admin.linkStorage') }}" class="nk-menu-link"><span class="nk-menu-text">Link Storage</span></a>
                    </li>  
                </ul><!-- .nk-menu-sub -->
            </li><!-- .nk-menu-item --> --}}
        </ul><!-- .nk-menu -->
    </div>
</div>
