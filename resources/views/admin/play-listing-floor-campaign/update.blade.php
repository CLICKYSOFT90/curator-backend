@extends('admin.layouts.master')

@section('title', 'Ground Floor Ticket Prices')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Ground Floor Ticket Prices</h5>
                    <div class="card-body">
                        <form action="{{route('update.groud.floor.ticket.price.data', $playListingFloorCampaign->id)}}" method="POST">
                            @csrf
                            @include('admin.partials.alert')
                            <div class="row mt-3">
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Campaign Days</label>
                                    <input type="text" class="form-control" name="campaign_days" value="{{old('campaign_days', $playListingFloorCampaign->campaign_days)}}" placeholder="Enter campaign days"/>
                                </div>
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Coins Per Month</label>
                                    <input type="text" class="form-control" name="coins_per_month" value="{{old('coins_per_month', $playListingFloorCampaign->coins_per_month)}}" placeholder="Enter coins per month"/>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Price Per Month</label>
                                    <input type="text" class="form-control" name="price_per_month" value="{{old('price_per_month', $playListingFloorCampaign->price_per_month)}}" placeholder="Enter price per month"/>
                                </div>
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Coins Per Week</label>
                                    <input type="text" class="form-control" name="coins_per_week" value="{{old('coins_per_week', $playListingFloorCampaign->coins_per_week)}}" placeholder="Enter coins per week"/>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Price Per Week</label>
                                    <input type="text" class="form-control" name="price_per_week" value="{{old('price_per_week', $playListingFloorCampaign->price_per_week)}}" placeholder="Enter price per week"/>
                                </div>
                                <div class="col-sm-6">
                                    <div class="text-light small fw-semibold mb-3">Ground Floor Ticket Price Active</div>
                                    <label class="switch">
                                        <input type="checkbox" class="switch-input" name="is_active" id="is_active" {{ $playListingFloorCampaign->is_active == 1 ? 'checked' : '' }} />
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
