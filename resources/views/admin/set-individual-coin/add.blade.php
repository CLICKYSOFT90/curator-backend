@extends('admin.layouts.master')

@section('title', 'Add Individual Coin')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
@endpush

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Add Individual Coin</h5>
                    <div class="card-body">
                        <form action="{{ route('add.individual.coin.data') }}" method="POST">
                            @csrf
                            @include('admin.partials.alert')
                            <div class="row mt-3">
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Coins</label>
                                    <input type="text" class="form-control" name="coins" value="{{old('coins')}}" placeholder="Enter coins"/>
                                </div>
                                <div class="col-md-6 mb-6">
                                    <label class="form-label" for="elite">Elite</label>
                                    <select class="select2 form-select form-select-lg" name="elite" id="elite" data-allow-clear="true">
                                        <option value="">Select Elite</option>
                                        <option value="1" {{old('elite') == 1 ? 'selected' : ''}}>Yes</option>
                                        <option value="0" {{old('elite') != '' && old('elite') == 0 ? 'selected' : ''}}>No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-6">
                                    <div class="text-light small fw-semibold mb-3">Individual Coin Active</div>
                                    <label class="switch">
                                        <input type="checkbox" class="switch-input" name="is_active" id="is_active" @if (old('is_active') == 'on') checked @endif checked />
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
                                <div class="col-md-6 mb-6 eliteUserType {{old('elite') == 1 ? '' : 'visually-hidden'}}">
                                    <label class="form-label" for="user_type">User</label>
                                    <select class="select2 form-select form-select-lg" name="user_type" id="user_type" data-allow-clear="true">
                                        <option value="">Select User Type</option>
                                        @foreach ($getUserTypes as $key => $getUserType)
                                            <option value="{{ $key }}" {{ old('user_type') == $key ? 'selected' : '' }}>{{ $getUserType }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <a href="{{route('manage.individual.coin')}}" class="btn btn-danger redirect-btn">Back</a>
                                    <button type="submit" class="btn btn-primary" onclick="showLoader()">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/js/forms-selects.js') }}"></script>
    <script>
        $(function() {
            $(document).on('change', '#elite', function() {
                if($(this).val() == 1) {
                    $('.eliteUserType').removeClass('visually-hidden');
                } else {
                    $('.eliteUserType').addClass('visually-hidden');
                }
            });
        });
    </script>
@endpush
