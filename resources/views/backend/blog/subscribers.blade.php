@extends('backend.layouts.base')

@section('body')
    <div class="nk-content-body">
        <div class="components-preview wide-md mx-auto">
            <div class="nk-block nk-block-lg">
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <h4 class="nk-block-title">All Blog Subscribers </h4>
                    </div>
                </div>
                <div class="card card-bordered card-preview">
                    <div class="card-inner">
                        <table class="datatable-init nowrap nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                            <thead>
                                <tr class="nk-tb-item nk-tb-head">
                                    <th class="nk-tb-col tb-col-mb"><span class="sub-text text-center">Subscriber's Email</span></th>                                                                        
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($subscribers as $subscriber)
                                    <tr class="nk-tb-item">
                                        <td class="nk-tb-col tb-col-mb">
                                            <span class="tb-amount text-center">{{ $subscriber->email }}</span>
                                        </td>                                                                              
                                    </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div><!-- .card-preview -->
            </div> <!-- nk-block -->
        </div><!-- .components-preview -->
    </div>
@endsection
