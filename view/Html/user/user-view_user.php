<!-- user xem thông tin user khác -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./View/Css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <title>User-view_user</title>
</head>
<body class="bg-light">
    <!-- <h1>Hello, World!</h1> -->
    <?php include"user_header.php" ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-3" style="margin-top: 20px;">
                <p style="text-align: center;"><b>Thông tin người bán</b></p>
                <?php 
                    $stt=1;
                    $user_name_sell;
                    while($row= mysqli_fetch_assoc($data1) and $stt<=1){
                        ?>
                        <img src="./Images/image_er/<?php echo $row['image'] ?>" style="width: 50%;height: auto;margin: auto;border-radius: 50%;display: block;">
                    <p><b>Tên :</b><?php $user_name_sell=$row['name']; echo $row['name'] ?></p>
                    <p><b>Địa chỉ :</b><?php echo $row['address'] ?></p>
                    <p><b>Số điện thoại :</b><?php echo $row['phone'] ?></p>
                    <p><b>Ngày tạo :</b><?php echo $row['time'] ?></p>
                        <?php 
                        $stt++;
                    }
                ?>
                    
            </div>
            <div class="col-sm-9" style=" margin-top: 20px;">
                <div id="demo" class="carousel slide" data-ride="carousel">
                          <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>

                        <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./Images/image_ads/banner-01.png" alt="sp1"  width="100%">
                        </div>
                        <div class="carousel-item">
                              <img src="./Images/image_ads/banner-01.png" alt="sp2" width="100%">
                        </div>
                        <div class="carousel-item">
                            <img src="./Images/image_ads/banner-02.png" alt="sp3"  width="100%">
                        </div>
                    </div>

                      <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="font-size: 20px;">
        <div  class="row bg-color"  style="margin: 15px 0; padding: 5px;">
            <div class="col-sm-12 text-white">
                Các sản sản phẩm của người bán <?php echo $user_name_sell; ?>
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
                    <button><a href="?action=view_product&id=<?php echo $row['id']; ?>" style="color: white;">Xem sản phẩm</a></button>
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