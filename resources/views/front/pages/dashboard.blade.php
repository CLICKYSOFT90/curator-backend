@extends('front.layouts.master', ['bodyClass' => 'label-bg-col', 'headerClass' => 'header how-it-work-header', 'fullFooter' => true])

@section('title', 'Curator Club - Dashboard')

@push('front-styles')
    <link rel="stylesheet" href="https://rawgithub.com/dimsemenov/Magnific-Popup/master/dist/magnific-popup.css">
@endpush

@section('content')
    <!-- CURATAR DASHBOARD SECTION BEGIN -->
    <section class="curator-dashboard-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="cur-dashboard-left-side">
                        <div class="cur-mike-flex">
                            <div class="cur-mike">
                                <span><img src="{{auth()->user()->profile_image}}" alt="image" class="img-fluid"></span>
                                <h6>{{auth()->user()->display_name}}</h6>
                            </div>
                            <div class="cur-amount-cont">
                                <span>$80</span>
                            </div>
                        </div>
                        <div class="side-listing">
                            <a href="javascript:void(0)" class="song-cont active"><i class="fa fa-music" aria-hidden="true"></i> Songs sent to me</a>
                        </div>
                        <div class="side-listing">
                            <a href="{{route('user.upload.song.curator')}}" class="compaign-cont"><i class="fa fa-volume-up" aria-hidden="true"></i> Start a new campaign</a>
                        </div>
                        <div class="side-listing">
                            <a href="javascript:void(0)" class="available-list"><i class="fa fa-calendar" aria-hidden="true"></i> Available</a>
                            <a href="javascript:void(0)" class="btn btn-primary set-available-btn" data-toggle="modal" data-target="#set-availability-modal">Set Availablity</a>
                        </div>
                        <div>
                            @if($currentUser->availability===0)
                                <span>Pause</span>
                                <span role="button" onclick="removeSchedule()" class="text-danger" title="Remove Availability" style="float: right;"><i class="fa fa-trash"></i></span>
                            @elseif($currentUser->availability===1)
                                <span>
                                    {{date('d/m/Y',strtotime($currentUser->from_date))}} - {{date('d/m/Y',strtotime($currentUser->to_date))}}
                                </span>
                                <span role="button" onclick="removeSchedule()" class="text-danger" title="Remove Availability" style="float: right;"><i class="fa fa-trash"></i></span>
                            @endif
                        </div>
                    </div>
                    <div class="inbox-bg">
                        <div class="inbox-cont-text">
                            <h6><i class="fa fa-comment-o" aria-hidden="true"></i> Inbox</h6>
                            <a href="{{route('view.chat')}}">View all</a>
                        </div>
                        @forelse($chats as $chat)
                            <div class="inbox-cont-text">
                                <div class="inbox-inner-cont">
                                    @if($chat->getSenderCustomer->id === auth()->id())
                                        <div class="inbox-list">
                                            <img src="{{asset('assets/front/images/profile-images/'.$chat->getReceiverCustomer->profile_image)}}" alt="image" class="img-fluid">
                                        </div>
                                        <div class="think-cont">
                                            <p>Me</p>
                                            <span>{{\Illuminate\Support\Str::limit($chat->message, 20)}}</span>
                                        </div>
                                    @else
                                        <div class="inbox-list">
                                            <img src="{{asset('assets/front/images/profile-images/'.$chat->getSenderCustomer->profile_image)}}" alt="image" class="img-fluid">
                                        </div>
                                        <div class="think-cont">
                                            <p>{{$chat->getSenderCustomer->display_name}}</p>
                                            <span>{{\Illuminate\Support\Str::limit($chat->message, 20)}}</span>
                                        </div>
                                    @endif
                                </div>
                                <div class="time-cont">
                                    <span>{{\Carbon\Carbon::parse($chat->created_at)->diffForHumans()}}</span>
                                </div>
                            </div>
                        @empty
                            <div class="inbox-cont-text">
                                <div class="inbox-inner-cont">
                                    <p class="text-danger">No chat found*</p>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>

                <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="dashboard-right-content">
                        <div class="songs-bar">
                            <h6><i class="fa fa-music" aria-hidden="true"></i> Songs</h6>
                        </div>
                        <div class="dashboard-new-tabs">
                            <div class="tab-scroll">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#tabs-cur1" role="tab">New <span>{{count($newSongs)}}</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabs-cur2" role="tab">Approved <span>0</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabs-cur3" role="tab">Previously Reviewed <span>0</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabs-cur4" role="tab">Expired <span>0</span></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-cur1" role="tabpanel">
                                    <div class="artist-track-mobile-hide">
                                        <div class="dashboard-first-tab">
                                            <div class="row" id="page-content">
                                                @forelse($newSongs as $song)
                                                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                                        <div class="breams-box">
                                                            <img src="{{asset('assets/front/songs/cover/'.$song->getCuratorCampaignDetail->cover_image)}}" alt="{{$song->getCuratorCampaignDetail->track_title}}" class="img-fluid">
                                                            <div class="dreams-box-content">
                                                                <div id="inline-popups">
                                                                    <a href="#test-popup" class="submit-play-icon" data-song-id="{{$song->getCuratorCampaignDetail->id}}" data-effect="mfp-zoom-in"><i class="fa fa-play" aria-hidden="true"></i></a>
                                                                </div>
                                                                <h6>{{$song->getCuratorCampaignDetail->track_title}}</h6>
                                                                <p>{{$song->getCuratorCampaignDetail->artist_name}}</p>
                                                                <span class="submit-cont">Submitted: {{$song->getCuratorCampaignDetail->released_date}}</span>
                                                            </div>
                                                            <div class="cur-amt">
                                                                <p><span><img src="{{asset('assets/front/images/smc.png')}}" alt="image" class="img-fluid"></span> $1.00</p>
                                                            </div>
                                                            <div class="time-box">
                                                                <span><i class="fa fa-clock-o" aria-hidden="true"></i> 3 days</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @empty
                                                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                                        <div class="breams-box">
                                                            <p class="text-danger">No songs found*</p>
                                                        </div>
                                                    </div>
                                                @endforelse
                                            </div>
                                            <div class="dashboard-pagination">
                                                <nav aria-label="Page navigation example">
                                                    <ul id="pagination-demo" class="pagination justify-content-center"></ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="artist-track-mobile-show">
                                        <div class="slider curator-dashboard-slider-responsive">
                                            <div>
                                                <div class="breams-box">
                                                    <img src="{{asset('assets/front/images/ft1.png')}}" alt="image" class="img-fluid">
                                                    <div class="dreams-box-content">
                                                        <div id="inline-popup-mobile">
                                                            <a href="#test-popup-mobile" class="submit-play-icon" data-effect="mfp-zoom-in"><i class="fa fa-play" aria-hidden="true"></i></a>
                                                        </div>
                                                        <h6>Dreams and Nightmares</h6>
                                                        <p>Jeff Jordan</p>
                                                        <span class="submit-cont">Submitted 2hrs ago.</span>
                                                    </div>
                                                    <div class="cur-amt">
                                                        <p><span><img src="{{asset('assets/front/images/smc.png')}}" alt="image" class="img-fluid"></span> $1.00</p>
                                                    </div>
                                                    <div class="time-box">
                                                        <span><i class="fa fa-clock-o" aria-hidden="true"></i> 3 days</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="breams-box">
                                                    <img src="{{asset('assets/front/images/ft2.png')}}" alt="image" class="img-fluid">
                                                    <div class="dreams-box-content">
                                                        <a href="javascript:void(0)" class="submit-play-icon"><i class="fa fa-play" aria-hidden="true"></i></a>
                                                        <h6>Sad Face</h6>
                                                        <p>Crazy 8</p>
                                                        <span class="submit-cont">Submitted 2hrs ago.</span>
                                                    </div>
                                                    <div class="cur-amt">
                                                        <p><span><img src="{{asset('assets/front/images/smc.png')}}" alt="image" class="img-fluid"></span> $1.00</p>
                                                    </div>
                                                    <div class="time-box">
                                                        <span><i class="fa fa-clock-o" aria-hidden="true"></i> 3 days</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="breams-box">
                                                    <img src="{{asset('assets/front/images/ft3.png')}}" alt="image" class="img-fluid">
                                                    <div class="dreams-box-content">
                                                        <a href="javascript:void(0)" class="submit-play-icon"><i class="fa fa-play" aria-hidden="true"></i></a>
                                                        <h6>Rebirth</h6>
                                                        <p>Lucas</p>
                                                        <span class="submit-cont">Submitted 2hrs ago.</span>
                                                    </div>
                                                    <div class="cur-amt">
                                                        <p><span><img src="{{asset('assets/front/images/smc.png')}}" alt="image" class="img-fluid"></span> $1.00</p>
                                                    </div>
                                                    <div class="time-box">
                                                        <span><i class="fa fa-clock-o" aria-hidden="true"></i> 3 days</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="breams-box">
                                                    <img src="{{asset('assets/front/images/ft4.png')}}" alt="image" class="img-fluid">
                                                    <div class="dreams-box-content">
                                                        <a href="javascript:void(0)" class="submit-play-icon"><i class="fa fa-play" aria-hidden="true"></i></a>
                                                        <h6>You Owe Me</h6>
                                                        <p>Fear B.</p>
                                                        <span class="submit-cont">Submitted 2hrs ago.</span>
                                                    </div>
                                                    <div class="cur-amt">
                                                        <p><span><img src="{{asset('assets/front/images/smc.png')}}" alt="image" class="img-fluid"></span> $1.00</p>
                                                    </div>
                                                    <div class="time-box">
                                                        <span><i class="fa fa-clock-o" aria-hidden="true"></i> 3 days</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="breams-box">
                                                    <img src="{{asset('assets/front/images/ft5.png')}}" alt="image" class="img-fluid">
                                                    <div class="dreams-box-content">
                                                        <a href="javascript:void(0)" class="submit-play-icon"><i class="fa fa-play" aria-hidden="true"></i></a>
                                                        <h6>Fluke</h6>
                                                        <p>Cold Shoulder</p>
                                                        <span class="submit-cont">Submitted 2hrs ago.</span>
                                                    </div>
                                                    <div class="cur-amt">
                                                        <p><span><img src="{{asset('assets/front/images/smc.png')}}" alt="image" class="img-fluid"></span> $1.00</p>
                                                    </div>
                                                    <div class="time-box">
                                                        <span><i class="fa fa-clock-o" aria-hidden="true"></i> 3 days</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="breams-box">
                                                    <img src="{{asset('assets/front/images/ft6.png')}}" alt="image" class="img-fluid">
                                                    <div class="dreams-box-content">
                                                        <a href="javascript:void(0)" class="submit-play-icon"><i class="fa fa-play" aria-hidden="true"></i></a>
                                                        <h6>Rap Trap</h6>
                                                        <p>Jesse Pickman</p>
                                                        <span class="submit-cont">Submitted 2hrs ago.</span>
                                                    </div>
                                                    <div class="cur-amt">
                                                        <p><span><img src="{{asset('assets/front/images/smc.png')}}" alt="image" class="img-fluid"></span> $1.00</p>
                                                    </div>
                                                    <div class="time-box">
                                                        <span><i class="fa fa-clock-o" aria-hidden="true"></i> 3 days</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="breams-box">
                                                    <img src="{{asset('assets/front/images/ft7.png')}}" alt="image" class="img-fluid">
                                                    <div class="dreams-box-content">
                                                        <a href="javascript:void(0)" class="submit-play-icon"><i class="fa fa-play" aria-hidden="true"></i></a>
                                                        <h6>Money Case</h6>
                                                        <p>Musta</p>
                                                        <span class="submit-cont">Submitted 2hrs ago.</span>
                                                    </div>
                                                    <div class="cur-amt">
                                                        <p><span><img src="{{asset('assets/front/images/smc.png')}}" alt="image" class="img-fluid"></span> $1.00</p>
                                                    </div>
                                                    <div class="time-box">
                                                        <span><i class="fa fa-clock-o" aria-hidden="true"></i> 3 days</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="breams-box">
                                                    <img src="{{asset('assets/front/images/ft8.png')}}" alt="image" class="img-fluid">
                                                    <div class="dreams-box-content">
                                                        <a href="javascript:void(0)" class="submit-play-icon"><i class="fa fa-play" aria-hidden="true"></i></a>
                                                        <h6>Blue Neighbourhood</h6>
                                                        <p>Troye Sivan</p>
                                                        <span class="submit-cont">Submitted 2hrs ago.</span>
                                                    </div>
                                                    <div class="cur-amt">
                                                        <p><span><img src="{{asset('assets/front/images/smc.png')}}" alt="image" class="img-fluid"></span> $1.00</p>
                                                    </div>
                                                    <div class="time-box">
                                                        <span><i class="fa fa-clock-o" aria-hidden="true"></i> 3 days</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-cur2" role="tabpanel">
                                    <div class="table-data-tab">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                <tr>
                                                    <td class="left-bdr">
                                                        <div class="table-data-flex">
                                                            <div class="table-data-img">
                                                                <img src="{{asset('assets/front/images/table-img.png')}}" alt="image" class="img-fluid">
                                                            </div>
                                                            <div class="table-data-text">
                                                                <p>Jeff Jordan</p>
                                                                <span>United Sates</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-data-field">
                                                            <p>Date</p>
                                                            <span>June 6,2023</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-data-field">
                                                            <p>Status</p>
                                                            <span>Promise to Share</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td class="right-bdr">
                                                        <div class="mark-shared-btn">
                                                            <a href="javascript:void(0)" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal-mark-shared">mark as shared</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="left-bdr">
                                                        <div class="table-data-flex">
                                                            <div class="table-data-img">
                                                                <img src="{{asset('assets/front/images/table-img.png')}}" alt="image" class="img-fluid">
                                                            </div>
                                                            <div class="table-data-text">
                                                                <p>Jeff Jordan</p>
                                                                <span>United Sates</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-data-field">
                                                            <p>Date</p>
                                                            <span>June 6,2023</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-data-field">
                                                            <p>Status</p>
                                                            <span>Promise to Share</span>
                                                        </div>
                                                    </td>
                                                    <td></td>
                                                    <td class="right-bdr">
                                                        <div class="mark-shared-btn">
                                                            <a href="javascript:void(0)" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal-mark-shared">mark as shared</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="left-bdr">
                                                        <div class="table-data-flex">
                                                            <div class="table-data-img">
                                                                <img src="{{asset('assets/front/images/table-img.png')}}" alt="image" class="img-fluid">
                                                            </div>
                                                            <div class="table-data-text">
                                                                <p>Jeff Jordan</p>
                                                                <span>United Sates</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-data-field">
                                                            <p>Date</p>
                                                            <span>June 6,2023</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-data-field">
                                                            <p>Status</p>
                                                            <span>Promise to Share</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td class="right-bdr">
                                                        <div class="mark-shared-btn">
                                                            <a href="javascript:void(0)" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal-mark-shared">mark as shared</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="exampleModal-mark-shared" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="mark-shared-content">
                                                        <P>Please choose the platform where you share the song.</P>
                                                        <select class="form-control">
                                                            <option>Spotify</option>
                                                            <option>Spotify</option>
                                                            <option>Spotify</option>
                                                        </select>
                                                        <div class="link-script">
                                                            <p>Enter the link where you've shared the song</p>
                                                            <div class="ls-link">
                                                                <input type="text" class="form-control" placeholder="Enter the link where you've shared the song">
                                                                <div class="paperclip-link">
                                                                    <a href="javascript:void(0)"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="song-site-links">
                                                            <ul>
                                                                <li><a href="javascript:void(0)">Sad Face (65,630)</a></li>
                                                                <li><a href="javascript:void(0)">Sad Vibes (59,524)</a></li>
                                                                <li><a href="javascript:void(0)">Lofi & Chill (2,738)</a></li>
                                                                <li><a href="javascript:void(0)">EDM Hits 2022 (70)</a></li>
                                                                <li><a href="javascript:void(0)" class="view-sad-all">View All</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="link-script">
                                                            <p>Write message ( Optional)</p>
                                                            <textarea cols="5" rows="5" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                                                    <button type="button" class="btn btn-primary" data-dismiss="modal">MARK AS SHARED</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-cur3" role="tabpanel">
                                    <div class="previously-reviewed-tabs">
                                        <div class="curator-filter">
                                            <!-- <select class="form-control">
                                              <option>Approved</option>
                                              <option>Denied</option>
                                            </select> -->
                                            <div class="select">
                                                <div class="selectBtn" data-type="firstOption">Select Option</div>
                                                <div class="selectDropdown">
                                                    <div class="option" data-type="firstOption">Approved</div>
                                                    <div class="option" data-type="secondOption">Denied</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wrapper center-block">
                                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingOne">
                                                        <h4 class="panel-title">
                                                            <a role="button" class="ct-first" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                <div class="tab-bar-flex">
                                                                    <div class="tab-bar-img-flex">
                                                                        <div class="tab-b-dg">
                                                                            <img src="{{asset('assets/front/images/play-song-btn.png')}}" alt="image" class="img-fluid">
                                                                            <div class="dream-play-btn">
                                                                                <span><i class="fa fa-play" aria-hidden="true"></i></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tab-b-dg-cont">
                                                                            <p>Dreams and Nightmares</p>
                                                                            <span>Jeff Joran</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="content-text-tbr">
                                                                        <p>"I absolutely loved it! The production is incredible, the lyrics are catchy and clever, and your flow is on point. I can't wait to hear more from you. I'm going to share your song on my playlist as soon as possible. I think everyone going to love it as much as I did Keep up the great work!"</p>
                                                                    </div>
                                                                    <div class="approved-bar">
                                                                        <span>Approved</span>
                                                                    </div>
                                                                </div>
                                                                <div class="personal-note">
                                                                    <span class="personal-note-anchor"><i class="fa fa-pencil" aria-hidden="true"></i> Add a personal note</span>
                                                                </div>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body">
                                                            <div class="col-tab-inner-effect">
                                                                <div class="date-script-content">
                                                                    <span>10 Jul, 2023</span>
                                                                </div>
                                                                <div class="image-script-content">
                                                                    <img src="{{asset('assets/front/images/ct2.png')}}" alt="image" class="img-fluid">
                                                                    <p>You Listened the song. <span>5:56 AM</span></p>
                                                                </div>
                                                                <div class="image-script-content">
                                                                    <img src="{{asset('assets/front/images/ct2.png')}}" alt="image" class="img-fluid">
                                                                    <p>You Approved the song. <span>6:00 AM</span></p>
                                                                </div>
                                                                <div class="image-script-content">
                                                                    <img src="{{asset('assets/front/images/ct2.png')}}" alt="image" class="img-fluid">
                                                                    <p>You promised to share the song in a week. <span>6:05 AM</span></p>
                                                                </div>
                                                                <div class="image-script-new">
                                                                    <img src="{{asset('assets/front/images/ct2.png')}}" alt="image" class="img-fluid">
                                                                    <div class="img-ct-text">
                                                                        <p>You left the review <span>6:05 AM</span></p>
                                                                        <small>"I absolutely loved it! The production is incredible, the lyrics are catchy and clever, and your flow is on point. I can't wait to hear more from you.I'm going to share your song on my playlist as soon as possible. I think everyone going to love it as much as I did Keep up the great work!"</small>
                                                                    </div>
                                                                </div>
                                                                <div class="date-script-content">
                                                                    <span>17 Jul, 2023</span>
                                                                </div>
                                                                <div class="image-script-new">
                                                                    <img src="{{asset('assets/front/images/table-img.png')}}" alt="image" class="img-fluid">
                                                                    <div class="img-ct-text">
                                                                        <p>Milli = left a private note <span>6:05 AM</span></p>
                                                                        <small>"Lorem Ipsum is simply dummy text of the printing and typesetting industry".</small>
                                                                    </div>
                                                                </div>
                                                                <div class="date-script-content">
                                                                    <span>10 Jul, 2023</span>
                                                                </div>
                                                                <div class="image-script-content">
                                                                    <img src="{{asset('assets/front/images/ct2.png')}}" alt="image" class="img-fluid">
                                                                    <p>You promised to share the song in a week. <span>6:05 AM</span></p>
                                                                </div>
                                                                <div class="date-script-content">
                                                                    <span>17 Jul, 2023</span>
                                                                </div>
                                                                <div class="image-script-content">
                                                                    <img src="{{asset('assets/front/images/ct2.png')}}" alt="image" class="img-fluid">
                                                                    <p>You shared the song on your playlist <a href="javascript:void(0)" class="blue-underline">hiphopchart 2023.</a> <span>6:05 AM</span></p>
                                                                </div>
                                                                <div class="images-left-bar-line"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingTwo">
                                                        <h4 class="panel-title">
                                                            <a role="button" class="ct-second" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                                <div class="tab-bar-flex">
                                                                    <div class="tab-bar-img-flex">
                                                                        <div class="tab-b-dg">
                                                                            <img src="{{asset('assets/front/images/play-song-btn.png')}}" alt="image" class="img-fluid">
                                                                            <div class="dream-play-btn">
                                                                                <span><i class="fa fa-play" aria-hidden="true"></i></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tab-b-dg-cont">
                                                                            <p>Dreams and Nightmares</p>
                                                                            <span>Jeff Joran</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="content-text-tbr">
                                                                        <p>"I absolutely loved it! The production is incredible, the lyrics are catchy and clever, and your flow is on point. I can't wait to hear more from you. I'm going to share your song on my playlist as soon as possible. I think everyone going to love it as much as I did Keep up the great work!"</p>
                                                                    </div>
                                                                    <div class="approved-bar">
                                                                        <span>Approved</span>
                                                                    </div>
                                                                </div>
                                                                <div class="personal-note">
                                                                    <span class="personal-note-anchor"><i class="fa fa-pencil" aria-hidden="true"></i> Add a personal note</span>
                                                                </div>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                        <div class="panel-body">
                                                            <div class="col-tab-inner-effect">
                                                                <div class="date-script-content">
                                                                    <span>10 Jul, 2023</span>
                                                                </div>
                                                                <div class="image-script-content">
                                                                    <img src="{{asset('assets/front/images/ct2.png')}}" alt="image" class="img-fluid">
                                                                    <p>You Listened the song. <span>5:56 AM</span></p>
                                                                </div>
                                                                <div class="image-script-content">
                                                                    <img src="{{asset('assets/front/images/ct2.png')}}" alt="image" class="img-fluid">
                                                                    <p>You Approved the song. <span>6:00 AM</span></p>
                                                                </div>
                                                                <div class="image-script-content">
                                                                    <img src="{{asset('assets/front/images/ct2.png')}}" alt="image" class="img-fluid">
                                                                    <p>You promised to share the song in a week. <span>6:05 AM</span></p>
                                                                </div>
                                                                <div class="image-script-new">
                                                                    <img src="{{asset('assets/front/images/ct2.png')}}" alt="image" class="img-fluid">
                                                                    <div class="img-ct-text">
                                                                        <p>You left the review <span>6:05 AM</span></p>
                                                                        <small>"I absolutely loved it! The production is incredible, the lyrics are catchy and clever, and your flow is on point. I can't wait to hear more from you.I'm going to share your song on my playlist as soon as possible. I think everyone going to love it as much as I did Keep up the great work!"</small>
                                                                    </div>
                                                                </div>
                                                                <div class="date-script-content">
                                                                    <span>17 Jul, 2023</span>
                                                                </div>
                                                                <div class="image-script-new">
                                                                    <img src="{{asset('assets/front/images/table-img.png')}}" alt="image" class="img-fluid">
                                                                    <div class="img-ct-text">
                                                                        <p>Milli = left a private note <span>6:05 AM</span></p>
                                                                        <small>"Lorem Ipsum is simply dummy text of the printing and typesetting industry".</small>
                                                                    </div>
                                                                </div>
                                                                <div class="date-script-content">
                                                                    <span>10 Jul, 2023</span>
                                                                </div>
                                                                <div class="image-script-content">
                                                                    <img src="{{asset('assets/front/images/ct2.png')}}" alt="image" class="img-fluid">
                                                                    <p>You promised to share the song in a week. <span>6:05 AM</span></p>
                                                                </div>
                                                                <div class="date-script-content">
                                                                    <span>17 Jul, 2023</span>
                                                                </div>
                                                                <div class="image-script-content">
                                                                    <img src="{{asset('assets/front/images/ct2.png')}}" alt="image" class="img-fluid">
                                                                    <p>You shared the song on your playlist <a href="javascript:void(0)" class="blue-underline">hiphopchart 2023.</a> <span>6:05 AM</span></p>
                                                                </div>
                                                                <div class="images-left-bar-line"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingThree">
                                                        <h4 class="panel-title">
                                                            <a role="button" class="ct-third" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                                                <div class="tab-bar-flex">
                                                                    <div class="tab-bar-img-flex">
                                                                        <div class="tab-b-dg">
                                                                            <img src="{{asset('assets/front/images/play-song-btn.png')}}" alt="image" class="img-fluid">
                                                                            <div class="dream-play-btn">
                                                                                <span><i class="fa fa-play" aria-hidden="true"></i></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tab-b-dg-cont">
                                                                            <p>Dreams and Nightmares</p>
                                                                            <span>Jeff Joran</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="content-text-tbr">
                                                                        <p>"I absolutely loved it! The production is incredible, the lyrics are catchy and clever, and your flow is on point. I can't wait to hear more from you. I'm going to share your song on my playlist as soon as possible. I think everyone going to love it as much as I did Keep up the great work!"</p>
                                                                    </div>
                                                                    <div class="approved-bar">
                                                                        <span class="denied-content">Denied</span>
                                                                    </div>
                                                                </div>
                                                                <div class="personal-note">
                                                                    <span class="personal-note-anchor"><i class="fa fa-pencil" aria-hidden="true"></i> Add a personal note</span>
                                                                </div>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                        <div class="panel-body">
                                                            <div class="col-tab-inner-effect">
                                                                <div class="date-script-content">
                                                                    <span>10 Jul, 2023</span>
                                                                </div>
                                                                <div class="image-script-content">
                                                                    <img src="{{asset('assets/front/images/ct2.png')}}" alt="image" class="img-fluid">
                                                                    <p>You Listened the song. <span>5:56 AM</span></p>
                                                                </div>
                                                                <div class="image-script-content">
                                                                    <img src="{{asset('assets/front/images/ct2.png')}}" alt="image" class="img-fluid">
                                                                    <p>You Approved the song. <span>6:00 AM</span></p>
                                                                </div>
                                                                <div class="image-script-content">
                                                                    <img src="{{asset('assets/front/images/ct2.png')}}" alt="image" class="img-fluid">
                                                                    <p>You promised to share the song in a week. <span>6:05 AM</span></p>
                                                                </div>
                                                                <div class="image-script-new">
                                                                    <img src="{{asset('assets/front/images/ct2.png')}}" alt="image" class="img-fluid">
                                                                    <div class="img-ct-text">
                                                                        <p>You left the review <span>6:05 AM</span></p>
                                                                        <small>"I absolutely loved it! The production is incredible, the lyrics are catchy and clever, and your flow is on point. I can't wait to hear more from you.I'm going to share your song on my playlist as soon as possible. I think everyone going to love it as much as I did Keep up the great work!"</small>
                                                                    </div>
                                                                </div>
                                                                <div class="date-script-content">
                                                                    <span>17 Jul, 2023</span>
                                                                </div>
                                                                <div class="image-script-new">
                                                                    <img src="{{asset('assets/front/images/table-img.png')}}" alt="image" class="img-fluid">
                                                                    <div class="img-ct-text">
                                                                        <p>Milli = left a private note <span>6:05 AM</span></p>
                                                                        <small>"Lorem Ipsum is simply dummy text of the printing and typesetting industry".</small>
                                                                    </div>
                                                                </div>
                                                                <div class="date-script-content">
                                                                    <span>10 Jul, 2023</span>
                                                                </div>
                                                                <div class="image-script-content">
                                                                    <img src="{{asset('assets/front/images/ct2.png')}}" alt="image" class="img-fluid">
                                                                    <p>You promised to share the song in a week. <span>6:05 AM</span></p>
                                                                </div>
                                                                <div class="date-script-content">
                                                                    <span>17 Jul, 2023</span>
                                                                </div>
                                                                <div class="image-script-content">
                                                                    <img src="{{asset('assets/front/images/ct2.png')}}" alt="image" class="img-fluid">
                                                                    <p>You shared the song on your playlist <a href="javascript:void(0)" class="blue-underline">hiphopchart 2023.</a> <span>6:05 AM</span></p>
                                                                </div>
                                                                <div class="images-left-bar-line"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingFour">
                                                        <h4 class="panel-title">
                                                            <a role="button" class="ct-four" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                                                <div class="tab-bar-flex">
                                                                    <div class="tab-bar-img-flex">
                                                                        <div class="tab-b-dg">
                                                                            <img src="{{asset('assets/front/images/play-song-btn.png')}}" alt="image" class="img-fluid">
                                                                            <div class="dream-play-btn">
                                                                                <span><i class="fa fa-play" aria-hidden="true"></i></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tab-b-dg-cont">
                                                                            <p>Dreams and Nightmares</p>
                                                                            <span>Jeff Joran</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="content-text-tbr">
                                                                        <p>"I absolutely loved it! The production is incredible, the lyrics are catchy and clever, and your flow is on point. I can't wait to hear more from you. I'm going to share your song on my playlist as soon as possible. I think everyone going to love it as much as I did Keep up the great work!"</p>
                                                                    </div>
                                                                    <div class="approved-bar">
                                                                        <span class="denied-content">Denied</span>
                                                                    </div>
                                                                </div>
                                                                <div class="personal-note">
                                                                    <span class="personal-note-anchor"><i class="fa fa-pencil" aria-hidden="true"></i> Add a personal note</span>
                                                                </div>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                                        <div class="panel-body">
                                                            <div class="col-tab-inner-effect">
                                                                <div class="date-script-content">
                                                                    <span>10 Jul, 2023</span>
                                                                </div>
                                                                <div class="image-script-content">
                                                                    <img src="{{asset('assets/front/images/ct2.png')}}" alt="image" class="img-fluid">
                                                                    <p>You Listened the song. <span>5:56 AM</span></p>
                                                                </div>
                                                                <div class="image-script-content">
                                                                    <img src="{{asset('assets/front/images/ct2.png')}}" alt="image" class="img-fluid">
                                                                    <p>You Approved the song. <span>6:00 AM</span></p>
                                                                </div>
                                                                <div class="image-script-content">
                                                                    <img src="{{asset('assets/front/images/ct2.png')}}" alt="image" class="img-fluid">
                                                                    <p>You promised to share the song in a week. <span>6:05 AM</span></p>
                                                                </div>
                                                                <div class="image-script-new">
                                                                    <img src="{{asset('assets/front/images/ct2.png')}}" alt="image" class="img-fluid">
                                                                    <div class="img-ct-text">
                                                                        <p>You left the review <span>6:05 AM</span></p>
                                                                        <small>"I absolutely loved it! The production is incredible, the lyrics are catchy and clever, and your flow is on point. I can't wait to hear more from you.I'm going to share your song on my playlist as soon as possible. I think everyone going to love it as much as I did Keep up the great work!"</small>
                                                                    </div>
                                                                </div>
                                                                <div class="date-script-content">
                                                                    <span>17 Jul, 2023</span>
                                                                </div>
                                                                <div class="image-script-new">
                                                                    <img src="{{asset('assets/front/images/table-img.png')}}" alt="image" class="img-fluid">
                                                                    <div class="img-ct-text">
                                                                        <p>Milli = left a private note <span>6:05 AM</span></p>
                                                                        <small>"Lorem Ipsum is simply dummy text of the printing and typesetting industry".</small>
                                                                    </div>
                                                                </div>
                                                                <div class="date-script-content">
                                                                    <span>10 Jul, 2023</span>
                                                                </div>
                                                                <div class="image-script-content">
                                                                    <img src="{{asset('assets/front/images/ct2.png')}}" alt="image" class="img-fluid">
                                                                    <p>You promised to share the song in a week. <span>6:05 AM</span></p>
                                                                </div>
                                                                <div class="date-script-content">
                                                                    <span>17 Jul, 2023</span>
                                                                </div>
                                                                <div class="image-script-content">
                                                                    <img src="{{asset('assets/front/images/ct2.png')}}" alt="image" class="img-fluid">
                                                                    <p>You shared the song on your playlist <a href="javascript:void(0)" class="blue-underline">hiphopchart 2023.</a> <span>6:05 AM</span></p>
                                                                </div>
                                                                <div class="images-left-bar-line"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-cur4" role="tabpanel">
                                    <div class="expired-tabs">
                                        <div class="row expired-tab-mobile-hide">
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                                <div class="breams-box">
                                                    <img src="{{asset('assets/front/images/ft1.png')}}" alt="image" class="img-fluid">
                                                    <div class="dreams-box-content">
                                                        <a href="javascript:void(0)" class="submit-play-icon"><i class="fa fa-play" aria-hidden="true"></i></a>
                                                        <h6>Dreams and Nightmares</h6>
                                                        <p>Jeff Jordan</p>
                                                        <span class="submit-cont">Submitted 2hrs ago.</span>
                                                    </div>
                                                    <div class="cur-amt">
                                                        <p><span><img src="{{asset('assets/front/images/smc.png')}}" alt="image" class="img-fluid"></span> $0.25</p>
                                                    </div>
                                                    <div class="time-box">
                                                        <span><i class="fa fa-clock-o" aria-hidden="true"></i> 3 days</span>
                                                    </div>
                                                    <div class="skip-btn">
                                                        <a href="javascript:void(0)">Skip</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                                <div class="breams-box">
                                                    <img src="{{asset('assets/front/images/ft2.png')}}" alt="image" class="img-fluid">
                                                    <div class="dreams-box-content">
                                                        <a href="javascript:void(0)" class="submit-play-icon"><i class="fa fa-play" aria-hidden="true"></i></a>
                                                        <h6>Sad Face</h6>
                                                        <p>Crazy 8</p>
                                                        <span class="submit-cont">Submitted 2hrs ago.</span>
                                                    </div>
                                                    <div class="cur-amt">
                                                        <p><span><img src="{{asset('assets/front/images/smc.png')}}" alt="image" class="img-fluid"></span> $0.25</p>
                                                    </div>
                                                    <div class="time-box">
                                                        <span><i class="fa fa-clock-o" aria-hidden="true"></i> 3 days</span>
                                                    </div>
                                                    <div class="skip-btn">
                                                        <a href="javascript:void(0)">Skip</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                                <div class="breams-box">
                                                    <img src="{{asset('assets/front/images/ft3.png')}}" alt="image" class="img-fluid">
                                                    <div class="dreams-box-content">
                                                        <a href="javascript:void(0)" class="submit-play-icon"><i class="fa fa-play" aria-hidden="true"></i></a>
                                                        <h6>Rebirth</h6>
                                                        <p>Lucas</p>
                                                        <span class="submit-cont">Submitted 2hrs ago.</span>
                                                    </div>
                                                    <div class="cur-amt">
                                                        <p><span><img src="{{asset('assets/front/images/smc.png')}}" alt="image" class="img-fluid"></span> $0.25</p>
                                                    </div>
                                                    <div class="time-box">
                                                        <span><i class="fa fa-clock-o" aria-hidden="true"></i> 3 days</span>
                                                    </div>
                                                    <div class="skip-btn">
                                                        <a href="javascript:void(0)">Skip</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                                <div class="breams-box">
                                                    <img src="{{asset('assets/front/images/ft4.png')}}" alt="image" class="img-fluid">
                                                    <div class="dreams-box-content">
                                                        <a href="javascript:void(0)" class="submit-play-icon"><i class="fa fa-play" aria-hidden="true"></i></a>
                                                        <h6>You Owe Me</h6>
                                                        <p>Fear B.</p>
                                                        <span class="submit-cont">Submitted 2hrs ago.</span>
                                                    </div>
                                                    <div class="cur-amt">
                                                        <p><span><img src="{{asset('assets/front/images/smc.png')}}" alt="image" class="img-fluid"></span> $0.25</p>
                                                    </div>
                                                    <div class="time-box">
                                                        <span><i class="fa fa-clock-o" aria-hidden="true"></i> 3 days</span>
                                                    </div>
                                                    <div class="skip-btn">
                                                        <a href="javascript:void(0)">Skip</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="expired-tab-mobile-show">
                                            <div class="slider responsive-expired-tab-slider">
                                                <div>
                                                    <div class="breams-box">
                                                        <img src="{{asset('assets/front/images/ft1.png')}}" alt="image" class="img-fluid">
                                                        <div class="dreams-box-content">
                                                            <a href="javascript:void(0)" class="submit-play-icon"><i class="fa fa-play" aria-hidden="true"></i></a>
                                                            <h6>Dreams and Nightmares</h6>
                                                            <p>Jeff Jordan</p>
                                                            <span class="submit-cont">Submitted 2hrs ago.</span>
                                                        </div>
                                                        <div class="cur-amt">
                                                            <p><span><img src="{{asset('assets/front/images/smc.png')}}" alt="image" class="img-fluid"></span> $0.25</p>
                                                        </div>
                                                        <div class="time-box">
                                                            <span><i class="fa fa-clock-o" aria-hidden="true"></i> 3 days</span>
                                                        </div>
                                                        <div class="skip-btn">
                                                            <a href="javascript:void(0)">Skip</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="breams-box">
                                                        <img src="{{asset('assets/front/images/ft2.png')}}" alt="image" class="img-fluid">
                                                        <div class="dreams-box-content">
                                                            <a href="javascript:void(0)" class="submit-play-icon"><i class="fa fa-play" aria-hidden="true"></i></a>
                                                            <h6>Sad Face</h6>
                                                            <p>Crazy 8</p>
                                                            <span class="submit-cont">Submitted 2hrs ago.</span>
                                                        </div>
                                                        <div class="cur-amt">
                                                            <p><span><img src="{{asset('assets/front/images/smc.png')}}" alt="image" class="img-fluid"></span> $0.25</p>
                                                        </div>
                                                        <div class="time-box">
                                                            <span><i class="fa fa-clock-o" aria-hidden="true"></i> 3 days</span>
                                                        </div>
                                                        <div class="skip-btn">
                                                            <a href="javascript:void(0)">Skip</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="breams-box">
                                                        <img src="{{asset('assets/front/images/ft3.png')}}" alt="image" class="img-fluid">
                                                        <div class="dreams-box-content">
                                                            <a href="javascript:void(0)" class="submit-play-icon"><i class="fa fa-play" aria-hidden="true"></i></a>
                                                            <h6>Rebirth</h6>
                                                            <p>Lucas</p>
                                                            <span class="submit-cont">Submitted 2hrs ago.</span>
                                                        </div>
                                                        <div class="cur-amt">
                                                            <p><span><img src="{{asset('assets/front/images/smc.png')}}" alt="image" class="img-fluid"></span> $0.25</p>
                                                        </div>
                                                        <div class="time-box">
                                                            <span><i class="fa fa-clock-o" aria-hidden="true"></i> 3 days</span>
                                                        </div>
                                                        <div class="skip-btn">
                                                            <a href="javascript:void(0)">Skip</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="breams-box">
                                                        <img src="{{asset('assets/front/images/ft4.png')}}" alt="image" class="img-fluid">
                                                        <div class="dreams-box-content">
                                                            <a href="javascript:void(0)" class="submit-play-icon"><i class="fa fa-play" aria-hidden="true"></i></a>
                                                            <h6>You Owe Me</h6>
                                                            <p>Fear B.</p>
                                                            <span class="submit-cont">Submitted 2hrs ago.</span>
                                                        </div>
                                                        <div class="cur-amt">
                                                            <p><span><img src="{{asset('assets/front/images/smc.png')}}" alt="image" class="img-fluid"></span> $0.25</p>
                                                        </div>
                                                        <div class="time-box">
                                                            <span><i class="fa fa-clock-o" aria-hidden="true"></i> 3 days</span>
                                                        </div>
                                                        <div class="skip-btn">
                                                            <a href="javascript:void(0)">Skip</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CURATAR DASHBOARD SECTION END -->

    <!-- SET AVAILABILITY MODAL BEGIN -->
    <div class="modal fade" id="set-availability-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="availability-modal-content">
                        <h6>Set your availability</h6>
                        <p>When unavailable, you won't be able to receive new song
                            submissions.</p>
                    </div>
                    <form id="setScheduleForm">
                        @csrf
                        <div class="alert alert-danger alert-dismissible" style="display: none;">
                            <ul></ul>
                        </div>
                        <div class="checkboxes-selction">
                            <p class="comment-form-cookies-consent">
                                <input id="wp-comment-cookies-consent" name="availability" type="checkbox" value="0">
                                <label for="wp-comment-cookies-consent">Pause all submission activities completely.
                                </label>
                            </p>
                            <p class="comment-form-cookies-consent">
                                <input id="wp-comment-cookies-consent1" name="availability" type="checkbox" value="1">
                                <label for="wp-comment-cookies-consent1">Schedule your availability.
                                </label>
                            </p>
                            <div class="toggle-show-cls">
                                <div class="toggle-cont-text">
                                    <p>Unavailable from</p>
                                    <div class="inner-toggle-dropdown">
                                        <div class="inner-toggle-time">
                                            <select id="birthMonth" name="from_month" class="form-control">
                                                <option value="">Month</option>
                                            </select>
                                            <select id="birthDay" name="from_day" class="form-control">
                                                <option value="">Date</option>
                                            </select>
                                            <select id="birthYear" name="from_year" class="form-control">
                                                <option value="">Year</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="toggle-cont-text">
                                    <p>To (Including)</p>
                                    <div class="inner-toggle-dropdown">
                                        <div class="inner-toggle-time">
                                            <select id="birthMonth1" name="to_month" class="form-control">
                                                <option value="">Month</option>
                                            </select>
                                            <select id="birthDay1" name="to_day" class="form-control">
                                                <option value="">Date</option>
                                            </select>
                                            <select id="birthYear1" name="to_year" class="form-control">
                                                <option value="">Year</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary ava-cancel" data-dismiss="modal">Cancel</button>
                    <button onclick="saveSchedule(this)" type="button" class="btn btn-primary ava-save">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!-- SET AVAILABILITY MODAL END -->
    <!-- CURATOR DASHBOARD SONG REVIEW MODAL BEGIN -->
    <div id="test-popup" class="white-popup mfp-with-anim mfp-hide"></div>
    <!-- CURATOR DASHBOARD SONG REVIEW MODAL END -->
    <!-- CURATOR DASHBOARD MOBILE SONG REVIEW MODAL BEGIN -->
    <div id="test-popup-mobile" class="white-popup mfp-with-anim mfp-hide">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                <div class="breams-box">
                    <img src="{{asset('assets/front/images/ty1.png')}}" alt="image" class="img-fluid">
                    <div class="dreams-box-content">
                        <h6>Dreams and Nightmares</h6>
                        <p>Jeff Jordan</p>
                        <span class="submit-cont">"Your expertise matters. Please review my song and help shape its journey."</span>
                        <div class="like-dislike">
                            <ul>
                                <li><a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal-like"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                                    <div class="modal like-sec-modal fade" id="exampleModal-like" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="spotify-playlist">
                                                        <h6>Add to Playlist <a href="javascript:void(0)"><img src="{{asset('assets/front/images/spotify-green.png')}}" alt="image" class="img-fluid"></a></h6>
                                                        <select class="form-control">
                                                            <option>Select Playlist</option>
                                                            <option>Select Playlist</option>
                                                            <option>Select Playlist</option>
                                                        </select>
                                                    </div>
                                                    <div class="share-checkbox">
                                                        <h6>I will share it:</h6>
                                                        <form action="#">
                                                            <p>
                                                                <input type="radio" id="test1" name="radio-group" checked>
                                                                <label for="test1">1 Day</label>
                                                            </p>
                                                            <p>
                                                                <input type="radio" id="test2" name="radio-group">
                                                                <label for="test2">1 Week</label>
                                                            </p>
                                                            <p>
                                                                <input type="radio" id="test3" name="radio-group">
                                                                <label for="test3">1 Month</label>
                                                            </p>
                                                            <p>
                                                                <input type="radio" id="test4" name="radio-group">
                                                                <label for="test4">Custom</label>
                                                            </p>
                                                        </form>
                                                    </div>
                                                    <div class="like-textbox-area">
                                                        <p>Write a message to artist ( Optional)</p>
                                                        <textarea rows="7" cols="5" placeholder="Write a message" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">APPROVE</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="javascript:void(0)" class="red-bg-dislike" data-toggle="modal" data-target="#exampleModal-dislike"><i class="fa fa-thumbs-down" aria-hidden="true"></i></a>
                                    <div class="modal like-sec-modal fade" id="exampleModal-dislike" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="highlight-body-bg">
                                                        <p>Please share your valuable feedback in a minimum of 15 words.</p>
                                                    </div>
                                                    <div class="like-textbox-area">
                                                        <p>Feedback <span><i class="fa fa-info-circle" aria-hidden="true"></i></span></p>
                                                        <textarea rows="5" cols="5" placeholder="Write a message" class="form-control"></textarea>
                                                    </div>
                                                    <div class="optional-feedback">
                                                        <p>Feedback is about: (OPTIONAL)</p>
                                                        <div class="flex-checkbox-list">
                                                            <ul>
                                                                <li>
                                                                    <input class="styled-checkbox" id="styled-checkbox-1" type="checkbox" value="value1">
                                                                    <label for="styled-checkbox-1">Vocal performance</label>
                                                                </li>
                                                                <li>
                                                                    <input class="styled-checkbox" id="styled-checkbox-2" type="checkbox" value="value2">
                                                                    <label for="styled-checkbox-2">Delivery/flow</label>
                                                                </li>
                                                                <li>
                                                                    <input class="styled-checkbox" id="styled-checkbox-4" type="checkbox" value="value4">
                                                                    <label for="styled-checkbox-4">Mixing</label>
                                                                </li>
                                                                <li>
                                                                    <input class="styled-checkbox" id="styled-checkbox-5" type="checkbox" value="value5">
                                                                    <label for="styled-checkbox-5">Instrumental</label>
                                                                </li>
                                                            </ul>
                                                            <ul>
                                                                <li>
                                                                    <input class="styled-checkbox" id="styled-checkbox-6" type="checkbox" value="value6">
                                                                    <label for="styled-checkbox-6">Energy</label>
                                                                </li>
                                                                <li>
                                                                    <input class="styled-checkbox" id="styled-checkbox-7" type="checkbox" value="value7">
                                                                    <label for="styled-checkbox-7">Lyrics</label>
                                                                </li>
                                                                <li>
                                                                    <input class="styled-checkbox" id="styled-checkbox-8" type="checkbox" value="value8">
                                                                    <label for="styled-checkbox-8">Genre doesn’t match <span>network</span></label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary red-bg-decline" data-dismiss="modal">DECLINE</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="cur-amt">
                        <p><span><img src="{{asset('assets/front/images/smc.png')}}" alt="image" class="img-fluid"></span> $1.00</p>
                    </div>
                    <div class="time-box">
                        <span><i class="fa fa-clock-o" aria-hidden="true"></i> 3 days</span>
                    </div>
                    <div class="skip-btn">
                        <a href="javascript:void(0)">Skip</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                <div class="modal-overflow-timeline">
                    <div class="modal-right-side">
                        <div class="modal-detail">
                            <h6>Details</h6>
                        </div>
                        <div class="modal-detail-text">
                            <p>Submitted by <span>Jeffjordan</span> 1hour ago</p>
                        </div>
                    </div>
                    <div class="revenue-listing">
                        <ul>
                            <li><strong>Release date:</strong>  October 09, 2023</li>
                            <li><strong>Genres:</strong> Genres: Sad Rap/ Emo Rap,</li>
                            <li>Rap, Trap,</li>
                        </ul>
                        <ul>
                            <li><strong>Ad Revenue Permission:</strong>  Yes</li>
                            <li><strong>Explicit content:</strong> No</li>
                            <li>Lyrics: Yes, English,  <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal-dreams"><span>

<?xml version="1.0" encoding="iso-8859-1"?>
        <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
	<g>
		<path d="M495.914,189.604c-18.965-15.914-47.343-13.424-63.228,5.506l-42.695,50.523V99.129c0-12.279-5.106-24.17-14.008-32.625
			l-56.978-54.125C310.606,4.4,299.6,0.005,288.015,0.005H44.999C20.187,0.005,0,20.192,0,45.004v421.991
			c0,24.812,20.187,44.999,44.999,44.999h299.994c24.812,0,44.999-20.187,44.999-44.999v-81.961
			C391.835,382.851,501.116,253.407,501.46,253C517.447,233.948,514.969,205.592,495.914,189.604z M299.994,35.695
			c60.013,57.008,55.751,52.841,56.876,54.309h-56.876V35.695z M359.992,466.995c0,8.271-6.729,15-15,15H44.999
			c-8.271,0-15-6.729-15-15V45.004c0-8.271,6.729-15,15-15h224.995v74.998c0,8.284,6.716,15,15,15h74.998v161.129
			c-6.443,7.624-58.178,68.843-63.77,75.46c-4.467,5.324-7.682,11.711-9.296,18.47l-13.94,58.356
			c-1.319,5.526,0.596,11.324,4.948,14.976c4.356,3.656,10.399,4.529,15.607,2.272l55.05-23.862
			c4.133-1.792,7.988-4.226,11.401-7.151V466.995z M324.315,369.827l22.978,19.28l-5.11,6.052c-1.487,1.774-3.398,3.199-5.523,4.12
			l-27.524,11.931l6.971-29.178c0.538-2.253,1.609-4.382,3.064-6.116L324.315,369.827z M366.644,366.184l-22.967-19.271
			c2.33-2.757,77.698-91.943,82.91-98.11l22.919,19.231L366.644,366.184z M478.509,233.682l-9.649,11.43l-22.908-19.222
			l9.682-11.457c5.289-6.303,14.71-7.125,20.997-1.849C483.043,217.963,483.75,227.436,478.509,233.682z"/>
	</g>
</g>
<g>
	<g>
		<path d="M224.995,90.003H74.998c-8.284,0-15,6.716-15,15s6.716,15,15,15h149.997c8.284,0,15-6.716,15-15
			S233.279,90.003,224.995,90.003z"/>
	</g>
</g>
<g>
	<g>
		<path d="M314.993,181.001H74.998c-8.284,0-15,6.716-15,15s6.716,15,15,15h239.995c8.284,0,15-6.716,15-15
			S323.277,181.001,314.993,181.001z"/>
	</g>
</g>
<g>
	<g>
		<path d="M314.993,271H74.998c-8.284,0-15,6.716-15,15c0,8.284,6.716,15,15,15h239.995c8.284,0,15-6.716,15-15
			C329.993,277.715,323.277,271,314.993,271z"/>
	</g>
</g>
<g>
	<g>
		<path d="M224.995,360.998H74.998c-8.284,0-15,6.716-15,15s6.716,15,15,15h149.997c8.284,0,15-6.716,15-15
			S233.279,360.998,224.995,360.998z"/>
	</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>

                </span></a></li>
                        </ul>
                    </div>
                    <div class="modal fade" id="exampleModal-dreams" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close mfp-close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="songs-lyrics-text">
                                        <ul>
                                            <li>Ain't this what they've been waitin' for?</li>
                                            <li>You ready? Uh, uh</li>
                                            <li>I used to pray for times like this, to rhyme like this</li>
                                            <li>So I had to grind like that to shine like this</li>
                                            <li>In a matter of time I spent on some locked-up shit</li>
                                            <li>In the back of the paddy wagon, cuffs locked on wrists</li>
                                            <li>Seen my dreams unfold, nightmares come true</li>
                                            <li>It was time to marry the game and I said, "Yeah, I do."</li>
                                            <li>If you want it, you gotta see it with a clear-eyed view</li>
                                            <li>Got a shorty, she tryna bless me like I said achoo</li>
                                            <li>Like a nigga sneezed, nigga please, 'fore them triggers squeeze</li>
                                            <li>I'm gettin' cream, never let them hoes get in between</li>
                                            <li>Of what we started, lil' nigga but I'm lion-hearted</li>
                                            <li>They love me when I was stuck and they hated when I departed</li>
                                            <li>I go and get it regardless, draw it like I'm a artist</li>
                                            <li>No crawlin', went straight to walkin', with foreigns in my garages</li>
                                            <li>All foreign bitches ménagin', fuckin', suckin' and swallowin'</li>
                                            <li>Anything for a dollar, they tell me get 'em, I got 'em</li>
                                            <li>I did it without a album</li>
                                            <li>I did shit with Mariah</li>
                                            <li>Lil' nigga, I'm on fire</li>
                                            <li>Icy as a hockey rink, Philly nigga, I'm flyer</li>
                                            <li>When I bought the Rolls-Royce they thought it was leased</li>
                                            <li>Then I bought that new Ferrari, hater, rest in peace</li>
                                            <li>Hater, rest in peace, rest in peace to the parking lot</li>
                                            <li>Phantom so big, can't even fit in the parking spot</li>
                                            <li>You ain't talkin' 'bout my niggas, then what you talkin' 'bout?</li>
                                            <li>Gangstas move in silence, nigga, and I don't talk a lot</li>
                                            <li>I don't say a word, I don't say a word</li>
                                            <li>Was on my grind and now I got what I deserve, fuck nigga</li>
                                            <li>Hold up, wait a minute, y'all thought I was finished?</li>
                                            <li>When I bought that Aston Martin, y'all thought it was rented?</li>
                                            <li>Flexin' on these niggas, I'm like Popeye on his spinach</li>
                                            <li>Double M, yeah, that's my team, Rozay the captain, I'm lieutenant</li>
                                            <li>I'm the type to count a million cash then grind like I'm broke</li>
                                            <li>That Lambo my new bitch, she don't ride like my Ghost</li>
                                            <li>I'm ridin' around my city with my hand strapped on my toast</li>
                                            <li>'Cause these niggas want me dead and I gotta make it back home</li>
                                            <li>'Cause my mama need that bill money, my son need some milk</li>
                                            <li>These niggas tryna take my life, they fuck around, get killed</li>
                                            <li>You fuck around, you fuck around, you fuck around, get smoked</li>
                                            <li>'Cause these Philly niggas I brought with me don't fuck around, no joke, no</li>
                                            <li>All I know is murder, when it come to me</li>
                                            <li>I got young niggas that's rollin', I got niggas throwin' B's</li>
                                            <li>I done did the DOA's, I done did the KOD's</li>
                                            <li>Every time I'm in that bitch, I get to throwin' 30 G's</li>
                                            <li>But now I'm hangin' out that drop head, I'm ridin' down on Collins</li>
                                            <li>They let my nigga Ern back home, that young nigga be wildin'</li>
                                            <li>We young niggas, we mobbin', like Batman and we're robbin'</li>
                                            <li>This two-door Maybach with my seat all reclinin'</li>
                                            <li>I'm like, "Real nigga, what up? Real nigga, what up?"</li>
                                            <li>If you ain't about that murder game, then pussy nigga, shut up</li>
                                            <li>If you diss me in your raps I'll get yo' pussy-ass stuck up</li>
                                            <li>When you touchdown in my hood, no that tour life ain't good</li>
                                            <li>Catch me down in MIA at that Heat game on wood</li>
                                            <li>With that Puma life on my feet like that little engine I could</li>
                                            <li>Boy, I slide down on your block, bike on 12 o'clock</li>
                                            <li>And they be throwin' deuces on the same nigga they watch</li>
                                            <li>And I'm the king of my city 'cause I'm still callin' them shots</li>
                                            <li>And these lames talkin' that bullshit the same niggas that flopped</li>
                                            <li>I'm the same nigga from Berks Street with them nappy braids, that lock</li>
                                            <li>The same nigga that came up and I had to wait for my spot</li>
                                            <li>And these niggas hatin' on me, hoes waitin' on me</li>
                                            <li>Still on that hood shit, my Rolls-Royce on E</li>
                                            <li>They gon' remember me, I say remember me</li>
                                            <li>So much money, have yo' friends turn in yo' enemies</li>
                                            <li>And when there's beef I turn my enemies to memories</li>
                                            <li>With them bricks they go for 40, ain't no 10 a key</li>
                                            <li>Hold up, broke nigga turned rich, love the game like Mitch</li>
                                            <li>And if I leave, you think them pretty hoes gon' still suck my dick?</li>
                                            <li>It was somethin' about that Rollie when it first touched my wrist</li>
                                            <li>Had me feelin' like that dope boy when he first touched that brick</li>
                                            <li>I'm gone</li>
                                            <li>Woo</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-modal-content">
                        <div class="col-tab-inner-effect">
                            <div class="date-script-content">
                                <span>10 Jul, 2023</span>
                            </div>
                            <div class="image-script-content">
                                <img src="{{asset('assets/front/images/ct2.png')}}" alt="image" class="img-fluid">
                                <p>You Listened the song. <span>5:56 AM</span></p>
                            </div>
                            <div class="image-script-content">
                                <img src="{{asset('assets/front/images/ct2.png')}}" alt="image" class="img-fluid">
                                <p>You Approved the song. <span>6:00 AM</span></p>
                            </div>
                            <div class="image-script-content">
                                <img src="{{asset('assets/front/images/ct2.png')}}" alt="image" class="img-fluid">
                                <p>You promised to share the song in a week. <span>6:05 AM</span></p>
                            </div>
                            <div class="date-script-content">
                                <span>17 Jul, 2023</span>
                            </div>
                            <div class="image-script-content">
                                <img src="{{asset('assets/front/images/ct2.png')}}" alt="image" class="img-fluid">
                                <p>You shared the song on your playlist <a href="javascript:void(0)" class="blue-underline">hiphopchart 2023.</a> <span>6:05 AM</span></p>
                            </div>
                            <div class="date-script-content">
                                <span>10 Jul, 2023</span>
                            </div>
                            <div class="image-script-content">
                                <img src="{{asset('assets/front/images/ct2.png')}}" alt="image" class="img-fluid">
                                <p>You Listened the song. <span>5:56 AM</span></p>
                            </div>
                            <div class="image-script-content">
                                <img src="{{asset('assets/front/images/ct2.png')}}" alt="image" class="img-fluid">
                                <p>You Approved the song. <span>6:00 AM</span></p>
                            </div>
                            <div class="image-script-content">
                                <img src="{{asset('assets/front/images/ct2.png')}}" alt="image" class="img-fluid">
                                <p>You promised to share the song in a week. <span>6:05 AM</span></p>
                            </div>
                            <div class="date-script-content">
                                <span>17 Jul, 2023</span>
                            </div>
                            <div class="image-script-content">
                                <img src="{{asset('assets/front/images/ct2.png')}}" alt="image" class="img-fluid">
                                <p>You shared the song on your playlist <a href="javascript:void(0)" class="blue-underline">hiphopchart 2023.</a> <span>6:05 AM</span></p>
                            </div>
                            <div class="images-left-bar-line"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="playlsit-bar">
            <a href="javascript:void(0)" class="volume-icon"><i class="fa fa-volume-off" aria-hidden="true"></i></a>
        </div>
        <div class="playbar-volume-flex">
            <div class="step-back">
                <a href="javascript:void(0)"><i class="fa fa-step-backward" aria-hidden="true"></i></a>
            </div>
            <div class="middle-volume-div">
                <div class="volume-play-btn">
                    <a href="javascript:void(0)"><i class="fa fa-play" aria-hidden="true"></i></a>
                </div>
                <div class="volume-bar-flex">
                    <p>Dreams and Nightmares - Jeff Jordan</p>
                    <div class="volume-bar-inner-flex">
                        <div class="start-time">
                            <span>0:40</span>
                        </div>
                        <div class="grey-main-bar">
                            <span class="full-grey"></span>
                            <div class="half-yellow-bar">
                                <span class="half-yellow"></span>
                            </div>
                        </div>
                        <div class="start-time">
                            <span>03:08</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="step-back">
                <a href="javascript:void(0)"><i class="fa fa-step-forward" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <!-- CURATOR DASHBOARD MOBILE SONG REVIEW MODAL END -->
@endsection

@push('front-scripts')
    <script src="{{asset('assets/front/js/wow.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://rawgithub.com/dimsemenov/Magnific-Popup/master/dist/jquery.magnific-popup.js?v=0.8.9"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.4.2/jquery.twbsPagination.min.js"></script>
    <script>
        $(function (){
            new WOW().init();
        });

        /*ACCORDIAN SCRIPT BEGIN*/
        $('.panel-collapse').on('show.bs.collapse', function () {
            $(this).siblings('.panel-heading').addClass('active');
        });
        $('.panel-collapse').on('hide.bs.collapse', function () {
            $(this).siblings('.panel-heading').removeClass('active');
        });
        /*ACCORDIAN SCRIPT END*/

        // SETTING PROFILE SCRIPT BEGIN
        function loadFile(event) {
            var image = document.getElementById("output");
            image.src = URL.createObjectURL(event.target.files[0]);
        };
        // SETTING PROFILE SCRIPT END

        // MODAL CHECKBOX SCRIPT BEGIN
        $(document).ready(function() {
            $(".comment-form-cookies-consent input[type='checkbox']").click(function() {
                $(this).closest(".checkboxes-selction").find("input[type='checkbox']").not(this).prop("checked", false);
            });
        });
        // MODAL CHECKBOX SCRIPT END
        // DATE, MONTH & YEAR DROPDOWN SCRIPT BEGIN
        for (var i = 1; i <= 31; i++) {
            $('#birthDay').append('<option value="' + i + '">' + i + '</option>');
        }
        for (var i = 1; i <= 12; i++) {
            $('#birthMonth').append('<option value="' + i + '">' + i + '</option>');
        }
        var currentTime = new Date();
        var year = currentTime.getFullYear();
        for (var i = year; i >= 1900; i--) {
            $('#birthYear').append('<option value="' + i + '">' + i + '</option>');
        }

        for (var i = 1; i <= 31; i++) {
            $('#birthDay1').append('<option value="' + i + '">' + i + '</option>');
        }
        for (var i = 1; i <= 12; i++) {
            $('#birthMonth1').append('<option value="' + i + '">' + i + '</option>');
        }
        var currentTime = new Date();
        var year = currentTime.getFullYear();
        for (var i = year; i >= 1900; i--) {
            $('#birthYear1').append('<option value="' + i + '">' + i + '</option>');
        }
        // DATE, MONTH & YEAR DROPDOWN SCRIPT END
        // SET AVAILABILITY TOGGLE HIDE AND SHOW SCRIPT BEGIN
        document.addEventListener("DOMContentLoaded", function () {
            const toggleButton = document.getElementById("wp-comment-cookies-consent1");
            const toggleElement = document.querySelector(".toggle-show-cls");
            toggleButton.addEventListener("click", function () {
                if (toggleElement.style.display === "block") {
                    toggleElement.style.display = "none";
                } else {
                    toggleElement.style.display = "block";
                }
            });
            document.querySelectorAll('input[type="checkbox"]').forEach(function (checkbox) {
                if (checkbox !== toggleButton) {
                    checkbox.addEventListener("click", function () {
                        toggleElement.style.display = "none";
                    });
                }
            });
        });
        // SET AVAILABILITY TOGGLE HIDE AND SHOW SCRIPT END
        // PLAY BUTTON POPUP SCRIPT BEGIN
        $('#inline-popups').magnificPopup({
            delegate: 'a',
            removalDelay: 500,
            callbacks: {
                beforeOpen: function() {
                    let songId = this.st.el.attr('data-song-id');
                    axios.get(`{{route('get.song.detail')}}/${songId}`)
                        .then(res => {
                            $('#test-popup').html(res.data.data);
                            this.st.mainClass = this.st.el.attr('data-effect');
                            return false;
                        })
                        .catch(error => {
                            console.log('errors',error.response.data.errors);
                            return false;
                        });
                }
            },
            midClick: true
        });
        // PLAY BUTTON POPUP SCRIPT END
        // PLAY BUTTON POPUP MOBILE SCRIPT BEGIN
        $('#inline-popup-mobile').magnificPopup({
            delegate: 'a',
            removalDelay: 500,
            callbacks: {
                beforeOpen: function() {
                    this.st.mainClass = this.st.el.attr('data-effect');
                }
            },
            midClick: true
        });
        // PLAY BUTTON POPUP MOBILE SCRIPT END
        // CURATOR DASHBOARD MOBILE SLIDER SCRIPT BEGIN
        $('.curator-dashboard-slider-responsive').slick({
            dots: true,
            arrows: false,
            autoplay: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
        // CURATOR DASHBOARD MOBILE SLIDER SCRIPT END
        // PAGINATION SCRIPT BEGIN
        $('#pagination-demo').twbsPagination({
            totalPages: 10,
            visiblePages: 4,
            onPageClick: function (event, page) {
                $('#page-content');
            }
        });
        // PAGINATION SCRIPT END
        // EXPIRED TABS MOBILE SCRIPT BEGIN
        $('.responsive-expired-tab-slider').slick({
            dots: true,
            infinite: true,
            arrows: false,
            autoplay: true,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
        // EXPIRED TABS MOBILE SCRIPT END

        let index = 1;

        const on = (listener, query, fn) => {
            document.querySelectorAll(query).forEach(item => {
                item.addEventListener(listener, el => {
                    fn(el);
                })
            })
        }

        on('click', '.selectBtn', item => {
            const next = item.target.nextElementSibling;
            next.classList.toggle('toggle');
            next.style.zIndex = index++;
        });
        on('click', '.option', item => {
            item.target.parentElement.classList.remove('toggle');

            const parent = item.target.closest('.select').children[0];
            parent.setAttribute('data-type', item.target.getAttribute('data-type'));
            parent.innerText = item.target.innerText;
        });

        function playAudio(songId){
            document.getElementById('new-audio').play();
            axios.get(`{{route('song.listening.activity')}}/${songId}`)
                .then(res => {
                    notifyUser(res.data.msg,res.data.status,3000);
                    if (res.data.status=='success') {
                        $('.data--activities').append(res.data.data);
                    }
                })
                .catch(error => {
                    console.log('errors',error.response.data.errors);
                    return false;
                });
        }

        function saveSongActivityUp(input) {
            $(input).attr('disabled',false);
            $('.alert-dismissible').hide();
            $('.alert-dismissible ul').empty();
            axios.post("{{route('save.song.activity.up')}}", $('form#songActivityUpForm').serialize())
                .then(res => {
                    notifyUser(res.data.msg,res.data.status,3000);
                    if (res.data.status=='success') {
                        $('.data--activities').append(res.data.data);
                        $('#test-popup #exampleModal-like').modal('hide');
                    }
                    $(input).attr('disabled',false);
                    return false;
                })
                .catch(error => {
                    $.each(error.response.data.errors, function (k, v) {
                        $('form#songActivityUpForm .alert-dismissible ul').append(`<li>${v[0]}</li>`);
                    });
                    $('form#songActivityUpForm .alert-dismissible').show();
                    $(input).attr('disabled',false);
                    return false;
                });
        }

        function saveSongActivityDown(input) {
            $(input).attr('disabled',false);
            $('.alert-dismissible').hide();
            $('.alert-dismissible ul').empty();
            axios.post("{{route('save.song.activity.down')}}", $('form#songActivityDownForm').serialize())
                .then(res => {
                    notifyUser(res.data.msg,res.data.status,3000);
                    if (res.data.status=='success') {
                        $('.data--activities').append(res.data.data);
                        $('#test-popup #exampleModal-dislike').modal('hide');
                    }
                    $(input).attr('disabled',false);
                    return false;
                })
                .catch(error => {
                    $.each(error.response.data.errors, function (k, v) {
                        $('form#songActivityDownForm .alert-dismissible ul').append(`<li>${v[0]}</li>`);
                    });
                    $('form#songActivityDownForm .alert-dismissible').show();
                    $(input).attr('disabled',false);
                    return false;
                });
        }
    </script>

    <script>
        function saveSchedule(input) {
            $(input).attr('disabled',false);
            $('.alert-dismissible').hide();
            $('.alert-dismissible ul').empty();
            axios.post("{{route('save.availability')}}", $('form#setScheduleForm').serialize())
                .then(res => {
                    notifyUser(res.data.msg,res.data.status,3000);
                    if (res.data.status=='success') {
                        setTimeout(function () {
                            location.reload();
                        },3000);
                    }
                    $(input).attr('disabled',false);
                    return false;
                })
                .catch(error => {
                    $.each(error.response.data.errors, function (k, v) {
                        $('form#setScheduleForm .alert-dismissible ul').append(`<li>${v[0]}</li>`);
                    });
                    $('form#setScheduleForm .alert-dismissible').show();
                    $(input).attr('disabled',false);
                    return false;
                });
        }

        function removeSchedule(input) {
            if(confirm('Are you sure you want to remove availability?')) {
                $(input).attr('disabled',false);
                axios.get("{{route('remove.availability')}}")
                    .then(res => {
                        notifyUser(res.data.msg,res.data.status,3000);
                        if (res.data.status=='success') {
                            setTimeout(function () {
                                location.reload();
                            },3000);
                        }
                        $(input).attr('disabled',false);
                        return false;
                    })
                    .catch(error => {
                        notifyUser('There is something wrong*','warning',3000);
                        $(input).attr('disabled',false);
                        return false;
                    });
            }
            return;
        }
    </script>
@endpush