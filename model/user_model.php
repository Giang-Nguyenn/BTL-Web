<?php 
   include("DbConfig.php");
  class User_Data extends Database{
  	//danh sách tất cả sản phẩm màn hình home
    public function product_all(){
      $sql="SELECT product.id,product.name,price,user.name as username,user.address,product.image1 FROM product,user WHERE product.id_user=user.id and product.status='1'";
      $this->result=$this->conn->query($sql);
      return $this->result;

    }
    //danh sách sản phẩm theo tìm kiếm
    public function seach($type){
      $sql="SELECT product.id,product.name,price,user.name as username,user.address,product.image1 FROM product,user WHERE product.id_user=user.id and product.id_producttype='$type' and product.status='1'";
      $this->result=$this->conn->query($sql);
      return $this->result;

    }
    //thông tin chi tiết sản phẩm
    public function view_product($id){
      $sql="SELECT product.id, product.name,product.image1,product.image2,product.image3,product.image4,price,product.describe,user.name as username,user.phone,user.image,user.id as userid FROM product,user WHERE product.id=$id and product.id_user=user.id";
      $this->result=$this->conn->query($sql);
      return $this->result;

    }
    //lấy comment
    public function get_comment($id){
      $sql="SELECT user.id,user.name,user.image,comment.comment,comment.time FROM `comment`,`user` WHERE comment.idcommentator=user.id and comment.idproduct='$id' ORDER BY time DESC ";
      $this->result=$this->conn->query($sql);
      return $this->result;

    }
    //lấy thông tin của một user
    public function user_profile($user_id){
      $sql="SELECT name,address,phone,image,time FROM `user` WHERE id='$user_id'";
      $this->result=$this->conn->query($sql);
      return $this->result;

    }
    //danh sách sản phẩm của user
    public function product_user($user_id){
      $sql="SELECT product.id,price,image1,product.name,product.status,user.name as username,user.address FROM `product`,`user` WHERE id_user='$user_id' and product.id_user=user.id";
      $this->result=$this->conn->query($sql);
      return $this->result;

    }
    //Đăng bán sản phẩm,lưu vào cơ sở dữ liệu
    public function sell($name,$type,$describe,$price,$userid,$image1,$image2,$image3,$image4){
      $sql="INSERT INTO `product` (`id`, `id_producttype`, `id_user`, `name`, `price`, `describe`, `image1`, `image2`, `image3`, `image4`, `image5`, `time`, `status`, `timeend`) VALUES (NULL, '$type', '$userid', '$name', '$price', '$describe', '$image1', '$image2', '$image3', '$image4', '$image4', current_timestamp(), '0', NULL)";
      if($this->conn->query($sql)) {$this->result="Thành công";}
      else{$this->result="Thất bại".$sql;}
      return $this->result;

    }
    //comment
    public function insert_comment($idproduct,$iduser,$comment){
      $sql="INSERT INTO `comment` (`idproduct`, `idcommentator`, `comment`, `time`) VALUES ('$idproduct', '$iduser', '$comment', current_timestamp())";
      if($this->conn->query($sql)) {$this->result="Thành công";}
      else{$this->result="Thất bại".$sql;}
      return $this->result;

    }
    //chuyển về kiểu money
    public function formatMoney($number, $fractional=false) {  
      if ($fractional) {  
          $number = sprintf('%.2f', $number);  
      }  
      while (true) {  
          $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);  
          if ($replaced != $number) {  
              $number = $replaced;  
          } else {  
              break;  
          }  
      }  
      return $number;  
  }

  }
 ?>