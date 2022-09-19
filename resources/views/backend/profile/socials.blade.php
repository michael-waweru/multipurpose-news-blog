@extends('backend.layouts.base')

@section('body')
    <div class="nk-block">
        <div class="card card-bordered">
            <div class="card-aside-wrap">
                <div class="card-inner card-inner-lg">
                    <div class="nk-block">
                        <div class="nk-block-head">
                            <div class="nk-block-between">
                                <div class="nk-block-head-content">
                                    <h5 class="nk-block-title">Connect Your Social Accounts</h5>
                                    <div class="nk-block-des">
                                        <p>You can connect with your social accounts such as facebook, twitter etc. to make it easier for your users to know you.</p>
                                    </div>
                                </div>
                                <div class="nk-block-head-content align-self-start d-lg-none">
                                    <a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                </div>
                            </div>
                        </div><!-- .nk-block-head -->
                        <h6 class="lead-text">Connect to Facebook</h6>
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="between-center flex-wrap flex-md-nowrap g-3">
                                    <div class="media media-center gx-3 wide-xs">
                                        <div class="media-object">
                                            <em class="icon icon-circle icon-circle-lg ni ni-facebook-f"></em>
                                        </div>
                                        <div class="media-content">
                                            @if($socialProfile->social_facebook == null)
                                                <p>You have not connected your Facebook profile. Click on the button to add</p>
                                            @else
                                                <p>
                                                    We have captured
                                                    <strong>
                                                        <a href="{{ $socialProfile->social_facebook }}" target="_blank">
                                                            {{ $socialProfile->social_facebook }}
                                                        </a>
                                                    </strong>
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                    @if($socialProfile->social_facebook == null)
                                        <div class="nk-block-actions flex-shrink-0">
                                            <a href="{{ route('profile.edit.basic',$socialProfile->id) }}" class="btn btn-sm btm-dim btn-primary">Add Social Link</a>
                                        </div>
                                    @else
                                        <div class="nk-block-actions flex-shrink-0">
                                            <a href="{{ route('profile.edit.basic',$socialProfile->id) }}" class="btn btn-sm btm-dim btn-primary">Edit Social Link</a>
                                        </div>
                                    @endif

                                </div>
                            </div><!-- .nk-card-inner -->
                        </div><!-- .nk-card -->

                        <h6 class="lead-text">Connect to Twitter</h6>
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="between-center flex-wrap flex-md-nowrap g-3">
                                    <div class="media media-center gx-3 wide-xs">
                                        <div class="media-object">
                                            <em class="icon icon-circle icon-circle-lg ni ni-twitter"></em>
                                        </div>
                                        <div class="media-content">
                                            @if($socialProfile->social_twitter == null)
                                                <p>You have not connected your Twitter profile. Click on the button to add</p>
                                            @else
                                                <p>
                                                    We have captured
                                                    <strong>
                                                        <a href="{{ $socialProfile->social_twitter }}" target="_blank">
                                                            {{ $socialProfile->social_twitter}}
                                                        </a>
                                                    </strong>
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                    @if($socialProfile->social_twitter == null)
                                        <div class="nk-block-actions flex-shrink-0">
                                            <a href="{{ route('profile.edit.basic',$socialProfile->id) }}" class="btn btn-sm btm-dim btn-primary">Add Social Link</a>
                                        </div>
                                    @else
                                        <div class="nk-block-actions flex-shrink-0">
                                            <a href="{{ route('profile.edit.basic',$socialProfile->id) }}" class="btn btn-sm btm-dim btn-primary">Edit Social Link</a>
                                        </div>
                                    @endif

                                </div>
                            </div><!-- .nk-card-inner -->
                        </div><!-- .nk-card -->

                        <h6 class="lead-text">Connect to Instagram</h6>
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="between-center flex-wrap flex-md-nowrap g-3">
                                    <div class="media media-center gx-3 wide-xs">
                                        <div class="media-object">
                                            <em class="icon icon-circle icon-circle-lg ni ni-instagram"></em>
                                        </div>
                                        <div class="media-content">
                                            @if($socialProfile->social_instagram == null)
                                                <p>You have not connected your Instagram profile. Click on the button to add</p>
                                            @else
                                                <p>
                                                    We have captured
                                                    <strong>
                                                        <a href="{{ $socialProfile->social_instagram }}" target="_blank">
                                                            {{ $socialProfile->social_instagram }}
                                                        </a>
                                                    </strong>
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                    @if($socialProfile->social_instagram == null)
                                        <div class="nk-block-actions flex-shrink-0">
                                            <a href="{{ route('profile.edit.basic',$socialProfile->id) }}" class="btn btn-sm btm-dim btn-primary">Add Social Link</a>
                                        </div>
                                    @else
                                        <div class="nk-block-actions flex-shrink-0">
                                            <a href="{{ route('profile.edit.basic',$socialProfile->id) }}" class="btn btn-sm btm-dim btn-primary">Edit Social Link</a>
                                        </div>
                                    @endif

                                </div>
                            </div><!-- .nk-card-inner -->
                        </div><!-- .nk-card -->
                    </div>
                </div>

                <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg" data-toggle-body="true" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                    <div class="card-inner-group" data-simplebar>
                        <div class="card-inner">
                            <div class="user-card">
                                <div class="bg-primary">
                                    @if (Auth::user()->avatar == null)
                                        <img src="{{ asset('backend/avatar.png') }}" alt="avatar" width="100px" height="auto" >
                                    @else
                                        <img src="{{ asset('storage/avatar') }}/{{ Auth::user()->avatar }}"  alt="avatar" width="50px" height="auto">
                                    @endif 
                                </div>
                                <div class="user-info">
                                    <span class="lead-text" style="margin-left: 12px;">{{ Auth::user()->name }}</span>
                                    <span class="sub-text" style="margin-left: 12px;">{{ Auth::user()->email }}</span>
                                </div>
                                <div class="user-action">
                                    <div class="dropdown">
                                        <a class="btn btn-icon btn-trigger me-n2" data-bs-toggle="dropdown" href="#"><em class="icon ni ni-more-v"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="{{ route('profile.edit.basic', $socialProfile->id) }}"><em class="icon ni ni-camera-fill"></em><span>Change Photo</span></a></li>
                                                <li><a href="{{ route('profile.edit.basic', $socialProfile->id) }}"><em class="icon ni ni-edit-fill"></em><span>Update Profile</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .user-card -->
                        </div><!-- .card-inner -->
                        <div class="card-inner p-0">
                            <ul class="link-list-menu">
                                <li><a href="{{ route('admin.profile') }}"><em class="icon ni ni-user-fill-c"></em><span>Personal Infomation</span></a></li>
                                <li><a href="javascript:void(0);"><em class="icon ni ni-activity-round-fill"></em><span>Account Activity</span></a></li>
                                <li><a href="{{ route('profile.security') }}"><em class="icon ni ni-lock-alt-fill"></em><span>Security Settings</span></a></li>
                                <li><a href="{{ route('admin.profile.socials') }}"><em class="icon ni ni-grid-add-fill-c"></em><span>Connected with Social</span></a></li>
                            </ul>
                        </div><!-- .card-inner -->
                    </div><!-- .card-inner-group -->
                </div><!-- card-aside -->
            </div><!-- .card-aside-wrap -->
        </div><!-- .card -->
    </div>
@endsection
