@extends('layouts.app')
@extends('layouts.message')

<div class="container">
<div class="row">
    @if($records->Categories->count() > 1)
        <h3>Catalogue : "{{$records->name}}" Categories</h3>
        <table class="table">
            <thead>
            <th>Category Name</th>
            <th>Edit</th>
            </thead>
            <tbody>
        @foreach ($records->Categories as $rec)
            <tr>
            <td>{{ $rec->name }}</td>
            <td><a href="category/{{ $rec->id }}">Edit</a></td>
            </tr>
        @endforeach
            </tbody>
        </table>
    @else
        <p>There is no related categories</p>
    @endif

    @if($records->Products->count() > 0)
            <h3>Catalogue : "{{$records->name}}" Products</h3>
        <table class="table">
            <thead>
            <th>Product Name</th>
            <th>Product Icon</th>
            </thead>
            <tbody>
        @foreach ($records->Products as $rec)
            <tr>
                <td>{{ $rec->name }}</td>
                <td><img style="height: 50px; width: 50px;" src="{{ $rec->icon }}"/></td>
            </tr>
        @endforeach
            </tbody>
        </table>
    @else
        <p>There is no related products</p>
    @endif
</div>
</div>

<div class="container">
    <form method="post" action="/category">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="catalogue_id" value="{{ $records->id }}">
        <input type="text" name="name" placeholder="Enter Category Name Here">
        <input type="submit" name="submit" value="Create Category">
    </form>
</div>

<div class="container">
    <form method="post" action="/product">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="catalogue_id" value="{{ $records->id }}">
        <input type="text" name="name" placeholder="Enter Product Name Here">
        <input type="text" name="icon" placeholder="Enter Icon Link here">
        <input type="submit" name="submit" value="Create Product">
    </form>
</div>
@extends('layouts.back')

