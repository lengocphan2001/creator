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
                            <li class="breadcrumb-item active" aria-current="page">Đối tác</li>
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
                                <h4 class="card-title">Đối tác</h4>
                            </div>
                            <a class="btn btn-primary" href="{{ route('admin.projects.create') }}">
                                <i class="mdi mdi-plus me-2"></i> {{ __('admin.action.create') }}
                            </a>
                        </div>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th class="text-center align-middle">Tên dự án</th>
                                    <th class="text-center align-middle">Chi phí đầu tư</th>
                                    <th class="text-center align-middle">Đối tác</th>
                                    <th class="text-center align-middle">Mô tả</th>
                                    <th class="text-center align-middle">{{ __('admin.label.action') }}</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($data['projects'] as $result)
                                    <tr>
                                        <td class="align-middle">
                                            <a href="{{ $result['name'] }}">
                                                {{ $result['name'] }}
                                            </a>
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ $result['cost'] }}">
                                                {{ $result['cost'] }}
                                            </a>
                                        </td>
                                       <td class="align-middle">
                                            <a href="{{ $result['partner'] }}">
                                                {{ $result['partner'] }}
                                            </a>
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ $result['description'] }}">
                                                {{ $result['description'] }}
                                            </a>
                                        </td>
                                        <td class="text-center align-middle">
                                            <a href="{{ route('admin.projects.assignment', ['project' => $result['id']]) }}"
                                                class="btn btn-success" style="margin-right: 10px;"><i
                                                    class="bx bx-pencil"></i></a>
                                            <a href="{{ route('admin.projects.edit', ['project' => $result['id']]) }}"
                                                class="btn btn-primary mr-3" style="margin-right: 10px;"><i
                                                    class="bx bx-pencil"></i></a>
                                            <a href="javascript:void(0)" data-id="{{ $result['id'] }}" data-toggle="modal"
                                                data-message="{{ __('admin.label.confirm_delete') }}"
                                                data-url="{{ route('admin.projects.destroy', ['project' => $result['id']]) }}"
                                                class="btn btn-danger delete" data-bs-toggle="modal"
                                                data-bs-target=".deleteModal">
                                                <i class="bx bx-trash"></i>
                                            </a>
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
