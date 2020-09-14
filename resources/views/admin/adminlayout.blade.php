<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code with Sadiq @yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
<body>
<header>
  <div class="navbar-fixed">

<nav class="black">
    <div class="nav-wrapper">
     <div class="container">  
     
       <a href="#" data-target="slide-out" class="sidenav-trigger  show-on-large">
       <i class="material-icons">menu</i>
       </a>

     <a href="#" class="brand-logo">Admin Panel</a>
<ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html" class="btn red">Logout</a></li>
      </ul>
     </div>
    </div>
  </nav>
  </div>
  <ul id="slide-out" class="sidenav sidenav-fixed" style="transform: translateX(-105%);">

         <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold"><a  href="{{ route("homepage")}}"class="waves-effect waves-teal" >Homepage</a>

            <li class="bold"><a class="collapsible-header waves-effect waves-teal" tabindex="0">Courses</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="{{ route("course_insert")}}">Insert Course</a></li>
                  <li><a href="{{ route("manage_course")}}">Manage Courses</a></li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-teal" tabindex="0">Students</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="badges.html">Manage Students</a></li>
                </ul>
              </div>
            </li>
            <li class="bold "><a class="collapsible-header waves-effect waves-teal" tabindex="0">Chapters</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="auto-init.html">Manage Chapters</a></li>
                  <li><a href="carousel.html">Insert Chapter</a></li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-teal" tabindex="0">Quiz</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="autocomplete.html">Create Assignments</a></li>
                  <li><a href="autocomplete.html">Create Quiz</a></li>
                  <li><a href="autocomplete.html">Manage Quiz</a></li>
                  <li><a href="autocomplete.html">Manage Assignments</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
      </ul>
</header>
  
 
<main>

<div id="courses" class="col s12">
      @section('courses')
        @show()
  </div>  
    
     
      @section('content')
        @show()
    
    </main>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>