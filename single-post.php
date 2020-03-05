<?php
include('header.php');
include "admin/db.php";

if(isset($_GET['id'])){
	
		$id = $_GET['id'];
		$get_con = "SELECT * FROM content where id=".$id;

  		$run_con = mysqli_query($con, $get_con);
  		// echo $get_con;
        $row_count = mysqli_num_rows($run_con);
        // echo $row_count;
		if($row_count >= 1)
		{
			$row_con = mysqli_fetch_array($run_con)
?>
	<section class="page-content section-block">
		<div class="container">
			<div class="row section-content">
				<div class="col-md-12">
					<div class="main-content">
						<div class="blog-posts">
							<article class="single-post clearfix">
								<div class="image-block">
									<img class="img-responsive" src="admin/img/<?php echo $row_con['image'];?>" alt="article image">
								</div>
				
								<div class="post-content">
									<div class="content-wrapper">
										<h2 class="post-title"><?php echo $row_con['title_eng'];?></h2>
										<div class="content-data">
											<p>
												<?php echo $row_con['desc_eng'];?>
											</p>

										</div> <!-- .content-data ends -->
									</div> <!-- .content-wrapper ends -->
								</div> <!-- .post-content ends -->
							</article> <!-- .blogpost ends -->		
						</div><!-- .blog-posts ends -->
					</div> <!-- .main-content ends -->
				</div> <!-- .col-md-9 ends -->
			</div> <!-- .row ends -->
		</div> <!-- .container ends -->
	</section> <!-- .page-content ends -->

<?php
include('footer.php');
	?>
<?php }} ?>
	
</body>
</html>