@extends('front.layouts.master', ['headerClass' => 'help-header', 'fullFooter' => true])

@section('title', 'Curator Club - Help')

@section('content')
    <!-- HELP SECTION BANNER BEGIN -->
    <section class="help-sec-banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="help-banner-content">
                        <h2>What do you need help with?</h2>
                        <div class="help-search-icon">
                            <div class="help-field">
                                <input type="text" placeholder="Try update my account details" id="search_faq" class="form-control">
                                <div class="search-help-icon">
                                    <a href="javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="search-help-btn">
                                <button type="button" class="btn btn-primary" onclick="searchFaq()">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HELP SECTION BANNER END -->

    <!-- POPULAR TOPICS SECTION BEGIN -->
    @if(!empty(count($popularFaq)))
        <section class="popular-topics-sec">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="popular-content">
                            <h6>Popular topics</h6>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($popularFaq as $popularFaqKey => $popularFaqVal)
                        @php
                            $gradient = "gradient-blue";
                            switch ($popularFaqKey) {
                              case 1:
                                $gradient = "gradient-yellow";
                                break;
                              case 2:
                                $gradient = "gradient-purple";
                                break;
                            }
                        @endphp
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="gradient-box {{$gradient}}">
                                <h6>{{$popularFaqVal->question}}</h6>
                                <p>{{\Illuminate\Support\Str::limit($popularFaqVal->answer, 50)}}</p>
                                <a href="javascript:void(0)">Read More</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    <!-- POPULAR TOPICS SECTION END -->


    <!-- RECOMMENDED SECTION BEGIN -->
    <section class="recommended-sec-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="recommended-for-text">
                        <h6>Recommended for you</h6>
                    </div>
                </div>
            </div>
            <div class="row border-bt recommended-child">
                @if(!empty(count($otherFaq)))
                    @foreach($otherFaq as $otherFaqVal)
                        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="bx-text">
                                <h6>{{$otherFaqVal->question}}</h6>
                                <p>{{\Illuminate\Support\Str::limit($otherFaqVal->answer, 50)}} <span> <a href="javascript:void(0)">Read More</a></span></p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-lg-4 col-md-4 col-sm-4 col-12 no-data">
                        <div class="bx-text">
                            <h6>No Data Found!</h6>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <!-- RECOMMENDED SECTION END -->

    <!-- FAQ SECTION BEGIN -->
    @include('front.partials.faq')
    <!-- FAQ SECTION END -->

    <section class="still-need-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="still-need-text">
                        <h4>Still need help?</h4>
                        <h6>We’re here for you.</h6>
                        <a href="mailto:{{$globalSettingData->contact_email}}" target="_blank" class="btn btn-primary"><img src="{{asset('assets/front/images/chat.png')}}" alt="image" class="img-fluid"> CHAT WITH SUPPORT</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="chat-img-fix">
                        <img src="{{asset('assets/front/images/chat-img.png')}}" alt="image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('front-scripts')
    <script>
        function searchFaq(){
            showLoader();
            let searchInput = $("#search_faq").val().length?$("#search_faq").val():"All";

            axios.get('{{ route('search.faq') }}',{
                params: {
                    search: searchInput
                }
            }).then(function(response) {
                let html = `<div class="col-lg-4 col-md-4 col-sm-4 col-12 no-data">
                        <div class="bx-text">
                            <h6>No Data Found!</h6>
                        </div>
                    </div>`;

                if(parseInt(response.data.data_count) === 0){
                    swal({
                        title: "No Data Found.",
                        icon: "info",
                        dangerMode: true,
                        closeOnClickOutside: false
                    });
                }else{
                    html = ``;
                    $.each(response.data.data, function (val){
                        html += `<div class="col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="bx-text">
                                <h6>${this.question}</h6>
                                <p>${this.answer.slice(0,50)}... <span> <a href="javascript:void(0)">Read More</a></span></p>
                            </div>
                        </div>`
                    });
                }
                $('.recommended-child').empty().append(html);
                hideLoader();
            }).catch(function(error) {
                hideLoader();
                swal({
                    title: "Something went wrong.",
                    icon: "info",
                    dangerMode: true,
                    closeOnClickOutside: false
                }).then((btn) => {
                    window.location.reload();
                });
            });
        }
    </script>
@endpush