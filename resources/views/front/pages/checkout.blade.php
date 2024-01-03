@extends('front.layouts.master', ['bodyClass' => 'label-bg-col', 'headerClass' => 'header how-it-work-header', 'fullFooter' => true])

@section('title', 'Curator Club - List Of Curators')
@push('front-styles')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .paynow-end-btn button {
        font-size: 15px;
        font-weight: 700;
        color: #535353;
        background: #FBBC04;
        display: block;
        text-align: center;
        padding: 15px 10px;
        border-radius: 10px;
    }
</style>
@endpush
@section('content')
    <section class="coin-bundles-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 left-grey-bg">
                    <div class="coin-bundles-content">
                        <h5>Coin Bundles</h5>
                        <div class="box-bundle" onclick="activateBundle(this)">
                            <div class="bundle-inner-text">
                                <div class="bundle-inner-selection">
                                    <input type="radio" id="bundle-radio" name="bundle" value="10.00">
                                    <label for="bundle-radio"></label>
                                </div>
                                <div class="bundle-inner-amount">
                                    <span>10
                                    <svg xmlns="http://www.w3.org/2000/svg" width="39.173" height="39.172" viewBox="0 0 39.173 39.172"><g transform="translate(-405.134 -933.999)"><g transform="translate(409.842 932.141)"><g transform="translate(-4.708 1.859)"><path d="M19.586,2.671A16.915,16.915,0,0,0,7.625,31.547,16.915,16.915,0,1,0,31.547,7.625,16.8,16.8,0,0,0,19.586,2.671m0-2.671A19.586,19.586,0,1,1,0,19.586,19.586,19.586,0,0,1,19.586,0Z" fill="#262626"/></g></g><g transform="translate(416.134 943.303) rotate(-1)"><g transform="translate(0 0)"><path d="M11.944,13.648a4.984,4.984,0,1,1-9.969,0V6.791A8.384,8.384,0,0,1,5.437,0,6.961,6.961,0,0,0,0,6.791v6.857a6.96,6.96,0,1,0,13.92,0v-.076h1.434v.079a8.384,8.384,0,0,1-3.461,6.788,6.961,6.961,0,0,0,5.437-6.791V11.6H11.944Z" transform="translate(0 0.173)" fill="#262626"/><path d="M13.92,6.96A6.96,6.96,0,1,0,0,6.96v6.857H0A3.52,3.52,0,0,0,.606,15.8a3.581,3.581,0,0,0,1.565,1.29,3.517,3.517,0,0,0,1.292.277,4.969,4.969,0,0,1-1.488-3.548V6.96a4.984,4.984,0,1,1,9.969,0v.076H10.51V6.96A3.519,3.519,0,0,0,9.9,4.979a3.581,3.581,0,0,0-1.565-1.29,3.518,3.518,0,0,0-1.292-.277A4.969,4.969,0,0,1,8.535,6.96V9.012H13.92Z" transform="translate(3.409 0)" fill="#262626"/></g></g></g></svg>
                                    </span>
                                    <h6>$10 USD</h6>
                                </div>
                            </div>
                            <div class="bundle-small-img">
                                <svg xmlns="http://www.w3.org/2000/svg" width="68" height="68" viewBox="0 0 68 68"><g transform="translate(-0.68 -0.211)"><circle cx="34" cy="34" r="34" transform="translate(0.68 0.211)" fill="#fbbc04" opacity="0.4"/><g transform="translate(10.797 10.327)"><g transform="translate(-0.116 -0.118)" fill="none" stroke="#535353" stroke-width="1"><circle cx="24.5" cy="24.5" r="24.5" stroke="none"/><circle cx="24.5" cy="24.5" r="24" fill="none"/></g><g transform="translate(13.163 11.505) rotate(-1)"><g transform="translate(0 0)"><path d="M15.489,17.7a6.463,6.463,0,1,1-12.927,0V8.806A10.872,10.872,0,0,1,7.05,0,9.027,9.027,0,0,0,0,8.806V17.7a9.025,9.025,0,1,0,18.051,0v-.1h1.86v.1s0,0,0,0a10.871,10.871,0,0,1-4.488,8.8,9.027,9.027,0,0,0,7.05-8.806V15.037H15.489Z" transform="translate(0 0.224)" fill="#535353"/><path d="M18.051,9.025A9.025,9.025,0,1,0,0,9.025V17.92a4.564,4.564,0,0,0,.786,2.568,4.644,4.644,0,0,0,2.03,1.673,4.561,4.561,0,0,0,1.676.359,6.443,6.443,0,0,1-1.929-4.6V9.025a6.463,6.463,0,1,1,12.927,0v.1h-1.86v-.1a4.564,4.564,0,0,0-.786-2.57,4.644,4.644,0,0,0-2.029-1.673,4.561,4.561,0,0,0-1.676-.359,6.443,6.443,0,0,1,1.93,4.6v2.661h6.984Z" transform="translate(4.421)" fill="#535353"/></g></g></g></g></svg>
                            </div>
                        </div>
                        <div class="box-bundle" onclick="activateBundle(this)">
                            <div class="bundle-inner-text">
                                <div class="bundle-inner-selection">
                                    <input type="radio" id="bundle-radio1" name="bundle" value="28.00">
                                    <label for="bundle-radio1"></label>
                                </div>
                                <div class="bundle-inner-amount">
                                    <span>30
                                    <svg xmlns="http://www.w3.org/2000/svg" width="39.173" height="39.172" viewBox="0 0 39.173 39.172"><g transform="translate(-405.134 -933.999)"><g transform="translate(409.842 932.141)"><g transform="translate(-4.708 1.859)"><path d="M19.586,2.671A16.915,16.915,0,0,0,7.625,31.547,16.915,16.915,0,1,0,31.547,7.625,16.8,16.8,0,0,0,19.586,2.671m0-2.671A19.586,19.586,0,1,1,0,19.586,19.586,19.586,0,0,1,19.586,0Z" fill="#262626"/></g></g><g transform="translate(416.134 943.303) rotate(-1)"><g transform="translate(0 0)"><path d="M11.944,13.648a4.984,4.984,0,1,1-9.969,0V6.791A8.384,8.384,0,0,1,5.437,0,6.961,6.961,0,0,0,0,6.791v6.857a6.96,6.96,0,1,0,13.92,0v-.076h1.434v.079a8.384,8.384,0,0,1-3.461,6.788,6.961,6.961,0,0,0,5.437-6.791V11.6H11.944Z" transform="translate(0 0.173)" fill="#262626"/><path d="M13.92,6.96A6.96,6.96,0,1,0,0,6.96v6.857H0A3.52,3.52,0,0,0,.606,15.8a3.581,3.581,0,0,0,1.565,1.29,3.517,3.517,0,0,0,1.292.277,4.969,4.969,0,0,1-1.488-3.548V6.96a4.984,4.984,0,1,1,9.969,0v.076H10.51V6.96A3.519,3.519,0,0,0,9.9,4.979a3.581,3.581,0,0,0-1.565-1.29,3.518,3.518,0,0,0-1.292-.277A4.969,4.969,0,0,1,8.535,6.96V9.012H13.92Z" transform="translate(3.409 0)" fill="#262626"/></g></g></g></svg>
                                    </span>
                                    <h6>$28 USD</h6>
                                </div>
                            </div>
                            <div class="bundle-small-img">
                                <svg xmlns="http://www.w3.org/2000/svg" width="68" height="68" viewBox="0 0 68 68"><g transform="translate(-0.68 -0.211)"><circle cx="34" cy="34" r="34" transform="translate(0.68 0.211)" fill="#fbbc04" opacity="0.4"/><g transform="translate(10.797 10.327)"><g transform="translate(-0.116 -0.118)" fill="none" stroke="#535353" stroke-width="1"><circle cx="24.5" cy="24.5" r="24.5" stroke="none"/><circle cx="24.5" cy="24.5" r="24" fill="none"/></g><g transform="translate(13.163 11.505) rotate(-1)"><g transform="translate(0 0)"><path d="M15.489,17.7a6.463,6.463,0,1,1-12.927,0V8.806A10.872,10.872,0,0,1,7.05,0,9.027,9.027,0,0,0,0,8.806V17.7a9.025,9.025,0,1,0,18.051,0v-.1h1.86v.1s0,0,0,0a10.871,10.871,0,0,1-4.488,8.8,9.027,9.027,0,0,0,7.05-8.806V15.037H15.489Z" transform="translate(0 0.224)" fill="#535353"/><path d="M18.051,9.025A9.025,9.025,0,1,0,0,9.025V17.92a4.564,4.564,0,0,0,.786,2.568,4.644,4.644,0,0,0,2.03,1.673,4.561,4.561,0,0,0,1.676.359,6.443,6.443,0,0,1-1.929-4.6V9.025a6.463,6.463,0,1,1,12.927,0v.1h-1.86v-.1a4.564,4.564,0,0,0-.786-2.57,4.644,4.644,0,0,0-2.029-1.673,4.561,4.561,0,0,0-1.676-.359,6.443,6.443,0,0,1,1.93,4.6v2.661h6.984Z" transform="translate(4.421)" fill="#535353"/></g></g></g></g></svg>
                            </div>
                        </div>
                        <div class="box-bundle" onclick="activateBundle(this)">
                            <div class="bundle-inner-text">
                                <div class="bundle-inner-selection">
                                    <input type="radio" id="bundle-radio2" name="bundle" value="45.00">
                                    <label for="bundle-radio2"></label>
                                </div>
                                <div class="bundle-inner-amount">
                                    <span>50
                                    <svg xmlns="http://www.w3.org/2000/svg" width="39.173" height="39.172" viewBox="0 0 39.173 39.172"><g transform="translate(-405.134 -933.999)"><g transform="translate(409.842 932.141)"><g transform="translate(-4.708 1.859)"><path d="M19.586,2.671A16.915,16.915,0,0,0,7.625,31.547,16.915,16.915,0,1,0,31.547,7.625,16.8,16.8,0,0,0,19.586,2.671m0-2.671A19.586,19.586,0,1,1,0,19.586,19.586,19.586,0,0,1,19.586,0Z" fill="#262626"/></g></g><g transform="translate(416.134 943.303) rotate(-1)"><g transform="translate(0 0)"><path d="M11.944,13.648a4.984,4.984,0,1,1-9.969,0V6.791A8.384,8.384,0,0,1,5.437,0,6.961,6.961,0,0,0,0,6.791v6.857a6.96,6.96,0,1,0,13.92,0v-.076h1.434v.079a8.384,8.384,0,0,1-3.461,6.788,6.961,6.961,0,0,0,5.437-6.791V11.6H11.944Z" transform="translate(0 0.173)" fill="#262626"/><path d="M13.92,6.96A6.96,6.96,0,1,0,0,6.96v6.857H0A3.52,3.52,0,0,0,.606,15.8a3.581,3.581,0,0,0,1.565,1.29,3.517,3.517,0,0,0,1.292.277,4.969,4.969,0,0,1-1.488-3.548V6.96a4.984,4.984,0,1,1,9.969,0v.076H10.51V6.96A3.519,3.519,0,0,0,9.9,4.979a3.581,3.581,0,0,0-1.565-1.29,3.518,3.518,0,0,0-1.292-.277A4.969,4.969,0,0,1,8.535,6.96V9.012H13.92Z" transform="translate(3.409 0)" fill="#262626"/></g></g></g></svg>
                                    </span>
                                    <h6>$45 USD</h6>
                                </div>
                            </div>
                            <div class="bundle-small-img">
                                <svg xmlns="http://www.w3.org/2000/svg" width="68" height="68" viewBox="0 0 68 68"><g transform="translate(-0.68 -0.211)"><circle cx="34" cy="34" r="34" transform="translate(0.68 0.211)" fill="#fbbc04" opacity="0.4"/><g transform="translate(10.797 10.327)"><g transform="translate(-0.116 -0.118)" fill="none" stroke="#535353" stroke-width="1"><circle cx="24.5" cy="24.5" r="24.5" stroke="none"/><circle cx="24.5" cy="24.5" r="24" fill="none"/></g><g transform="translate(13.163 11.505) rotate(-1)"><g transform="translate(0 0)"><path d="M15.489,17.7a6.463,6.463,0,1,1-12.927,0V8.806A10.872,10.872,0,0,1,7.05,0,9.027,9.027,0,0,0,0,8.806V17.7a9.025,9.025,0,1,0,18.051,0v-.1h1.86v.1s0,0,0,0a10.871,10.871,0,0,1-4.488,8.8,9.027,9.027,0,0,0,7.05-8.806V15.037H15.489Z" transform="translate(0 0.224)" fill="#535353"/><path d="M18.051,9.025A9.025,9.025,0,1,0,0,9.025V17.92a4.564,4.564,0,0,0,.786,2.568,4.644,4.644,0,0,0,2.03,1.673,4.561,4.561,0,0,0,1.676.359,6.443,6.443,0,0,1-1.929-4.6V9.025a6.463,6.463,0,1,1,12.927,0v.1h-1.86v-.1a4.564,4.564,0,0,0-.786-2.57,4.644,4.644,0,0,0-2.029-1.673,4.561,4.561,0,0,0-1.676-.359,6.443,6.443,0,0,1,1.93,4.6v2.661h6.984Z" transform="translate(4.421)" fill="#535353"/></g></g></g></g></svg>
                            </div>
                        </div>
                        <div class="box-bundle" onclick="activateBundle(this)">
                            <div class="bundle-inner-text">
                                <div class="bundle-inner-selection">
                                    <input type="radio" id="bundle-radio3" name="bundle" value="90.00">
                                    <label for="bundle-radio3"></label>
                                </div>
                                <div class="bundle-inner-amount">
                                    <span>100
                                    <svg xmlns="http://www.w3.org/2000/svg" width="39.173" height="39.172" viewBox="0 0 39.173 39.172"><g transform="translate(-405.134 -933.999)"><g transform="translate(409.842 932.141)"><g transform="translate(-4.708 1.859)"><path d="M19.586,2.671A16.915,16.915,0,0,0,7.625,31.547,16.915,16.915,0,1,0,31.547,7.625,16.8,16.8,0,0,0,19.586,2.671m0-2.671A19.586,19.586,0,1,1,0,19.586,19.586,19.586,0,0,1,19.586,0Z" fill="#262626"/></g></g><g transform="translate(416.134 943.303) rotate(-1)"><g transform="translate(0 0)"><path d="M11.944,13.648a4.984,4.984,0,1,1-9.969,0V6.791A8.384,8.384,0,0,1,5.437,0,6.961,6.961,0,0,0,0,6.791v6.857a6.96,6.96,0,1,0,13.92,0v-.076h1.434v.079a8.384,8.384,0,0,1-3.461,6.788,6.961,6.961,0,0,0,5.437-6.791V11.6H11.944Z" transform="translate(0 0.173)" fill="#262626"/><path d="M13.92,6.96A6.96,6.96,0,1,0,0,6.96v6.857H0A3.52,3.52,0,0,0,.606,15.8a3.581,3.581,0,0,0,1.565,1.29,3.517,3.517,0,0,0,1.292.277,4.969,4.969,0,0,1-1.488-3.548V6.96a4.984,4.984,0,1,1,9.969,0v.076H10.51V6.96A3.519,3.519,0,0,0,9.9,4.979a3.581,3.581,0,0,0-1.565-1.29,3.518,3.518,0,0,0-1.292-.277A4.969,4.969,0,0,1,8.535,6.96V9.012H13.92Z" transform="translate(3.409 0)" fill="#262626"/></g></g></g></svg>
                                    </span>
                                    <h6>$90 USD</h6>
                                </div>
                            </div>
                            <div class="bundle-small-img">
                                <svg xmlns="http://www.w3.org/2000/svg" width="68" height="68" viewBox="0 0 68 68"><g transform="translate(-0.68 -0.211)"><circle cx="34" cy="34" r="34" transform="translate(0.68 0.211)" fill="#fbbc04" opacity="0.4"/><g transform="translate(10.797 10.327)"><g transform="translate(-0.116 -0.118)" fill="none" stroke="#535353" stroke-width="1"><circle cx="24.5" cy="24.5" r="24.5" stroke="none"/><circle cx="24.5" cy="24.5" r="24" fill="none"/></g><g transform="translate(13.163 11.505) rotate(-1)"><g transform="translate(0 0)"><path d="M15.489,17.7a6.463,6.463,0,1,1-12.927,0V8.806A10.872,10.872,0,0,1,7.05,0,9.027,9.027,0,0,0,0,8.806V17.7a9.025,9.025,0,1,0,18.051,0v-.1h1.86v.1s0,0,0,0a10.871,10.871,0,0,1-4.488,8.8,9.027,9.027,0,0,0,7.05-8.806V15.037H15.489Z" transform="translate(0 0.224)" fill="#535353"/><path d="M18.051,9.025A9.025,9.025,0,1,0,0,9.025V17.92a4.564,4.564,0,0,0,.786,2.568,4.644,4.644,0,0,0,2.03,1.673,4.561,4.561,0,0,0,1.676.359,6.443,6.443,0,0,1-1.929-4.6V9.025a6.463,6.463,0,1,1,12.927,0v.1h-1.86v-.1a4.564,4.564,0,0,0-.786-2.57,4.644,4.644,0,0,0-2.029-1.673,4.561,4.561,0,0,0-1.676-.359,6.443,6.443,0,0,1,1.93,4.6v2.661h6.984Z" transform="translate(4.421)" fill="#535353"/></g></g></g></g></svg>
                            </div>
                        </div>
                        <div class="box-bundle" onclick="activateBundle(this)">
                            <div class="bundle-inner-text">
                                <div class="bundle-inner-selection">
                                    <input type="radio" id="bundle-radio4" name="bundle" value="210.00">
                                    <label for="bundle-radio4"></label>
                                </div>
                                <div class="bundle-inner-amount">
                                    <span>250
                                    <svg xmlns="http://www.w3.org/2000/svg" width="39.173" height="39.172" viewBox="0 0 39.173 39.172"><g transform="translate(-405.134 -933.999)"><g transform="translate(409.842 932.141)"><g transform="translate(-4.708 1.859)"><path d="M19.586,2.671A16.915,16.915,0,0,0,7.625,31.547,16.915,16.915,0,1,0,31.547,7.625,16.8,16.8,0,0,0,19.586,2.671m0-2.671A19.586,19.586,0,1,1,0,19.586,19.586,19.586,0,0,1,19.586,0Z" fill="#262626"/></g></g><g transform="translate(416.134 943.303) rotate(-1)"><g transform="translate(0 0)"><path d="M11.944,13.648a4.984,4.984,0,1,1-9.969,0V6.791A8.384,8.384,0,0,1,5.437,0,6.961,6.961,0,0,0,0,6.791v6.857a6.96,6.96,0,1,0,13.92,0v-.076h1.434v.079a8.384,8.384,0,0,1-3.461,6.788,6.961,6.961,0,0,0,5.437-6.791V11.6H11.944Z" transform="translate(0 0.173)" fill="#262626"/><path d="M13.92,6.96A6.96,6.96,0,1,0,0,6.96v6.857H0A3.52,3.52,0,0,0,.606,15.8a3.581,3.581,0,0,0,1.565,1.29,3.517,3.517,0,0,0,1.292.277,4.969,4.969,0,0,1-1.488-3.548V6.96a4.984,4.984,0,1,1,9.969,0v.076H10.51V6.96A3.519,3.519,0,0,0,9.9,4.979a3.581,3.581,0,0,0-1.565-1.29,3.518,3.518,0,0,0-1.292-.277A4.969,4.969,0,0,1,8.535,6.96V9.012H13.92Z" transform="translate(3.409 0)" fill="#262626"/></g></g></g></svg>
                                    </span>
                                    <h6>$210 USD</h6>
                                </div>
                            </div>
                            <div class="bundle-small-img">
                                <svg xmlns="http://www.w3.org/2000/svg" width="68" height="68" viewBox="0 0 68 68"><g transform="translate(-0.68 -0.211)"><circle cx="34" cy="34" r="34" transform="translate(0.68 0.211)" fill="#fbbc04" opacity="0.4"/><g transform="translate(10.797 10.327)"><g transform="translate(-0.116 -0.118)" fill="none" stroke="#535353" stroke-width="1"><circle cx="24.5" cy="24.5" r="24.5" stroke="none"/><circle cx="24.5" cy="24.5" r="24" fill="none"/></g><g transform="translate(13.163 11.505) rotate(-1)"><g transform="translate(0 0)"><path d="M15.489,17.7a6.463,6.463,0,1,1-12.927,0V8.806A10.872,10.872,0,0,1,7.05,0,9.027,9.027,0,0,0,0,8.806V17.7a9.025,9.025,0,1,0,18.051,0v-.1h1.86v.1s0,0,0,0a10.871,10.871,0,0,1-4.488,8.8,9.027,9.027,0,0,0,7.05-8.806V15.037H15.489Z" transform="translate(0 0.224)" fill="#535353"/><path d="M18.051,9.025A9.025,9.025,0,1,0,0,9.025V17.92a4.564,4.564,0,0,0,.786,2.568,4.644,4.644,0,0,0,2.03,1.673,4.561,4.561,0,0,0,1.676.359,6.443,6.443,0,0,1-1.929-4.6V9.025a6.463,6.463,0,1,1,12.927,0v.1h-1.86v-.1a4.564,4.564,0,0,0-.786-2.57,4.644,4.644,0,0,0-2.029-1.673,4.561,4.561,0,0,0-1.676-.359,6.443,6.443,0,0,1,1.93,4.6v2.661h6.984Z" transform="translate(4.421)" fill="#535353"/></g></g></g></g></svg>
                            </div>
                        </div>
                        <div class="box-bundle" onclick="activateBundle(this)">
                            <div class="bundle-inner-text">
                                <div class="bundle-inner-selection">
                                    <input type="radio" id="bundle-radio5" name="bundle" value="400.00">
                                    <label for="bundle-radio5"></label>
                                </div>
                                <div class="bundle-inner-amount">
                                    <span>500
                                    <svg xmlns="http://www.w3.org/2000/svg" width="39.173" height="39.172" viewBox="0 0 39.173 39.172"><g transform="translate(-405.134 -933.999)"><g transform="translate(409.842 932.141)"><g transform="translate(-4.708 1.859)"><path d="M19.586,2.671A16.915,16.915,0,0,0,7.625,31.547,16.915,16.915,0,1,0,31.547,7.625,16.8,16.8,0,0,0,19.586,2.671m0-2.671A19.586,19.586,0,1,1,0,19.586,19.586,19.586,0,0,1,19.586,0Z" fill="#262626"/></g></g><g transform="translate(416.134 943.303) rotate(-1)"><g transform="translate(0 0)"><path d="M11.944,13.648a4.984,4.984,0,1,1-9.969,0V6.791A8.384,8.384,0,0,1,5.437,0,6.961,6.961,0,0,0,0,6.791v6.857a6.96,6.96,0,1,0,13.92,0v-.076h1.434v.079a8.384,8.384,0,0,1-3.461,6.788,6.961,6.961,0,0,0,5.437-6.791V11.6H11.944Z" transform="translate(0 0.173)" fill="#262626"/><path d="M13.92,6.96A6.96,6.96,0,1,0,0,6.96v6.857H0A3.52,3.52,0,0,0,.606,15.8a3.581,3.581,0,0,0,1.565,1.29,3.517,3.517,0,0,0,1.292.277,4.969,4.969,0,0,1-1.488-3.548V6.96a4.984,4.984,0,1,1,9.969,0v.076H10.51V6.96A3.519,3.519,0,0,0,9.9,4.979a3.581,3.581,0,0,0-1.565-1.29,3.518,3.518,0,0,0-1.292-.277A4.969,4.969,0,0,1,8.535,6.96V9.012H13.92Z" transform="translate(3.409 0)" fill="#262626"/></g></g></g></svg>
                                    </span>
                                    <h6>$400 USD</h6>
                                </div>
                            </div>
                            <div class="bundle-small-img">
                                <svg xmlns="http://www.w3.org/2000/svg" width="68" height="68" viewBox="0 0 68 68"><g transform="translate(-0.68 -0.211)"><circle cx="34" cy="34" r="34" transform="translate(0.68 0.211)" fill="#fbbc04" opacity="0.4"/><g transform="translate(10.797 10.327)"><g transform="translate(-0.116 -0.118)" fill="none" stroke="#535353" stroke-width="1"><circle cx="24.5" cy="24.5" r="24.5" stroke="none"/><circle cx="24.5" cy="24.5" r="24" fill="none"/></g><g transform="translate(13.163 11.505) rotate(-1)"><g transform="translate(0 0)"><path d="M15.489,17.7a6.463,6.463,0,1,1-12.927,0V8.806A10.872,10.872,0,0,1,7.05,0,9.027,9.027,0,0,0,0,8.806V17.7a9.025,9.025,0,1,0,18.051,0v-.1h1.86v.1s0,0,0,0a10.871,10.871,0,0,1-4.488,8.8,9.027,9.027,0,0,0,7.05-8.806V15.037H15.489Z" transform="translate(0 0.224)" fill="#535353"/><path d="M18.051,9.025A9.025,9.025,0,1,0,0,9.025V17.92a4.564,4.564,0,0,0,.786,2.568,4.644,4.644,0,0,0,2.03,1.673,4.561,4.561,0,0,0,1.676.359,6.443,6.443,0,0,1-1.929-4.6V9.025a6.463,6.463,0,1,1,12.927,0v.1h-1.86v-.1a4.564,4.564,0,0,0-.786-2.57,4.644,4.644,0,0,0-2.029-1.673,4.561,4.561,0,0,0-1.676-.359,6.443,6.443,0,0,1,1.93,4.6v2.661h6.984Z" transform="translate(4.421)" fill="#535353"/></g></g></g></g></svg>
                            </div>
                        </div>
                        <div class="box-bundle" onclick="activateBundle(this)">
                            <div class="bundle-inner-text">
                                <div class="bundle-inner-selection">
                                    <input type="radio" id="bundle-radio5" name="bundle" >
                                    <label for="bundle-radio5"></label>
                                </div>
                                <div class="row pl-modal-content">
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-12">
                                        <div class="pageload-content">
                                            <span>CURATOR CLUB PLAY LISTING FLOOR</span>
                                            <h2>Unlock More Exposure</h2>
                                            <p>Take your music to new heights! Upgrade your submission with the 1-Month Playlisting Floor Bundle for extra visibility and potential fans. Don't miss out—level up your music journey today.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-12">
                                        <img src="{{asset('assets/front/images/speaker.png')}}" alt="image" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="coin-bundle-payment">
                        <h5>Payment Details</h5>
                        <p>Complete your purchase by providing your payment details.</p>
                        @if (Session::has('success'))
                            <div class="alert alert-success text-center">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <p>{{ Session::get('success') }}</p>
                            </div>
                        @endif
                        <form
                                role="form"
                                action="{{ route('storeStripePayment') }}"
                                method="post"
                                class="require-validation"
                                data-cc-on-file="false"
                                data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                                id="payment-form">
                            @csrf
                        <div class="payment-method-field">
                            <input type="hidden" name="amount" id="amount">
                            <p>Payment Method</p>
                            <div class="methods-selection tabs">
                                <div class="methods-cards-selection slide-prev">
                                    <a href="javascript:void(0)">
                                        <input type="radio" name="payment" checked>
                                        <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                                        <p>Credit or Debit card</p>
                                    </a>
                                </div>
                                <div class="paypal-method-selection slide-next">
                                    <a href="javascript:void(0)">
                                        <input type="radio" name="payment">
                                        <img src="{{asset('assets/front/images/paypal-logo.png')}}" alt="image" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="methods-selection-slide">
                                <div class="cards-overflow-div slide-container">
                                    <div class="slide-first-fields">
                                        <label>Card Details</label>
                                        <div class="complete-field">
                                            <div class="card-inside">
                                                <input type="text" placeholder="Card Number" name="card_number" class="form-control card-number-text card-number">
                                                <div class="card-inside-img">
                                                    <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="month-field-cont">
                                                <input type="text" placeholder="MM" name="exp_month" class="form-control month-field card-expiry-month">
                                            </div>
                                            <div class="month-field-cont">
                                                <input type="text" placeholder="YYYY" name="exp_year" class="form-control month-field card-expiry-year">
                                            </div>
                                            <div class="cvc-field-cont">
                                                <input type="password" placeholder="CVC" name="cvc_number" class="form-control cvc-field card-cvc">
                                            </div>
                                        </div>
                                        <div class="card-holder-name">
                                            <label>Card Holder Name</label>
                                            <input type="text" placeholder="Jeff Jordan" name="card_number" class="form-control card-number">
                                        </div>
                                    </div>
                                    <div class="slide-second-fields">
                                        <a href="javascript:void(0)"><img src="{{asset('assets/front/images/pay-pal-btn.png')}}" alt="image" class="img-fluid"></a>
                                        <p>Login to your PayPal account with your credentials.</p>
                                    </div>
                                </div>
                                <div class="billing-address">
                                    <div class="paypal-hide">
                                        <label>Billing address</label>
                                        <select class="form-control country-form" name="country_id">
                                            @foreach($countries as $country)
                                            <option value="{{$country->id}}">{{$country->country_name}}</option>
                                            @endforeach
                                        </select>
                                        <div class="state-zip-content">
                                            <input type="number" class="form-control number-form" name="zip_code" placeholder="ZIP">
                                            <input type="text" class="form-control state-form" name="state" placeholder="State">
                                        </div>
                                    </div>
                                    <div class="promo-code-content">
                                        <label>Promotion Code</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="subtotal-summary">
                                        <ul>
                                            <li><strong>Subtotal</strong> <span class="pull-right amount---custom" ></span></li>
                                            <li>Promo code <span class="pull-right"><strong>$0</strong></span></li>
                                            <li><strong>Subtotal</strong> <span class="pull-right total--amount"><strong>$100.00</strong></span></li>
                                        </ul>
                                    </div>
                                    <div class="paynow-end-btn">
                                        <button type="submit">Pay Now</button>
                                        <p><i class="fa fa-lock" aria-hidden="true"></i> Payments are secure and encrypted</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CHECKOUT CURATOR SECTION END -->
    <!-- COPYRIGHT SECTION BEGIN -->
    <section class="copyright-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <p>Copyright © 2022-2023 Curator Club  |   All rights reserved   |   Proudly designed by <a href="https://clickysoft.com/" target="_blank">clickysoft</a></p>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('front-scripts')
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script src="{{asset('assets/front/js/wow.min.js')}}"></script>
    <script type="text/javascript">

        $(function() {

            /*------------------------------------------
            --------------------------------------------
            Stripe Payment Code
            --------------------------------------------
            --------------------------------------------*/

            var $form = $(".require-validation");

            $('form.require-validation').bind('submit', function(e) {
                var $form = $(".require-validation"),
                    inputSelector = ['input[type=email]', 'input[type=password]',
                        'input[type=text]', 'input[type=file]',
                        'textarea'].join(', '),
                    $inputs = $form.find('.required').find(inputSelector),
                    $errorMessage = $form.find('div.error'),
                    valid = true;
                $errorMessage.addClass('hide');

                $('.has-error').removeClass('has-error');
                $inputs.each(function(i, el) {
                    var $input = $(el);
                    if ($input.val() === '') {
                        $input.parent().addClass('has-error');
                        $errorMessage.removeClass('hide');
                        e.preventDefault();
                    }
                });

                if (!$form.data('cc-on-file')) {
                    e.preventDefault();
                    Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                    Stripe.createToken({
                        number: $('.card-number').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val()
                    }, stripeResponseHandler);
                }

            });

            /*------------------------------------------
            --------------------------------------------
            Stripe Response Handler
            --------------------------------------------
            --------------------------------------------*/
            function stripeResponseHandler(status, response) {
                if (response.error) {
                    $('.error')
                        .removeClass('hide')
                        .find('.alert')
                        .text(response.error.message);
                } else {
                    /* token contains id, last4, and card type */
                    var token = response['id'];

                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();
                }
            }

        });
    </script>



    <script>
        function checkAmount(input) {
          let price =  $(input).val();
          $('.amount---custom').empty()
          $('.total--amount').empty()
          $('.amount---custom').append(`<strong >$${price}</strong>`)
            $('#amount').val(price);
          $('.total--amount').append(`<strong >$${price}</strong>`)
        }
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
        $('.panel-collapse').on('show.bs.collapse', function () {
            $(this).siblings('.panel-heading').addClass('active');
        });
        $('.panel-collapse').on('hide.bs.collapse', function () {
            $(this).siblings('.panel-heading').removeClass('active');
        });
        /*ACCORDIAN SCRIPT END*/
        // CHECKOUT RADIO BUTTON SELECTION SCRIPT BEGIN
        let selectedBundle = null;
        function activateBundle(element) {
            if (selectedBundle) {
                selectedBundle.classList.remove("selected");
            }
            element.classList.add("selected");
            selectedBundle = element;
            const radioButton = element.querySelector('input[type="radio"]');
            checkAmount(radioButton)
            if (radioButton) {
                radioButton.checked = true;
            }
        }
        // CHECKOUT RADIO BUTTON SELECTION SCRIPT END
        // PAYMENT METHOD SLIDE SHOW & HIDE SCRIPT BEGIN
        $(".slide-container").slick({
            arrows:false,
            dots:false,
            infinite:false,
        })
        $('.slide-prev').click(function (e) {
            $('.slide-container').slick('slickPrev');
            $(".methods-cards-selection input[type=radio]").prop('checked', true);
            $(".paypal-method-selection input[type=radio]").prop('checked', false);
        });
        $('.slide-next').click(function (e) {
            $('.slide-container').slick('slickNext');
            $(".methods-cards-selection input[type=radio]").prop('checked', false);
            $(".paypal-method-selection input[type=radio]").prop('checked', true);
        });
        // PAYMENT METHOD SLIDE SHOW & HIDE SCRIPT END
        // PAYPAL BILLING ADDRESS SCRIPT BEGIN
        $(document).ready(function () {
            $(".paypal-hide").show();
            $(".slide-next").click(function () {
                $(".paypal-hide").hide();
            });
            $(".slide-prev").click(function () {
                $(".paypal-hide").show();
            });
        });
        // PAYPAL BILLING ADDRESS SCRIPT END
        // ON PAGE LOAD MODAL SCRIPT BEGIN
        $(document).ready(function(){
            $("#myModal-pageload").modal('show');
        });
    </script>
@endpush