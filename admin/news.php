<?php include "header.php"; 
include "./db.php";
?>
<style type="text/css">
  p{
  line-height:1.2em;
  height:3.6em;
  overflow:hidden;
}
table { 
  
   table-layout: fixed;
  width: 100%;
  /*white-space: nowrap;*/
}
/*  td{
  white-space: nowrap;
  overflow: hidden;
  width: 20px;
  text-overflow: ellipsis;
}*/



</style>
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
            <h4 class="card-title">Contents</h4>
          </div>
          <div class="card-body">
            <a href="newnews.php">
              <button class="btn btn-primary"><i class="material-icons">add</i> Add Content</button>
            </a>
           
            <br><br>
            <!--for pagination-->
             <table class="table table-striped table-bordered" style="padding: 20px 20px">
              <thead class="text-primary">
                <th>S. No.</th>
                <th>title</th>
                <th>शीर्षक</th>
                <th>Description</th>
                <th>वर्णन</th>
                <th>Image</th>
                <th>Home page</th>
                <th>Actions</th>
              </thead>


              <tbody>
              <?php
                $no_of_records_per_page = 9;
                $total_pages_sql = "SELECT * FROM content";
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
                  $get_content = "SELECT * FROM content order by id DESC LIMIT $offset, $no_of_records_per_page";
                          $run_content = mysqli_query($con, $get_content);
                          while ($row_content=mysqli_fetch_array($run_content)) {
                              $id= $row_content['id'];
                              $title= $row_content['title_eng'];
                              $content_title= $row_content['title_nep'];
                              $article= $row_content['desc_eng'];
                              $content_article= $row_content['desc_nep'];
                             
                              $publish= $row_content['home_publish'];
                              $image= $row_content['image'];
                              ?>
  
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $title; ?></td>
                  <td><?php echo $content_title; ?></td>
                  <td><?php echo $article; ?></td>
                  <td><?php echo $content_article; ?></td>
                  
                  
                  <td>
                   
                    <img src="img/<?php echo $image;?>" width="60" height="60"/>
                    
                  </td> 
                  
                  <?php if($publish =='1')
                  {?>
                  <td>Publish</td>
                  <?php
                } else { ?>
                    <td>Unpublish </td>
                  <?php } ?>
                  <td>
                  <a href="editnews.php?newsId=<?php echo $id;?>"><button class="btn btn-sm btn-info"><i class="material-icons">edit</i></button></a>
                   <a href="delete.php?newsId=<?php echo $id;?>" <button class="btn btn-sm btn-danger" name="delete_news"><i class="material-icons">delete</i></button>
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
               
                echo "<li class='page-item num $c' data-id=$i><a class='page-link' href='news.php?page=$i'>$i</a></li>";
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
