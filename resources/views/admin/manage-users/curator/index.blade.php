@extends('admin.layouts.master')

@section('title', 'Curator')

@push('styles')
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}" />
@endpush

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-header">
                <h5 class="float-start">Curator</h5>
                <a href="{{route('add.curator')}}" class="btn btn-primary float-end redirect-btn">Add +</a>
            </div>
            <div class="card-datatable text-nowrap">
                <div class="row">
                    <div class="col-md-12">
                        @include('admin.partials.alert')
                    </div>
                </div>
                <table id="custom_datatable" class="table table-bordered table-responsive"></table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{asset('assets/admin/vendor/libs/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('assets/admin/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
    <script src="{{asset('assets/admin/vendor/libs/datatables-responsive/datatables.responsive.js')}}"></script>
    <script src="{{asset('assets/admin/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js')}}"></script>
    <script src="{{asset('assets/js/axios.min.js')}}"></script>
    <script src="{{asset('assets/js/sweetalert.min.js')}}"></script>
    <script>
        $(function (){
            $('#custom_datatable').DataTable({
                "processing": true,
                "serverSide": true,
                'iDisplayLength':50,
                "orderMulti": true,
                "scrollX": true,
                "ajax": "{{ route('manage.curator') }}",
                "columns": [
                    { "data" : "display_name","title" : "UserName", "orderable": true, "searchable": true },
                    { "data" : "email","title" : "Email", "orderable": true, "searchable": true },
                    { "data" : "is_verified", "title" : "Status", "orderable": true, "searchable": true },
                    { "data" : "is_active", "title" : "Active/InActive", "orderable": false, "searchable": false },
                    { "data" : "action","title" : "Action", "orderable": false, "searchable": false, "width": "190px" }
                ]
            });
        });

        function changeStatus(route) {
            axios.get(route).then(function (response) {
                swal({
                    title: response.data.msg,
                    icon: "success",
                    closeOnClickOutside: false
                }).then((successBtn) => {
                    if (successBtn) {
                        $('#custom_datatable').DataTable().ajax.reload();
                    }
                });
            }).catch(function (error) {
                swal({
                    title: error.response.data.msg,
                    icon: "error",
                    dangerMode: true,
                    closeOnClickOutside: false
                });
            });
        }

        function deleteData(route) {
            swal({
                title: "Are You Sure?",
                icon: "warning",
                closeOnClickOutside: false,
                buttons:{cancel:true,confirm:"Yes, delete it!"},
                dangerMode: true
            }).then((btn) => {
                if(btn){
                    window.location.href = route;
                }
            })
        }
    </script>
@endpush
