
@extends('layouts.template')

@section('page_title')
Sales Dashboard | DashLite Admin Template

@endsection


@section('content')


                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Lead Lists</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>You have total 2,595 Lead.</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li><a href="#" class="btn btn-white btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Export</span></a></li>
                                                        <li class="nk-block-tools-opt">
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-primary" data-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#" data-toggle="modal" data-target="#addLead"><span>Add Lead</span></a></li>
                                                                        <li><a href="#"><span>Import Lead</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- .toggle-wrap -->
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-bordered card-stretch">
                                        <div class="card-inner-group">
                                            <div class="card-inner position-relative card-tools-toggle">
                                                <div class="card-title-group">
                                                    <div class="card-tools">
                                                        <div class="form-inline flex-nowrap gx-3">
                                                            <div class="form-wrap w-150px">
                                                                <select class="form-select form-select-sm" data-search="off" data-placeholder="Bulk Action">
                                                                    <option value="">Bulk Action</option>
                                                                    <option value="email">Send Email</option>
                                                                    <option value="group">Change Group</option>
                                                                    <option value="suspend">Suspend lead</option>
                                                                    <option value="delete">Delete Lead</option>
                                                                </select>
                                                            </div>
                                                            <div class="btn-wrap">
                                                                <span class="d-none d-md-block"><button class="btn btn-dim btn-outline-light disabled">Apply</button></span>
                                                                <span class="d-md-none"><button class="btn btn-dim btn-outline-light btn-icon disabled"><em class="icon ni ni-arrow-right"></em></button></span>
                                                            </div>
                                                        </div><!-- .form-inline -->
                                                    </div><!-- .card-tools -->
                                                    <div class="card-tools mr-n1">
                                                        <ul class="btn-toolbar gx-1">
                                                            <li>
                                                                <a href="#" class="btn btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a>
                                                            </li><!-- li -->
                                                            <li class="btn-toolbar-sep"></li><!-- li -->
                                                            <li>
                                                                <div class="toggle-wrap">
                                                                    <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-menu-right"></em></a>
                                                                    <div class="toggle-content" data-content="cardTools">
                                                                        <ul class="btn-toolbar gx-1">
                                                                            <li class="toggle-close">
                                                                                <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-arrow-left"></em></a>
                                                                            </li><!-- li -->
                                                                            <li>
                                                                                <div class="dropdown">
                                                                                    <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-toggle="dropdown">
                                                                                        <div class="dot dot-primary"></div>
                                                                                        <em class="icon ni ni-filter-alt"></em>
                                                                                    </a>
                                                                                    <div class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-right">
                                                                                        <div class="dropdown-head">
                                                                                            <span class="sub-title dropdown-title">Filter Users</span>
                                                                                            <div class="dropdown">
                                                                                                <a href="#" class="btn btn-sm btn-icon">
                                                                                                    <em class="icon ni ni-more-h"></em>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="dropdown-body dropdown-body-rg">
                                                                                            <div class="row gx-6 gy-3">
                                                                                                <div class="col-6">
                                                                                                    <div class="form-group">
                                                                                                        <label class="overline-title overline-title-alt">Group</label>
                                                                                                        <select class="form-select form-select-sm">
                                                                                                            <option value="any">Any Group</option>
                                                                                                            <option value="hot">Hot</option>
                                                                                                            <option value="warm">Warm</option>
                                                                                                            <option value="cold">Cold</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-6">
                                                                                                    <div class="form-group">
                                                                                                        <label class="overline-title overline-title-alt">Status</label>
                                                                                                        <select class="form-select form-select-sm">
                                                                                                            <option value="any">Any Status</option>
                                                                                                            <option value="active">Active</option>
                                                                                                            <option value="pending">Pending</option>
                                                                                                            <option value="suspend">Suspend</option>
                                                                                                            <option value="deleted">Deleted</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-12">
                                                                                                    <div class="form-group">
                                                                                                        <button type="button" class="btn btn-secondary">Filter</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="dropdown-foot between">
                                                                                            <a class="clickable" href="#">Reset Filter</a>
                                                                                            <a href="#">Save Filter</a>
                                                                                        </div>
                                                                                    </div><!-- .filter-wg -->
                                                                                </div><!-- .dropdown -->
                                                                            </li><!-- li -->
                                                                            <li>
                                                                                <div class="dropdown">
                                                                                    <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-toggle="dropdown">
                                                                                        <em class="icon ni ni-setting"></em>
                                                                                    </a>
                                                                                    <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
                                                                                        <ul class="link-check">
                                                                                            <li><span>Show</span></li>
                                                                                            <li class="active"><a href="#">10</a></li>
                                                                                            <li><a href="#">20</a></li>
                                                                                            <li><a href="#">50</a></li>
                                                                                        </ul>
                                                                                        <ul class="link-check">
                                                                                            <li><span>Order</span></li>
                                                                                            <li class="active"><a href="#">DESC</a></li>
                                                                                            <li><a href="#">ASC</a></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div><!-- .dropdown -->
                                                                            </li><!-- li -->
                                                                        </ul><!-- .btn-toolbar -->
                                                                    </div><!-- .toggle-content -->
                                                                </div><!-- .toggle-wrap -->
                                                            </li><!-- li -->
                                                        </ul><!-- .btn-toolbar -->
                                                    </div><!-- .card-tools -->
                                                </div><!-- .card-title-group -->
                                                <div class="card-search search-wrap" data-search="search">
                                                    <div class="card-body">
                                                        <div class="search-content">
                                                            <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                                            <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by user or email">
                                                            <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                                        </div>
                                                    </div>
                                                </div><!-- .card-search -->
                                            </div><!-- .card-inner -->
                                            <div class="card-inner p-0">
                                                <div class="nk-tb-list nk-tb-ulist">
                                                    <div class="nk-tb-item nk-tb-head">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid">
                                                                <label class="custom-control-label" for="uid"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col"><span class="sub-text">Name</span></div>
                                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Group</span></div>
                                                        <div class="nk-tb-col tb-col-sm"><span class="sub-text">Email</span></div>
                                                        <div class="nk-tb-col tb-col-xxl"><span class="sub-text">Phone</span></div>
                                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Address</span></div>
                                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Open Deal</span></div>
                                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Close Deal</span></div>
                                                        <div class="nk-tb-col"><span class="sub-text">Status</span></div>
                                                        <div class="nk-tb-col nk-tb-col-tools text-right">
                                                            <div class="dropdown">
                                                                <a href="#" class="btn btn-xs btn-outline-light btn-icon dropdown-toggle" data-toggle="dropdown" data-offset="0,5"><em class="icon ni ni-plus"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
                                                                    <ul class="link-tidy sm no-bdr">
                                                                        <li>
                                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" checked="" id="ph">
                                                                                <label class="custom-control-label" for="ph">Phone</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="vri">
                                                                                <label class="custom-control-label" for="vri">Verified</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="st">
                                                                                <label class="custom-control-label" for="st">Status</label>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid1">
                                                                <label class="custom-control-label" for="uid1"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar xs bg-primary">
                                                                    <span>AB</span>
                                                                </div>
                                                                <div class="user-name">
                                                                    <span class="tb-lead">Abu Bin Ishtiyak</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="badge badge-outline-success">Customer</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <span>info@softnio.com</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span>+811 847-4958</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>Mirpur, Dhaka, Bangladesh.</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-dim ni ni-check-circle"></em> <span>2</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-success ni ni-check-circle"></em> <span>3</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-status text-success">Active</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-2">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#editLead"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#deleteLead"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid2">
                                                                <label class="custom-control-label" for="uid2"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar xs bg-warning">
                                                                    <span>PN</span>
                                                                </div>
                                                                <div class="user-name">
                                                                    <span class="tb-lead">Patrick Newman</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="badge badge-outline-grey">Cold Lead</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <span>patrick@example.com</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span>+942 238-4474</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>United States</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-dim ni ni-check-circle"></em> <span>1</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-success ni ni-check-circle"></em> <span>0</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-status text-warning">Pending</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-2">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#editLead"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#deleteLead"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid3">
                                                                <label class="custom-control-label" for="uid3"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar xs bg-success">
                                                                    <span>HK</span>
                                                                </div>
                                                                <div class="user-name">
                                                                    <span class="tb-lead">Howard Kennedy</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="badge badge-outline-danger">Hot Lead</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <span>howard@example.com</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span>+447 595-6725</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>England</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-dim ni ni-check-circle"></em> <span>1</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-success ni ni-check-circle"></em> <span>1</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-status text-success">Active</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-2">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#editLead"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#deleteLead"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid4">
                                                                <label class="custom-control-label" for="uid4"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar xs bg-purple">
                                                                    <span>AB</span>
                                                                </div>
                                                                <div class="user-name">
                                                                    <span class="tb-lead">Albert Brown</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="badge badge-outline-success">Customer</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <span>howard@example.com</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span>+408 595-6725</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>United States</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-dim ni ni-check-circle"></em> <span>1</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-success ni ni-check-circle"></em> <span>1</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-status text-success">Active</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-2">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#editLead"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#deleteLead"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid5">
                                                                <label class="custom-control-label" for="uid5"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar xs bg-danger">
                                                                    <span>BH</span>
                                                                </div>
                                                                <div class="user-name">
                                                                    <span class="tb-lead">Brian Hunter</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="badge badge-outline-primary">Warm Lead</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <span>brian@example.com</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span>+811 521-6695</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>Bangladesh</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-dim ni ni-check-circle"></em> <span>1</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-success ni ni-check-circle"></em> <span>1</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-status text-success">Active</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-2">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#editLead"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#deleteLead"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid6">
                                                                <label class="custom-control-label" for="uid6"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar xs bg-success">
                                                                    <span>HK</span>
                                                                </div>
                                                                <div class="user-name">
                                                                    <span class="tb-lead">Howard Kennedy</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="badge badge-outline-grey">Cold Lead</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <span>howard@example.com</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span>+447 595-6725</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>England</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-dim ni ni-check-circle"></em> <span>0</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-dim ni ni-check-circle"></em> <span>0</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-status text-danger">Canceld</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-2">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#editLead"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#deleteLead"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid7">
                                                                <label class="custom-control-label" for="uid7"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar xs bg-danger">
                                                                    <span>NP</span>
                                                                </div>
                                                                <div class="user-name">
                                                                    <span class="tb-lead">Newman Patrick</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="badge badge-outline-danger">Hot Lead</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <span>patrick@example.com</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span>+942 238-4474</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>United States</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-dim ni ni-check-circle"></em> <span>1</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-success ni ni-check-circle"></em> <span>0</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-status text-warning">Pending</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-2">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#editLead"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#deleteLead"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid8">
                                                                <label class="custom-control-label" for="uid8"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar xs bg-info">
                                                                    <span>FK</span>
                                                                </div>
                                                                <div class="user-name">
                                                                    <span class="tb-lead">Fuad Kennedy</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="badge badge-outline-grey">Cold Lead</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <span>fuad@example.com</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span>+447 595-6725</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>England</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-dim ni ni-check-circle"></em> <span>1</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-success ni ni-check-circle"></em> <span>1</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-status text-success">Active</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-2">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#editLead"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#deleteLead"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid9">
                                                                <label class="custom-control-label" for="uid9"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar xs bg-dark">
                                                                    <span>TB</span>
                                                                </div>
                                                                <div class="user-name">
                                                                    <span class="tb-lead">Tyler Baez</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="badge badge-outline-success">Customer</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <span>Tyler@example.com</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span>+447 696-6725</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>United States</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-dim ni ni-check-circle"></em> <span>1</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-success ni ni-check-circle"></em> <span>1</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-status text-success">Active</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-2">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#editLead"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#deleteLead"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid10">
                                                                <label class="custom-control-label" for="uid10"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar xs bg-warning">
                                                                    <span>JS</span>
                                                                </div>
                                                                <div class="user-name">
                                                                    <span class="tb-lead">Jakobe Snell</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="badge badge-outline-success">Customer</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <span>Jakobe@example.com</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span>+447 696-6725</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>England</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-dim ni ni-check-circle"></em> <span>1</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-success ni ni-check-circle"></em> <span>1</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-status text-danger">Canceld</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-2">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#editLead"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#deleteLead"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid11">
                                                                <label class="custom-control-label" for="uid11"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar xs bg-primary">
                                                                    <span>LH</span>
                                                                </div>
                                                                <div class="user-name">
                                                                    <span class="tb-lead">Lester Houser</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="badge badge-outline-primary">Warm Lead</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <span>Lester@example.com</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span>+447 196-6725</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>United States</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-dim ni ni-check-circle"></em> <span>2</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-success ni ni-check-circle"></em> <span>0</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-status text-success">Active</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-2">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#editLead"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#deleteLead"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                </div><!-- .nk-tb-list -->
                                            </div><!-- .card-inner -->
                                            <div class="card-inner">
                                                <ul class="pagination justify-content-center justify-content-md-start">
                                                    <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                                                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                </ul><!-- .pagination -->
                                            </div><!-- .card-inner -->
                                        </div><!-- .card-inner-group -->
                                    </div><!-- .card -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->







    <!-- @@ Lead Add Modal @e -->
    <div class="modal fade" role="dialog" id="addLead">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Add Lead</h5>
                    <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#infomation">Lead Detail's</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#address">Contact Detail's</a>
                        </li>
                    </ul><!-- .nav-tabs -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="infomation">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="lead-name">Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="lead-name" placeholder="e.g. Abu Bin Ishtiyak">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Type</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select form-control" data-placeholder="Select one">
                                                <option value="">Select one</option>
                                                <option value="lead_people">People</option>
                                                <option value="lead_organization">Organization</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Group</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select form-control" data-placeholder="Select one">
                                                <option value="">Select one</option>
                                                <option value="customer">Customer</option>
                                                <option value="cold_lead">Cold lead</option>
                                                <option value="hot_lead">Hot Lead</option>
                                                <option value="warm_lead">Warm Lead</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="open-deal">Open Deal</label>
                                        <input type="text" class="form-control" id="open-deal" placeholder="e.g. 5">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="close-deal">Close Deal</label>
                                        <input type="text" class="form-control" id="close-deal" placeholder="e.g. 3">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Status</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select form-control" data-placeholder="Select one">
                                                <option value="">Select One</option>
                                                <option value="active">Active</option>
                                                <option value="pending">Pending</option>
                                                <option value="cenceled">Cenceled</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <a href="#" data-dismiss="modal" class="btn btn-primary">Add lead</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .tab-pane -->
                        <div class="tab-pane" id="address">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="email">Email Address</label>
                                        <input type="email" class="form-control" id="email" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Phone Number</label>
                                        <input type="text" class="form-control" id="phone-no" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="lead-address">Address</label>
                                        <input type="text" class="form-control" id="lead-address" placeholder="Address">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <a href="#" data-dismiss="modal" class="btn btn-primary">Add Lead</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .tab-pane -->
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
    <!-- @@ Lead Edit Modal @e -->
    <div class="modal fade" role="dialog" id="editLead">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Edit Lead</h5>
                    <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#editInfomation">Lead Detail's</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#editAddress">Contact Detail's</a>
                        </li>
                    </ul><!-- .nav-tabs -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="editInfomation">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="edit-name">Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="edit-name" placeholder="Name" value="Abu Bin Ishtiyak">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Type</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select form-control">
                                                <option value="default_option">People</option>
                                                <option value="cold_lead">Organization</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Group</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select form-control">
                                                <option value="default_option">Customer</option>
                                                <option value="cold_lead">Cold lead</option>
                                                <option value="hot_lead">Hot Lead</option>
                                                <option value="warm_lead">Warm Lead</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="edit-open-deal">Open Deal</label>
                                        <input type="text" class="form-control" id="edit-open-deal" placeholder="Open Deal" value="2">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="edit-close-deal">Close Deal</label>
                                        <input type="text" class="form-control" id="edit-close-deal" placeholder="Close Deal" value="3">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Status</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select form-control">
                                                <option value="default_option">Active</option>
                                                <option value="pending">Pending</option>
                                                <option value="cenceled">Cenceled</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <a href="#" data-dismiss="modal" class="btn btn-primary">Update lead</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .tab-pane -->
                        <div class="tab-pane" id="editAddress">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="edit-email">Email Address</label>
                                        <input type="email" class="form-control" id="edit-email" placeholder="Email Address" value="info@softnio.com">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="edit-phone-no">Phone Number</label>
                                        <input type="text" class="form-control" id="edit-phone-no" placeholder="Phone Number" value="+811 847-4958">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="edit-lead-address">Address</label>
                                        <input type="text" class="form-control" id="lead-address" placeholder="Address" value="Mirpur, Dhaka, Bangladesh.">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <a href="#" data-dismiss="modal" class="btn btn-primary">Update Lead</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .tab-pane -->
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
    <!-- @@ organization lead Edit Modal @e -->
    <div class="modal fade" role="dialog" id="editOrgLead">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Edit organization lead info</h5>
                    <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#editOrgInfo">Lead Detail's</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#editOrgAddress">Contact Detail's</a>
                        </li>
                    </ul><!-- .nav-tabs -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="editOrgInfo">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="edit-name">Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="edit-name" placeholder="Name" value="Softnio">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Group</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select form-control">
                                                <option value="default_option">Customer</option>
                                                <option value="cold_lead">Cold lead</option>
                                                <option value="hot_lead">Hot Lead</option>
                                                <option value="warm_lead">Warm Lead</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="edit-open-deal">Open Deal</label>
                                        <input type="text" class="form-control" id="edit-open-deal" placeholder="Open Deal" value="2">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="edit-close-deal">Close Deal</label>
                                        <input type="text" class="form-control" id="edit-close-deal" placeholder="Close Deal" value="3">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="edit-close-deal">Branch</label>
                                        <input type="text" class="form-control" id="edit-close-deal" placeholder="Close Deal" value="Main Branch">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Status</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select form-control">
                                                <option value="default_option">Active</option>
                                                <option value="pending">Pending</option>
                                                <option value="cenceled">Cenceled</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <a href="#" data-dismiss="modal" class="btn btn-primary">Update Organigation</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .tab-pane -->
                        <div class="tab-pane" id="editOrgAddress">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="status">Designation</label>
                                        <div class="form-control-wrap">
                                            <select class="form-control form-select" id="status">
                                                <option value="default_option">HR</option>
                                                <option value="pending">Admin</option>
                                                <option value="cenceled">Manager</option>
                                                <option value="cenceled">Junior Executive</option>
                                                <option value="cenceled">Senior Executive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="edit-email">Email Address</label>
                                        <input type="email" class="form-control" id="edit-email" placeholder="Email Address" value="info@softnio.com">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="edit-phone-no">Phone Number</label>
                                        <input type="text" class="form-control" id="edit-phone-no" placeholder="Phone Number" value="+811 847-4958">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="edit-lead-address">Address</label>
                                        <input type="text" class="form-control" id="lead-address" placeholder="Address" value="Mirpur, Dhaka, Bangladesh.">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <a href="#" data-dismiss="modal" class="btn btn-primary">Add Lead</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .tab-pane -->
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
    <!-- @@ organization lead Delete Modal @e -->
    <div class="modal fade" id="deleteLead">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross"></em></a>
                <div class="modal-body modal-body-sm text-center">
                    <div class="nk-modal py-4">
                        <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-cross bg-danger"></em>
                        <h4 class="nk-modal-title">Are You Sure ?</h4>
                        <div class="nk-modal-text mt-n2">
                            <p class="text-soft">This Lead data will be delete permanently.</p>
                        </div>
                        <ul class="d-flex justify-content-center gx-4 mt-4">
                            <li>
                                <button data-dismiss="modal" id="deleteOrg" class="btn btn-success">Yes, Delete it</button>
                            </li>
                            <li>
                                <button data-dismiss="modal" data-toggle="modal" data-target="#editEventPopup" class="btn btn-danger btn-dim">Cancel</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .modal -->
   
@endsection