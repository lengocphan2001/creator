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
                            <li class="breadcrumb-item active" aria-current="page">Nhà sáng tạo</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <div class="page-title-right">
                                <h4 class="card-title">Nhà sáng tạo</h4>
                            </div>
                        </div>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th class="text-center align-middle">Tên</th>
                                    <th class="text-center align-middle">Email</th>
                                    <th class="text-center align-middle">Tổng số giờ làm</th>
                                    <th class="text-center align-middle">Tổng số dự án</th>
                                    <th class="text-center align-middle">{{ __('admin.label.action') }}</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($data['creators'] as $result)
                                    <tr>
                                        <td class="align-middle">
                                            <a href="{{ $result['name'] }}">
                                                {{ $result['name'] }}
                                            </a>
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ $result['email'] }}">
                                                {{ $result['email'] }}
                                            </a>
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ $result['total_time'] }}">
                                                {{ $result['total_time'] }}
                                            </a>
                                        </td>
                                         <td class="align-middle">
                                            <a href="{{ $result['numberof_projects'] }}">
                                                {{ $result['numberof_projects'] }}
                                            </a>
                                        </td>
                                        <td class="text-center align-middle">
                                            <a href="{{ route('admin.creators.edit', ['creator' => $result['id']]) }}"
                                                class="btn btn-primary mr-3" style="margin-right: 10px;"><i
                                                    class="bx bx-pencil"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
    </div>
@endsection

@section('admin_script')
    @include('admin.includes.datatable.script')
@endsection
