@extends('layouts.app')
@extends('layouts.message')

<div class="container">
    <form method="post" action="/catalogues">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" id="catalogue_name" name="name" placeholder="Enter name here">
        <input type="submit" name="submit" value="Create Catalogue">
    </form>
</div>

<div class="container">
    <div class="row">
        <h3>Catalogues List</h3>
        <table class="table">
            <thead>
            <th>Catalogue Name</th>
            <th>Create Category or Product</th>
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

<div class="container">
    <div class="row">
        <h3>Catalogues and sub catalogues</h3>
        <ul>
            @foreach ($records as $rec)
                <li>{{ $rec->name }}</li>
                @if($rec->Categories->count() > 0)
                    <ul>
                        @foreach($rec->Categories as $cat)
                            <li>$cat->name</li>
                        @endforeach
                    </ul>
                @endif
            @endforeach
        </ul>
    </div>
</div>
@extends('layouts.back')