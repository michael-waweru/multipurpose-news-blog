@extends('backend.layouts.base')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Edit Category</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.categories') }}">Categories</a></li>
                        <li class="breadcrumb-item active">Edit Category</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Edit Category</h4>                    
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="live-preview"> 
                        <form action="{{ route('admin.category.update',$category->slug) }}" method="POST" enctype="multipart/form">
                            @csrf
                            <div class="col-xxl-3 col-md-6">
                                <div class="form-floating">                                    
                                    <input type="text" class="form-control" id="categoryNameInput" 
                                    name="category_name" placeholder="Enter Category Name" value="{{ $category->category_name }}"> 
                                    <label for="categoryNameInput">Category Name</label>                                     
                                </div>
                            </div> 

                            <div class="col-xxl-3 col-md-6 mt-3">
                                <button type="submit" class="btn btn-soft-success waves-effect waves-light">Update Category</button>
                            </div>
                        </form>                            
                    </div>                                    
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
@endsection