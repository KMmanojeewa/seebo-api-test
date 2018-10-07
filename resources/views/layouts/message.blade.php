@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
@if(session()->has('failed-message'))
    <div class="alert alert-danger">
        {{ session()->get('failed-message') }}
    </div>
@endif