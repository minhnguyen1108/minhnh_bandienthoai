<?php 
include_once 'model/model_donhangchitiet.php';
    class donhangchitiet {
        function __construct(){
            $this->model = new model_donhangchitiet;
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
            $getdonhangct = $this->model->getdonhangct();
            $getCount = $this->model->getCount();
            $page_file = "../admin/view/admin/qldhct.php";
            require_once "../admin/layout.php";
        }
        function delete(){
            $idDHCT = $_GET['idDHCT'];
            settype($idDHCT, "int");
            $this->model->deleteDHCT($idDHCT);
            header("location: index.php?ctrl=donhangchitiet");
          }
    }             

?>