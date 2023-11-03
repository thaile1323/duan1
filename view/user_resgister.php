<div class="layout-page-register">
                <span class="header-register">Tạo tài khoản</span>
                <div class="form-sign-up">
                    <form action="" method="POST">
                        <div class="input-group">
                            <span class="input-group-icon"></span>
                            <button><i class="fa fa-user"></i></button>
                            <input type="text" placeholder="Tên" name="username" required>
                        </div>
                        <div class="input-group">
                            <span class="input-group-icon"></span>
                            <button><i class="fa fa-envelope"></i></button>
                            <input type="email" placeholder="Email" name="email" required>
                        </div>
                        <div class="input-group">
                            <span class="input-group-icon"></span>
                            <button><i class="fa fa-user"></i></button>
                            <input type="date" placeholder="Ngày sinh" name="birthday" required>
                        </div>
                        <div class="input-group">
                            <span class="input-group-icon"></span>
                            <button><i class="fa fa-phone"></i></button>
                            <input type="text" placeholder="Phone" name="phone_number" required>
                        </div>
                        <div class="input-group">
                            <span class="input-group-icon"></span>
                            <button><i class="fa fa-lock"></i></button>
                            <input type="password" placeholder="Mật khẩu" name="pass" required>
                        </div>
                        <div class="btn-sign-up">
                            <input class="btn-register" type="submit" name="submit-signup" value="Đăng ký">
                        </div>
                        <?php if(isset($thongbao2)): ?>
                            <div class="alert alert-warning" style="color:red">
                                <?= $thongbao2; ?>
                            </div>
                        <?php endif; unset($thongbao2); ?>
                    </form>
                    <div class="forget-password">
                        <div>
                            <a href="?mod=page&act=home">Quay lại trang chủ</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>