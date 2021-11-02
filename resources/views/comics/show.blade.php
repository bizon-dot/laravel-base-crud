@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
                <h1 class="mt-4 mb-4"> {{ $comic['title'] }}</h1>
                <div class="col-6">
                    <img src="{{ $comic['thumb'] }}" class="img-fluid" alt="{{ $comic['title'] }}">
                </div>
                <div class="col-6">
                    <ul>
                        <li>Price: {{ $comic['price'] }} E</li>
                        <li>Series: {{ $comic['series'] }} </li>
                        <li>Sale Date: {{ $comic['sale_date'] }} </li>
                        <li>Type: {{ $comic['type'] }} </li>
                    </ul>
                </div>
        </div>
    </div>
@endsection