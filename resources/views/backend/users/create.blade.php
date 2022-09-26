@extends('backend.layouts.base')

@section('body')
    <div class="nk-block">
        <div class="card card-bordered">
            <div class="card-aside-wrap">
                <div class="card-inner card-inner-lg">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h4 class="title nk-block-title">Add New User
                                <a href="{{ route('admin.users') }}" class="btn btn-sm btn-primary float-end">All Users</a>
                            </h4>
                        </div>
                    </div>
                    <form action="{{ route('admin.user.create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="nk-block">
                            <div class="card card-bordered">
                                <div class="card-inner-group">
                                    <div class="card-inner">  
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        <input type="text" name="name" class="form-control form-control-outlined @error('name') is-invalid @enderror"
                                                            id="user-name" value="{{ old('name') }}">
                                                        <label class="form-label-outlined" for="user-name">User Name</label>
                                                    </div>
                                                    @error('name')<span class="text-danger"><strong>{{ $message }}</strong></span>@enderror
                                                </div>
                                            </div>
    
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        <input type="email" name="email" class="form-control form-control-outlined @error('email') is-invalid @enderror"
                                                            id="user-email" value="{{ old('email') }}">
                                                        <label class="form-label-outlined" for="user-email">User Email</label>
                                                    </div>
                                                    @error('email')<span class="text-danger"><strong>{{ $message }}</strong></span>@enderror
                                                </div>
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
                                                            id="outlined-default">
                                                        <label class="form-label-outlined" for="outlined-default">Confirm New Password</label>
                                                    </div>
                                                    @error('password_confirmation')<span class="text-danger"><strong>{{ $message }}</strong></span>@enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 mt-3">
                                            <button type="submit" class="btn btn-outline-primary">Create User</button>
                                        </div>

                                    </div><!-- .card-inner -->                                
                                </div><!-- .card-inner-group -->
                            </div><!-- .card -->
                        </div><!-- .nk-block -->
                    </form>
                </div><!-- .card-inner -->               
            </div><!-- .card-aside-wrap -->
        </div><!-- .card -->
    </div>
@endsection