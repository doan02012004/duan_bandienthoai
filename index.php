<?php
ob_start();
    session_start();
    include "view/model/pdo.php";
    include "global.php";
    include "view/model/nguoidung.php";
    include "view/model/danhmuc.php";
    include "view/model/sanpham.php";
    include "view/model/khuyenmai.php";
    include "view/model/donhang.php";
    include "view/model/binhluan.php";
    if(isset($_SESSION['cart'])){
		$count = sizeof($_SESSION['cart']);
	}
    $listdm = loadall_danhmuc();
    $listspnew = loadnew_sanpham();
    $listspluotxem =loadluotxem_sanpham();
    $listdemsp =loadallsoluong_danhmuc();
    if(isset($_GET['id_dm'])){
        $id = $_GET['id_dm'];
        $listdmsp = loadall_dmsp($s="",$id);
    }else{
        $listdmsp = loadall_dmsp($s="",$id=0);
    }
    include "view/client/header.php";
  if(isset($_GET['act'])){
    $act = $_GET['act'];
        switch ($act){
            case 'sanpham':
                $pages = $_GET['pages'];
                if(isset($_POST['btn'])){
                    $id = $_POST['id_dm'];
                    $s = $_POST['s'];
                    $listdmsp = loadall_dmsp($s,$id,$pages);
                }
                else{
                    $listdmsp = loadall_dmsp($s="",$id=0,$pages);
                }
                $countpages = count_pages();
            //   $listdemsp =loadallsoluong_danhmuc();
            //   var_dump($listdemsp);
                include "view/client/sanpham.php";
                break;
            case 'loadsanpham':
                $pages = $_GET['pages'];
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $listdmsp = loadall_dmsp($s="",$id);
                }else{
                    $listdmsp = loadall_dmsp($s="",$id=0);
                }
                $countpages = count_pages();
                include "view/client/sanpham.php";
                break;
            case 'sanphamchitiet':
                $id = $_GET['id'];
                $id_dm = $_GET['id_dm'];
                $listspcl = loadcungloai_sanpham($id_dm);
                $listonesp = loadone_sanpham($id);
                $listblsp = loadallbinhluan_id($id);
                include "view/client/sanphamchitiet.php";
                break;
            case 'login':
                include "view/client/login.php";
                break;
            case 'dangky':
                // if(isset($_POST['btn-dangky'])){
                //     $ten_user = $_POST['ten_user'];
                //     $username = $_POST['username'];
                //     $pass = $_POST['pass'];
                //     $email = $_POST['email'];
                //     $diachi = $_POST['diachi'];
                //     $sdt = $_POST['sdt'];
                //     $role = 3;
                //     $trangthai_user = "Hoạt động";
                //     if($ten_user==""||$sdt=="" ||$email==""||$diachi=="" || $username ==""||$pass==""){
                //         $thongbao ="Vui lòng nhập đủ dữ liệu !";
                //     }
                //     else{
                //         insert_user($ten_user,$username,$pass,$email,$diachi,$sdt,$role,$trangthai_user);
                //         $thongbao ="Đăng ký thành công";
                //     }
                // }
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
            case 'logout':
                session_unset();
                header("Location:index.php");
                break;
            case'giohang':
                include "view/client/cart.php";
                break;
            case 'thanhtoan':
                    if(isset($_SESSION['id'])){
                        $user = loadone_user($_SESSION['id']); 
                    }
                    $listkm =loadall_khuyenmai();
                    include "view/client/thanhtoan.php";
                break;
            case 'thongtindonhang':
                $listttdh = loadthongtin_donhang($_SESSION['id']);
                include "view/client/thongtindonhang.php";
                break;
            case 'thongtindonhangchitiet':
                $id= $_GET['id'];
                $listctdh= chitiet_dh($id);
                include "view/client/thongtindonhangchitiet.php";
                break;
            case 'lichsudonhang':
                $listttdh = loadthongtin_donhang($_SESSION['id']);
                include "view/client/lichsudonhang.php";
                break;
            case 'myaccount':
                    include "view/client/thongtintaikhoan.php";
                break;
            case 'thongtin':
                if(isset($_SESSION['id'])){
                    $user = loadone_user($_SESSION['id']); 
                }
                        include "view/client/quanlytaikhoan.php";
                break;
            case 'lienhe':
                if(isset($_SESSION['id'])){
                    $listuser = loadone_user($_SESSION['id']);
                }
                include "view/client/lienhe.php";
                    break;
            case 'gioithieu':
                        include "view/client/gioithieu.php";
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