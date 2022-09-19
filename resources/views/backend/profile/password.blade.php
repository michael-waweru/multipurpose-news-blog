@extends('backend.layouts.base')

@section('body')
    <div class="nk-block">
        <div class="card card-bordered">
            <div class="card-aside-wrap">
                <div class="card-inner card-inner-lg">
                    <div class="nk-block-head nk-block-head-lg">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h4 class="nk-block-title">Security Settings</h4>
                                <div class="nk-block-des">
                                    <p>These settings are helps you keep your account secure.</p>
                                </div>
                            </div>
                            <div class="nk-block-head-content align-self-start d-lg-none">
                                <a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <form action="{{ route('profile.password.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="nk-block">
                            <div class="card card-bordered">
                                <div class="card-inner-group">
                                    <div class="card-inner">                                    
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="password" name="current_password" class="form-control form-control-outlined @error('current_password') is-invalid @enderror"
                                                        id="current_password">
                                                    <label class="form-label-outlined" for="current_password">Current Password</label>
                                                </div>
                                                @error('current_password')<span class="text-danger"><strong>{{ $message }}</strong></span>@enderror
                                            </div>
                                        </div>

                                        <div class="row gy-4 mt-3">

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        <input type="password" name="password" class="form-control form-control-outlined @error('password') is-invalid @enderror"
                                                            id="password">
                                                        <label class="form-label-outlined" for="password">New Password</label>
                                                    </div>
                                                    @error('password')<span class="text-danger"><strong>{{ $message }}</strong></span>@enderror
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        <input type="password" name="password_confirmation" class="form-control form-control-outlined @error('password_confirmation') is-invalid @enderror"
                                                            id="password_confirmation">
                                                        <label class="form-label-outlined" for="password_confirmation">Confirm New Password</label>
                                                    </div>
                                                    @error('password_confirmation')<span class="text-danger"><strong>{{ $message }}</strong></span>@enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 mt-3">
                                            <button type="submit" class="btn btn-outline-primary">Update Password</button>
                                        </div>

                                    </div><!-- .card-inner -->                                
                                </div><!-- .card-inner-group -->
                            </div><!-- .card -->
                        </div><!-- .nk-block -->
                    </form>
                </div><!-- .card-inner -->
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
                                                <li><a href="{{ route('profile.edit.basic', $userId->id) }}"><em class="icon ni ni-camera-fill"></em><span>Change Photo</span></a></li>
                                                <li><a href="{{ route('profile.edit.basic', $userId->id) }}"><em class="icon ni ni-edit-fill"></em><span>Update Profile</span></a></li>
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
                </div><!-- .card-aside -->
            </div><!-- .card-aside-wrap -->
        </div><!-- .card -->
    </div>
@endsection