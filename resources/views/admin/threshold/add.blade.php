@extends('admin.layouts.master')

@section('title', 'Add Influencer Threshold Chart')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Add Influencer Threshold Chart</h5>
                    <div class="card-body">
                        <form action="{{ route('add.threshold.data') }}" method="POST" id="addThreshold">
                            @csrf
                            @include('admin.partials.alert')
                            <div class="row mt-3">
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Tier Name</label>
                                    <input type="text" class="form-control" name="tier" id="tier" value="{{old('tier')}}" placeholder="Enter tier"/>
                                    <small id="tierErrorMsg" class="text-danger"></small>
                                </div>
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Price</label>
                                    <input type="text" class="form-control" name="price" id="price" value="{{old('price')}}" placeholder="Enter price"/>
                                    <small id="priceErrorMsg" class="text-danger"></small>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Coins</label>
                                    <input type="text" class="form-control" name="coins" id="coins" value="{{old('coins')}}" placeholder="Enter coins"/>
                                    <small id="coinsErrorMsg" class="text-danger"></small>
                                </div>
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">TikTok Plays Minimum</label>
                                    <input type="text" class="form-control" name="tiktok_plays_min" id="tiktok_plays_min" value="{{old('tiktok_plays_min')}}" placeholder="Enter tiktok plays min"/>
                                    <small id="tiktokPlaysMinErrorMsg" class="text-danger"></small>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">TikTok Plays Maximum</label>
                                    <input type="text" class="form-control" name="tiktok_plays_max" id="tiktok_plays_max" value="{{old('tiktok_plays_max')}}" placeholder="Enter tiktok plays max"/>
                                    <small id="tiktokPlaysMaxErrorMsg" class="text-danger"></small>
                                </div>
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Story Views Minimum</label>
                                    <input type="text" class="form-control" name="story_views_min" id="story_views_min" value="{{old('story_views_min')}}" placeholder="Enter story views min"/>
                                    <small id="storyViewsMinErrorMsg" class="text-danger"></small>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Story Views Maximum</label>
                                    <input type="text" class="form-control" name="story_views_max" id="story_views_max" value="{{old('story_views_max')}}" placeholder="Enter story views max"/>
                                    <small id="storyViewsMaxErrorMsg" class="text-danger"></small>
                                </div>
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Reels Views Minimum</label>
                                    <input type="text" class="form-control" name="reels_views_min" id="reels_views_min" value="{{old('reels_views_min')}}" placeholder="Enter reels views min"/>
                                    <small id="reelsViewsMinErrorMsg" class="text-danger"></small>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Reels Views Maximum</label>
                                    <input type="text" class="form-control" name="reels_views_max" id="reels_views_max" value="{{old('reels_views_max')}}" placeholder="Enter reels views max"/>
                                    <small id="reelsViewsMaxErrorMsg" class="text-danger"></small>
                                </div>
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Instagram Posts Minimum</label>
                                    <input type="text" class="form-control" name="instagram_posts_min" id="instagram_posts_min" value="{{old('instagram_posts_min')}}" placeholder="Enter instagram posts min"/>
                                    <small id="instagramPostsMinErrorMsg" class="text-danger"></small>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Instagram Posts Maximum</label>
                                    <input type="text" class="form-control" name="instagram_posts_max" id="instagram_posts_max" value="{{old('instagram_posts_max')}}" placeholder="Enter instagram posts max"/>
                                    <small id="instagramPostsMaxErrorMsg" class="text-danger"></small>
                                </div>
                                <div class="col-sm-6">
                                    <div class="text-light small fw-semibold mb-3">Threshold Active</div>
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
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <a href="{{route('manage.threshold')}}" class="btn btn-danger redirect-btn">Back</a>
                                    <button type="submit" class="btn btn-primary" onclick="showLoader()">Add</button>
                                    {{-- <button type="button" id="thresholdBtn" class="btn btn-primary">Add</button> --}}
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
    <script>
        $(document).on('click', '#thresholdBtn', function() {
            let numberWithDecimals = '^\-?[0-9]+(?:\.[0-9]{1,2})?$';
            if($.trim($('#tier').val()) == '') {
                $('#tierErrorMsg').text('The Tier field is required.');
                $('#tier').focus();
                return false;
            } else if($.trim($('#price').val()) == '') {
                $('#priceErrorMsg').text('The Price field is required.');
                $('#price').focus();
                return false;
            } else if(!$.trim($('#price').val()).match(numberWithDecimals)) {
                $('#priceErrorMsg').text('The Price field must be a number.');
                $('#price').focus();
                return false;
            } else if($.trim($('#coins').val()) == '') {
                $('#coinsErrorMsg').text('The Coins field is required.');
                $('#coins').focus();
                return false;
            } else if(!$.trim($('#coins').val()).match(numberWithDecimals)) {
                $('#coinsErrorMsg').text('The Coins field must be a number.');
                $('#coins').focus();
                return false;
            } else if($.trim($('#tiktok_plays_min').val()) == '') {
                $('#tiktokPlaysMinErrorMsg').text('The Tiktok Plays Minimum field is required.');
                $('#tiktok_plays_min').focus();
                return false;
            } else if(!$.trim($('#tiktok_plays_min').val()).match(numberWithDecimals)) {
                $('#tiktokPlaysMinErrorMsg').text('The Tiktok Plays Minimum field must be a number.');
                $('#tiktok_plays_min').focus();
                return false;
            } else if($.trim($('#tiktok_plays_max').val()) == '') {
                $('#tiktokPlaysMaxErrorMsg').text('The Tiktok Plays Maximum field is required.');
                $('#tiktok_plays_max').focus();
                return false;
            } else if(!$.trim($('#tiktok_plays_max').val()).match(numberWithDecimals)) {
                $('#tiktokPlaysMaxErrorMsg').text('The Tiktok Plays Maximum field must be a number.');
                $('#tiktok_plays_max').focus();
                return false;
            } else if($.trim($('#story_views_min').val()) == '') {
                $('#storyViewsMinErrorMsg').text('The Story Views Minimum field is required.');
                $('#story_views_min').focus();
                return false;
            } else if(!$.trim($('#story_views_min').val()).match(numberWithDecimals)) {
                $('#storyViewsMinErrorMsg').text('The Story Views Minimum field must be a number.');
                $('#story_views_min').focus();
                return false;
            } else if($.trim($('#story_views_max').val()) == '') {
                $('#storyViewsMaxErrorMsg').text('The Story Views Maximum field is required.');
                $('#story_views_max').focus();
                return false;
            } else if(!$.trim($('#story_views_max').val()).match(numberWithDecimals)) {
                $('#storyViewsMaxErrorMsg').text('The Story Views Maximum field must be a number.');
                $('#story_views_max').focus();
                return false;
            } else if($.trim($('#reels_views_min').val()) == '') {
                $('#reelsViewsMinErrorMsg').text('The Reels Views Minimum field is required.');
                $('#reels_views_min').focus();
                return false;
            } else if(!$.trim($('#reels_views_min').val()).match(numberWithDecimals)) {
                $('#reelsViewsMinErrorMsg').text('The Reels Views Minimum field must be a number.');
                $('#reels_views_min').focus();
                return false;
            } else if($.trim($('#reels_views_max').val()) == '') {
                $('#reelsViewsMaxErrorMsg').text('The Reels Views Maximum field is required.');
                $('#reels_views_max').focus();
                return false;
            } else if(!$.trim($('#reels_views_max').val()).match(numberWithDecimals)) {
                $('#reelsViewsMaxErrorMsg').text('The Reels Views Maximum field must be a number.');
                $('#reels_views_max').focus();
                return false;
            } else if($.trim($('#instagram_posts_min').val()) == '') {
                $('#instagramPostsMinErrorMsg').text('The Instagram Posts Minimum field is required.');
                $('#instagram_posts_min').focus();
                return false;
            } else if(!$.trim($('#instagram_posts_min').val()).match(numberWithDecimals)) {
                $('#instagramPostsMinErrorMsg').text('The Instagram Posts Minimum field must be a number.');
                $('#instagram_posts_min').focus();
                return false;
            } else if($.trim($('#instagram_posts_max').val()) == '') {
                $('#instagramPostsMaxErrorMsg').text('The Instagram Posts Maximum field is required.');
                $('#instagram_posts_max').focus();
                return false;
            } else if(!$.trim($('#instagram_posts_max').val()).match(numberWithDecimals)) {
                $('#instagramPostsMaxErrorMsg').text('The Instagram Posts Maximum field must be a number.');
                $('#instagram_posts_max').focus();
                return false;
            }
            showLoader();
            $('#addThreshold').submit();
        });
    </script>
@endpush
