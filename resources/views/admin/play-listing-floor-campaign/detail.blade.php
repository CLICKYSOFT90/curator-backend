@extends('admin.layouts.master')

@section('title', 'Ground Floor Ticket Prices Detail')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Ground Floor Ticket Prices Detail</h5>
                    <div class="card-body">
                        
                        <div class="row mt-3">
                            <div class="col-md-6 mb-6">
                                <label class="form-label">Campaign Days</label>
                                <input type="text" class="form-control" value="{{$playListingFloorCampaign->campaign_days}}" disabled/>
                            </div>
                            <div class="col-md-6 mb-6">
                                <label class="form-label">Coins Per Month</label>
                                <input type="text" class="form-control" value="{{$playListingFloorCampaign->coins_per_month}}" disabled/>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 mb-6">
                                <label class="form-label">Price Per Month</label>
                                <input type="text" class="form-control" value="{{$playListingFloorCampaign->price_per_month}}" disabled/>
                            </div>
                            <div class="col-md-6 mb-6">
                                <label class="form-label">Coins Per Week</label>
                                <input type="text" class="form-control" value="{{$playListingFloorCampaign->coins_per_week}}" disabled/>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6 mb-6">
                                <label class="form-label">Price Per Week</label>
                                <input type="text" class="form-control" value="{{$playListingFloorCampaign->price_per_week}}" disabled/>
                            </div>
                            <div class="col-sm-6">
                                <div class="text-light small fw-semibold mb-3">Ground Floor Ticket Price Active</div>
                                <label class="switch">
                                    <input type="checkbox" class="switch-input" id="is_active" {{ $playListingFloorCampaign->is_active == 1 ? 'checked' : '' }} disabled />
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
                                <a href="{{route('manage.groud.floor.ticket.price')}}" class="btn btn-danger redirect-btn">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
