<?php
include('./db.php');
session_start();
if(!empty($_POST["cat_title"])){
    $role = $_SESSION['role'];
   $province = $_SESSION['province'];
    $cat_title=$_POST['cat_title'];
    if($role =='editor' && $cat_title == '1'){

        echo '<option value="'.$province.'">Province '.$province.'</option>';
    }
    else{
        $query = "Select * from sub_category where category_id='$cat_title'";
        $result=mysqli_query($con,$query);
        $rowCount=mysqli_num_rows($result);
        if($rowCount > 1){
            echo '<option value="">Select Subcategory</option>';
            while($row = mysqli_fetch_array($result)){ 
                echo '<option value="'.$row['id'].'">'.$row['name_eng'].'</option>';
            }
        }else{
            echo '<option value="">Subcategory not available</option>';
        }
    }
}

?>