@extends('backend.layouts.base')

@section('body')  

    {{-- <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Blog Section</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route('admin.dashboard') }}" class="text-muted text-hover-primary">Dashboard</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Blog Section</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">All Blogs</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->           
        </div>
        <!--end::Container-->
    </div>

    <div class="post d-flex flex-column-fluid mb-10" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                    <h3>Add a New Blog</h3>
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">                            
                            <a href="{{ route('admin.blogs') }}">
                                <button type="button" class="btn btn-primary">All Blogs</button>
                            </a>
                        </div>
                        <!--end::Toolbar-->                        
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-2">
                    <form class="form" action="{{ route('admin.blog.store') }}" method="POST" enctype="form/multipart">
                        @csrf
                        <div class="row">
                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row col-md-4">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                    <span class="required">Blog Title</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Add a blog title"></i>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" 
                                placeholder="E.g How to do something" name="title" value="{{ old('title') }}" />
                            </div>
                            <!--end::Input group--> 

                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row col-md-4">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                    <span class="required">Blog Category</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Select a category to associate it with a blog"></i>
                                </label>
                                <!--end::Label-->
                                <select class="form-select form-select-lg" aria-label=".form-select-lg example" name="category_id">
                                    <option selected>Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach                                        
                                </select>
                            </div>
                            <!--end::Input group--> 

                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row col-md-4">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                    <span class="required">Published By</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Select the publisher account"></i>
                                </label>
                                <!--end::Label-->
                                <select class="form-select form-select-lg" aria-label=".form-select-lg example" name="published_by">
                                    <option selected>Select Publisher</option>
                                    <option value="this_account">This Account</option>
                                    <option value="guest_author">Guest Author</option>                                                                           
                                </select>
                            </div>
                            <!--end::Input group-->                            
                        </div>

                        <div class="row">
                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row col-md-4">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                    <span class="required">Blog Read Time</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Enter read time in minutes"></i>
                                </label>
                                <!--end::Label-->
                                <input type="number" class="form-control form-control-solid" 
                                placeholder="E.g 3 0r 8" name="read_time" value="{{ old('read_time') }}" />
                            </div>
                            <!--end::Input group--> 

                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row col-md-4">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                    <span class="required">Status</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Select if the blog is published or not published"></i>
                                </label>
                                <!--end::Label-->
                                <select class="form-select form-select-lg" aria-label=".form-select-lg example" name="status">
                                    <option selected>Select Status</option>
                                    <option value="published">Published</option>                                                                           
                                    <option value="draft">Save as Draft</option>                                                                           
                                </select>
                            </div>
                            <!--end::Input group--> 

                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row col-md-4">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                    <span class="required">Blog Image</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Click to upload the blog's image"></i>
                                </label>
                                <!--end::Label-->
                                <input type="file" class="form-control" name="image">
                            </div>
                            <!--end::Input group-->                            
                        </div>

                        <div class="row">
                            <div class="mt-5 d-flex flex-column mb-7 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                    <span class="required">Short Description</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Give a brief description of the blog. Not more than 100 characters"></i>
                                </label>

                                <textarea class="form-control" name="short_description" rows="11" placeholder="Short Description"></textarea>
                            </div>

                            <div class="form-group mt-5">
                                <label for="description">Description</label>
                                <textarea id="description" name="description" class="summernote"></textarea>
                            </div>

                            <div class="col-md-6 mt-5">
                                <div class="form-group">
                                    <input type="text" data-role="tagsinput" name="tags" class="form-control form-control-outlined"
                                        placeholder="Tags">                                        
                                </div>
                            </div>
                        </div>

                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                            <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3">Discard</button>
                            <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                                <span class="indicator-label">Save Blog</span>                               
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->       
        </div>
        <!--end::Container-->
    </div> --}}

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
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="text" name="meta_keyword" class="form-control form-control-outlined"
                                                        id="meta-keyword" value="{{ old('meta_keyword') }}">
                                                    <label class="form-label-outlined" for="meta-keyword">Meta Keyword</label>
                                                    @error('title')<span class="text-danger"><strong>{{ $message }}</strong></span>@enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" data-role="tagsinput" name="tags" class="form-control form-control-outlined"
                                                    placeholder="Tags">                                        
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <textarea name="meta_description" class="form-control form-control-outlined
                                                    @error('meta_description')is-invalid @enderror"  id="meta_description"></textarea>
                                                    <label class="form-label-outlined" for="meta_description">Meta Description</label>
                                                </div>
                                                @error('meta_description')<span class="text-danger"><strong>{{ $message }}</strong></span>@enderror
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