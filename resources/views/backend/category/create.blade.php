@extends('backend.layouts.base')

@section('body')
    {{-- <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Category Section</h1>
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
                    <li class="breadcrumb-item text-muted">Category Section</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">All categories</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->           
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                    <h3>Add a New Category</h3>
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">                            
                            <a href="{{ route('admin.categories') }}">
                                <button type="button" class="btn btn-sm btn-primary">All Categories</button>
                            </a>
                        </div>
                        <!--end::Toolbar-->                        
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-2">
                    <form id="kt_modal_new_card_form" class="form" action="{{ route('admin.category.store') }}" method="POST">
                        @csrf
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-7 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">Category Name</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Add a category to associate to a blog"></i>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="E.g World News" 
                                name="category_name" value="{{ old('category_name') }}" />
                            
                            <div class="row mt-5">
                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                    <span class="required">Short Description</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Give a brief description of the category. Not more than 300 characters"></i>
                                </label>
    
                                <textarea class="form-control" name="description" rows="11" placeholder="Description"></textarea>
                            </div> 
                        </div>
                        <!--end::Input group--> 
                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                            <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3">Discard</button>
                            <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                                <span class="indicator-label">Submit</span>                                
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
                        <h4 class="title nk-block-title">Add New Category
                            <a href="{{ route('admin.categories') }}" class="btn btn-sm btn-primary float-end">All Categories</a>
                        </h4>
                    </div>
                </div>
                <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card card-bordered card-preview">
                        <div class="card-inner">
                            <div class="preview-block">
                                <div class="row gy-4">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <input type="text" name="category_name" class="form-control form-control-outlined @error('category_name')is-invalid @enderror"
                                                    id="outlined-default" value="{{ old('category_name') }}">
                                                <label class="form-label-outlined" for="outlined-default">Category Name</label>
                                                @error('category_name')<span class="text-danger"><strong>{{ $message }}</strong></span>@enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mt-5">
                                    <div class="form-group">
                                        <div class="form-control-wrap">
                                            <textarea name="description" class="form-control form-control-outlined" id="short-description"></textarea>
                                            <label class="form-label-outlined" for="short-description">Short Description<span style="color:red">*</span></label>
                                        </div>
                                        @error('description')<span class="text-danger"><strong>{{ $message }}</strong></span>@enderror
                                    </div>
                                </div>

                                <div class="col-12 mt-2">
                                    <button type="submit" class="btn btn-outline-primary">Add Category</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div><!-- .nk-block -->
        </div><!-- .components-preview -->
    </div>
@endsection