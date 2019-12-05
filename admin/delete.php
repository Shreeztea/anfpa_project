<?php
include "./db.php";

if(isset($_GET['newsId'])){



	$id = $_GET['newsId'];
	$DelSql = "DELETE FROM `news` WHERE newsId=$id";
	$res = mysqli_query($con, $DelSql);
	if($res){
		 echo "<script>alert('News Deleted successfully')</script>";
          echo "<script>window.open('news.php','_self')</script>";
	}else{
		echo "<script>alert('error deleting')</script>";
	}
}

if(isset($_GET['gId'])){



	$id = $_GET['gId'];
	$DelSql = "DELETE FROM `gallery` WHERE gallery_id=$id";
	$res = mysqli_query($con, $DelSql);
	$Del = "DELETE FROM `gallery_images` WHERE gallery_id=$id";
	$r = mysqli_query($con, $Del);

	if($r){
		 echo "<script>alert('Gallery Deleted successfully')</script>";
          echo "<script>window.open('gallery.php','_self')</script>";
	}else{
		echo "<script>alert('error deleting')</script>";
	}
}

if(isset($_GET['cid'])){



	$id = $_GET['cid'];
	$DelSql = "DELETE FROM `member_info` WHERE id=$id";
	$res = mysqli_query($con, $DelSql);
	

	if($res){
		 echo "<script>alert('Member Deleted successfully')</script>";
          echo "<script>window.open('communities.php','_self')</script>";
	}else{
		echo "<script>alert('error deleting')</script>";
	}
}

if(isset($_GET['gallery_id'])){



	$id = $_GET['gallery_id'];
	$glid = $_GET['glid'];
	
	$Del = "DELETE FROM `gallery_images` WHERE id=$id";
	$r = mysqli_query($con, $Del);

	if($r){
		 echo "<script>alert('Image Deleted successfully')</script>";
          echo "<script>window.open('images.php?id=$glid','_self')</script>";
	}else{
		echo "<script>alert('error deleting')</script>";
	}
}

?>