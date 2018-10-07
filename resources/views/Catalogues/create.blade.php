@extends('layouts.app')

<div class="container">
    <form method="post" action="/catalogues">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="name" placeholder="Enter name here">
        <input type="submit" name="submit">
    </form>
</div>

@section('content')
    <p>This is catalogue create body content.</p>
@endsection