<?php
    include "view/model/pdo.php";
    include "view/model/nguoidung.php";
    include "view/model/danhmuc.php";
    include "view/user/header.php";
    $listdm = loadall_danhmuc();
  if(isset($_GET['act'])){
    $act = $_GET['act'];
        switch ($act){
            case 'trangchu':
                include "view/user/home.php";
                break;
            case 'sanpham':
                include "view/user/sanpham.php";
                break;
            case 'sanphamchitiet':
                include "view/user/sanphamchitiet.php";
                break;
            case 'login':
                include "view/user/login.php";
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
                include "view/user/login.php";
                break;
            case 'dangnhap':
                $listuser = loadall_user();
                if(isset($_POST['btn-dangnhap'])){
                    $pass = $_POST['pass'];
                    $username = $_POST['username'];
                }
                foreach ($listuser as $user) {
                    if($username==$user['username']&&$pass==$user['pass']){
                        $thongbaologin ="Đăng nhập thành công";
                        $listkh = loadone_khachhang($username);
                    }
                }
                include "view/user/login.php";
                break;
            default:
            include "view/user/home.php";
                break;
        }
  }
  else{
    include "view/user/home.php";
  }

 include "view/user/footer.php";

?>