<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Basic Form</title>

    <link href="../admin/view/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="../admin/view/admin/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../admin/view/admin/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="../admin/view/admin/css/animate.css" rel="stylesheet">
    <link href="../admin/view/admin/css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link href="../admin/view/admin/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea'
        });
    </script>
</head>

<body>

    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <img alt="image" class="rounded-circle" src="../upload/admin1.png"/>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold">
                            <?php 
                                // foreach ($dsuser as $users) {
                                //     if($users["user"] == "admin"){
                                //         echo $users["name"];
                                //     }
                                // }
                            ?>
                            </span>
                            <span class="text-muted text-xs block">Art Director <b class="caret"></b></span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a class="dropdown-item" href="index.php">Trang chủ</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="index.php?act=logout">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
               
                <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Điện thoại</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="index.php?ctrl=dienthoai&act=index">Danh sách điện thoại</a></li>
                            <li><a href="index.php?ctrl=dienthoai&act=addnew">Thêm Điện thoại  </a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Nhà sản xuất</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="index.php?ctrl=nhasanxuat&act=index">Danh sách nhà sản xuất</a></li>
                            <li><a href="index.php?ctrl=nhasanxuat&act=add">Thêm Nhà Sản xuất </a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Đơn hàng</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="index.php?ctrl=donhang&act=index">Danh sách đơn hàng</a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Chi tiết đơn hàng</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="index.php?ctrl=donhangchitiet&act=index">Danh sách chi tiết</a></li>
                            
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Users</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="index.php?ctrl=users&act=index">Danh sách User</a></li>
                            <li><a href="index.php?ctrl=users&act=add">Thêm User </a></li>
                            
                        </ul>
                    </li>
                
                <li>
                    <a href="index.php?ctrl=errorpage"><i class="fa fa-picture-o"></i> <span class="nav-label">Chart</span></a>
                   
                </li>
               
                <li>
                    <a href="view/admin/login.php"><i class="fa fa-magic"></i> <span class="nav-label">CSS Animations </span><span class="label label-info float-right">62</span></a>
                </li>
                <li class="landing_link">
                    <a target="_blank" href="admin.php?act=500"><i class="fa fa-star"></i> <span class="nav-label">Landing Page</span> <span class="label label-warning float-right">NEW</span></a>
                </li>
                <li class="special_link">
                    <a href="admin.php?act=500"><i class="fa fa-database"></i> <span class="nav-label"></span></a>
                </li>
            </ul>

        </div>
    </nav>
    <?php if (file_exists($page_file) == true) {
                       require_once $page_file;
                    }?>
<script src="../admin/view/admin/js/popper.min.js"></script>
    <script src="../admin/view/admin/js/bootstrap.js"></script>
<script src="../admin/view/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="../admin/view/admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="../admin/view/admin/js/inspinia.js"></script>
<script src="../admin/view/admin/js/plugins/pace/pace.min.js"></script>
    
    