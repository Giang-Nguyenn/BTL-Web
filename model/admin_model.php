<?php 
  include("DbConfig.php");
  class Admin_Data extends Database{

  	//danh sách tất cả sản phẩm màn hình home
    public function product_all(){
      $sql="SELECT product.id,product.name,price,user.name as username,user.address,product.image1 FROM product,user WHERE product.id_user=user.id and product.status='1'";
      $this->result=$this->conn->query($sql);
      return $this->result;

    }
    //thông tin  chi tiết của sản phẩm
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
    //danh sách sản phẩm của người bán
    public function product_user($user_id){
      $sql="SELECT product.id,price,image1,product.name,user.name as username,user.address FROM `product`,`user` WHERE id_user='$user_id' and product.id_user=user.id";
      $this->result=$this->conn->query($sql);
      return $this->result;

    }
    //comment
    public function insert_comment($idproduct,$iduser,$comment){
      $sql="INSERT INTO `comment` (`idproduct`, `idcommentator`, `comment`, `time`) VALUES ('$idproduct', '$iduser', '$comment', current_timestamp())";
      if($this->conn->query($sql)) {$this->result="Thành công";}
      else{$this->result="Thất bại".$sql;}
      return $this->result;

    }
    //lấy danh sách user
    public function list_user(){
      $sql="SELECT user.id,user.name as username,user.address,user.phone,COUNT(product.id_user) as count  FROM `user`,`product` WHERE user.id=product.id_user GROUP BY id_user";
      $this->result=$this->conn->query($sql);
      return $this->result;

    }
    //lấy thông tin của user
    public function user_profile($user_id){
      $sql="SELECT name,address,phone,image,time FROM `user` WHERE id='$user_id'";
      $this->result=$this->conn->query($sql);
      return $this->result;

    }
    //danh sách các sản phẩm chờ xét duyệt
    public function product_licensing(){
      $sql="SELECT user.id as userid,user.name as username,product_type.name as type,product.name as productname,product.describe,product.id as productid FROM `user`,`product`,`product_type` WHERE product.id_user=user.id AND product.id_producttype=product_type.id AND product.status='0'";
      $this->result=$this->conn->query($sql);
      return $this->result;

    }
    //thay đổi trạng trái sản phẩm 
    public function update_status($productid,$status){
      $sql="UPDATE `product` SET `status` = '$status' WHERE `product`.`id` = '$productid'";
      if($this->conn->query($sql)) {$this->result="Thành công";}
      else{$this->result="Thất bại".$sql;}
      return $this->result;

    }



  }
 ?>