@extends('backend.layouts.main')

@section('title', 'D-Tech : : Add FAQ')

@section('content')

<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Frequently Ask Question/</span>Add FAQ </h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Add Frequently Ask Question</h5>
                    </div>
                    <div class="card-body">
                        @include('backend.includes.notifications')
                        <form id="ajaxform" action="{{ route('faq.store') }}" method="post">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-phone"> Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" class="form-control phone-mask" placeholder="Add title" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message"> Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="description" placeholder="Add description "></textarea>
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

@section('script')
<script>
    $(document).ready(function() {
        $('#ajaxForm').submit(function(e) {
            e.preventDefault(); // Prevent the default form submission

            var form = $(this); // Save a reference to the form
            var formData = form.serialize(); // Serialize the form data

            $.ajax({
                url: form.attr('action'), // Get the form action URL
                type: 'POST',
                data: formData,
                success: function(response) {
                    // Handle success response
                    console.log(response);
                    alert('Data submitted successfully');

                    // Clear form fields after successful submission
                    form.find('input[name="title"]').val('');
                    form.find('textarea[name="description"]').val('');
                },
                error: function(error) {
                    // Handle error response
                    console.log(error);
                    alert('Error submitting data');
                }
            });
        });
    });
</script>




@endsection