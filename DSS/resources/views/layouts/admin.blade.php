<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


    <link rel="stylesheet" type="text/css" href="{{ url('/CSS/style.css') }}" />
    


    <title>@yield('title')</title>
  </head>   
  <body>
    @section('content')
    <div class="container" class="content-example">
        @section('sidebar')
        <!-- SIDEBAR **************************** -->

            <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            @section('sidebar-element')
            <a href="#">@yield('sidebar-yield')</a>
            @show
            </div>

            <!-- Use any element to open the sidenav -->
             
      @show
        <!-- SIDEBAR **************************** -->
        
    </div>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span> 
    @show
   



    <script type="text/javascript" src="{{ URL::asset('JS/script.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>
