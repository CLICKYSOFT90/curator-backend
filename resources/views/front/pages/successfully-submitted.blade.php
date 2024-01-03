@extends('front.layouts.master', ['headerClass' => 'header how-it-work-header'])

@section('title', 'Curator Club - Successfully Submitted')

@section('content')
    <!-- SUCCESSFULLY SUBMITTED SECTION BEGIN -->
    <section class="successfully-submitted-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="successfully-text">
                        <img src="{{asset('assets/front/images/text-img.png')}}" alt="image" class="img-fluid">
                        <h6><span><img src="{{asset('assets/front/images/headphone-icon.png')}}" alt="image" class="img-fluid"></span> "{{$campaignDetail->artist_name}} {{!empty($campaignDetail->feature_artist) ? "ft.". $campaignDetail->feature_artist : ""}} - {{$campaignDetail->track_title}}"</h6>
                        <p>To keep track of the progress of your submission, please go to your <a href="{{route('my.campaigns')}}">Dashboard.</a> If you have any questions, please refer to the <a href="{{route('help')}}">FAQ</a> section. Your transaction has been completed successfully. A confirmation email has been sent to your email address.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SUCCESSFULLY SUBMITTED SECTION END -->
@endsection

@push('front-scripts')
    <script>

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
    </script>
@endpush