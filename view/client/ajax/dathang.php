<?php
        session_start();
      
        $servername = "localhost";
        $username = "root";
        $password = "";
        
        try {
          $conn = new PDO("mysql:host=$servername;dbname=du_an1", $username, $password);
          // set the PDO error mode to exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          echo "Connected successfully";
        } catch(PDOException $e) {
          echo "Connection failed: " . $e->getMessage();
        }
        // $sql = "INSERT INTO `tbl_donhang` (`id_sp`, `id_user`, `gia_dh`, `trangthai_dh`)
        //  VALUES ('1', '1', '2300000', 'sdfd')";
        //  $conn->exec($sql);
        // //  lấy id cuối của bản ghi trong bảng sql
        //  $last_id = $conn->lastInsertId();
        //  echo $last_id;
        $ngay_dat_hang = $_POST['ngay_dat_hang'];
        $ten_nguoinhan = $_POST['ten_nguoinhan'];
        $email_nguoinhan = $_POST['email_nguoinhan'];
        $diachi_nguoinhan = $_POST['diachi_nguoinhan'];
        $sdt_nguoinhan = $_POST['sdt_nguoinhan'];
        $id_km = $_POST['mgg'];
        $phuongthuc_tt = $_POST['pttt'];
        $gia_dh = $_POST['tongdh'];
        $sql="INSERT INTO `tbl_donhang` (`id_user`, `ten_nguoinhan`, `email_nguoinhan`, `sdt_nguoinhan`, `diachi_nguoinhan`, `id_km`, `gia_dh`, `ngay_dat_hang`, `phuongthuc_tt`, `trangthai_dh`)
         VALUES ('".$_SESSION['id']."', '".$ten_nguoinhan."', '".$email_nguoinhan."', '".$sdt_nguoinhan."', '".$diachi_nguoinhan."', '".$id_km."', '".$gia_dh."', '".$ngay_dat_hang."', '".$phuongthuc_tt."', 'Chờ xác nhận')";
        $conn->exec($sql);
        $last_id = $conn->lastInsertId();
         for ($i=0; $i < 10; $i++) { 
             if($_SESSION['cart'][$i]!=""){
                  $sql = "INSERT INTO `tbl_donhangchitiet` (`id_dh`, `id_sp`, `don_gia`, `so_luong`, `thanhtien`)
                   VALUES ('".$last_id."', '".$_SESSION['cart'][$i]['id']."', '".$_SESSION['cart'][$i]['gia_sp']."', '".$_SESSION['cart'][$i]['soluong_dh']."', '".$_SESSION['cart'][$i]['tien']."')";
                  $conn->exec($sql);
             }
         }
        unset($_SESSION['cart']);
        unset($_SESSION['tongdh']);
?>