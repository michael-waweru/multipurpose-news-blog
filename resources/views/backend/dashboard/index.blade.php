@extends('backend.layouts.base')

@section('body')

    <!--begin::Content-->   
    <div class="nk-block-head">
        <div class="nk-block-head-sub"><span>Welcome</span>
        </div>
        <div class="nk-block-between-md g-4">
            <div class="nk-block-head-content">
                <h2 class="nk-block-title fw-normal">{{ Auth::user()->name }}</h2>
                <div class="nk-block-des">
                    <p>A Summary of the systsem at a glance.</p>
                </div>
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
                                <div class="col-xxl-4">
                                    <div class="row g-4">                                       
                                        <div class="col-sm-6 col-xxl-12">
                                            <div class="nk-order-ovwg-data sell">
                                                <div>System Users</div>
                                                <div class="info">All Users: <strong>{{ $allSystemUsers->count() }}</strong> Users</div>                                               
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-xxl-12">
                                            <div class="nk-order-ovwg-data sell">
                                                <div>All Blogs</div>
                                                <div class="info">All Active Blogs: <strong>{{ $allBlogs->count() }}</strong> Blogs</div>                                               
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-xxl-12">
                                            <div class="nk-order-ovwg-data sell">
                                                <div>Pending Blogs</div>
                                                <div class="info">All Pending Blogs: <strong>{{ $pendingBlogs->count() }}</strong> Blogs</div>                                               
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-xxl-12">
                                            <div class="nk-order-ovwg-data sell">
                                                <div>Pending Comments</div>
                                                @if ($pendingComments->count() > 0 && $pendingComments->count() < 2)
                                                    <div class="info">New & Pending Comments: <strong>{{ $pendingComments->count() }}</strong> Comment</div>
                                                @else
                                                    <div class="info">New & Pending Comments: <strong>{{ $pendingComments->count() }}</strong> Comments</div>
                                                @endif                                                                                             
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
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="#"><em class="icon ni ni-setting"></em><span>Action Settings</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-notify"></em><span>Push Notification</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .card-inner -->
                        <div class="card-inner">
                            <div class="nk-wg-action">
                                <div class="nk-wg-action-content">
                                    <em class="icon ni ni-cc-alt-fill"></em>
                                    <div class="title">Pending Buy/Sell Orders</div>
                                    <p>We have still <strong>40 buy orders</strong> and <strong>12 sell orders</strong>, thats need to review.</p>
                                </div>
                                <a href="#" class="btn btn-icon btn-trigger me-n2"><em class="icon ni ni-forward-ios"></em></a>
                            </div>
                        </div><!-- .card-inner -->
                        <div class="card-inner">
                            <div class="nk-wg-action">
                                <div class="nk-wg-action-content">
                                    <em class="icon ni ni-help-fill"></em>
                                    <div class="title">Support Messages</div>
                                    <p>Here is <strong>18 new</strong> support message. </p>
                                </div>
                                <a href="#" class="btn btn-icon btn-trigger me-n2"><em class="icon ni ni-forward-ios"></em></a>
                            </div>
                        </div><!-- .card-inner -->
                        <div class="card-inner">
                            <div class="nk-wg-action">
                                <div class="nk-wg-action-content">
                                    <em class="icon ni ni-wallet-fill"></em>
                                    <div class="title">Upcoming Deposit</div>
                                    <p><strong>7 upcoming</strong> deposit need to review.</p>
                                </div>
                                <a href="#" class="btn btn-icon btn-trigger me-n2"><em class="icon ni ni-forward-ios"></em></a>
                            </div>
                        </div><!-- .card-inner -->
                    </div><!-- .card-inner-group -->
                </div><!-- .card -->
            </div><!-- .col -->
            <div class="col-xl-7 col-xxl-8">
                <div class="card card-bordered card-full">
                    <div class="card-inner">
                        <div class="card-title-group">
                            <div class="card-title">
                                <h6 class="title"><span class="me-2">Orders Activities</span> <a href="#" class="link d-none d-sm-inline">See History</a></h6>
                            </div>
                            <div class="card-tools">
                                <ul class="card-tools-nav">
                                    <li><a href="#"><span>Buy</span></a></li>
                                    <li><a href="#"><span>Sell</span></a></li>
                                    <li class="active"><a href="#"><span>All</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- .card-inner -->
                    <div class="card-inner p-0 border-top">
                        <div class="nk-tb-list nk-tb-orders">
                            <div class="nk-tb-item nk-tb-head">
                                <div class="nk-tb-col nk-tb-orders-type"><span>Type</span></div>
                                <div class="nk-tb-col"><span>Desc</span></div>
                                <div class="nk-tb-col tb-col-sm"><span>Date</span></div>
                                <div class="nk-tb-col tb-col-xxl"><span>Time</span></div>
                                <div class="nk-tb-col tb-col-xxl"><span>Ref</span></div>
                                <div class="nk-tb-col tb-col-sm text-end"><span>USD Amount</span></div>
                                <div class="nk-tb-col text-end"><span>Amount</span></div>
                            </div><!-- .nk-tb-item -->
                            <div class="nk-tb-item">
                                <div class="nk-tb-col nk-tb-orders-type">
                                    <ul class="icon-overlap">
                                        <li><em class="bg-btc-dim icon-circle icon ni ni-sign-btc"></em></li>
                                        <li><em class="bg-success-dim icon-circle icon ni ni-arrow-down-left"></em></li>
                                    </ul>
                                </div>
                                <div class="nk-tb-col">
                                    <span class="tb-lead">Buy Bitcoin</span>
                                </div>
                                <div class="nk-tb-col tb-col-sm">
                                    <span class="tb-sub">02/10/2020</span>
                                </div>
                                <div class="nk-tb-col tb-col-xxl">
                                    <span class="tb-sub">11:37 PM</span>
                                </div>
                                <div class="nk-tb-col tb-col-xxl">
                                    <span class="tb-sub text-primary">RE2309232</span>
                                </div>
                                <div class="nk-tb-col tb-col-sm text-end">
                                    <span class="tb-sub tb-amount">4,565.75 <span>USD</span></span>
                                </div>
                                <div class="nk-tb-col text-end">
                                    <span class="tb-sub tb-amount ">+ 0.2040 <span>BTC</span></span>
                                </div>
                            </div><!-- .nk-tb-item -->
                            <div class="nk-tb-item">
                                <div class="nk-tb-col nk-tb-orders-type">
                                    <ul class="icon-overlap">
                                        <li><em class="bg-eth-dim icon-circle icon ni ni-sign-eth"></em></li>
                                        <li><em class="bg-success-dim icon-circle icon ni ni-arrow-down-left"></em></li>
                                    </ul>
                                </div>
                                <div class="nk-tb-col">
                                    <span class="tb-lead">Buy Ethereum</span>
                                </div>
                                <div class="nk-tb-col tb-col-sm">
                                    <span class="tb-sub">02/10/2020</span>
                                </div>
                                <div class="nk-tb-col tb-col-xxl">
                                    <span class="tb-sub">10:37 PM</span>
                                </div>
                                <div class="nk-tb-col tb-col-xxl">
                                    <span class="tb-sub text-primary">RE2309232</span>
                                </div>
                                <div class="nk-tb-col tb-col-sm text-end">
                                    <span class="tb-sub tb-amount">2,039.39 <span>USD</span></span>
                                </div>
                                <div class="nk-tb-col text-end">
                                    <span class="tb-sub tb-amount ">+ 0.12600 <span>BTC</span></span>
                                </div>
                            </div><!-- .nk-tb-item -->
                            <div class="nk-tb-item">
                                <div class="nk-tb-col nk-tb-orders-type">
                                    <ul class="icon-overlap">
                                        <li><em class="bg-btc-dim icon-circle icon ni ni-sign-btc"></em></li>
                                        <li><em class="bg-purple-dim icon-circle icon ni ni-arrow-up-right"></em></li>
                                    </ul>
                                </div>
                                <div class="nk-tb-col">
                                    <span class="tb-lead">Sell Bitcoin</span>
                                </div>
                                <div class="nk-tb-col tb-col-sm">
                                    <span class="tb-sub">02/10/2020</span>
                                </div>
                                <div class="nk-tb-col tb-col-xxl">
                                    <span class="tb-sub">10:45 PM</span>
                                </div>
                                <div class="nk-tb-col tb-col-xxl">
                                    <span class="tb-sub text-primary">RE2309232</span>
                                </div>
                                <div class="nk-tb-col tb-col-sm text-end">
                                    <span class="tb-sub tb-amount">9,285.71 <span>USD</span></span>
                                </div>
                                <div class="nk-tb-col text-end">
                                    <span class="tb-sub tb-amount ">+ 0.94750 <span>BTC</span></span>
                                </div>
                            </div><!-- .nk-tb-item -->
                            <div class="nk-tb-item">
                                <div class="nk-tb-col nk-tb-orders-type">
                                    <ul class="icon-overlap">
                                        <li><em class="bg-eth-dim icon-circle icon ni ni-sign-eth"></em></li>
                                        <li><em class="bg-purple-dim icon-circle icon ni ni-arrow-up-right"></em></li>
                                    </ul>
                                </div>
                                <div class="nk-tb-col">
                                    <span class="tb-lead">Sell Etherum</span>
                                </div>
                                <div class="nk-tb-col tb-col-sm">
                                    <span class="tb-sub">02/11/2020</span>
                                </div>
                                <div class="nk-tb-col tb-col-xxl">
                                    <span class="tb-sub">10:25 PM</span>
                                </div>
                                <div class="nk-tb-col tb-col-xxl">
                                    <span class="tb-sub text-primary">RE2309232</span>
                                </div>
                                <div class="nk-tb-col tb-col-sm text-end">
                                    <span class="tb-sub tb-amount">12,596.75 <span>USD</span></span>
                                </div>
                                <div class="nk-tb-col text-end">
                                    <span class="tb-sub tb-amount ">+ 1.02050 <span>BTC</span></span>
                                </div>
                            </div><!-- .nk-tb-item -->
                            <div class="nk-tb-item">
                                <div class="nk-tb-col nk-tb-orders-type">
                                    <ul class="icon-overlap">
                                        <li><em class="bg-btc-dim icon-circle icon ni ni-sign-btc"></em></li>
                                        <li><em class="bg-success-dim icon-circle icon ni ni-arrow-down-left"></em></li>
                                    </ul>
                                </div>
                                <div class="nk-tb-col">
                                    <span class="tb-lead">Buy Bitcoin</span>
                                </div>
                                <div class="nk-tb-col tb-col-sm">
                                    <span class="tb-sub">02/10/2020</span>
                                </div>
                                <div class="nk-tb-col tb-col-xxl">
                                    <span class="tb-sub">10:12 PM</span>
                                </div>
                                <div class="nk-tb-col tb-col-xxl">
                                    <span class="tb-sub text-primary">RE2309232</span>
                                </div>
                                <div class="nk-tb-col tb-col-sm text-end">
                                    <span class="tb-sub tb-amount">400.00 <span>USD</span></span>
                                </div>
                                <div class="nk-tb-col text-end">
                                    <span class="tb-sub tb-amount ">+ 0.00056 <span>BTC</span></span>
                                </div>
                            </div><!-- .nk-tb-item -->
                            <div class="nk-tb-item">
                                <div class="nk-tb-col nk-tb-orders-type">
                                    <ul class="icon-overlap">
                                        <li><em class="bg-eth-dim icon-circle icon ni ni-sign-eth"></em></li>
                                        <li><em class="bg-purple-dim icon-circle icon ni ni-arrow-up-right"></em></li>
                                    </ul>
                                </div>
                                <div class="nk-tb-col">
                                    <span class="tb-lead">Sell Etherum</span>
                                </div>
                                <div class="nk-tb-col tb-col-sm">
                                    <span class="tb-sub">02/09/2020</span>
                                </div>
                                <div class="nk-tb-col tb-col-xxl">
                                    <span class="tb-sub">05:15 PM</span>
                                </div>
                                <div class="nk-tb-col tb-col-xxl">
                                    <span class="tb-sub text-primary">RE2309232</span>
                                </div>
                                <div class="nk-tb-col tb-col-sm text-end">
                                    <span class="tb-sub tb-amount">6,246.50 <span>USD</span></span>
                                </div>
                                <div class="nk-tb-col text-end">
                                    <span class="tb-sub tb-amount ">+ 0.02575 <span>BTC</span></span>
                                </div>
                            </div><!-- .nk-tb-item -->
                        </div>
                    </div><!-- .card-inner -->
                    <div class="card-inner-sm border-top text-center d-sm-none">
                        <a href="#" class="btn btn-link btn-block">See History</a>
                    </div><!-- .card-inner -->
                </div><!-- .card -->
            </div><!-- .col -->
            <div class="col-xl-5 col-xxl-4">
                <div class="row g-gs">
                    <div class="col-md-6 col-lg-12">
                        <div class="card card-bordered card-full">
                            <div class="card-inner">
                                <div class="card-title-group align-start mb-2">
                                    <div class="card-title">
                                        <h6 class="title">Top Coin in Orders</h6>
                                        <p>In last 15 days buy and sells overview.</p>
                                    </div>
                                    <div class="card-tools mt-n1 me-n1">
                                        <div class="drodown">
                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a href="#" class="active"><span>15 Days</span></a></li>
                                                    <li><a href="#"><span>30 Days</span></a></li>
                                                    <li><a href="#"><span>3 Months</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .card-title-group -->
                                <div class="nk-coin-ovwg">
                                    <div class="nk-coin-ovwg-ck">
                                        <canvas class="coin-overview-chart" id="coinOverview"></canvas>
                                    </div>
                                    <ul class="nk-coin-ovwg-legends">
                                        <li><span class="dot dot-lg sq" data-bg="#f98c45"></span><span>Bitcoin</span></li>
                                        <li><span class="dot dot-lg sq" data-bg="#9cabff"></span><span>Ethereum</span></li>
                                        <li><span class="dot dot-lg sq" data-bg="#8feac5"></span><span>NioCoin</span></li>
                                        <li><span class="dot dot-lg sq" data-bg="#6b79c8"></span><span>Litecoin</span></li>
                                        <li><span class="dot dot-lg sq" data-bg="#79f1dc"></span><span>Bitcoin Cash</span></li>
                                    </ul>
                                </div><!-- .nk-coin-ovwg -->
                            </div><!-- .card-inner -->
                        </div><!-- .card -->
                    </div><!-- .col -->
                    <div class="col-md-6 col-lg-12">
                        <div class="card card-bordered card-full">
                            <div class="card-inner">
                                <div class="card-title-group align-start mb-3">
                                    <div class="card-title">
                                        <h6 class="title">User Activities</h6>
                                        <p>In last 30 days <em class="icon ni ni-info" data-bs-toggle="tooltip" data-bs-placement="right" title="Referral Informations"></em></p>
                                    </div>
                                    <div class="card-tools mt-n1 me-n1">
                                        <div class="drodown">
                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a href="#"><span>15 Days</span></a></li>
                                                    <li><a href="#" class="active"><span>30 Days</span></a></li>
                                                    <li><a href="#"><span>3 Months</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="user-activity-group g-4">
                                    <div class="user-activity">
                                        <em class="icon ni ni-users"></em>
                                        <div class="info">
                                            <span class="amount">345</span>
                                            <span class="title">Direct Join</span>
                                        </div>
                                    </div>
                                    <div class="user-activity">
                                        <em class="icon ni ni-users"></em>
                                        <div class="info">
                                            <span class="amount">49</span>
                                            <span class="title">Referral Join</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="user-activity-ck">
                                <canvas class="usera-activity-chart" id="userActivity"></canvas>
                            </div>
                        </div><!-- .card -->
                    </div><!-- .col -->
                </div><!-- .row -->
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