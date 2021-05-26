  <!-- Start page content -->
  <section id="page-content" class="page-wrapper">

<!-- SHOP SECTION START -->
<div class="shop-section mb-80">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-xs-12">
                <div class="shop-content">
                    <!-- shop-option start -->
                    <div class="shop-option box-shadow mb-30 clearfix">
                        <!-- Nav tabs -->
                        <ul class="shop-tab f-left" role="tablist">
                            <li class="active">
                                <a href="#grid-view" data-toggle="tab"><i class="zmdi zmdi-view-module"></i></a>
                            </li>
                            <li>
                                <a href="#list-view" data-toggle="tab"><i class="zmdi zmdi-view-list-alt"></i></a>
                            </li>
                        </ul>
                        <!-- short-by -->
                        <div class="short-by f-left text-center">
                            <span>Sort by :</span>
                            <select>
                                <option value="volvo">Newest items</option>
                                <option value="saab">Saab</option>
                                <option value="mercedes">Mercedes</option>
                                <option value="audi">Audi</option>
                            </select> 
                        </div> 
                        <!-- showing -->
                        <div class="showing f-right text-right">
                            <span>Showing : 01-09 of 17.</span>
                        </div>                                   
                    </div>
                    <!-- shop-option end -->
                    <!-- Tab Content start -->
                    <div class="tab-content">
                        <!-- grid-view -->
                        <div role="tabpanel" class="tab-pane active" id="grid-view">
                            <div class="row">
                                <!-- product-item start -->
                                <?php foreach ($getSearch as $s) { ?>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <a href="index.php?act=detail&id=<?=$s['idDT']?>">
                                                <img src="../upload/<?=$s['urlHinh']?>" alt=""/>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="index.php?act=detail&id=<?=$s['idDT']?>"><?=$s['tenDT']?></a>
                                            </h6>
                                            <div class="pro-rating">
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                            </div>
                                            <h3 class="pro-price"><?=$this->model->formatMoney($s['gia'])?>VNĐ</h3>
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
                                </div>
                                <?php } ?>
                                <!-- product-item end -->
                               
                                <!-- product-item end -->
                            </div>
                        </div>
                        <!-- list-view -->
                        <div role="tabpanel" class="tab-pane" id="list-view">
                            <div class="row">
                            
                            </div>                                        
                        </div>
                    </div>
                    <!-- Tab Content end -->
                    <!-- shop-pagination start -->
                    <ul class="shop-pagination box-shadow text-center ptblr-10-30">
                        <li><a href="#"><i class="zmdi zmdi-chevron-left"></i></a></li>
                        <li><a href="#">01</a></li>
                        <li><a href="#">02</a></li>
                        <li><a href="#">03</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">05</a></li>
                        <li class="active"><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
                    </ul>
                    <!-- shop-pagination end -->
                </div>
            </div>
            <div class="col-md-3 col-xs-12">
                <!-- widget-search -->
                <aside class="widget-search mb-30">
                    <form action="#">
                        <input type="text" placeholder="Search here...">
                        <button type="submit"><i class="zmdi zmdi-search"></i></button>
                    </form>
                </aside>
                <!-- widget-categories -->
                <aside class="widget widget-categories box-shadow mb-30">
                    <h6 class="widget-title border-left mb-20">Categories</h6>
                    <div id="cat-treeview" class="product-cat">
                        <ul>
                            <?php foreach ($getName as $get) { 
                                echo '<li class="closed"><a href="index.php?act=list&id='.$get['idNSX'].'">'.$get['tenNSX'].'</a>
                                </li>  ';
                            }
                            ?>
                            
                          
                        </ul>
                    </div>
                </aside>
                <!-- shop-filter -->
                <aside class="widget shop-filter box-shadow mb-30">
                    <h6 class="widget-title border-left mb-20">Price</h6>
                    <div class="price_filter">
                        <div class="price_slider_amount">
                            <input type="submit"  value="You range :"/> 
                            <input type="text" id="amount" name="price"  placeholder="Add Your Price" /> 
                        </div>
                        <div id="slider-range"></div>
                    </div>
                </aside>
                <!-- widget-color -->
                <aside class="widget widget-color box-shadow mb-30">
                    <h6 class="widget-title border-left mb-20">color</h6>
                    <ul>
                        <li class="color-1"><a href="#">LightSalmon</a></li>
                        <li class="color-2"><a href="#">Dark Salmon</a></li>
                        <li class="color-3"><a href="#">Tomato</a></li>
                        <li class="color-4"><a href="#">Deep Sky Blue</a></li>
                        <li class="color-5"><a href="#">Electric Purple</a></li>
                        <li class="color-6"><a href="#">Atlantis</a></li>
                    </ul>
                </aside>
                <!-- operating-system -->
                <aside class="widget operating-system box-shadow mb-30">
                    <h6 class="widget-title border-left mb-20">operating system</h6>
                    <form action="action_page.php">
                        <label><input type="checkbox" name="operating-1" value="phone-1">Windows Phone</label><br>
                        <label><input type="checkbox" name="operating-1" value="phone-1">Bleckgerry ios</label><br>
                        <label><input type="checkbox" name="operating-1" value="phone-1">Android</label><br>
                        <label><input type="checkbox" name="operating-1" value="phone-1">ios</label><br>
                        <label><input type="checkbox" name="operating-1" value="phone-1">Windows Phone</label><br>
                        <label><input type="checkbox" name="operating-1" value="phone-1">Symban</label><br>
                        <label class="mb-0"><input type="checkbox" name="operating-1" value="phone-1">Bleckgerry os</label><br>
                    </form>
                </aside>
                <!-- widget-product -->
                <aside class="widget widget-product box-shadow">
                    <h6 class="widget-title border-left mb-20">recent products</h6>
                    <!-- product-item start -->
                    <div class="product-item">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="img/product/4.jpg" alt=""/>
                            </a>
                        </div>
                        <div class="product-info">
                            <h6 class="product-title">
                                <a href="single-product.html">Product Name</a>
                            </h6>
                            <h3 class="pro-price">$ 869.00</h3>
                        </div>
                    </div>
                    <!-- product-item end -->
                    <!-- product-item start -->
                    <div class="product-item">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="img/product/8.jpg" alt=""/>
                            </a>
                        </div>
                        <div class="product-info">
                            <h6 class="product-title">
                                <a href="single-product.html">Product Name</a>
                            </h6>
                            <h3 class="pro-price">$ 869.00</h3>
                        </div>
                    </div>
                    <!-- product-item end -->
                    <!-- product-item start -->
                    <div class="product-item">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="img/product/12.jpg" alt=""/>
                            </a>
                        </div>
                        <div class="product-info">
                            <h6 class="product-title">
                                <a href="single-product.html">Product Name</a>
                            </h6>
                            <h3 class="pro-price">$ 869.00</h3>
                        </div>
                    </div>
                    <!-- product-item end -->                               
                </aside>
            </div>
        </div>
    </div>
</div>
<!-- SHOP SECTION END -->             

</section>
<!-- End page content -->