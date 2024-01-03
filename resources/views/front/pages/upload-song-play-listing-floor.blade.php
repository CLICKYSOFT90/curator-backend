@extends('front.layouts.master', ['headerClass' => 'header how-it-work-header'])

@section('title', 'Curator Club - Upload Song Play Listing Floor')

@section('content')
    <!-- UPLOAD SONG PLAYLISTING FLOOR SECTION BEGIN -->
    <section class="upload-song-playlsiting-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                    <div class="add-another-content-main"></div>
{{--                    <div class="add-another-content" style="display: none;">--}}
{{--                        <div class="add-another-curator">--}}
{{--                            <img src="{{asset('assets/front/images/add-another-img.png')}}" alt="image" class="img-fluid">--}}
{{--                        </div>--}}
{{--                        <div class="add-another-curator-content">--}}
{{--                            <p>Song title Here</p>--}}
{{--                            <span>Artist Name</span>--}}
{{--                            <a href="javascript:void(0)" class="remove-content"><i class="fa fa-times" aria-hidden="true"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="alert alert-danger alert-dismissible" style="display: none;">
                        <ul></ul>
                    </div>
                    <form role="form" enctype="multipart/form-data" class="login-box" id="uploadForm">
                        <input type="hidden" id="package_id" name="package_id">
                        <div class="upload-song-journey">
                            <div class="upload-song-tab">
                                <h4>Choose a song</h4>
                                <div class="upload-song-selection-field">
                                    <div class="upload-song-link-field">
                                        <div class="radio-upload-song">
                                            <input type="radio" name="audio_type" value="Link">
                                        </div>
                                        <input type="text" name="audio_link" placeholder="Paste Song Link Here (Spotify, YouTube, SoundCloud, etc.)" class="form-control" fdprocessedid="t46lbt">
                                    </div>
                                    <div class="upload-song-mp3">
                                        <div class="radio-upload-song">
                                            <input type="radio" name="audio_type" value="Upload">
                                        </div>
                                        <button type="button" class="btn btn-primary" fdprocessedid="gdlfuo" id="uploadButton">Upload an MP3</button>
                                        <input type="file" accept="audio/*" name="audio" id="uploadNewAudio" style="display: none;">
                                    </div>
                                </div>
                                <div class="song-hide-box">
                                    <div class="song-hide-img-flex">
                                        <div class="song-hide-img">
                                            <img src="{{asset('assets/front/images/song-hide-img.png')}}" alt="images" class="img-fluid">
                                        </div>
                                        <div class="song-hide-content">
                                            <h6>Song title here</h6>
                                            <p>Jeff Jordan</p>
                                            <span>PREVIEW</span>
                                        </div>
                                    </div>
                                    <div class="white-spotify-box">
                                        <div class="white-spotify-icon">
                                            <a href="javascript:void(0)"><img src="{{asset('assets/front/images/white-spotify.png')}}" alt="images/" aria-multiline="image" class="img-fluid"></a>
                                        </div>
                                        <div class="dots-play-icon">
                                            <a href="javascript:void(0)"><span class="upload-dots"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></span></a>
                                            <a href="javascript:void(0)"><span class="upload-play-icon"><i class="fa fa-play" aria-hidden="true"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row show-hide-box-song">
                                    <div class="col-lg-4 col-md-8 col-sm-8 col-12">
                                        <div id="previewContainer"></div>
                                        <div class="image-thumbnail-selector">
                                            <a href="javascript:void(0)">
                                                <img src="{{asset('assets/front/images/upload-sec-img.png')}}" alt="image" class="img-fluid">
                                                <p>Choose a file or drag it here.</p>
                                                <div class="album-art-work">
                                                    <span>Album artwork</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <input type="file" accept="image/*" name="cover_image" id="uploadNewCover" style="display: none;">
                                <div class="is-song-text">
                                    <h5>Is this song released?</h5>
                                    <div class="upload-song-yes-no">
                                        <div class="upload-song-yes-btn">
                                            <div class="radio-upload-song-yes">
                                                <input type="radio" name="is_released" value="1">
                                            </div>
                                            <button type="button" class="btn btn-primary">Yes</button>
                                        </div>
                                        <div class="upload-song-no-btn">
                                            <div class="radio-upload-song-no">
                                                <input type="radio" name="is_released" value="0">
                                            </div>
                                            <button type="button" class="btn btn-primary">No</button>
                                        </div>
                                    </div>
                                    <div class="released-song-date">
                                        <span></span>
                                        <input type="date" name="released_date" class="form-control">
                                    </div>
                                    <div class="released-song-date-no">
                                        <span>When is your song releasing?</span>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="artist-song-name">
                                    <h5>Artist name</h5>
                                    <input type="text" name="artist_name" class="form-control" placeholder="Artist name here">
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
                                <h5 class="release-text">What kind of release is this?</h5>
                                <div class="upload-song-yes-no">
                                    <div class="upload-song-yes-btn">
                                        <div class="radio-upload-song-yes">
                                            <input type="radio" name="release_type" value="Official Release">
                                        </div>
                                        <button type="button" class="btn btn-primary">Official Release</button>
                                    </div>
                                    <div class="upload-song-no-btn">
                                        <div class="radio-upload-song-no">
                                            <input type="radio" name="release_type" value="Remix">
                                        </div>
                                        <button type="button" class="btn btn-primary">Remix</button>
                                    </div>
                                    <div class="upload-song-no-btn">
                                        <div class="radio-upload-song-no">
                                            <input type="radio" name="release_type" value="Cover">
                                        </div>
                                        <button type="button" class="btn btn-primary">Cover</button>
                                    </div>
                                    <div class="upload-song-no-btn">
                                        <div class="radio-upload-song-no">
                                            <input type="radio" name="release_type" value="Unfinished Demo">
                                        </div>
                                        <button type="button" class="btn btn-primary">Unfinished Demo</button>
                                    </div>
                                </div>
                            </div>
                            <div class="song-info-tab">
                                <div class="song-released-tab-text">
                                    <h5>Does this song have lyrics?</h5>
                                    <div class="upload-song-yes-no">
                                        <div class="upload-song-yes-btn upload-show-anime">
                                            <div class="radio-upload-song-yes">
                                                <input type="radio" name="has_lyrics" value="1">
                                            </div>
                                            <button type="button" class="btn btn-primary">Yes</button>
                                        </div>
                                        <div class="upload-song-no-btn upload-hide-anime">
                                            <div class="radio-upload-song-no">
                                                <input type="radio" name="has_lyrics" value="0">
                                            </div>
                                            <button type="button" class="btn btn-primary">No</button>
                                        </div>
                                    </div>
                                    <div class="released-song-language">
                                        <div class="language-selection">
                                            <select name="lyrics_language" class="form-control">
                                                @foreach($lyricLanguages as $lyricLanguage)
                                                    <option value="{{$lyricLanguage->id}}">{{$lyricLanguage->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="lyrics-areatext">
                                            <textarea name="lyrics" cols="4" rows="5" class="form-control"></textarea>
                                            <div class="txt-info-icon">
                                                <span><i class="fa fa-info-circle" aria-hidden="true"></i></span>
                                                <div class="hover-curator-tooltip">
                                                    <span>English Only</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="songs-lyrics-area">
                                        <textarea cols="4" rows="5" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="song-released-tab-text curator-song-options">
                                    <h5>Is this song explicit?</h5>
                                    <div class="upload-song-yes-no">
                                        <div class="upload-song-yes-btn">
                                            <div class="radio-upload-song-yes">
                                                <input type="radio" name="is_explicit" value="1">
                                            </div>
                                            <button type="button" class="btn btn-primary">Yes</button>
                                        </div>
                                        <div class="upload-song-no-btn">
                                            <div class="radio-upload-song-no">
                                                <input type="radio" name="is_explicit" value="0">
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
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                                <div class="select-dropdown-text">
                                                    <label for="genres{{$genre->id}}" class="text-dark">{{$genre->name}}</label>
                                                    <select name="genres[{{$genre->id}}][]" id="genres{{$genre->id}}" class="form-control" multiple>
                                                        <option value=""> -- Select -- </option>
                                                        @foreach($genre->getSubGenre as $subGenre)
                                                            <option value="{{$subGenre->id}}">{{$subGenre->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="pitch-curator">
                                    <h5>Write a pitch for Curators</h5>
                                    <p  class="round"><input type="checkbox" id="checkbox" />
                                        <label for="checkbox"></label>
                                        Personalize your pitch with curator's name.</p>
                                    <div class="pitch-text-area">
                                        <textarea cols="4" rows="6" name="pitch" class="form-control" placeholder="Write your message...."></textarea>
                                        <div class="curator-animate-text">
                                            <p>Hello Jhon,</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-add-btn">
                                    <button type="submit" class="btn btn-primary add-another-btn"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add another song</button>
                                    <button type="submit" class="btn btn-primary add-next-pg-btn">NEXT <img src="{{asset('assets/front/images/upload-front-img.png')}}" alt="image" class="img-fluid"></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- UPLOAD SONG PLAYLISTING FLOOR SECTION END -->
@endsection

@push('front-scripts')
    <script>
        let currentCover = "{{asset('assets/front/images/add-another-img.png')}}";
        let dataSet = [];

        function submitData(){
            axios.post('{{route('user.upload.song.play.listing.floor.data')}}', {

            }).then(function (response) {
                hideLoader();
                window.location.href = response.data.route;
            }).catch(function (error) {
                hideLoader();
                swal({
                    title: error.response.data.msg,
                    icon: "error",
                    dangerMode: true,
                    closeOnClickOutside: false
                });
            });
        }

        // TOP RADIO BUTTON CHECKED SCRIPT BEGIN
        $(document).ready(function() {
            var package = localStorage.getItem('packageId');
            $('#package_id').val(package);

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
        // UPLOAD SONG NAME WITH CROSS ICON SCRIPT BEGIN
        document.addEventListener("DOMContentLoaded", function () {
            const uploadButton = document.getElementById('uploadButton');
            const previewContainer = document.getElementById('previewContainer');
            const showHideBox = document.querySelector('.show-hide-box-song');
            const uploadLinkButton = document.querySelector('.upload-song-link-field');
            if (localStorage.getItem('showHideBoxVisible') === 'true') {
                showHideBox.style.maxHeight = showHideBox.scrollHeight + 'px';
            }
            uploadButton.addEventListener('click', function () {
                const fileInput = document.getElementById('uploadNewAudio');
                fileInput.addEventListener('change', function (event) {
                    const selectedFile = event.target.files[0];
                    const trackDiv = document.createElement('div');
                    trackDiv.style.display = 'flex';
                    trackDiv.style.alignItems = 'center';
                    const trackName = document.createElement('p');
                    trackName.textContent = selectedFile.name;
                    const imagePreview = document.createElement('img');
                    imagePreview.style.maxWidth = '100px';
                    imagePreview.style.maxHeight = '100px';
                    imagePreview.src = "{{asset('assets/front/images/headphone-icon.png')}}";
                    const deleteButton = document.createElement('button');
                    deleteButton.innerHTML = '<i class="fa fa-times" aria-hidden="true"></i>';
                    deleteButton.style.border = 'none';
                    deleteButton.style.backgroundColor = 'transparent';
                    deleteButton.style.cursor = 'pointer';
                    deleteButton.addEventListener('click', function () {
                        previewContainer.removeChild(trackDiv);
                    });
                    trackDiv.appendChild(imagePreview);
                    trackDiv.appendChild(trackName);
                    trackDiv.appendChild(deleteButton);
                    previewContainer.innerHTML = '';
                    previewContainer.appendChild(trackDiv);
                    showHideBox.style.maxHeight = showHideBox.scrollHeight + 'px';
                    localStorage.setItem('showHideBoxVisible', 'true');
                });
                fileInput.click();
            });
            uploadLinkButton.addEventListener('click', function () {
                showHideBox.style.maxHeight = '0';
                localStorage.setItem('showHideBoxVisible', 'false'); // Save in local storage
            });
        });
        // UPLOAD SONG NAME WITH CROSS ICON SCRIPT END
        // UPLOAD BANNER ON SONG SCRIPT BEGIN
        document.addEventListener("DOMContentLoaded", function() {
            const imageSelector = document.querySelector(".image-thumbnail-selector a");
            function handleImageUpload() {
                const imageInput = document.getElementById('uploadNewCover');
                imageInput.addEventListener("change", function(event) {
                    const file = event.target.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            const imageUrl = e.target.result;
                            currentCover = imageUrl;
                            const image = document.createElement("img");
                            image.src = imageUrl;
                            image.alt = "Uploaded Image";
                            image.className = "img-fluid";
                            const paragraph = document.createElement("p");
                            paragraph.textContent = "";
                            const anchor = document.createElement("a");
                            anchor.href = "javascript:void(0)";
                            anchor.addEventListener("click", handleImageUpload);
                            anchor.appendChild(image);
                            anchor.appendChild(paragraph);
                            const imageDiv = document.querySelector(".image-thumbnail-selector");
                            imageDiv.innerHTML = "";
                            imageDiv.appendChild(anchor);
                            // $('.track-overview-box .song-cover').attr('src',imageUrl)
                        };
                        reader.readAsDataURL(file);
                    }
                });
                imageInput.click();
            }
            imageSelector.addEventListener("click", handleImageUpload);
        });
        // UPLOAD BANNER ON SONG SCRIPT END
        // SHOW AND HIDE PLAYLIST BOX SCRIPT BEGIN
        document.addEventListener("DOMContentLoaded", function () {
            const linkInput = document.querySelector(".upload-song-link-field .form-control");
            const songHideBox = document.querySelector(".song-hide-box");
            linkInput.addEventListener("input", function () {
                const link = linkInput.value.trim();
                if (link !== "") {
                    songHideBox.classList.add("show");
                } else {
                    songHideBox.classList.remove("show");
                }
            });
        });
        // SHOW AND HIDE PLAYLIST BOX SCRIPT END
        // YES & NO BUTTON SHOW & HIDE SCRIPT BEGIN
        document.addEventListener("DOMContentLoaded", function() {
            const yesBtn = document.querySelector(".upload-song-yes-btn");
            const noBtn = document.querySelector(".upload-song-no-btn");
            const releasedSongDate = document.querySelector(".released-song-date");
            const releasedSongDateNo = document.querySelector(".released-song-date-no");
            yesBtn.addEventListener("click", function() {
                releasedSongDate.classList.add("show");
                releasedSongDateNo.classList.remove("show");
            });
            noBtn.addEventListener("click", function() {
                releasedSongDate.classList.remove("show");
                releasedSongDateNo.classList.add("show");
            });
        });
        // YES & NO BUTTON SHOW & HIDE SCRIPT END
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
        // TOP ADD BOX SCRIPT BEGIN
        // document.addEventListener("DOMContentLoaded", function () {
        //     const addButton = document.querySelector('.bottom-add-btn');
        //     const hiddenContent = document.querySelector('.add-another-content');
        //     addButton.addEventListener('click', function () {
        //         hiddenContent.style.display = 'flex';
        //         scrollToTop();
        //     });
        //     const removeButtons = document.querySelectorAll('.remove-content');
        //     removeButtons.forEach(function (removeButton) {
        //         removeButton.addEventListener('click', function () {
        //             hiddenContent.style.display = 'none';
        //         });
        //     });
        //     function scrollToTop() {
        //         window.scrollTo({
        //             top: 0,
        //             behavior: 'smooth'
        //         });
        //     }
        // });
        // TOP ADD BOX SCRIPT END
        $(document).ready(function () {
            $(".upload-lyrics-btn").click(function () {
                $(".songs-lyrics-area .form-control").toggle();
            });
        });

        document.getElementById('uploadForm').addEventListener('submit', function (e) {
            e.preventDefault();
            let requestUrl = "{{route('save.upload.song.play.listing.floor')}}";
            if ($(e.submitter).hasClass('add-another-btn')) {
                requestUrl = "{{route('save.upload.song.play.listing.floor',[1])}}";
            }
            $('button#submit-step-id').attr('disabled',true);
            $('.alert-dismissible').hide();
            $('.alert-dismissible ul').empty();
            const formData = new FormData(this);
            axios.post(requestUrl, formData)
                .then(res => {
                    notifyUser(res.data.msg,res.data.status,3000);
                    if (res.data.status=='success') {
                        setTimeout(function () {
                            location.href = "{{route('user.track.overview.play.listing.floor')}}";
                        },2500);
                    } else if (res.data.status=='pending') {
                        let previewData = `<div class="add-another-content">
                                                <div class="add-another-curator">
                                                    <img src="${currentCover}" alt="image" class="img-fluid">
                                                </div>
                                                <div class="add-another-curator-content">
                                                    <p>${$(':input[name="track_title"]').val()}</p>
                                                    <span>${$(':input[name="artist_name"]').val()}</span>
                                                </div>
                                            </div>`;
                        $('.add-another-content-main').html(previewData);
                        window.scrollTo({ top: 0, behavior: 'smooth' });
                        $('form#uploadForm')[0].reset();
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