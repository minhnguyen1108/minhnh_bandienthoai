<?php
    require_once "model/model_home.php";
    class home {
        function __construct() {
            $this->model = new model_home();
            $act = "index";
            if (isset($_GET["act"]) && $_GET["act"]) {
                $act = $_GET["act"];
            }
            switch ($act) {
                case 'index': $this->home(); break;
                case 'detail': $this->detail(); break;
                case 'list': $this->list(); break;
                case 'cart': $this->cart(); break;
                case 'order': $this->order(); break;
                case 'cartView': $this->cartView(); break;
                case 'thanks': $this->thanks(); break;
                case 'login': $this->login(); break;
                case 'logout': $this->logout(); break;
                case 'search': $this->search(); break;
                case 'xulydangnhap': $this->xulydangnhap(); break;
                case 'changepass': $this->changepass(); break;
                case 'sendMail': $this->sendMail(); break;
                case 'xulyquenpass': $this->xulyquenpass(); break;
                case 'quenpass': $this->quenpass(); break;
                case 'sendMailPass': $this->sendMailPass(); break;
                case 'logintobuy': $this->logintobuy(); break;
            }
        }
            function home(){
                $getList = $this->model->getList();
                $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:4;
                $current_page = !empty($_GET['page'])?$_GET['page']:1;
                $offset = ($current_page - 1) * 4;
                $getListHome = $this->model->getListHome($item_per_page, $offset);
                $total = $this->model->total();
                $total = $total['total'];
                settype($total, "integer");
                $total_page = ceil($total / $item_per_page);
                // var_dump($total_page); exit();
                $getNSX = $this->model->getNSX();
                $getSeller = $this->model->getSeller();
                $page_file = "../site/view/home.php";
                include_once "../site/layout.php";
            }
            function search(){
                if (isset($_POST['search'])&&($_POST['search'])) {
                    $info = $_POST['info'];
                    $getName = $this->model->getName();
                    $getSearch = $this->model->getSearch($info);
                    $page_file = "../site/view/search.php";
                    include_once "../site/layout.php";
                }
            }
            function detail(){
                $getIdProduct = $_GET["id"];
                $getProduct = $this->model->getProduct($getIdProduct);
                $getThuocTinh = $this->model->getThuocTinh($getIdProduct);
                foreach ($getProduct as $product) {
                    $getIdProduct = $product['idDT'];
                    $tenNSX = $product['tenNSX'];
                    $idNSX = $product['idNSX'];
                    $tenDT = $product['tenDT'];
                    $urlHinh = $product['urlHinh'];
                    $soLanXem = $product['soLanXem'];
                    $soLanMua = $product['soLanMua'];
                    $giaKhuyenMai = $this->model->formatMoney($product['giaKM']);
                    $gia = $this->model->formatMoney($product['gia']);
                    $moTa = $product['moTa'];
                    $soLanXem = $product['soLanXem'] + 1;
                    $this->model->increView($getIdProduct, $soLanXem);
                }
                foreach ($getThuocTinh as $thuoctinh) {
                    $manHinh = $thuoctinh['manHinh'];
                    $heDieuHanh = $thuoctinh['heDieuHanh'];
                    $cameraSau = $thuoctinh['cameraSau'];
                    $cameraTruoc = $thuoctinh['cameraTruoc'];
                    $CPU = $thuoctinh['CPU'];
                    $Ram = $thuoctinh['Ram'];
                    $boNhoTrong = $thuoctinh['boNhoTrong'];
                    $theNho = $thuoctinh['theNho'];
                    $theSim = $thuoctinh['theSim'];
                    $dungLuongPin = $thuoctinh['dungLuongPin'];
                }
                if (isset($_POST['comment'])&&($_POST['comment'])) {
                    $idUser = $_SESSION["id"];
                    $comment = $_POST['info'];
                    $idDT = $_GET['id'];
                    $date = date('Y/m/d');
                    $this->model->comment($idUser, $comment, $idDT, $date);
                }
                $getComment = $this->model->getComment($getIdProduct);
                $getSeller = $this->model->getSeller();
                $getComment = $this->model->getComment($getIdProduct);
                if (!isset($_SESSION['user'])) {
                    $warn = '<div class="alert alert-warning" role="alert">
                    Vui lòng đăng nhập để mua hàng!
                    </div>';
                   }
                $page_file = "../site/view/product-detail.php";
                include_once "../site/layout.php";
            }
            function list(){
                    $getNameNSX = $this->model->getNSX();
                    $id = $_GET['id'];
                    $getName = $this->model->getName();
                    $getProductNSX = $this->model->getProductNSX($id);
                
                
                $page_file = "../site/view/list.php";
                include_once "../site/layout.php";
            }
            function cart(){
                            //Tiếp nhậtn biến id (mã sản phẩm) và what (để biết thêm/xóa sp)
                $id = $_GET['id'];  settype($id, "int");        
                $what ="add"; if(isset($_GET['what'])) $what = $_GET['what']; 
                if ($what=="add"){              
                    if (isset($_SESSION['giohang'])==false) $_SESSION['giohang']=[]; //tạo mảng rổng nếu chưa có
                    $spFromDB = $this->model->detail($id);  //if ($spFromDB==null) ...
                    // echo "<pre>"; print_r($spFromDB);
                    $spInCart = $_SESSION['giohang'][$id]; //['TenDT'=>'A','Amount'=>2]
                    if ($spInCart!=null) $soluong=$spInCart['Amount']+1;
                    else $soluong = 1;
                    $_SESSION['giohang'][$id]=[
                        'TenDT'=>$spFromDB['tenDT'],
                        'Gia'=>$spFromDB['gia'],
                        'UrlHinh'=>$spFromDB['urlHinh'],
                        'IdDT'=>$spFromDB['idDT'],
                        'SoLuongTonKho'=>$spFromDB['soLuongTonKho'],
                        'Amount' =>$soluong,
                    ];
                }//if what=="add" 
                if ($what == "down") {
                    $_SESSION['giohang'][$id]['Amount']--;
                    if ($_SESSION['giohang'][$id]['Amount'] <= 0) {
                        unset($_SESSION['giohang'][$id]);
                        $slsptronggio = 0;
                        foreach($_SESSION['giohang'] as $idProduct => $sp) {
                            $slsptronggio++;
                        }
                        if($slsptronggio == 0) {
                            unset($_SESSION['giohang']);
                        }
                    }
                }
                if ($what=="remove"){
                    unset($_SESSION['giohang'][$id]);
                    echo "<pre>"; print_r($_SESSION['giohang']);
               }//$what=="remove"
               header("location: gio-hang");
            }
            function order(){
                $name = $_POST['ten'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                $ghichu = $_POST['ghichu'];
                $idUser = $_SESSION['id'];
                $getDate = date('Y/m/d');
                $this->model->addOrder($getDate ,$name,$email,$idUser,$diachi,$ghichu);
                foreach ($_SESSION['giohang'] as $idProduct => $p) {
                $getIdProduct =$_SESSION['giohang'][$p['IdDT']]['IdDT'];
                $a = $this->model->getIdDH();
                $idDH = $a['idDH'];
                $getIdProduct =$_SESSION['giohang'][$p['IdDT']]['IdDT'];
                $name = $p['TenDT'];
                $amount = $p['Amount'];
                $gia = $p['Gia'];
                $this->model->addDetail($idDH, $getIdProduct, $name, $amount, $gia);
                $getProduct = $this->model->getProduct($getIdProduct);
                foreach ($getProduct as $product) {
                    $getIdProduct = $product['idDT'];
                    $soLanMua = $product['soLanMua'] + 1;
                    $soLuongTonKho = $product['soLuongTonKho']-$p['Amount'];
                    if ($soLuongTonKho <= 0) {
                        $soLuongTonKho = 0;
                    }
                    $this->model->increProduct($getIdProduct, $soLanMua, $soLuongTonKho);
                }
                }
                $this->sendMail($email);
                unset($_SESSION['giohang']);
                header("location: gio-hang/thanh-toan");
            }
            function cartView(){
               
                $page_file = "../site/view/cart.php";
                include_once "../site/layout.php";
            }
            function thanks(){
               
                $page_file = "../site/view/thanks.php";
                include_once "../site/layout.php";
            }
            function login(){
                
                $page_file = "../site/view/login.php";
                include_once "../site/layout.php";
            }
            function logout(){
                unset($_SESSION['user']);
                $page_file = "../site/view/login.php";
                include_once "../site/layout.php";
            }
            function quenpass(){

                $page_file = "../site/view/quenpass.php";
                include_once "../site/layout.php";
            }
            function sendMail($email){
                require "PHPMailer-master/src/PHPMailer.php";  //nhúng thư viện vào để dùng, sửa lại đường dẫn cho đúng nếu bạn lưu vào chỗ khác
                require "PHPMailer-master/src/SMTP.php"; //nhúng thư viện vào để dùng
                require 'PHPMailer-master/src/Exception.php'; //nhúng thư viện vào để dùng
                $mail = new PHPMailer\PHPMailer\PHPMailer(true);  //true: enables exceptions
                  try {
                      $mail->SMTPDebug = 0;  // 0,1,2: chế độ debug. khi mọi cấu hình đều tớt thì chỉnh lại 0 nhé
                      $mail->isSMTP();  
                      $mail->CharSet  = "utf-8";
                      $mail->Host = 'smtp.gmail.com';  //SMTP servers
                      $mail->SMTPAuth = true; // Enable authentication
                  $nguoigui = 'nguyenhuynhminh11082k1@gmail.com';
                  $matkhau = 'nguyenhuynhminh11082001';
                  $tennguoigui = 'Minh';
                      $mail->Username = $nguoigui; // SMTP username
                      $mail->Password = $matkhau;   // SMTP password
                      $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
                      $mail->Port = 465;  // port to connect to                
                      $mail->setFrom($nguoigui, $tennguoigui ); 
                      $to = $email;
                      $to_name = "Bạn";
                      
                      $mail->addAddress($to, $to_name); //mail và tên người nhận  
                      $mail->isHTML(true);  // Set email format to HTML
                      $mail->Subject = 'Gửi từ Minh';      
                      $noidungthu = "<b>Chào bạn!</b><br>Bạn đã đặt hàng thành công!" ;
                      $mail->Body = $noidungthu;
                      $mail->smtpConnect( array(
                          "ssl" => array(
                              "verify_peer" => false,
                              "verify_peer_name" => false,
                              "allow_self_signed" => true
                          )
                      ));
                      $mail->send();
                  } catch (Exception $e) {
                      echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
                  }
            }
            function sendMailPass($email, $passnew){
                require "PHPMailer-master/src/PHPMailer.php";  //nhúng thư viện vào để dùng, sửa lại đường dẫn cho đúng nếu bạn lưu vào chỗ khác
                require "PHPMailer-master/src/SMTP.php"; //nhúng thư viện vào để dùng
                require 'PHPMailer-master/src/Exception.php'; //nhúng thư viện vào để dùng
                $mail = new PHPMailer\PHPMailer\PHPMailer(true);  //true: enables exceptions
                  try {
                      $mail->SMTPDebug = 0;  // 0,1,2: chế độ debug. khi mọi cấu hình đều tớt thì chỉnh lại 0 nhé
                      $mail->isSMTP();  
                      $mail->CharSet  = "utf-8";
                      $mail->Host = 'smtp.gmail.com';  //SMTP servers
                      $mail->SMTPAuth = true; // Enable authentication
                  $nguoigui = 'nguyenhuynhminh11082k1@gmail.com';
                  $matkhau = 'nguyenhuynhminh11082001';
                  $tennguoigui = 'Minh';
                      $mail->Username = $nguoigui; // SMTP username
                      $mail->Password = $matkhau;   // SMTP password
                      $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
                      $mail->Port = 465;  // port to connect to                
                      $mail->setFrom($nguoigui, $tennguoigui ); 
                      $to = $email;
                      $to_name = "Bạn";
                      
                      $mail->addAddress($to, $to_name); //mail và tên người nhận  
                      $mail->isHTML(true);  // Set email format to HTML
                      $mail->Subject = 'Gửi từ Minh';      
                      $noidungthu = "<b>Chào bạn!</b><br>Đây là mật khẩu mới của bạn: ".$passnew."" ;
                      $mail->Body = $noidungthu;
                      $mail->smtpConnect( array(
                          "ssl" => array(
                              "verify_peer" => false,
                              "verify_peer_name" => false,
                              "allow_self_signed" => true
                          )
                      ));
                      $mail->send();
                  } catch (Exception $e) {
                      echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
                  }
            }
            function changepass(){
                if (isset($_POST["change"]) && $_POST["change"]) {
                    $name = $_POST["name"];
                    $pass = $_POST["passodd"];
                    $passNew = $_POST["passnew"];
                    $passNewA = $_POST["passnewa"];
                    $getUser = $this->model->getUser();
                foreach ($getUser as $user) {
                    if ($name == $user["userName"] && $pass == $user["password"]) {
                            if($passNew == $passNewA){
                                $id =$user['idUser'];
                                $this->model->updatePass($id, $passNew);
                                $warn = '<div class="alert alert-success" role="alert">
                                Đã thay đổi mật khẩu thành công!
                            </div>';
                            break;
                            }else if($passNew != $passNewA){
                                $warn = '<div class="alert alert-danger" role="alert">
                                Mật khẩu mới không khớp. Vui lòng nhập lại!
                                </div>';
                                break;
                            }
                        } if ($name != $user["userName"] || $pass != $user["password"]){
                            $warn = '<div class="alert alert-danger" role="alert">
                            Tài khoản hoặc mật khẩu không chính xác. Vui lòng nhập lại!
                          </div>';
                        }
                    
                }
            }
                $page_file = "../site/view/changepass.php";
                include_once "../site/layout.php";
            }
            function xulydangnhap(){
                if (isset($_POST["submit"]) && $_POST["submit"]) {
                    $name = $_POST["name"];
                    $pass = $_POST["password"];
                    $getUser = $this->model->getUser();
                foreach ($getUser as $user) {
                    if ($name == $user["userName"] && $pass == $user["password"] && $user["vaiTro"] == 1) {
                        $_SESSION["user"] = $user["userName"];
                        $_SESSION["id"] = $user["idUser"];
                        header("location:../admin/index.php");
                        }
                  
                        else if ($name == $user["userName"] && $pass == $user["password"] && $user["vaiTro"] == 0) {
                            $_SESSION["user"] = $user["userName"];
                            $_SESSION["id"] = $user["idUser"];
                            header("location: ../site/trang-chu");
                        }
                        else if ($name != $user["userName"] || $pass != $user["password"] ){
                            $warn = '<div class="alert alert-danger" role="alert">
                            Tài khoản hoặc mật khẩu không chính xác. Vui lòng nhập lại!
                          </div>';
                        }
                    
                }
            }
                $page_file = "../site/view/login.php";
                include_once "../site/layout.php";
            }
            function xulyquenpass(){
                if (isset($_POST["change"]) && $_POST["change"]) {
                    $email = $_POST["name"];
                    if($email == NULL){
                        $warn = '<div class="alert alert-danger" role="alert">
                        Vui lòng nhập gmail!
                    </div>';
                    }
                    $field = filter_var($email, FILTER_SANITIZE_EMAIL);
                        if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
                            $getUser = $this->model->getUser();
                            foreach ($getUser as $user) {   
                                    $check = $this->model->checkMail($email);
                                    // print_r($check);
                                    if (is_array($check)) {
                                        $id = $check['idUser'];
                                        $passnew = rand(0,9999);
                                        $this->sendMailPass($email, $passnew);
                                        $this->model->updatePass($id, $passnew);
                                        $warn = '<div class="alert alert-success" role="alert">
                                            Đã thay đổi mật khẩu. Vui lòng kiểm tra mail!
                                        </div>';
                                        break;
                                    }else{
                                        $warn = '<div class="alert alert-danger" role="alert">
                                            Mail không tồn tại!
                                        </div>';
                                        break;
                                    }
                                }
                            
                        } else {
                            $warn = '<div class="alert alert-danger" role="alert">
                                Vui lòng kiểm tra lại gmail đã nhập!
                            </div>';
                        }
            }
                $page_file = "../site/view/quenpass.php";
                include_once "../site/layout.php";
            }
        
    }
?>