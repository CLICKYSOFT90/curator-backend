@extends('admin.layouts.master')

@section('title', 'Update Bundle Packages')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Update Bundle Packages</h5>
                    <div class="card-body">
                        <form action="{{route('update.bundle.packages.data', $bundlePackage->id)}}" method="POST">
                            @csrf
                            @include('admin.partials.alert')
                            <div class="row mt-3">
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Package Name</label>
                                    <input type="text" class="form-control" name="package_name" value="{{old('package_name', $bundlePackage->package_name)}}" placeholder="Enter Package Name"/>
                                </div>
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Package Price</label>
                                    <input type="text" class="form-control" name="package_price" value="{{old('package_price', $bundlePackage->package_price)}}" placeholder="Enter Package Price"/>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Coins</label>
                                    <input type="text" class="form-control" name="coins" value="{{old('coins', $bundlePackage->coins)}}" placeholder="Enter Coins"/>
                                </div>
                                <div class="col-sm-6">
                                    <div class="text-light small fw-semibold mb-3">Package Active</div>
                                    <label class="switch">
                                        <input type="checkbox" class="switch-input" name="is_active" id="is_active" {{ $bundlePackage->is_active == 1 ? 'checked' : '' }} />
                                        <span class="switch-toggle-slider">
                                            <span class="switch-on">
                                                <i class="bx bx-check"></i>
                                            </span>
                                            <span class="switch-off">
                                                <i class="bx bx-x"></i>
                                            </span>
                                        </span>
                                        <span class="switch-label">Active</span>
                                    </label>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <a href="{{route('manage.bundle.packages')}}" class="btn btn-danger redirect-btn">Back</a>
                                    <button type="submit" class="btn btn-primary" onclick="showLoader()">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
