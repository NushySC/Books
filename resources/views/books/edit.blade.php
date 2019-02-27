@extends('layouts.app')


@section('content')

    <div class="container">
        <form method="post" action="{{ action('BookController@update', $book->id) }}">

            @csrf
            {{ method_field('PUT') }}

            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" value="{{ $book->title }}">
            </div>
            <div class="form-group">
                <label>Authors</label>
                <input type="text" name="authors" class="form-control" value="{{ $book->authors }}">
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="text" name="image" class="form-control" value="{{ $book->image }}">
            </div>

            <div class="form-group">
                    <label>Publisher</label>
                    <select name="publisher_id" class="form-control">
        
                        @foreach($publishers as $publisher)
                            <option value="{{ $publisher->id }}">{{ $publisher->name }}</option>
                        @endforeach
        
                    </select>
                  </div>
                  
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection