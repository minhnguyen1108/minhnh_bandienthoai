<?php 
    require_once '../system/model_system.php';
    class model_nhasanxuat extends model_system {
        function getNhasanxuat(){
            $sql="SELECT * from nhasanxuat ";
            $kq= $this->query($sql);
            return $kq;
        }
        function addProducer($name, $stt, $img){
            $sql = "INSERT INTO nhasanxuat (tenNSX, thuTu, urlHinh) VALUES ('$name', '$stt', '$img')";
            $kq= $this->execute($sql);
            return $kq;
            
        }
    }
    
?>