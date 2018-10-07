@extends('layouts.app')
@extends('layouts.message')

<div class="container">
    <div class="row">
        <table class="table">
            <thead>
            <th>Category Name</th>
            <th>Create Product</th>
            </thead>
            <tbody>
            @foreach ($records as $rec)
                <tr>
                    <td>{{ $rec->name }}</td>
                    <td><a href="{{Request::url()}}/{{ $rec->id }}">Edit</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@extends('layouts.back')