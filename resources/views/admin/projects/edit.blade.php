@extends('admin.layouts.master')
@section('admin_head')
    <title>{{ $data['title'] }}</title>
    <meta content="{{ $data['title'] }}" name="description" />
    <link rel="stylesheet" href="{{ asset('admin-assets\css\banner\banner.css') }}">
@endsection

@section('admin_style')
    @include('admin.includes.datatable.style')
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
                            <li class="breadcrumb-item active" aria-current="page">Dự án</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="bank-inner-details">
                    <div class="row d-flex justify-content-center">
                        <form action="{{ route('admin.projects.update', $data['project']->id) }}"
                            enctype="multipart/form-data" method="post">
                            @csrf
                            @method('PUT')
                            <div class="option-blog">
                                <div class="type-blog">
                                    <div class="form-group mb-4">
                                        <label class="control-label col-sm-4" for="subject">
                                            <h6>Tê dự án <span class="required">*</span></h6>
                                        </label>
                                        <div class="title">
                                            <input type="text" class="form-control" id="name"
                                                placeholder="Họ tên" name="name" value="{{ $data['project']->name }}">
                                        </div>
                                        @if ($errors->has('name'))
                                            <div class='text-danger mt-2'>
                                                * {{ $errors->first('name') }}
                                            </div>
                                        @endif
                                        <label class="control-label col-sm-4" for="subject">
                                            <h6>Chi phí đầu tư<span class="required">*</span></h6>
                                        </label>
                                        <div class="title">
                                            <input type="text" class="form-control" id="name"
                                                placeholder="Chi phí đầu tư" name="cost" value="{{ $data['project']->cost }}">
                                        </div>
                                        @if ($errors->has('cost'))
                                            <div class='text-danger mt-2'>
                                                * {{ $errors->first('cost') }}
                                            </div>
                                        @endif
                                        <label class="control-label col-sm-4" for="subject">
                                            <h6>Đối tác <span class="required">*</span></h6>
                                        </label>
                                        <div class="title">
                                            <input type="text" class="form-control" id="name"
                                                placeholder="Đối tác" name="partner" value="{{ $data['project']->partner }}">
                                        </div>
                                        @if ($errors->has('partner'))
                                            <div class='text-danger mt-2'>
                                                * {{ $errors->first('partner') }}
                                            </div>
                                        @endif
                                        <label class="control-label col-sm-4" for="subject">
                                            <h6>Mô tả <span class="required">*</span></h6>
                                        </label>
                                        <div class="title">
                                            <input type="text" class="form-control" id="name"
                                                placeholder="Họ tên" name="description" value="{{ $data['project']->description }}">
                                        </div>
                                        @if ($errors->has('password'))
                                            <div class='text-danger mt-2'>
                                                * {{ $errors->first('password') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <div class="form-group ">
                                <div class="col-sm-offset-2 btn-submit">
                                    <button type="submit" class="btn btn-primary">Cập nhật</button>
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
