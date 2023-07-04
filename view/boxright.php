<div class="row mb">
                    <div class="boxtitle">Tài khoản</div>
                    <div class="boxcontent formtaikhoan">
                        <?php
                            if(isset($_SESSION['user'])){
                                extract($_SESSION['user']);
                        ?>

                                <div class="row mb10">
                                    Xin chào <br>
                                      <?=$user?>
                                </div>
                                <div class="row mb10">
                                    <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                                    <li><a href="index.php?act=edittaikhoan">Cập nhập tài khoản</a></li>
                                    <?php if($role==1){  ?>
                                    <li><a href="admin/index.php">Đăng nhập Admin</a></li>        
                                    <?php }  ?>
                                    <li><a href="index.php?act=thoat">Thoát</a></li>                             
                                </div>

                        <?php
                             }else{
                        ?>
                        <form action="index.php?act=dangnhap" method="post">
                            <div class="row mb10">
                                Tên Đăng Nhập <br>
                                <input type="text" name="user" >
                            </div>
                            <div class="row mb10">
                                Mật Khẩu <br>
                                <input type="password" name="pass" ><br>
                            </div>
                            <div class="row mb10">
                                 <input type="checkbox" name="">Ghi Nhớ Tài Khoản? <br>
                            </div>
                            <div class="row mb10">
                                <input type="submit" value="Đăng nhập" name="dangnhap">
                            </div>
                        </form>
                            <li><a href="">Quên mật khẩu</a></li>
                            <li><a href="index.php?act=dangky">Đăng kí thành viên</a></li>

                            <?php } ?>

                    </div>
                </div>
                <div class="row mb">
                    <div class="boxtitle">Danh Mục</div>
                    <div class="boxcontent2 menudoc">
                        <ul>
                            <?php
                                    foreach ($dsdm as $key => $dm) {
                                        extract($dm);
                                        $linkdm="index.php?act=sanpham&iddm=".$id;
                                        echo'<li>
                                                <a href="'.$linkdm.'">'.$name.'</a></li>
                                            ';
                                    }
                            ?>
                            <!-- <li><a href="">Đồng hồ</a></li>
                        </ul>
                        <ul>
                            <li><a href="">Điện thoại</a></li>
                        </ul>
                        <ul>
                            <li><a href="">LapTop</a></li>
                        </ul>
                        <ul>
                            <li><a href="">Balo</a></li>
                        </ul>
                        <ul>
                            <li><a href="">Đồng hồ</a></li>
                        </ul>
                        <ul>
                            <li><a href="">Điện thoại</a></li>
                        </ul>
                        <ul>
                            <li><a href="">LapTop</a></li>
                        </ul>
                        <ul>
                            <li><a href="">Balo</a></li> -->
                        </ul>
                    </div>
                    <div class="boxfooter searchbox">
                        <form action="index.php?act=sanpham" method="post">
                            <input type="text" name="kyw" id="" >
                            <input type="submit" name="timkiem" value="TÌM KIẾM">
                        </form>
                    </div>
                </div>
                <div class="row mb">
                    <div class="boxtitle">Top 10 yêu thích</div>
                    <div class=" row boxcontent">
                    <?php  
                            foreach ($dstop10 as $key => $sp) {
                                extract($sp);
                                $linksp="index.php?act=sanphamct&idsp=".$id;
                                $img=$img_path.$img;
                                echo ' <div class="row mb10 top10yeuthich">
                                <a href="'.$linksp.'"><img src="'.$img.'" alt=""></a>
                                            <a href="'.$linksp.'">'.$name.'</a>
                                         </div>';
                            }
                    
                    ?>
                    <!-- <div class=" row boxcontent">
                        <div class="row mb10 top10yeuthich">
                            <img src="view/images/1001.jpg" alt="">
                            <a href="#">Đồng hồ Rolex</a>
                        </div>
                        <div class="row mb10 top10yeuthich">
                            <img src="view/images/1001.jpg" alt="">
                            <a href="#">Đồng hồ Rolex</a>
                        </div>
                        <div class="row mb10 top10yeuthich">
                            <img src="view/images/1001.jpg" alt="">
                            <a href="#">Đồng hồ Rolex</a>
                        </div>
                        <div class="row mb10 top10yeuthich">
                            <img src="view/images/1001.jpg" alt="">
                            <a href="#">Đồng hồ Rolex</a>
                        </div>
                        <div class="row mb10 top10yeuthich">
                            <img src="view/images/1001.jpg" alt="">
                            <a href="#">Đồng hồ Rolex</a>
                        </div> -->
                    </div>
                </div>  