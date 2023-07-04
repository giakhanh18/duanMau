<div class="row mb ">
    <div class="boxtrai mr ">
            <div class="row mb">                
                    <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div> 
                    <div class=" row boxcontent billform">
                       <table>
                        <?php
                            if(isset($_SESSION['user'])){
                                $name=$_SESSION['user']['name'];
                                $address=$_SESSION['user']['address'];
                                $email=$_SESSION['user']['email'];
                                $tel=$_SESSION['user']['tel'];

                            }else{
                                $name="";
                                $address="";
                                $email="";
                                $tel="";

                            }
                        
                        ?>
                            <tr>
                                <td>Người đặt hàng</td>
                                <td><input type="text" name="name" value="<?=$name?>"></td>
                            </tr>
                            <tr>
                                <td>Địa chỉ</td>
                                <td><input type="text" name="address" value="<?=$address?>></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="text" name="email" value="<?=$email?>></td>
                            </tr>
                            <tr>
                                <td>Điện Thoại</td>
                                <td><input type="text" name="tel" value="<?=$tel?>></td>
                            </tr>

                           
                       </table>
                    </div>
            </div>     
            <div class="row mb">                
                    <div class="boxtitle">PHƯƠNG THỨC THANH TOÁN</div> 
                    <div class=" row boxcontent ">
                       <table>
                            <tr>
                                <td><input type="radio" name="pttt" checked>Trả tiền khi nhận hàng</td>
                                <td><input type="radio" name="pttt" >Chuyển khoản</td>
                                <td><input type="radio" name="pttt">Thanh toán online</td>
                           
                       </table>
                    </div>
            </div>                       
    </div>
    <div class="row mb bill">
        <a href="index.php?act=bill"><input type="button" value="ĐỒNG Ý ĐẶT HÀNG"></a> <a href="index.php?act=delcart"> <input type="button" value="XÓA GIỎ HÀNG"> </a>

    </div>
    
    <div class="boxphai">
        <?php 
            include "view/boxright.php";
        ?>
    </div>     
</div>