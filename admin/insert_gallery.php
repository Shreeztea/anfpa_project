<?php 
include "./db.php";

if(isset($_POST['insert_gallery']))
{
	$g_title= $_POST['gallery_title'];
    
    $publish= $_POST['publish'];

    $main_image = $_FILES['main_image']['name'];
    $main_image_tmp = $_FILES['main_image']['tmp_name'];
    move_uploaded_file($main_image_tmp, "img/$main_image");

    $query=mysqli_query($con,"insert into gallery(gallery_title,main_image,publish) values('$g_title','$main_image','$publish')");  

        $g_image = $_FILES['g_image']['name'];
        $id=mysqli_insert_id($con);

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
          			echo "<script>window.open('gallery.php','_self')</script>";

    }
    else{
         echo "<script>alert('error')</script>";
        

    }

          }
     }

}

}



 ?>
