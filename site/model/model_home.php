<?php
require_once '../system/model_system.php';
class model_home extends model_system {
        function getList(){
            $sql = "SELECT * from dienthoai";
            $kq = $this->query($sql);
            return $kq;
        }
        function total(){
            $sql = "SELECT count(*) as total from dienthoai";
            $kq = $this->queryOne($sql);
            return $kq;
        }
        function getListHome($item_per_page, $offset){
            $sql = "SELECT * from dienthoai limit ".$item_per_page." offset ".$offset."";
            $kq = $this->query($sql);
            return $kq;
        }
        function getNSX(){
            $sql = "SELECT * from nhasanxuat ";
            $kq = $this->query($sql);
            return $kq;
        }
        function getSearch($info){
            $sql = "SELECT * from dienthoai where tenDT like '%$info%'";
            $kq = $this->query($sql);
            return $kq;
        }
        function getComment($getIdProduct){
            $sql = "SELECT binhluan.noiDungBl, binhluan.thoiDiemBL, users.userName  from binhluan inner join users on binhluan.idUser = users.idUser where binhluan.idDT = $getIdProduct";
            $kq = $this->query($sql);
            return $kq;
        }
        function comment($idUser, $comment, $idDT, $date){
            $sql = "INSERT INTO binhluan (noiDungBl, idDT, idUser, thoiDiemBL) VALUES ('$comment', '$idDT', '$idUser', '$date')";
            $kq = $this->execute($sql);
            return $kq;
        }
        function detail($id){
            $sql = "SELECT * from dienthoai where idDT = $id";
            $kq = $this->queryOne($sql);
            return $kq;
        }
        function getName(){
            $sql = "SELECT * from nhasanxuat";
            $kq = $this->query($sql);
            return $kq;
        }
        function getIdNSX($name){
            $sql = "SELECT idNSX from nhasanxuat where slug like '$name'";
            $kq = $this->queryOne($sql);
            return $kq;
        }
        function showAll(){
            $sql = "SELECT * from dienthoai";
            $kq = $this->query($sql);
            return $kq;
        }
        function getUser() {
            $sql="SELECT * from users ";
            $kq= $this->query($sql);
            return $kq;
        }
        function checkMail($email) {
            $sql="SELECT * from users where email like '$email%'";
            $kq= $this->queryOne($sql);
            return $kq;
        }
        function getProduct($getIdProduct){
            $sql = "SELECT dienthoai.idDT, dienthoai.soLanXem, dienthoai.soLanMua, dienthoai.moTa, dienthoai.tenDT, dienthoai.gia, dienthoai.giaKM, dienthoai.soLuongTonKho, dienthoai.urlHinh, nhasanxuat.tenNSX, nhasanxuat.idNSX from dienthoai, nhasanxuat where dienthoai.idDT = $getIdProduct and dienthoai.idNSX=nhasanxuat.idNSX";
            $kq = $this->query($sql);
            return $kq;
        }
        function getProductNSX($getIdNSX){
            $sql = "SELECT * from dienthoai where idNSX = $getIdNSX";
            $kq = $this->query($sql);
            return $kq;
        }
        function getThuocTinh($getIdProduct){
            $sql = "SELECT * from thuoctinhdt where idDT = $getIdProduct";
            $kq = $this->query($sql);
            return $kq;
        }
        function getSeller(){
            $sql = "SELECT * from dienthoai";
            $kq = $this->query($sql);
            return $kq;
        }
        function increView($getIdProduct, $soLanXem){
            $sql = "UPDATE dienthoai set soLanXem = '$soLanXem' where idDT =".$getIdProduct;
            $kq = $this->execute($sql);
            return $kq;
        }
        function increProduct($getIdProduct, $soLanMua, $soLuongTonKho){
            $sql = "UPDATE dienthoai set soLanMua = '$soLanMua', soLuongTonKho = '$soLuongTonKho' where idDT =".$getIdProduct;
            $kq = $this->execute($sql);
            return $kq;
        }
        function updatePass($id, $passNew){
            $sql = "UPDATE users set password = '$passNew' where idUser =".$id;
            $kq = $this->execute($sql);
            return $kq;
        }
        function addOrder($getDate ,$name,$email,$idUser,$diachi,$ghichu)
        {
            $sql = "INSERT INTO donhang (thoiDiemDatHang, idUser, tenNguoiNhan, emailNguoiNhan, diaChiNguoiNhan, ghiChuCuaKhach) VALUES ('$getDate', '$idUser','$name', '$email', '$diachi', '$ghichu')";
            $kq = $this->execute($sql);
            return $kq;
        }
        function getIdDH(){
            $sql = "SELECT idDH from donhang order by idDH desc limit 1";
            $kq = $this->queryOne($sql);
            return $kq;
        }
        function addDetail($idDH, $getIdProduct, $name, $amount, $gia)
        {
            $sql = "INSERT INTO donhangchitiet (idDH, idDT, tenDT, soLuong, gia) VALUES ('$idDH', '$getIdProduct', '$name', '$amount', '$gia')";
            $kq = $this->execute($sql);
            return $kq;
        }
        function formatMoney($number, $fractional=false) {  
            if ($fractional) {  
                $number = sprintf('%.2f', $number);  
            }  
            while (true) {  
                $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);  
                if ($replaced != $number) {  
                    $number = $replaced;  
                } else {  
                    break;  
                }  
            }  
            return $number;  
        }
    }

?>