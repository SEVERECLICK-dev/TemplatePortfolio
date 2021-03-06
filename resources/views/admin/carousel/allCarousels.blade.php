@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-teal">
                Tous les Images du Carousel
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Image</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($carousels as $item)
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>
                                <img src="{{asset('mesImages/'.$item->src)}}" alt="" height="200" width="300">
                            </td>
                            <td>
                                <a href="/edit-carousel/{{$item->id}}" class="btn btn-primary mr-2">Edit</a>
                                <a href="/delete-carousel/{{$item->id}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop