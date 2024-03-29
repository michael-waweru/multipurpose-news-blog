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
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                    <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Categories" />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">                            
                            <!--begin::Add customer-->
                            <a href="{{ route('admin.category.create') }}">
                                <button type="button" class="btn btn-sm btn-primary">Add New Category</button>
                            </a>
                           
                            <!--end::Add customer-->
                        </div>
                        <!--end::Toolbar-->                        
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">                               
                                <th class="min-w-125px">Category Name</th>
                                <th class="min-w-125px">Category Slug</th>                               
                                <th class="min-w-125px">Created Date</th>
                                <th class="text-end min-w-70px">Actions</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600">
                           @foreach ($all_categories as $category)
                                <tr>                                   
                                    <!--begin::Name=-->
                                    <td>
                                        <a href="view.html" class="text-gray-800 text-hover-primary mb-1">{{ $category->category_name }}</a>
                                    </td>
                                    <!--end::Name=-->
                                    <!--begin::Email=-->
                                    <td>
                                        <a href="#" class="text-gray-600 text-hover-primary mb-1">{{ $category->slug }}</a>
                                    </td>
                                    <!--end::Email=-->
                                    <!--begin::Date=-->
                                    <td>{{ $category->created_at->diffForHumans() }}</td>
                                    <!--end::Date=-->
                                    <!--begin::Action=-->
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                        <span class="svg-icon svg-icon-5 m-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon--></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="view.html" class="menu-link px-3">View</a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="view.html" class="menu-link px-3">Edit</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Delete</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    <!--end::Action=-->
                                </tr>
                           @endforeach
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->            
        </div>
        <!--end::Container-->
    </div>        --}}

    <div class="nk-content-body">
        <div class="components-preview wide-md mx-auto">
            <div class="nk-block nk-block-lg">
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <h4 class="nk-block-title">All Categories
                            <a href="{{ route('admin.category.create') }}" class="btn btn-sm btn-primary float-end">Add New Category</a>
                        </h4>
                    </div>
                </div>
                <div class="card card-bordered card-preview">
                    <div class="card-inner">
                        <table class="datatable-init nowrap nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                            <thead>
                                <tr class="nk-tb-item nk-tb-head">
                                    <th class="nk-tb-col tb-col-mb"><span class="sub-text text-center">Category Name</span></th>
                                    <th class="nk-tb-col tb-col-md"><span class="sub-text text-center">Category Slug</span></th>
                                    <th class="nk-tb-col nk-tb-col-tools text-end">Actions </th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($all_categories as $category)
                                    <tr class="nk-tb-item">
                                        <td class="nk-tb-col tb-col-mb">
                                            <span class="tb-amount text-center">{{ $category->category_name }}</span>
                                        </td>
                                        <td class="nk-tb-col tb-col-mb">
                                            <span class="tb-amount text-center">{{ $category->slug }}</span>
                                        </td>
                                        <td class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li>
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickViewModal{{ $category->id }}" >
                                                                        <em class="icon ni ni-eye"></em><span>Quick View</span>
                                                                    </a>
                                                                </li>
                                                                <li class="divider"></li>
                                                                {{-- <li><a href="{{ route('admin.category.edit',['id' => $category->id]) }}/"><em class="icon ni ni-pen"></em><span>Edit Category</span></a></li> --}}
                                                                <li>
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $category->id }}">
                                                                        <em class="icon ni ni-trash"></em><span>Delete Category</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="deleteModal{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="serviceModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="serviceModalCenterTitle">Delete {{ $category->title }}?</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-center">
                                                    You Cannot revert this action
                                                </div>
                                                <div class="modal-footer">

                                                    {{-- <form class="d-inline-block" action="{{ route('admin.service.delete', $category->id) }}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                    <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-success">I'm Positive. DELETE IT!</button>
                                                    </form> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" tabindex="-1" id="quickViewModal{{ $category->id }}">
                                        <div class="modal-dialog modal-xl" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">{{ $category->category_name }}</h5>
                                                    <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                        <em class="icon ni ni-cross"></em>
                                                    </a>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="full-name">Category Title</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" value="{{ $category->category_name }}" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="email-address">Category Slug</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" value="{{ $category->slug }}" disabled>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12 mt-5">
                                                            <div class="form-group">
                                                                <label class="form-label" for="email-address">Category Description</label>
                                                                <div class="form-control-wrap">
                                                                    <textarea class="form-control" disabled>{{ $category->description }}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer bg-light">
                                                    <span class="sub-text">{{ config('app.name', 'NutriLab & Consulting Limited') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div><!-- .card-preview -->
            </div> <!-- nk-block -->
        </div><!-- .components-preview -->
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