<?php 
session_start();
include "model/pdo.php";
include "model/sanpham.php";
include "model/taikhoan.php";
include "model/danhmuc.php";
include "view/header.php";
include "global.php";

if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];


$spnew=loadall_sanpham_home();
$dsdm=loadall_danhmuc();
$dstop10=loadall_sanpham_top10();

    if((isset($_GET['act']))&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch ($act) {
            case 'sanpham':
                if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                    $kyw=$_POST['kyw'];
                }else{
                    $kyw="";
                }
                if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                    $iddm=$_GET['iddm'];                   
                    $dssp=loadall_sanpham("",$iddm);
                    $tendm=load_ten_danhmuc($iddm);
                    include "view/sanpham.php";
                }else{
                    $iddm=0;
                } 
                $dssp=loadall_sanpham($kyw,$iddm);
                $tendm=load_ten_danhmuc($iddm);
                break;
            
            case 'sanphamct':
                if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                    $id=$_GET['idsp'];
                    $onesp=loadone_sanpham($id);
                    extract($onesp);
                    $sp_cungloai=load_sanpham_cungloai($id,$iddm);
                    include "view/sanphamct.php";
                }else{
                    include "view/home.php";
                } 
                break;

            case 'dangky':
                if(isset($_POST['dangky'])&&($_POST['dangky'])){
                    $email=$_POST['email'];
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    insert_taikhoan($email,$user,$pass);
                    $thongbao="Đăng ký thành công ";
                }
            case 'dangnhap':
                if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $checkuser=checkuser($user,$pass);
                    if(is_array($checkuser)){
                        $_SESSION['user']=$checkuser;
                        // $thongbao="Đăng nhập thành công ";
                        header('location:index.php');
                        
                    }else{
                        $thongbao="Tài khoản không tồn tại";
                    }
                    
                }
                    include "view/taikhoan/dangky.php";
            break;
                
            case 'edittaikhoan':
                if(isset($_POST['capnhap'])&&($_POST['capnhap'])){
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $email=$_POST['email'];
                    $address=$_POST['address'];
                    $tel=$_POST['tel'];
                    $id=$_POST['id'];
                    update_taikhoan($id,$user,$pass,$email,$address,$tel);
                    $_SESSION['user']=checkuser($user,$pass);
                    header('location:index.php?act=edittaikhoan');
                }
                    include "view/taikhoan/edittaikhoan.php";
            break;

            case 'quenmk':
                if(isset($_POST['guiemail'])&&($_POST['guiemail'])){
                    $email=$_POST['email'];
                     
                    $check_email=check_email($email);
                    if(is_array($check_email)){
                        $thongbao="Mật khẩu của bạn là:  ".$check_email['pass'];            
                    }else{
                        $thongbao="Email không tồn tại";
                    }
                    
                }
                    include "view/taikhoan/quenmk.php";
            break;

            case 'thoat':
                session_unset();
                header('location:index.php');
                
                break;

            case 'addtocart':
                if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                    $id=$_POST['id'];
                    $name=$_POST['name'];
                    $img=$_POST['img'];
                    $price=$_POST['price'];
                    $soluong=1;
                    $ttien=$soluong * $price;
                    $spadd=[$id,$name,$img,$price,$soluong,$ttien];
                    $_SESSION['mycart'];
                    array_push($_SESSION['mycart'],$spadd);

                }
                include "view/cart/viewcart.php";
                break;

            case 'delcart':
                if(isset($_GET['idcart'])){
                    array_splice($_SESSION['mycart'],$_GET['idcart'],1);
                }else{
                    $_SESSION['mycart']=[];

                }

                    // include "view/cart/viewcart.php";
                    header('location:index.php?act=viewcart');
                    break;

            case 'viewqcart':
                    include "view/cart/viewcart.php";
                    break;
                


            case 'binhluan':
                    include "view/binhluan/binhluanform.php";
                break;

            case 'gioithieu':
                include "view/gioithieu.php";
                break;
            
            case 'lienhe':
                 include "view/lienhe.php";
                break;


            default:
                include "view/home.php";
                break;
        }
    }else{
        include "view/home.php";
    }
include "view/footer.php";

?>