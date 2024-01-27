<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Student Management System | @yield('title')</title>


    <style>
        /* The side navigation menu */
.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

/* Sidebar links */
.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

/* Active/current link */
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
    </style>


</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
             <nav class="navbar navbar-expand-lg navbar-light bg-light">
             <div class="container-fluid">
              <a class="navbar-brand" href="#"> <h1>Student managment system</h1> </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  {{ Auth::guard('admin')->user()->name }}
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="{{ route('admin.logout') }}">Logout</a></li>
                </ul>
              </div>
          </nav>
        </div>
        @if (session('success'))
        <div class="alert alert-success">
             {{  session('success') }}
        </div>
        @endif
        <div class="row">
        <div class="col-md-3">
                <div class="sidebar">
                    <a class="active" href="#home">Home</a>
                    <a href="{{ route('students.index') }}">Students</a>
                    <a href="{{ route('teachers.index') }}">Teachers</a>
                    <a href="{{ route('courses.index') }}">Courses</a>
                    <a href="{{ route('batches.index') }}">Batches</a>
                    <a href="{{ route('enrollments.index') }}">Enrollement</a>
                    <a href="{{ route('payments.index') }}">payment</a>
                </div>
        </div>
        <div class="col-md-12">
            <div class="content">
                @yield('content')
            </div>
        </div>


    </div>
</body>
</html>
