<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
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
        case 'suasp':
            include "sanpham/update.php";
            break;
        case 'addkm':
                include "khuyenmai/add.php";
                break;
        case 'listkm':
            include "khuyenmai/list.php";
            break;
        case 'suakm':
            include "khuyenmai/update.php";
            break;
        case 'addht':
            include "hethong/add.php";
            break;
        case 'listht':
            include "hethong/list.php";
            break;
        case 'suaht':
            include "hethong/update.php";
                break;
        case 'listuser':
                    include "nguoidung/list.php";
                    break;
        case 'listbv':
                include "baiviet/list.php";
            break;
        case 'addbv':
                include "baiviet/add.php";
            break;
        case 'listbl':
                include "binhluan/list.php";
            break;
        case 'listdh':
                include "donhang/list.php";
            break;
        case 'addpq':
                include "phanquyen/add.php";
            break;
        case 'listpq':
                include "phanquyen/list.php";
            break;
        case 'suapq':
                include "phanquyen/update.php";
            break;
        case 'listctdh':
            include "chitietdonhang/list.php";
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