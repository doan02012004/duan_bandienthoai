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

         for ($i=0; $i < sizeof($_SESSION['cart']) ; $i++) { 
            $sql = "INSERT INTO `tbl_donhang` (`id_sp`, `id_user`, `gia_dh`, `trangthai_dh`)
            VALUES ('".$_SESSION['cart'][$i]['id']."', '".$_SESSION['id']."', '".$_SESSION['cart'][$i]['gia_sp']."', 'Chờ xác nhận')";
            $conn->exec($sql);
             $last_id = $conn->lastInsertId();
             $sql = "INSERT INTO `tbl_donhangchitiet` (`id_dh`, `soluong_dh`, `thanhtien`) VALUES ('".$last_id."', '".$_SESSION['cart'][$i]['soluong_dh']."', '".$_SESSION['cart'][$i]['tien']."')";
             $conn->exec($sql);
         }
        unset($_SESSION['cart']);
?>