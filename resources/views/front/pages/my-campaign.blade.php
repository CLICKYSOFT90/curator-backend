@extends('front.layouts.master', ['bodyClass' => 'label-bg-col', 'headerClass' => 'header how-it-work-header', 'fullFooter' => true])

@section('title', 'Curator Club - List Of Curators')
@push('front-styles')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
@section('content')
    <section class="curator-dashboard-sec artist-song-dashboard">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="cur-dashboard-left-side">
                        <div class="cur-mike-flex">
                            <div class="cur-mike">
                                <span><img src="{{auth()->user()->profile_image}}" alt="image" class="img-fluid"></span>
                                <h6>{{auth()->user()->display_name}}</h6>
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
                        <div class="songs-bar">
                            <h6><i class="fa fa-music" aria-hidden="true"></i> Songs</h6>
                        </div>
                        <div class="row campaign-artist-row">
                            @if(count($myCampaigns) > 0)
                                @foreach($myCampaigns as $myCampaign)
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                        <div class="artist-song-submission">
                                            <div class="artist-submission-flex">
                                                <div class="artist-submission-content">
                                                    <div class="image-submission-flex">
                                                        <div class="song-title-img">
                                                            <img src="{{asset('storage/assets/images/cover-images/'.$myCampaign->getCuratorCampaignDetail->cover_image)}}" alt="image" class="img-fluid">
                                                            <div class="song-title-btn-play">
                                                                <a href="{{route('my.campaign.responses',[$myCampaign->id])}}"><i class="fa fa-play" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="title-submission">
                                                        <h6>{{$myCampaign->getCuratorCampaignDetail->track_title}}</h6>
                                                        <p>{{$myCampaign->getCuratorCampaignDetail->artist_name}}</p>
                                                        <a href="upload-song-curator"><i class="fa fa-pencil" aria-hidden="true"></i> Edit this song</a>
                                                    </div>
                                                </div>
                                                <div class="artist-submission-btn">
                                                    <a href="choose-curators">Submit</a>
                                                </div>
                                            </div>
                                            <div class="submit-play-box">
                                                <div class="submit-box-artist">
                                                    <p>Responses</p>
                                                    <span>{{$myCampaign->user_campaign_response_count}}</span>
                                                </div>
                                                <div class="submit-box-artist">
                                                    <p>Approved</p>
                                                    <span>{{$myCampaign->user_campaign_approve_count}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p>no record found</p>
                            @endif

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


        // TOGGLE DROPDOWN OPTION SCRIPT BEGIN
        $(document).ready(function() {
            $('.tr-first-toggle a').click(function(e) {
                e.preventDefault();
                var $trBoxText = $('.tr-first-text-toggle');
                if ($trBoxText.is(':visible')) {
                    $trBoxText.addClass('');
                    setTimeout(function() {
                        $trBoxText.removeClass('').hide();
                    }, 500);
                } else {
                    $trBoxText.show().addClass('');
                    setTimeout(function() {
                        $trBoxText.removeClass('');
                    }, 500);
                }
            });

            $('.tr-second-toggle a').click(function(e) {
                e.preventDefault();
                var $trBoxText = $('.tr-second-text-toggle');
                if ($trBoxText.is(':visible')) {
                    $trBoxText.addClass('');
                    setTimeout(function() {
                        $trBoxText.removeClass('').hide();
                    }, 500);
                } else {
                    $trBoxText.show().addClass('');
                    setTimeout(function() {
                        $trBoxText.removeClass('');
                    }, 500);
                }
            });

            $(".tr-first-box").on("click", function() {
                const spanElement = $(this).find("i");
                spanElement.toggleClass("rotate-180");
            });
        });
    </script>
@endpush