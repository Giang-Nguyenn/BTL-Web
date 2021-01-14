<!-- user bán sản phẩm -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./View/Css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <title>User-sell-product</title>
</head>
<body class="bg-light">
    <?php include"user_header.php" ?>
    <h3 style="text-align: center;margin-top: 10px;">Thêm sản phẩm mới</h3>
    <form class="signup-content bg-white animate" action="?action=sell" method="POST" enctype="multipart/form-data">
             <p style="margin: 0px;" onclick="document.getElementById('signup').style.display='none'" class="close" title="Close Modal">&times;</p><br>
             <p style="font-size: 20px;font-weight: bold;text-align: center;">Sản phẩm</p>
             <label><b>Name</b></label><br>
             <input type="text" name="name" placeholder="Tên sản phẩm" required=""><br>
             <label><b>Giá</b></label><br>
             <input type="text" name="price" placeholder="Giá sản phẩm" required=""><br>
             <label><b>Miêu tả</b></label><br>
             <input type="text" name="describe" placeholder="Miêu tả sản phẩm" required=""><br>
             <select name="type" id="cars">
                <option value="1">Điện thoại</option>
                <option value="2">Máy tính</option>
                <option value="3">Tivi</option>
                <option value="4">Tủ lạnh</option>
                <option value="5">Nhà bếp</option>
                <option value="6">Xe</option>
                <option value="7">Đồng hồ</option>
                <option value="8">Quần áo</option>
                <option value="9">Khác</option>
            </select><br>
            Chọn ảnh 1<input type="file" name="anh1"><br>
            Chọn ảnh 2<input type="file" name="anh2"><br>
            Chọn ảnh 3<input type="file" name="anh3"><br>
            Chọn ảnh 4<input type="file" name="anh4"><br>
             <input type="submit" name="sell" value="Đăng bánn">     
              <!-- <p>hi</p> -->
            
        </form>
    <?php include"./view/Html/client/footer.html" ?>
    <?php include"./view/Html/client/messenger.html" ?>
    
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>