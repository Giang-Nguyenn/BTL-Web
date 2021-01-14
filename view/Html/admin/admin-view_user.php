<!-- admin xem thông tin user -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./View/Css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <title>Admin-view_user</title>
</head>
<body class="bg-light">
    <?php include"admin_header.html" ?>
    <div class="container bg-color text-white" style="margin: 30px auto;">
        <div class="row-sm-12">
            <div class="col-sm-8">
                <div class="btn-group">
                  <button type="button" class="btn"><a href="?action=home-admin" style="color: white;">Home</a></button>
                  <button type="button" class="btn"><a href="?action=manager-user"style="color: white;">Quản lý thành viên</a></button>
                  <button type="button" class="btn"><a href="?action=ads"style="color: white;">Tùy chọn quảng cáo</a></button>
                  <button type="button" class="btn"><a href="?action=all"style="color: white;">Tùy chỉnh</a></button>
                </div>
            </div>
        </div>
    </div>
    <!-- Thông tin của user -->
    <?php 
      $stt=1;
      while($row= mysqli_fetch_assoc($data1) and $stt<=1){
          ?>
          <div class="container user_profile">
              <h3 style="text-align: center;">Thông tin của người dùng <?php echo $row['name'] ?> </h3>
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
    <div class="container bg-color" style="margin:30px auto;">
        <div class="row">
            <div class="col-sm-3">
                <p style="margin:auto;padding: 10px;">Sản phẩm của người bán</p>
            </div>
        </div>
    </div>
    <div class="container" style="font-size: 20px;">
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