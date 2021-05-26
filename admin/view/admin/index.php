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

                            <table class="footable table table-stripped toggle-arrow-tiny hide_data" data-page-size="15" width="100%" >
                                <thead>
                                <tr>
                                    <th data-toggle="true" width=10%>Tên sản phẩm </th>
                                    <?php 
                                        foreach ($getCount as $soluongsp) {
                                            $count =  $soluongsp[0];
                                        }
                                    ?>
                                    <th data-hide="phone" width=19% >Giá </th>
                                    <th data-hide="all" width="5%" >Hình ảnh</th>
                                    <th data-hide="phone"  width="9%">Thời điểm nhập</th>
                                    <th data-hide="phone"  width="44%">Mô tả</th>
                                    <th data-hide="phone"  width="13%">Tương tác</th>
                                    <th data-hide="phone"  width="7%">Nhà sản xuất</th>
                                    <th data-hide="phone"  width="7%">Ẩn/Hiện</th>
                                    <th class="text-right" data-sort-ignore="true">Action</th>

                                </tr>
                                </thead>
                                <div class="append"></div>
                                <tbody width="100%">
                                    <?php 
                                        foreach ($getList as $list) {
                                            if($list['anHien'] == 1){
                                                $a = "Hiện";
                                            } else{$a="Ẩn";}
                                            if($list['hot'] == 1){
                                                $b = "hot";
                                            }else{
                                                $b = "không";
                                            }
                                            echo '<tr>
                                            <td style="line-height:50px;">
                                               '.$list["tenDT"].'
                                            </td>
                                            <td style="line-height:50px;">
                                                <div class="row" style="margin: 0 auto;"><b>Giá</b>: '.$list["gia"].'đ</div>
                                                <div class="row" style="margin: 0 auto;"><b>Khuyến mãi</b>: '.$list["giaKM"].'đ</div>
                                            </td>
                                             <td style="line-height:100px;">
                                            <img src="../upload/'.$list["urlHinh"].'" alt="" width="55px" height="70px">
                                            </td>
                                            <td><div class="row" style="margin: 0 auto; padding-top: 40px;">'.$list["thoiDiemNhap"].'</div> </td>
                                            <td><div class="row" style="margin: 0 auto;">'.$list["moTa"].'</div></td>
                                            <td><div class="row" style="margin: 0 auto;">
                                                <b>Số lần xem</b>: '.$list["soLanXem"].'</div>
                                                <div class="row" style="margin: 0 auto;">
                                                <b>Số lần mua</b>: '.$list["soLanMua"].'</div>
                                                <div class="row" style="margin: 0 auto;">
                                                <b>Tồn kho</b>: '.$list["soLuongTonKho"].'</div>
                                                <div class="row" style="margin: 0 auto;">
                                                <b>Hot</b>: '.$b.'</div>
                                            </td>
                                            <td><div class="row" style="margin-left: 20px">
                                                '.$list["tenNSX"].'</div>
                                            </td>
                                            <td><div class="row" style="margin-left: 20px">
                                                '.$a.'</div>
                                            </td>
                                            <td class="text-right" style="line-height:150px;">
                                                 <div class="btn-group">
                                                 <button class="btn-white btn btn-xs"><a href="index.php?ctrl=dienthoai&act=edit&idDT='.$list["idDT"].'">Edit</a></button>
                                                 <button class="btn-white btn btn-xs"><a href="index.php?ctrl=dienthoai&act=editTT&idDT='.$list["idDT"].'">EditTT</a></button>
                                                 <button class="btn-white btn btn-xs"><a href="index.php?ctrl=dienthoai&act=delete&idDT='.$list["idDT"].'">Delete</a></button>
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
                       <div class="row justify-content-center " style="margin-left: -150px; margin-top: 20px">
                                    
                                    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                    <nav aria-label="Page navigation example">
  <ul class="pagination phantrang">
    <li class="page-item">
      <a class="page-link pre " href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
   
   
   <?php
   $totalPage = floor($count / 5); 

   for ($i=1; $i <= $totalPage + 1; $i++) { 
    echo ' <li class="page-item"><a class="page-link click" id="'.$i.'" href="#"  data-id="'.$i.'"> '.$i.'</a></li>';
 }

   ?>
  

    <li class="page-item">
      <a class="page-link after" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
                                    </div>
                                    
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
        <script>
        var body = document.body; // For Safari
        var html = document.documentElement; // Chrome, Firefox, IE and Opera places the overflow at the html level, unless else is specified. Therefore, we use the documentElement property for these browsers
        body.scrollLeft += 130;
        body.scrollTop += 110;
        html.scrollLeft += 130;
        html.scrollTop += 110;
            $('.click').click(function() {
                $(body).height(400);
                $('.hide_data').hide();
                var count =  $(this).attr("data-id");
                $.post("../admin/view/admin/modelne.php", {
                count : count
            },
            function(data) {
                $(".append").html(data);
            }
        );
    }
   

);
        </script>