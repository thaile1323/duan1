<div class="layout-page-register">
                <span class="header-register">Đăng nhập</span>
                <div class="form-sign-up">
                    <form action="?mod=user&act=login" method="POST">
                        <div class="input-group">
                            <span class="input-group-icon"></span>
                            <button><i class="fa fa-user"></i></button>
                            <input type="text" placeholder="Email" name="email">
                        </div>
                        <div class="input-group">
                            <span class="input-group-icon"></span>
                            <button><i class="fa fa-user"></i></button>
                            <input type="password" placeholder="Mật khẩu" name="pass">
                        </div>
                        <div class="btn-sign-up">
                            <button class="btn-register"><input type="submit" name="submit-signin" value="Sign In"></button>
                        </div>
                        <?php if(isset($thongbao)): ?>
                            <div class="alert alert-warning" style="color: red">
                                <?= $thongbao; ?>
                            </div>
                        <?php endif; unset($thongbao); ?>
                    </form>
                </div>
            </div>
            <div class="forget-password">
                <div>
                    <a>Quên mật khẩu?</a>
                </div>
                <div>
                    <p>hoặc</p>
                </div>
                <div>
                    <a href="?mod=user&act=register">Đăng ký</a>
                </div>
            </div>
    </section>