<div class="header container-fluid bg-color">
        <div class="row">
            <div class="col-sm-1 logo">
                <img src="./Images/Logo-Nhom7.png" alt="logo" width="90%">
            </div>
            <div class="col-sm-3 header-center">
                Chào mừng bạn đến với web<br>
                Hotline:123456789              
            </div>
            <div class="col-sm-4 header-center">
                <form style="margin: auto;">
                    <input type="text" name="" placeholder="Loại mặt hàng" width="50%;">
                    <button class="btn">Tìm kiếm</button>
                </form>
            </div>
            <div class="col-sm-4 header-center" >
                <!-- <img src="../Images/news.jpg" alt="logo" width="50px;"> -->
                <button type="button" class="btn" id="btn_login" onclick="document.getElementById('login').style.display='block'" ><a href="?action=account" style="color: white;"><?php echo $_SESSION['user_name']; ?></a></button>
                <div class="header-center-messenger">
                    <img src="./Images/image_er/<?php echo $_SESSION['user_image'];?>" width="40px;" height="40px;" style="border-radius: 50%;position: relative;" onclick="document.getElementById('messenger').style.display='block'">
                    <span style="right: -10px;position: absolute; font-size: 18px; top: -5px; font-weight: bold;">1</span>
                    <div id="messenger" class="messenger">
                        <button style="float: right;margin: 5px;font-size: 20px;" onclick="document.getElementById('messenger').style.display='none'">X</button>
                        <p style="color: black;margin: 10px;font-weight: bold;font-size: 18px;">Tin nhắn đến</p>
                        <div class="messenger-item" onclick="document.getElementById('view-messenger-item1').style.display='inline-block'">
                            <div class="col-sm-3">
                                <img src="./Images/image_er/news.jpg" height="40px" width="40px" style="border-radius: 50%">
                            </div>
                            <div class="col-sm-9">
                                <p style="font-size: 16px;margin: 0px;">Nguyễn Văn A</p>
                                <span style="font-size: 12px;max-width: 200px;">123456789</span>
                                <span style="float: right;">Time</span>
                            </div>
                        </div>
                        <div class="messenger-item" onclick="document.getElementById('view-messenger-item2').style.display='inline-block'">
                            <div class="col-sm-3">
                                <img src="./Images/image_er/news.jpg" height="40px" width="40px" style="border-radius: 50%">
                            </div>
                            <div class="col-sm-9">
                                <p style="font-size: 16px;margin: 0px;">Nguyễn Văn B</p>
                                <span style="font-size: 12px;max-width: 200px;">123456789</span>
                                <span style="float: right;">Time</span>
                            </div>
                        </div>
                        <div class="messenger-item" onclick="document.getElementById('view-messenger-item3').style.display='inline-block'">
                            <div class="col-sm-3">
                                <img src="./Images/image_er/news.jpg" height="40px" width="40px" style="border-radius: 50%">
                            </div>
                            <div class="col-sm-9">
                                <p style="font-size: 16px;margin: 0px;">Nguyễn Văn C</p>
                                <span style="font-size: 12px;max-width: 200px;">123456789</span>
                                <span style="float: right;">Time</span>
                            </div>
                        </div>
                    </div> 
                </div>
                <button type="button" class="btn" id="btn_signup" onclick="document.getElementById('signup').style.display='block'"><a href="?action=sell-product" style="color: white;">Đăng Bán</a></button>
                <button type="button" class="btn" id="btn_signup" onclick="document.getElementById('signup').style.display='block'"><a href="?action=logout" style="color: white;">Đăng Xuất</a></button>
            </div>
            
        </div>
    </div>

    
    <div class="container bg-color text-white" style="margin-top: 10px;" id="header">
        <div class="row-sm-12">
            <div class="col-sm-8">
                <div class="btn-group">
                    <div class="dropdown">
                        <button type="button" class="btn dropdown-toggle " style="font-size: 12px;margin-top: 4px;" data-toggle="dropdown">Danh mục sản phẩm</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="?action=home">Tất cả </a>
                            <a class="dropdown-item" href="?action=seach&type=1">Điện thoại </a>
                            <a class="dropdown-item" href="?action=seach&type=2">Máy tính</a>
                            <a class="dropdown-item" href="?action=seach&type=3">Tivi</a>
                            <a class="dropdown-item" href="?action=seach&type=4">Tủ lạnh</a>
                            <a class="dropdown-item" href="?action=seach&type=5">Nhà bếp</a>
                            <a class="dropdown-item" href="?action=seach&type=6">Xe</a>
                            <a class="dropdown-item" href="?action=seach&type=7">Đồng hồ</a>
                            <a class="dropdown-item" href="?action=seach&type=8">Quần áo</a>
                            <a class="dropdown-item" href="?action=seach&type=9">Khác</a>
                        </div>
                    </div>
                  <button type="button" class="btn"><a href="?action=home" style="color: white;">Trang chủ</a></button>
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