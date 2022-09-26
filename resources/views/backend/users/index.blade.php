@extends('backend.layouts.base')

@section('body')
    <div class="nk-content-body">
        <div class="components-preview wide-md mx-auto">
            <div class="nk-block nk-block-lg">
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <h4 class="nk-block-title">All Users
                            <a href="{{ route('admin.user.add') }}" class="btn btn-sm btn-primary float-end">Add New User</a>
                        </h4>
                    </div>
                </div>
                <div class="card card-bordered card-preview">
                    <div class="card-inner">
                        <table class="datatable-init nowrap nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                            <thead>
                                <tr class="nk-tb-item nk-tb-head">
                                    <th class="nk-tb-col tb-col-mb"><span class="sub-text text-center">User Image</span></th>
                                    <th class="nk-tb-col tb-col-mb"><span class="sub-text text-center">User Name</span></th>                                    
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text text-center">Verified</span></th>                                   
                                    <th class="nk-tb-col nk-tb-col-tools text-end">Actions </th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $user)
                                    <tr class="nk-tb-item">
                                        <td class="nk-tb-col text-center">
                                            @if ($user->avatar != null)
                                                <span>
                                                    <img src="{{ asset('storage/avatar') }}/{{ $user->avatar }}" alt="{{ $user->name }}" width="120px" height="auto">
                                                </span>
                                            @else
                                                <span>
                                                    <img src="{{ asset('assets/backend/avatar.png') }}" alt="{{ $user->name }}" width="100px" height="auto">
                                                </span>
                                            @endif
                                            
                                        </td>
                                        <td class="nk-tb-col tb-col-mb">
                                            <span class="tb-amount text-center">{{ $user->name }}</span>
                                        </td>                                        
                                        <td class="nk-tb-col tb-col-lg">
                                            <ul class="list-status text-center">
                                                <li><em class="icon text-success ni ni-check-circle"></em></li>
                                            </ul>
                                        </td>                                        
                                        <td class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li>
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickViewModal{{ $user->id }}" >
                                                                        <em class="icon ni ni-eye"></em><span>Quick View</span>
                                                                    </a>
                                                                </li> 
                                                                <li class="divider"></li>
                                                                <li><a href="jacvascript:void(0);"><em class="icon ni ni-pen"></em><span>Edit user</span></a></li>
                                                                <li>
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $user->id }}">
                                                                        <em class="icon ni ni-trash"></em><span>Delete user</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="deleteModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="userModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="userModalCenterTitle">Delete {{ $user->name }}?</h5>
                                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-center">
                                                    <strong class="text-danger">You Cannot revert this action</strong>
                                                </div>
                                                <div class="modal-footer">
                                                    <form class="d-inline-block" action="{{ route('admin.user.delete', $user->id) }}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-danger">I'm Positive. DELETE IT!</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" tabindex="-1" id="quickViewModal{{ $user->id }}">
                                        <div class="modal-dialog modal-xl" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">{{ $user->name }}</h5>
                                                    <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                        <em class="icon ni ni-cross"></em>
                                                    </a>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row gy-4">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="full-name">user Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" value="{{ $user->name }}" disabled>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="full-name">user Email</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" value="{{ $user->email }}" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @if ($user->social_facebook != null)
                                                            <div class="col-lg-4 col-md-4">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="social_facebook" class="form-control form-control-outlined"
                                                                            id="outlined-default" value="{{ $user->social_facebook }}">
                                                                        <label class="form-label-outlined" for="outlined-default">Facebook Social Links</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @else
                                                            <div class="col-lg-4 col-md-4">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="social_facebook" class="form-control form-control-outlined"
                                                                            id="outlined-default" value="Links not yet set">
                                                                        <label class="form-label-outlined" for="outlined-default">Facebook Social Links</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                        @endif

                                                        @if ($user->social_twitter != null)
                                                            <div class="col-lg-4 col-md-4">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="social_twitter" class="form-control form-control-outlined"
                                                                            id="outlined-default" value="{{ $user->social_twitter }}">
                                                                        <label class="form-label-outlined" for="outlined-default">Twitter Social Links</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @else
                                                            <div class="col-lg-4 col-md-4">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="social_twitter" class="form-control form-control-outlined"
                                                                            id="outlined-default" value="Links not yet set">
                                                                        <label class="form-label-outlined" for="outlined-default">Twitter Social Links</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                        @endif

                                                        @if ($user->social_instagram != null)
                                                            <div class="col-lg-4 col-md-4">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="social_instagram" class="form-control form-control-outlined"
                                                                            id="outlined-default" value="{{ $user->social_instagram }}">
                                                                        <label class="form-label-outlined" for="outlined-default">Instagram Social Links</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @else
                                                            <div class="col-lg-4 col-md-4">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="social_instagram" class="form-control form-control-outlined"
                                                                            id="outlined-default" value="Links not yet set">
                                                                        <label class="form-label-outlined" for="outlined-default">Instagram Social Links</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                        @endif
                                                        
                                                        @if ($user->about != null)
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <textarea class="form-control form-control-outlined" id="outlined-default">{{ $user->about }}</textarea>
                                                                        <label class="form-label-outlined" for="outlined-default">About User</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @else
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <textarea class="form-control form-control-outlined" id="outlined-default">About user data has not been input</textarea>
                                                                        <label class="form-label-outlined" for="outlined-default">About User</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
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
