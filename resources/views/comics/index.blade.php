@extends('layouts.app')
@section('content')
<div class="container-fluid" id="index">
    <div class="row">
        <div class="col-12">
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Series</th>
                        <th scope="col">Type</th>
                        <th scope="col">Sale Date</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                @foreach ($comics as $comic)
                <tr>
                    <th scope="row">{{$comic["id"]}}</th>
                    <th scope="row">
                        <a href="{{route("comics.show", $comic["id"])}}">
                            {{$comic["title"]}}
                        </a>
                    </th>
                    <th scope="row">{{$comic["description"]}}</th>
                    <th scope="row">{{$comic["price"]}}</th>
                    <th scope="row">{{$comic["series"]}}</th>
                    <th scope="row">{{$comic["type"]}}</th>
                    <th scope="row">{{$comic["sale_date"]}}</th>
                    <td >
                        <a href="{{route("comics.show", $comic["id"])}}">
                            <i class="far fa-eye"></i>
                        </a>
                        <a>
                            <i class="fas fa-edit"></i>
                        </a>
                        <a>
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>

                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection
