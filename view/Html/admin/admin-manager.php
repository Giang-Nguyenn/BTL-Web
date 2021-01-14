<!-- admin trang quản lý -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./View/Css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <title>Admin-manager</title>
</head>
<body class="bg-light">
    <?php include"admin_header.html" ?>
    <div class="container bg-color text-white" style="margin-top: 10px;">
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
    
    <div class="container">
        <div class="row" style="margin-top: 10px;">
            <div class="col-sm-12">
                <h4 style="text-align: center; display: block;">Sản phẩm chờ xét duyệt</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table style="width: 100%;">
                <tr style="background-color: green;border: solid 1px black;">
                    <th>STT</th>
                    <th>Tên người dùng</th>
                    <th>Loại sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Miêu tả</th>
                    <th>Hành động</th>
                </tr>
                <?php 
                $stt=1;
                while($row= mysqli_fetch_assoc($data)){
                    ?>
                    <tr style="border: solid 1px black;"> 
                        <td><?php echo $stt; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['type']; ?></td>
                        <td><?php echo $row['productname']; ?></td>
                        <td><?php echo $row['describe']; ?></td>
                        <td>
                            <a href="?action=view-product&id=<?php echo $row['productid'];?>">Xem</a>
                            <a href="?action=licensing&productid=<?php echo $row['productid'];?>&status=1">Duyệt</a>
                            <a href="?action=licensing&productid=<?php echo $row['productid'];?>&status=-1">Bỏ qua</a>
                        </td>  
                    </tr>
                    <?php 
                    $stt++;
                }
                ?>
                </table>
            </div>
        </div>
    </div>

    <?php include"./view/Html/client/messenger.html" ?>
       
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>