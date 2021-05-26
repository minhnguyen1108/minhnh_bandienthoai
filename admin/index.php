<?php
session_start();

    require_once("../system/config.php");
   define('ARR_CONTROLLER1', ["home","nhasanxuat", "dienthoai", "binhluan","users","donhang","donhangchitiet","errorpage", "login"]);
   $ctrl='dienthoai';
   if(isset($_GET['ctrl'])==true) $ctrl=$_GET['ctrl'];   
   if (in_array($ctrl,  ARR_CONTROLLER1)==false) die("Không tồn tại địa chỉ");
   $pathFile = "../admin/controller/".$ctrl.".php"; 
   if (file_exists($pathFile) ==true) {
    
       require_once $pathFile; 
       $controller = new $ctrl; 
   }
   else echo "Controller $ctrl không tồn tại";

 

 ?> 