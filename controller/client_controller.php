<!-- Điều khiển các yêu cầu của client(người chưa có tài khoản) -->
<?php 
include("./model/client_model.php");
$db=new Client_Data();
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
		require_once("view/Html/client/home.php");
		break;
	}
	//tìm kiếm sản phẩm
	case 'seach':{
		$type=$_GET['type'];
		$data=$db->seach($type);
		require_once("view/Html/client/home.php");
		break;
	}
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
			$data1=$db->get_comment($id);
			$_SESSION['idproduct']=$id;
			require_once("view/Html/client/view-product.php");
		    break;
		}
    
    }
    //xem trang tài khoản của người bán
	case 'taikhoanuser':{
		// $id=$_SESSION['user_id'];
		if(isset($_GET['userid'])){
			$id=$_GET['userid'];
			$data=$db->product_user($id);
			$data1=$db->user_profile($id);
			require_once("View/Html/client/client_viewuser.php");
			break;
		}
		else{
			require_once("View/Html/client/home.php");
		}
		
	}
	//login
	case 'login':{
		$loginuser=$_POST['username'];
		$loginpassword=$_POST['password'];
		//nếu là admin
		if(isset($_POST['admin'])){
			$data=$db->loginadmin($loginuser,$loginpassword);
			if(mysqli_num_rows($data) > 0){
				while($row= mysqli_fetch_assoc($data)){
					$_SESSION['admin_id']=$row['id'];
					$_SESSION['admin_name']=$row['name'];
					$_SESSION['admin_image']=$row['image'];
				};
				$_SESSION['status']='2';
				$data=$db->product_all();
				require_once("view/Html/admin/home_admin.php");
    //         	$data=$db->product_all();
				// require_once("view/Html/admin/home_admin.php");
				break;
            }
            else{
            	$data=$db->product_all();
				require_once("view/Html/client/home.php");
				break;
		    }
		}
		//không phải admin
		else{
			$data=$db->login($loginuser,$loginpassword);
            if(mysqli_num_rows($data) > 0){
  
				while($row= mysqli_fetch_assoc($data)){
					$_SESSION['user_id']=$row['id'];
					$_SESSION['user_name']=$row['name'];
					$_SESSION['user_image']=$row['image'];
					$_SESSION['status']='1';
	  
				};
				$data=$db->product_all();
				require_once("view/Html/user/home_user.php");
            }
            else{
            	$data=$db->product_all();
				require_once("view/Html/client/home.php");
				break;
		    }
		}

		break;
	}
	//signup
	case 'signup':{
		$name=$_POST['name'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$phone=$_POST['phone'];
		$address=$_POST['address'];
		$image=time().$_FILES['image']['name'];
        $data=$db->signup($name,$phone,$address,$username,$password,$image);
        move_uploaded_file($_FILES['image']['tmp_name'], './Images/image_er/'.$image);
        $_SESSION['status']='1';
        $_SESSION['user_name']=$name;
        $data1=$db->get_userid($username);
        while($row= mysqli_fetch_assoc($data1)){
					$_SESSION['user_id']=$row['id'];
	  
		};
        $data=$db->product_all();
        require_once("view/Html/user/home_user.php");
		break;
	}
    //mặc định ra trang home
	default:
	        $data=$db->product_all();
			require_once("view/Html/client/home.php");
			break;
}
 ?>
