@extends('backend.layouts.base')

@section('body')
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
                                                                
                                                                {{-- @if($blog->status == 'draft')
                                                                    <li>
                                                                        <a href="#" onclick="event.preventDefault(); document.getElementById('publish').submit();">
                                                                            <em class="icon ni ni-shield"></em><span>Publish</span>
                                                                        </a>
                                                                        <form id="publish" action="{{ route('publish',['id' => $blog->id]) }}" method="POST">@csrf</form>
                                                                    </li>
                                                                @endif                                                               
                                                               
                                                                @if($blog->status == 'published')
                                                                    <li>
                                                                        <a href="{{ route('unpublish',['id' => $blog->id]) }}" onclick="event.preventDefault(); document.getElementById('unpublish').submit();">
                                                                            <em class="icon ni ni-shield-off"></em><span>Unpublish</span>
                                                                        </a>
                                                                        <form id="unpublish" action="{{ route('unpublish',['id' => $blog->id]) }}" method="POST">@csrf</form>
                                                                    </li>
                                                                @endif                                                                --}}
                                                                <li class="divider"></li>
                                                                <li><a href="{{ route('admin.blog.edit',['slug' => $blog->slug]) }}/"><em class="icon ni ni-pen"></em><span>Edit blog</span></a></li>                                                                
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
                                        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="blogModalCenterTitle">Delete: <span>{{ $blog->title }}</span>?</h5>
                                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-center">
                                                    NOTE: YOU CANNOT REVERT THIS ACTION
                                                </div>
                                                <div class="modal-footer">
                                                    <form class="d-inline-block" action="{{ route('admin.blog.delete', $blog->slug) }}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-danger">I'm Positive. DELETE IT!</button>
                                                    </form>
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