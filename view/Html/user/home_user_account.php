<!-- user xem trang cá nhân của mình -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./View/Css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <title>home user account</title>
</head>
<body class="bg-light">
    <!-- <h1>Hello, World!</h1> -->
    <?php include"user_header.php" ?>
    <?php 
      $stt=1;
      while($row= mysqli_fetch_assoc($data1) and $stt<=1){
          ?>
          <div class="container user_profile">
              <h3 style="text-align: center;">Thông tin cá nhân</h3>
              <div class="row">
                  <div class="col-sm-4">
                      <img src="./Images/image_er/<?php echo $row['image'] ?>">
                  </div>
                  <div class="col-sm-4 information1">
                      <h4><?php echo $row['name'] ?></h4>
                      <p><b>Địa chỉ :</b><?php echo $row['address'] ?></p>
                      <p><b>Số điện thoại :</b><?php echo $row['phone'] ?></p>
                      <p><b>Ngày tạo :</b><?php echo $row['time'] ?></p>
                  </div>
              </div>
          </div>
        <?php 
        $stt++;
      }
    ?>

    <div class="container" style="font-size: 20px;">
        <div class="container bg-color text-white" style="margin-top: 10px;">
        <div class="row-sm-12" style="margin:30px auto;">
            <div class="col-sm-8">
                <div class="btn-group">
                    <div class="dropdown">
                        <button type="button" class="btn dropdown-toggle " style="font-size: 12px;margin-top: 4px;" data-toggle="dropdown">Danh mục sản phẩm</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="?action=account">Tất cả </a>
                            <a class="dropdown-item" href="?action=seach1&type=1">Điện thoại </a>
                            <a class="dropdown-item" href="?action=seach1&type=2">Máy tính</a>
                            <a class="dropdown-item" href="?action=seach1&type=3">Tivi</a>
                            <a class="dropdown-item" href="?action=seach1&type=4">Tủ lạnh</a>
                            <a class="dropdown-item" href="?action=seach1&type=5">Nhà bếp</a>
                            <a class="dropdown-item" href="?action=seach1&type=6">Xe</a>
                            <a class="dropdown-item" href="?action=seach1&type=7">Đồng hồ</a>
                            <a class="dropdown-item" href="?action=seach1&type=8">Quần áo</a>
                            <a class="dropdown-item" href="?action=seach1&type=9">Khác</a>
                        </div>
                    </div>
                  <button type="button" class="btn"><a href="?action=home" style="color: white;">Trang chủ</a></button>
                  <button type="button" class="btn">Giới thiệu</button>
              </div>
            </div>
        </div>
    </div>
        <div  class="row">
            <?php 
                $stt=1;
                while($row= mysqli_fetch_assoc($data) and $stt<10){
                    ?>
                    <div class="col-sm-3" >
                <div class="product">
                    <div class=" row image">
                        <img src="<?php echo './Images/image_product/'.$row['image1']; ?>">
                    </div>
                    <p style="font-size: 12px;color: orange;"><?php echo $row['username'] ?></p>
                    <p><?php echo $row['name'] ?></p>
                    <span><b><?php echo $row['price'] ?></b></span>
                    <span style="text-decoration: line-through;">12.000.000 </span>
                    <button><a href="?action=view-product&id=<?php echo $row['id']; ?>" style="color: white;">Xem sản phẩm</a></button>
                    <p><?php echo $row['address'] ?></p>
                </div>
            </div>
                    <?php 
                    $stt++;
                }
            ?>            
        </div>
        <div class="row">
            <div class="pagination">
              <a href="#">&laquo;</a>
              <a href="#" class="active">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#">5</a>
              <a href="#">6</a>
              <a href="#">&raquo;</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 ads-fis">
                <img src="./Images/image_ads/banner-01.png" height="100%" width="100%">
            </div>
        </div>
    </div>
    <?php include"./view/Html/client/footer.html" ?>
    <?php include"./view/Html/client/messenger.html" ?>   
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>