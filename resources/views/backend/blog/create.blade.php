@extends('backend.layouts.base')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Welcome to your dashboard {{ Auth::user()->name }}</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.blogs') }}">Blog</a></li>
                        <li class="breadcrumb-item active">Add New Blog</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
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
                                <div class="col-sm-3 col-md-6">
                                    <div class="form-floating">                                    
                                        <input type="text" class="form-control" id="blogNameInput" 
                                        name="title" placeholder="Enter Blog Title" value="{{ old('title') }}">
                                        <label for="blogNameInput">Blog Title</label>                                     
                                    </div>
                                </div> 

                                <div class="col-xxl-3 col-md-6">
                                    <select class="form-select form-select-lg" aria-label=".form-select-lg example" name="category_id">
                                        <option selected>Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endforeach                                        
                                    </select>
                                </div>

                                <div class="col-sm-3 col-md-4">
                                    <div class="form-floating">                                    
                                        <input type="number" class="form-control" id="blogNameInput" 
                                        name="category_name" placeholder="Enter Category Name" value="{{ old('category_name') }}"> 
                                        <label for="blogNameInput">Blog Read Time <em>(in minutes)</em></label>                                     
                                    </div>
                                </div> 

                                <div class="col-sm-3 col-md-4">
                                    <select class="form-select form-select-lg" aria-label=".form-select-lg example">
                                        <option selected>Published by</option>
                                        <option value="this_account">This Account</option>
                                        <option value="guest_author">Guest Author</option>                                       
                                    </select>
                                </div>

                                <div class="col-sm-3 col-md-4">
                                    <select class="form-select form-select-lg" aria-label=".form-select-lg example">
                                        <option selected>Status</option>
                                        <option value="published">Publish</option>
                                        <option value="draft">Save as Draft</option>
                                    </select>
                                </div>

                                <div class="card-body col-md-6">
                                    <p class="text-muted">Select or Drop blog image</p>

                                    <div class="dropzone">
                                        <div class="fallback">
                                            <input name="image" type="file" multiple="multiple">
                                        </div>
                                        <div class="dz-message needsclick">
                                            <div class="mb-3">
                                                <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                                            </div>

                                            <h4>Drop files here or click to upload.</h4>
                                        </div>
                                    </div>

                                    <ul class="list-unstyled mb-0" id="dropzone-preview">
                                        <li class="mt-2" id="dropzone-preview-list">
                                            <!-- This is used as the file preview template -->
                                            <div class="border rounded">
                                                <div class="d-flex p-2">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar-sm bg-light rounded">
                                                            <img data-dz-thumbnail class="img-fluid rounded d-block" src="#" alt="Dropzone-Image" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <div class="pt-1">
                                                            <h5 class="fs-14 mb-1" data-dz-name>&nbsp;</h5>
                                                            <p class="fs-13 text-muted mb-0" data-dz-size></p>
                                                            <strong class="error text-danger" data-dz-errormessage></strong>
                                                        </div>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-3">
                                                        <button data-dz-remove class="btn btn-sm btn-danger">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- end dropzone-preview -->
                                </div>
                                <!-- end card body -->
                                <div class="col-md-6 mt-5">
                                    <label for="VertimeassageInput" class="form-label text-muted">Short Description</label>
                                    <textarea class="form-control" id="VertimeassageInput" rows="11" placeholder="Short Description"></textarea>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <p class="text-muted">Blog Description</p>
                                        <div class="snow-editor" style="height: 300px;">
                                        </div> <!-- end Snow-editor-->
                                    </div><!-- end card-body -->
                                </div>
                            </div>
                            <div class="col-xxl-3 col-md-6 mt-3">
                                <button type="submit" class="btn btn-soft-success waves-effect waves-light">Add Blog</button>
                            </div>
                        </form>                            
                    </div>                                    
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
@endsection