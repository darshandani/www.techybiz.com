@extends('backend.layouts.main')

@section('title', 'D-Tech : : Use contact')

@section('content')



<div class="container-xxl flex-grow-1 container-p-y">

    <!-- Users List Table -->

    <div class="card">
        <div class="card-header border-bottom">
            <h5 class="card-title mb-3">User's Contacts Messages</h5>
            <div class="d-flex justify-content-between align-items-center row pb-2 gap-3 gap-md-0">
                <div class="col-md-4 user_role"></div>
                <div class="col-md-4 user_plan"></div>
                <div class="col-md-4 user_status"></div>
            </div>
        </div>
        <div class="card-datatable table-responsive">
            <table id="usercontact" class="datatables-users table border-top">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Messages</th>
                        <th>Actions</th>
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
        oTable = $('#usercontact').DataTable({
            "dom": "<'row no-gutters'<'col-md-4'l><'col-md-2'r><'col-md-6'f>>t<'row no-gutters'<'col-md-4'i><'col-md-4'><'col-md-4'p>>",
            "processing": true,
            "serverSide": true,
            "autoWidth": false,
            "ajax": "{!! url('/sds/usercontacts/getdata') !!}",
            "columns": [{
                    "data": 'name'
                },
                {
                    "data": 'email'
                },
                {
                    "data": 'message'
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
        $("#usercontact").on("click", '.delcont', function() {
            if (confirm('Are you sure?')) {
                var id = $(this).data('id');
                var url = '/sds/usercontacts/' + id;
                $.ajax({
                    type: "GET",
                    url: url,
                    dataType: "json",
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

    });
</script>

@endsection