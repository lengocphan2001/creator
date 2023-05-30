@php
    use \App\Models\Creator;    
@endphp
@extends('creator.layouts.master')
@section('admin_head')
    <title>{{ $data['title'] ?? '' }}</title>
    <meta content="{{ $data['title'] ?? '' }}" name="description" />
@endsection

@section('admin_content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item active" aria-current="page">Trang chủ</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <div class="page-title-right">
                                <h4 class="card-title">{{ __('admin.sidebar.dashboard') }}</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="text-muted font-weight-medium">
                                                            Tổng số dự án đang làm</p>
                                                        <h4 class="mb-0">{{ Auth::guard('creator')->user()->numberof_projects }}</h4>
                                                    </div>

                                                    <div
                                                        class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                                        <span class="avatar-title">
                                                            <i class="bx bx-copy-alt font-size-24"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="text-muted font-weight-medium">
                                                            Tổng số giờ</p>
                                                        <h4 class="mb-0">{{ Auth::guard('creator')->user()->total_time }}</h4>
                                                    </div>
                                                    <div
                                                        class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                                        <span class="avatar-title rounded-circle bg-primary">
                                                            <i class="bx bx-archive-in font-size-24"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                        <!-- end row -->

                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end page title -->

    </div>


    <!-- end modal -->
@endsection
