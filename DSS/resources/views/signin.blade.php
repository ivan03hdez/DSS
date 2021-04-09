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

  </head>

  <body class="text-center body-log">
    <form class="form-signin">
      <img class="mb-4 img-fluid" src="{{ URL::asset('images/deaf.jpeg') }}" alt="" width="300" height="300">
      <h1 class="h3 mb-3 font-weight-normal">Welcome</h1>

      <label for="inputName" class="sr-only">Name</label>
      <input type="name" id="inputName" class="form-control form-control-lg" placeholder="Name" required autofocus>

      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control form-control-lg" placeholder="Email address" required autofocus>

      <label for="inputAddress" class="sr-only">Address</label>
      <input type="address" id="inputAddress" class="form-control form-control-lg" placeholder="Address" required autofocus>
      
      <label for="inputPhone" class="sr-only">Phone</label>
      <input type="text" id="inputPhone" class="form-control form-control-lg" placeholder="Phone" required autofocus>

      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control form-control-lg" placeholder="Password" required>

      <label for="inputRepeatPassword" class="sr-only">Repeat password</label>
      <input type="password" id="inputRepeatPassword" class="form-control form-control-lg" placeholder="RepeatPassword" required>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block login-btn-sing-in" type="submit">Log in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
    <script type="text/javascript" src="{{ URL::asset('JS/script.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>