@extends('backend.layouts.base')

@section('body')

    <!--begin::Content-->   
    <div class="nk-block-head">
        <div class="nk-block-head-sub"><span>Welcome</span>
        </div>
        <div class="nk-block-between-md g-4">
            <div class="nk-block-head-content">
                <h2 class="nk-block-title fw-normal">{{ Auth::user()->name }}</h2>                
            </div><!-- .nk-block-head-content -->
            <div class="nk-block-head-content">
                <ul class="nk-block-tools gx-3">                                
                    <li class="opt-menu-md dropdown">
                        <a href="#" class="btn btn-white btn-light btn-icon" data-bs-toggle="dropdown"><em class="icon ni ni-setting"></em></a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <ul class="link-list-opt no-bdr">
                                <li><a href="#"><em class="icon ni ni-coin-alt"></em><span>Curreny Settings</span></a></li>
                                <li><a href="#"><em class="icon ni ni-notify"></em><span>Push Notification</span></a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div><!-- .nk-block-head-content -->
        </div><!-- .nk-block-between -->
    </div><!-- .nk-block-head -->
    
    <div class="nk-block">
        <div class="row g-gs">
            <div class="col-lg-8">
                <div class="card card-bordered h-100">
                    <div class="card-inner">                        
                        <div>
                            <div class="row g-4 align-end"> 
                                <div class="card-inner card-inner-md">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h6 class="title">A Summary of the systsem at a glance.</h6>
                                        </div>                                        
                                    </div>
                                </div><!-- .card-inner -->                               
                                <div class="col-xxl-12">
                                    <div class="row g-4">                                       
                                        <div class="col-sm-6 col-xxl-6">
                                            <div class="nk-order-ovwg-data sell">
                                                <div>System Users <a href="javascript:void(0);"><em class="icon ni ni-link-alt"></em></a></div>
                                                <div class="info">All Users: <strong>{{ $allSystemUsers->count() }}</strong> Users</div>                                               
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-xxl-6">
                                            <div class="nk-order-ovwg-data sell">
                                                <div>All Blogs <a href="{{ route('admin.blogs') }}"><em class="icon ni ni-link-alt"></em></a></div>
                                                <div class="info">All Active Blogs: <strong>{{ $allBlogs->count() }}</strong> Blogs</div>                                               
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-xxl-6">
                                            <div class="nk-order-ovwg-data sell">
                                                <div>Pending Blogs </div>
                                                <div class="info">All Pending Blogs: <strong>{{ $pendingBlogs->count() }}</strong> Blogs</div>                                               
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-xxl-6">
                                            <div class="nk-order-ovwg-data sell">
                                                <div>Pending Comments 
                                                    @if ($pendingComments->count() > 0)
                                                        <a href="{{ route('admin.comments') }}">
                                                            <button type="button" class="btn btn-sm btn-primary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">View</button>
                                                        </a>
                                                    @endif
                                                </div>
                                                @if ($pendingComments->count() > 0 && $pendingComments->count() < 2)
                                                    <div class="info">New & Pending Comments: <strong>{{ $pendingComments->count() }}</strong> Comment</div>
                                                @else
                                                    <div class="info">New & Pending Comments: <strong>{{ $pendingComments->count() }}</strong> Comments</div>
                                                @endif                                                                                             
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xxl-6">
                                            <div class="nk-order-ovwg-data sell">
                                                <div>Newsletter Subscribers</div>                                                
                                                <div class="info">Users subscribed <strong>{{ $newsletter_subscribers->count() }}</strong> People subscribed</div>                                                                                                                                            
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xxl-6">
                                            <div class="nk-order-ovwg-data sell">
                                                <div>New Messages</div>                                                
                                                <div class="info">WILL ADD DATA LATER</div>
                                                                                                                                          
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                            </div>
                        </div><!-- .nk-order-ovwg -->
                    </div><!-- .card-inner -->
                </div><!-- .card -->
            </div><!-- .col -->
            <div class="col-lg-4">
                <div class="card card-bordered h-100">
                    <div class="card-inner-group">
                        <div class="card-inner card-inner-md">
                            <div class="card-title-group">
                                <div class="card-title">
                                    <h6 class="title">Action Center</h6>
                                </div>
                                <div class="card-tools me-n1">
                                    <div class="drodown">
                                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>                                        
                                    </div>
                                </div>
                            </div>
                        </div><!-- .card-inner -->
                        <div class="card-inner">
                            <div class="nk-wg-action">
                                <div class="nk-wg-action-content">
                                    <em class="icon ni ni-cc-alt-fill"></em>
                                    <div class="title">Pending Comments & Blogs</div>
                                    <p>We have <strong>{{ $pendingComments->count() }} pending comments</strong> and <strong>{{ $pendingBlogs->count() }} pending blogs</strong> that need to be addressed.</p>
                                </div>                                
                            </div>
                        </div><!-- .card-inner -->
                        <div class="card-inner">
                            <div class="nk-wg-action">
                                <div class="nk-wg-action-content">
                                    <em class="icon ni ni-help-fill"></em>
                                    <div class="title">Support Messages</div>
                                    <p>Here are <strong>0 new</strong> support messages. </p>
                                </div>                               
                            </div>
                        </div><!-- .card-inner -->
                        <div class="card-inner">
                            <div class="nk-wg-action">
                                <p>NEWSBOARD</p>
                            </div>
                        </div><!-- .card-inner -->
                    </div><!-- .card-inner-group -->
                </div><!-- .card -->
            </div><!-- .col -->           
        </div><!-- .row -->
    </div><!-- .nk-block -->
    
    <div class="nk-block">
        <div class="card card-bordered">
            <div class="card-inner card-inner-lg">
                <div class="align-center flex-wrap flex-md-nowrap g-4">
                    <div class="nk-block-image w-120px flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 118">
                            <path d="M8.916,94.745C-.318,79.153-2.164,58.569,2.382,40.578,7.155,21.69,19.045,9.451,35.162,4.32,46.609.676,58.716.331,70.456,1.845,84.683,3.68,99.57,8.694,108.892,21.408c10.03,13.679,12.071,34.71,10.747,52.054-1.173,15.359-7.441,27.489-19.231,34.494-10.689,6.351-22.92,8.733-34.715,10.331-16.181,2.192-34.195-.336-47.6-12.281A47.243,47.243,0,0,1,8.916,94.745Z" transform="translate(0 -1)" fill="#f6faff" />
                            <rect x="18" y="32" width="84" height="50" rx="4" ry="4" fill="#fff" />
                            <rect x="26" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                            <rect x="50" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                            <rect x="74" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                            <rect x="38" y="60" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                            <rect x="62" y="60" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                            <path d="M98,32H22a5.006,5.006,0,0,0-5,5V79a5.006,5.006,0,0,0,5,5H52v8H45a2,2,0,0,0-2,2v4a2,2,0,0,0,2,2H73a2,2,0,0,0,2-2V94a2,2,0,0,0-2-2H66V84H98a5.006,5.006,0,0,0,5-5V37A5.006,5.006,0,0,0,98,32ZM73,94v4H45V94Zm-9-2H54V84H64Zm37-13a3,3,0,0,1-3,3H22a3,3,0,0,1-3-3V37a3,3,0,0,1,3-3H98a3,3,0,0,1,3,3Z" transform="translate(0 -1)" fill="#798bff" />
                            <path d="M61.444,41H40.111L33,48.143V19.7A3.632,3.632,0,0,1,36.556,16H61.444A3.632,3.632,0,0,1,65,19.7V37.3A3.632,3.632,0,0,1,61.444,41Z" transform="translate(0 -1)" fill="#6576ff" />
                            <path d="M61.444,41H40.111L33,48.143V19.7A3.632,3.632,0,0,1,36.556,16H61.444A3.632,3.632,0,0,1,65,19.7V37.3A3.632,3.632,0,0,1,61.444,41Z" transform="translate(0 -1)" fill="none" stroke="#6576ff" stroke-miterlimit="10" stroke-width="2" />
                            <line x1="40" y1="22" x2="57" y2="22" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            <line x1="40" y1="27" x2="57" y2="27" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            <line x1="40" y1="32" x2="50" y2="32" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            <line x1="30.5" y1="87.5" x2="30.5" y2="91.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
                            <line x1="28.5" y1="89.5" x2="32.5" y2="89.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
                            <line x1="79.5" y1="22.5" x2="79.5" y2="26.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
                            <line x1="77.5" y1="24.5" x2="81.5" y2="24.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
                            <circle cx="90.5" cy="97.5" r="3" fill="none" stroke="#9cabff" stroke-miterlimit="10" />
                            <circle cx="24" cy="23" r="2.5" fill="none" stroke="#9cabff" stroke-miterlimit="10" />
                        </svg>
                    </div>
                    <div class="nk-block-content">
                        <div class="nk-block-content-head px-lg-4">
                            <h5>We’re here to help you!</h5>
                            <p class="text-soft">Ask a question or file a support ticket, manage request, report an issues. Our team support team will get back to you by email.</p>
                        </div>
                    </div>
                    <div class="nk-block-content flex-shrink-0">
                        <a href="#" class="btn btn-lg btn-outline-primary">Get Support Now</a>
                    </div>
                </div>
            </div><!-- .card-inner -->
        </div><!-- .card -->
    </div><!-- .nk-block -->
    <!--end::Content-->  
   
@endsection