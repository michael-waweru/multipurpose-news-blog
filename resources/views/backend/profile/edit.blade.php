@extends('backend.layouts.base')

@section('body')
    <div class="nk-content-body">
        <div class="components-preview wide-md mx-auto">
            <div class="nk-block nk-block-lg">
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <h4 class="title nk-block-title">Edit Basic Profile
                            <a href="{{ url()->previous() }}" class="btn btn-sm btn-dark float-end">Back</a>
                        </h4>
                    </div>
                </div>
                <div>
                    <form action="{{ route('profile.update.basic', $userProfile->slug) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card card-bordered card-preview">
                            <div class="card-inner">
                                <div class="preview-block">
                                    <div class="row gy-4">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="text" name="name" class="form-control form-control-outlined"
                                                        id="name" value="{{ $userProfile->name }}">
                                                    <label class="form-label-outlined" for="name">User Name</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">                                           
                                            <input type="file" name="avatar" id="avatar" class="form-control">
                                            @if (!empty($userProfile->avatar))                                               
                                                <a class="d-block mx-auto mt-2" href="javascript:void(0)">
                                                    <img src="{{ asset('storage/avatar/'.$userProfile->avatar) }}" alt="avatar" class="rounded w-25">
                                                </a>
                                                <p><small> <em> This is your currently set avatar </em></small></p>                                
                                            @else                                               
                                                <a class="d-block mx-auto" href="javascript:void(0);">
                                                    <img src="{{ asset('assets/backend/avatar.png') }}" alt="no avatar" class="rounded w-25">
                                                </a>
                                                <p><small><em> You have no set avatar. </em></small></p>
                                            @endif
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <textarea name="about_author" class="form-control form-control-outlined" id="about_author">{{ $userProfile->about_author }}</textarea>
                                                    <label class="form-label-outlined" for="about_author">About You</label>
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="preview-hr">

                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="text" name="social_facebook" class="form-control form-control-outlined"
                                                        id="social_facebook" value="{{ $userProfile->social_facebook}}">
                                                    <label class="form-label-outlined" for="social_facebook">Facebook Social Links</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="text" name="social_twitter" class="form-control form-control-outlined"
                                                        id="social_twitter" value="{{ $userProfile->social_twitter }}">
                                                    <label class="form-label-outlined" for="social_twitter">Twitter Social Links</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="text" name="social_instagram" class="form-control form-control-outlined"
                                                        id="social_instagram" value="{{ $userProfile->social_instagram }}">
                                                    <label class="form-label-outlined" for="social_instagram">Instagram Social Links</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-outline-primary">Update Basic Info</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- .nk-block -->
        </div><!-- .components-preview -->
    </div>
@endsection

