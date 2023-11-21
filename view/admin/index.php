<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/nguoidung.php";
    include "../model/sanpham.php";
    include "../model/chucvu.php";
    include "../model/baiviet.php";
    include "../model/hethong.php";
    include "../model/khuyenmai.php";
    include "../model/binhluan.php";
    include "../model/donhang.php";
    include "../model/lienhe.php";
 include "header.php";
 include "boxleft.php";
if(isset($_GET['act']) && ($_GET['act']!="")){
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            if(isset($_POST['btn-add'])){
                $ten_dm = $_POST['ten_dm'];
                $mota_dm = $_POST['mota_dm'];
                $trangthai_dm = $_POST['trangthai_dm'];
                if($ten_dm==""|| $mota_dm=="" ||$trangthai_dm==""){
                    $thongbao ="Vui lòng nhập đủ dữ liệu !";
                }
                else{
                    insert_danhmuc($ten_dm,$mota_dm,$trangthai_dm);
                    $thongbao ="Thêm thành công";
                }
            }
            include "danhmuc/add.php";
            break;
        case 'listdm':
                $listdm = loadall_danhmuc();
                include "danhmuc/list.php";
                break;
        case 'xoadm':
                $id = $_GET['id'];
                delete_danhmuc($id);
                $listdm = loadall_danhmuc();
                include "danhmuc/list.php";
            break;
        case 'suadm':
                $id = $_GET['id'];
                $listdm = loadone_danhmuc($id);
                include "danhmuc/update.php";
                break;
        case 'updatedm':
                if(isset($_POST['btn-add'])){
                    $id = $_POST['id'];
                    $ten_dm = $_POST['ten_dm'];
                    $mota_dm = $_POST['mota_dm'];
                    $trangthai_dm = $_POST['trangthai_dm'];
                    if($ten_dm==""|| $mota_dm=="" ||$trangthai_dm==""){
                        $thongbao ="Vui lòng nhập đủ dữ liệu !";
                    }
                    else{
                        update_danhmuc($id,$ten_dm,$mota_dm,$trangthai_dm);
                        $thongbao ="Thêm thành công";
                    }
                }
                $listdm = loadall_danhmuc();
                include "danhmuc/list.php";
                break;
        case 'listsp':
            $listsp = loadall_sanpham();
            include "sanpham/list.php";
        break;
        case 'addsp':
            $listdm = loadall_danhmuc();
            if(isset($_POST['btn-add'])){
                $ten_sp = $_POST['ten_sp'];
                $gia_sp = $_POST['gia_sp'];
                $soluong_sp = $_POST['soluong_sp'];
                $dungluong_sp = $_POST['dungluong_sp'];
                $ngaynhap_sp = $_POST['ngaynhap_sp'];
                $avatar = $_FILES['avatar']['name'];
                $target_dir="../uploads/";
                $target_file = $target_dir . basename($_FILES['avatar']['name']);
                if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
                    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                  } else {
                   // echo "Sorry, there was an error uploading your file.";
                  }
                  $mota_sp = $_POST['mota_sp'];
                  $trangthai_sp = $_POST['trangthai_sp'];
                $id_dm = $_POST['id_dm'];
                if($ten_sp==""|| $mota_sp=="" ||$trangthai_sp=="" || $gia_sp==""|| $dungluong_sp==""|| $soluong_sp==""||$id_dm==0){
                    $thongbao ="Vui lòng nhập đủ dữ liệu !";
                }
                else{
                    insert_sanpham($ten_sp,$avatar,$gia_sp,$soluong_sp,$dungluong_sp,$mota_sp,$trangthai_sp,$ngaynhap_sp,$id_dm);
                    $thongbao ="Thêm thành công";
                }
                
            }
            include "sanpham/add.php";
        break;
        case 'xoasp':
                $id = $_GET['id'];
                delete_sanpham($id);
                $listsp = loadall_sanpham();
                include "sanpham/list.php";
            break;
        case 'suasp':
            $id = $_GET['id'];
            $listsp = loadone_sanpham($id);
            $listdm = loadall_danhmuc();
            include "sanpham/update.php";
            break;
        case 'updatesp':
            if(isset($_POST['btn-add'])){
                $id = $_POST['id'];
                $ten_sp = $_POST['ten_sp'];
                $gia_sp = $_POST['gia_sp'];
                $soluong_sp = $_POST['soluong_sp'];
                $dungluong_sp = $_POST['dungluong_sp'];
                $ngaynhap_sp = $_POST['ngaynhap_sp'];
                $avatar = $_FILES['avatar']['name'];
                $target_dir="../uploads/";
                $target_file = $target_dir . basename($_FILES['avatar']['name']);
                if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
                    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                  } else {
                   // echo "Sorry, there was an error uploading your file.";
                  }
                  $mota_sp = $_POST['mota_sp'];
                  $trangthai_sp = $_POST['trangthai_sp'];
                $id_dm = $_POST['id_dm'];
                if($ten_sp==""|| $mota_sp=="" ||$trangthai_sp=="" || $gia_sp==""|| $dungluong_sp==""|| $soluong_sp==""||$id_dm==0){
                    $thongbao ="Vui lòng nhập đủ dữ liệu !";
                }
                else{
                    update_sanpham($id,$ten_sp,$avatar,$gia_sp,$soluong_sp,$dungluong_sp,$mota_sp,$trangthai_sp,$ngaynhap_sp,$id_dm);
                    $thongbao ="Cập nhật thành công";
                    $listsp = loadall_sanpham();
                    include "sanpham/list.php";
                }
                
            }
    
            break;
            case 'listkm':
                $listkm = loadall_khuyenmai();
                    include "khuyenmai/list.php";
                break;

            case 'addkm':
                if(isset($_POST['btn-add'])){
                    $ten_km = $_POST['ten_km'];
                    $phantram_km = $_POST['phantram_km'];
                    $ngaybatdau = $_POST['ngaybatdau'];
                    $ngayketthuc = $_POST['ngayketthuc'];
                    $trangthai_km = $_POST['trangthai_km'];
                    if($ten_km==""||$phantram_km==""||$ngaybatdau==""|| $ngayketthuc=="" ||$trangthai_km==""){
                        $thongbao ="Vui lòng nhập đủ dữ liệu !";
                    }
                    else{
                        insert_khuyenmai($ten_km,$phantram_km,$ngaybatdau,$ngayketthuc,$trangthai_km);
                        $thongbao ="Thêm thành công";
                    }
                }
                include "khuyenmai/add.php";
                break;
            case 'xoakm':
                    $id = $_GET['id'];
                    delete_khuyenmai($id);
                    $listkm = loadall_khuyenmai();
                    include "khuyenmai/list.php";
                break;
        case 'suakm':
            $id = $_GET['id'];
                $listkm = loadone_khuyenmai($id);
                include "khuyenmai/update.php";
                break;
        case 'updatekm':
                    if(isset($_POST['btn-update'])){
                        $id = $_POST['id'];
                        $ten_km = $_POST['ten_km'];
                        $phantram_km = $_POST['phantram_km'];
                        $ngaybatdau = $_POST['ngaybatdau'];
                        $ngayketthuc = $_POST['ngayketthuc'];
                        $trangthai_km = $_POST['trangthai_km'];
                        if($ten_km==""||$phantram_km==""||$ngaybatdau==""|| $ngayketthuc=="" ||$trangthai_km==""){
                            $thongbao ="Vui lòng nhập đủ dữ liệu !";
                        }
                        else{
                            update_khuyenmai($id,$ten_km,$phantram_km,$ngaybatdau,$ngayketthuc,$trangthai_km);
                            $thongbao ="Thêm thành công";
                        }
                    }
                    $listkm = loadall_khuyenmai();
                    include "khuyenmai/list.php";
                    break;
        case 'addht':
            if(isset($_POST['btn-add'])){
                $ten_ch = $_POST['ten_ch'];
                $sdt = $_POST['sdt'];
                $email_ch = $_POST['email_ch'];
                $diachi_ch = $_POST['diachi_ch'];
                if($ten_ch==""||$sdt=="" ||$email_ch==""||$diachi_ch==""){
                    $thongbao ="Vui lòng nhập đủ dữ liệu !";
                }
                else{
                    insert_hethong($ten_ch,$sdt,$email_ch,$diachi_ch);
                    $thongbao ="Thêm thành công";
                }
            }
            include "hethong/add.php";
            break;
        case 'listht':
            $listht = loadall_hethong();
            include "hethong/list.php";
            break;
        case 'suaht':
            $id = $_GET['id'];
            $listht = loadone_hethong($id);
            include "hethong/update.php";
                break;
        case 'updateht':
            if(isset($_POST['btn-add'])){
                $id = $_POST['id'];
                $ten_ch = $_POST['ten_ch'];
                $sdt = $_POST['sdt'];
                $email_ch = $_POST['email_ch'];
                $diachi_ch = $_POST['diachi_ch'];
                if($ten_ch==""|| $sdt=="" ||$email_ch==""||$diachi_ch==""){
                    $thongbao ="Vui lòng nhập đủ dữ liệu !";
                    include "hethong/update.php";
                }
                else{
                    update_hethong($id,$ten_ch,$sdt,$email_ch,$diachi_ch);
                    $thongbao ="Thêm thành công";
                    $listht = loadall_hethong();
                    include "hethong/list.php";
                }
            }
            break;
        case 'xoaht':
            $id = $_GET['id'];
            delete_hethong($id);
            $listht = loadall_hethong();
            include "hethong/list.php";
            break;
        case 'adduser':
            $listcv = loadall_chucvu();
            if(isset($_POST['btn-add'])){
                $ten_user = $_POST['ten_user'];
                $username = $_POST['username'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                $sdt = $_POST['sdt'];
                $role = $_POST['role'];
                $trangthai_user = $_POST['trangthai_user'];
                $trangthai_user = "Hoạt động";
                if($ten_user==""||$sdt=="" ||$email==""||$diachi=="" || $username ==""||$pass==""){
                    $thongbao ="Vui lòng nhập đủ dữ liệu !";
                }
                else{
                    insert_user($ten_user,$username,$pass,$email,$diachi,$sdt,$role,$trangthai_user);
                    $thongbao ="Thêm thành công";
                }
            }
            include "nguoidung/add.php";
            break;
        case 'listuser':
            $listcv = loadall_chucvu();
            $listuser = loadall_user();
                    include "nguoidung/list.php";
                    break;
        case 'xoauser':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_user($_GET['id']);
            }

            $listuser = loadall_user();
            $listuser = loadall_user();
                    include "nguoidung/list.php";
                    break;
            case 'suauser':
                $id = $_GET['id'];
                $listuser = loadone_user($id);
                $listcv = loadall_chucvu();
                include "nguoidung/update.php";
                break;
            case 'updateuser':
                if(isset($_POST['btn-add'])){
                    $id = $_POST['id'];
                    $ten_user = $_POST['ten_user'];
                    $username = $_POST['username'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $diachi = $_POST['diachi'];
                    $sdt = $_POST['sdt'];
                    $role = $_POST['role'];
                    $trangthai_user = "Hoạt động";
                    if($ten_user==""||$sdt=="" ||$email==""||$diachi=="" || $username ==""||$pass==""){
                        $thongbao ="Vui lòng nhập đủ dữ liệu !";
                    }
                    else{
                        update_user($id,$ten_user,$username,$pass,$email,$diachi,$sdt,$role,$trangthai_user);
                        $thongbao ="Thêm thành công";
                        $listuser = loadall_user();
                    }
                }

                    include "nguoidung/list.php";
                    break;
        case 'listbv':
            $listbv = loadall_baiviet();
                include "baiviet/list.php";
            break;
        case 'addbv':
            if(isset($_POST['btn-add'])){
                $tieude = $_POST['tieude'];
                $noidung_bv = $_POST['noidung_bv'];
                $trangthai_bv = $_POST['trangthai_bv'];
                if($tieude==""|| $noidung_bv=="" ||$trangthai_bv==""){
                    $thongbao ="Vui lòng nhập đủ dữ liệu !";
                }
                else{
                    insert_baiviet($tieude,$noidung_bv,$trangthai_bv);
                    $thongbao ="Thêm thành công";
                }
            }
            include "baiviet/add.php";
            break;
        case 'xoabv':
                $id = $_GET['id'];
                delete_baiviet($id);
                $listbv = loadall_baiviet();
                include "baiviet/list.php";
            break;
        case 'suabv':
                $id = $_GET['id'];
                $listbv = loadone_baiviet($id);
                include "baiviet/update.php";
                break;
        case 'updatebv':
            if(isset($_POST['btn-update'])){
                $id = $_POST['id'];
                $tieude = $_POST['tieude'];
                $noidung_bv = $_POST['noidung_bv'];
                $trangthai_bv = $_POST['trangthai_bv'];
                if($tieude==""|| $noidung_bv=="" ||$trangthai_bv==""){
                    $thongbao ="Vui lòng nhập đủ dữ liệu !";
                }
                else{
                    update_baiviet($id,$tieude,$noidung_bv,$trangthai_bv);
                    $thongbao ="Thêm thành công";
                }
            }
            $listbv = loadall_baiviet();
            include "baiviet/list.php";
            break;
        case 'listbl':
            $listbl = loadall_binhluan();
                include "binhluan/list.php";
            break;
            case 'xoabl':
                $id = $_GET['id'];
                delete_binhluan($id);
                $listbl = loadall_binhluan();
                include "binhluan/list.php";
            break;
        case 'listdh':
            $listdh = loadall_dh();
            include "donhang/list.php";
            break;
        case 'suadh':
            $id = $_GET['id'];
            $listdh = loadone_dh($id);
            include "donhang/update.php";
            break;
        case 'updatett':
            if(isset($_POST['btn-add'])){
                $id = $_POST['id'];
                $trangthai_dh = $_POST['trangthai_dh'];
              update_dh($id,$trangthai_dh);
                }
                $listdh=loadall_dh();
            include "donhang/list.php";
            break;
        case 'xoadh':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_dh($_GET['id']);
                }
    
                if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                    $kyw = $_POST['kyw'];
                } else {
                    $kyw = "";
                }
                $listdh = loadall_dh($kyw, 0);
                include "donhang/list.php";
                break;
        case 'ctdh':
            $id = $_GET['id'];
            $listctdh = loadone_ctdh($id);
            include "chitietdonhang/list.php";
            break;
        case 'addcv':
            if(isset($_POST['btn-add'])){
                $ten_cv = $_POST['ten_cv'];
                $mota_cv = $_POST['mota_cv'];
                $trangthai_cv = $_POST['trangthai_cv'];
                if($ten_cv==""|| $mota_cv=="" ||$trangthai_cv==""){
                    $thongbao ="Vui lòng nhập đủ dữ liệu !";
                }
                else{
                    insert_chucvu($ten_cv,$mota_cv,$trangthai_cv);
                    $thongbao ="Thêm thành công";
                }
            }
            include "phanquyen/add.php";
            break;
        case 'listcv':
                $listcv= loadall_chucvu();
                include "phanquyen/list.php";
            break;
        case 'xoacv':
                  $id = $_GET['id'];
                delete_chucvu($id);
                $listcv = loadall_chucvu();
                include "phanquyen/list.php";
            break;
        case 'suacv':
            $id = $_GET['id'];
            $listcv = loadone_chucvu($id);
            include "phanquyen/update.php";
            break;
        case 'updatecv':
            if(isset($_POST['btn-add'])){
                $id= $_POST['id'];
                $ten_cv = $_POST['ten_cv'];
                $mota_cv = $_POST['mota_cv'];
                $trangthai_cv = $_POST['trangthai_cv'];
                if($ten_cv==""|| $mota_cv=="" ||$trangthai_cv==""){
                    $thongbao ="Vui lòng nhập đủ dữ liệu !";
                }
                else{
                    update_chucvu($id,$ten_cv,$mota_cv,$trangthai_cv);
                    $listcv= loadall_chucvu();
                    include "phanquyen/list.php";
                }
            }
            break;
        case 'listlh':
                $listlh = loadall_lienhe();
                include "lienhe/list.php";
                break;
        case 'xoalh':
            $id = $_GET['id'];
                delete_lienhe($id);
                $listlh = loadall_lienhe();
                include "lienhe/list.php";
            break;
        default:
            include "home.php";
            break;
    }
}
else{
    include "home.php";
}
include "footer.php";
?>