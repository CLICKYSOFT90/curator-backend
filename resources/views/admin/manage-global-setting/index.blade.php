@extends('admin.layouts.master')

@section('title', 'Manage Global Setting')

@push('styles')
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/libs/quill/typography.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/libs/quill/katex.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/libs/quill/editor.css')}}"/>
@endpush

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Update Global Setting</h5>
                    <div class="card-body">
                        <form action="{{route('manage.global.setting.data')}}" method="POST">
                            @csrf
                            @include('admin.partials.alert')
                            <div class="row mt-3">
                                <div class="col-md-12 mb-6">
                                    <label class="form-label">Basic Info</label>
                                    <textarea rows="3" class="form-control" name="basic_info" placeholder="Enter basic info">{{old('basic_info', $data->basic_info)}}</textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Contact Email</label>
                                    <input type="text" class="form-control" name="contact_email" value="{{old('contact_email', $data->contact_email)}}" placeholder="Enter contact email"/>
                                </div>
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Facebook Link</label>
                                    <input type="text" class="form-control" name="facebook_link" value="{{old('facebook_link', $data->facebook_link)}}" placeholder="Enter facebook link"/>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Twitter Link</label>
                                    <input type="text" class="form-control" name="twitter_link" value="{{old('twitter_link', $data->twitter_link)}}" placeholder="Enter twitter link"/>
                                </div>
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Instagram Link</label>
                                    <input type="text" class="form-control" name="instagram_link" value="{{old('instagram_link', $data->instagram_link)}}" placeholder="Enter instagram link"/>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary" onclick="showLoader()">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
