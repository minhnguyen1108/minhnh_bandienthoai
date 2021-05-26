<?php 
include_once './model/model_nhasanxuat.php';
    class nhasanxuat {
        function __construct(){
            $this->model = new model_nhasanxuat;
            $act = 'index';
            if (isset($_GET["act"]) == true ) {
                $act = $_GET["act"];
            }
            
            switch ($act) {
                case 'index':
                    $this ->index();
                    break;
                case 'add':
                    $this ->add();
                    break;
                
                default:
                    # code...
                    break;
            }
        }
        function index(){
            $getNhasanxuat = $this->model->getNhasanxuat();
            $page_file = "../admin/view/admin/dsnsx.php";
            require_once "../admin/layout.php";
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