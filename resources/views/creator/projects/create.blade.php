@php
    use App\Models\Project;
@endphp
@extends('creator.layouts.master')
@section('admin_head')
    <title>{{ $data['title'] }}</title>
    <meta content="{{ $data['title'] }}" name="description" />
    <link rel="stylesheet" href="{{ asset('admin-assets\css\banner\banner.css') }}">
@endsection

@section('admin_style')
    @include('creator.includes.datatable.style')
@endsection

@section('admin_content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><span><i
                                            class="bx bxs-home-circle"></i> {{ __('admin.sidebar.dashboard') }}</span></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Đặt thời gian</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="bank-inner-details">
                    <div class="row d-flex justify-content-center">
                        <form action="{{ route('creator.assignments.set', ['assignment' => $data['assignment'] ]) }}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="option-blog d-flex justify-content-center">
                                <div class="type-blog">
                                    <div class="form-group mb-4">
                                        <label class="control-label col-sm-4" for="subject">
                                            <h6>Tên dự án <span class="required">*</span></h6>
                                        </label>
                                        <div class="title">
                                            <input type="text" class="form-control" id="name"
                                                placeholder="Tên" name="name" value="{{ Project::query()->where('id', $data['assignment']->project_id)->first()->name }}">
                                        </div>
                                        <label class="control-label col-sm-4" for="subject">
                                            <h6>Ngày làm việc <span class="required">*</span></h6>
                                        </label>
                                        <div class="title">
                                            <input type="date" class="form-control" id="name"
                                                name="current_date">
                                        </div>
                                        <label class="control-label col-sm-4" for="subject">
                                            <h6>Số giờ làm việc <span class="required">*</span></h6>
                                        </label>
                                        <div class="title">
                                            <input type="number" min="0" max="24" class="form-control" id="name"
                                                placeholder="Số giờ làm việc" name="time_to_work">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group ">
                                <div class="col-sm-offset-2 btn-submit">
                                    <button type="submit" class="btn btn-primary">Đặt số giờ làm việc</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->
    @include('admin.includes.upload')
@endsection

@section('admin_script')
    @include('admin.includes.datatable.script')
@endsection
