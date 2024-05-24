@extends('backend.layouts.main')

@section('title', 'D-Tech : : Add Blog')

@section('content')

<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Blog/</span> Blog Layouts</h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Add Blog</h5>
                        <small class="text-muted float-end">Default label</small>
                    </div>
                    <div class="card-body">
                        @include('backend.includes.notifications')
                        <form action="{!! route('blog.store') !!}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-phone"> Image</label>
                                <div class="col-sm-10">
                                    <input type="file" id="image" name="image" class="form-control phone-mask" placeholder="Enter your image" />
                                    @error('image')
                                        <span style="color:red; font-size: 12px;">{!! $message !!} *</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-phone"> Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" class="form-control phone-mask" placeholder="Add title" />
                                    @error('title')
                                        <span style="color:red; font-size: 12px;">{!! $message !!} *</span>
                                    @enderror
                                </div>
                                
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message"> Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="description" placeholder="Add description "></textarea>
                                    @error('description')
                                        <span style="color:red; font-size: 12px;">{!! $message !!} *</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" name="submit" class="btn btn-primary">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection