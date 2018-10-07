@extends('layouts.app')

<div class="container">
    <form method="post" action="/category">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="name" placeholder="Enter name here">
        <input type="submit" name="submit">
    </form>
</div>

@section('content')
    <p>This is category create body content.</p>
@endsection