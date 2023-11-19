<?php
            function loadall_donhangchitiet(){
                $sql = "SELECT * FROM `tbl_donhangchitiet` order by id desc";
                $listdhct = pdo_query($sql);
                return $listdhct;
             }
?>