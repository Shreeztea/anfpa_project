<?php 
include "./db.php";

if(isset($_GET['gId'])){
   $gId = $_GET['gId'];
  $sel_result = mysqli_query($con,"SELECT * FROM gallery WHERE gallery_id= $gId");
  $row = mysqli_fetch_assoc($sel_result);
}
 




if (isset($_POST['submit'])) {

    $gallery_title= $_POST['gallery_title'];
    
    $publish= $_POST['publish'];

    //$main_image = $_POST['main_image'];
    $main_image = $_FILES['main_image']['name'];
    $main_image_tmp = $_FILES['main_image']['tmp_name'];
    move_uploaded_file($main_image_tmp, "img/$main_image");

       if($main_image=="")
    {
      $main_image=$row['main_image'];
     
    
    }
    

    

      // $query = "INSERT INTO news (news_title, news_article, publish) VALUES ('$news_title', '$news_article' ,'$publish')";

    $query = "UPDATE `gallery` SET `gallery_title` = '$gallery_title', `main_image` = '$main_image', `publish` = '$publish' WHERE `gallery`.`gallery_id` = $gId";

    if ($result=mysqli_query($con,$query)) {

         echo "<script>alert('gallery has been updated!')</script>";
        //echo "<script>window.open('gallery.php','_self')</script>";

    }
    else{
         echo "<script>alert('error')</script>";
        

    }
}


 ?>


<?php
  include "header.php"; 
  
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="ckeditor/ckeditor.js"></script>
<script type="text/javascript">
  CKEDITOR.replace('myeditor');
</script>

<body class="">
  <div class="wrapper">

<?php include "sidebar.php"; ?>    

    <div class="main-panel">

<!-- Navbar -->
<?php include "navbar.php"; ?>
      <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-success">
              <h4 class="card-title">Add New News</h4>
            </div>
            <div class="card-body">
              <form action="editgallery.php?gId=<?php echo $gId;?>" method="post" enctype="multipart/form-data">
                
                <div class="form-group">
                    <label for="">News Title</label>
                    <input type="text" class="form-control" name="gallery_title" value="<?php echo $row['gallery_title'];?>" required>
                </div>

                <div class="form-group">
                <label for="">Image</label><br>
                <img src="img/<?php echo $row['main_image']; ?>"  width="200px" alt="">
              </div>
           <!--    <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                    <div>
                    <span class="btn btn-raised btn-round btn-rose btn-file">
                      <span class="fileinput-new">Select image</span>
                      <span class="fileinput-exists">Change</span>
                      <input type="file" name="main_image" />
                    </span>
                         
                    </div> -->
                    <div id="main-image-button" class="btn btn-rose btn-file">
                <span class="fileinput-new">Select Main image</span>
                <input type="file" name="main_image" onchange="preview_image(this.files, 'imgid1')"/>
              </div>
              <div id="imgid1"></div>


               

               <div class="form-group">
                <label for="">Publish?</label>
                <div class="form-check form-check-radio">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio"  id="exampleRadios1" value="1" name="publish" checked>
                      Yes
                    <span class="circle">
                      <span class="check"></span>
                    </span>
                  </label>
                </div>

                  <div class="form-check form-check-radio">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio"  id="exampleRadios2" name="publish" value="0">
                    No
                    <span class="circle">
                      <span class="check"></span>
                    </span>
                  </label>
                </div>
              </div>
                <br>
                <button type="submit" name="submit" class="btn btn-success">Save Changes</button>
                
             

                

              </form>
            </div>
            </div>
          </div>
        </div>
      </div>
    <!-- End of main-panel -->
  </div>
  <!-- End of wrapper -->
  <?php include 'footer.php'; ?>
