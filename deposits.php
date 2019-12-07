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
    <div class="container">
            <?php
                echo $news_article;
            }
    ?>

    </div>

<?php
include ('footer.php');
?>