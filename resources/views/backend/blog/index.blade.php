@extends('backend.layouts.base')

@section('body')
    {{-- <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Blogs Section</h1>
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
                            <input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Blogs" />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">                            
                            <!--begin::Add customer-->
                            <a href="{{ route('admin.blog.create') }}">
                                <button type="button" class="btn btn-primary">Add New Blog</button>
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
                                <th class="min-w-125px">Blog Image</th>                               
                                <th class="min-w-125px">Blog Name</th>
                                <th class="min-w-125px">Blog Category</th>
                                <th class="min-w-125px">Created Date</th>
                                <th class="text-end min-w-70px">Actions</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600">
                        @foreach ($blogs as $blog)
                                <tr>    
                                    <td>
                                        Here is the image
                                    </td>
                                   
                                    <td>
                                       {{ $blog->title }}
                                    </td>                                   
                                    <td>
                                        {{ $blog->category->category_name }}
                                    </td>                                   
                                    <td>{{ $blog->created_at->format('F d, Y') }}</td>
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
    </div>       --}}

    <div class="nk-content-body">
        <div class="components-preview wide-md mx-auto">
            <div class="nk-block nk-block-lg">
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <h4 class="nk-block-title">All Blog
                            <a href="{{ route('admin.blog.create') }}" class="btn btn-sm btn-primary float-end">Add New Blog</a>
                        </h4>
                    </div>
                </div>
                <div class="card card-bordered card-preview">
                    <div class="card-inner">
                        <table class="datatable-init nowrap nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                            <thead>
                                <tr class="nk-tb-item nk-tb-head">
                                    <th class="nk-tb-col tb-col-mb"><span class="sub-text text-center">Blog Image</span></th>
                                    <th class="nk-tb-col tb-col-mb"><span class="sub-text text-center">Blog Name</span></th>                                    
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text text-center">Verified</span></th>
                                    <th class="nk-tb-col tb-col-md"><span class="sub-text text-center">Status</span></th>
                                    <th class="nk-tb-col nk-tb-col-tools text-end">Actions </th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($blogs as $blog)
                                    <tr class="nk-tb-item">
                                        <td class="nk-tb-col">
                                            <span>
                                                <img src="{{ asset('storage/blog') }}/{{ $blog->image }}" alt="{{ $blog->title }}" width="120px" height="auto">
                                            </span>
                                        </td>
                                        <td class="nk-tb-col tb-col-mb">
                                            <span class="tb-amount text-center">{{ $blog->title }}</span>
                                        </td>                                       
                                        <td class="nk-tb-col tb-col-lg">
                                            <ul class="list-status text-center">
                                                <li><em class="icon text-success ni ni-check-circle"></em></li>
                                            </ul>
                                        </td>
                                        <td class="nk-tb-col tb-col-md text-center">
                                            @if ($blog->status == 'published')
                                                <span class="tb-status text-success text-center">Published</span>
                                            @else
                                                <span class="tb-status text-danger text-center">Draft</span>
                                            @endif
                                        </td>
                                        <td class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li>
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickViewModal{{ $blog->id }}" >
                                                                        <em class="icon ni ni-eye"></em><span>Quick View</span>
                                                                    </a>
                                                                </li>
                                                                @if ($blog->status == 0)
                                                                    <li>
                                                                        <a href="{{ route('publish',['id' => $blog->id]) }}" onclick="event.preventDefault(); document.getElementById('publish').submit();">
                                                                            <em class="icon ni ni-shield"></em><span>Publish</span>
                                                                        </a>
                                                                        <form id="publish" action="{{ route('publish',['id' => $blog->id]) }}" method="POST">@csrf</form>
                                                                    </li>
                                                                @endif
                                                                @if($blog->status == 1)
                                                                    <li>
                                                                        <a href="{{ route('unpublish',['id' => $blog->id]) }}" onclick="event.preventDefault(); document.getElementById('unpublish').submit();">
                                                                            <em class="icon ni ni-shield-off"></em><span>Unpublish</span>
                                                                        </a>
                                                                        <form id="unpublish" action="{{ route('unpublish',['id' => $blog->id]) }}" method="POST">@csrf</form>
                                                                    </li>
                                                                @endif
                                                                </form>
                                                                <li class="divider"></li>
                                                                {{-- <li><a href="{{ route('admin.blog.edit',['id' => $blog->id]) }}/"><em class="icon ni ni-pen"></em><span>Edit blog</span></a></li> --}}
                                                                <li>
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $blog->id }}">
                                                                        <em class="icon ni ni-trash"></em><span>Delete blog</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="deleteModal{{ $blog->id }}" tabindex="-1" role="dialog" aria-labelledby="blogModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="blogModalCenterTitle">Delete {{ $blog->title }}?</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-center">
                                                    You Cannot revert this action
                                                </div>
                                                <div class="modal-footer">
                                                    {{-- <form class="d-inline-block" action="{{ route('admin.blog.delete', $blog->id) }}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-success">I'm Positive. DELETE IT!</button>
                                                    </form> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" tabindex="-1" id="quickViewModal{{ $blog->id }}">
                                        <div class="modal-dialog modal-xl" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">{{ $blog->title }}</h5>
                                                    <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                        <em class="icon ni ni-cross"></em>
                                                    </a>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="full-name">Blog Title</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" value="{{ $blog->title }}" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="email-address">Blog Slug</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" value="{{ $blog->slug }}" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mt-4">
                                                            <label class="form-label">Short Description</label>
                                                            <div class="form-control-wrap">
                                                                <textarea class="form-control" name="short_description" rows="3" disabled>{{ $blog->short_description }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label">Long Description</label>
                                                            <textarea name="long_description" class="summernote-basic form-control" disabled>@php echo html_entity_decode($blog->description); @endphp
                                                            </textarea>
                                                        </div>
                                                        <div class="form-group mt-3">
                                                            @if (!empty($blog->image))
                                                                <a class="d-block mx-auto mt-2" href="javascript:void(0)" data-toggle="tooltip" data-placement="top" data-original-title="Current Image">
                                                                    <img src="{{ asset('storage/blog/'.$blog->image) }}" alt="blog image" class="rounded w-25">
                                                                </a>
                                                            @else
                                                                <a class="d-block mx-auto" href="#" data-toggle="tooltip" data-placement="top" data-original-title="{{ __('content.not_yet_created') }}">
                                                                    <input type="text" class="text-muted" placeholder="No Image">
                                                                </a>
                                                            @endif
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