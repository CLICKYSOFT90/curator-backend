@extends('front.layouts.master', ['headerClass' => 'header how-it-work-header'])

@section('title', 'Curator Club - Upload Song Influencer')

@section('content')
    <!-- SIGN IN HEADER BEGIN -->
    <section class="signin-sec upload-songs-influencer-screen upload-songs-curator">
        <div class="container-fluid">
            <div class="influencer-steps-wizard curator-steps">
                <section class="signup-step-container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8">
                            <div class="wizard">
                                <div class="wizard-inner">
                                    <div class="connecting-line"></div>
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true"><span class="round-tab">1 </span> <i>Submission Info</i></a>
                                        </li>
                                        <li role="presentation" class="disabled">
                                            <a href="#step3-overview" data-toggle="tab" aria-controls="step3-overview" role="tab"><span class="round-tab-2">2</span> <i>Over View</i></a>
                                        </li>
                                        <li role="presentation" class="disabled">
                                            <a href="" role="tab"><span class="round-tab-2">3</span> <i>Select Influencer</i></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="alert alert-danger alert-dismissible" style="display: none;">
                                    <ul></ul>
                                </div>

                                <form role="form" enctype="multipart/form-data" class="login-box" id="uploadForm">
                                    <div class="tab-content" id="main_form">
                                        <div class="tab-pane active" role="tabpanel" id="step1">
                                            <div class="upload-song-tab">
                                                <div class="main-platform-div">
                                                    <h5>Which platform you would like to submit to?</h5>
                                                    <div class="upload-song-yes-no">
                                                        <div class="upload-song-yes-btn upload-song-tiktok">
                                                            <div class="radio-upload-song-yes">
                                                                <input type="radio" name="platform_type" value="TikTok">
                                                            </div>
                                                            <button type="button" class="btn btn-primary">TikTok</button>
                                                        </div>
                                                        <div class="upload-song-yes-btn upload-song-instagram">
                                                            <div class="radio-upload-song-yes">
                                                                <input type="radio" name="platform_type" value="Instagram">
                                                            </div>
                                                            <button type="button" class="btn btn-primary">Instagram</button>
                                                        </div>
                                                        <div class="upload-song-yes-btn upload-song-both">
                                                            <div class="radio-upload-song-yes">
                                                                <input type="radio" name="platform_type" value="Both">
                                                            </div>
                                                            <button type="button" class="btn btn-primary">Both</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="artist-song-name upload-influencer-media">
                                                    <h5>What's your TikTok?</h5>
                                                    <input type="text" name="tiktok_account_link" class="form-control" placeholder="Paste your TikTok account link here">
                                                    <span>Provide the link to TikTok reel sound <i class="fa fa-info-circle" aria-hidden="true"></i></span>
                                                    <input type="text" name="tiktok_reel_link" class="form-control" placeholder="Provide the link to TikTok reel sound">
                                                </div>
                                                <div class="artist-song-name upload-influencer-sound">
                                                    <h5>What's your Instagram?</h5>
                                                    <input type="text" name="instagram_account_link" class="form-control" placeholder="Paste your Instagram account link here">
                                                    <span>Provide the link to Instagram reel sound <i class="fa fa-info-circle" aria-hidden="true"></i></span>
                                                    <input type="text" name="instagram_reel_link" class="form-control" placeholder="Provide the link to Instagram reel sound">
                                                </div>
                                                <div class="artist-song-name add-fields-artist">
                                                    <h5>Artist name</h5>
                                                    <input type="text" name="artist_name" class="form-control" placeholder="Artist name here">
                                                    <a class="add-artist-field">Add Artist Name <i class="fa fa-plus" aria-hidden="true"></i></a>
                                                </div>
                                                <br>
                                                <div class="feature-artist-name">
                                                    <h5>Feature Artist
                                                        <button type="button" onclick="addMoreArtist()" class="btn-sm btn-primary mx-3" title="Add more artist"><i class="fa fa-plus"></i></button>
                                                        <button type="button" onclick="removeLastArtist()" class="btn-sm btn-danger" title="Remove last artist"><i class="fa fa-minus"></i></button>
                                                    </h5>
                                                    <input type="text" name="feature_artist[]" class="form-control mb-1" placeholder="Feature Artist name here">
                                                </div>
                                                <div class="artist-song-name">
                                                    <h5>Track title</h5>
                                                    <input type="text" name="track_title" class="form-control" placeholder="Track title here">
                                                </div>
                                                <div class="artist-song-name upload-influencer-language">
                                                    <h5>What is the language of the song?</h5>
                                                    <select name="lyrics_language" class="form-control">
                                                        <option value=""> -- Select -- </option>
                                                        @foreach($languages as $language)
                                                            <option value="{{$language->id}}">{{$language->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <h5 class="release-text">Specify influencer location</h5>
                                                <div class="upload-song-yes-no">
                                                    <div class="upload-song-yes-btn">
                                                        <div class="radio-upload-song-yes">
                                                            <input type="radio" name="location" value="Global">
                                                        </div>
                                                        <button type="button" class="btn btn-primary">Global</button>
                                                    </div>
                                                    <div class="upload-song-no-btn">
                                                        <div class="radio-upload-song-no">
                                                            <input type="radio" name="location" value="North America">
                                                        </div>
                                                        <button type="button" class="btn btn-primary">North America</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="song-released-tab-text curator-genres">
                                                <h5>Choose influencer type/categories:</h5>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="upload-song-yes-no">
                                                            <div class="upload-song-yes-btn">
                                                                <div class="radio-upload-song-yes">
                                                                    <input type="radio" name="influencer_type" value="LGBTQ+">
                                                                </div>
                                                                <button type="button" class="btn btn-primary">LGBTQ+</button>
                                                            </div>
                                                            <div class="upload-song-no-btn">
                                                                <div class="radio-upload-song-no">
                                                                    <input type="radio" name="influencer_type" value="Religion">
                                                                </div>
                                                                <button type="button" class="btn btn-primary">Religion</button>
                                                            </div>
                                                            <div class="upload-song-yes-btn">
                                                                <div class="radio-upload-song-yes">
                                                                    <input type="radio" name="influencer_type" value="Cosplay">
                                                                </div>
                                                                <button type="button" class="btn btn-primary">Cosplay</button>
                                                            </div>
                                                            <div class="upload-song-no-btn">
                                                                <div class="radio-upload-song-no">
                                                                    <input type="radio" name="influencer_type" value="Cars">
                                                                </div>
                                                                <button type="button" class="btn btn-primary">Cars</button>
                                                            </div>
                                                            <div class="upload-song-yes-btn">
                                                                <div class="radio-upload-song-yes">
                                                                    <input type="radio" name="influencer_type" value="Education">
                                                                </div>
                                                                <button type="button" class="btn btn-primary">Education</button>
                                                            </div>
                                                            <div class="upload-song-no-btn">
                                                                <div class="radio-upload-song-no">
                                                                    <input type="radio" name="influencer_type" value="Food / Beverage">
                                                                </div>
                                                                <button type="button" class="btn btn-primary">Food / Beverage</button>
                                                            </div>
                                                            <div class="upload-song-yes-btn">
                                                                <div class="radio-upload-song-yes">
                                                                    <input type="radio" name="influencer_type" value="Fitness">
                                                                </div>
                                                                <button type="button" class="btn btn-primary">Fitness</button>
                                                            </div>
                                                            <div class="upload-song-no-btn">
                                                                <div class="radio-upload-song-no">
                                                                    <input type="radio" name="influencer_type" value="Nature">
                                                                </div>
                                                                <button type="button" class="btn btn-primary">Nature</button>
                                                            </div>
                                                            <div class="upload-song-yes-btn">
                                                                <div class="radio-upload-song-yes">
                                                                    <input type="radio" name="influencer_type" value="Lip Syncing">
                                                                </div>
                                                                <button type="button" class="btn btn-primary">Lip Syncing</button>
                                                            </div>
                                                            <div class="upload-song-no-btn">
                                                                <div class="radio-upload-song-no">
                                                                    <input type="radio" name="influencer_type" value="Dancing">
                                                                </div>
                                                                <button type="button" class="btn btn-primary">Dancing</button>
                                                            </div>
                                                            <div class="upload-song-yes-btn">
                                                                <div class="radio-upload-song-yes">
                                                                    <input type="radio" name="influencer_type" value="Fashion">
                                                                </div>
                                                                <button type="button" class="btn btn-primary">Fashion</button>
                                                            </div>
                                                            <div class="upload-song-no-btn">
                                                                <div class="radio-upload-song-no">
                                                                    <input type="radio" name="influencer_type" value="Makeup">
                                                                </div>
                                                                <button type="button" class="btn btn-primary">Makeup</button>
                                                            </div>
                                                            <div class="upload-song-yes-btn">
                                                                <div class="radio-upload-song-yes">
                                                                    <input type="radio" name="influencer_type" value="Gaming">
                                                                </div>
                                                                <button type="button" class="btn btn-primary">Gaming</button>
                                                            </div>
                                                            <div class="upload-song-no-btn">
                                                                <div class="radio-upload-song-no">
                                                                    <input type="radio" name="influencer_type" value="Memes/Trends">
                                                                </div>
                                                                <button type="button" class="btn btn-primary">Memes/Trends</button>
                                                            </div>
                                                            <div class="upload-song-yes-btn">
                                                                <div class="radio-upload-song-yes">
                                                                    <input type="radio" name="influencer_type" value="Pets">
                                                                </div>
                                                                <button type="button" class="btn btn-primary">Pets</button>
                                                            </div>
                                                            <div class="upload-song-no-btn">
                                                                <div class="radio-upload-song-no">
                                                                    <input type="radio" name="influencer_type" value="Sports Highlights">
                                                                </div>
                                                                <button type="button" class="btn btn-primary">Sports Highlights</button>
                                                            </div>
                                                            <div class="upload-song-yes-btn">
                                                                <div class="radio-upload-song-yes">
                                                                    <input type="radio" name="influencer_type" value="Arts & Crafts">
                                                                </div>
                                                                <button type="button" class="btn btn-primary">Arts & Crafts</button>
                                                            </div>
                                                            <div class="upload-song-no-btn">
                                                                <div class="radio-upload-song-no">
                                                                    <input type="radio" name="influencer_type" value="Reaction Videos">
                                                                </div>
                                                                <button type="button" class="btn btn-primary">Reaction Videos</button>
                                                            </div>
                                                            <div class="upload-song-yes-btn">
                                                                <div class="radio-upload-song-yes">
                                                                    <input type="radio" name="influencer_type" value="Other">
                                                                </div>
                                                                <button type="button" class="btn btn-primary">Other</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="song-info-tab">
                                                <div class="song-released-tab-text">
                                                    <h5>Do you have specific concept for Video</h5>
                                                    <div class="upload-song-yes-no">
                                                        <div class="upload-song-yes-btn upload-show-anime">
                                                            <div class="radio-upload-song-yes">
                                                                <input type="radio" name="has_concept" value="1">
                                                            </div>
                                                            <button type="button" class="btn btn-primary">Yes</button>
                                                        </div>
                                                        <div class="upload-song-no-btn upload-hide-anime">
                                                            <div class="radio-upload-song-no">
                                                                <input type="radio" name="has_concept" value="0">
                                                            </div>
                                                            <button type="button" class="btn btn-primary">No</button>
                                                        </div>
                                                    </div>
                                                    <div class="released-song-language">
                                                        <textarea cols="4" rows="6" name="concept" class="form-control" placeholder="Describe your concept here..."></textarea>
                                                        <p>provide a reference/example video (OPTIONAL)</p>
                                                        <input type="text" name="concept_reference_link" class="form-control" placeholder="Paste reference/ example video link here">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="song-info-tab">
                                                <div class="song-released-tab-text">
                                                    <h5>Do you want influencer to tag certain account on the video</h5>
                                                    <div class="upload-song-yes-no">
                                                        <div class="upload-song-yes-btn upload-show-anime-new">
                                                            <div class="radio-upload-song-yes">
                                                                <input type="radio" name="has_tag" value="1">
                                                            </div>
                                                            <button type="button" class="btn btn-primary">Yes</button>
                                                        </div>
                                                        <div class="upload-song-no-btn upload-hide-anime-new">
                                                            <div class="radio-upload-song-no">
                                                                <input type="radio" name="has_tag" value="0">
                                                            </div>
                                                            <button type="button" class="btn btn-primary">No</button>
                                                        </div>
                                                    </div>
                                                    <div class="released-song-tag">
                                                        <p>Provide account link</p>
                                                        <input type="text" name="tag_account_link" class="form-control" placeholder="Paste account link here">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="song-info-tab">
                                                <div class="song-released-tab-text">
                                                    <h5>Do you want influencer to use certain hashtag on the video</h5>
                                                    <div class="upload-song-yes-no">
                                                        <div class="upload-song-yes-btn upload-show-anime-hashtag">
                                                            <div class="radio-upload-song-yes">
                                                                <input type="radio" name="has_hashtag" value="1">
                                                            </div>
                                                            <button type="button" class="btn btn-primary">Yes</button>
                                                        </div>
                                                        <div class="upload-song-no-btn upload-hide-anime-hashtag">
                                                            <div class="radio-upload-song-no">
                                                                <input type="radio" name="has_hashtag" value="0">
                                                            </div>
                                                            <button type="button" class="btn btn-primary">No</button>
                                                        </div>
                                                    </div>
                                                    <div class="released-song-hashtag">
                                                        <textarea cols="4" rows="6" name="hashtag" class="form-control text-none" placeholder="add hashtag here" value=''></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="list-inline">
                                                <li><button type="button" class="default-btn prev-step" id="prev-step-id"><img src="{{asset('assets/front/images/upload-back-img.png')}}" alt="image" class="img-fluid"> Back</button></li>
                                                <li><button type="button" class="default-btn next-step" id="next-step-id"> NEXT <img src="{{asset('assets/front/images/upload-front-img.png')}}" alt="image" class="img-fluid"></button></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="step3-overview">
                                            <div class="track-overview-tab">
                                                <h4>My Submission Overview</h4>
                                                <div class="track-overview-box">
                                                    <a href="javascript:void(0)">Edit info <i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                    <div class="track-song-submission">
                                                        <div class="track-form-img">
                                                            <img src="{{asset('assets/front/images/avatar-small-img.png')}}" alt="image" class="img-fluid">
                                                        </div>
                                                        <div class="track-form-content">
                                                            <h6>Song title here</h6>
                                                            <p>Jeff Jordan</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                                                            <div class="follower-left-box">
                                                                <div class="follower-img-box">
                                                                    <div class="follower-like-img">
                                                                        <img src="{{asset('assets/front/images/follower-left-img.png')}}" alt="image" class="img-fluid">
                                                                        <h6>Jeff Jordan</h6>
                                                                        <span>856 Follower</span>
                                                                    </div>
                                                                    <div class="follower-tiktok-img">
                                                                        <img src="{{asset('assets/front/images/follower-tiktok-img.png')}}" alt="image" class="img-fluid">
                                                                    </div>
                                                                </div>
                                                                <div class="follower-bottom-img">
                                                                    <img src="{{asset('assets/front/images/fl-box1.png')}}" alt="image" class="img-fluid">
                                                                    <img src="{{asset('assets/front/images/fl-box2.png')}}" alt="image" class="img-fluid">
                                                                    <img src="{{asset('assets/front/images/fl-box3.png')}}" alt="image" class="img-fluid">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                                                            <div class="follower-middle-box">
                                                                <div class="post-main-box-flex">
                                                                    <div class="post-img-box">
                                                                        <div class="post-like-img">
                                                                            <img src="{{asset('assets/front/images/table-img.png')}}" alt="image" class="img-fluid">
                                                                        </div>
                                                                        <div class="post-like-jeff">
                                                                            <h6>Jeff Jordan</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="post-insta-img">
                                                                        <img src="{{asset('assets/front/images/post-insta.png')}}" alt="image" class="img-fluid">
                                                                    </div>
                                                                </div>
                                                                <div class="post-listing-content">
                                                                    <ul>
                                                                        <li><span>5.8K</span> Posts</li>
                                                                        <li><span>29K</span> Followers</li>
                                                                        <li><span>224</span> Following</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="row post-new-boxes">
                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                                                        <img src="{{asset('assets/front/images/post-img1.png')}}" alt="image" class="img-fluid">
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                                                        <img src="{{asset('assets/front/images/post-img2.png')}}" alt="image" class="img-fluid">
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                                                        <img src="{{asset('assets/front/images/post-img3.png')}}" alt="image" class="img-fluid">
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                                                        <img src="{{asset('assets/front/images/post-img1.png')}}" alt="image" class="img-fluid">
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                                                        <img src="{{asset('assets/front/images/post-img2.png')}}" alt="image" class="img-fluid">
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                                                        <img src="{{asset('assets/front/images/post-img3.png')}}" alt="image" class="img-fluid">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                                                            <div class="post-song-box">
                                                                <div class="post-tiktok-flex">
                                                                    <div class="post-song-flex">
                                                                        <div class="post-song-img-content">
                                                                            <img src="{{asset('assets/front/images/post-song-img.png')}}" alt="image" class="img-fluid">
                                                                        </div>
                                                                        <div class="post-song-img-text">
                                                                            <small>Original audio</small>
                                                                            <p>jeffjordan</p>
                                                                            <span>11.4K reels</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="post-song-tiktok-cls">
                                                                        <img src="{{asset('assets/front/images/follower-tiktok-img.png')}}" alt="image" class="img-fluid">
                                                                    </div>
                                                                </div>
                                                                <div class="audio-song-btns">
                                                                    <a href="javascript:void(0)" class="btn btn-primary">Use audio</a>
                                                                    <a href="javascript:void(0)" class="lyrics-btn"><img src="{{asset('assets/front/images/lyric-img.png')}}" alt="image" class="img-fluid"></a>
                                                                </div>
                                                                <div class="post-song-audio-player">
                                                                    <div class="post-play-btn">
                                                                        <a href="javascript:void(0)"><i class="fa fa-play" aria-hidden="true"></i></a>
                                                                    </div>
                                                                    <div class="post-play-bar">
                                                                        <span class="play-bar-line"></span>
                                                                        <div class="post-play-bar-icon">
                                                                            <span class="play-bar-line-icon"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="playbar-time">
                                                                        <span class="playbar-timeline">0:00</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="post-song-box">
                                                                <div class="post-tiktok-flex">
                                                                    <div class="post-song-flex">
                                                                        <div class="post-song-img-content">
                                                                            <img src="{{asset('assets/front/images/post-song-img.png')}}" alt="image" class="img-fluid">
                                                                        </div>
                                                                        <div class="post-song-img-text">
                                                                            <small>Original audio</small>
                                                                            <p>jeffjordan</p>
                                                                            <span>11.4K reels</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="post-song-tiktok-cls">
                                                                        <img src="{{asset('assets/front/images/post-insta.png')}}" alt="image" class="img-fluid">
                                                                    </div>
                                                                </div>
                                                                <div class="audio-song-btns">
                                                                    <a href="javascript:void(0)" class="btn btn-primary">Use audio</a>
                                                                    <a href="javascript:void(0)" class="lyrics-btn"><img src="{{asset('assets/front/images/lyric-img.png')}}" alt="image" class="img-fluid"></a>
                                                                </div>
                                                                <div class="post-song-audio-player">
                                                                    <div class="post-play-btn">
                                                                        <a href="javascript:void(0)"><i class="fa fa-play" aria-hidden="true"></i></a>
                                                                    </div>
                                                                    <div class="post-play-bar">
                                                                        <span class="play-bar-line"></span>
                                                                        <div class="post-play-bar-icon">
                                                                            <span class="play-bar-line-icon"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="playbar-time">
                                                                        <span class="playbar-timeline">0:00</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="song-lyrics-box">
                                                    <div class="songs-lyrics-text">
                                                        <h5>Language <a href="javascript:void(0)" class="pull-right">Edit song upload info   <i class="fa fa-pencil" aria-hidden="true"></i></a></h5>
                                                        <p>English</p>
                                                    </div>
                                                    <div class="songs-lyrics-text">
                                                        <h5>influencer location</h5>
                                                        <p>North America</p>
                                                    </div>
                                                    <div class="songs-lyrics-text">
                                                        <h5>influencer type</h5>
                                                        <p>Cars</p>
                                                    </div>
                                                    <div class="songs-lyrics-text">
                                                        <h5>Influencer categories</h5>
                                                        <p>Sports Highlights,  Gaming</p>
                                                    </div>
                                                    <div class="songs-lyrics-text">
                                                        <h5> Concept for video</h5>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                                    </div>
                                                    <div class="songs-lyrics-text">
                                                        <h5> Account tag</h5>
                                                        <p>No </p>
                                                    </div>
                                                    <div class="songs-lyrics-text">
                                                        <h5> Hashtags</h5>
                                                        <p>No </p>
                                                    </div>
                                                </div>
                                                <div class="choose-an-option">
                                                    <h4>Choose an option</h4>
                                                    <p>Choose any one option to continue the submission.</p>
                                                    <div class="upload-song-yes-no">
                                                        <div class="upload-song-yes-btn">
                                                            <div class="radio-upload-song-yes">
                                                                <input type="radio" name="submit_type" value="1">
                                                            </div>
                                                            <button type="button" class="btn btn-primary" fdprocessedid="kgmpym"> Submit manually</button>
                                                        </div>
                                                        <div class="upload-song-no-btn">
                                                            <div class="radio-upload-song-no">
                                                                <input type="radio" name="submit_type" value="0">
                                                            </div>
                                                            <button type="button" class="btn btn-primary" fdprocessedid="2imfbo">Automate</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="list-inline">
                                                <li><button type="button" class="default-btn prev-step" id="prev-step-id"><img src="{{asset('assets/front/images/upload-back-img.png')}}" alt="image" class="img-fluid"> Back</button></li>
                                                <li><button type="submit" class="default-btn next-step" id="submit-step-id"> NEXT <img src="{{asset('assets/front/images/upload-front-img.png')}}" alt="image" class="img-fluid"></button></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <!-- SIGN IN HEADER END -->
@endsection

@push('front-scripts')
    <script src="https://www.jqueryscript.net/demo/Tiny-Text-Field-Based-Tags-Input-Plugin-For-jQuery-Tagify/jQuery.tagify.js"></script>
    <script>
        // WIZARD INNER SCRIPT BEGIN
        $(document).ready(function () {
            function updateRoundTabBorder() {
                $('.influencer-steps-wizard span.round-tab').css({
                    'border-color': '#FBBC04',
                    'border-width': '5px',
                    'border-style': 'solid'
                });
            }
            function resetRoundTabBorder() {
                $('.influencer-steps-wizard span.round-tab').css({
                    'border-color': '#808080',
                    'border-width': '5px',
                    'border-style': 'solid'
                });
            }
            function showContent(contentToShow) {
                $('.wizard-form-begin').hide();
                $(contentToShow).show();
                resetRoundTabBorder();
                updateTabBorderColor();
            }
            $('#radio-tiktok').click(function () {
                showContent('.wizard-form-begin-tiktok');
                updateRoundTabBorder();
            });
            $('#radio-instagram').click(function () {
                showContent('.wizard-form-begin-instagram');
                updateRoundTabBorder();
            });
            $('#radio-both').click(function () {
                showContent('.wizard-form-begin-both');
                updateRoundTabBorder();
            });
            $('[id="prev-step-id"]').click(function () {
                var activeTab = $('.wizard .tab-pane.active');
                var prevTab = activeTab.prev('.tab-pane');
                console.log(prevTab.index());
                prevTab.index() === -1 ? window.location.href = "select-submission.html" : "";
                if (prevTab.length) {
                    activeTab.removeClass('active');
                    prevTab.addClass('active');
                    resetRoundTabBorder();
                    var correspondingTabLink = $('.influencer-steps-wizard .nav-tabs > li > a[href="#' + prevTab.attr('id') + '"]');
                    correspondingTabLink.trigger('click');
                }
            });
            $('[id="next-step-id"]').click(function () {
                var activeTab = $('.wizard .tab-pane.active');
                var nextTab = activeTab.next('.tab-pane');
                nextTab.index() === 2 ? window.location.href = "/" : "";
                if (nextTab.length) {
                    activeTab.removeClass('active');
                    nextTab.addClass('active');
                    resetRoundTabBorder();
                    var correspondingTabLink = $('.influencer-steps-wizard .nav-tabs > li > a[href="#' + nextTab.attr('id') + '"]');
                    correspondingTabLink.trigger('click');
                }
            });
{{--            $("#submit-step-id").click(function() {window.location.href = "{{route('user.automated.submission.influencer')}}"})--}}
            $('.influencer-steps-wizard .wizard .nav-tabs > li a').off('click');
            $('.wizard-inner').off('click');
            $('.influencer-steps-wizard span.round-tab').click(function () {
                resetRoundTabBorder();
            });
            updateTabBorderColor();
        });
        // WIZARD INNER SCRIPT END

        // TAGIFY SCRIPT BEGIN
        $('[name=hashtag]').tagify();
        // TAGIFY SCRIPT END

        // TOP RADIO BUTTON CHECKED SCRIPT BEGIN
        $(document).ready(function() {
            $(".upload-song-link-field .form-control").click(function() {
                $(this).siblings(".radio-upload-song").find("input[type=radio]").prop("checked", true);
            });
            $(".upload-song-mp3 button").click(function() {
                $(this).siblings(".radio-upload-song").find("input[type=radio]").prop("checked", true);
            });
        });
        // TOP RADIO BUTTON CHECKED SCRIPT END
        // TOP RADIO BUTTONS FIRLDS BORDER COLOR & BOX SHADOW SCRIPT BEGIN
        $(document).ready(function() {
            $(".upload-song-link-field .form-control").click(function() {
                $(this).addClass("clicked");
                $(".upload-song-mp3 .btn-primary").removeClass("clicked");
            });
            $(".upload-song-mp3 .btn-primary").click(function() {
                $(this).addClass("clicked");
                $(".upload-song-link-field .form-control").removeClass("clicked");
            });
        });
        // TOP RADIO BUTTONS FIRLDS BORDER COLOR & BOX SHADOW SCRIPT END
        // YES OR NO RADIO BUTTON SCRIPT BEGIN
        $(document).ready(function() {
            $(".upload-song-yes-no .upload-song-yes-btn").click(function() {
                $(this).find("input[type=radio]").prop("checked", true);
                $(this).siblings(".upload-song-no-btn").find("input[type=radio]").prop("checked", false);
                $(this).siblings(".upload-song-yes-btn").find("input[type=radio]").prop("checked", false);
            });
            $(".upload-song-yes-no .upload-song-no-btn").click(function() {
                $(this).find("input[type=radio]").prop("checked", true);
                $(this).siblings(".upload-song-yes-btn").find("input[type=radio]").prop("checked", false);
                $(this).siblings(".upload-song-no-btn").find("input[type=radio]").prop("checked", false);
            });
        });
        // YES OR NO RADIO BUTTON SCRIPT END
        // SONGS INFO YES & NO BUTTON SHOW & HIDE SCRIPT BEGIN
        document.addEventListener("DOMContentLoaded", function() {
            const yesBtn = document.querySelector(".upload-show-anime");
            const noBtn = document.querySelector(".upload-hide-anime");
            const dateElement = document.querySelector(".released-song-language");
            yesBtn.addEventListener("click", function() {
                dateElement.classList.add("show");
            });
            noBtn.addEventListener("click", function() {
                dateElement.classList.remove("show");
            });
        });
        // SONGS INFO YES & NO BUTTON SHOW & HIDE SCRIPT END
        // TAG BUTTON SHOW & HIDE SCRIPT BEGIN
        document.addEventListener("DOMContentLoaded", function() {
            const yesBtn = document.querySelector(".upload-show-anime-new");
            const noBtn = document.querySelector(".upload-hide-anime-new");
            const dateElement = document.querySelector(".released-song-tag");
            yesBtn.addEventListener("click", function() {
                dateElement.classList.add("show");
            });
            noBtn.addEventListener("click", function() {
                dateElement.classList.remove("show");
            });
        });
        // TAG BUTTON SHOW & HIDE SCRIPT END
        // HASHTAG BUTTON SHOW & HIDE SCRIPT BEGIN
        document.addEventListener("DOMContentLoaded", function() {
            const yesBtn = document.querySelector(".upload-show-anime-hashtag");
            const noBtn = document.querySelector(".upload-hide-anime-hashtag");
            const dateElement = document.querySelector(".released-song-hashtag");
            yesBtn.addEventListener("click", function() {
                dateElement.classList.add("show");
            });
            noBtn.addEventListener("click", function() {
                dateElement.classList.remove("show");
            });
        });
        // HASHTAG BUTTON SHOW & HIDE SCRIPT END
        // TIKTOK & INSTAGRAM & BOTH SCRIPT BEGIN
        document.addEventListener("DOMContentLoaded", function() {
            const tiktokButton = document.querySelector(".upload-song-tiktok");
            const instagramButton = document.querySelector(".upload-song-instagram");
            const bothButton = document.querySelector(".upload-song-both");
            const influencerMedia = document.querySelector(".upload-influencer-media");
            const influencerSound = document.querySelector(".upload-influencer-sound");
            tiktokButton.addEventListener("click", function() {
                influencerMedia.style.display = "block";
                influencerSound.style.display = "none";
            });
            instagramButton.addEventListener("click", function() {
                influencerMedia.style.display = "none";
                influencerSound.style.display = "block";
            });
            bothButton.addEventListener("click", function() {
                influencerMedia.style.display = "block";
                influencerSound.style.display = "block";
            });
        });
        // TIKTOK & INSTAGRAM & BOTH SCRIPT END
        // STEPS WIZARD SCRIPT BEGIN
        $(document).ready(function () {
            $('.radio-card input[type="radio"]').click(function () {
                var active = $('.wizard .nav-tabs li.active');
                active.next().removeClass('disabled');
                nextTab(active);
            });
            function nextTab(elem) {
                $(elem).next().find('a[data-toggle="tab"]').click();
            }
            function prevTab(elem) {
                $(elem).prev().find('a[data-toggle="tab"]').click();
            }
            $('.nav-tabs').on('click', 'li', function () {
                $('.nav-tabs li.active').removeClass('active');
                $(this).addClass('active');
            });
        });
        // STEPS WIZARD SCRIPT END

        document.getElementById('uploadForm').addEventListener('submit', function (e) {
            e.preventDefault();
            $('button#submit-step-id').attr('disabled',true);
            $('.alert-dismissible').hide();
            $('.alert-dismissible ul').empty();
            const formData = new FormData(this);
            axios.post("{{route('save.influencer.song.submission')}}", formData)
                .then(res => {
                    notifyUser(res.data.msg,res.data.status,3000);
                    if (res.data.status=='success') {
                        setTimeout(function () {
                            location.href = "{{route('user.automated.submission.influencer')}}";
                        },2500);
                    }
                    $('button#submit-step-id').attr('disabled',false);
                    return false;
                })
                .catch(error => {
                    $.each(error.response.data.errors, function (k, v) {
                        $('.alert-dismissible ul').append(`<li>${v[0]}</li>`);
                    });
                    $('.alert-dismissible').show();
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                    $('button#submit-step-id').attr('disabled',false);
                    return false;
                });
        });

        function addMoreArtist() {
            $('.feature-artist-name').append('<input type="text" name="feature_artist[]" class="form-control mb-1" placeholder="Feature Artist name here">')
        }
        function removeLastArtist() {
            $('.feature-artist-name input:last-child').remove();
        }
        
    </script>
@endpush