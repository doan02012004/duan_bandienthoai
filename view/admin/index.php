<?php
 include "header.php";

 include "boxleft.php";
if(isset($_GET['act']) && ($_GET['act']!="")){
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            include "danhmuc/add.php";
            break;
        case 'listdm':
                include "danhmuc/list.php";
                break;

        case 'suadm':
                    include "danhmuc/update.php";
                    break;
        case 'listsp':
            include "sanpham/list.php";
        break;
        case 'addsp':
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