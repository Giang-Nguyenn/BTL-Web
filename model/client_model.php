<!-- Các tương tác với Cơ sở dữ liệu của client -->
<?php 
  include("DbConfig.php");
   class Client_Data extends Database{

    //danh sách tất cả sản phẩm 
    public function product_all(){
      $sql="SELECT product.id,product.name,price,user.name as username,user.address,product.image1 FROM product,user WHERE product.id_user=user.id and product.status='1'";
      $this->result=$this->conn->query($sql);
      return $this->result;

    }
    //danh sách sản phẩm theo tìm kiếm
    public function seach($type){
      $sql="SELECT product.id,product.name,price,user.name as username,user.address,product.image1 FROM product,user WHERE product.id_user=user.id and product.id_producttype='$type'and product.status='1'";
      $this->result=$this->conn->query($sql);
      return $this->result;

    }
    //thông tin chi tiết sản phẩm
  	public function view_product($id){
      $sql="SELECT product.id, product.name,product.image1,product.image2,product.image3,product.image4,price,product.describe,user.name as username,user.phone,user.image,user.id as userid FROM product,user WHERE product.id=$id and product.id_user=user.id";
      $this->result=$this->conn->query($sql);
      return $this->result;

    }
    //lấy danh sách comment
    public function get_comment($id){
      $sql="SELECT user.id,user.name,user.image,comment.comment,comment.time FROM `comment`,`user` WHERE comment.idcommentator=user.id and comment.idproduct='$id' ORDER BY time DESC";
      $this->result=$this->conn->query($sql);
      return $this->result;
    }

    //danh sách sản phẩm của một tài khoản user
    public function product_user($user_id){
      $sql="SELECT product.id,price,image1,product.name,user.name as username,user.address FROM `product`,`user` WHERE id_user='$user_id' and product.id_user=user.id and product.status='1'";
      $this->result=$this->conn->query($sql);
      return $this->result;

    }
    //Login user
    public function login($loginuser,$loginpassword){
      $sql="SELECT id,name,image FROM `user` WHERE username='$loginuser' and password='$loginpassword'";
      $this->result=$this->conn->query($sql);
      return $this->result;

    }
    //Login admin
    public function loginadmin($loginuser,$loginpassword){
      $sql="SELECT id,name,image FROM `admin` WHERE username='$loginuser' and password='$loginpassword'";
      $this->result=$this->conn->query($sql);
      return $this->result;

    }
    //đăng kí
    public function signup($name,$phone,$address,$username,$password,$image){
      $sql="INSERT INTO `user` (`id`, `name`, `address`, `phone`, `image`, `username`, `password`, `time`) VALUES (NULL, '$name', '$address', '$phone', '$image', '$username', '$password', current_timestamp())";
      if($this->conn->query($sql)) {$this->result="Thành công";}
      else{$this->result="Thất bại".$sql;}
      return $this->result;
    }
    //cái này hơi thừa
    public function get_userid($username){
      $sql="SELECT id FROM `user` WHERE user.username='$username'";
      $this->result=$this->conn->query($sql);
      return $this->result;

    }
    //lấy thông tin của một user 
    public function user_profile($user_id){
      $sql="SELECT name,address,phone,image,time FROM `user` WHERE id='$user_id'";
      $this->result=$this->conn->query($sql);
      return $this->result;

    }


  }
 ?>