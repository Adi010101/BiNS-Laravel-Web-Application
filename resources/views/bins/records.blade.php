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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"> </link>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
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

  .subheader{
    float: left;
    margin-Bottom: 10px
  }
  .subsubheader{
    float: right;
    margin-Bottom: 10px
  }
  #btn-back-to-top {
  position: fixed;
  bottom: 20px;
  right: 20px;
  display: none;
  }
  </style>
  </head>
  <body>
  
  <div class="sidebar">
    <img src = "bins.png" height="200px" width="200px"/>
    <a href="{{ URL::to('/')}}" style = "color: white">
    <i class="bi bi-house-door-fill"></i>
    <b>HOME</b></a>
    <a class="active" href="{{ URL::to('showrecord')}}" >
    <i class="bi bi-folder-fill"></i>
    <b>RECORDS</b></a>
  </div>
  <button
        type="button"
        class="btn btn-danger btn-floating btn-lg"
        id="btn-back-to-top"
        >
        <i class="fas fa-arrow-up"></i>
  </button>
  <div class="content">
    <h3 style ="padding-top: 10px;color:#00858E"><b>Residents Information</b></h3>
    <hr>
    <div class="container">
        <div class="subheader">
          <h4>Residents List</h4>
        </div>
        <div class="subsubheader">
          <a href="{{ URL::to('addrecord') }}" class="btn btn-info">
          <i class="bi bi-plus-lg"></i> Add New Resident</a>
        </div>
    </div>
      <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
      </script>
      <table class="table table-striped table-bordered table-sm" id="myTable">
          <thead>
              <tr>
                  <th>Resident ID</th>
                  <th>Firstname</th>
                  <th>Middlename</th>
                  <th>Lastname</th>
                  <th>Birthdate</th>
                  <th>Civil Status</th>
                  <th>Occupation</th>
                  <th>Sitio</th>
                  <th>Actions</th>
              </tr>
          </thead>
          <tbody>
              @isset($record)
              @foreach ($record as $records)
  
                  <tr>
                      <td>{{ $records->id }}</td>
                      <td>{{ $records->firstname }}</td>
                      <td>{{ $records->middlename }}</td>
                      <td>{{ $records->lastname }}</td>
                      <td>{{ $records->birthdate }}</td>
                      <td>{{ $records->civilstatus }}</td>
                      <td>{{ $records->occupation }}</td>
                      <td>{{ $records->sitio }}</td>
                      <td>
                        <a href="{{ URL::to('edit/' . $records->id) }}" class="btn btn-primary">
                        <i class="bi bi-pencil-fill"></i></a>
                        <a href="{{ URL::to('delete/' . $records->id) }}" class="btn btn-danger">
                        <i class="bi bi-trash-fill"></i></a>
                      </td>
                  </tr>
              @endforeach
              @endisset
          </tbody>
      </table>
  </div>
  </div>
  
  </body>
</html>