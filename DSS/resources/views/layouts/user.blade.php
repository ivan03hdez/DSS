@inject('Auth', 'Auth')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{ url('/CSS/style.css') }}" />
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

    <title>@yield('title')</title>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row"> <!-- HEADER -->
        <div id="header01" class="col-12" style="background-color:grey;">  <!-- HEADER -->
            
            <div class="col-12 align-header"> 
              <span style="font-size:30px;cursor:pointer" onclick="openNav()"  ><div class="menu">&#9776; Dashboard</div></span> 
              <div class="logo rounded mx-auto d-block" >
                <img  src="{{ URL::asset('images/deaf.jpeg') }}"  alt="" title="">
              </div>     
              <form class="form-inline my-2 my-lg-0 ml-auto">
      <input class="form-control input-filter" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success btn-md my-2 my-sm-0 ml-3" type="submit">Search</button>
      
    </form>
              

            </div>
        </div>
        
      </div>
      <div class="row">
        <div class="col-12" style="background-color:white;" id="body01">
        @section('content') 
        @show 
        </div>
        @section('sidebar')
        <div class="col-sm-4" >  <!-- SIDEBAR -->
          
          <!-- SIDEBAR **************************** -->

              <div id="mySidenav" class="sidenav">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="font-size:30px;cursor:pointer">&times; Menu</a>
                  <a href="">Pollas</a>
                  @if($Auth::check()) <a class=" cerrar-sesion" href="{{action('UserController@closeSession')}}">Cerrar sesion</a>
                  @else <a class=" cerrar-sesion" href="{{route('login')}}">Iniciar sesion</a>
                  @endif
              </div>

              <!-- Use any element to open the sidenav -->
              
          
          <!-- SIDEBAR **************************** -->
        </div>
        @show
      </div>
        </div>
        <div class="row"> <!-- BODY -->
        
        </div>
        <div class="row"> <!-- FOOTER -->
        <div class="col-lg footer"  id="footer01" >
            <div class="col-sm-4"></div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4 justify-content-end align-items-end"  style="background-color:white;">
              
              Redes sociales:
                <a class="fa fa-instagram" href="https://www.instagram.com/ua_universidad/"></a>
                <a class="fa fa-facebook" href="https://www.facebook.com/campusUA"></a>
                <a class="fa fa-twitter" href="https://twitter.com/UA_Universidad"></a>
                <a class="fa fa-linkedin" href="https://www.linkedin.com/school/universidad-alicante/"></a>
                <a class="fa fa-youtube" href="https://www.youtube.com/channel/UCVZCJVs8j4oTRmnHC31pwpQ"></a>
            </div>
          </div>
        </div>


    </div>
    @yield('scripts')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ URL::asset('JS/script.js') }}"></script>
  </body>
</html>