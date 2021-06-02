@extends('frontend.templates.default')

@section('content')
    <div class="container">
        <h4>Login</h4>
        <form action="{{ route('login')}}" class="col 12" method="post">
        @csrf
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input type="email" class="validate @error('email') invalid @enderror" name="email" value="{{old ('email')}}">
                <label for="">Email</label>
                @error('email')
                    <span class="helper-text" data-error="{{$message}}"></span>
                @enderror
            </div>
            <div class="input-field col s12">
                <i class="material-icons prefix">lock</i>
                <input type="password" class="@error('password') invalid @enderror" name="password" value="">
                <label for="">Password</label>
                @error('password')
                    <span class="helper-text" data-error="{{$message}}"></span>
                @enderror
            </div>
            <div class="input field right">
                <input type="submit" value="Login" class="btn btn-block red accent-1 waves-effect waves-light">
            </div>
        </div>
        </form>
    </div>

@endsection

