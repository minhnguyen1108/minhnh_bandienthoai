<?php
    require_once "../system/model_system.php";
    class model_login extends model_system {
        function getAdmin() {
            $sql="SELECT * from users where vaiTro = 1 ";
            $kq= $this->query($sql);
            return $kq;
        }
    }

?>