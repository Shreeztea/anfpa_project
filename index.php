
<?php
  include ('header.php');
  include ('navbar.php');
?>
<SECTION>
  <div class="container-fluid bg-dark">
    
    <div class="row">
      <div class="col-lg-10 col-md-10 col-10 mx-auto my-5">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/laptop2.jpg" class="d-block w-100 img-thumbnail img-fluid" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/laptop1.jpg" class="d-block w-100 img-thumbnail img-fluid" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/note.jpg" class="d-block w-100 img-thumbnail img-fluid" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div> 
          </div>   
      </div>

    </div>
</SECTION>
</header>

<?php
  include ('footer.php');
?>


 