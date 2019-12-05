<?php 

include "./db.php";
	if(isset($_GET['id'])){
		$id = $_GET['id'];

		$query= mysqli_query($con,"SELECT * FROM gallery_images WHERE gallery_id=$id");
		
			

	

	if (isset($_POST['submit'])) {
		 $g_image = $_FILES['g_image']['name'];
		 $id = $_GET['id'];
         //$id=mysqli_insert_id($con);

         for($i=0;$i<count($g_image);$i++)
    	 {
	     	$g_image_tmp = $_FILES['g_image']['tmp_name'][$i];
	      	if($g_image[$i]!="")
	      {
      		$newFilePath = "./img/" . $_FILES['g_image']['name'][$i];
          if(move_uploaded_file($g_image_tmp, $newFilePath)) {
   $query_gallery =mysqli_query($con,"insert into gallery_images(gallery_id,gallery_image) values('$id','$g_image[$i]')");  
          	if($query_gallery){
          		   echo "<script>alert('gallery has been inserted!')</script>";
          			echo "<script>window.open('images.php?id=$id','_self')</script>";
          	}
    
    		else{
              echo "<script>alert('error')</script>";
            }
		  }
         }
		}
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

          	<?php while($row = mysqli_fetch_array($query)){ ?>

          		<img src="img/<?php echo $row['gallery_image']; ?>" width="200px">
			<a href="update_image.php?gid=<?php echo $row['id']; ?>">edit</a>
            <a href="delete.php?gallery_id=<?php echo $row['id']; ?>&glid=<?php echo $row['gallery_id']; ?>">delete</a> 

			<?php

		}?>


<form action="images.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
 <div id="main-image-button" class="btn btn-rose btn-file">
                <span class="fileinput-new">Add More images</span>
                <input type="file" name="g_image[]" onchange="preview_image(this.files, 'imgid2')" multiple/>
              </div>
              <div id="imgid2"></div>
 <button type="submit" name="submit" class="btn btn-success">Save Changes</button>
</form>

<?php include ("footer.php"); ?>