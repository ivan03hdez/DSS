@extends('layouts.app')

@section('content')
<div class="container" id="container-login">
    <div class="row justify-content-center" id="row-login">
        <div class="col-md-8 justify-content-center">
            <!--<div class="card">-->
            <div class="form-signin card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-floating input-gruop mb-3">
                                <label for="name" class="col-form-label text-md-center">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-floating input-gruop-sm mb-3">
                            <label for="email" class="col-form-label text-md-center">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-floating input-gruop mb-3">
                            <label for="password" class="col-form-label text-md-center">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-floating input-gruop mb-3">
                            <label for="password-confirm" class="col-form-label text-md-center">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <input id="role" type="role" class="form-control d-none" name="role" value="user">

                        <div class="form-floating align-items-center">
                            
                                <button type="submit" class="btn btn-outline-primary btn-block btn-lg">
                                    {{ __('Register') }}
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
