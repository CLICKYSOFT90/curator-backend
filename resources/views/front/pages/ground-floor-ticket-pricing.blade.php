@extends('front.layouts.master', ['headerClass' => 'header how-it-work-header'])

@section('title', 'Curator Club - Ground Floor Ticket Pricing')

@section('content')
    <!-- GROUND FLOOR TICKET PRICING SECTION BEGIN -->
    <section class="ground-floor-ticket-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                    <div class="ground-floor-heading">
                        <h4>Ground Floor Ticket Prices</h4>
                    </div>
                    <div class="ground-floor-box">
                        <div class="ground-floor-box1">
                            <div class="run-days-flex">
                                <div class="run-dasys-cls">
                                    <h6>Runs for 30 days.</h6>
                                    <p>One song will be on the playlisting floor for 30 days.</p>
                                </div>
                                <div class="amount-dy-cls">
                                    <span>40 <img src="{{asset('assets/front/images/cur-small-logo.png')}}" alt="image" class="img-fluid"></span>
                                    <small>$40/mo</small>
                                </div>
                            </div>
                            <div class="top-rows-flex">
                                <div class="top-rows-select">
                                    <div class="top-rows-input">
                                        <input id="checkbox-1" class="checkbox-custom" name="checkbox-1" type="checkbox">
                                        <label for="checkbox-1" class="checkbox-custom-label"></label>
                                    </div>
                                    <div class="top-rows-radio-text">
                                        <h6>Top 10 Raw</h6>
                                        <p>Your song will be featured on the top 10 list for one week.</p>
                                    </div>
                                </div>
                                <div class="top-rows-amount">
                                    <span>100 <img src="{{asset('assets/front/images/cur-small-logo.png')}}" alt="image" class="img-fluid"></span>
                                    <small>$100/week</small>
                                </div>
                            </div>
                            <div class="top-select-btn">
                                <button onclick="sendPackage('1')" class="btn btn-primary">SELECT</button>
                            </div>
                        </div>
                        <div class="ground-floor-box1">
                            <div class="run-days-flex">
                                <div class="run-dasys-cls">
                                    <h6>Runs for 60 days.</h6>
                                    <p>One song will be on the playlisting floor for 30 days.</p>
                                </div>
                                <div class="amount-dy-cls">
                                    <span>75 <img src="{{asset('assets/front/images/cur-small-logo.png')}}" alt="image" class="img-fluid"></span>
                                    <small>$75/mo</small>
                                </div>
                            </div>
                            <div class="top-rows-flex">
                                <div class="top-rows-select">
                                    <div class="top-rows-input">
                                        <input id="checkbox-2" class="checkbox-custom" name="checkbox-2" type="checkbox">
                                        <label for="checkbox-2" class="checkbox-custom-label"></label>
                                    </div>
                                    <div class="top-rows-radio-text">
                                        <h6>Top 10 Raw</h6>
                                        <p>Your song will be featured on the top 10 list for one week.</p>
                                    </div>
                                </div>
                                <div class="top-rows-amount">
                                    <span>100 <img src="{{asset('assets/front/images/cur-small-logo.png')}}" alt="image" class="img-fluid"></span>
                                    <small>$100/week</small>
                                </div>
                            </div>
                            <div class="top-select-btn">
                                <button onclick="sendPackage('2')" class="btn btn-primary">SELECT</button>
                            </div>
                        </div>
                        <div class="ground-floor-box1">
                            <div class="run-days-flex">
                                <div class="run-dasys-cls">
                                    <h6>Runs for 90 days.</h6>
                                    <p>One song will be on the playlisting floor for 30 days.</p>
                                </div>
                                <div class="amount-dy-cls">
                                    <span>110 <img src="{{asset('assets/front/images/cur-small-logo.png')}}" alt="image" class="img-fluid"></span>
                                    <small>$110/mo</small>
                                </div>
                            </div>
                            <div class="top-rows-flex">
                                <div class="top-rows-select">
                                    <div class="top-rows-input">
                                        <input id="checkbox-3" class="checkbox-custom" name="checkbox-3" type="checkbox">
                                        <label for="checkbox-3"class="checkbox-custom-label"></label>
                                    </div>
                                    <div class="top-rows-radio-text">
                                        <h6>Top 10 Raw</h6>
                                        <p>Your song will be featured on the top 10 list for one week.</p>
                                    </div>
                                </div>
                                <div class="top-rows-amount">
                                    <span>100 <img src="{{asset('assets/front/images/cur-small-logo.png')}}" alt="image" class="img-fluid"></span>
                                    <small>$100/week</small>
                                </div>
                            </div>
                            <div class="top-select-btn">
                                <button onclick="sendPackage('3')" class="btn btn-primary">SELECT</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                    <img src="{{asset('assets/front/images/cha3.png')}}" alt="image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- GROUND FLOOR TICKET PRICING SECTION END -->
@endsection

@push('front-scripts')
    <script>
        // BOXES CHECKBOX SCRIPT BEGIN
        $(document).ready(function() {
            $('.top-rows-select').click(function() {
                var radioInput = $(this).find('.checkbox-custom');
                radioInput.prop('checked', !radioInput.prop('checked'));
            });
        });

        function sendPackage(packageId) {
            localStorage.setItem('packageId', packageId);
            window.location.href = '{{route('user.upload.song.play.listing.floor')}}';
        }
        // BOXES CHECKBOX SCRIPT END
    </script>
@endpush