<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
  </head>
<style>
  body {
    margin: 0;
    font-family: 'Roboto', sans-serif;
  }
  
  .sidebar {
    margin: 0;
    padding: 0;
    width: 200px;
    background-color: #00858E;
    position: fixed;
    height: 100%;
    overflow: auto;
    
  }
  
  .sidebar a {
    display: block;
    color: black;
    padding: 16px;
    text-decoration: none;
  }
   
  .sidebar a.active {
    background-color: #FFFF;
    color: black;
  }
  
  .sidebar a:hover:not(.active) {
    background-color: #FFFF;
    color: black;
  }
  
  div.content {
    margin-left: 200px;
    padding: 1px 16px;
    height: 1000px;
  }
  
  @media screen and (max-width: 700px) {
    .sidebar {
      width: 100%;
      height: auto;
      position: relative;
    }
    .sidebar a {float: left;}
    div.content {margin-left: 0;}
  }
  
  @media screen and (max-width: 400px) {
    .sidebar a {
      text-align: center;
      float: none;
    }
  }
  </style>
  </head>
  <body>
  
  <div class="sidebar">
    <img src = "bins.png" height="200px" width="200px"/>
    <a class="active" href="{{ URL::to('/')}}">
    <i class="bi bi-house-door-fill"></i>
    <b>HOME</b></a>
    <a href="{{ URL::to('showrecord')}}" style = "color: white">
    <i class="bi bi-folder-fill"></i>
    <b>RECORDS</b></a>
  </div>
  
  <div class="content">
    <h2 style ="padding-top: 10px;color:#00858E"><b>Dashboard</b></h3>
    <hr>
    <div class="container">
        <h6>Residents Civil Status</h6>
        <div class="row">
            <div class="col-sm-3">
                <div class="card text-white mb-3" style="max-width: 18rem;background-color:#002B5B">
                    <div class="card-header">Single</div>
                    <div class="card-body">
                      <h5 class="card-title">{{ $single }}</h5>
                    </div>
                  </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-white mb-3" style="max-width: 18rem;background-color:#2B4865">
                    <div class="card-header">Married</div>
                    <div class="card-body">
                      <h5 class="card-title">{{ $married }}</h5>
                    </div>
                  </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-white mb-3" style="max-width: 18rem;background-color:#256D85">
                    <div class="card-header">Widowed</div>
                    <div class="card-body">
                      <h5 class="card-title">{{ $widowed }}</h5>
                    </div>
                  </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-white mb-3" style="max-width: 18rem;background-color:#0078AA">
                    <div class="card-header">Seperated</div>
                    <div class="card-body">
                      <h5 class="card-title">{{ $seperated }}</h5>
                    </div>
                  </div>
            </div>
        </div>
        <hr>
        <h6>Sitio</h6>
        <div class="row">
            <div class="col-sm-3">
                <div class="card text-white mb-3" style="max-width: 18rem;background-color:#2e5090">
                    <div class="card-header">Ilaya</div>
                    <div class="card-body">
                      <h5 class="card-title">{{ $ilaya }}</h5>
                    </div>
                  </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-white mb-3" style="max-width: 18rem;background-color:#007FFF">
                    <div class="card-header">Centro</div>
                    <div class="card-body">
                      <h5 class="card-title">{{ $centro }}</h5>
                    </div>
                  </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-white mb-3" style="max-width: 18rem;background-color:#6488ea">
                    <div class="card-header">Pinagpala</div>
                    <div class="card-body">
                      <h5 class="card-title">{{ $pinagpala }}</h5>
                    </div>
                  </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-white mb-3" style="max-width: 18rem;background-color:#5D8AA8">
                    <div class="card-header">Sambat</div>
                    <div class="card-body">
                      <h5 class="card-title">{{ $sambat }}</h5>
                    </div>
                  </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-white mb-3" style="max-width: 18rem;background-color:#0073cf">
                    <div class="card-header">Don Elpidio</div>
                    <div class="card-body">
                      <h5 class="card-title">{{ $donelpidio }}</h5>
                    </div>
                  </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-white mb-3" style="max-width: 18rem;background-color:#0892d0">
                    <div class="card-header">White House</div>
                    <div class="card-body">
                      <h5 class="card-title">{{ $whitehouse }}</h5>
                    </div>
                  </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-white mb-3" style="max-width: 18rem;background-color:#1b5583">
                    <div class="card-header">Green Heights</div>
                    <div class="card-body">
                      <h5 class="card-title">{{ $greenheights }}</h5>
                    </div>
                  </div>
            </div>
        </div>
  </div>
  </div>
  
  </body>
</html>