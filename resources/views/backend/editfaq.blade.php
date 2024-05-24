@extends('backend.layouts.main')

@section('title', 'D-Tech : : Edit FAQ')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row g-4 mb-4">
        <div class="col-sm-6 col-xl-3">
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Edit FAQ Entry</h5>
                </div>
                <div class="card-body">
                    @include('backend.includes.notifications')

                    <form action="{{ route('faq.update', $faq->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $faq->title) }}">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description">{{ old('description', $faq->description) }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Update FAQ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection