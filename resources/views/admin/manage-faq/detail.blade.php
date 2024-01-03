@extends('admin.layouts.master')

@section('title', 'Faq Detail')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Faq Detail</h5>
                    <div class="card-body">
                        <div class="row mt-3">
                            <div class="col-md-12 mb-6">
                                <label class="form-label">Question</label>
                                <textarea rows="3" class="form-control" disabled>{{$data->question}}</textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12 mb-6">
                                <label class="form-label">Answer</label>
                                <textarea rows="3" class="form-control" disabled>{{$data->answer}}</textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <a href="{{route('manage.faq')}}" class="btn btn-danger redirect-btn">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
