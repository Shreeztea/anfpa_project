<?php
include('header.php');
include "admin/db.php";

if(isset($_GET['cat'])){
	if(isset($_GET['sub'])){
		$catId = $_GET['cat'];
		$subId = $_GET['sub'];
		$get_con = "SELECT * FROM content where category=".$catId." AND sub_category=".$subId;

      
	}else{
		$catId = $_GET['cat'];
		$get_con = "SELECT * FROM content where category=".$catId;
	}

  		$run_con = mysqli_query($con, $get_con);
  		// echo $get_con;
        $row_count = mysqli_num_rows($run_con);
        // echo $row_count;
		if($row_count >= 1)
		{


// }
    //}
?>
	<section class="page-content section-block">
		<div class="container">
			<div class="row section-content">
				<div class="col-md-12">
					<div class="main-content">
						<div class="blog-posts">
							<?php while ($row_con = mysqli_fetch_array($run_con)) {?>
							<article class="blogpost clearfix">
								<div class="image-block">
									<img class="img-responsive" src="admin/img/<?php echo $row_con['image'];?>" alt="article image">
								</div>
				
								<div class="post-content">
									<div class="content-wrapper">
										<h2 class="post-title"><a href="#"><?php echo $row_con['title_eng'];?></a></h2>
										<p class="excerpt">
											<?php 

											$string = strip_tags($row_con['desc_eng']);
											$yourText = $row_con['desc_eng'];
											if (strlen($string) > 350) {
											    $stringCut = substr($string, 0, 350);
											    
											}
											 echo $stringCut;
											?>
										</p>
										<a class="read-more-link" href="single-post.php?id=<?php echo $row_con['id'];?>">Continue Reading</a>
									</div> <!-- .content-wrapper ends -->
								</div> <!-- .post-content ends -->
							</article> <!-- .blogpost ends -->
						<?php } ?>
						</div> <!-- .blog-posts ends -->
						<!-- <div class="content-footer pagination-block">
							<ul>
								<li><a href="#"><i class="icon ion-ios-arrow-back"></i></a></li>
								<li><a href="#">1</a></li>
								<li class="active"><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#"><i class="icon ion-ios-arrow-forward"></i></a></li>
							</ul>
						</div>  --><!-- .content-footer ends -->
					</div> <!-- .main-content ends -->
				</div> <!-- .col-md-9 ends -->
			</div> <!-- .row ends -->
		</div> <!-- .container ends -->
	</section> <!-- .page-content ends -->
<?php }} ?>
<?php
include('footer.php');
?>	
</body>
</html>