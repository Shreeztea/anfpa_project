<?php 

include "admin/db.php";
	if(isset($_GET['id'])){
		$id = $_GET['id'];

		$query= mysqli_query($con,"SELECT * FROM gallery_images WHERE gallery_id=$id");
    }

	
include "header.php"; 
include "navbar.php";

 ?>
 <section>
    <div class="container">
       <h1 class="text-center pt-5">Gallery</h1>
       <hr class="w-25 mx-auto pt-5">
       <div class="row mb-4" >
        <?php while($row = mysqli_fetch_array($query)){ ?>
            <div class="col-lg-4 col-md-4 col-12 mb-4">
                <div class="card gallery" style="height:230px;width: 230px;">
                    <a href="admin/img/<?php echo $row['gallery_image']; ?>" data-lightbox="mygallery">
                        <img src="admin/img/<?php echo $row['gallery_image']; ?>" class="img-fluid card-img" style="height:230px;width: 230px;">
                    </a>
                    </div>
               
              </div>
            <?php } ?>
    </div>
    </div>
 </section>
<?php include ("footer.php"); ?>


   
      
