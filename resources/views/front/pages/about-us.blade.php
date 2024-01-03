@extends('front.layouts.master', ['bodyClass' => 'label-bg-col', 'headerClass' => 'help-header', 'fullFooter' => true])

@section('title', 'Curator Club - About Us')

@section('content')
    <section class="terms-conditions-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    {!! $data->content !!}
                </div>
            </div>
        </div>
    </section>
@endsection