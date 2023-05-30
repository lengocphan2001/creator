@extends('creator.layouts.index')
@section('admin_main')
    <body>
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-soft-primary">
                                @yield('admin_auth_top')
                            </div>
                            <div class="card-body pt-0">
                                <div>
                                    <a href="{{ route('creator.dashboard') }}">
                                        <div class="avatar-md profile-user-wid mb-4">
                                                <span class="avatar-title rounded-circle bg-light">
                                                    <img src="admin-assets\images\logo.jpg" alt="" class="rounded-circle" height="24">
                                                </span>
                                        </div>
                                    </a>
                                </div>
                                @yield('admin_auth_main')

                            </div>
                        </div>
                        <div class="mt-5 text-center">

                            <div>
                                <p>© {{ date('Y') }} {{ config('app.name') }}. Crafted with <i class="mdi mdi-heart text-danger"></i> by {{ config('app.name') }}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        @include('creator.includes.script')
    </body>
@endsection

