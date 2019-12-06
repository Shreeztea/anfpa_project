<?php include "header.php";
include "./db.php";

 if(isset($_SESSION['username'])){
 ?>


<body class="">
  <div class="wrapper">

<?php include "sidebar.php"; ?>    

    <div class="main-panel">

<!-- Navbar -->
<?php include "navbar.php"; ?>

      
    </div>
  </div>

<?php
  include "footer.php";
 }

 else{
 echo "<script>window.open('login.php','_self')</script>";
 }
?>