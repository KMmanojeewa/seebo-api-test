@extends('layouts.app')

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

<ul>
    <li>{{ $records->name }}</li>
</ul>

<div class="container">
    <div class="row">
    </div>
</div>

<div class="container">
    <form method="post" action="/product">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="category_id" value="{{ $records->id }}">
        <input type="text" name="name" placeholder="Enter Product Name Here">
        <input type="text" name="icon" placeholder="Enter Icon Link here">
        <input type="submit" name="submit" value="Create Product">
    </form>
</div>
@extends('layouts.back')