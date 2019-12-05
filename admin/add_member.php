<?php 
include "header.php";
include "./db.php";

if(isset($_POST['insert_member']))
{
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone_no = $_POST['phone_no'];
   $state = $_POST['state'];
   

    
    $publish= $_POST['publish'];

    $pic = $_FILES['pic']['name'];
    $pic_tmp = $_FILES['pic']['tmp_name'];
    move_uploaded_file($pic_tmp, "img/$pic");

    $query=mysqli_query($con,"insert into member_info(name,email,phone_no,state,pic,publish) values('$name','$email','$phone_no','$state','$pic','$publish')");  

       
       
            if($query){
                 echo "<script>alert('New Member has been added!')</script>";
                echo "<script>window.open('communities.php','_self')</script>";

    }
    else{
         echo "<script>alert('error')</script>";
        

    }

          
     

}

 ?>

<body class="">
  <div class="wrapper">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 


<?php include "sidebar.php"; ?>    

    <div class="main-panel">

<!-- Navbar -->
<?php include "navbar.php"; ?>
    <div class="content">
      <div class="container-fluid">
      
        <a href="./communities.php"><button class="btn btn-link"><i class="material-icons">arrow_back</i> Back to Communities</button></a>
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title">New Member</h4>
          </div>
          <div class="card-body table-responsive">
            <!-- <form action="newproduct.php" method="post" enctype="multipart/form-data"> -->
              <form action="add_member.php" method="post" enctype="multipart/form-data">
        
              <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" required>
              </div>

               <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" required>
              </div>

               <div class="form-group">
                <label for="">Phone no.</label>
                <input type="text" class="form-control" name="phone_no" required>
              </div>

               <div class="form-group">
                <label for="">State</label>
                <select name="state" id="" class="custom-select">
                  
                <option value="">Select a State</option>                             

                <option value='State 1'>State 1</option>
                <option value='State 2'>State 2</option>
                <option value='State 3'>State 3</option>
                <option value='State 4'>State 4</option>
                <option value='State 5'>State 5</option>
                <option value='State 6'>State 6</option>
                <option value='State 7'>State 7</option>
                        


                 </select>
                  </div>
              

              <!-- Select primary image -->
              <div id="main-image-button" class="btn btn-rose btn-file">
                <span class="fileinput-new">Select Main image</span>
                <input type="file" name="pic" onchange="preview_image(this.files, 'imgid1')"/>
              </div>
              <div id="imgid1"></div>
              
            

            
              <br><br>      




              <div class="form-group">
                <label for="">Publish?</label>
                <div class="form-check form-check-radio">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="publish" id="exampleRadios1" value="1" checked>
                      Publish
                    <span class="circle">
                      <span class="check"></span>
                    </span>
                  </label>
                </div>
                <div class="form-check form-check-radio">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="publish" id="exampleRadios2" value="0">
                    Do not publish
                    <span class="circle">
                      <span class="check"></span>
                    </span>
                  </label>
                </div>
                <br>
                <button type="submit" name="insert_member" class="btn btn-success">Save Changes</button>
                
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    </div>
    <!-- End of main-panel -->
  </div>
  <!-- End of wrapper -->
<?php include ("footer.php"); ?>

