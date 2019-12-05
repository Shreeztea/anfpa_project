<?php include "header.php"; 
include "./db.php";
?>

<body class="">
  <div class="wrapper">

<?php include "sidebar.php"; ?>    

    <div class="main-panel">

<!-- Navbar -->
<?php include "navbar.php"; ?>
    <div class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title">Products</h4>
          </div>
          <div class="card-body">
            <a href="newgallery.php">
              <button class="btn btn-primary"><i class="material-icons">add</i> Add New</button>
            </a>
           
            <br><br>
            <!--for pagination-->
             <table class="table table-striped table-bordered" style="padding: 20px 20px">
              <thead class="text-primary">
                <th>S. No.</th>
                <th>Gallery Name</th>
                <th>Main Image</th>                
                <th>Images</th>
                <th>Publish Status</th>
                <th>Actions</th>
              </thead>
              <?php
                $no_of_records_per_page = 9;
                $total_pages_sql = "SELECT * FROM news";
                $result = mysqli_query($con,$total_pages_sql);
                $total_rows = mysqli_num_rows($result);
                $total_pages = ceil($total_rows / $no_of_records_per_page);
                // echo $total_rows;
                if(!isset($_GET['page'])){
                $page="1";
                $offset    = 0;
                }else{
                $page=$_GET['page'];
                $offset    = ($page - 1) * $no_of_records_per_page;
                }
                  $no = '1';
                  $get_g = "SELECT * FROM gallery order by gallery_id DESC LIMIT $offset, $no_of_records_per_page";
                          $run_g = mysqli_query($con, $get_g);
                          while ($row_g=mysqli_fetch_array($run_g)) {
                              $gId= $row_g['gallery_id'];
                              $gallery_title= $row_g['gallery_title'];
                              $main_image= $row_g['main_image'];
                              $publish= $row_g['publish'];
                              
                              ?>
  
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $gallery_title; ?></td>
                  
                  
                   <td>
                   
                    <img src="img/<?php echo $main_image;?>" width="60" height="60"/>
                    
                  </td> 

                  <td><a href="images.php?id=<?php echo $gId; ?>">View Images</a></td>
                  
                  <?php if($publish =='1')
                  {?>
                  <td>Publish</td>
                  <?php
                } else { ?>
                    <td>Unpublish </td>
                  <?php } ?>
                  <td>
                  <a href="editgallery.php?gId=<?php echo $gId;?>"><button class="btn btn-sm btn-info"><i class="material-icons">edit</i></button></a>
                   <a href="delete.php?gId=<?php echo $gId;?>" <button class="btn btn-sm btn-danger" name="delete_news"><i class="material-icons">delete</i></button>
                  </td>
                </tr>
          <?php   } ?>
                
              </tbody>
             
            </table>
             <nav>
               <ul class='pagination justify-content-center' >
                <?php
                 $c="active";
                  for($i=1;$i<=$total_pages;$i++){
                    if($page==$i)
                  {
                      $c="active";
                  }
                  else
                  {
                      $c="";
                  }
               
                echo "<li class='page-item num $c' data-id=$i><a class='page-link' href='gallery.php?page=$i'>$i</a></li>";
               }
               ?>
               </ul>
            </nav>
            
            
          
          </div>
        </div>
      </div>
    </div>

    </div>
    <!-- End of main-panel -->
  </div>
  <!-- End of wrapper -->

<?php include 'footer.php'; ?>
