<?php 
include "./db.php";

if (isset($_POST['submit'])) {

    $news_title= $_POST['news_title'];
    $news_article= $_POST['news_article'];
    $nep_title= $_POST['nep_title'];
    $nep_article= $_POST['nep_article'];
    $publish= $_POST['publish'];    

    $pic = $_FILES['pic']['name'];
    $pic_tmp = $_FILES['pic']['tmp_name'];
    move_uploaded_file($pic_tmp, "img/$pic");

     $query = "INSERT INTO notice (title, nep_title, article, nep_article , doc, publish) VALUES ('$news_title', '$nep_title', '$news_article', '$nep_article', '$pic', '$publish')";

    if ($result=mysqli_query($con,$query)) {

         echo "<script>alert('news article has been inserted!')</script>";
          echo "<script>window.open('notice.php','_self')</script>";

    }
    else{
          echo $query;
          echo mysqli_query($con,$query);
          die();
         echo "<script>alert($result)</script>";
        

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
              <h4 class="card-title">Add Notice</h4>
            </div>
            <div class="card-body">
              <form action="newnotice.php" method="post" enctype="multipart/form-data">
                
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="news_title" required>
                </div>
                <div class="form-group">
                    <label for="">Nepali Title</label>
                    <input type="text" class="form-control" name="nep_title" required>
                </div>
                <div class="form-group">
                  <label for="">Description</label>
                  <textarea name="news_article" id="myeditor">
                                
                       </textarea>
                       <script>
                       CKEDITOR.replace('myeditor');
                       </script>
                </div>
                <div class="form-group">
                    <label for="">Nepali Description</label>
                    <textarea name="nep_article" id="myedit">
                                  
                         </textarea>
                         <script>
                         CKEDITOR.replace('myedit');
                         </script>
                  </div>

                  <!-- Select primary image -->
              <div id="main-image-button" class="btn btn-rose btn-file">
                    <span class="fileinput-new">Select File</span>
                    <input type="file" name="pic" onchange="preview_image(this.files, 'imgid1')"/>
                  </div>
                  <div id="imgid1"></div>
                  
                
    
                
                  <br><br>      
    
    
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
