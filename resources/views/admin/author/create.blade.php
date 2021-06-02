@extends('admin.templates.default')

@section('content')
<div class="container-fluid justify-content-center">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add Author List</h3>
                </div>
                    <div class="card-body">
                        <form action="{{route('admin.author.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" 
                                placeholder="Author Full Name" value="{{old ('name')}}">
                                @error('name')
                                    <span class="help-block">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                            <a href="{{route('admin.author.index')}}" class="btn btn-danger">Cancel</a>
                                <input type="submit" value="Add" class="btn btn-primary  ml-auto">
                        </form>
                        
                    </div>
                    </div>
                
            </div>
        </div>
    </div>
</div>
@endsection