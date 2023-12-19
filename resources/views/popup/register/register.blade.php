<div class="overlay_register">
    <div class="popup_login">
        <button class="close_regis">x</button>
        <div class="pop_left login_item">
            <div class="formLogin">
                <form method="POST" action="{{route("register")}}" class="form_login">
                    @csrf
                    <div class="text_login">
                        <span>Đăng Ký</span>
                    </div>
                    <div class="box_login">
                        <div class="lg_mail">
                            <input type="text" class="inp_mail" name="user_name"
                                placeholder="Nhập số điện thoại / Email">
                            <i class="lg_mail_icon"></i>
                        </div>
                        <div class="lg_pass">
                            <input type="password" class="inp_pass" name="password" placeholder="Mật khẩu">
                            <i class="far fa-eye" id="togglePassword"></i>
                        </div>
                        <div class="lg_pass">
                            <input type="password" class="inp_pass" name="re_password" placeholder="Xác thực mật khẩu">
                            <i class="far fa-eye" id="togglePassword"></i>
                        </div>
                    </div>
                    <div class="btn_login">
                        <button type="submit">Đăng ký</button>
                    </div>
                </form>
            </div>
            <div class="login_more">
                <div class="text">
                    <span>Hoặc đăng ký bằng các tài khoản sau:</span>
                </div>
                <div class="app_more">
                    <div class="facebook app_more_item">
                        <img src="/images/login/fb.svg" alt="Icon facebook">
                    </div>
                    <div class="ggplus app_more_item">
                        <img src="/images/login/google_plus.svg" alt="Icon google">
                    </div>
                </div>
            </div>
        </div>
        <div class="pop_right login_item">
            <img class="lazyload" src="/images/load.gif" data-src="/images/login/VnnId_anh.jpg" alt="icon web demo"
                onerror="this.onerror=null; this.src='fallback-image.jpg';" />
        </div>
    </div>
</div>