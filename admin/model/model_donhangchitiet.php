<?php 
    require_once '../system/model_system.php';
    class model_donhangchitiet extends model_system {
        function getdonhangct(){
            $sql = "SELECT * from donhangchitiet LIMIT 0,4";
            $kq = $this->query($sql);
            return $kq;
        }
        function getCount(){
            $sql = "SELECT COUNT(idDH) as soluongsp from donhang";
            $kq = $this->query($sql);
            return $kq;
        }
        function getIdNSX(){
           $sql = "SELECT * from nhasanxuat";
           $kq = $this->query($sql);
           return $kq;
       }
        function delete($idDT){
           $sql = "delete from dienthoai where idDT = ".$idDT;
           $kq = $this->execute($sql);
           return $kq;
       }
       function addNew($tendt, $gia, $giakm, $img, $thoidiemnhap, $mota, $solanxem, $solanmua, $hot, $idnsx, $anhien, $soluongtonkho){
           $sql = "INSERT INTO dienthoai (tenDT, gia, giaKM, urlHinh, thoiDiemNhap, moTa, soLanXem, soLanMua, hot, idNSX, anHien, soLuongTonKho) VALUES ('$tendt', '$gia', '$giakm', '$img', '$thoidiemnhap', '$mota', '$solanxem', '$solanmua', '$hot', '$idnsx', '$anhien', '$soluongtonkho')";
           $kq = $this->execute($sql);
           return $kq;
       }
       function detailrecord($idDT){
           $sql = "select * from dienthoai where idDT =".$idDT;
           $kq = $this->queryOne($sql);
           return $kq;
       }
       function detailTT($idDT){
        $sql = "select * from thuoctinhdt where idDT =".$idDT;
        $kq = $this->queryOne($sql);
        return $kq;
    }
       function capnhat($ma_loai, $tendt, $gia, $giakm, $img, $thoidiemnhap, $mota, $solanxem, $solanmua, $hot, $idnsx, $anhien, $soluongtonkho){
           $sql = "UPDATE dienthoai set tenDT = '$tendt', gia = '$gia', giaKM = '$giakm', urlHinh = '$img', thoiDiemNhap = '$thoidiemnhap', moTa = '$mota', soLanXem = '$solanxem', soLanMua = '$solanmua', hot = '$hot', idNSX = '$idnsx', anHien = '$anhien', soLuongTonKho = '$soluongtonkho' where idDT =".$ma_loai;
           $kq = $this->execute($sql);
           return $kq;
       }
       function updateTrangThai($idDH, $tt){
        $sql = "UPDATE donhang set trangThai = '$tt' where idDH =".$idDH;
        $kq = $this->execute($sql);
        return $kq;
    }
    function deleteDH($idDH){
        $sql = "delete from donhang where idDH = ".$idDH;
        $kq = $this->execute($sql);
        return $kq;
    }
    function deleteDHCT($idDHCT){
        $sql = "delete from donhangchitiet where idCT = ".$idDHCT;
        $kq = $this->execute($sql);
        return $kq;
    }
       function capnhatTT($ma_loai, $manHinh, $heDieuHanh, $cameraSau, $cameraTruoc, $CPU, $Ram, $boNhoTrong, $theNho, $theSim, $dungLuongPin){
        $sql = "UPDATE thuoctinhdt set manHinh = '$manHinh', heDieuHanh = '$heDieuHanh', cameraSau = '$cameraSau', cameraTruoc = '$cameraTruoc', CPU = '$CPU', Ram = '$Ram', boNhoTrong = '$boNhoTrong', theNho = '$theNho', theSim = '$theSim', dungLuongPin = '$dungLuongPin' where idDT =".$ma_loai;
        $kq = $this->execute($sql);
        return $kq;
    }
    }
    
?>