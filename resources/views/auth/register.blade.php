@extends ('layouts.app')

@section ('content')
<header class="masthead">
    <div class="jumbotron">
        <div class="overlay overlay-bg" style="width: 100%;height: 750px;"></div> 
        <div class="row fullscreen d-flex align-items-center justify-content-center">
            <div class="banner-content col-lg-7 col-md-6 ">
                <h6 class="text-white ">Searching for a ride?</h6>
                <h1 class="text-white text-uppercase">
                    Vifina car rent is the solution!                
                </h1>
                <p class="pt-20 pb-20 text-white">
                    Travelling with a trusted and secure transportation.
                </p>
            </div>
            <div class="col-lg-5  col-md-6 header-right">
                @guest
                <h4 class="text-white px-auto pb-30">Register</h4>
                <form method="POST" action="{{ route('register') }}">
                   @csrf
                   <div class="from-group">
                    <input class="form-control txt-field {{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" value="{{ old('name') }}" placeholder="Name">
                    @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                    <input class="form-control txt-field {{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" value="{{ old('email') }}" placeholder="Email address">
                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                    <input class="form-control txt-field {{ $errors->has('Phone') ? ' is-invalid' : '' }}" type="number" name="phone_number" value="{{ old('phone') }}" placeholder="Phone Number">
                    @if ($errors->has('phone'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                    @endif
                    <input class="form-control txt-field {{ $errors->has('nik') ? ' is-invalid' : '' }}" type="number" name="nik" value="{{ old('nik') }}" placeholder="NIK">
                    @if ($errors->has('phone'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('nik') }}</strong>
                    </span>
                    @endif
                    <input class="form-control txt-field {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Password">
                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                    <input class="form-control txt-field {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" type="password" name="password_confirmation" placeholder="Password Confirmation">
                    @if ($errors->has('password_confirmation'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-default btn-lg btn-block text-center text-uppercase">Register</button>
                    </div>
                    <div>

                    </div>
                </div>
            </form>
            <div class="col-md-12">
                <p>Already Have an account? <a href="{{ route('login') }}"><span>Login</span></a></p>
            </div>
            @endguest
        </div>
    </div>
</div>                                                         
</header>
<!-- End banner Area -->    
@endsection