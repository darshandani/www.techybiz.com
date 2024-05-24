@extends('backend.layouts.main')

@section('title', 'D-Tech : : FAQ LISTING')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row g-4 mb-4">
        <div class="col-sm-6 col-xl-3">

        </div>
        <!-- Users List Table -->
        <div class="card">
            <div class="card-header border-bottom">
                <h5 class="card-title mb-3">FAQ LISTING</h5>
                <a class="btn btn-success" href="{{ route('csv_faqs') }}"><i class="bi bi-filetype-csv">    CSV</i></a>  &nbsp;
                <a class="btn btn-danger" href="{{ route('faq_export_pdf') }}"><i class="bi bi-file-earmark-pdf">   PDF</i></a>
                <div class="text-end">
                    <a class="btn btn-primary" href="addfaq">ADD FAQ</a>
                </div>
                <div class="d-flex justify-content-between align-items-center row pb-2 gap-3 gap-md-0">
                    <div class="col-md-4 user_role"></div>
                    <div class="col-md-4 user_plan"></div>
                    <div class="col-md-4 user_status"></div>
                </div>
            </div>
            @include('backend.includes.notifications')
            <div class="modal fade" id="add-cus" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered modal-simple">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div class="card bg-transparent shadow-none">
                                <h5 class="card-title text-center">Frequently Ask Question</h5>
                                <div class="card-body">

                                    <table class="table table-striped">
                                        <tr>
                                            <th>Title:</th>
                                            <td><span id="ptitle"></span></td>
                                        </tr>
                                        <tr>
                                            <th>Description:</th>
                                            <td><span id="pdece"></span></td>
                                        </tr>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-datatable table-responsive">
                <table id="faqListing" class="datatables-users table border-top">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th style="width: 20%;">Actions</th>
                        </tr>
                    </thead>
                </table>
            </div>

        </div>
    </div>
    @endsection
    @section('script')

    <script>
        var oTable;
        $(document).ready(function() {

            //for datatable.
            oTable = $('#faqListing').DataTable({
                "dom": "<'row no-gutters'<'col-md-4'l><'col-md-2'r><'col-md-6'f>>t<'row no-gutters'<'col-md-4'i><'col-md-4'><'col-md-4'p>>",
                "processing": true,
                "serverSide": true,
                "autoWidth": false,
                "ajax": "{!! url('/sds/faqListing/getdata') !!}",
                "columns": [{
                        "data": 'title'
                    },
                    {
                        "data": 'description'
                    },

                    {
                        "data": 'delete',
                        name: 'delete',
                        orderable: false,
                        searchable: false
                    },
                ],

                "order": [0, 'desc'],
            });


            $("#faqListing").on("click", '.sk', function() {
                if (confirm('Are you sure?')) {
                    var id = $(this).data('id');
                    var url = '/sds/faqListing/delete/' + id;
                    $.ajax({
                        type: "GET",
                        url: url,
                        datatype: "json",
                        data: {
                            '_token': $('meta[name="csrf-token"]').attr('content')
                        },
                        beforeSend: function() {

                        },
                        success: function(resp) {
                            if (resp.status) {

                                oTable.draw();
                                alert(resp.msg);
                            } else {

                                oTable.draw();
                                alert(resp.msg);

                            }
                        },
                        error: function(e) {

                        }
                    });
                }
            });
            //show data 
            $(document).ready(function() {
                $('#faqListing').on('click', '.view-faq', function() {
                    var id = $(this).data('id');
                    var url = '/sds/faqListing/show/' + id;

                    $.ajax({
                        type: 'GET',
                        url: url,
                        dataType: 'json',
                        success: function(data) {

                            $('#ptitle').html(data.title);
                            $('#pdece').html(data.description);

                            $('#add-cus').modal('show');
                        },
                        error: function(xhr, status, error) {
                            // Handle error if needed
                        }
                    });
                });
            });
        });
    </script>

    @endsection