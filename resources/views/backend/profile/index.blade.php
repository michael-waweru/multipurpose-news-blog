@extends('backend.layouts.base')

@section('body')
    <div class="nk-block">
        <div class="card card-bordered">
            <div class="card-aside-wrap">
                <div class="card-inner card-inner-lg">
                    <div class="nk-block-head nk-block-head-lg">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h4 class="nk-block-title">Personal Information</h4>
                                <div class="nk-block-des">
                                    <p>Basic info like your name and passwords, that you use on our Platform.</p>
                                </div>
                            </div>
                            <div class="nk-block-head-content align-self-start d-lg-none">
                                <a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="nk-data data-list">
                            <div class="data-head">
                                <h6 class="overline-title">Basic Info</h6>
                            </div>
                            <div class="data-item">
                                <div class="data-col">
                                    <span class="data-label">Full Name</span>
                                    <span class="data-value">{{ Auth::user()->name }}</span>
                                </div>
                                <div class="user-action">
                                    <div class="dropdown">
                                        <a class="btn btn-icon btn-trigger me-n2" data-bs-toggle="dropdown" href="#"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="#" class="data-item" data-bs-toggle="modal" data-bs-target="#profile-view"><em class="icon ni ni-camera-fill"></em><span>Quick View</span></a></li>
                                                <li><a href="{{ route('profile.edit.basic',$profile->id) }}"><em class="icon ni ni-edit-fill"></em><span>Edit Info</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div> --}}
                            </div><!-- data-item -->
                            <div class="data-item">
                                <div class="data-col">
                                    <span class="data-label">Email</span>
                                    <span class="data-value">{{ Auth::user()->email }}</span>
                                </div>
                                <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                            </div><!-- data-item -->
                            <div class="data-item">
                                <div class="data-col">
                                    <span class="data-label">Phone Number</span>
                                    <span class="data-value text-soft">Not yet added</span>
                                </div>
                            </div><!-- data-item -->
                            <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit" data-tab-target="#address">
                                <div class="data-col">
                                    <span class="data-label">Address</span>
                                    <span class="data-value">Kenya</span>
                                </div>
                            </div><!-- data-item -->
                        </div><!-- data-list -->
                        <div class="nk-data data-list">
                            <div class="data-head">
                                <h6 class="overline-title">Preferences <small><em>Note:This is set by the Systems Admin</em></small></h6>
                            </div>
                            <div class="data-item">
                                <div class="data-col">
                                    <span class="data-label">Language</span>
                                    <span class="data-value">English</span>
                                </div>
                            </div>
                            <div class="data-item">
                                <div class="data-col">
                                    <span class="data-label">Date Format</span>
                                    <span class="data-value">M d, YYYY</span>
                                </div>
                            </div>
                            <div class="data-item">
                                <div class="data-col">
                                    <span class="data-label">Timezone</span>
                                    <span class="data-value">Nairobi, Kenya (GMT +3)</span>
                                </div>
                            </div>
                        </div><!-- data-list -->
                    </div><!-- .nk-block -->
                </div>
                <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg" data-toggle-body="true" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                    <div class="card-inner-group" data-simplebar>
                        <div class="card-inner">
                            <div class="user-card">
                                <div class="bg-primary">
                                    @if (Auth::user()->avatar == null)
                                        <img src="{{ asset('assets/backend/avatar.png') }}" alt="avatar" width="100px" height="auto" >
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
                                                <li><a href="{{ route('profile.edit.basic', $profile->id) }}"><em class="icon ni ni-camera-fill"></em><span>Change Photo</span></a></li>
                                                <li><a href="{{ route('profile.edit.basic', $profile->id) }}"><em class="icon ni ni-edit-fill"></em><span>Update Profile</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .user-card -->
                        </div><!-- .card-inner -->
                        <div class="card-inner p-0">
                            <ul class="link-list-menu">
                                @if (Auth::user()->about_author == null)                                   
                                    <li><a href="{{ route('profile.basic') }}"><em class="icon ni ni-account-setting-fill"></em><span>Complete Profile Update</span></a></li>                                   
                                @endif
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

    <div class="modal fade" role="dialog" id="profile-view">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">View Profile</h5>
                    <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#personal">Personal</a>
                        </li>

                        <li class="nav-item">
                            {{-- <a class="nav-link" href="{{ route('profile.password', $profile->id) }}">Update Password</a> --}}
                        </li>
                    </ul><!-- .nav-tabs -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Full Name</label>
                                        <input type="text" class="form-control form-control-lg" id="full-name" value="{{ $profile->name }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="display-name">Display Name</label>
                                        <input type="text" class="form-control form-control-lg" id="display-name" value="{{ $profile->name }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Phone Number</label>
                                        <input type="text" class="form-control form-control-lg" id="phone-no" value="Not Set" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="birth-day">User Email</label>
                                        <input type="text" class="form-control form-control-lg date-picker" id="birth-day" value="{{ $profile->email }}" disabled>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .tab-pane -->
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>

@endsection
