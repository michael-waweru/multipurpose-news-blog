@extends('frontend.layouts.base')

@section('title')
    Authentication
@endsection

@section('body')

    <main class="mt-100 mb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-md-10">
                    <div class="login_wrap widget-taber-content p-30 background-white border-radius-5">
                        <div class="padding_eight_all bg-white">
                            <h2 class="mb-50 text-center position-relative divider-wave">Login To Your Account</h2>
                            <p class="text-muted text-center mb-30">Use the social network account</p>
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <ul class="btn-login list_none mb-30 text-center list-inline">
                                    <li class="mb-10 list-inline-item"><a href="{{ route('facebook.login') }}" class="btn btn-facebook btn-outline-secondary"><i class="ti-facebook mr-5"></i>Continue with Facebook</a></li>
                                    <li class="list-inline-item"><a href="#" class="btn btn-google btn-outline-secondary"><i class="ti-google mr-5"></i>Continue with Google</a></li>
                                </ul>
                                
                                @if (Session::has('errors'))
                                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                        </svg>
                                        <div>
                                            <span class="text-danger text-center"><strong>There was a problem with your submission. Please try again.</strong></span>
                                        </div>
                                    </div>                                   
                                @endif
                                
                                <div class="divider-text-center mt-15 mb-15 text-muted">
                                    <span> Or login with your email & password </span>
                                </div>
                                <div class="plr-5-percent">
                                    <div class="form-group">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email Address"
                                        autocomplete="email" value="{{ old('email') }}" autofocus>
                                        @error('email') <span class="text-danger"><strong>{{ $message }}</strong></span>@enderror
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password">
                                        @error('password') <span class="text-danger"><strong>{{ $message }}</strong></span>@enderror
                                    </div>

                                    <div class="login_footer form-group">
                                        <div class="chek-form">
                                            <div class="custome-checkbox">
                                                <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="">
                                                <label class="form-check-label" for="exampleCheckbox1"><span>Remember me</span></label>
                                            </div>
                                        </div>
                                        <a class="text-muted" href="#">Forgot password?</a>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-dark btn-block" name="login">Log in</button>
                                    </div>
                                </div>
                            </form>
                            <div class="text-muted text-center">Don't have an account? <a href="{{ route('register') }}">Sign up now</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
