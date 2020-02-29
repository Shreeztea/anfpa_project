<?php 
include "./db.php";
  include "header.php"; 
if (isset($_GET['newsId'])) {
  $newsId = $_GET['newsId'];
  $sel_result = mysqli_query($con,"SELECT * FROM content WHERE id= $newsId");
  $row = mysqli_fetch_assoc($sel_result);

  $cat_id = $row['category'];
  $cat_result = mysqli_query($con,"SELECT * FROM category WHERE id= $cat_id");
  $r = mysqli_fetch_assoc($cat_result);
  $category = $r['name_eng'];

  $sub_id = $row['sub_category'];
  $sub_result = mysqli_query($con,"SELECT * FROM sub_category WHERE id= $sub_id");
  $sub_r = mysqli_fetch_assoc($sub_result);
  $sub_category = $sub_r['name_eng'];
}



if (isset($_POST['submit'])) {

    $news_title= addslashes($_POST['news_title']);
    $news_article= addslashes($_POST['news_article']);
    $nep_title= addslashes($_POST['nep_title']);
    $nep_article= addslashes($_POST['nep_article']);
    $cat= $_POST['cat'];
    $subcat= $_POST['subcat'];
    $user = $_SESSION['username'];
    if (isset($_POST['publish'])) {
      $publish= $_POST['publish'];
    }  
    else{
      $publish = $row['home_publish'];
    }


      $main_image = $_FILES['main_image']['name'];
    $main_image_tmp = $_FILES['main_image']['tmp_name'];
    move_uploaded_file($main_image_tmp, "img/$main_image"); 

     if($main_image=="")
    {
        $main_image = $row['image'];
      }
  

    $query = "UPDATE `content` SET `title_eng` = '$news_title', `desc_eng` = '$news_article', `title_nep` = '$nep_title', `desc_nep` = '$nep_article', `category` = '$cat', `sub_category` = '$subcat', `image` = '$main_image', `user` = '$user', `home_publish` = '$publish' WHERE `content`.`id` = '$newsId'";
    mysqli_query ($con,"set character_set_client='utf8'"); 
    mysqli_query ($con,"set collation_connection='utf8_general_ci'"); 

    if ($result=mysqli_query($con,$query)) {

         echo "<script>alert('updated!')</script>"; 
        echo "<script>window.open('news.php','_self')</script>";

    }
    else{
         echo "<script>alert('error')</script>";
        

    }
}


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
              <h4 class="card-title">Add New Content</h4>
            </div>
            <div class="card-body">
              <form action="editnews.php?newsId=<?php echo $newsId;?>" method="post" enctype="multipart/form-data">
                
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="news_title" value="<?php echo $row['title_eng'];?>" required>
                </div>
                <div class="form-group">
                    <label for="">Nepali Title</label>
                    <input type="text" class="form-control" name="nep_title" value="<?php echo $row['title_nep'];?>" required>
                </div>

                    <div class="form-group">
                <label for="">Category</label>
                <select name="cat" id="category" class="custom-select" required>
                  
            <option value="<?php echo $row['category'];?>"><?php echo $category;?></option>
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
                 <option value="<?php echo $row['sub_category'];?>"><?php echo $sub_category;?></option>
                </select>
              </div>

                <div class="form-group">
                  <label for="">Description</label>
                  <textarea name="news_article" id="myeditor">
                         <?php echo $row['desc_eng'];?>     
                       </textarea>
                       <script>
                       CKEDITOR.replace('myeditor');
                       </script>
                </div>
                <div class="form-group">
                    <label for="">Nepali Description</label>
                    <textarea name="nep_article" id="myedit">
                                <?php echo $row['desc_nep'];?>
                         </textarea>
                         <script>
                         CKEDITOR.replace('myedit');
                         </script>
                  </div>

                  <div id="main-image-button" class="btn btn-rose btn-file">
                <span class="fileinput-new">Select Main image</span>
                <input type="file" name="main_image" onchange="preview_image(this.files, 'imgid1')"/>
              </div>
              <div id="imgid1">
                <img src="img/<?php echo $row['image'];?>">
              </div>

                  <?php if($role == 'admin'){?>
              <div class="form-group">
                <label for="">Publish in Home page?</label>
                <div class="form-check form-check-radio">
                  <label class="form-check-label">
                      <?php if($row['home_publish']==1){ ?>
                    <input class="form-check-input" type="radio" name="publish" id="exampleRadios1" value="1" checked>
                    <?php } else{ ?>
                    <input class="form-check-input" type="radio" name="publish" id="exampleRadios1" value="1">
                    <?php } ?>
                      Publish
                    <span class="circle">
                      <span class="check"></span>
                    </span>
                  </label>
                </div>
                <div class="form-check form-check-radio">
                  <label class="form-check-label">
                      <?php if($row['home_publish']==0){ ?>
                    <input class="form-check-input" type="radio" name="publish" id="exampleRadios2" value="0" checked>
                    <?php } else{ ?>
                    <input class="form-check-input" type="radio" name="publish" id="exampleRadios2" value="0">
                    <?php } ?>
                    Do not publish
                    <span class="circle">
                      <span class="check"></span>
                    </span>
                  </label>
                </div>

              <?php } ?>
                <br>
              
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
