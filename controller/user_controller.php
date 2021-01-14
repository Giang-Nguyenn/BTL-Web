<!-- Điều khiển các yêu cầu của user(người đã đăng nhập) -->
<?php 
include("model/user_model.php");
$db=new User_Data();
$db->connect();
//Kiểm tra có action gửi không
if(isset($_GET['action'])){
	$action=$_GET['action'];
}
else{
	$action='';
}

switch ($action) {
	//trang home
	case 'home':{
		$data=$db->product_all();
		require_once("view/Html/user/home_user.php");
		break;
	}
	//tìm kiếm sản phẩm
	case 'seach':{
		$type=$_GET['type'];
		$data=$db->seach($type);
		require_once("view/Html/user/home_user.php");
		break;
	}
	//tìm kiếm sản phẩm trong trang cá nhân của mình
	case 'seach1':{
		$id=$_SESSION['user_id'];
		$type=$_GET['type'];
		$data=$db->seach($type);
		$data1=$db->user_profile($id);
		require_once("view/Html/user/home_user_account.php");
		break;
	}
	//Xem chi tiết sản phẩm
    case 'view_product':{
    	// echo "user_view_product";
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
			$data1=$db->get_comment($id);
			$_SESSION['idproduct']=$id;
			require_once("view/Html/user/user_view_product.php");
		    break;
		}
	}
	//comment 
	case 'insert_comment':{
		$idproduct=$_GET['id'];
		$iduser=$_SESSION['user_id'];
		$comment=$_POST['comment_text'];
		$db->insert_comment($idproduct,$iduser,$comment);
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
			$data1=$db->get_comment($id);
			$_SESSION['idproduct']=$id;
			require_once("view/Html/user/user_view_product.php");
		    break;
		}
	}
	//logout
	case 'logout':{
		$_SESSION['status']='0';
		# code...
		$data=$db->product_all();
		header('Location:http://localhost/BTL-Web/');
		break;
	}
	//vào trang bán sản phẩm
	case 'sell-product':{
		require_once("View/Html/user/user-sell_product.php");
		break;
	}
	//bán sản phẩm lưu vào Database
	case 'sell':{
		$name=$_POST['name'];
		$describe=$_POST['describe'];
		$type=$_POST['type'];
		$price=$db->formatMoney($_POST['price']);
		$time = time();
		$image1=$time.$_FILES['anh1']['name'];
		$image2=$time.$_FILES['anh2']['name'];
		$image3=$time.$_FILES['anh3']['name'];
		$image4=$time.$_FILES['anh4']['name'];
		$userid=$_SESSION['user_id'];
		 $a=move_uploaded_file($_FILES['anh1']['tmp_name'], './Images/image_product/'.$image1);
		 $a=move_uploaded_file($_FILES['anh2']['tmp_name'], './Images/image_product/'.$image2);
		 $a=move_uploaded_file($_FILES['anh3']['tmp_name'], './Images/image_product/'.$image3);
		 $a=move_uploaded_file($_FILES['anh4']['tmp_name'], './Images/image_product/'.$image4);
		$data=$db->sell($name,$type,$describe,$price,$userid,$image1,$image2,$image3,$image4);
		require_once("View/Html/user/user-sell_product.php");
		break;
	}
	//xem trang cá nhân của mình
	case 'account':{
		$id=$_SESSION['user_id'];
		$data=$db->product_user($id);//danh sách sản phẩm
		$data1=$db->user_profile($id);//thông tin account
		require_once("View/Html/user/home_user_account.php");
		break;
	}
	//xem trang tài khoản của người dùng khác
	case 'taikhoanuser':{
		// $id=$_SESSION['user_id'];
		if(isset($_GET['userid'])){
			$id=$_GET['userid'];
			$data=$db->product_user($id);
			$data1=$db->user_profile($id);
		}
		require_once("View/Html/user/user-view_user.php");
		break;
	}
	
	//mặc định khi không có action gửi->ra trang home
	default: 
		$data=$db->product_all();
		require_once("view/Html/user/home_user.php");
		break;
}
 ?>
