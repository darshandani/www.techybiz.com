@extends('backend.layouts.main')

@section('title', 'D-Tech : : Account')

@section('content')
<!-- Content -->
<meta name="csrf-token" content="{{ csrf_token('update.status') }}">
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Projects /</span> Add Project</h4> -->

    <div class="row">
        <div class="col-md-12">

            <div class="card mb-4">
                <h5 class="card-header">Project Details</h5>

                <!-- Add Pop-Up -->
                <div class="modal fade" id="add-cus" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-simple">
                        <div class="modal-content p-3 p-md-5">
                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                <div class="card bg-transparent shadow-none">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">ADDING USER PROJECTS</h5>
                                        <form class="mt-3" id="formAccountSettings" action="{!! route('userproject.store') !!}" method="post">
                                            @csrf

                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <label for="name" class="form-label">User Name</label>
                                                    <input class="form-control" type="text" id="name" name="name" placeholder="User Name" autofocus />
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="email" class="form-label">User Email</label>
                                                    <input class="form-control" type="text" name="email" id="email" placeholder="Email" />
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="phone" class="form-label">User Phone</label>
                                                    <input class="form-control" type="text" name="phone" id="phone" placeholder="Phone" />
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="subject" class="form-label">Project Subject</label>
                                                    <input class="form-control" type="text" name="subject" id="subject" placeholder="Subject" />
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="pname" class="form-label">Project Name</label>
                                                    <input type="text" class="form-control" id="pname" name="pname" placeholder="Project Name" />
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="price" class="form-label">Project Price</label>
                                                    <input type="number" class="form-control" id="price" name="price" placeholder="Project Price" />
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="submited_at" class="form-label">Submit Date</label>
                                                    <input type="date" class="form-control" id="submited_at" name="submited_at" />
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label class="form-label" for="payment_status">Payment Status</label>
                                                    <select class="form-select" id="payment_status" name="payment_status">
                                                        <option value="1">Processing</option>
                                                        <option value="2">Success</option>
                                                        <option value="3">Failed</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label class="form-label" for="is_discount">Payment Status</label>
                                                    <select class="form-select" id="is_discount" name="is_discount">
                                                        <option value="1">Undiscount</option>
                                                        <option value="2">Discount</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label class="form-label" for="status">Project Status</label>
                                                    <select class="form-select" id="status" name="status">
                                                        <option value="0">Process</option>
                                                        <option value="1">Approved</option>
                                                        <option value="2">Pending</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3 col-md-12">
                                                    <label for="description" class="form-label">Project Description</label>
                                                    <textarea type="text" class="form-control" id="description" name="description" placeholder="Project Description "></textarea>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-md-6 offset-6 text-end">
                                                    <button class="btn btn-primary" type="submit" name="submit" value="submit">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Add Pop-Up -->

                <!-- Show Details Pop-Up -->
                <div class="modal fade" id="show-cus" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-simple">
                        <div class="modal-content p-3 p-md-5">
                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                <div class="card bg-transparent shadow-none">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">ADDING USER PROJECTS</h5>
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="name" class="form-label">User Name</label>
                                                <input class="form-control" type="text" id="name" name="name" placeholder="User Name" autofocus disabled />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="email" class="form-label">User Email</label>
                                                <input class="form-control" type="text" name="email" id="email" placeholder="Email" disabled />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="phone" class="form-label">User Phone</label>
                                                <input class="form-control" type="text" name="phone" id="phone" placeholder="Phone" disabled />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="subject" class="form-label">Project Subject</label>
                                                <input class="form-control" type="text" name="subject" id="subject" placeholder="Subject" disabled />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="pname" class="form-label">Project Name</label>
                                                <input type="text" class="form-control" id="pname" name="pname" placeholder="Project Name" disabled />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="price" class="form-label">Project Price</label>
                                                <input type="text" class="form-control" id="price" name="price" placeholder="Project Price" disabled />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="submited_at" class="form-label">Submit Date</label>
                                                <input type="text" class="form-control" id="submited_at" name="submited_at" disabled />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" for="payment_status">Payment Status</label>
                                                <input type="text" class="form-control" id="payment_status" name="payment_status" disabled />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" for="is_discount">Payment Status</label>
                                                <input type="text" class="form-control" id="is_discount" name="is_discount" disabled />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" for="project_status">Project Status</label>
                                                <input type="text" class="form-control" id="project_status" name="project_status" disabled />
                                            </div>
                                            <div class="mb-3 col-md-12">
                                                <label for="description" class="form-label">Project Description</label>
                                                <textarea type="text" style="height: 100px;" class="form-control" id="description" name="description" placeholder="Project Description " disabled></textarea>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-6 offset-6 text-end">
                                                <a href="javascript:void(0);" class="btn btn-primary" id="closeShowPopUP">Close</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Show Details Pop-Up -->


                <div class="card-body">
                    <div class="d-flex align-items-start align-items-sm-center gap-4 float-end">
                    <a class="btn btn-success" href="{{ route('project.csv') }}"><i class="bi bi-filetype-csv">    CSV</i></a>
                        <!-- <a class="btn btn-danger" type="button" href="{{ route('project.csv') }}">Export</a> -->
                        <button class="btn btn-primary export-btn w-auto buttons-collection  dropdown-togglebtn-label-primary mb-1" id="export" style="float: left; margin-top:15px;" tabindex="0" aria-controls="DataTables_Table_0" type="button" aria-haspopup="dialog" aria-expanded="false" data-bs-toggle="modal" data-bs-target="#add-cus">
                            <span class="dt-down-arrow">Add User projects</span>
                        </button>
                    </div>
                </div>
                <hr class="my-0" />
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            @include('backend.includes.notifications')
                        </div>
                    </div>
                    <table class="datatables-ajax table border-top text-center" id="userprojects">
                        <thead>
                            <tr>
                                <th>User Email</th>
                                <th>Project Name</th>
                                <th>Project Price</th>
                                <th>Submit Date</th>
                                <th>Payment Status</th>
                                <th>Projects status</th>
                                <th>id</th>
                                <th>Isdiscound</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <!-- /Account -->
            </div>

        </div>
    </div>
</div>
<!-- / Content -->

@endsection


<!-- DATA TABLE -->


@section('script')
<script>
    var oTable;
    $(document).ready(function() {

        //for datatable.
        oTable = $('#userprojects').DataTable({
            "dom": "<'row no-gutters'<'col-md-4'l><'col-md-2'r><'col-md-6'f>>t<'row no-gutters'<'col-md-4'i><'col-md-4'><'col-md-4'p>>",
            "processing": true,
            "serverSide": true,
            "autoWidth": false,
            "ajax": "{!! url('/sds/project/getdata') !!}",
            "columns": [{
                    "data": 'email'
                },
                {
                    "data": 'pname'
                },
                {
                    "data": 'price'
                },
                {
                    "data": 'submited_at'
                },
                {
                    "data": 'payment_status'
                },
                {
                    "data": 'status'
                },
                {
                    "data": 'id'
                },
                {
                    "data": 'is_discount'
                },


            ],
            columnDefs: [{
                    "orderable": false,
                    "targets": []
                },
                {
                    "searchable": false,
                    "targets": []
                },
                {
                    "visible": false,
                    "targets": [-1, -2]
                },

            ],
            order: [
                [1, "asc"]
            ],

        });


        //for Show Details
        $('#userprojects').on('click', '.showDetails', function() {
            var id = $(this).data('id');
            var url = '{{ route("project.ShowDetails") }}';
            $.ajax({
                type: "POST",
                url: url,
                datatype: "json",
                data: {
                    '_token': '{!! csrf_token() !!}',
                    'id': id
                },
                beforeSend: function() {

                },
                success: function(data) {
                    // alert(data.name);
                    if (data.status) {
                        $('#show-cus #name').val(data.name);
                        $('#show-cus #email').val(data.email);
                        $('#show-cus #phone').val(data.phone);
                        $('#show-cus #subject').val(data.subject);
                        $('#show-cus #pname').val(data.pname);
                        $('#show-cus #description').val(data.description);
                        $('#show-cus #price').val(data.price);
                        $('#show-cus #is_discount').val(data.is_discount);
                        $('#show-cus #payment_status').val(data.payment_status);
                        $('#show-cus #submited_at').val(data.submited_at);
                        $('#show-cus #project_status').val(data.project_status);
                        $('#show-cus').modal('show');
                    } else {
                        $('.alert-danger').children(".msg-content").html(resp.msg);
                        $('.alert-danger').removeClass("d-none").show();
                    }
                },
                error: function(e) {

                }
            });
        });

        // close Details PopUP
        $('.container-xxl').on('click', '#closeShowPopUP', function() {
            $('#show-cus').modal('hide');
        });

    });

    //for project status update
    function ProjectStatusChange(id, status) {
        // alert(id+"=="+value);
        var url = '{{ route("update.ProjectStatus") }}';
        $.ajax({
            type: "POST",
            url: url,
            datatype: "json",
            data: {
                '_token': '{!! csrf_token() !!}',
                'id': id,
                'status': status,
            },
            beforeSend: function() {

            },
            success: function(resp) {
                if (resp.status) {
                    $('.alert-success').children(".msg-content").html(resp.msg);
                    $('.alert-success').removeClass("d-none").show();
                    oTable.draw();
                } else {
                    $('.alert-danger').children(".msg-content").html(resp.msg);
                    $('.alert-danger').removeClass("d-none").show();
                }
            },
            error: function(e) {

            }
        });
    }

    // for payment status update
    function PaymentStatusChange(id, status) {
        var url = '{{ route("update.PaymentStatus") }}';
        $.ajax({
            type: "POST",
            url: url,
            datatype: "json",
            data: {
                '_token': '{!! csrf_token() !!}',
                'id': id,
                'status': status,
            },
            beforeSend: function() {

            },
            success: function(resp) {
                if (resp.status) {
                    $('.alert-success').children(".msg-content").html(resp.msg);
                    $('.alert-success').removeClass("d-none").show();
                    oTable.draw();
                } else {
                    $('.alert-danger').children(".msg-content").html(resp.msg);
                    $('.alert-danger').removeClass("d-none").show();
                }
            },
            error: function(e) {

            }
        });
    }

    // for payment status update
    function DiscountStatusChange(id, status) {
        var url = '{{ route("update.DiscountStatus") }}';
        $.ajax({
            type: "POST",
            url: url,
            datatype: "json",
            data: {
                '_token': '{!! csrf_token() !!}',
                'id': id,
                'status': status,
            },
            beforeSend: function() {

            },
            success: function(resp) {
                if (resp.status) {
                    $('.alert-success').children(".msg-content").html(resp.msg);
                    $('.alert-success').removeClass("d-none").show();
                    oTable.draw();
                } else {
                    $('.alert-danger').children(".msg-content").html(resp.msg);
                    $('.alert-danger').removeClass("d-none").show();
                }
            },
            error: function(e) {

            }
        });
    }
</script>


@endsection