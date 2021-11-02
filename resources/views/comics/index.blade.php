@extends('layouts.app')

@section('content')

    <div class="container">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Title</th>
                  <th scope="col">Description</th>
                  <th scope="col">Price</th>
                  <th scope="col">Series</th>
                  <th scope="col">Type</th>
                  <th scope="col">Sale Date</th>
                  
                </tr>
              </thead>
              @foreach ($comics as $comic)
              <tr>
                  <th scope="row">{{$comic["id"]}}</th>
                  <th scope="row">{{$comic["title"]}}</th>
                  <th scope="row">{{$comic["description"]}}</th>
                  <th scope="row">{{$comic["price"]}}</th>
                  <th scope="row">{{$comic["series"]}}</th>
                  <th scope="row">{{$comic["type"]}}</th>
                  <th scope="row">{{$comic["sale_date"]}}</th>


              </tr>
                  
              @endforeach
          </table>
    </div>
    
@endsection

