@extends('front.layouts.master', ['headerClass' => 'help-header', 'bodyClass' => 'signin-body-bg'])

@section('title', 'Curator Club - Account Verification')

@section('content')
    <section class="signin-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="main-curator-scr">
                        <div class="main-smp-div"></div>
                        <div class="main-signin-box verification-pg">
                            @include('front.partials.alert')
                            <form method="POST" action="{{route('user-verification.data')}}">
                                @csrf
                                <div class="create-account verification-account">
                                    <h5>Your Verification Code</h5>
                                    <p> Enter the verification code that you have <span>received in your email.</span></p>
                                </div>
                                <div id="form">
                                    <input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" id="col_1"/>
                                    <input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" id="col_2"/>
                                    <input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" id="col_3"/>
                                    <input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" id="col_4"/>
                                    <input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" id="col_5"/>
                                    <input type="hidden" name="verification_code" id="verification_code" value="">
                                </div>
                                <div class="confirmm-btn">
                                    <button type="submit" class="btn btn-primary">Verify</button>
                                </div>
                            </form>
                        </div>
                        <div class="main-smp-div"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('front-scripts')
    <script>
        $('form').submit(function (){
            const col1 = $("#col_1").val();
            const col2 = $("#col_2").val();
            const col3 = $("#col_3").val();
            const col4 = $("#col_4").val();
            const col5 = $("#col_5").val();
            $("#verification_code").val(col1+''+col2+''+col3+''+col4+''+col5);
        })
    </script>
@endpush

