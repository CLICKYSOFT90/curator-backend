@extends('admin.layouts.master')

@section('title', 'Update Influencer Threshold Chart')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Update Influencer Threshold Chart</h5>
                    <div class="card-body">
                        <form action="{{route('update.threshold.data', $threshold->id)}}" method="POST">
                            @csrf
                            @include('admin.partials.alert')
                            <div class="row mt-3">
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Tier Name</label>
                                    <input type="text" class="form-control" name="tier" value="{{old('tier', $threshold->tier)}}" placeholder="Enter tier"/>
                                </div>
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Price</label>
                                    <input type="text" class="form-control" name="price" value="{{old('price', $threshold->price)}}" placeholder="Enter price"/>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Coins</label>
                                    <input type="text" class="form-control" name="coins" value="{{old('coins', $threshold->coins)}}" placeholder="Enter coins"/>
                                </div>
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">TikTok Plays Minimum</label>
                                    <input type="text" class="form-control" name="tiktok_plays_min" value="{{old('tiktok_plays_min', $threshold->tiktok_plays_min)}}" placeholder="Enter tiktok plays min"/>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">TikTok Plays Maximum</label>
                                    <input type="text" class="form-control" name="tiktok_plays_max" value="{{old('tiktok_plays_max', $threshold->tiktok_plays_max)}}" placeholder="Enter tiktok plays max"/>
                                </div>
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Story Views Minimum</label>
                                    <input type="text" class="form-control" name="story_views_min" value="{{old('story_views_min', $threshold->story_views_min)}}" placeholder="Enter story views min"/>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Story Views Maximum</label>
                                    <input type="text" class="form-control" name="story_views_max" value="{{old('story_views_max', $threshold->story_views_max)}}" placeholder="Enter story views max"/>
                                </div>
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Reels Views Minimum</label>
                                    <input type="text" class="form-control" name="reels_views_min" value="{{old('reels_views_min', $threshold->reels_views_min)}}" placeholder="Enter reels views min"/>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Reels Views Maximum</label>
                                    <input type="text" class="form-control" name="reels_views_max" value="{{old('reels_views_max', $threshold->reels_views_max)}}" placeholder="Enter reels views max"/>
                                </div>
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Instagram Posts Minimum</label>
                                    <input type="text" class="form-control" name="instagram_posts_min" value="{{old('instagram_posts_min', $threshold->instagram_posts_min)}}" placeholder="Enter instagram posts min"/>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Instagram Posts Maximum</label>
                                    <input type="text" class="form-control" name="instagram_posts_max" value="{{old('instagram_posts_max', $threshold->instagram_posts_max)}}" placeholder="Enter instagram posts max"/>
                                </div>
                                <div class="col-sm-6">
                                    <div class="text-light small fw-semibold mb-3">Threshold Active</div>
                                    <label class="switch">
                                        <input type="checkbox" class="switch-input" name="is_active" id="is_active" {{ $threshold->is_active == 1 ? 'checked' : '' }} />
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
