<!-- client xem thông tin sản phẩm -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./View/Css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <title>Trang chủ</title>
</head>
<body class="bg-light">
    <?php include"header.html" ?>

    <div class="container" style="margin: 30px auto;">
        <div class="row" style="border: 1px solid orange;">
            <div class="col-sm-6">
                <div class="row" style="position: relative; height: 300px;margin-bottom: 30px;">
                    <div class="col-sm-12 view-product" style="display: flex;">
                        <div class="numbertext">1 / 4</div>
                        <img src="<?php echo './Images/image_product/'.$image1; ?>">
                    </div>
                    <div class="col-sm-12 view-product">
                        <div class="numbertext">2 / 4</div>
                        <img src="<?php echo './Images/image_product/'.$image2; ?>">
                    </div>
                    <div class="col-sm-12 view-product">
                        <div class="numbertext">3 / 4</div>
                        <img src="<?php echo './Images/image_product/'.$image3; ?>">
                    </div>
                    <div class="col-sm-12 view-product">
                        <div class="numbertext">4 / 4</div>
                        <img src="<?php echo './Images/image_product/'.$image4; ?>">
                    </div>
                    <a class="prev" onclick="prevnext(-1)">❮</a>
                    <a class="next" onclick="prevnext(1)">❯</a>
                </div>
                <div class="row list-image">
                    <div class="col-sm-3  list-image-item " >
                        <img src="<?php echo './Images/image_product/'.$image1; ?>" onclick="showslide(1)" onmousemove="showslide(1)">
                    </div>
                    <div class="col-sm-3 list-image-item ">
                        <img src="<?php echo './Images/image_product/'.$image2; ?>" onclick="showslide(2)" onmousemove="showslide(2)">
                    </div>
                    <div class="col-sm-3 list-image-item">
                        <img src="<?php echo './Images/image_product/'.$image3; ?>" onclick="showslide(3)" onmousemove="showslide(3)">
                    </div>
                    <div class="col-sm-3 list-image-item">
                        <img src="<?php echo './Images/image_product/'.$image4; ?>" onclick="showslide(4)" onmousemove="showslide(4)">
                    </div>

                </div>
            </div>           

            <div class="col-sm-6 product-infor">
                <h3 style="text-align: center;"><?php echo $name?></h3>
                <span style="color: red;font-size: 25px; font-weight: bold;"><?php echo $price?></span>
                <div class="product-describe">
                    <p><?php echo $describe?></p>
                </div>
                <button  type="button" class="btn-color"><a href="<?php echo $phone?>" style="color: white;" ><?php echo $phone?>(Liên hệ trực tiếp)</a></button>
                <button  type="button" class="btn-color">Nhắn tin</button>

                <a href="?action=taikhoanuser&userid=<?php echo $userid ?>">
                    <div class="col-sm-3 seller">
                    <img src="./Images/image_er/news.jpg">
                    <span><?php echo $username?></span>
                    <span><?php echo $phone?></span>
                </div>
                </a>
                
            </div>
        </div>
    </div>



    <div class="container list_comment">
        <div class="row" id="cm" class="comment">
            <form class="col-sm-12 comment" action="" method="POST">
                <input type="text" name="Bình luận " placeholder="Bình luận..." onclick="document.getElementById('comment').style.display='block'">
                <input type="submit" name="comment" id="comment" value="Comment">
            </form>
        </div>

        <?php 
                $stt=1;
                while($row= mysqli_fetch_assoc($data1) and $stt<10){
                    ?>
                        <div class="comment">
                            <img src="./Images/image_er/<?php echo $row['image'] ?>" style="width: 50px;height: 50px;border-radius: 50%;">
                            <span><b><?php echo $row['name']."-" ?></b></span>
                            <span><?php echo $row['time'] ?></span>
                            <p style="margin-left: 30px;"><?php echo $row['comment'] ?></p>
                        </div>
                    <?php 
                    $stt++;
                }
            ?>
        
    </div>

    <div class="container">
        <div class="row ">
            <div class="col-sm-9 ads-fis">
                <img src="./Images/image_ads/banner-01.png" height="100%" width="100%">
            </div>
        </div>
    </div>

    <?php include"footer.html" ?>

    <?php include"ls.html" ?>

    <?php include("messenger.html") ?>

    <script>
        if(<?php echo $_SESSION['status']  ?>==0)
        {
            document.getElementById('cm').style.display='none';
        }
        var modal1 = document.getElementById('login');
        var modal2 = document.getElementById('signup');
        window.onclick = function(event) {
            if (event.target == modal1) {
                modal1.style.display = "none";
            }
            if (event.target == modal2) {
                modal2.style.display = "none";
            }
        }
        //check password
        var check = function() {
              if (document.getElementById('password').value ==document.getElementById('cpassword').value) {
                document.getElementById('tb1').innerHTML='Mật khẩu chính xác';
            document.getElementById('tb').disabled = false;
              } 
              else {
                document.getElementById('tb1').innerHTML='Mật khẩu chưa khớp';
                document.getElementById('tb').disabled = true;
              }
        }
    </script>
    <script>
        //hiệu ứng hiển thị sản phẩm
        var a=1;
        function prevnext(x){
            a=a+x;
            showslide(a);
        }
        var slides=document.getElementsByClassName("view-product");
        var slidesitems=document.getElementsByClassName("list-image-item");
        function showslide(n){
             for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";
                  slidesitems[i].style.border='none';
              }
              if(n>slides.length){n=1;}
              if(n==0){n=slides.length;}
            slides[n-1].style.display='flex';
            slidesitems[n-1].style.border='3px solid orange'
            a=n;

        }
    </script>
    
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>