
@extends('layouts.auth')

@section('content')
<span class="navig">
    <nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg bg-info"  color-on-scroll="100">
        <div class="container">
            <div class="navbar-translate">
                <a href="/"><img src="{{URL::to('logo.png')}}"></a>
            </div>
        </div>
    </nav>
</span>

    <div class="page-header header-filter" style="background-image: url('https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'); background-size: cover; background-position: top center;">

        <div class="container">



            <div class="row">
                <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                    <div class="card card-login">
                        <form class="form" method="post" action="{{ route("register") }}">
                            @csrf

                            <div class="card-header card-header-primary text-center">
                                <h4 class="card-body">Create your E-Toto account now!</h4>
                            </div>
                            <p class="description text-center">Fill in your details..</p>
                            <div class="card-body">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                          <i class="material-icons">face</i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="name" placeholder=" Name..." value="{{ old("name") }}">
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                          <i class="material-icons">mail</i>
                                        </span>
                                    </div>
                                    <input type="email" class="form-control" name="email" placeholder="Email..." value="{{ old("email") }}">
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
{{--                                            Add material icon for mobile phone--}}
                                          <i class="material-icons"> phone</i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="phone_number" placeholder="Phone..." value="{{ old("phone_number") }}">
                                    @error('phone_number')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                          <i class="material-icons">lock_outline</i>
                                        </span>
                                    </div>
                                    <input type="password" class="form-control" name="password" placeholder="Password...">
                                    @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                          <i class="material-icons">lock_outline</i>
                                        </span>
                                    </div>
                                    <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password...">
                                    @error('password_confirmation')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer text-center">
                              <span class="nextline">  <button type="submit" class="btn btn-rose btn-round btn-lg">Get Started</button>
                             <a href="{{ route("login") }}" class="btn btn-primary btn-link btn-lg">already have an account? log in</a></span>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
