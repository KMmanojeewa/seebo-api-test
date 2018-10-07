@extends('layouts.app')
@extends('layouts.message')

<div class="container">
    <form method="post" action="/product">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="name" placeholder="Enter name here">
        <input type="text" name="icon" placeholder="Enter Icon Link here">
        <input type="submit" name="submit" value="Create Product">
    </form>
</div>

<div class="container">
    <div class="row">
        <table class="table">
            <thead>
            <th>Product Name</th>
            </thead>
            <tbody>
            @foreach ($records as $rec)
                <tr>
                    <td>{{ $rec->name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@extends('layouts.back')