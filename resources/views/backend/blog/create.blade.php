@extends('backend.layouts.base')

@section('body')
    {{-- <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Add a New Blog</h4>                    
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="live-preview"> 
                        <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form">
                            @csrf
                            <div class="row gy-4">
                                <div class="col-sm-3 col-md-4">
                                    <div class="form-floating">                                    
                                        <input type="text" class="form-control" id="blogNameInput" 
                                        name="title" placeholder="Enter Blog Title" value="{{ old('title') }}">
                                        <label for="blogNameInput">Blog Title</label>                                     
                                    </div>
                                </div> 

                                <div class="col-sm-3 col-md-4">
                                    <select class="form-select form-select-lg" aria-label=".form-select-lg example" name="category_id">
                                        <option selected>Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endforeach                                        
                                    </select>
                                </div>

                                <div class="col-sm-3 col-md-4">
                                    <div class="form-floating">                                    
                                        <input type="number" class="form-control" id="readTime" placeholder="Enter Read Time"
                                        name="read_time" value="{{ old('read_time') }}"> 
                                        <label for="readTime">Blog Read Time <em>(in minutes)</em></label>                                     
                                    </div>
                                </div>

                                <div class="row gy-4">
                                    <div class="col-sm-3 col-md-4">
                                        <select class="form-select form-select-lg" aria-label=".form-select-lg example" name="published_by">
                                            <option selected>Published by</option>
                                            <option value="this_account">This Account</option>
                                            <option value="guest_author">Guest Author</option>                                       
                                        </select>
                                    </div>
    
                                    <div class="col-sm-3 col-md-4">
                                        <select class="form-select form-select-lg" aria-label=".form-select-lg example" name="status">
                                            <option selected>Status</option>
                                            <option value="published">Publish</option>
                                            <option value="draft">Save as Draft</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-3 col-md-4">
                                        <input type="file" name="image" id="image">
                                    </div>
                                </div>
                               
                                <!-- end card body -->
                                <div class="mt-5">                                   
                                    <textarea class="form-control" name="short_description" rows="11" placeholder="Short Description"></textarea>
                                </div>

                                <div class="form-group mt-5">
                                    <label for="description">Description</label>
                                    <textarea id="description" name="description" class="summernote"></textarea>
                                </div>
                            </div>

                           <div class="text-center pt-15">
                        <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3">Discard</button>
                        <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>                            
                        </button>
                    </div>
                        </form>                            
                    </div>                                    
                </div>
            </div>
        </div>
        <!--end col-->
    </div> --}}

    <div class="toolbar" id="kt_toolbar">
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

    <div class="post d-flex flex-column-fluid" id="kt_post">
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
                            <!--begin::Add customer-->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_customer">All Blogs</button>
                            <!--end::Add customer-->
                        </div>
                        <!--end::Toolbar-->                        
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-2">
                    <form class="form" action="{{ route('admin.blog.store') }}" method="POST">
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
                                placeholder="E.g How to do something nice to yourself" name="title" value="{{ old('title') }}" />
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
                                <input type="file" class="form-control" name="image" id="image">
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