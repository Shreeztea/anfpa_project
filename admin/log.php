<?php
 session_start();
  include "./db.php";

  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
  if(isset($_POST['do_login'])){
    $uname = test_input($_POST['uname']);
    $pass = test_input(MD5($_POST['pass']));
    $query = "SELECT * FROM user WHERE username='$uname' AND password='$pass' ";

    $res = mysqli_query($con,$query);
    if(mysqli_num_rows($res)>0){

      $_SESSION['username']=$uname;
       //echo "<script>alert('Login successfully')</script>";
       // echo "<script>window.open('index.php','_self')</script>";

      echo "success";
      
    }
    else
    {
       // echo "<script>alert('Password or Username incorrect.')</script>";
       echo "fail";
    }


exit();

  }
 ?>