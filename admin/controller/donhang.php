<?php 
include_once 'model/model_donhang.php';
    class donhang {
        function __construct(){
            $this->model = new model_donhang;
            $act = 'index';
            if (isset($_GET["act"]) == true ) {
                $act = $_GET["act"];
            }
            
            switch ($act) {
                case 'index':$this ->index();break;
                case 'add':$this ->add();break;
                case 'xacnhan':$this ->xacnhan();break;
                case 'delete':$this ->delete();break;
                
                
                default:
                    # code...
                    break;
            }
        }
        function index(){
            $getdonhang = $this->model->getdonhang();
            $getCount = $this->model->getCount();
            $page_file = "../admin/view/admin/qldh.php";
            require_once "../admin/layout.php";
        }
        function xacnhan(){
            $idDH = $_GET['idDH'];
            $tt =1;
            $this->model->updateTrangThai($idDH, $tt);
            header("location: index.php?ctrl=donhang");  
        }
        function delete(){
            $idDH = $_GET['idDH'];
            settype($idDH, "int");
            $this->model->deleteDH($idDH);
            $this->model->deleteDHCT($idDH);
            header("location: index.php?ctrl=donhang");
          }
        function add(){
            if (isset($_POST["submit"]) && $_POST["submit"]) {
                $img = $_FILES['img']['name'];
            $pathimg =  "../upload/";
            $target_file = $pathimg . basename($img);
            if(move_uploaded_file($_FILES['img']['tmp_name'], $target_file)){
                $err_upload = "Upload thành công!";
            }else{
                $err_upload = "";
            }
                $this->model->addProducer($_POST["tennsx"], $_POST["sttnsx"], $img);
            }
            $page_file = "../admin/view/admin/themnsx.php";
            require_once "../admin/layout.php";
        }
    }             

?>