@extends('backend.layouts.base')

@section('body')
    <div class="nk-content-body">
        <div class="components-preview wide-md mx-auto">
            <div class="nk-block nk-block-lg">
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <h4 class="title nk-block-title">Update User Profile</h4>
                    </div>
                </div>
                <form action="{{ route('admin.profile.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card card-bordered card-preview">
                        <div class="card-inner">
                            <div class="preview-block">
                                <div class="row gy-4">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <textarea name="about_author" class="form-control form-control-outlined" id="about_author"></textarea>
                                                <label class="form-label-outlined" for="about_author">About You</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr class="preview-hr">

                                <div class="row gy-4">

                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <input type="text" name="social_facebook" class="form-control form-control-outlined"
                                                    id="social_facebook" value="{{ old('social_facebook') }}">
                                                <label class="form-label-outlined" for="social_facebook">Facebook Social Links</label>                                               
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <input type="text" name="social_twitter" class="form-control form-control-outlined"
                                                    id="social_twitter" value="{{ old('social_twitter') }}">
                                                <label class="form-label-outlined" for="social_twitter">Twitter Social Links</label>                                               
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <input type="text" name="social_instagram" class="form-control form-control-outlined"
                                                    id="social_instagram" value="{{ old('social_instagram') }}">
                                                <label class="form-label-outlined" for="social_instagram">Instagram Social Links</label>                                               
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="preview-hr">

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-outline-primary">Update Basic Info</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div><!-- .nk-block -->
        </div><!-- .components-preview -->
    </div>
@endsection
