<!-- admin trang home -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./View/Css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <title>Home admin</title>
</head>
<body class="bg-light">
    <?php include"admin_header.html" ?>
    <div class="container bg-color text-white" style="margin-top: 10px;">
        <div class="row-sm-12">
            <div class="col-sm-8">
                <div class="btn-group">
                    <div class="dropdown">
                        <button type="button" class="btn dropdown-toggle " style="font-size: 12px;margin-top: 4px;" data-toggle="dropdown">Danh mục sản phẩm</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="?action=seach&name=dienthoai">Điện thoại </a>
                            <a class="dropdown-item" href="?action=seach&name=maytinh">Máy tính</a>
                            <a class="dropdown-item" href="?action=seach&name=tivi">Tivi</a>
                            <a class="dropdown-item" href="?action=seach&name=tulanh">Tủ lạnh</a>
                            <a class="dropdown-item" href="?action=seach&name=bep">Bếp điện</a>
                            <a class="dropdown-item" href="?action=seach&name=xe">Xe</a>
                        </div>
                    </div>
                  <button type="button" class="btn">Trang chủ</button>
                  <button type="button" class="btn">Giới thiệu</button>
                  <div class="dropdown btn-group">
                        <button type="button" class="btn dropdown-toggle dropdown" data-toggle="dropdown">
                             Sản Phẩm
                        </button>
                     <div class="dropdown-menu">
                        <a class="dropdown-item" href="?action=seach&name=dienthoai">Điện thoại </a>
                        <a class="dropdown-item" href="?action=seach&name=maytinh">Máy tính</a>
                        <a class="dropdown-item" href="?action=seach&name=tivi">Tivi</a>
                        <a class="dropdown-item" href="?action=seach&name=tulanh">Tủ lạnh</a>
                        <a class="dropdown-item" href="?action=seach&name=bep">Bếp điện</a>
                        <a class="dropdown-item" href="?action=seach&name=xe">Xe</a>
                     </div>
                  </div>
              </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-3" style="margin-top: 20px;">
                <p class="text-white bg-color" style="text-align: center;">Top sản phẩm nổi bật</p>
                <div class="row">
                    <div class="col-sm-6" style="margin-bottom: 5px;">
                        <img src="./Images/image_product/news.jpg" width="100%">
                    </div>
                    <div class="col-sm-6" style="">
                        Sản phẩm mới nổi bật hiện nay
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6" style="margin-bottom: 5px;">
                            <img src="./Images//image_product/news.jpg" width="100%">
                    </div>
                    <div class="col-sm-6">
                            Sản phẩm mới nổi bật hiện nay
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6" style="margin-bottom: : 5px;">
                        <img src="./Images/image_product/news.jpg" width="100%">
                    </div>
                    <div class="col-sm-6">
                            Sản phẩm mới nổi bật hiện nay
                    </div>
                </div>
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
            <div class="col-sm-3 text-white">
                Sản phẩm hot
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

    <?php include"./view/Html/client/messenger.html" ?>
    <?php include"./view/Html/client/footer.html" ?>
    
  
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>