@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('comics.store') }}" method="post">
                @csrf
                @method('POST')

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" value = "{{ old('title') }}" id="title" placeholder="Enter title">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>

                    <textarea class="form-control" id="description" name="description">
                        {{ old('description') }}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" name="type" class="form-control" value = "{{ old('type') }}" id="type" placeholder="Enter type">
                </div>
                <div class="form-group">
                    <label for="series">Series</label>
                    <input type="text" name="series" class="form-control" value = "{{ old('series') }}" id="series" placeholder="Enter series">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="price" class="form-control" value = "{{ old('price') }}" id="price" placeholder="Enter price">
                </div>
                <div class="form-group">
                    <label for="date">Sale date</label>
                    <input type="date" class="form-control" value = "{{ old('sale_date') }}" name="sale_date" id="sale_date">
                </div>
                <div class="row">
                    <div class="col-12 d-flex p-2 justify-content-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
