<!-- extend the default layout  -->
@extends('layout')

@section('title','REGISTER DRIVER LIST')

@section('top_panel')
    @parent
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')
    <!-- content @s -->

    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="components-preview wide-md mx-auto">

                <div class="nk-block nk-block-lg">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h4 class="nk-block-title">REGISTER DRIVER LIST</h4>

                        </div>
                    </div>
                    <div class="card card-preview">
                        <div class="card-inner">
                            <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                <thead>
                                <tr class="nk-tb-item nk-tb-head">
                                    <th class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="uid">
                                            <label class="custom-control-label" for="uid"></label>
                                        </div>
                                    </th>
                                    <th class="nk-tb-col"><span class="sub-text">User</span></th>
                                    <th class="nk-tb-col tb-col-mb"><span class="sub-text">Business Name</span></th>
                                    <th class="nk-tb-col tb-col-md"><span class="sub-text">Phone</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Address</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Last Login</span></th>
                                    <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                    <th class="nk-tb-col nk-tb-col-tools text-right">
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="nk-tb-item">
                                    <td class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="uid1">
                                            <label class="custom-control-label" for="uid1"></label>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col">
                                        <div class="user-card">
                                            <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                <span>AB</span>
                                            </div>
                                            <div class="user-info">
                                                <span class="tb-lead">Abu Bin Ishtiyak <span class="dot dot-success d-md-none ml-1"></span></span>
                                                <span>info@softnio.com</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col tb-col-mb" >
                                        <span class="tb-amount">New Test Business</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-md">
                                        <span>+811 847-4958</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-lg">
                                        <span>New Delhi</span>
                                    </td>

                                    <td class="nk-tb-col tb-col-lg">
                                        <span>05 Oct 2019</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-md">
                                        <span class="tb-status text-success">Active</span>
                                    </td>
                                    <td class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1">
                                            <li class="nk-tb-action-hidden">
                                                <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Wallet">
                                                    <em class="icon ni ni-wallet-fill"></em>
                                                </a>
                                            </li>
                                            <li class="nk-tb-action-hidden">
                                                <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Send Email">
                                                    <em class="icon ni ni-mail-fill"></em>
                                                </a>
                                            </li>
                                            <li class="nk-tb-action-hidden">
                                                <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Suspend">
                                                    <em class="icon ni ni-user-cross-fill"></em>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-repeat"></em><span>Transaction</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-shield-off"></em><span>Reset 2FA</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend User</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr><!-- .nk-tb-item  -->
                                </tbody>
                            </table>
                        </div>
                    </div><!-- .card-preview -->
                </div> <!-- nk-block -->
            </div><!-- .components-preview -->
        </div>
    </div>
    </div>
    </div>
    <!-- content @e -->
@endsection

@section('footer')
    @parent
@endsection
