<?php 
include_once './model/model_dienthoai.php';


    class dienthoai {
        function __construct(){
            $this->model = new model_dienthoai;
            $act = 'index';
            if (isset($_GET["act"]) == true ) {
                $act = $_GET["act"];
            }
            
            switch ($act) {
                case "index": $this->index();break;
                case "addnew": $this->addnew();break;
                case "store": $this->store(); break;
                case "edit": $this->edit(); break;
                case "update": $this->update(); break;
                case "editTT": $this->editTT(); break;
                case "updateTT": $this->updateTT(); break;
                case "delete": $this->delete(); break;
            }
        }
        function index(){
            $getList = $this->model->getList();
            $getCount = $this->model->getCount();
            $page_file = "../admin/view/admin/index.php";
            require_once "../admin/layout.php";
        }

        function addnew() {
            $idnsx = $this->model->getIdNSX();
              $page_title = "Thêm điện thoại";
              $page_file = "view/admin/addnew.php";
              require_once "layout.php";
          }
        function store(){
            if (isset($_POST['luu'])&&($_POST['luu'])) {
            $tendt = $_POST['ten_loai'];
            $gia = $_POST['gia'];
            $giakm = $_POST['giakm'];
            $img = $_FILES['img']['name'];
            $pathimg =  "../upload/";
            $target_file = $pathimg . basename($img);
            if(move_uploaded_file($_FILES['img']['tmp_name'], $target_file)){
                $err_upload = "Upload thành công!";
            }else{
                $err_upload = "";
            }
    
            $thoidiemnhap = $_POST['thoidiemnhap'];
            $mota = $_POST['mota'];
            $solanxem = $_POST['solanxem'];
            $solanmua = $_POST['solanmua'];
            $hot = $_POST['hot'];
            $idnsx = $_POST['idnsx'];
            $anhien = $_POST['anhien'];
            $soluongtonkho = $_POST['soluongtonkho'];
            $row = $this->model->addNew($tendt, $gia, $giakm, $img, $thoidiemnhap, $mota, $solanxem, $solanmua, $hot, $idnsx, $anhien, $soluongtonkho);
            header("location: index.php?ctrl=dienthoai");  
            } 
        }
        function edit(){
            $idDT = $_GET['idDT'];
            $row = $this->model->detailrecord($idDT);
            $idnsx = $this->model->getIdNSX();
            $page_title = "Cập nhật điện thoại";
            $page_file = "view/admin/edit.php";
            require_once "layout.php";
          }
          function editTT(){
            $idDT = $_GET['idDT'];
            $row = $this->model->detailTT($idDT);
            $page_title = "Cập nhật thuộc tính";
            $page_file = "view/admin/editTT.php";
            require_once "layout.php";
          }
          function update(){
            if (isset($_POST['nutsave'])&&($_POST['nutsave'])) {
                $idDT = $_POST['ma_loai'];
                $row = $this->model->detailrecord($idDT);
                $tendt = $_POST['ten_loai'];
                $gia = $_POST['gia'];
                $giakm = $_POST['giakm'];
                if ($_FILES['img']['name'] == null) {
                    $img = $row['urlHinh'];
                }else{
                  $img = $_FILES['img']['name'];
                  $pathimg =  "../upload/";
                  $target_file = $pathimg . basename($img);
                  move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
                }
              $thoidiemnhap = $_POST['thoidiemnhap'];
              $mota = $_POST['mota'];
              $solanxem = $_POST['solanxem'];
              $solanmua = $_POST['solanmua'];
              $hot = $_POST['hot'];
              $idnsx = $_POST['idnsx'];
              $anhien = $_POST['anhien'];
              $soluongtonkho = $_POST['soluongtonkho'];
              $ma_loai = $_POST['ma_loai'];
              $row = $this->model->capnhat($ma_loai, $tendt, $gia, $giakm, $img, $thoidiemnhap, $mota, $solanxem, $solanmua, $hot, $idnsx, $anhien, $soluongtonkho);
             header("location: index.php?ctrl=dienthoai");  
            }
          }
          function updateTT(){
            if (isset($_POST['nutsaveTT'])&&($_POST['nutsaveTT'])) {
            $manHinh = $_POST['manHinh'];
            $heDieuHanh = $_POST['heDieuHanh'];
            $cameraSau = $_POST['cameraSau'];
              $cameraTruoc = $_POST['cameraTruoc'];
              $CPU = $_POST['CPU'];
              $Ram = $_POST['Ram'];
              $boNhoTrong = $_POST['boNhoTrong'];
              $theNho = $_POST['theNho'];
              $theSim = $_POST['theSim'];
              $dungLuongPin = $_POST['dungLuongPin'];
              $ma_loai = $_POST['ma_loai'];
              $row = $this->model->capnhatTT($ma_loai, $manHinh, $heDieuHanh, $cameraSau, $cameraTruoc, $CPU, $Ram, $boNhoTrong, $theNho, $theSim, $dungLuongPin);
             header("location: index.php?ctrl=dienthoai");  
            }
          }
        function delete(){
            $idDT = $_GET['idDT'];
            settype($idDT, "int");
            $row = $this->model->delete($idDT);
            header("location: index.php?ctrl=dienthoai");
          }
    }             

?>