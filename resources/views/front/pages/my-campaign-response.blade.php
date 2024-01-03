@extends('front.layouts.master', ['bodyClass' => 'label-bg-col', 'headerClass' => 'header how-it-work-header', 'fullFooter' => true])

@section('title', 'Curator Club - List Of Curators')
@push('front-styles')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
@section('content')
    <section class="curator-dashboard-sec artist-song-dashboard camp-art-res">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="cur-dashboard-left-side">
                        <div class="cur-mike-flex">
                            <div class="cur-mike">
                                <span><img src="{{$user->profile_image}}" alt="image" class="img-fluid"></span>
                                <h6>{{$user->display_name}}</h6>
                            </div>
                        </div>
                        <div class="side-listing">
                            <a href="javascript:void(0)" class="song-cont active"><i class="fa fa-music" aria-hidden="true"></i> Songs</a>
                        </div>
                        <div class="side-listing">
                            <a href="{{route('user.upload.song.curator')}}" class="compaign-cont"><i class="fa fa-volume-up" aria-hidden="true"></i> Start a new campaign</a>
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
                        <div class="responses-bg-flex">
                            <a href="upload-song-curator" class="edit-upload-pencil">Edit upload <i class="fa fa-pencil" aria-hidden="true"></i></a>
                            <div class="response-playicon">
                                <img src="{{asset('storage/assets/images/cover-images/'.$myCampaign->getCuratorCampaignDetail->cover_image)}}" style="height: 288px;" alt="image" class="img-fluid">
                                <div class="response-playicon-btn">
                                    <a href="javascript:void(0)"><i class="fa fa-play" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="responses-inner-flex">
                                <div class="responses-avatr-flex">
                                    <div class="response-avatar-img">
                                        <img src="{{$user->profile_image}}" alt="image" class="img-fluid">
                                    </div>
                                    <div class="responses-avatar-content">
                                        <h6>{{$myCampaign->getCuratorCampaignDetail->track_title}}</h6>
                                        <p>{{$myCampaign->getCuratorCampaignDetail->artist_name}}</p>
                                    </div>
                                </div>
                                <div class="responses-avatr-flex">
                                    <div class="response-avatar-img">
                                        <img src="{{asset('assets/front/images/cal1.png')}}" alt="image" class="img-fluid">
                                    </div>
                                    <div class="responses-avatar-content">
                                        <span>Release type</span>
                                        <p>{{\Carbon\Carbon::parse($myCampaign->getCuratorCampaignDetail->release_date)->format('M d,Y')}}</p>
                                    </div>
                                </div>
                                <div class="responses-avatr-flex">
                                    <div class="response-avatar-img">
                                        <img src="{{asset('assets/front/images/cal2.png')}}" alt="image" class="img-fluid">
                                    </div>
                                    <div class="responses-avatar-content">
                                        <span>Trak link</span>
                                        <a href="{{$myCampaign->getCuratorCampaignDetail->link}}">{{$myCampaign->getCuratorCampaignDetail->link_type}}</a>
                                    </div>
                                </div>
                                <div class="responses-avatr-flex">
                                    <div class="response-avatar-img">
                                        <img src="{{asset('assets/front/images/cal3.png')}}" alt="image" class="img-fluid">
                                    </div>
                                    <div class="responses-avatar-content">
                                        <span>Release type</span>
                                        <p>{{$myCampaign->getCuratorCampaignDetail->release_type}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="responses-tab">
                            <div class="dashboard-new-tabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#tabs-cur3" role="tab"><small>Repsonses</small> <span>{{count($myCampaign->userCampaignResponse)}}</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabs-cur2" role="tab"><small>Approved</small> <span>{{count($myCampaign->userCampaignApprove)}}</span></a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tabs-cur3" role="tabpanel">
                                        <div class="previously-reviewed-tabs">
                                            <div class="wrapper center-block">
                                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                   @if($myCampaign->userCampaignResponse)
                                                       @foreach($myCampaign->userCampaignResponse as $userResponse)
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading" role="tab" id="headingTwo">
                                                                    <h4 class="panel-title">
                                                                        <a role="button" class="ct-second" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                                            <div class="tab-bar-flex">
                                                                                <div class="tab-bar-img-flex">
                                                                                    <div class="tab-b-dg">
                                                                                        <img src="{{$userResponse->user->profile_image}}" alt="image" class="img-fluid">
                                                                                    </div>
                                                                                    <div class="tab-b-dg-cont">
                                                                                        <p>{{$userResponse->user->display_name}}</p>
                                                                                        <span>Spotify Playlister |  {{$userResponse->user->getCountry->country_name}}</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="content-text-tbr">
                                                                                    <p>{{$userResponse->listing_message}}</p>
                                                                                </div>
                                                                                <div class="approved-bar">
                                                                                    <span>{{$userResponse->status}}</span>
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
                                                                                <span>{{\Carbon\Carbon::parse($userResponse->created_at)->format('M d,Y')}}</span>
                                                                            </div>
                                                                            <div class="image-script-content">
                                                                                <img src="{{$userResponse->user->profile_image}}" alt="image" class="img-fluid">
                                                                                <p>You Listened the song. <span>{{\Carbon\Carbon::parse($userResponse->updated_at)->format('H:i:s')}}</span></p>
                                                                            </div>
                                                                            <div class="image-script-content">
                                                                                <img src="{{$userResponse->user->profile_image}}" alt="image" class="img-fluid">
                                                                                <p>You Approved the song. <span>{{\Carbon\Carbon::parse($userResponse->updated_at)->format('H:i:s')}}</span></p>
                                                                            </div>
                                                                            <div class="image-script-content">
                                                                                <img src="{{$userResponse->user->profile_image}}" alt="image" class="img-fluid">
                                                                                <p>You promised to share the song in a week. <span>{{\Carbon\Carbon::parse($userResponse->created_at)->format('H:i:s')}}</span></p>
                                                                            </div>
                                                                            <div class="image-script-new">
                                                                                <img src="{{$userResponse->user->profile_image}}" alt="image" class="img-fluid">
                                                                                <div class="img-ct-text">
                                                                                    <p>You left the review <span>{{\Carbon\Carbon::parse($userResponse->created_at)->format('H:i:s')}}</span></p>
                                                                                    <small>{{$userResponse->listing_message}}</small>
                                                                                </div>
                                                                            </div>
                                                                            <div class="date-script-content">
                                                                                <span>{{\Carbon\Carbon::parse($userResponse->created_at)->format('M d,Y')}}</span>
                                                                            </div>
                                                                            <div class="image-script-new">
                                                                                <img src="{{$userResponse->user->profile_image}}" alt="image" class="img-fluid">
                                                                                <div class="img-ct-text">
                                                                                    <p>Milli = left a private note <span>{{\Carbon\Carbon::parse($userResponse->created_at)->format('H:i:s')}}</span></p>
                                                                                    <small>{{$userResponse->feedback}}.</small>
                                                                                </div>
                                                                            </div>
                                                                            <div class="date-script-content">
                                                                                <span>{{\Carbon\Carbon::parse($userResponse->updated_at)->format('M d,Y')}}</span>
                                                                            </div>
                                                                            <div class="image-script-content">
                                                                                <img src="{{$userResponse->user->profile_image}}" alt="image" class="img-fluid">
                                                                                <p>You promised to share the song in a week. <span>{{\Carbon\Carbon::parse($userResponse->created_at)->format('H:i:s')}}</span></p>
                                                                            </div>
                                                                            <div class="date-script-content">
                                                                                <span>{{\Carbon\Carbon::parse($userResponse->created_at)->format('M d,Y')}}</span>
                                                                            </div>
                                                                            <div class="image-script-content">
                                                                                <img src="{{$userResponse->user->profile_image}}" alt="image" class="img-fluid">
                                                                                <p>You shared the song on your playlist <a href="javascript:void(0)" class="hiphop-cart">hiphopchart
                                                                                    {{\Carbon\Carbon::parse($userResponse->created_at)->format('Y')}}.</a> <span>{{\Carbon\Carbon::parse($userResponse->created_at)->format('H:i:s')}}</span></p>
                                                                            </div>
                                                                            <div class="images-left-bar-line"></div>
                                                                            <div class="rating-thumbs-sign">
                                                                                <div class="raating-thumbs-text">
                                                                                    <p>Rate your experience with {{$user->display_name}} <span><i class="fa fa-info-circle" aria-hidden="true"></i></span></p>
                                                                                </div>
                                                                                <div class="rating-thumbs-content">
                                                                                    <div class="rate">
                                                                                        <input type="radio" id="star5" name="rate" value="5" />
                                                                                        <label for="star5" title="text"></label>
                                                                                        <input type="radio" id="star4" name="rate" value="4" />
                                                                                        <label for="star4" title="text"></label>
                                                                                        <input type="radio" id="star3" name="rate" value="3" />
                                                                                        <label for="star3" title="text"></label>
                                                                                        <input type="radio" id="star2" name="rate" value="2" />
                                                                                        <label for="star2" title="text"></label>
                                                                                        <input type="radio" id="star1" name="rate" value="1" />
                                                                                        <label for="star1" title="text"></label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                       @endforeach
                                                    @else
                                                       <p>No record found</p>
                                                   @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabs-cur2" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-12">
                                                <div class="table-data-tab">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <tbody>
                                                            @if($myCampaign->userCampaignApprove)
                                                                @foreach($myCampaign->userCampaignApprove as $userApprove)
                                                                    <tr>
                                                                        <td class="left-bdr">
                                                                            <div class="table-data-flex">
                                                                                <div class="table-data-img">
                                                                                    <img src="{{$userApprove->user->profile_image}}" alt="image" class="img-fluid">
                                                                                </div>
                                                                                <div class="table-data-text">
                                                                                    <p>{{$userApprove->user->display_name}}</p>
                                                                                    <span>Spotify Playlister |  {{$userApprove->user->getCountry->country_name}}</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="table-data-field">
                                                                                <p>Date</p>
                                                                                <span>{{\Carbon\Carbon::parse(!empty($userApprove->will_share_date)?$userApprove->will_share_date:$userApprove->created_at)->format('M d,Y')}}</span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="table-data-field">
                                                                                <p>Status</p>
                                                                                <span>{{$userApprove->status}}</span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="table-data-field">
                                                                                <p>Shared on</p>
                                                                                <span><img src="{{asset('assets/front/images/spotify.png')}}" alt="image" class="img-fluid"> Spotify</span>
                                                                            </div>
                                                                        </td>
                                                                        <td class="right-bdr">
                                                                            <div class="table-data-field">
                                                                                <div class="dropdown">
                                                                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                                                    </button>
                                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                                        <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                                                                        <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            @else
                                                            @endif

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                                                <div class="submission-right-box">
                                                    <p>Total Share <span class="pull-right submission-box-span">0</span></p>
                                                    <ul>
                                                        <li><img src="{{asset('assets/front/images/spotify.png')}}" alt="image" class="img-fluid"> Spotify <span class="pull-right submission-box-inner-span">0</span></li>
                                                        <li><img src="{{asset('assets/front/images/youtube-box.png')}}" alt="image" class="img-fluid"> Youtube <span class="pull-right submission-box-inner-span">0</span></li>
                                                        <li><img src="{{asset('assets/front/images/blog-box.png')}}" alt="image" class="img-fluid"> Blogs <span class="pull-right submission-box-inner-span">0</span></li>
                                                        <li><img src="{{asset('assets/front/images/tiktok-box.png')}}" alt="image" class="img-fluid"> Tiktok <span class="pull-right submission-box-inner-span">0</span></li>
                                                        <li><img src="{{asset('assets/front/images/instagram-box.png')}}" alt="image" class="img-fluid"> Instagram <span class="pull-right submission-box-inner-span">0</span></li>
                                                        <li><img src="{{asset('assets/front/images/twitter-box.png')}}" alt="image" class="img-fluid"> Twitter <span class="pull-right submission-box-inner-span">0</span></li>
                                                        <li><img src="{{asset('assets/front/images/soundcloud-box.png')}}" alt="image" class="img-fluid"> SoundCloud <span class="pull-right submission-box-inner-span">0</span></li>
                                                    </ul>
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
@endsection

@push('front-scripts')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('assets/front/js/wow.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://rawgithub.com/dimsemenov/Magnific-Popup/master/dist/jquery.magnific-popup.js?v=0.8.9"></script>
    <script>
        function showLoaderAdmin(){
            showLoader();
            setTimeout(function () {
                $('.tr-first-text-toggle').hide()
                $('.tr-second-text-toggle').hide()
                hideLoader();
            },3000)
        }

        function showAlert(){
            notifyUser('It appears that you do not have sufficient funds available for withdrawal.','warning',3000)
        }
        /*ACCORDIAN SCRIPT BEGIN*/
        $('.panel-collapse').on('show.bs.collapse', function () {
            $(this).siblings('.panel-heading').addClass('active');
        });
        $('.panel-collapse').on('hide.bs.collapse', function () {
            $(this).siblings('.panel-heading').removeClass('active');
        });
        /*ACCORDIAN SCRIPT END*/

        // ACCORDIAN TAB CONTENT & EDIT EFFECT SCRIPT BEGIN
        $(document).ready(function() {
            $(".panel-heading a").click(function(event) {
                event.preventDefault();
                var panel = $(this).closest(".panel");
                var contentTextTbr = panel.find(".content-text-tbr");
                var personalNote = panel.find(".personal-note");
                contentTextTbr.toggleClass("move-up");
                personalNote.toggleClass("move-down");
            });
        });
        // ACCORDIAN TAB CONTENT & EDIT EFFECT SCRIPT END
        // THUMBS UP & THUMBS DOWN SCRIPT BEGIN
        const thumbsUpIcon = document.querySelector('.thumbs-up');
        const thumbsDownIcon = document.querySelector('.thumbs-down');
        thumbsUpIcon.addEventListener('click', () => {
            thumbsUpIcon.querySelector('i').classList.add('clicked');
            thumbsDownIcon.querySelector('i').classList.remove('clicked');
        });
        thumbsDownIcon.addEventListener('click', () => {
            thumbsDownIcon.querySelector('i').classList.add('clicked');
            thumbsUpIcon.querySelector('i').classList.remove('clicked');
        });
        // THUMBS UP & THUMBS DOWN SCRIPT END
    </script>
@endpush