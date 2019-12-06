<?php
  include "header.php";
 ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
var login_attempts=3;
function check_form()
{

 var name=document.getElementById("name").value;
 var pass=document.getElementById("pass").value;
 // alert(name);
 $.ajax
  ({
  type:'post',
  url:'log.php',
  data:{
   do_login:"do_login",
   uname:name,
   pass:pass
  },
  success:function(response) {
    alert(response);
  if(response.trim() == "success")
  {
    window.location.href="index.php";
  }
  else 
  {
    if(login_attempts==0)
  {
   alert("No Login Attempts Available");
   //return false;
  }
  else
  {
   login_attempts=login_attempts-1;

   alert("Login Failed Now Only "+login_attempts+" Login Attempts Available");
   
   if(login_attempts==0)
   {
    document.getElementById("name").disabled=true;
    document.getElementById("pass").disabled=true;
    document.getElementById("form1").disabled=true;
    //return false;
   }
    //return true;
  }

  }
  }
  });
  
} 
</script>
<body class="">
  <div class="wrapper ">
    <div class="card login-card mx-auto">
        <div class="card-header card-header-success text-center">
          <h4 class="card-title">Login to your account</h4>
        </div>
        <div class="card-body mt-4">
          <form method="POST">
            <input type="text" name="uname" id="name" class="form-control" placeholder="Username">
            <input type="password" name="pass" id="pass" class="form-control my-2" placeholder="Password">
            <a href="#">Forgot password</a><br>
            <button type="button" name="submit" onclick="check_form();" class="btn btn-primary text-center mt-4">Login</button>
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