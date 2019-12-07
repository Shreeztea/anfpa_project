<?php 
include "./db.php";
if (isset($_GET['newsId'])) {
  $newsId = $_GET['newsId'];
  $sel_result = mysqli_query($con,"SELECT * FROM news WHERE newsId= $newsId");
  $row = mysqli_fetch_assoc($sel_result);
}



if (isset($_POST['submit'])) {

    $news_title= $_POST['news_title'];
    $news_article= $_POST['news_article'];
    $nep_title= $_POST['nep_title'];
    $nep_article= $_POST['nep_article'];
    $publish= $_POST['publish'];
  

    $query = "UPDATE `news` SET `news_title` = '$news_title', `news_article` = '$news_article', `nep_title` = '$nep_title', `nep_article` = '$nep_article', `publish` = '$publish' WHERE `news`.`newsId` = $newsId";
    mysqli_query ($con,"set character_set_client='utf8'"); 
 mysqli_query ($con,"set character_set_results='utf8'"); 

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
              <h4 class="card-title">Add Deposit Sub-Category</h4>
            </div>
            <div class="card-body">
              <form action="editnews.php?newsId=<?php echo $newsId;?>" method="post" enctype="multipart/form-data">
                
                <div class="form-group">
                    <label for="">Category</label>
                    <input type="text" class="form-control" name="news_title" value="<?php echo $row['news_title'];?>" required>
                </div>
                <div class="form-group">
                    <label for="">Nepali Category</label>
                    <input type="text" class="form-control" name="nep_title" value="<?php echo $row['nep_title'];?>" required>
                </div>
                <div class="form-group">
                  <label for="">Description</label>
                      <textarea class="form-control" name="news_article" rows="5" id="myeditor"><?php echo $row['news_article']; ?></textarea>          
                       </textarea>
                       <script>
                       CKEDITOR.replace('myeditor');
                       </script>
                  
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                        <textarea class="form-control" name="nep_article" rows="5" id="myeditor"><?php echo $row['nep_article']; ?></textarea>          
                         </textarea>
                         <script>
                         CKEDITOR.replace('myeditor');
                         </script>
                    
                  </div>

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
