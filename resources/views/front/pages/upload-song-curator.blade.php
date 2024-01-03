@extends('front.layouts.master', ['headerClass' => 'header how-it-work-header'])

@section('title', 'Curator Club - Upload Song Curator')

@section('content')
    <!-- SIGN IN HEADER BEGIN -->
    <section class="signin-sec upload-songs-curator">
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
                                            <a href="javascript:void(0);" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true"><span class="round-tab">1 </span> <i>Upload a song</i></a>
                                        </li>
                                        <li role="presentation" class="disabled">
                                            <a href="javascript:void(0);" data-toggle="tab" aria-controls="step2" role="tab"><span class="round-tab-2">2</span> <i>Song Info</i></a>
                                        </li>
                                        <li role="presentation" class="disabled">
                                            <a href="javascript:void(0);" data-toggle="tab" aria-controls="step3-overview" role="tab"><span class="round-tab-2">3</span> <i>Over View</i></a>
                                        </li>
                                        <li role="presentation" class="disabled">
                                            <a href="javascript:void(0);" role="tab"><span class="round-tab-2">4</span> <i>Select Curator</i></a>
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
                                                <h4>Add Song Link</h4>

                                                <div class="upload-song-selection-field">
                                                    <div class="upload-song-link-field">
                                                        <input type="text" name="audio_link" placeholder="Paste Song Link Here (Spotify, YouTube, SoundCloud, etc.)" class="form-control" fdprocessedid="t46lbt" onkeyup="handleAudioLink(this)">
                                                    </div>
                                                </div>
                                                <div class="song-hide-box" id="audioLinkDiv"></div>

                                                <h4>Can you also upload an MP3 / WAV version?</h4>
                                                <p style="margin-top: -25px;">Your upload will be kept private.</p>
                                                <div class="upload-song-mp3">
                                                    <button type="button" class="btn btn-primary" fdprocessedid="gdlfuo" id="uploadButton" onclick="$('#uploadAudio').click();">Upload an MP3</button>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-4 col-md-6 col-sm-4 col-12">
                                                        <div id="previewContainer">
                                                            <div id="previewContainerChild" style="display: flex; align-items: center;">
                                                            </div>
                                                            <input type="file" accept="audio/*" name="audio" id="uploadAudio" onchange="handleAudioUpload(this)" oncancel="handleOnCancelAudioUpload()" style="display: none;">
                                                        </div>
                                                        <div class="image-thumbnail-selector">
                                                            <a href="javascript:void(0)" onclick="$('#uploadNewCover').click()">
                                                                <img src="{{asset('assets/front/images/upload-sec-img.png')}}" alt="image" class="img-fluid cover_image">
                                                                <p>Choose a file or drag it here.</p>
                                                                <div class="album-art-work">
                                                                    <span>Album artwork</span>
                                                                </div>
                                                            </a>
                                                            <input type="file" accept="image/*" name="cover_image" id="uploadNewCover" onchange="handleCoverUpload(this)" style="display: none;">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="is-song-text">
                                                    <h5>Is this song released?</h5>

                                                    <div class="upload-song-yes-no">

                                                        <div class="upload-song-yes-btn" onclick="handleReleaseDate(this, 'Yes')">
                                                            <div class="radio-upload-song-yes">
                                                                <input type="radio" name="is_released" value="1" checked>
                                                            </div>
                                                            <button type="button" class="btn btn-primary">Yes</button>
                                                        </div>

                                                        <div class="upload-song-no-btn" onclick="handleReleaseDate(this, 'No')">
                                                            <div class="radio-upload-song-no">
                                                                <input type="radio" name="is_released" value="0">
                                                            </div>
                                                            <button type="button" class="btn btn-primary">No</button>
                                                        </div>

                                                    </div>
                                                    <div class="released-song-date show" id="released_date_div">
                                                        <span>Released Song</span>
                                                        <input type="date" name="released_date" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="artist-song-name add-fields-artist">
                                                    <h5>Artist name</h5>
                                                    <input type="text" name="artist_name" class="form-control" placeholder="Artist name here">
                                                    <a class="add-artist-field">Add Feature Artist <i class="fa fa-plus" aria-hidden="true"></i></a>
                                                </div>
                                                <div class="artist-song-name">
                                                    <h5>Track title</h5>
                                                    <input type="text" name="track_title" class="form-control" placeholder="Track title here">
                                                </div>

                                                <h5 class="release-text">What kind of release is this?</h5>
                                                <div class="upload-song-yes-no">

                                                    <div class="upload-song-yes-btn" onclick="handleReleaseType(this)">
                                                        <div class="radio-upload-song-yes">
                                                            <input type="radio" name="release_type" id="release_type1" value="Official Release" checked>
                                                        </div>
                                                        <button type="button" class="btn btn-primary">Official Release</button>
                                                    </div>

                                                    <div class="upload-song-no-btn" onclick="handleReleaseType(this)">
                                                        <div class="radio-upload-song-no">
                                                            <input type="radio" name="release_type" id="release_type2" value="Remix">
                                                        </div>
                                                        <button type="button" class="btn btn-primary">Remix</button>
                                                    </div>

                                                    <div class="upload-song-no-btn" onclick="handleReleaseType(this)">
                                                        <div class="radio-upload-song-no">
                                                            <input type="radio" name="release_type" id="release_type3" value="Cover">
                                                        </div>
                                                        <button type="button" class="btn btn-primary">Cover</button>
                                                    </div>

                                                    <div class="upload-song-no-btn" onclick="handleReleaseType(this)">
                                                        <div class="radio-upload-song-no">
                                                            <input type="radio" name="release_type" id="release_type4" value="Unfinished Demo">
                                                        </div>
                                                        <button type="button" class="btn btn-primary">Unfinished Demo</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="list-inline">
                                                <li><button type="button" class="default-btn prev-step" id="prev-step-id"><img src="{{asset('assets/front/images/upload-back-img.png')}}" alt="image" class="img-fluid"> Back</button></li>
                                                <li><button type="button" class="default-btn next-step" id="next-step-id"> NEXT <img src="{{asset('assets/front/images/upload-front-img.png')}}" alt="image" class="img-fluid"></button></li>
                                            </ul>
                                        </div>

                                        <div class="tab-pane" role="tabpanel" id="step2">
                                            <div class="song-info-tab">
                                                <div class="song-released-tab-text">
                                                    <h5>Does this song have lyrics?</h5>
                                                    <div class="upload-song-yes-no">

                                                        <div class="upload-song-yes-btn upload-show-anime" onclick="handleLyrics(this, 'Yes')">
                                                            <div class="radio-upload-song-yes">
                                                                <input type="radio" name="has_lyrics" value="1">
                                                            </div>
                                                            <button type="button" class="btn btn-primary">Yes</button>
                                                        </div>

                                                        <div class="upload-song-no-btn upload-hide-anime" onclick="handleLyrics(this, 'No')">
                                                            <div class="radio-upload-song-no">
                                                                <input type="radio" name="has_lyrics" value="0" checked>
                                                            </div>
                                                            <button type="button" class="btn btn-primary">No</button>
                                                        </div>

                                                    </div>

                                                    <div class="released-song-language" id="languageDiv">
                                                        <div class="lyrics-areatext">
                                                            <textarea cols="4" name="lyrics" rows="5" class="form-control"></textarea>
                                                            <div class="txt-info-icon">
                                                                <span><i class="fa fa-info-circle" aria-hidden="true"></i></span>
                                                                <div class="hover-curator-tooltip">
                                                                    <span>English Only</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="song-released-tab-text curator-song-options">
                                                    <h5>Is this song explicit?</h5>
                                                    <div class="upload-song-yes-no">

                                                        <div class="upload-song-yes-btn" onclick="handleIsExplicit(this)">
                                                            <div class="radio-upload-song-yes">
                                                                <input type="radio" name="is_explicit" value="1">
                                                            </div>
                                                            <button type="button" class="btn btn-primary">Yes</button>
                                                        </div>

                                                        <div class="upload-song-no-btn" onclick="handleIsExplicit(this)">
                                                            <div class="radio-upload-song-no">
                                                                <input type="radio" name="is_explicit" value="0" checked>
                                                            </div>
                                                            <button type="button" class="btn btn-primary">No</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="lease-text">
                                                    Upload a copy of the song’s instrumental lease (OPTIONAL)
                                                    <span class="tooltip-cur-click">
                                                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                    <span class="tooltip-text">
                                                      "If a YouTuber uploads your song and gets copyrighted, the curator will already have the information needed to get the problem resolved."
                                                      <span class="tooltip-close">
                                                        <i class="fa fa-times" aria-hidden="true"></i>
                                                      </span>
                                                    </span>
                                                  </span>
                                                </p>
                                                <div class="instrumental-btn">
                                                    <input type="file" accept="audio/*" name="instrumental_lease" id="lyricsFileInput-instrument" class="hidden-file-input">
                                                    <button type="button" class="btn btn-primary" fdprocessedid="hf5d8d"><i class="fa fa-upload" aria-hidden="true"></i> Upload Instrumental Lease</button>
                                                    <div class="file-preview-instrument" style="display: none;"></div>
                                                </div>
                                                <div class="song-released-tab-text curator-song-options">
                                                    <div class="heading-icon-tooltip">
                                                        <h5>Do you give permission for YouTubers to upload your song and keep the ad revenue? <span><i class="fa fa-info-circle" aria-hidden="true"></i></span></h5>
                                                        <div class="tooltip-box">
                                                            <span class="close-tooltip"><i class="fa fa-times" aria-hidden="true"></i></span>
                                                            Most curators will not accept your song without you accepting.
                                                        </div>
                                                    </div>
                                                    <div class="upload-song-yes-no">

                                                        <div class="upload-song-yes-btn" onclick="handlePermissionYoutube(this)">
                                                            <div class="radio-upload-song-yes">
                                                                <input type="radio" name="permission_youtubers" value="1">
                                                            </div>
                                                            <button type="button" class="btn btn-primary">Yes</button>
                                                        </div>

                                                        <div class="upload-song-no-btn" onclick="handlePermissionYoutube(this)">
                                                            <div class="radio-upload-song-no">
                                                                <input type="radio" name="permission_youtubers" value="0" checked>
                                                            </div>
                                                            <button type="button" class="btn btn-primary">No</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="song-released-tab-text curator-genres">
                                                    <h5>Genres</h5>
                                                    <p>You can select up to 5 genres.</p>
                                                    <div class="row">
                                                        @foreach($genres as $genre)
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                                                <div class="select-dropdown-text">
                                                                    <div class="custom-multiselect">
                                                                        <div class="selectBox" onclick="showCheckboxes(this)">
                                                                            <select class="form-control" name="genre[]">
                                                                                <option value="{{$genre->id}}">{{$genre->name}}</option>
                                                                            </select>
                                                                            <div class="selectWrapper"></div>
                                                                        </div>
                                                                        <div class="selectOptions">
                                                                            @foreach($genre->getSubGenre as $subGenre)
                                                                                <label class="singleOption"> <input type="checkbox" name="sub_genre[{{$genre->id}}][]" value="{{$subGenre->id}}"> {{$subGenre->name}}
                                                                                </label>
                                                                            @endforeach
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="pitch-curator">
                                                    <h5>Write a pitch for Curators</h5>
                                                    <p  class="round"><input type="checkbox" id="checkbox" name="is_custom_pitch" value="1"/>
                                                        <label for="checkbox"></label>
                                                        Personalize your pitch with curator's name.</p>
                                                    <div class="pitch-text-area">
                                                        <textarea cols="4" rows="6" name="pitch" class="form-control" placeholder="Write your message...."></textarea>
                                                        <div class="curator-animate-text">
                                                        </div>
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
                                                <h4>My Track Overview</h4>
                                                <div class="track-overview-box">
                                                    <a onclick="editUploadSection()" href="javascript:void(0)">Edit upload  <i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                    <img src="{{asset('assets/front/images/track-banner-img.png')}}" alt="Image" class="img-fluid song-cover data--cover_image">
                                                    <div class="responses-inner-flex">
                                                        <div class="responses-avatr-flex">
                                                            <div class="response-avatar-img">
                                                                <img src="{{auth()->user()->profile_image}}" alt="image" class="img-fluid" width="80" height="80" style="height: 80px; width: 80px; border-radius: 10px">
                                                            </div>
                                                            <div class="responses-avatar-content">
                                                                <h6 class="data--track_title">Song title here</h6>
                                                                <p class="data--artist_name">Jeff Jordan</p>
                                                            </div>
                                                        </div>
                                                        <div class="responses-avatr-flex">
                                                            <div class="response-avatar-img">
                                                                <img src="{{asset('assets/front/images/cal1.png')}}" alt="image" class="img-fluid">
                                                            </div>
                                                            <div class="responses-avatar-content">
                                                                <span>Release Date</span>
                                                                <p class="data--released_date">2023-11-28</p>
                                                            </div>
                                                        </div>
                                                        <div class="responses-avatr-flex">
                                                            <div class="response-avatar-img">
                                                                <img src="{{asset('assets/front/images/cal2.png')}}" alt="image" class="img-fluid">
                                                            </div>
                                                            <div class="responses-avatar-content">
                                                                <span>Trak link</span>
                                                                <a href="javascript:void(0)">Spotify</a>
                                                            </div>
                                                        </div>
                                                        <div class="responses-avatr-flex">
                                                            <div class="response-avatar-img">
                                                                <img src="{{asset('assets/front/images/cal3.png')}}" alt="image" class="img-fluid">
                                                            </div>
                                                            <div class="responses-avatar-content">
                                                                <span>Release type</span>
                                                                <p class="data--release_type">Official release</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="song-lyrics-box">
                                                    <div class="songs-lyrics-text">
                                                        <h5>Song Lyrics <a onclick="editInfoSection()" href="javascript:void(0)" class="pull-right">Edit song upload info  <i class="fa fa-pencil" aria-hidden="true"></i></a></h5>
                                                        <p class="data--lyrics_language">English</p>
                                                        <a href="javascript:void(0)" class="songs-lyrics-box2 toggle-lyrics2">
                                                            <?xml version="1.0" encoding="iso-8859-1"?><svg version="1.1" class="svg-pencil-icon" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><g><path d="M495.914,189.604c-18.965-15.914-47.343-13.424-63.228,5.506l-42.695,50.523V99.129c0-12.279-5.106-24.17-14.008-32.625l-56.978-54.125C310.606,4.4,299.6,0.005,288.015,0.005H44.999C20.187,0.005,0,20.192,0,45.004v421.991c0,24.812,20.187,44.999,44.999,44.999h299.994c24.812,0,44.999-20.187,44.999-44.999v-81.961C391.835,382.851,501.116,253.407,501.46,253C517.447,233.948,514.969,205.592,495.914,189.604z M299.994,35.695c60.013,57.008,55.751,52.841,56.876,54.309h-56.876V35.695z M359.992,466.995c0,8.271-6.729,15-15,15H44.999c-8.271,0-15-6.729-15-15V45.004c0-8.271,6.729-15,15-15h224.995v74.998c0,8.284,6.716,15,15,15h74.998v161.129c-6.443,7.624-58.178,68.843-63.77,75.46c-4.467,5.324-7.682,11.711-9.296,18.47l-13.94,58.356c-1.319,5.526,0.596,11.324,4.948,14.976c4.356,3.656,10.399,4.529,15.607,2.272l55.05-23.862c4.133-1.792,7.988-4.226,11.401-7.151V466.995z M324.315,369.827l22.978,19.28l-5.11,6.052c-1.487,1.774-3.398,3.199-5.523,4.12l-27.524,11.931l6.971-29.178c0.538-2.253,1.609-4.382,3.064-6.116L324.315,369.827z M366.644,366.184l-22.967-19.271c2.33-2.757,77.698-91.943,82.91-98.11l22.919,19.231L366.644,366.184z M478.509,233.682l-9.649,11.43l-22.908-19.222l9.682-11.457c5.289-6.303,14.71-7.125,20.997-1.849C483.043,217.963,483.75,227.436,478.509,233.682z"/></g></g><g><g><path d="M224.995,90.003H74.998c-8.284,0-15,6.716-15,15s6.716,15,15,15h149.997c8.284,0,15-6.716,15-15S233.279,90.003,224.995,90.003z"/></g></g><g><g><path d="M314.993,181.001H74.998c-8.284,0-15,6.716-15,15s6.716,15,15,15h239.995c8.284,0,15-6.716,15-15S323.277,181.001,314.993,181.001z"/></g></g><g><g><path d="M314.993,271H74.998c-8.284,0-15,6.716-15,15c0,8.284,6.716,15,15,15h239.995c8.284,0,15-6.716,15-15C329.993,277.715,323.277,271,314.993,271z"/></g></g><g><g><path d="M224.995,360.998H74.998c-8.284,0-15,6.716-15,15s6.716,15,15,15h149.997c8.284,0,15-6.716,15-15S233.279,360.998,224.995,360.998z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                                                        </a>
                                                    </div>
                                                    <div class="songs-lyrics-text-doc2">
                                                        <div class="lock-box-text">
                                                            <div class="songs-lyrics-text song-lyrics-new data--lyrics">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="songs-lyrics-text">
                                                        <h5>Explicit Content</h5>
                                                        <p class="data--is_explicit">No</p>
                                                    </div>
                                                    <div class="songs-lyrics-text">
                                                        <h5>Ad Revenue Permission</h5>
                                                        <p class="data--permission_youtubers">Yes</p>
                                                    </div>
                                                    <div class="songs-lyrics-text">
                                                        <h5>Genres</h5>
                                                        <div class="data--genres"></div>

                                                    </div>
                                                    <div class="songs-lyrics-text data--pitch-parent">
                                                        <h5>Pitch for Curator.</h5>
                                                        <p class="data--pitch"></p>
                                                    </div>
                                                </div>
                                                <div class="choose-an-option">
                                                    <h4>Choose an option</h4>
                                                    <p>Choose any one option to continue the submission.</p>
                                                    <div class="upload-song-yes-no">

                                                        <div class="upload-song-yes-btn" onclick="handleSubmitOption(this)">
                                                            <div class="radio-upload-song-yes">
                                                                <input type="radio" name="submit_option" value="Manually" checked>
                                                            </div>
                                                            <button type="button" class="btn btn-primary" fdprocessedid="kgmpym"> Submit manually</button>
                                                        </div>

                                                        <div class="upload-song-no-btn" onclick="handleSubmitOption(this)">
                                                            <div class="radio-upload-song-no">
                                                                <input type="radio" name="submit_option" value="Automated">
                                                            </div>
                                                            <button type="button" class="btn btn-primary" fdprocessedid="2imfbo">Automate</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="list-inline">
                                                <li><button type="button" class="default-btn prev-step" id="prev-step-id"><img src="{{asset('assets/front/images/upload-back-img.png')}}" alt="image" class="img-fluid"> Back</button></li>
                                                <li><button type="button" class="default-btn next-step" onclick="handleFormData(3)"> NEXT <img src="{{asset('assets/front/images/upload-front-img.png')}}" alt="image" class="img-fluid"></button></li>
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
    <script>
        //  STEPS WIZARD SCRIPT BEGIN
        $(document).ready(function () {
            $('.radio-card input[type="radio"]').click(function () {
                var active = $('.wizard .nav-tabs li.active');
                active.next().removeClass('disabled');
                nextTab(active);
            });

            $('.nav-tabs').on('click', 'li', function () {
                $('.nav-tabs li.active').removeClass('active');
                $(this).addClass('active');
            });

            $('[id="prev-step-id"]').click(function () {
                var activeTab = $('.wizard .tab-pane.active');
                var prevTab = activeTab.prev('.tab-pane');
                console.log(prevTab.index());
                prevTab.index() === -1 ? window.location.href = "{{route('user.select.submission')}}" : "";
                if (prevTab.length) {
                    activeTab.removeClass('active');
                    prevTab.addClass('active');
                    resetRoundTabBorder();
                    var correspondingTabLink = $('.influencer-steps-wizard .nav-tabs > li > a[href="#' + prevTab.attr('id') + '"]');
                    correspondingTabLink.trigger('click');
                }
            });

            $('[id="next-step-id"]').click(function () {
                let activeTab = $('.wizard .tab-pane.active');
                let nextTab = activeTab.next('.tab-pane');
                if(nextTab.index() === 1) {
                    handleFormData(1);
                }else if(nextTab.index() === 2){
                    handleFormData(2);
                }else if(nextTab.index() === 3){
                    handleFormData(3);
                }
            });


            $('.influencer-steps-wizard .wizard .nav-tabs > li a').off('click');
            $('.wizard-inner').off('click');
            $('.influencer-steps-wizard span.round-tab').click(function () {
                resetRoundTabBorder();
            });
        });
        // STEPS WIZARD SCRIPT END

        function nextTab(elem) {
            $(elem).next().find('a[data-toggle="tab"]').click();
        }

        function resetRoundTabBorder() {
            $('.influencer-steps-wizard span.round-tab').css({
                'border-color': '#808080',
                'border-width': '5px',
                'border-style': 'solid'
            });
        }

        function handleAudioLink(input){
            let url = $(input).val();
            $('#audioLinkDiv').empty();
            if (url.includes('spotify')) {
                let newUrl = url.split('https://open.spotify.com/track/')[1];
                let iframe = `<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/${newUrl}" width="100%" height="352" frameborder="0" allow="clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>`;
                $('#audioLinkDiv').append(iframe);
                $('#audioLinkDiv').addClass('show');
            } else if (url.includes('soundcloud')) {
                let iframe = `<iframe style="border-radius:12px" src="https://w.soundcloud.com/player/?url=${url}" width="100%" height="352" frameBorder="0" frameborder="0" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>`;
                $('#audioLinkDiv').append(iframe);
                $('#audioLinkDiv').addClass('show');
            } else {
                $('#audioLinkDiv').append('<p>No valid music service found.</p>');
                $('#audioLinkDiv').addClass('show');
            }
        }

        function handleAudioUpload(input){
            let file = input.files[0];
            if(typeof file !== "undefined"){
                let trackName = file.name;
                let html = `<img src="{{asset('assets/front/images/headphone-icon.png')}}" style="max-width: 100px; max-height: 100px;">
                            <p>${trackName}</p>
                            <button type="button" style="border: none; background-color: transparent; cursor: pointer;" onclick="removeAudio()">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </button>`;
                $("#previewContainerChild").empty().append(html);

            }
        }

        function handleOnCancelAudioUpload(){
            $("#upload-song-mp3").click();
            $("#uploadAudio").val("");
            $("#previewContainerChild").empty();
        }

        function removeAudio(){
            $("#uploadAudio").click();
        }

        function handleCoverUpload(input){
            let file = input.files[0];
            if(typeof file !== "undefined"){
                $(".image-thumbnail-selector").find('img').attr('src', URL.createObjectURL(file));
                $(".image-thumbnail-selector .album-art-work").hide().empty();
                $(".image-thumbnail-selector p").empty();
            }
        }

        function handleReleaseDate(div, param){
            $(div).find("input[type='radio']").prop('checked', true);
            if(param === "Yes"){
                $("#released_date_div span").text("Released Song");
            }else{
                $("#released_date_div span").text("When is your song releasing?");
            }
        }

        // ADD FIELDS ON PLUS SIGN CLICK SCRIPT BEGIN
        $('.add-artist-field').on('click', function () {
            var newField = $('.artist-song-name').first().clone();
            newField.find('input').val('');
            newField.find('input').attr('placeholder','Feature artist name');
            newField.find('input').attr('name','feature_artist[]');
            newField.find('h5').remove();
            newField.find('a').html('<i class="fa fa-trash-o" aria-hidden="true"></i>');
            newField.find('a').addClass('remove-artist-field');
            newField.removeClass('artist-song-name');
            $('.add-fields-artist:last').after(newField);
        });

        $(document).on('click', '.remove-artist-field', function () {
            $(this).closest('.add-fields-artist').remove();
        });
        // ADD FIELDS ON PLUS SIGN CLICK SCRIPT END

        function handleReleaseType(div){
            $(div).find("input[type='radio']").prop('checked', true);
        }

        function handleLyrics(div, param){
            $(div).find("input[type='radio']").prop('checked', true);
            $("#languageDiv textarea").empty();
            if(param === "Yes"){
                $("#languageDiv").addClass('show');
            }else{
                $("#languageDiv").removeClass('show');
            }
        }

        function handleIsExplicit(div){
            $(div).find("input[type='radio']").prop('checked', true);
        }

        // SONGS INFO UPLOAD INSTRUMENT DOC SCRIPT BEGIN
        $(document).ready(function() {
            $('.instrumental-btn button').click(function() {
                $('#lyricsFileInput-instrument').trigger('click');
            });
            $('#lyricsFileInput-instrument').change(function() {
                var selectedFile = this.files[0];
                if (selectedFile) {
                    var previewContainer = $('.file-preview-instrument');
                    previewContainer.html('Selected file: ' + selectedFile.name);
                    previewContainer.show();
                }
            });
        });
        // SONGS INFO UPLOAD INSTRUMENT DOC SCRIPT END

        function handlePermissionYoutube(div){
            $(div).find("input[type='radio']").prop('checked', true);
        }

        function handleSubmitOption(div) {
            $(div).find("input[type='radio']").prop('checked', true);
        }


        function handleFormData(step){
            showLoader();
            $('button#submit-step-id').attr('disabled',true);
            $('.alert-dismissible').hide();
            $('.alert-dismissible ul').empty();
            const formData = new FormData(document.getElementById('uploadForm'));
            formData.append('step', step);
            axios.post("{{route('user.upload.song.curator.data')}}", formData)
                .then(res => {
                    if(step === 3){
                        window.location.href = res.data.url;
                    }
                    hideLoader();
                    $('button#submit-step-id').attr('disabled',false);
                    performNextStepProcess();
                })
                .catch(error => {
                    $.each(error.response.data.errors, function (k, v) {
                        $('.alert-dismissible ul').append(`<li>${v[0]}</li>`);
                    });
                    $('.alert-dismissible').show();
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                    $('button#submit-step-id').attr('disabled',false);
                    hideLoader();
                });

        }

        function performNextStepProcess(){
            let activeTab = $('.wizard .tab-pane.active');
            let nextTab = activeTab.next('.tab-pane');
            if (nextTab.length) {
                activeTab.removeClass('active');
                nextTab.addClass('active');
                resetRoundTabBorder();
                var correspondingTabLink = $('.influencer-steps-wizard .nav-tabs > li > a[href="#' + nextTab.attr('id') + '"]');
                correspondingTabLink.trigger('click');
                previewData();
            }
        }


        // SONGS INFO TEXTAREA ANIMATION SCRIPT BEGIN
        const round = document.querySelector('.round');
        const text = document.querySelector('.curator-animate-text p');
        round.addEventListener('click', function () {
            const radioBtn = document.getElementById('checkbox');
            if (radioBtn.checked) {
                radioBtn.checked = false;
                text.classList.remove('slide-down');
                text.classList.add('slide-up');
                setTimeout(() => {
                    text.style.display = 'none';
                }, 200);
            } else {
                radioBtn.checked = true;
                text.style.display = 'block';
                text.classList.remove('slide-up');
                text.classList.add('slide-down');
            }
        });
        // SONGS INFO TEXTAREA ANIMATION SCRIPT END

        // CUSTOM TOOLTIP SCRIPT BEGIN
        document.addEventListener("DOMContentLoaded", function () {
            const tooltipIcons = document.querySelectorAll(".tooltip-cur-click");
            tooltipIcons.forEach((icon) => {
                const tooltipText = icon.querySelector(".tooltip-text");
                const tooltipClose = icon.querySelector(".tooltip-close");
                tooltipClose.addEventListener("click", (event) => {
                    tooltipText.classList.remove("active");
                    event.stopPropagation();
                });
                icon.addEventListener("click", (event) => {
                    if (!tooltipText.classList.contains("active")) {
                        tooltipText.classList.add("active");
                    }
                    event.stopPropagation();
                });
                document.addEventListener("click", (event) => {
                    if (!tooltipText.contains(event.target)) {
                        tooltipText.classList.remove("active");
                    }
                });
            });
        });
        // CUSTOM TOOLTIP SCRIPT END


        document.addEventListener("DOMContentLoaded", function () {
            const tooltipTriggers = document.querySelectorAll(".heading-icon-tooltip span");
            const tooltipBoxes = document.querySelectorAll(".tooltip-box");
            const closeButtons = document.querySelectorAll(".close-tooltip");

            tooltipTriggers.forEach((trigger, index) => {
                trigger.addEventListener("click", () => {
                    tooltipBoxes[index].style.display = "block";
                });
            });

            closeButtons.forEach((button) => {
                button.addEventListener("click", () => {
                    const tooltipBox = button.closest(".tooltip-box");
                    tooltipBox.style.display = "none";
                });
            });
        });


        
        function previewData() {
            $('.data--cover_image').attr('src', $('.cover_image').attr('src'));
            $('.data--track_title').text($(':input[name="track_title"]').val());
            $('.data--artist_name').text($(':input[name="artist_name"]').val());
            $('.data--released_date').text($(':input[name="released_date"]').val());
            $('.data--lyrics').text($(':input[name="lyrics"]').val());
            $('.data--lyrics_language').text($(':input[name="lyrics_language"]').text());
            $('.data--release_type').text($('input[name="release_type"]:checked').val());
            $('.data--is_explicit').text($('input[name="is_explicit"]:checked').val()==1?'Yes':'No');
            $('.data--permission_youtubers').text($('input[name="permission_youtubers"]:checked').val()==1?'Yes':'No');
            $('.data--genres').html('Genre');

            if($(':input[name="pitch"]').val() !== ""){
                $(".data--pitch-parent").show();
                $('.data--pitch').text($(':input[name="pitch"]').val());
            }else{
                $(".data--pitch-parent").hide();
            }
        }

        // MULTIPLE SELECT DROPDOWN SCRIPT BEGIN
        var currentlyExpanded = null;
        function showCheckboxes(selectBox) {
            var options = selectBox.nextElementSibling;
            if (currentlyExpanded && currentlyExpanded !== selectBox) {
                currentlyExpanded.nextElementSibling.style.display = "none";
                currentlyExpanded.classList.remove("expanded");
            }
            if (!selectBox.classList.contains("expanded")) {
                options.style.display = "block";
                selectBox.classList.add("expanded");
                currentlyExpanded = selectBox;
                var checkboxes = options.querySelectorAll('input[type="checkbox"]');
                checkboxes.forEach(function (checkbox) {
                    checkbox.addEventListener("change", handleCheckboxChange);
                });
            } else {
                options.style.display = "none";
                selectBox.classList.remove("expanded");
                currentlyExpanded = null;
            }
        }
        function handleCheckboxChange() {
            var checkboxes = currentlyExpanded.nextElementSibling.querySelectorAll('input[type="checkbox"]');
            var selectedCheckboxes = Array.from(checkboxes).filter(function (checkbox) {
                return checkbox.checked;  });
            if (selectedCheckboxes.length > 5) {
                this.checked = false;
            }
        }
        // MULTIPLE SELECT DROPDOWN SCRIPT END

        // LYRICS TEXTBOX2 SHOW & HIDE SCRIPT BEGIN
        document.addEventListener("DOMContentLoaded", function () {
            const toggleButton = document.querySelector(".toggle-lyrics2");
            const lyricsText = document.querySelector(".songs-lyrics-text-doc2");
            toggleButton.addEventListener("click", function (e) {
                e.preventDefault();
                if (lyricsText.style.display === "none" || lyricsText.style.display === "") {
                    lyricsText.style.display = "block";
                } else {
                    lyricsText.style.display = "none";
                }
            });
        });
        // LYRICS TEXTBOX2 SHOW & HIDE SCRIPT END

        function editUploadSection() {
            $($('div#step3-overview').find("#prev-step-id")).click();
            $($('div#step2').find("#prev-step-id")).click();
        }
        function editInfoSection() {
            $($('div#step3-overview').find("#prev-step-id")).click();
        }
        function addMoreArtist() {
            $('.feature-artist-name').append('<input type="text" name="feature_artist[]" class="form-control mb-1" placeholder="Feature Artist name here">')
        }
        function removeLastArtist() {
            $('.feature-artist-name input:last-child').remove();
        }
    </script>
@endpush