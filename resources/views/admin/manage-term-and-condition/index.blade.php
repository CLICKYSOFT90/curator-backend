@extends('admin.layouts.master')

@section('title', 'Manage Term And Condition')

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
                    <h5 class="card-header">Update Term & Condition</h5>
                    <div class="card-body">
                        <form action="{{route('manage.term.and.condition.data')}}" method="POST">
                            @csrf
                            @include('admin.partials.alert')
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <label class="form-label">Content</label>
                                    <div class="form-control" id="content"></div>
                                    <input type="hidden" name="content" value="">
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

@push('scripts')
    <script src="{{asset('assets/admin/vendor/libs/quill/katex.js')}}"></script>
    <script src="{{asset('assets/admin/vendor/libs/quill/quill.js')}}"></script>
    <script>
        $(function (){
            const vendorLetter = new Quill("#content",{
                bounds: "#content",
                placeholder: "Enter content...",
                modules: {
                    formula: !0,
                    toolbar: [[{
                        font: []
                    }, {
                        size: []
                    }], ["bold", "italic", "underline", "strike"], [{
                        color: []
                    }, {
                        background: []
                    }], [{
                        script: "super"
                    }, {
                        script: "sub"
                    }], [{
                        header: "1"
                    }, {
                        header: "2"
                    }, "blockquote", "code-block"], [{
                        list: "ordered"
                    }, {
                        list: "bullet"
                    }, {
                        indent: "-1"
                    }, {
                        indent: "+1"
                    }], [{
                        direction: "rtl"
                    }], ["link", "image", "video", "formula"], ["clean"]]
                },
                theme: "snow"
            });
            vendorLetter.root.innerHTML = {!! json_encode(old('content', $data->content)) !!};
            vendorLetter.on('text-change', function() {
                $("input[name=content]").val(vendorLetter.root.innerHTML);
            });
        });
    </script>
@endpush
