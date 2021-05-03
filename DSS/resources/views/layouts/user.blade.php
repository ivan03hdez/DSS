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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <title>@yield('title')</title>
  </head>   
  <body>
    
   
    <div class="container-fluid">
      <div class="row">
      
        <div id="header01" class="col-12" style="background-color:grey;">  <!-- HEADER -->
            
            <div class="col-12 align-header"> 
              <span style="font-size:30px;cursor:pointer" onclick="openNav()"  ><div class="menu">&#9776; Dashboard</div></span> 
              <div class="logo rounded mx-auto d-block" >
                <img  src="{{ URL::asset('images/deaf.jpeg') }}"  alt="" title="">
              </div>     
              <form class="form-inline my-2 my-lg-0 ml-auto">
      <input class="form-control" type="search" placeholder="Search" aria-label="Search">
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
                  <a href="{{action('ProductController@list')}}">Pollas</a>
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


    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script type="text/javascript" src="{{ URL::asset('JS/script.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    @yield('scripts')
     <!-- Script que borra por ID -->
    <script>
    $(document).ready(function () {
      $('tr').on('click', '#trash', function() {
        var row=$(this).parents('tr');
        var id=row.data('id');
        var urlClass = window.location.pathname.split('/')[1];/////funciona en admin porque cojo la clase dinamicamente
        if(confirm("¿Are you sure you want to delete this object?"))
          window.location.replace("http://localhost:8000/" + urlClass +"/delete/"+id);
      })
    });
    </script>
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
