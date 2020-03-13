<?php
require_once 'includes/functions.php';

$page = 'index';
if ( isset( $_GET[ 'page' ] ) ) {
  $page = $_GET[ 'page' ];
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <title><?= getTitle($page) ?></title>
<!-- <title>labonnepoir, site de petites annonces gratuites</title> -->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-grid.css">
<link rel="stylesheet" href="css/bootstrap-grid.min.css">
<link rel="stylesheet" href="css/bootstrap-reboot.css">
<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.typekit.net/twm3cgs.css">
<script src="https://kit.fontawesome.com/f16bfa0b12.js" crossorigin="anonymous"></script>
<link rel="shortcut icon" href="favicon.png">
</head>
<body>
<div id="banner">
  <h2 style="font-family: upgrade">labonnepoir</h2>
</div>
<nav id="nav_bar" class="navbar navbar-expand-lg navbar-light bg-light"> <a style="font-family: upgrade" class="navbar-brand" href="#">labonnepoir</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav m-auto">
        <img class="img-fluid logo" src="images/pear.png">
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active"> <a class="nav-link" href="#">Recherche &#45; <i class="fas fa-search"></i></a></li>
        <li class="nav-item active"> <a class="nav-link" href="#">Se connecter</a> </li>
      </ul>
    </form>
  </div>
</nav>
<div class="container">
  <p>yolo</p>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catégories</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a> </div>
        </li>
        <li class="nav-item active"> <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> </li>
        <li class="nav-item"> <a class="nav-link" href="#">Pricing</a> </li>
      </ul>
    </div>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Recherche" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
    </form>
  </nav>
</div>
<footer> </footer>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> 
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
<script>
    $(document).ready(function() {
  
  $(window).scroll(function () {
      //if you hard code, then use console
      //.log to determine when you want the 
      //nav bar to stick.  
      console.log($(window).scrollTop())
    if ($(window).scrollTop() > 280) {
      $('#nav_bar').addClass('navbar-fixed');
    }
    if ($(window).scrollTop() < 281) {
      $('#nav_bar').removeClass('navbar-fixed');
    }
  });
});
    </script>
</body>
</html>
