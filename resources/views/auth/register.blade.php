@extends('layout.register')

@section('content')

<div class="app-container app-theme-white body-tabs-shadow">
    <div class="app-container">
        <div class="h-100">
            <div class="h-100 no-gutters row">
                <div class="h-100 d-md-flex d-sm-block bg-white justify-content-center align-items-center col-md-12 col-lg-7">
                    <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                        <div class="app-logo"></div>
                        <h4>
                            <div>Welcome,</div>
                            <span>It only takes a <span class="text-success">few seconds</span> to create your
                                account</span>
                        </h4>
                        <div>
                        <form method="POST" action="{{ route('register') }}">
                        @csrf
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail" class=""><span class="text-danger">*</span>Email</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="password" class=""><span class="text-danger">*</span>Password</label>
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="password">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="password-confirm" class=""><span class="text-danger">*</span> {{ __('Confirm Password') }}</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3 position-relative form-check">
                                    <input  id="exampleCheck"  type="checkbox" class="form-check-input @error('terms')  is-invalid @enderror"  value="1" name="terms" required autocomplete="terms">
                                    <label for="exampleCheck" class="form-check-label">Accept our <a href="javascript:void(0);">Terms and Conditions</a>.</label>
                                    @error('terms')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mt-4 d-flex align-items-center">
                                    <h5 class="mb-0">Already have an account? <a href="{{ route('login') }}" class="text-primary">Sign in</a></h5>
                                    <div class="ml-auto">
                                        <button class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-primary btn-lg" type="submit">Create
                                            Account </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="d-lg-flex d-xs-none col-lg-5">
                    <div class="slider-light w-100">
                        <div class="slick-slider">
                            <div>
                                <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-premium-dark" tabindex="-1">
                                    <div class="slide-img-bg" style="background-image: url('assets/images/originals/citynights.jpg');">
                                    </div>
                                    <div class="slider-content">
                                        <h3>pgportals</h3>
                                        <p>List Your PG For Free For Now
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection