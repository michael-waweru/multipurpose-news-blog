@extends('backend.layouts.base')

@section('body')
    <div class="nk-content-body">
        <div class="components-preview wide-md mx-auto">
            <div class="nk-block nk-block-lg">
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <h4 class="title nk-block-title">Edit Blog
                            <a href="{{ url()->previous() }}" class="btn btn-sm btn-dark float-end">Back</a>
                        </h4>
                    </div>
                </div>
                <form action="{{ route('admin.blog.update',$blog->slug) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card card-bordered card-preview">
                        <div class="card-inner">
                            <div class="preview-block">
                                <div class="row gy-4">
                                    <div class="col-md-4 pt-4">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <input type="text" name="title" class="form-control form-control-outlined"
                                                    id="title" value="{{ $blog->title }}">
                                                <label class="form-label-outlined" for="title">Blog Title <span style="color:red">*</span></label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                {{-- <label class="form-label">Category <span style="color:red">*</span></label> --}}
                                                <select name="category_id" class="form-select form-select-sm mt-4" aria-label=".form-select-sm example">                                                    
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }} {{ $category->id === $blog->category_id ? 'selected' : '' }}">
                                                            {{ $category->category_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pt-4">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <input type="number" name="read_time" class="form-control form-control-outlined"
                                                    id="read_time" value="{{ $blog->read_time }}">
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
                                        @if (!empty($blog->image))
                                            <a class="d-block mx-auto mt-2" href="javascript:void(0)" data-toggle="tooltip" data-placement="top" data-original-title="Current Image">
                                                <img src="{{ asset('storage/blog/'.$blog->image) }}" alt="blog image" class="rounded w-25">
                                            </a>
                                        @else
                                            <a class="d-block mx-auto" href="#" data-toggle="tooltip" data-placement="top" data-original-title="No Image">
                                                <p>No Image</p>
                                            </a>
                                        @endif
                                    </div>
                                </div>

                                <hr class="preview-hr">

                                <div class="row gy-4">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <textarea name="short_description" class="form-control form-control-outlined" id="short-description">{{ $blog->short_description }}</textarea>
                                                <label class="form-label-outlined" for="short-description">Short Description<span style="color:red">*</span></label>
                                            </div>                                           
                                        </div>
                                    </div>                                   

                                    <div class="card-inner">
                                        <textarea name="description" class="summernote-basic form-control">{{ $blog->description }}</textarea>
                                    </div>

                                    <hr class="preview-hr">

                                    <div class="row gy-4">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="text" name="meta_keyword" class="form-control form-control-outlined"
                                                        id="meta-keyword" value="{{ $blog->meta_keyword }}">
                                                    <label class="form-label-outlined" for="meta-keyword">Meta Keyword</label>                                                   
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <select class="form-select form-select-sm" name="is_live">
                                                    <option selected="notLive">Is it Live?</option>
                                                    <option value="isLive">Developing Story (Live)</option>
                                                    <option value="notLive">Not Live</option>
                                                </select>
                                            </div>
                                        </div>                                        

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <textarea name="meta_description" class="form-control form-control-outlined" id="meta_description">{{ $blog->meta_description }}</textarea>
                                                    <label class="form-label-outlined" for="meta_description">Meta Description</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-outline-primary">Update Blog</button>
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