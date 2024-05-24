@extends('backend.layouts.main')

@section('title', 'D-Tech : : bloglisting')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row g-4 mb-4">
            <div class="col-sm-6 col-xl-3">




            </div>
            <!-- Users List Table -->
            <div class="card">
                <div class="card-header border-bottom">
                    <h5 class="card-title mb-3">BLOG LISTING</h5>
                    <div class="text-end">
                        <a class="btn btn-primary" href="blog">ADD BLOG</a>
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
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                <div class="card bg-transparent shadow-none">
                                    <h5 class="card-title text-center">Blog</h5>
                                    <div class="card-body">

                                        <p><b>Image:</b> &nbsp;
                                        <div id="dimg"></div>
                                        </p>

                                        <p><b>Title:</b> &nbsp; <span id="dtitle"></span> </p>
                                        <p><b>Description:</b> &nbsp; <span id="ddece"></span> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-datatable table-responsive">
                    <table id="bloglisting" class="datatables-users table border-top text-center">
                        <thead>
                            <tr>
                                <th style="width: 20%;">image</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th style="width: 20%;">Actions</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <!-- Offcanvas to add new user -->

            </div>
        </div>
    </div>

@endsection




@section('script')

    <script>
        var oTable;
        $(document).ready(function() {

            //for datatable.
            oTable = $('#bloglisting').DataTable({
                "dom": "<'row no-gutters'<'col-md-4'l><'col-md-2'r><'col-md-6'f>>t<'row no-gutters'<'col-md-4'i><'col-md-4'><'col-md-4'p>>",
                "processing": true,
                "serverSide": true,
                "autoWidth": false,
                "ajax": "{!! route('bloglisting.getdata') !!}",

                "columns": [{
                        "data": 'image'
                    },
                    {
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

            $("#bloglisting").on("click", '.sk', function() {
                if (confirm('Are you sure?')) {
                    var id = $(this).data('id');
                    var url = '/sds/bloglisting/delete/' + id;
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
                            if (resp.success) {

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
            $(document).ready(function() {
                $('#bloglisting').on('click', '.view-blog', function() {
                    var id = $(this).data('id');
                    var url = '/sds/bloglisting/show/' + id;

                    $.ajax({
                        type: 'GET',
                        url: url,
                        dataType: 'json',
                        success: function(data) {
                            console.log(data)
                            $('#dimg').html(data.image);
                            $('#dtitle').html(data.title);
                            $('#ddece').html(data.description);
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
