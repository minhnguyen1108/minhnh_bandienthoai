 <!-- BREADCRUMBS SETCTION START -->
 <div class="breadcrumbs-section plr-200 mb-80">
            <div class="breadcrumbs overlay-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="breadcrumbs-inner">
                                <h1 class="breadcrumbs-title"><?= $tenDT?></h1>
                                <ul class="breadcrumb-list">
                                    <li><a href="index.php">Home</a></li>
                                    <li><?= $tenDT?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMBS SETCTION END -->

        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">

            <!-- SHOP SECTION START -->
            <div class="shop-section mb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <!-- single-product-area start -->
                            <div class="single-product-area mb-80">
                                <div class="row">
                                    <!-- imgs-zoom-area start -->
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <div class="imgs-zoom-area">
                                            <img id="zoom_03" src="../upload/<?= $urlHinh?>" data-zoom-image="" alt="">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div id="gallery_01" class="carousel-btn slick-arrow-3 mt-30">
                                                        <div class="p-c">
                                                            <a href="../upload/<?= $urlHinh?>" data-image="img/product/2.jpg" data-zoom-image="img/product/2.jpg">
                                                                <img class="zoom_03" src="../upload/<?= $urlHinh?>" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="p-c">
                                                            <a href="../upload/<?= $urlHinh?>" data-image="img/product/3.jpg" data-zoom-image="img/product/3.jpg">
                                                                <img class="zoom_03" src="../upload/<?= $urlHinh?>" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="p-c">
                                                            <a href="../upload/<?= $urlHinh?>" data-image="img/product/4.jpg" data-zoom-image="img/product/4.jpg">
                                                                <img class="zoom_03" src="../upload/<?= $urlHinh?>" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="p-c">
                                                            <a href="../upload/<?= $urlHinh?>" data-image="img/product/5.jpg" data-zoom-image="img/product/5.jpg">
                                                                <img class="zoom_03" src="../upload/<?= $urlHinh?>" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="p-c">
                                                            <a href="../upload/<?= $urlHinh?>" data-image="img/product/6.jpg" data-zoom-image="img/product/6.jpg">
                                                                <img class="zoom_03" src="../upload/<?= $urlHinh?>" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="p-c">
                                                            <a href="../upload/<?= $urlHinh?>" data-image="img/product/7.jpg" data-zoom-image="img/product/7.jpg">
                                                                <img class="zoom_03" src="img/product/7.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- imgs-zoom-area end -->
                                    <!-- single-product-info start -->
                                    <div class="col-md-7 col-sm-7 col-xs-12"> 
                                        <div class="single-product-info">
                                            <h3 class="text-black-1"><?=$tenDT?> </h3>
                                            <h6 class="brand-name-2"><?=$tenNSX?></h6>
                                            <!-- hr -->
                                            <hr>
                                            <!-- single-product-tab -->
                                            <div class="single-product-tab">
                                                <ul class="reviews-tab mb-20">
                                                    <li ><a href="#description" data-toggle="tab">Mô tả</a></li>
                                                    <li  class="active"><a href="#information" data-toggle="tab">Thông tin</a></li>
                                                    <li ><a href="#reviews" data-toggle="tab">Bình luận</a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div role="tabpanel" class="tab-pane " id="description">
                                                        <p><?= $moTa?></p>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane active" id="information">
                                                    <h3 class="ps-product__name"><?=$tenDT ?></h3>
                                                    <h5 class="ps-product__price"><?= $giaKhuyenMai?>VND <del><?=$gia ?>VND</del></h5>
                                                    <p><i class='fas fa-eye'></i> <?= $soLanXem?>   <i class='fas fa-chalkboard-teacher'></i><?= $soLanMua?></p>
                                                    <h4 class="ps-product__name">Thông số kỹ thuật</h4>
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                            <th scope="col">Tên</th>
                                                            <th scope="col">Thông số</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                            <th scope="row">Màn hình</th>
                                                            <td><?=$manHinh?></td>
                                                            </tr>
                                                            <tr>
                                                            <th scope="row">Hệ điều hành</th>
                                                            <td><?=$heDieuHanh?></td>
                                                            </tr>
                                                            <tr>
                                                            <th scope="row">Camera Sau</th>
                                                            <td><?=$cameraSau?></td>
                                                            </tr>
                                                            <tr>
                                                            <th scope="row">Camera Trước</th>
                                                            <td><?=$cameraTruoc?></td>
                                                            </tr>
                                                            <tr>
                                                            <th scope="row">CPU</th>
                                                            <td><?=$CPU?></td>
                                                            </tr>
                                                            <tr>
                                                            <th scope="row">Ram</th>
                                                            <td><?=$Ram?></td>
                                                            </tr>
                                                            <tr>
                                                            <th scope="row">Bộ nhớ trong</th>
                                                            <td><?=$boNhoTrong?></td>
                                                            </tr>
                                                            <tr>
                                                            <th scope="row">Thẻ nhớ</th>
                                                            <td><?=$theNho?></td>
                                                            </tr>
                                                            <tr>
                                                            <th scope="row">Thẻ sim</th>
                                                            <td><?=$theSim?></td>
                                                            </tr>
                                                            <tr>
                                                            <th scope="row">Dung lượng pin</th>
                                                            <td><?=$dungLuongPin?></td>
                                                            </tr>
                                                        </tbody>
                                                        </table>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="reviews">
                                                        <!-- reviews-tab-desc -->
                                                        <div class="reviews-tab-desc">
                                                            <!-- single comments -->
                                                            
                                                                <?php foreach ($getComment as $comment) {
                                                                    $name = $comment['userName'];
                                                                    $time = $comment['thoiDiemBL'];
                                                                    $text = $comment['noiDungBl'];

                                                                    echo'<div class="media mt-30">
                                                                    <div class="media-left">
                                                                        <a href="#"><img class="media-object" src="../upload/Trend-Avatar-Facebook (1).jpg" alt="#" style="width: 50px"></a>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <div class="clearfix">
                                                                            <div class="name-commenter pull-left">
                                                                                <h6 class="media-heading"><a href="#">'.$name.'</a></h6>
                                                                                <p class="mb-10">'.$time.'</p>
                                                                            </div>
                                                                        </div>
                                                                        <h6 class="mb-0">'.$text.'.</h6>
                                                                    </div>
                                                                </div>';
                                                                } ?>
                                                            <form class="ps-product__review mt-10" action="index.php?act=detail&id=<?= $getIdProduct?>&comment" method="post">
                                                                <h4>BÌNH LUẬN</h4>
                                                                <div class="row">
                                                                        <div class="col-lg-1 "><div class="ps-review-box__thumbnail"><img src="../upload/Trend-Avatar-Facebook (1).jpg" class="mr-3" style="width: 50px"></div></div>
                                                                        <div class="col-lg-1 "><h3 class="mt-20 mb-1 mr-0"><strong><?php if (isset($_SESSION["user"]) && $_SESSION["user"]) {
                                                                            echo $_SESSION["user"];
                                                                        }?></strong></h3></div>
                                                                        <div class="col-lg-8">
                                                                        <div class="form-group">
                                                                            <textarea class="form-control" name="info" rows="2"></textarea>
                                                                        </div>
                                                                        </div>
                                                                        <div class="col-lg-2">
                                                                        <div class="form-group">
                                                                            <button class="btn btn-primary" name="comment" value="comment" style="margin-top:10px">Bình luận</button>
                                                                        </div></div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    <div class="row">
                                        <div class="sin-plus-minus f-left clearfix"> 
                                                            </div>
                                        </div><br>
                                        <?php if(isset($_SESSION["user"])){ ?>
                                            <div class="row">
                                            <div class="col-lg-12 col-md-5 col-sm-6 col-xs-12 "><a class="btn btn-primary" href="index.php?act=cart&what=add&id=<?=$getIdProduct?>">Mua ngay</a>
                                            </div>
                                            </div>
                                        <?php } else{ ?>
                                            <div class="row">
                                                <p><?php if(isset($warn)){echo $warn;}?></p>
                                            <div class="col-lg-12 col-md-5 col-sm-6 col-xs-12 "><a class="btn btn-primary" href="#">Mua ngay</a>
                                            </div>
                                            </div>
                                        <?php } ?>
                                            <!--  hr -->
                                            <hr>
                                            <!-- single-pro-color-rating -->
                                            <div class="single-pro-color-rating clearfix">
                                                <div class="sin-pro-color f-left">
                                                    <p class="color-title f-left">Color</p>
                                                    <div class="widget-color f-left">
                                                        <ul>
                                                            <li class="color-1"><a href="#"></a></li>
                                                            <li class="color-2"><a href="#"></a></li>
                                                            <li class="color-3"><a href="#"></a></li>
                                                            <li class="color-4"><a href="#"></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="pro-rating sin-pro-rating f-right">
                                                    <a href="#" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="#" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="#" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="#" tabindex="0"><i class="zmdi zmdi-star-half"></i></a>
                                                    <a href="#" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                    <span class="text-black-5">( 27 Rating )</span>
                                                </div>
                                            </div>
                                            <!-- hr -->
                                            <hr>
                                            <!-- plus-minus-pro-action -->
                                            <div class="plus-minus-pro-action">
                                                <div class="sin-pro-action f-right">
                                                    <ul class="action-button">
                                                        <li>
                                                            <a href="#" title="Wishlist" tabindex="0"><i class="zmdi zmdi-favorite"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" data-toggle="modal" data-target="#productModal" title="Quickview" tabindex="0"><i class="zmdi zmdi-zoom-in"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Compare" tabindex="0"><i class="zmdi zmdi-refresh"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to cart" tabindex="0"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>    
                                    </div>
                                    <!-- single-product-info end -->
                                </div>
                            </div>
                            <!-- single-product-area end -->
                            <div class="related-product-area">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="section-title text-left mb-40">
                                            <h2 class="uppercase">sản phẩm nổi bật</h2>
                                            <h6>Đây là những sản phẩm mới nhất của Subash</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="active-related-product">
                                         <!-- product-item start -->
                                         <?php 
                                            foreach ($getSeller as $seller) {
                                                $img = $seller['urlHinh'];
                                                $tenDT = $seller['tenDT'];
                                                $idDT = $seller['idDT'];
                                                $gia = $this->model->formatMoney($seller['gia']);

                                                echo ' <div class="col-xs-12">
                                                <div class="product-item">
                                                    <div class="product-img">
                                                        <a href="index.php?act=detail&id='.$idDT.'">
                                                            <img src="../upload/'.$img.'" alt=""/>
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h6 class="product-title">
                                                            <a href="index.php?act=detail&id='.$idDT.'">'.$tenDT.'</a>
                                                        </h6>
                                                        <div class="pro-rating">
                                                            <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                            <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                                        </div>
                                                        <h3 class="pro-price">'.$gia.'</h3>
                                                        <ul class="action-button">
                                                            <li>
                                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>';
                                            }
                                        ?>
                                       
                                        
                                    </div>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SHOP SECTION END -->             

        </section>
        <!-- End page content -->