@extends('layouts.app')

@section('content')
<div class="container" id="container-login">
    <div class="row justify-content-center" id="row-login">
        <div class="col-md-8 justify-content-center">
            <!--<div class="card">-->
            <div class="form-signin card">
                <div class="card-header">{{ __('Login') }}</div>

                <!--<div class="card-body">-->
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!--<div class="form-group row">-->
                        <div class="form-floating ">
                            <!--<label for="email" class=" col-form-label text-md-center">{{ __('E-Mail Address') }}</label>-->

                            <!--<div class="col-md-6 form-floating">-->
                            <label for="email" class=" col-form-label text-md-center">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="example@domain">
                                
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <!--</div>-->
                        </div>

                        <!--<div class="form-group row">-->
                        <div class="form-floating ">
                            <!--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>-->

                            <!--<div class="col-md-6">-->
                            <label for="password" class=" col-form-label text-md-center">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <!--</div>-->
                        </div>

                        <!--<div class="form-group row">-->
                        <div class="col-md-12 form-floating align-items-center" id="check-login-group">
                            <!--<div class="col-md-6 offset-md-4">-->
                            
                                <!--<div class="form-check">-->
                                <div class="form-check col-md-8">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                </div>
                                <div class="form-check col-md-12" id="check-label-login">
                                    <label class="form-check-label col-md-12" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            
                        </div>

                        <!--<div class="form-group row mb-0">-->
                        <div class="form-floating align-items-center">
                            <!--<div class="col-md-8 offset-md-4">-->
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-outline-primary btn-block">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                                <div class="col-md-12 text-center">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                </div>
                            <!--</div>-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
