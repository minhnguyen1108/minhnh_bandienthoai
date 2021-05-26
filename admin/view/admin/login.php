<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <link href="../admin/view/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="../admin/view/admin/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../admin/view/admin/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="../admin/view/admin/css/animate.css" rel="stylesheet">
    <link href="../admin/view/admin/css/style.css" rel="stylesheet">

    <link href="../admin/view/admin/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">


</head>

<body class="gray-bg">
    


    
    <html xmlns:fb = "http://www.facebook.com/2008/fbml">
    <div class="middle-box text-center loginscreen animated fadeInDown">
    
                            <div class="spiner-example">
                                <div class="sk-spinner sk-spinner-wave">
                                    <div class="sk-rect1"></div>
                                    <div class="sk-rect2"></div>
                                    <div class="sk-rect3"></div>
                                    <div class="sk-rect4"></div>
                                    <div class="sk-rect5"></div>
                                </div>
                            </div>
                      
        
        <div>
            
            <h3>Welcome to IN+</h3>
            <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Login in. To see it in action.</p>
            <form class="m-t" role="form" action="index.php?ctrl=login&act=login" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" required="" name="user">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="" name="pass">
                </div>
                <input type="submit"  name="submit" class="btn btn-primary block full-width m-b" >

                <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="index.php?act=regis">Create an account</a>
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>
    <div>
            </div>

    <!-- Mainly scripts -->
    
    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Tinycon -->
    <script src="js/plugins/tinycon/tinycon.min.js"></script>
    <script type="text/javascript">
function changeClass(){
    document.getElementById("ok").className = "spiner-example";
    }


    

</script>
</body>

</html>
