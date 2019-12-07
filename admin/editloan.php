<?php 
include "./db.php";
if (isset($_GET['loanId'])) {
  $newsId = $_GET['loanId'];
  $sel_result = mysqli_query($con,"SELECT * FROM loan WHERE id= $newsId");
  $row = mysqli_fetch_assoc($sel_result);
}



if (isset($_POST['submit'])) {
    if (isset($_GET['loanId'])) {
    $newsId = $_GET['loanId'];}
    else{
        echo "de";die();
    }
    $news_title= $_POST['news_title'];
    $news_article= $_POST['news_article'];
    $nep_title= $_POST['nep_title'];
    $nep_article= $_POST['nep_article'];
    $publish= $_POST['publish'];
  

    $query = "UPDATE `loan` SET `title` = '$news_title', `article` = '$news_article', `nep_title` = '$nep_title', `nep_article` = '$nep_article', `publish` = '$publish' WHERE `loan`.`id` = '$newsId'";


    if ($result=mysqli_query($con,$query)) {

         echo "<script>alert('updated!')</script>";
        echo "<script>window.open('loan.php','_self')</script>";

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
              <form action="editloan.php?loanId=<?php echo $newsId;?>" method="post" enctype="multipart/form-data">
                
                <div class="form-group">
                    <label for="">Category</label>
                    <input type="text" class="form-control" name="news_title" value="<?php echo $row['title'];?>" required>
                </div>
                <div class="form-group">
                    <label for="">Nepali Category</label>
                    <input type="text" class="form-control" name="nep_title" value="<?php echo $row['nep_title'];?>" required>
                </div>
                <div class="form-group">
                  <label for="">Description</label>
                      <textarea class="form-control" name="news_article" rows="5" id="myeditor"><?php echo $row['article']; ?></textarea>          
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
