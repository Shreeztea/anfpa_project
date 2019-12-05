<?php 
include "./db.php";
	if (isset($_GET['gid'])) {
		  $id = $_GET['gid'];
  $sel_result = mysqli_query($con,"SELECT * FROM gallery_images WHERE id=$id");
  $row = mysqli_fetch_assoc($sel_result);
}
  		if (isset($_POST['submit'])) {
  				$id = $_GET['gid'];
  				$gid = $row['gallery_id'];

  			  $new_image = $_FILES['new_image']['name'];
  			  $new_image_tmp = $_FILES['new_image']['tmp_name'];
			    move_uploaded_file($new_image_tmp, "img/$new_image");

			    

			    $query = mysqli_query($con,"UPDATE `gallery_images` SET `gallery_image` = '$new_image' WHERE `gallery_images`.`id` = $id");
			    if ($query) {
			    	echo "<script>window.open('images.php?id=$gid','_self')</script>";

			    }
			  		}		


include "header.php"; 			
				
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
      
        <a href="./gallery.php"><button class="btn btn-link"><i class="material-icons">arrow_back</i> Back to Gallery</button></a>
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title">Images</h4>
          </div>
          <div class="card-body table-responsive">

          	


  <form action="update_image.php?gid=<?php echo $id;?>" method="post" enctype="multipart/form-data">
                
               

               <div class="form-group">
                <label for="">Image</label><br>
                <img src="img/<?php echo $row['gallery_image']; ?>" width="400px" alt="">
              </div>

              <!-- Select primary image -->
              <div id="main-image-button" class="btn btn-rose btn-file">
                <span class="fileinput-new">Select image</span>
                <input type="file" name="new_image"  onchange="preview_image(this.files, 'imgid1')"/>
              </div>
              <div id="imgid1"></div>

              <button type="submit" name="submit" class="btn btn-success">Save Changes</button>

  <?php include ("footer.php"); ?>