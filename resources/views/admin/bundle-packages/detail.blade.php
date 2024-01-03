@extends('admin.layouts.master')

@section('title', 'Bundle Package Detail')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
@endpush

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Bundle Package Detail</h5>
                    <div class="card-body">
                        <div class="row mt-3">
                            <div class="col-md-6 mb-6">
                                <label class="form-label">Package Name</label>
                                <input type="text" class="form-control" value="{{$bundlePackage->package_name}}" disabled/>
                            </div>
                            <div class="col-md-6 mb-6">
                                <label class="form-label">Package Price</label>
                                <input type="text" class="form-control" value="{{$bundlePackage->package_price}}" disabled/>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 mb-6">
                                <label class="form-label">Coins</label>
                                <input type="text" class="form-control" value="{{$bundlePackage->coins}}" disabled/>
                            </div>
                            <div class="col-sm-6">
                                <div class="text-light small fw-semibold mb-3">Package Active</div>
                                <label class="switch">
                                    <input type="checkbox" class="switch-input" id="is_active" {{ $bundlePackage->is_active == 1 ? 'checked' : '' }} disabled />
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/js/forms-selects.js') }}"></script>
@endpush
