@extends('layouts.app')
@extends('layouts.message')

<div class="container">
<div class="row">
    @if($records->Products->count() > 0)
        <h3>Category : "{{$records->name}}" Products</h3>
        <table class="table">
            <thead>
            <th>Product Name</th>
            </thead>
            <tbody>
        @foreach ($records->Products as $rec)
            <tr>
                <td>{{ $rec->name }}</td>
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
    <form method="post" action="/product">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="category_id" value="{{ $records->id }}">
        <input type="text" name="name" placeholder="Enter Product Name Here">
        <input type="text" name="icon" placeholder="Enter Icon Link here">
        <input type="submit" name="submit" value="Create Product">
    </form>
</div>
@extends('layouts.back')