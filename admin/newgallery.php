<?php include "header.php"; 
include "./db.php";



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
            <h4 class="card-title">New Gallery</h4>
          </div>
          <div class="card-body table-responsive">
            <!-- <form action="newproduct.php" method="post" enctype="multipart/form-data"> -->
              <form action="insert_gallery.php" method="post" enctype="multipart/form-data">
        
              <div class="form-group">
                <label for="">Gallery Title</label>
                <input type="text" class="form-control" name="gallery_title" required>
              </div>
              

              <!-- Select primary image -->
              <div id="main-image-button" class="btn btn-rose btn-file">
                <span class="fileinput-new">Select Main image</span>
                <input type="file" name="main_image" onchange="preview_image(this.files, 'imgid1')"/>
              </div>
              <div id="imgid1"></div>
              
              <div id="main-image-button" class="btn btn-rose btn-file">
                <span class="fileinput-new">Add More images</span>
                <input type="file" name="g_image[]" onchange="preview_image(this.files, 'imgid2')" multiple/>
              </div>
              <div id="imgid2"></div>

              <!-- <div class="row">
                <div class="col-sm-6">
                  <button class="btn btn-primary" id="file_add">Add New</button>
                  <button class="btn btn-primary" id="file_remove">Remove</button>
                </div>
              </div> -->

             <!-- <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose image</label>
              </div> -->
              <br><br>      




              <div class="form-group">
                <label for="">Publish?</label>
                <div class="form-check form-check-radio">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="publish" id="exampleRadios1" value="1" checked>
                      Publish
                    <span class="circle">
                      <span class="check"></span>
                    </span>
                  </label>
                </div>
                <div class="form-check form-check-radio">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="publish" id="exampleRadios2" value="0">
                    Do not publish
                    <span class="circle">
                      <span class="check"></span>
                    </span>
                  </label>
                </div>
                <br>
                <button type="submit" name="insert_gallery" class="btn btn-success">Save Changes</button>
                
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    </div>
    <!-- End of main-panel -->
  </div>
  <!-- End of wrapper -->
<?php include ("footer.php"); ?>
