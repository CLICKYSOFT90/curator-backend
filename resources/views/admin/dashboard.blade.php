@extends('admin.layouts.master')

@section('title', 'Dashboard')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        @include('admin.partials.alert')
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 mb-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="avatar avatar-md mx-auto mb-3">
                                    <span class="avatar-initial rounded-circle bg-label-info">
                                        <i class="bx bx-user fs-4"></i>
                                    </span>
                                </div>
                                <span class="d-block mb-1 text-nowrap">Total Users</span>
                                <h2 class="mb-0">{{$data->total_users}}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 mb-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="avatar avatar-md mx-auto mb-3">
                                    <span class="avatar-initial rounded-circle bg-label-secondary">
                                        <i class="bx bx-user fs-4"></i>
                                    </span>
                                </div>
                                <span class="d-block mb-1 text-nowrap">Admins</span>
                                <h2 class="mb-0">{{$data->admins}}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 mb-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="avatar avatar-md mx-auto mb-3">
                                    <span class="avatar-initial rounded-circle bg-label-dark">
                                        <i class="bx bx-user fs-4"></i>
                                    </span>
                                </div>
                                <span class="d-block mb-1 text-nowrap">Labels</span>
                                <h2 class="mb-0">{{$data->labels}}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 mb-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="avatar avatar-md mx-auto mb-3">
                                    <span class="avatar-initial rounded-circle bg-label-dark">
                                        <i class="bx bx-user fs-4"></i>
                                    </span>
                                </div>
                                <span class="d-block mb-1 text-nowrap">Artists</span>
                                <h2 class="mb-0">{{$data->artists}}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 mb-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="avatar avatar-md mx-auto mb-3">
                                    <span class="avatar-initial rounded-circle bg-label-dark">
                                        <i class="bx bx-user fs-4"></i>
                                    </span>
                                </div>
                                <span class="d-block mb-1 text-nowrap">Curators</span>
                                <h2 class="mb-0">{{$data->curators}}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 mb-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="avatar avatar-md mx-auto mb-3">
                                    <span class="avatar-initial rounded-circle bg-label-dark">
                                        <i class="bx bx-user fs-4"></i>
                                    </span>
                                </div>
                                <span class="d-block mb-1 text-nowrap">Influencers</span>
                                <h2 class="mb-0">{{$data->influencers}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
