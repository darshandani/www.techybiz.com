@extends('backend.layouts.main')

@section('title', 'D-Tech : : Profile')

@section('content')
<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">User Profile /</span> Profile</h4>

    <!-- Header -->
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="user-profile-header-banner">
                    <img src="{!! asset('backend/img/pages/profile-banner.png') !!}" alt="Banner image" class="rounded-top" />
                </div>

                <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                    <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                        <img src="{{ asset('images/' . $admin->image) }}"alt="user image" class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img"  width="100" height="100" style="border-color: white;" />
                    </div>
                    <div class="flex-grow-1 mt-3 mt-sm-5">
                        <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                            <div class="user-profile-info">
                                <h4>{{$admin->firstName }} {{$admin->lastName }}</h4>

                                <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                                    <li class="list-inline-item"><i class="ti ti-color-swatch"></i> {{$admin->role}}</li>
                                    <li class="list-inline-item"><i class="ti ti-map-pin"></i>{{$admin->city}}</li>
                                    <li class="list-inline-item"><i class="ti ti-calendar"></i> Joined April 2021</li>
                                </ul>
                            </div>
                            <a href="javascript:void(0)" class="btn btn-primary">
                                <i class="ti ti-user-check me-1"></i>Connected
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Header -->

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

                <hr class="my-0" />
                <div class="card-body">
                    <form id="formAccountSettings" action="{{ route('account.store') }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="row">

                            <!-- <div class="button-wrapper">
                                <label for="image" class="btn btn-primary me-2 mb-3" tabindex="0">Uploade your profile</label><i class="ti ti-upload d-block d-sm-none"></i>
                                <input type="file" id="image" name="image" class="account-file-input" hidden accept="image/png, image/jpeg" />
                            </div> -->
                            <div class="mb-3 col-md-6">
                                <label for="firstName" class="form-label">First Name</label>
                                <input class="form-control" type="text" id="firstName" name="firstName" placeholder="First Name" value="{{$admin->firstName}}" readonly />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input class="form-control" type="text" name="lastName" id="lastName" placeholder="lastName" value="{{$admin->lastName}}" readonly />
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="role" class="form-label">Role</label>
                                <input class="form-control" type="text" id="role" name="role" placeholder="role" value="{{$admin->role}}" readonly />
                            </div>

                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="phoneNumber">Phone Number</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">India (+91)</span>
                                    <input type="text" id="phoneNumber" name="phone" class="form-control" placeholder="12345 67890" value="{{$admin->phone}}" readonly />
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="{{$admin->address}}" readonly />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="state" class="form-label">State</label>
                                <input class="form-control" type="text" id="state" name="state" placeholder="Gujarat" value="Gujarat" disabled />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="state" class="form-label">State</label>
                                <input class="form-control" type="text" id="state" name="state" placeholder="Gujarat" value="Gujarat" disabled />
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="city" class="form-label">City</label>
                                <input class="form-control" type="text" id="city" name="city" placeholder="city" value="{{$admin->city}}" readonly />
                            </div>

                        </div>
                        <div class="mt-2">
                            <button class="btn btn-primary me-2" type="submit" name="submit" value="submit">Submit</button>
                            <button type="reset" class="btn btn-label-secondary">Cancel</button>
                        </div>
                    </form>
                </div>
                <!-- /Account -->
            </div>

        </div>
    </div>
</div>
<!-- / Content -->

@endsection