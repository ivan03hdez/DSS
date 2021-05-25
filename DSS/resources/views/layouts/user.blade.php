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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
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

                  @if(Request::url() === 'http://localhost:8000/home')
                      <a href="http://127.0.0.1:8000/search">Searcher</a>

                      <a href="">Auriculares</a>
                      <a href="">Altavoces</a>
                      <a href="">Cascos</a>
                      <a href="">Micrófonos</a>
                  @else
                      <a href="{{action('UserController@myAccount')}}">No haria falta</a>
                  @endif
                  @if($Auth::check()) 
                        <a class=" fav-list" href="{{action('UserController@closeSession')}}">Lista de favotitos</a>
                        <a class=" my-account" href="{{action('UserController@myAccount')}}">Mi cuenta</a>
                        <a class=" cerrar-sesion" href="{{action('UserController@closeSession')}}">Cerrar sesion</a>
                  @else <a class=" cerrar-sesion" href="{{route('login')}}">Iniciar sesion</a>
                  @endif
              </div>

              <!-- Use any element to open the sidenav -->
              
          
          <!-- SIDEBAR **************************** -->
        </div>
        @show
      </div>
        </div>

    </div>
    @yield('scripts')
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ URL::asset('JS/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
  <footer class="bg-light text-center text-white fixed-bottom" id="footer01">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
      
                      <a class="fa fa-instagram" href="https://www.instagram.com/ua_universidad/"></a>
                      <a class="fa fa-facebook" href="https://www.facebook.com/campusUA"></a>
                      <a class="fa fa-twitter" href="https://twitter.com/UA_Universidad"></a>
                      <a class="fa fa-linkedin" href="https://www.linkedin.com/school/universidad-alicante/"></a>
                      <a class="fa fa-youtube" href="https://www.youtube.com/channel/UCVZCJVs8j4oTRmnHC31pwpQ"></a>
                      
                        <div class ="col-12" id="google_translate_element"></div>
                      
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2021 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">DEAF SL</a>
      </div>
      
      
      <!-- Copyright -->
    </footer>
</html>