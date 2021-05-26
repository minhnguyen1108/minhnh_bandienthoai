<?php 
include_once './model/model_users.php';


    class users {
        function __construct(){
            $this->model = new model_users;
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
            $getUsers = $this->model->getUsers();
            $page_file = "../admin/view/admin/users.php";
            require_once "../admin/layout.php";
        }
        function add(){
            if (isset($_POST["submit"]) && $_POST["submit"]) {
                $this->model->addUser($_POST["name"], $_POST["pass"], $_POST["fullname"], $_POST["img"], $_POST["admin"]);
            }
            $page_file = "../admin/view/admin/themuser.php";
            require_once "../admin/layout.php";
        }
    }             

?>