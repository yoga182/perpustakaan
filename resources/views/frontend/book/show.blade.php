@extends('frontend.templates.default')

@section('content')
<h4>Book Details</h4>
<div class="col s12 m12">
            <div class="card horizontal hoverable">
                    <img src="{{$book->getCover()}}" height="300" >
                <div class="card-stacked">
                    <div class="card-content">
                        <h4 class="red-text accent-2">{{$book->title}}</h4>
                        <blockquote>
                        <p>{{$book->description}}</p>
                        </blockquote>
                        <div class="container-fluid mt-auto">
                        <p>
                        <i class="material-icons">person</i>  <a class="mt-10">{{$book->author->name}}</a>
                        </p>
                        <p>
                        <i class="material-icons">book</i> {{$book->qty}}
                        </p>
                        </div>
                    </div>
                    <div class="card-action">
                    <form action="{{route('book.borrow', $book)}}" method="POST">
                        @csrf
                        <input type="submit" value="Borrow This Book" class="btn right btn-block">
                    </form>
                    </div>
                </div>
            </div>
</div>
        <h5>Other books by the author <a >{{$book->author->name}}...</a></h5>
    <div class="row">
        @foreach ($book->author->books->shuffle()->take(4) as $book)
            @include('frontend.templates.components.card-book', ['book' => $book])
            
        @endforeach
    </div>
@endsection