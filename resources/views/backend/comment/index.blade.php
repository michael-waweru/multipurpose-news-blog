@extends('backend.layouts.base')

@section('body')
    <div class="nk-content-body">
        <div class="components-preview wide-md mx-auto">
            <div class="nk-block nk-block-lg">
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <h4 class="nk-block-title">All Comments</h4>
                    </div>
                </div>
                <div class="card card-bordered card-preview">
                    <div class="card-inner">
                        <table class="datatable-init nowrap nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                            <thead>
                                <tr class="nk-tb-item nk-tb-head">
                                    <th class="nk-tb-col tb-col-mb"><span class="sub-text text-center">Blog Title</span></th>
                                    <th class="nk-tb-col tb-col-mb"><span class="sub-text text-center">Commentor's Name</span></th>
                                    <th class="nk-tb-col tb-col-mb"><span class="sub-text text-center">Commentor's Email</span></th>
                                    <th class="nk-tb-col tb-col-md"><span class="sub-text text-center">Approval Status</span></th>
                                    <th class="nk-tb-col nk-tb-col-tools text-end">Actions </th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($comments as $comment)
                                    <tr class="nk-tb-item">
                                        <td class="nk-tb-col tb-col-mb">
                                            <span class="tb-amount text-center">{{ Str::limit($comment->blog->title, 40) }}</span>
                                        </td>
                                        <td class="nk-tb-col tb-col-mb">
                                            <span class="tb-amount text-center">{{ $comment->name }}</span>
                                        </td>
                                        <td class="nk-tb-col tb-col-mb">
                                            <span class="tb-amount text-center">{{ $comment->email }}</span>
                                        </td>
                                        <td class="nk-tb-col tb-col-md text-center">
                                            @if ($comment->approval == 0)
                                                <span class="tb-status text-danger text-center">Pending Approval</span>  <br>                                             
                                                    <button class="btn btn-sm btm-dim btn-primary" data-bs-toggle="modal" data-bs-target="#approveModal{{ $comment->id }}">
                                                        <em class="icon ni ni-check-thick"></em>
                                                        <span>Approve</span>
                                                    </button>                                                                        
                                                </form>
                                            @else
                                                <span class="tb-status text-success text-center">Approved</span>
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
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickViewModal{{ $comment->id }}">
                                                                        <em class="icon ni ni-eye"></em><span>Quick View</span>
                                                                    </a>
                                                                </li>
                                                                <li class="divider"></li>                                                                                                                              
                                                                <li>
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $comment->id }}">
                                                                        <em class="icon ni ni-trash"></em><span>Delete Comment</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="deleteModal{{ $comment->id }}" tabindex="-1" role="dialog" aria-labelledby="serviceModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="serviceModalCenterTitle">Delete {{ $comment->name }}'s comment?</h5>
                                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-center">
                                                    <p class="text-danger"><strong>Bear in mind that you Cannot revert this action</strong></p>
                                                </div>
                                                <div class="modal-footer">
                                                    {{-- <form class="d-inline-block" action="{{ route('admin.comment.delete', $comment->id) }}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-danger">I'm Positive. DELETE IT!</button>
                                                    </form> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" tabindex="-1" id="quickViewModal{{ $comment->id }}">
                                        <div class="modal-dialog modal-xl" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">{{ $comment->name }}'s Comment</h5>
                                                    <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                        <em class="icon ni ni-cross"></em>
                                                    </a>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="full-name">Commentor's Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" value="{{ $comment->name }}" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="email-address">Commentor's Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" value="{{ $comment->email }}" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label">Commentor's Comment</label>
                                                            <div class="form-control-wrap">
                                                                <textarea class="form-control" name="short_description" rows="3" disabled>{{ $comment->comment }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal-footer">                                                                                                    
                                                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $comment->id }}">Delete Comment</button>                                                   
                                                </div>

                                                <div class="modal-footer bg-light">
                                                    <span class="sub-text">{{ config('app.name', 'NutriLab & Consulting Limited') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" tabindex="-1" id="approveModal{{ $comment->id }}">
                                        <div class="modal-dialog modal-xl" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">{{ $comment->name }}'s Comment</h5>
                                                    <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                        <em class="icon ni ni-cross"></em>
                                                    </a>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="full-name">Commentor's Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" value="{{ $comment->name }}" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="email-address">Commentor's Email</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" value="{{ $comment->email }}" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label">Commentor's Comment</label>
                                                            <div class="form-control-wrap">
                                                                <textarea class="form-control" name="short_description" rows="3" disabled>{{ $comment->comment }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary float-left" data-bs-dismiss="modal">Close</button>
                                                    <form id="update-comment" action="{{ route('admin.comment.update',$comment->id) }}" method="POST">
                                                        @method('PUT')
                                                        @csrf
                                                        <button type="submit" class="btn btm-dim btn-primary">
                                                            <em class="icon ni ni-check-thick"></em>
                                                            <span>Approve</span>
                                                        </button>
                                                    </form>
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