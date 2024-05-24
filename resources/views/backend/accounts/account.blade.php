@extends('backend.layouts.main')

@section('title', 'D-Tech : : Account')

@section('content')
<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4>

    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills flex-column flex-md-row mb-4">
                <li class="menu-item {!! request()->is('profile') ? 'active' : '' !!}">
                    <a class="nav-link " href="profile"><i class="ti-xs ti ti-users me-1"></i> Account List</a>
                </li>
                <li class="menu-item {!! request()->is('account') ? 'active' : '' !!}">
                    <a class="nav-link " href="account"><i class="ti-xs ti ti-users me-1"></i> Account </a>
                </li>
                <li class="menu-item {!! request()->is('security') ? 'active' : '' !!}">
                    <a class="nav-link" href="security"><i class="ti-xs ti ti-lock me-1"></i> Security</a>
                </li>

            </ul>
            <div class="card mb-4">
                <h5 class="card-header">Profile Details</h5>

                <!-- Account -->
                <div class="card-body">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <button class="btn btn-primary export-btn w-auto buttons-collection  dropdown-togglebtn-label-primary mb-1" id="export" style="float: left; margin-top:15px;" tabindex="0" aria-controls="DataTables_Table_0" type="button" aria-haspopup="dialog" aria-expanded="false" data-bs-toggle="modal" data-bs-target="#add-cus">
                            <span class="dt-down-arrow">Add Admin User</span>
                        </button>


                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        @include('backend.includes.notifications')
                    </div>
                </div>


                <hr class="my-0" />
                <div class="card-body">


                    <div class="modal fade" id="add-cus" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered modal-simple">
                            <div class="modal-content p-3 p-md-5">
                                <div class="modal-body">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <div class="card bg-transparent shadow-none">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">ADDING ADMIN USER</h5>
                                            <form class="mt-5" id="formAccountSettings" action="{{ route('account.store') }}" enctype="multipart/form-data" method="post">
                                                @csrf
                                                <div class="row">

                                                    <div class="button-wrapper">
                                                        <label for="image" class="btn btn-primary me-2 mb-3" tabindex="0">Uploade your profile</label><i class="ti ti-upload d-block d-sm-none"></i>
                                                        <input type="file" id="image" name="image" class="account-file-input" hidden accept="image/png, image/jpeg" />
                                                        <div class="text-muted">Allowed JPG, GIF or PNG. Max size of 800K</div>
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label for="firstName" class="form-label">First Name</label>
                                                        <input class="form-control" type="text" id="firstName" name="firstName" placeholder="First Name" autofocus />
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label for="lastName" class="form-label">Last Name</label>
                                                        <input class="form-control" type="text" name="lastName" id="lastName" placeholder="lastName" />
                                                    </div>

                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label" for="role">Role</label>
                                                        <select id="role" class="select2 form-select" name="role">
                                                            <option value="">Select</option>
                                                            <option value="development admin">development admin</option>
                                                            <option value="project admin">project admin </option>
                                                            <option value="super admin">super admin</option>
                                                            <option value="System admin">System admin</option>
                                                            <option value="Product Manager">Product Manager</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label" for="phoneNumber">Phone Number</label>
                                                        <div class="input-group input-group-merge">
                                                            <span class="input-group-text">India (+91)</span>
                                                            <input type="text" id="phoneNumber" name="phone" class="form-control" placeholder="12345 67890" />
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label for="address" class="form-label">Address</label>
                                                        <input type="text" class="form-control" id="address" name="address" placeholder="Address" />
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label for="state" class="form-label">State</label>
                                                        <input class="form-control" type="text" id="state" name="state" placeholder="Gujarat" value="Gujarat" disabled />
                                                    </div>


                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label" for="city">City</label>
                                                        <select id="city" class="select2 form-select" name="city">
                                                            <option value="">Select</option>
                                                            <option value="Rajkot">Rajkot</option>
                                                            <option value="Ahmedabad">Ahmedabad</option>
                                                            <option value="Gandhinagar">Gandhinagar</option>
                                                            <option value="Surat">Surat</option>
                                                            <option value="Vadodara">Vadodara</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mt-2">
                                                    <button class="btn btn-primary me-2" type="submit" name="submit" value="submit">Submit</button>
                                                    <button type="reset" class="btn btn-label-secondary">Cancel</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <table class="datatables-ajax table border-top" id="AdminUser_table">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <!-- /Account -->
            </div>
            <div class="card">
                <h5 class="card-header">Delete Account</h5>
                <div class="card-body">
                    <div class="mb-3 col-12 mb-0">
                        <div class="alert alert-warning">
                            <h5 class="alert-heading mb-1">Are you sure you want to delete your account?</h5>
                            <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
                        </div>
                    </div>
                    <form id="formAccountDeactivation" onsubmit="return false">
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" name="accountActivation" id="accountActivation" />
                            <label class="form-check-label" for="accountActivation">I confirm my account deactivation</label>
                        </div>
                        <button type="submit" class="btn btn-danger deactivate-account">Deactivate Account</button>
                    </form>
                </div>
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
        oTable = $('#AdminUser_table').DataTable({
            "dom": "<'row no-gutters'<'col-md-4'l><'col-md-2'r><'col-md-6'f>>t<'row no-gutters'<'col-md-4'i><'col-md-4'><'col-md-4'p>>",
            "processing": true,
            "serverSide": true,
            "autoWidth": false,
            "ajax": "{!! url('/sds/account/getdata') !!}",
            "columns": [{
                    "data": 'firstName'
                },
                {
                    "data": 'email'
                },
                {
                    "data": 'role'
                },

            ],
            "order": [0, 'desc'],
        });

    });
</script>

@endsection