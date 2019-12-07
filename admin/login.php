<?php
  include "header.php";
 ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<body class="">
  <div class="wrapper ">
    <div class="card login-card mx-auto">
        <div class="card-header card-header-success text-center">
          <h4 class="card-title">Login to your account</h4>
        </div>
        <div class="card-body mt-4">
          <form method="POST" action="log.php">
            <input type="text" name="uname" id="name" class="form-control" placeholder="Username">
            <input type="password" name="pass" id="pass" class="form-control my-2" placeholder="Password">
            <a href="#">Forgot password</a><br>
            <button type="submit" name="submit" class="btn btn-primary text-center mt-4">Login</button>
          </form>
        </div>
        <div class="card-footer text-muted">
          
        </div>
      </div>
    </div>
  </div>
<?php
  include "footer.php";
?>