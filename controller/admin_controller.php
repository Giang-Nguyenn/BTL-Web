<!-- Điều khiển các yêu cầu của admin -->
<?php 
include("model/admin_model.php");
$db=new Admin_Data();
$db->connect();
//Kiểm tra có action gửi không
if(isset($_GET['action'])){
	$action=$_GET['action'];
}
else{
	$action='';
}
switch ($action) {
	//Xem chi tiết sản phẩm
    case 'view-product':{
		if(isset($_GET['id'])){
			$id=$_GET['id'];
			$data=$db->view_product($id);
			while($row= mysqli_fetch_assoc($data)){
				$name=$row['name'];
				$image1=$row['image1'];
				$image2=$row['image2'];
				$image3=$row['image3'];
				$image4=$row['image4'];
				#$image5=$row['image5'];
				$price=$row['price'];
				$describe=$row['describe'];
				$username=$row['username'];
				$phone=$row['phone'];
				$image=$row['image'];
				$userid=$row['userid'];
			};
			//lấy list comment
			$data1=$db->get_comment($id);
			$_SESSION['idproduct']=$id;
			require_once("view/Html/admin/admin-view_product.php");
		    break;
		}
    }
    //cấp quyền cho sản phẩm
    case 'licensing':{
    	$productid=$_GET['productid'];
    	$status=$_GET['status'];
    	if($status=='1'){
             $data=$db->update_status($productid,$status);
    	}
    	if($status=='-1'){
            $data=$db->update_status($productid,$status);
    	}
    	$data=$db->product_licensing();
		require_once("View/Html/admin/admin-manager.php");
    	break;
		
    }
    //logout
	case 'logout':{
		$_SESSION['status']='0';
		# code...
		$data=$db->product_all();
		header('Location:http://localhost/BTL-Web/');
		break;
	}
	//xem trang tài khoản của người dùng
	case 'taikhoanuser':{
		// $id=$_SESSION['user_id'];
		if(isset($_GET['userid'])){
			$id=$_GET['userid'];
			$data=$db->product_user($id);
			$data1=$db->user_profile($id);
			require_once("View/Html/admin/admin-view_user.php");
		}
		else{
			$data=$db->product_all();
			require_once("view/Html/admin/home_admin.php");
		}
		break;
	}
	//quản lý
	case 'manager':{
		$data=$db->product_licensing();
		require_once("View/Html/admin/admin-manager.php");
		break;
	}
	//giao diện trang home 
	case 'home-admin':{
		$data=$db->product_all();
		require_once("view/Html/admin/home_admin.php");
		break;
	}
	//vào trang quản lý user
	case 'manager-user':{
		$data=$db->list_user();
		require_once("View/Html/admin/manager-user.php");
		break;
	}
	//chưa
	case 'ads':{
		require_once("View/Html/admin/admin-manager.php");
		break;
	}
	//chưa
	case 'all':{
		require_once("View/Html/admin/admin-manager.php");
		break;
	}

	
	//mặc định khi không có action gửi->ra trang home
	default:
	        $data=$db->product_all();
			require_once("view/Html/admin/home_admin.php");
			break;
}
 ?>
