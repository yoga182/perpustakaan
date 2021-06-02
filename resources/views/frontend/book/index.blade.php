@extends('frontend.templates.default')

@section('content')
<h2>Book Collections</h2>
        <blockquote>
            <p class="flow-text">a collection of books that you can read and borrow.</p>
        </blockquote>
        <div class="row">
          @foreach ($books as $book)
          @include('frontend.templates.components.card-book', ['book' => 
            $book])
            @endforeach
        </div>
        <!-- pagination -->
        {{$books->links('vendor.pagination.materialize')}}
       
@endsection