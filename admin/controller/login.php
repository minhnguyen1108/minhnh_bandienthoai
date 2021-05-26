<?php 

include_once './model/model_login.php';

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

    class login {
        function __construct(){
            $this->model = new model_login;
            $act = "index";
            if (isset($_GET["act"]) == true ) {
                $act = $_GET["act"];
            }
            
            switch ($act) {
                case 'index':
                    $this ->index();
                    break;
                case 'login':
                    $this ->login();
                    break;   
                
                default:
                    # code...
                    break;
            }
        }
        function index(){ 
            require_once "../admin/view/admin/login.php";
        }
        function login(){ 
           
            $getAdmin = $this->model->getAdmin();
            foreach ($getAdmin as $admin) {
                if ($admin["userName"] == $_POST["user"] && $admin["password"] == $_POST["pass"]) {
                    header("location:../admin/index.php?ctrl=dienthoai");
                }
                else {
                    
                    require_once "../admin/view/admin/login.php";
                    
                }
            }
           
            
        }
    }             

?>