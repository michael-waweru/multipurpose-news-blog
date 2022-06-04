@extends('backend.layouts.base')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Welcome to your dashboard {{ Auth::user()->name }}</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>                        
                        <li class="breadcrumb-item active">Category Section</li>                      
                    </ol>
                </div>

            </div>
        </div>
    </div> 

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Manage Categories</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="customerList">
                        <div class="row g-4 mb-3">
                            <div class="col-sm-auto">
                                <div>
                                    <a href="{{ route('admin.category.create') }}/">
                                        <button type="button" class="btn btn-success add-btn">
                                            <i class="ri-add-line align-bottom me-1"></i> Add New Category
                                        </button>
                                    </a>                                    
                                    <button class="btn btn-soft-danger" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="d-flex justify-content-sm-end">
                                    <div class="search-box ms-2">
                                        <input type="text" class="form-control search" placeholder="Search...">
                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="success_message"></div>

                        <div class="table-responsive table-card mt-3 mb-1">
                            <table class="table align-middle table-nowrap" id="customerTable">
                                <thead class="table-light">
                                    <tr style="text-align:center">
                                        <th scope="col" style="width: 50px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                            </div>
                                        </th>
                                        <th class="sort" data-sort="customer_name">Category Name</th>
                                        <th class="sort" data-sort="email">Category Slug</th>
                                        <th class="sort" data-sort="action">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="list form-check-all">
                                    @foreach ($all_categories as $category)
                                        <tr style="text-align:center">
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                </div>
                                            </th>                                           
                                            <td>{{ $category->category_name }}</td>
                                            <td>{{ $category->slug }}</td>
                                            <td>
                                                <div class="text-align:center">                                                    
                                                    <button class="btn btn-sm btn-dark" data-bs-toggle="modal" data-bs-target="#showModal{{ $category->id }}">View Record</button>                                                   
                                                
                                                    <a href="{{ route('admin.category.edit',$category->slug) }}">
                                                        <button class="btn btn-sm btn-success edit-item-btn">Edit Record</button>                                                        
                                                    </a>                                                   
                                                
                                                    <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal{{ $category->id }}">Delete Record</button>                                                    
                                                </div>
                                            </td>
                                        </tr>

                                        <div class="modal fade" id="showModal{{ $category->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-light p-3">
                                                        <h5 class="modal-title" id="exampleModalLabel">{{ $category->category_name }} Category</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                                    </div>
                                                   
                                                    <div class="modal-body">                                    
                                                        <div class="mb-3">
                                                            <label for="id-field" class="form-label">ID</label>
                                                            <input type="text" id="id-field" class="form-control" value="{{ $category->id }}" disabled />
                                                        </div>
                                
                                                        <div class="mb-3">
                                                            <label for="customername-field" class="form-label">Category Name</label>
                                                            <input type="text" id="customername-field" class="form-control" value="{{ $category->category_name }}" readonly />
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="customername-field" class="form-label">Category Slug</label>
                                                            <input type="text" id="customername-field" class="form-control" value="{{ $category->slug }}" readonly />
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>                            
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    
                                    
                                         <!-- Delete Modal -->
                                         <div class="modal fade zoomIn" id="deleteRecordModal{{ $category->id }}" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="mt-2 text-center">  
                                                            <div class="card-body p-4 pb-0">                                                               
                                                                <div class="mt-3">
                                                                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" 
                                                                    trigger="loop" colors="primary:#f7b84b,secondary:#f06548" 
                                                                    style="width:100px;height:100px"></lord-icon>
                                                                    <div class="mt-4 pt-2 fs-15 mx-5">
                                                                        <h4>Delete {{ $category->category_name }}?</h4>
                                                                        <p class="text-muted mx-4 mb-0">
                                                                            Are you Sure You want to proceed? Please note that this action cannot be undone.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                                            <form action="{{ route('admin.category.delete',$category->slug) }}" method="POST">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button type="submit" class="btn w-sm btn-danger">Yes, I'm Sure!</button>
                                                            </form>                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end modal -->
                                    @endforeach                                    
                                </tbody>
                            </table>
                            <div class="noresult" style="display: none">
                                <div class="text-center">                                   
                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                    <p class="text-muted mb-0">We've searched all records. We did not find any items related to your search.</p>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <div class="pagination-wrap hstack gap-2">
                                <a class="page-item pagination-prev disabled" href="#">
                                    Previous
                                </a>
                                <ul class="pagination listjs-pagination mb-0"></ul>
                                <a class="page-item pagination-next" href="#">
                                    Next
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end col -->
    </div>      
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $(document).on('click', '.add_category', function(e) {
                e.preventDefault();
               
                var data = {
                    'name': $('.category_name').val(),
                }
                // console.log(data);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'POST',
                    url:"/admin/category/add",
                    data: data,
                    datatype:"json",
                    success: function (response) {
                        // console.log(response);
                        if (response.status == 400) 
                        {
                            $('#saveForm_errList').html("");
                            $('#saveForm_errList').addClass('alert alert-danger');
                            $.each(response.errors, function (key, err_values) {
                                $('#saveForm_errList').append('<li>'+err_values+'</li>');
                            });
                        }
                        else
                        {
                            $('#saveForm_errList').html("");
                            $('#success_message').addClass('alert alert-success');
                            $('#success_message').text(response.message);
                            $('#addNewCategoryModal').modal('hide');
                            $('#addNewCategoryModal').find('input').val("");
                        }
                    }
                });
            });
        });
    </script>
@endsection