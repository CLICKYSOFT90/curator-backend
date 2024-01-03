@extends('front.layouts.master', ['bodyClass' => 'label-bg-col', 'headerClass' => 'header how-it-work-header', 'fullFooter' => true])

@section('title', 'Curator Club - List Of Curators')
@push('front-styles')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
@section('content')
    <section class="wallet-pg-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-5 col-12">
                    <div class="funds-flex">
                        <div class="funds-inner-box">
                            <h6>Available Funds</h6>
                            <div class="fund-amount-box">
                                <small>Balance available for withdrawal</small>
                                <span>$0</span>
                                <a href="javascript:void(0)">Withdraw Funds</a>
                            </div>
                        </div>
                        <div class="funds-inner-box">
                            <h6>Earnings</h6>
                            <div class="fund-amount-box">
                                <small>Earnings to day</small>
                                <span>$0</span>
                                <p>Your earnings since joining.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-7 col-12">
                    <div class="payout-method-text">
                        <h6>Payout method</h6>
                    </div>
                    <div class="payment-inner-box">
                        <div class="bank-acc">
                            <p>Paypal</p>
                            <span>|</span>
                        </div>
                        <div class="paypal-img-btn">
                            <a href="javascript:void(0)" onclick="showAlert()" class="btn btn-primary"><img src="{{asset('assets/front/images/paypal-img.png')}}" alt="image" class="img-fluid"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="transaction-table-sec">
                        <h6>Transactions</h6>
                    </div>
                    <div class="transaction-box-bg">
                        <div class="transaction-flex">
                            <div class="transaction-first-select">
                                <div class="tr-first-box tr-first-toggle">
                                    <a href="javasript:void(0)">Date range <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
                                </div>
                                <div class="tr-first-content">
                                    <div class="tr-box-text tr-first-text-toggle">
                                        <h6>Date range</h6>
                                        <div class="tr-select-class">
                                            <select class="form-control">
                                                <option>Select a month</option>
                                                <option>Select a month</option>
                                                <option>Select a month</option>
                                            </select>
                                        </div>
                                        <div class="tr-select-class">
                                            <div class="tr-from">
                                                <label>From</label>
                                                <input type="date" placeholder="Date" class="form-control">
                                            </div>
                                            <div class="tr-from">
                                                <label>To</label>
                                                <input type="date" placeholder="Date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="apply-tr-btn">
                                            <button type="button" onclick="showLoaderAdmin()" class="btn btn-primary">Apply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="transaction-first-select">
                                <div class="tr-first-box tr-second-toggle">
                                    <a href="javasript:void(0)">Activity <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
                                </div>
                                <div class="tr-first-content">
                                    <div class="tr-box-text tr-second-text-toggle">
                                        <h6>Activity</h6>
                                        <div class="activity-checkbox">
                                            <label class="container-checkbox">Earning
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container-checkbox">Withdrawal
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container-checkbox">Pending
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="apply-tr-btn activity-clear">
                                            <a href="javasccript:void(0)">Clear all</a>
                                            <button type="button" onclick="showLoaderAdmin()" class="btn btn-primary">Apply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="transaction-main-table">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Date</th>
                                        <th scope="col">Activity</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Amount</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                        <p>no record found</p>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
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
        });

        $(document).ready(function() {
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
        });
        // TOGGLE DROPDOWN OPTION SCRIPT END
        $(document).ready(function() {
            $(".tr-first-box").on("click", function() {
                const spanElement = $(this).find("i");
                spanElement.toggleClass("rotate-180");
            });
        });
    </script>
@endpush