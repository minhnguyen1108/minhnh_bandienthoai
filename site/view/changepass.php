<div id="page-content" class="page-wrapper">

            <!-- LOGIN SECTION START -->
            <div class="login-section mb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="registered-customers">
                                <h6 class="widget-title border-left mb-50">ĐỔI MẬT KHẨU</h6>
                                <form action="index.php?act=changepass" method="post">
                                    <div class="login-account p-30 box-shadow">
                                        <p><?php if(isset($warn)){echo $warn;}?></p>
                                        <input type="text" name="name" placeholder="Tên tài khoản">
                                        <input type="password" name="passodd" placeholder="Mật khẩu cũ">
                                        <input type="password" name="passnew" placeholder="Mật khẩu mới">
                                        <input type="password" name="passnewa" placeholder="Nhập lại mật khẩu mới">
                                        <button class="submit-btn-1 btn-hover-1" type="submit" name="change" value="change">đổi mật khẩu</button>
                                        <button class="submit-btn-1 btn-hover-1"><a href="index.php?act=login" style="color: #ffffff;">quay lại Đăng nhập</a></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- LOGIN SECTION END -->             

        </div>