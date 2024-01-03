<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
        <div class="breams-box">
            <img src="{{asset('assets/front/songs/cover/'.$song->cover_image)}}" alt="{{$song->track_title}}" class="img-fluid">
            <div class="dreams-box-content">
                <h6>{{$song->track_title}}</h6>
                <p>{{$song->artist_name}}</p>
                <span class="submit-cont">"{{substr($song->pitch,0,20)}}..."</span>
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
                                            <form id="songActivityUpForm">
                                                <div class="alert alert-danger alert-dismissible" style="display: none;">
                                                    <ul></ul>
                                                </div>
                                                @csrf
                                                <input type="hidden" name="song_id" value="{{$song->id}}">
                                                <input type="hidden" name="song_event" value="1">
                                                <div class="spotify-playlist">
                                                    <h6>Add to Playlist <a href="javascript:void(0)"><img src="{{asset('assets/front/images/spotify-green.png')}}" alt="image" class="img-fluid"></a></h6>
                                                    <select name="playlist" class="form-control">
                                                        <option value=""> -- Select Playlist -- </option>
                                                        @foreach($playList as $val)
                                                            <option value="{{$val}}">{{$val}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="share-checkbox">
                                                    <h6>I will share it:</h6>
                                                    <p>
                                                        <input type="radio" id="test1" name="share" value="Day" checked>
                                                        <label for="test1">1 Day</label>
                                                    </p>
                                                    <p>
                                                        <input type="radio" id="test2" name="share" value="Week">
                                                        <label for="test2">1 Week</label>
                                                    </p>
                                                    <p>
                                                        <input type="radio" id="test3" name="share" value="Month">
                                                        <label for="test3">1 Month</label>
                                                    </p>
                                                    <p>
                                                        <input type="radio" id="test4" name="share" value="Custom">
                                                        <label for="test4">Custom</label>
                                                    </p>
                                                </div>
                                                <input type="date" name="share_date" class="form-control">
                                                <div class="like-textbox-area">
                                                    <p>Write a message to artist ( Optional)</p>
                                                    <textarea rows="7" cols="5" name="feedback" placeholder="Write a message" class="form-control"></textarea>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button onclick="saveSongActivityUp(this)" type="button" class="btn btn-secondary">APPROVE</button>
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
                                            <form id="songActivityDownForm">
                                                <div class="alert alert-danger alert-dismissible" style="display: none;">
                                                    <ul></ul>
                                                </div>
                                                @csrf
                                                <input type="hidden" name="song_id" value="{{$song->id}}">
                                                <input type="hidden" name="song_event" value="2">
                                                <div class="highlight-body-bg">
                                                    <p>Please share your valuable feedback in a minimum of 15 words.</p>
                                                </div>
                                                <div class="like-textbox-area">
                                                    <p>Feedback <span><i class="fa fa-info-circle" aria-hidden="true"></i></span></p>
                                                    <textarea rows="5" cols="5" name="feedback" placeholder="Write a message" class="form-control"></textarea>
                                                </div>
                                                <div class="optional-feedback">
                                                    <p>Feedback is about: (OPTIONAL)</p>
                                                    <div class="flex-checkbox-list">
                                                        <ul>
                                                            <li>
                                                                <input name="about[]" class="styled-checkbox" id="styled-checkbox-1" type="checkbox" value="Vocal performance">
                                                                <label for="styled-checkbox-1">Vocal performance</label>
                                                            </li>
                                                            <li>
                                                                <input name="about[]" class="styled-checkbox" id="styled-checkbox-2" type="checkbox" value="Delivery/flow">
                                                                <label for="styled-checkbox-2">Delivery/flow</label>
                                                            </li>
                                                            <li>
                                                                <input name="about[]" class="styled-checkbox" id="styled-checkbox-4" type="checkbox" value="Mixing">
                                                                <label for="styled-checkbox-4">Mixing</label>
                                                            </li>
                                                            <li>
                                                                <input name="about[]" class="styled-checkbox" id="styled-checkbox-5" type="checkbox" value="Instrumental">
                                                                <label for="styled-checkbox-5">Instrumental</label>
                                                            </li>
                                                        </ul>
                                                        <ul>
                                                            <li>
                                                                <input name="about[]" class="styled-checkbox" id="styled-checkbox-6" type="checkbox" value="Energy">
                                                                <label for="styled-checkbox-6">Energy</label>
                                                            </li>
                                                            <li>
                                                                <input name="about[]" class="styled-checkbox" id="styled-checkbox-7" type="checkbox" value="Lyrics">
                                                                <label for="styled-checkbox-7">Lyrics</label>
                                                            </li>
                                                            <li>
                                                                <input name="about[]" class="styled-checkbox" id="styled-checkbox-8" type="checkbox" value="Genre does not match network</span>">
                                                                <label for="styled-checkbox-8">Genre does not match network</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button onclick="saveSongActivityDown(this)" type="button" class="btn btn-secondary red-bg-decline">DECLINE</button>
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
                    <li><strong>Release date:</strong> {{date('F d, Y',strtotime($song->released_date))}}</li>
                    <li><strong>Genres:</strong> Genres: Sad Rap/ Emo Rap,</li>
                    <li>Rap, Trap,</li>
                </ul>
                <ul>
                    <li><strong>Ad Revenue Permission:</strong> {{($song->permission_youtubers==1) ? 'Yes' : 'No'}}</li>
                    <li><strong>Explicit content:</strong> {{($song->is_explicit==1) ? 'Yes' : 'No'}}</li>
                    <li>Lyrics: {{($song->has_lyrics==1) ? 'Yes' : 'No'}}  <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal-dreams"><span>

<?xml version="1.0" encoding="iso-8859-1"?>
<!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g><g><path d="M495.914,189.604c-18.965-15.914-47.343-13.424-63.228,5.506l-42.695,50.523V99.129c0-12.279-5.106-24.17-14.008-32.625l-56.978-54.125C310.606,4.4,299.6,0.005,288.015,0.005H44.999C20.187,0.005,0,20.192,0,45.004v421.991c0,24.812,20.187,44.999,44.999,44.999h299.994c24.812,0,44.999-20.187,44.999-44.999v-81.961C391.835,382.851,501.116,253.407,501.46,253C517.447,233.948,514.969,205.592,495.914,189.604z M299.994,35.695c60.013,57.008,55.751,52.841,56.876,54.309h-56.876V35.695z M359.992,466.995c0,8.271-6.729,15-15,15H44.999c-8.271,0-15-6.729-15-15V45.004c0-8.271,6.729-15,15-15h224.995v74.998c0,8.284,6.716,15,15,15h74.998v161.129c-6.443,7.624-58.178,68.843-63.77,75.46c-4.467,5.324-7.682,11.711-9.296,18.47l-13.94,58.356c-1.319,5.526,0.596,11.324,4.948,14.976c4.356,3.656,10.399,4.529,15.607,2.272l55.05-23.862c4.133-1.792,7.988-4.226,11.401-7.151V466.995z M324.315,369.827l22.978,19.28l-5.11,6.052c-1.487,1.774-3.398,3.199-5.523,4.12l-27.524,11.931l6.971-29.178c0.538-2.253,1.609-4.382,3.064-6.116L324.315,369.827z M366.644,366.184l-22.967-19.271c2.33-2.757,77.698-91.943,82.91-98.11l22.919,19.231L366.644,366.184z M478.509,233.682l-9.649,11.43l-22.908-19.222l9.682-11.457c5.289-6.303,14.71-7.125,20.997-1.849C483.043,217.963,483.75,227.436,478.509,233.682z"/></g>
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
                            <div class="songs-lyrics-text song-lyrics-new">
                                {!! $song->lyrics !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="timeline-modal-content">
                <div class="col-tab-inner-effect data--activities">
{{--                    @foreach($song->songActivities as $val)--}}
{{--                        <div class="image-script-content">--}}
{{--                            <img src="{{asset('assets/front/images/profile-images/'.$val->getUser->profile_image)}}" alt="{{$val->getUser->full_name}}" width="48" height="48">--}}
{{--                            <p>{{$val->message}} <span>{{date('F d, Y h:i A', strtotime($song->created_at))}}</span></p>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
                    <div class="images-left-bar-line"></div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--<div class="playlsit-bar">--}}
{{--    <a href="javascript:void(0)" class="volume-icon"><i class="fa fa-volume-off" aria-hidden="true"></i></a>--}}
{{--</div>--}}
<div class="playbar-volume-flex">
    <div class="step-back">
        <a href="javascript:void(0)"><i class="fa fa-step-backward" aria-hidden="true"></i></a>
    </div>
    <div class="middle-volume-div">
        <!-- <div class="volume-play-btn">
            <a onclick="playAudio('{{$song->id}}')" href="javascript:void(0)"><i class="fa fa-play" aria-hidden="true"></i></a>
        </div> -->
        <div class="volume-bar-flex">
            <p>Dreams and Nightmares - Jeff Jordan</p>
            <div class="volume-bar-inner-flex">
                <audio id="new-audio" controls src="{{asset('assets/front/songs/audio/'.$song->audio)}}"></audio>
{{--                <div class="start-time">--}}
{{--                    <span>0:40</span>--}}
{{--                </div>--}}
{{--                <div class="grey-main-bar">--}}
{{--                    <span class="full-grey"></span>--}}
{{--                    <div class="half-yellow-bar">--}}
{{--                        <span class="half-yellow"></span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="start-time">--}}
{{--                    <span>03:08</span>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
    <div class="step-back">
        <a href="javascript:void(0)"><i class="fa fa-step-forward" aria-hidden="true"></i></a>
    </div>
</div>