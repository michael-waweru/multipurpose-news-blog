@extends('backend.layouts.base')

@section('body')
    <div class="nk-content-body">
        <div class="components-preview wide-md mx-auto">
            <div class="nk-block nk-block-lg">
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <h4 class="title nk-block-title">Add New Blog
                            <a href="{{ route('admin.blogs') }}" class="btn btn-sm btn-primary float-end">All Blogs</a>
                        </h4>
                    </div>
                </div>
                <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card card-bordered card-preview">
                        <div class="card-inner">
                            <div class="preview-block">
                                <div class="row gy-4">
                                    <div class="col-md-4 pt-4">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <input type="text" name="title" class="form-control form-control-outlined"
                                                    id="title" value="{{ old('title') }}">
                                                <label class="form-label-outlined" for="title">Blog Title <span style="color:red">*</span></label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                {{-- <label class="form-label">Category <span style="color:red">*</span></label> --}}
                                                <select name="category_id" class="form-select form-select-sm mt-4" aria-label=".form-select-sm example">
                                                    <option value="" selected>Select a Category</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pt-4">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <input type="number" name="read_time" class="form-control form-control-outlined"
                                                    id="read_time" value="{{ old('read_time') }}">
                                                <label class="form-label-outlined" for="read_time">Blog Read Time <small><em>(in minutes)</em></small>
                                                    <span style="color:red">*</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr class="preview-hr">

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="type" class="col-form-label">Author</label>
                                            <select class="form-select form-select-sm" name="published_by" id="published_by">
                                                <option value="this_account" selected>Select Your Option</option>
                                                <option value="this_account">This Account User</option>
                                                <option value="guest_user">Guest User</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="status" class="col-form-label">Status </label>
                                            <select class="form-select" name="status" id="status">
                                                <option value="published" selected>Select Your Option</option>
                                                <option value="published">Published</option>
                                                <option value="draft">Draft</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="image" class="col-form-label">Image <span style="color:red">*</span></label>
                                        <input type="file" name="image" class="form-control" id="image">
                                    </div>
                                </div>

                                <hr class="preview-hr">

                                <div class="row gy-4">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <textarea name="short_description" class="form-control form-control-outlined" id="short-description"></textarea>
                                                <label class="form-label-outlined" for="short-description">Short Description<span style="color:red">*</span></label>
                                            </div>
                                            @error('short_description')<span class="text-danger"><strong>{{ $message }}</strong></span>@enderror
                                        </div>
                                    </div>

                                    <div class="card-inner">
                                        <textarea name="description" class="summernote-basic form-control"></textarea>
                                    </div>

                                    <hr class="preview-hr">

                                    <div class="row gy-4">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="text" name="meta_keyword" class="form-control form-control-outlined"
                                                        id="meta-keyword" value="{{ old('meta_keyword') }}">
                                                    <label class="form-label-outlined" for="meta-keyword">Meta Keyword</label>
                                                    @error('title')<span class="text-danger"><strong>{{ $message }}</strong></span>@enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <select class="form-select form-select-sm" name="is_live">
                                                    <option selected>Is it Live?</option>
                                                    <option value="isLive">Developing Story(Live)</option>
                                                    <option value="notLive">Not Live</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" data-role="tagsinput" name="tags" class="form-control form-control-outlined"
                                                    placeholder="Tags">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <textarea name="meta_description" class="form-control form-control-outlined"  id="meta_description"></textarea>
                                                    <label class="form-label-outlined" for="meta_description">Meta Description</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-outline-primary">Add Blog</button>
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

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.summernote').summernote({
                height: 450,
            });
        });
    </script>
@endsection
