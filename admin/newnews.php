
<?php
  include "header.php"; 
  
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 
<script src="ckeditor/ckeditor.js"></script>
<script>
   
  CKEDITOR.replace('myeditor');
</script>

<body class="">
  <div class="wrapper">

<?php include "sidebar.php"; ?>    

    <div class="main-panel">

<!-- Navbar -->
<?php include "navbar.php"; ?>
<?php 
include "./db.php";
// session_start();
if (isset($_POST['submit'])) {

    $title= $_POST['news_title'];
    $article= $_POST['news_article'];
    $nep_title= $_POST['nep_title'];
    $nep_article= $_POST['nep_article'];
    $cat= $_POST['cat'];
    $subcat= $_POST['subcat'];
    if(isset($_POST['publish'])){
    $publish= $_POST['publish'];  
  }else{
    $publish = 0;
  }
    $user = $_SESSION['username'];
    $main_image = $_FILES['main_image']['name'];
    $main_image_tmp = $_FILES['main_image']['tmp_name'];
    move_uploaded_file($main_image_tmp, "img/$main_image");  

     $query = "INSERT INTO content (title_eng, title_nep, desc_eng, desc_nep , image, category, sub_category, user, home_publish) VALUES ('$title', '$nep_title', '$article', '$nep_article', '$main_image', '$cat', '$subcat', '$user', '$publish')";

    if ($result=mysqli_query($con,$query)) {

         echo "<script>alert('Content published!')</script>";
          echo "<script>window.open('news.php','_self')</script>";

    }
    else{
          echo $query;
          echo mysqli_query($con,$query);
          die();
         echo "<script>alert($result)</script>";
        

    }
}


 ?>


      <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-success">
              <h4 class="card-title">Add New Content</h4>
            </div>
            <div class="card-body">
              <form action="newnews.php" method="post" enctype="multipart/form-data">
                
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="news_title" required>
                </div>
                <div class="form-group">
                    <label for="">Nepali Title</label>
                    <input type="text" class="form-control" name="nep_title" required>
                </div>

                    <div class="form-group">
                <label for="">Category</label>
                <select name="cat" id="category" class="custom-select" required>
                  
            <option>Select a Category</option>
                          <?php 
                          $get_cats = "SELECT * FROM category";

                          $run_cats = mysqli_query($con,$get_cats);
                          while ($row_cats=mysqli_fetch_array($run_cats)) {

                            $cat_id = $row_cats['id'];
                            $cat_title = $row_cats['name_eng'];

                            echo "<option value=$cat_id>$cat_title</option>";
                    
                          }


                          ?>
                </select>
              </div>

              <div class="form-group">
                <label for="">Sub Category</label>
                <select name="subcat" id="subcategory" class="custom-select" > 
                <option>Select a Subcategory</option>
                </select>
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

                  <div id="main-image-button" class="btn btn-rose btn-file">
                <span class="fileinput-new">Select Main image</span>
                <input type="file" name="main_image" onchange="preview_image(this.files, 'imgid1')"/>
              </div>
              <div id="imgid1"></div>

                  <?php if($role == 'admin'){?>
               <div class="form-group">
                <label for="">Publish in Home Page?</label>
                <div class="form-check form-check-radio">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio"  id="exampleRadios1" value="1" name="publish" >
                      Yes
                    <span class="circle">
                      <span class="check"></span>
                    </span>
                  </label>
                </div>

                  <div class="form-check form-check-radio">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio"  id="exampleRadios2" name="publish" value="0" checked>
                    No
                    <span class="circle">
                      <span class="check"></span>
                    </span>
                  </label>
                </div>
              </div>
              <?php } ?>
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
