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
    
   
    <div class="container-fluid">
      <div class="row">
      
        <div id="header01" class="col-12" style="background-color:grey;">  <!-- HEADER -->
            
            <div class="col-12 align-header"> 
              <span style="font-size:30px;cursor:pointer" onclick="openNav()"  ><div class="menu">&#9776; Dashboard</div></span> 
              <div class="logo rounded mx-auto d-block" >
                <img src="{{ URL::asset('images/deaf.jpeg') }}"  alt="" title="">
              </div>
              <div class="col-2 admin-outer-container" style="background-color:yellow;"> 
                @section('add')
                <div class="col-4 admin-container add" style="background-color:yellow;">
                  <button type="button" class="btn btn-success btn-add"> Add + </button>
                </div>  
                @show
                <div class="col-4 admin-container admin-image" style="background-color:red;">
                </div>
                <div class="col-4 admin-container admin-name" style="background-color:green;">
                </div>
              </div>
            </div>
        </div>
        
      </div>
      <div class="row">
        <div class="col-12" style="background-color:green;" id="body01">
body 
        </div>
        @section('sidebar')
        <div class="col-sm-4" >  <!-- SIDEBAR -->
          
          <!-- SIDEBAR **************************** -->

              <div id="mySidenav" class="sidenav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="font-size:30px;cursor:pointer">&times; Menu</a>
              @section('sidebar-element')
              <a href="#">@yield('sidebar-yield')</a>
              @show
              </div>

              <!-- Use any element to open the sidenav -->
              
          
          <!-- SIDEBAR **************************** -->
        </div>
        @show
      </div>
      <div class="row">
        <div class="col-lg" style="background-color:red;" id="footer01">Footer</div>
      </div>
    </div>



    <script type="text/javascript" src="{{ URL::asset('JS/script.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>
