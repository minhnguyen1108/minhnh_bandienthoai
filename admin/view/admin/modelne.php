<?php
    function getConnection(){
        $host ='localhost';
        $username='root';
        $password='';
        $options= array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        //tao doi tuong lop PDO
        $DBH = new PDO('mysql:host='.$host.';dbname=phone',$username,$password,$options);
        return $DBH;
    }
    function query($sql){
        $conn=getConnection();
        $result=$conn->query($sql);
        return $result;
    }
    function queryOne($sql){
        $conn=getConnection();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt-> fetch(); //lấy ra 1
    }
    function execute($sql){
        $conn=getConnection();
        $result=$conn->exec($sql);
        return $result;
    }
    function executeReturnID($sql)
    {
        $connect=getConnection();
        $connect->exec($sql);
        return $connect->lastInsertId();
    }
    $page = $_POST["count"];
    function getList($page){
        $numberPage = $page*4;
        $sql = "SELECT * from dienthoai, nhasanxuat where nhasanxuat.idNSX = dienthoai.idNSX LIMIT ".$numberPage.",4";
        $kq =query($sql);
        return $kq;
    }
    // foreach ($getCount as $soluongsp) {
    //     $count =  $soluongsp[0];
    // }
    $getList = getList($page-1);
    echo           '<div class="row">
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-content" style="text-align:center">

                <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15" width="100%" >
                    <thead>
                    <tr>
                        <th data-toggle="true" width=10%>Tên sản phẩm </th>';
                        
                            
                        
                       echo '<th data-hide="phone" width=19% >Giá </th>
                        <th data-hide="all" width="5%" >Hình ảnh</th>
                        <th data-hide="phone"  width="9%">Thời điểm nhập</th>
                        <th data-hide="phone"  width="44%">Mô tả</th>
                        <th data-hide="phone"  width="13%">Tương tác</th>
                        <th data-hide="phone"  width="7%">Nhà sản xuất</th>
                        <th data-hide="phone"  width="7%">Ẩn/Hiện</th>
                        <th class="text-right" data-sort-ignore="true">Action</th>

                    </tr>
                    </thead>
                    
                    <tbody width="100%">';
                       
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

                                     <button class="btn-white btn btn-xs"><a href="index.php?ctrl=dienthoai&act=delete&idDT='.$list["idDT"].'">Delete</a></button>
                                     </div>
                                 </td>
                            </tr>';
                            }
                     
                    
                    


                   echo  '</tbody>
                    <div class="append"></div>
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
                <h3>';
                  
                        if ($list == null) {
                            echo "Hiện không có sản phẩm nào!";
                        }
                  
               echo '</h3>

            </div>
           <div class="row ">
        
            <nav aria-label="Page navigation example">';
  

  

