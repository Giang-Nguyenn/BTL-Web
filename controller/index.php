<?php 
//Controller điều khiển
 if(isset($_SESSION['status'])){
 	//status=1 đã đăng nhập user
 	if($_SESSION['status']=='1'){
 		require_once("user_controller.php");
 	}
 	//status=2 đã đăng nhập admin
 	if($_SESSION['status']=='2'){
 		require_once('admin_controller.php');
 	}
 	//status=0 đã thoát đăng nhập
 	if($_SESSION['status']=='0'){
 		require_once('client_controller.php');
 	}
 }
 // người xem 
 else{
 	require_once("client_controller.php");
 } 	
 ?>
