<?php
  include ('header.php');
  include ('navbar.php');
?>


<?php 
if (isset($_GET['id'])) {
    $newsId = $_GET['id'];
    $sel_result = mysqli_query($con,"SELECT * FROM news WHERE newsId= $newsId");
    $row_news = mysqli_fetch_assoc($sel_result);
 
    $newsId= $row_news['newsId'];
    $news_title= $row_news['news_title']; 
    $nep_title= $row_news['nep_title'];
    $news_article= $row_news['news_article']; 
    $nep_article= $row_news['nep_article'];?>
    <div class="container mb-3">
                <h2 class="text-center pt-3"><span class="eng"><?php echo $news_title; ?></span>
                <span class="nep"><?php echo $nep_title; ?></span></h2>
                        <hr class="w-25 mx-auto pt-3">
            <span class="text-center"><span class="eng"><?php echo $news_article; ?></span></span>
            <span class="text-center"><span class="nep"><?php echo $nep_article; ?></span></span>
                
                <?php } ?>
    
        </div>

<?php
include ('footer.php');
?>