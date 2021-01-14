<?php
/**
  * Tương tác với cơ sở dữ liệu
  */
  class Database {
 	protected $hostname='localhost';
 	protected $username='root';
 	protected $pass='';
 	protected $dbname='btn_cnweb';
 	protected $conn=Null;
 	protected $result=NULL;
   //kết nối đến cơ sở dữ liệu
   public function connect(){
        $this->conn= new mysqli($this->hostname,$this->username,$this->pass,$this->dbname);
        if(!$this->conn){
           echo "loi ket noi";
           exit();
        }
        else{
        	mysqli_set_charset($this->conn,'utf8');
        }
        return $this->conn;
    }
   } 

 ?>