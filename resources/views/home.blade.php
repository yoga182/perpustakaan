@extends('frontend.templates.default')

@section('content')
    <div class="row">
        <h1>Books that are being borrowed</h1>
        @foreach ($books as $book)
        <div class="card horizontal hoverable">
                 <img src="{{$book->getCover()}}" height="300" width="350" > 
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
                     </div>
                 </div>
                 
             </div>
         </div>
        @endforeach
        
    </div>
@endsection
