@extends('backend.layouts.main')

@section('title', 'D-Tech : : Edit Blog')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row g-4 mb-4">
        <div class="col-sm-6 col-xl-3">
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Edit Blog Entry</h5>
                </div>
                <div class="card-body">
                    @include('backend.includes.notifications')

                    <form action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">

                            <label class="col-sm-2 col-form-label" for="basic-default-phone"> Image</label>
                            <div class="col-sm-10">
                                <img src=" {{ asset(BLOG_ROOT . $blog->image) }}" alt="Blog Image" style="max-width: 100px;">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-phone"> Title</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control phone-mask" value="{{ old('title', $blog->title) }}" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-message"> Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="description" name="description">{{ old('description', $blog->description) }}</textarea>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Update Blog</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection