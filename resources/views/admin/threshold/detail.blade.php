@extends('admin.layouts.master')

@section('title', 'Influencer Threshold Chart Detail')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Influencer Threshold Chart Detail</h5>
                    <div class="card-body">
                        <div class="row mt-3">
                            <div class="col-md-6 mb-6">
                                <label class="form-label">Tier Name</label>
                                <input type="text" class="form-control" value="{{$threshold->tier}}" disabled/>
                            </div>
                            <div class="col-md-6 mb-6">
                                <label class="form-label">Price</label>
                                <input type="text" class="form-control" value="{{$threshold->price}}" disabled/>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 mb-6">
                                <label class="form-label">Coins</label>
                                <input type="text" class="form-control" value="{{$threshold->coins}}" disabled/>
                            </div>
                            <div class="col-md-6 mb-6">
                                <label class="form-label">TikTok Plays Minimum</label>
                                <input type="text" class="form-control" value="{{$threshold->tiktok_plays_min}}" disabled/>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 mb-6">
                                <label class="form-label">TikTok Plays Maximum</label>
                                <input type="text" class="form-control" value="{{$threshold->tiktok_plays_max}}" disabled/>
                            </div>
                            <div class="col-md-6 mb-6">
                                <label class="form-label">Story Views Minimum</label>
                                <input type="text" class="form-control" value="{{$threshold->story_views_min}}" disabled/>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 mb-6">
                                <label class="form-label">Story Views Maximum</label>
                                <input type="text" class="form-control" value="{{$threshold->story_views_max}}" disabled/>
                            </div>
                            <div class="col-md-6 mb-6">
                                <label class="form-label">Reels Views Minimum</label>
                                <input type="text" class="form-control" value="{{$threshold->reels_views_min}}" disabled/>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 mb-6">
                                <label class="form-label">Reels Views Maximum</label>
                                <input type="text" class="form-control" value="{{$threshold->reels_views_max}}" disabled/>
                            </div>
                            <div class="col-md-6 mb-6">
                                <label class="form-label">Instagram Posts Minimum</label>
                                <input type="text" class="form-control" value="{{$threshold->instagram_posts_min}}" disabled/>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 mb-6">
                                <label class="form-label">Instagram Posts Maximum</label>
                                <input type="text" class="form-control" value="{{$threshold->instagram_posts_max}}" disabled/>
                            </div>
                            <div class="col-sm-6">
                                <div class="text-light small fw-semibold mb-3">Threshold Active</div>
                                <label class="switch">
                                    <input type="checkbox" class="switch-input" id="is_active" {{ $threshold->is_active == 1 ? 'checked' : '' }} disabled />
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
                                <a href="{{route('manage.threshold')}}" class="btn btn-danger redirect-btn">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
