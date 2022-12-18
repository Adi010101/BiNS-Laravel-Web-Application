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
    <img src = "css/bins.png" height="200px" width="200px"/>
    <a href="{{ URL::to('/')}}" style = "color: white">
    <i class="bi bi-house-door-fill"></i>
    <b>HOME</b></a>
    <a class="active" href="{{ URL::to('showrecord')}}" >
    <i class="bi bi-folder-fill"></i>
    <b>RECORDS</b></a>
  </div>
  
  <div class="content">
    <h3 style ="padding-top: 10px;color:#00858E"><b>Update Resident Record</b></h3>
    <hr>
    <div class="container">
        <h1>Edit Resident Information</h1>
     
        
        <div class="card-body">
            <form action="{{ url('update/'.$records->id) }}" method="POST" enctype="multipart/form-data">
                <div class="form-group mb-3">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter the firstname" value="{{ $records->firstname }}">
                    </div>
                    <div class="form-group">
                        <label for="middlename">Middle Name</label>
                        <input type="text" class="form-control" name="middlename" id="middlename" placeholder="Enter the middlename" value="{{ $records->middlename }}">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter the lastname" value="{{ $records->lastname }}">
                    </div>
                    <div class="form-group">
                        <label for="birthdate">Birthday</label>
                        <input type="date" class="form-control" name="birthdate" id="birthdate" placeholder="Enter the birthdate" value="{{ $records->birthdate }}">
                    </div>
                    <div class="form-group">
                        <label for="civilstatus">Civil Status</label>
                        <br>
                        <select class="form-control" name="civilstatus" id="civilstatus">
                            <option selected>{{ $records->civilstatus }}</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Widowed">Widowed</option>
                            <option value="Seperated">Seperated</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="occupation">Occupation</label>
                        <input type="text" class="form-control" name="occupation" id="occupation" placeholder="Enter the occupation" value="{{ $records->occupation }}" >
                    </div>
                    <div class="form-group">
                        <label for="sitio">Sitio</label>
                        <br>
                        <select class="form-control" name="sitio" id="sitio">
                            <option selected>{{ $records->sitio }}</option>
                            <option value="Ilaya">Ilaya</option>
                            <option value="Centro">Centro</option>
                            <option value="Pinagpala">Pinagpala</option>
                            <option value="Sambat">Sambat</option>
                            <option value="Don Elpidio">Don Elpidio</option>
                            <option value="White House">White House</option>
                            <option value="Green Heights">Green Heights</option>
                        </select>
                    </div>
                    <div style="text-align: center;">
                      <button type="submit" class="btn btn-primary">Update Record</button>
                      <a href="{{ url('showrecord') }}" class="btn btn-danger">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>
  </body>
</html>

