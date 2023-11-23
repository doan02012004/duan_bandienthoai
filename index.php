<?php
ob_start();
    session_start();
    include "view/model/pdo.php";
    include "global.php";
    include "view/model/nguoidung.php";
    include "view/model/danhmuc.php";
    include "view/model/sanpham.php";
    include "view/model/khuyenmai.php";
    $listdm = loadall_danhmuc();
    $listspnew = loadnew_sanpham();
    include "view/client/header.php";
  if(isset($_GET['act'])){
    $act = $_GET['act'];
        switch ($act){
            case 'sanpham':
                include "view/client/sanpham.php";
                break;
            case 'sanphamchitiet':
                include "view/client/sanphamchitiet.php";
                break;
            case 'login':
                include "view/client/login.php";
                break;
            case 'dangky':
                if(isset($_POST['btn-dangky'])){
                    $ten_user = $_POST['ten_user'];
                    $username = $_POST['username'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $diachi = $_POST['diachi'];
                    $sdt = $_POST['sdt'];
                    $role = 3;
                    $trangthai_user = "Hoạt động";
                    if($ten_user==""||$sdt=="" ||$email==""||$diachi=="" || $username ==""||$pass==""){
                        $thongbao ="Vui lòng nhập đủ dữ liệu !";
                    }
                    else{
                        insert_user($ten_user,$username,$pass,$email,$diachi,$sdt,$role,$trangthai_user);
                        $thongbao ="Đăng ký thành công";
                    }
                }
                include "view/client/creat.php";
                break;
            case 'dangnhap':
                $listuser = loadall_user();
                if(isset($_POST['btn-dangnhap'])){
                    $pass = $_POST['pass'];
                    $username = $_POST['username'];
                    $listkh = loadone_khachhang($username);
                    if($pass==$listkh['pass']){
                        $thongbaologin ="Đăng nhập thành công";
                        $_SESSION['id']=$listkh['id'];
                        $_SESSION['ten_user']=$listkh['ten_user'];
                       header("Location:index.php");
                    }
                    else{
                        $thongbaologin ="Sai tài khoản hoặc mật khẩu";
                        include "view/client/login.php";
                    }
                }
                break;
                include "view/client/login.php";
                break;
            case 'logout':
                session_unset();
                header("Location:index.php");
                break;
            
            default:
            include "view/client/home.php";
                break;
        }
  }
  else{
    include "view/client/home.php";
  }

 include "view/client/footer.php";
ob_end_flush();
?>