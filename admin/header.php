<?php 
 session_start();
 if(isset($_SESSION['username']))
 {
   $username = $_SESSION['username'];
 }
 else{
  echo "<script>window.open('login.php','_self')</script>";
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Salapa Admin
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  
  <!-- CSS File-->
  <link rel="stylesheet" href="css/style.css">

  <link href="css/main.css" rel="stylesheet" />

  <style type="text/css">
    *{
      margin:0;
      padding: 0; 
      font-family: 'Josefin Sans', sans-serif;
      font-size: 20px;
    }

      .carousel-inner img {
        width: 100%;
        height: 600px;
      }

      .navbar-custom { 
          background-color: lightgreen; 
      }

      .navbar-custom .navbar-brand, 
      .navbar-custom .navbar-text { 
          color: green; 
      } 
      .nav-pills .nav-link {
    background-color: rgba(255, 0, 0, 0.2);
    color: white;
}
/*.nav-pills .nav-link:not(.active) {
    background-color: rgba(255, 0, 0, 0.5);
}*/
    </style>
</head>

