@extends('admin.layouts.master')

@section('title', 'Update Faq')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Update Faq</h5>
                    <div class="card-body">
                        <form action="{{ route('faq.update.data', $data->id) }}" method="POST">
                            @csrf
                            @include('admin.partials.alert')
                            <div class="row mt-3">
                                <div class="col-md-12 mb-6">
                                    <label class="form-label">Question</label>
                                    <textarea rows="3" class="form-control" name="question" placeholder="Enter question">{{old('question', $data->question)}}</textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12 mb-6">
                                    <label class="form-label">Answer</label>
                                    <textarea rows="3" class="form-control" name="answer" placeholder="Enter answer">{{old('answer', $data->answer)}}</textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <a href="{{route('manage.faq')}}" class="btn btn-danger redirect-btn">Back</a>
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
