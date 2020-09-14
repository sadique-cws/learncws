<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code with Sadiq @yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700;900&display=swap" rel="stylesheet">

</head>
<body>
    <nav class="nav-extended white">
        <div class="nav-wrapper ">
         <div class="container">
            <a href="#" class="brand-logo"><h5 class="green-text text-darken-4">CWS Learning Portal</h5></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a class="black-text" href="sass.html">About</a></li>
              <li><a class="black-text" href="badges.html">Contact</a></li>
              <li><a class="black-text" href="collapsible.html">Our Courses</a></li>
            </ul>
         </div>
        </div>
      </nav>
    
      <ul class="sidenav" id="mobile-demo">
        <li><a href="sass.html">Home</a></li>
        <li><a href="badges.html">About</a></li>
        <li><a href="collapsible.html">Our Courses</a></li>
        <li><a href="collapsible.html">Contact</a></li>
      </ul>
    
     
      @section('content')
        @show()

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>