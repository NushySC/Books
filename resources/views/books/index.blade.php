<html>
<head>
    <title>books</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<h1 class="display-3 m-2 text-center">Books</h1>
<a href="{{ action('BookController@create') }}" class="btn btn-primary center-block">Create a new Book</a>
<div id="books d-flex flex-row flex-wrap">

    @foreach($books as $book)
        <div class="card book d-inline-flex m-3" style="width: 15rem; height: 25rem;">
            <img class="card-img-top" src="{{ $book->image }}" alt="title"/>
            <div class="card-body">
            <h4 class="card-title" style="font-size:0.9em;">{{ $book->title }}</h4>
            <h6 class="card-text" style="font-size:0.7em;">{{ $book->authors }}</h6>
            @if($book->publisher)
            <h6 class="card-text" style="font-size:0.5em;">{{ $book->publisher }}</h6>
            @endif
            <a href="{{ action('BookController@edit', $book->id) }}" class="btn btn-primary">              
                Edit</a>
            </div>
        </div>
    @endforeach
</div>
</body>
</html>
