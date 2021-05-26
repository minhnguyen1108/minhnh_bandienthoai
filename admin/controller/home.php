<?php 
include_once './model/model_dienthoai.php';

// class model_nhasanxuat extends model_system {
//     function getList(){
//         $sql="SELECT * from dienthoai ";
//         $kq= $this->query($sql);
//         return $kq;
//     }
// }  $nhasanxuat = new model_nhasanxuat;

//     $getList = $nhasanxuat -> getList();
//     foreach ($getList as $list) {
//         echo $list["tenDT"];
//     }

    class home {
        function __construct(){
            $this->model = new model_dienthoai;
            $act = 'index';
            if (isset($_GET["act"]) == true ) {
                $act = $_GET["act"];
            }
            
            switch ($act) {
                case 'index':
                    $this ->index();
                    break;
                
                default:
                    # code...
                    break;
            }
        }
        function index(){
            $getList = $this->model->getList();
            $page_file = "../admin/view/admin/index.php";
            $_SESSION["test"] = "123";
            $_SESSION["admin15"] = "12";
            require_once "../admin/layout.php";
        }
    }             

?>