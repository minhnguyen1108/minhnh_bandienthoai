<div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome to INSPINIA+ Admin Theme.</span>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a class="dropdown-item float-left" href="profile.html">
                                    <img alt="image" class="rounded-circle" src="img/a7.jpg">
                                </a>
                                <div class="media-body">
                                    <small class="float-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a class="dropdown-item float-left" href="profile.html">
                                    <img alt="image" class="rounded-circle" src="img/a4.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="float-right text-navy">5h ago</small>
                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a class="dropdown-item float-left" href="profile.html">
                                    <img alt="image" class="rounded-circle" src="img/profile.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="float-right">23h ago</small>
                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="mailbox.html" class="dropdown-item">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html" class="dropdown-item">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="float-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a href="profile.html" class="dropdown-item">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="float-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a href="grid_options.html" class="dropdown-item">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="float-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html" class="dropdown-item">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="login.html">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Danh sách sản phẩm </h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="admin.php">Admin</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Danh sách sản phẩm </a>
                        </li>
                        
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>

        <div class="wrapper wrapper-content animated fadeInRight ecommerce">


          

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content" style="text-align:center">

                            <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15" width="100%" >
                                <thead>
                                <tr>

                                    <th data-toggle="true">Tên đăng nhập</th>
                                    <th data-hide="phone">Mật khẩu</th>
                                    <th data-hide="phone">Họ tên </th>
                                    <th data-hide="phone">Vai trò </th>
                                    <!-- <th data-hide="all" width="30%" >Hình ảnh</th> -->
                                    <th class="text-right" data-sort-ignore="true">Action</th>

                                </tr>
                                </thead>
                                
                                <tbody width="100%">
                                    <td></td>
                                    <?php 
                                        foreach ($getUsers as $list) {
                                            // $sale = $list["discount"];
                                            // $hot = $list["hot"];
                                            
                                            // if ($sale == 1) {
                                            //     $sttsale = "<td style='line-height:150px;'>
                                            //     <span class='label label-primary'>Có</span>
                                            // </td>";
                                            // }
                                            // else {
                                            //     $sttsale = "<td width='10%'> </td>";
                                            // }

                                            // if ($hot == 1) {
                                            //     $stthot = "<td style='line-height:150px;width='50px''>
                                            //     <span class='label label-primary'>Có</span>
                                            // </td>";
                                            // }
                                            // else {
                                            //     $stthot = "<td width='10%'> </td>";
                                            // }
                                            // ------------------------- echo 
                                            // <td style="line-height:150px;">
                                            // '.$list["price_discount"].'
                                            // </td>
                                            
                                            
                                            
                                            // '.$stthot.'
                                            // '.$sttsale.'
                                            
                                            // <td class="text-right" style="line-height:150px;">
                                            //     <div class="btn-group">
                                            //         <button class="btn-white btn btn-xs" ><a href="admin.php?act=delete&id='.$list["id"].'">Delete</a></button>
                                            //         <button class="btn-white btn btn-xs"><a href="admin.php?act=edit&id='.$list["id"].'">Edit</a></button>
                                            //     </div>
                                            // </td>
                                            // ------------------ echo
                                            // <td width="30%" style="line-height:150px;">
                                            // <img src="../upload/'.$list["urlHinh"].'" alt="" width="40%" height="130px">
                                            // </td>
                                            echo '<tr>
                                            <td style="line-height:150px;">
                                               '.$list["userName"].'
                                            </td>
                                            <td style="line-height:150px;">
                                            '.$list["password"].'
                                            </td>
                                            <td style="line-height:150px;text-align: center">
                                            '.$list["hoTen"].'
                                             </td>
                                             <td style="line-height:150px;text-align: center">
                                             '.$list["vaiTro"].'
                                              </td>
                                        
                                            <td class="text-right" style="line-height:150px;">
                                                 <div class="btn-group">
                                                     <button class="btn-white btn btn-xs" ><a href="admin.php?act=delete&id="></a>Delete</a></button>
                                                    <button class="btn-white btn btn-xs"><a href="admin.php?act=edit&id=">Edit</a></button>
                                                 </div>
                                             </td>
                                        </tr>';
                                        }
                                    ?>
                                
                                


                                </tbody>
                                <tfoot>
                                
                                <tr>
                                    <td colspan="6">
                                        <ul class="pagination float-right">
                                            
                                        </ul>
                                        <tr>
                                    
                                </tr>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                            <h3>
                                <?php 
                                    if ($list == null) {
                                        echo "Hiện không có sản phẩm nào!";
                                    }
                                ?>
                            </h3>

                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="footer">
            <div class="float-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2018
            </div>
        </div>

        </div>
        