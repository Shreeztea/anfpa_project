<?php
  include ('header.php');
  include ('navbar.php');
  include "admin/db.php";
?>
<section>
 <div class="container">
    <h1 class="text-center pt-5">Gallery</h1>
    <hr class="w-25 mx-auto pt-5">

    
<div class="row text-center mb-5">
  <?php
    $get_g = "SELECT * FROM gallery order by gallery_id DESC";
            $run_g = mysqli_query($con, $get_g);
            while ($row_g=mysqli_fetch_array($run_g)) {
                $gId= $row_g['gallery_id'];
                $gallery_title= $row_g['gallery_title'];
                $main_image= $row_g['main_image'];
                $publish= $row_g['publish'];
                if($publish =='1'){
                ?>

  <div class="col-lg-4 col-md-4 col-12-12 mb-2">
        <div class="card" style="width:230px;height:350px;">
          <img class="card-img-top" src="admin/img/<?php echo $main_image;?>" alt="Card image">
          <div class="card-body">
            <h5 class="card-title"><?php echo $gallery_title; ?></h4>
            <a href="images.php?id=<?php echo $gId; ?>" class="btn btn-outline-success btn-sm">View all</a>
          </div>
        </div>
  </div> 
  <?php   }} ?>
</div>

</div>
</section>

<?php
  include ('footer.php');
?>