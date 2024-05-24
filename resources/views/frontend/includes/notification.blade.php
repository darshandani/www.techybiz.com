<!-- ALL ERROR ALERT MESSAGE -->
@if (count($errors->all()) > 0)
<div class="alert alert-danger alert-dismissable show">
    <button class="close" data-dismiss="alert" aria-label="Close">×</button><strong>Something went wrong!!!.</strong>
    <span class="msg-content">
        <ul>
            @foreach($errors->all() as $m)
            <li>{!! $m !!}</li>
            @endforeach
        </ul>
    </span>
</div>
@endif



<!-- SUCCESS ALERT MESSAGE -->
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif



<!-- ERROR ALERT MESSAGE -->
@if(session('error'))
<div class="alert alert-danger">
    {{session('error')}}
</div>
@endif