@extends('backend.layouts.main')

@section('title', 'D-Tech : : Use contact')

@section('content')




<div class="container-xxl flex-grow-1 container-p-y">

    <!-- Users List Table -->
    <div class="card">
        <div class="card-header border-bottom">
            <h5 class="card-title mb-3">User's services Messages</h5>
            <a class="btn btn-success export-btn" href="{{ route('user_export_csv') }}"><i class="bi bi-filetype-csv"> CSV</i></a> &nbsp;
            <a class="btn btn-danger" href="{{ route('user_export_pdf') }}"><i class="bi bi-file-earmark-pdf"> PDF</i></a>

            <div class="d-flex justify-content-between align-items-center row pb-2 gap-3 gap-md-0">
                <div class="col-md-4 user_role"></div>
                <div class="col-md-4 user_plan"></div>
                <div class="col-md-4 user_status"></div>
            </div>
        </div>
        <div class="card-datatable table-responsive">
            <table id="userservice" class="datatables-users table border-top">
                <thead>
                    <tr>
                        <th><input type="checkbox" class="form-check-input chk-all"></th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Messages</th>
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
        oTable = $('#userservice').DataTable({
            "dom": "<'row no-gutters'<'col-md-4'l><'col-md-2'r><'col-md-6'f>>t<'row no-gutters'<'col-md-4'i><'col-md-4'><'col-md-4'p>>",
            "processing": true,
            "serverSide": true,
            "autoWidth": false,
            "ajax": "{!! url('/sds/servicemessage/getdata') !!}",
            "columns": [{
                    "data": null, // Use 'null' to render the checkbox column
                    "defaultContent": '<input type="checkbox" class="select-checkbox">'
                },
                {
                    "data": 'name'
                },
                {
                    "data": 'email'
                },
                {
                    "data": 'message'
                },

            ],
          
            "order": [0, 'desc'],
        });
        $('.chk-all').change(function(e) {
            if (this.checked) { //Count and Compare Both of the above.
                $('.request_chk').prop('checked', true);
            } else {
                $('.request_chk').prop('checked', false);
            }

        });

        //Get Checked or Unchecked Ids For Export Data.
        $(".export-btn").click(function() {
            var idCollection = [];
            $(".request_chk:checked").each(function() {
                idCollection.push($(this).attr('data-id'));
            });

            if (idCollection.length <= 0) {
                $(".request_chk").each(function() {
                    idCollection.push($(this).attr('data-id'));
                });
            }
            exportData(idCollection);
        });

    });
</script>

@endsection