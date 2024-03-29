<!doctype html>
<html lang="en">
  <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


    <link rel="stylesheet" type="text/css" href="{{ url('/CSS/style.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  </head>

  <!--<body class="text-center body-log">-->
  <body class="text-center">
  
  <div class="container-fluid">
  <div class="row">
    <form class="form-signin form-inline my-2 my-lg-0 ml-auto" method="POST" action="{{ route('login') }}">
                <img  src="{{ URL::asset('images/deaf.jpeg') }}"  alt="" title="">
      <h1 class="h3 mb-3 font-weight-normal">Welcome</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
        <div class="form-floating">
        <input type="email" id="inputEmail" class="form-control form-control-lg" placeholder="Email address" required autofocus>
          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control form-control-lg" placeholder="Password" required>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      <div class="checkbox mb-3">
        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
          <label class="form-check-label" for="remember">
              {{ __('Remember Me') }}
          </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block login-btn-sing-in" type="submit">Log in</button>
      @if (Route::has('password.request'))
          <a class="btn btn-link" href="{{ route('password.request') }}">
              {{ __('Forgot Your Password?') }}
          </a>
      @endif
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
    </div>
    </div>
    <a class="nav-link" href="{{ route('login') }}">
      {{ __('Login') }}
    </a>
    
    <a class="nav-link" href="{{ route('register') }}">
      {{ __('Register') }}
    </a>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script type="text/javascript" src="{{ URL::asset('JS/script.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  </body>
  
</html>



