<?php
  include ('header.php');
  include ('navbar.php');
  
?>
<div class="container-fluid">
<div class="row">
	<article class="col-md-10 ml-5 my-3">
			<h1 class="text-center pt-5"><span class="eng">notice</span><span class="nep">सूचना</span></h1>
			<hr class="w-25 mx-auto pt-5">
		<p class="user-content" style="text-align: justify;">
			<span class="eng">
					<div class="card-columns">
						<?php
							$get_news = "SELECT * FROM notice order by id DESC";
							$run_news = mysqli_query($con, $get_news);
							while ($row_news=mysqli_fetch_array($run_news)) {
								$newsId= $row_news['id'];
								$news_title= $row_news['title'];
								$news_article= $row_news['article'];
								$nep_title= $row_news['nep_title'];
								$nep_article= $row_news['nep_article'];
								$doc= $row_news['doc'];
								$publish= $row_news['publish'];
							?>
							<div class="card bg-danger text-light">
							  <div class="card-body text-center">
									<h4 class="card-title"><span class="eng"><?php echo $news_title; ?></span><span class="nep"><?php echo $nep_title; ?></span></h4>
									<h5 class="card-text"><span class="eng"><?php echo $news_article; ?></span><span class="nep"><?php echo $nep_article; ?></span></h5>
									<a href="admin/img/<?php echo $doc; ?>" class="btn btn-outline-warning" target="_blank">See More</a>
							  </div>
							</div>
							<?php } ?>
							
					</div>
			</span>
		</p>
	</article>

	</div>
	</div>
		<?php
  include ('footer.php');
?>