@extends('admin.templates.default')

@section('content')
<div class="container-fluid justify-content-center">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add Book </h3>
                </div>
                    <div class="card-body">
                        <form action="{{route('admin.book.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- title -->
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" name="title" class="form-control @error('tittle') is-invalid @enderror" 
                                placeholder="Book Title" value="{{old ('title')}}">
                                @error('title')
                                    <span class="help-block">{{$message}}</span>
                                @enderror
                            </div>
                            <!-- end title -->

                            <!-- description -->
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="description" id="" rows="3" class="form-control @error('description') is-invalid @enderror"
                                placeholder="Add Description Book">{{old ('description')}}</textarea>
                                
                                @error('description')
                                    <span class="help-block">{{$message}}</span>
                                @enderror
                            </div>
                            <!-- end description -->

                                <!-- author -->
                            <div class="form-group">
                                <label for="">Author</label>
                                <select name="author_id" id="" class="form-control">
                                    @foreach ($authors as $author)
                                        <option value="{{$author->id}}">{{$author->name}}</option>
                                    @endforeach
                                </select>
                                @error('author_id')
                                    <span class="help-block">{{$message}}</span>
                                @enderror
                            </div>
                            <!-- end author -->

                            <!-- cover -->
                            <div class="form-group">
                                <label for="">Cover</label>
                                <input type="file" name="cover" class="form-control @error('cover') is-invalid @enderror" 
                                >
                                @error('cover')
                                    <span class="help-block">{{$message}}</span>
                                @enderror
                            </div>
                            <!-- end cover -->

                            <!-- qty -->
                            <div class="form-group">
                                <label for="">Qty</label>
                                <input type="text" name="qty" class="form-control @error('qty') is-invalid @enderror" 
                                placeholder="Add Book Qty" value="{{old ('qty')}}">
                                @error('qty')
                                    <span class="help-block">{{$message}}</span>
                                @enderror
                            </div>
                            <!-- end title -->

                            <div class="form-group">
                            <a href="{{route('admin.book.index')}}" class="btn btn-danger">Cancel</a>
                                <input type="submit" value="Add" class="btn btn-primary  ml-auto">
                        </form>
                        
                    </div>
                    </div>
                
            </div>
        </div>
    </div>
</div>
@endsection

<!-- @push('select2css')
<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
@endpush -->

<!-- @push('scripts')
    <script src="{{asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>

    <script>
    $('.select2').select2();
    </script>
@endpush -->