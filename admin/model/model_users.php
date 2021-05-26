<?php 
    require_once '../system/model_system.php';
    class model_users extends model_system {
        function getUsers(){
            $sql="SELECT * from users ";
            $kq= $this->query($sql);
            return $kq;
        }
        function addUser($userName, $password, $hoTen, $urlHinh, $vaiTro){
            $sql = "INSERT INTO users (userName, password, hoTen, urlHinh, vaiTro) VALUES ('$userName', '$password', '$hoTen', '$urlHinh', '$vaiTro')";
            $kq= $this->execute($sql);
            return $kq;
            
        }
    }
    
?>