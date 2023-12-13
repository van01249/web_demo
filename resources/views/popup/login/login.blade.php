<link rel="stylesheet" href="{{asset('css/login/popup_login.css')}}">
<div class="overlay_login">
    <div class="popup_login">
        <button class="close_login">x</button>
        <div class="pop_left login_item">
            <div class="formLogin">
                <form action="" class="form_login">
                    <div class="text_login">
                        <span>Đăng Nhập</span>
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
                    </div>
                    <div class="func_more">
                        <div class="save_login">
                            <input type="checkbox" class="save_checkbox">
                            <span>Ghi nhớ đăng nhập</span>
                        </div>
                        <div class="forgot_pass">
                            <a href="#">Quên mật khẩu?</a>
                        </div>
                    </div>
                    <div class="btn_login">
                        <button type="submit">Đăng nhập</button>
                    </div>
                </form>
                <div class="login_more">
                    <div class="text">
                        <span>Hoặc đăng nhập bằng các tài khoản sau:</span>
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
                <div class="text_regis">
                    <span>Chưa có tài khoản</span><a href="#" class="link_regis">Đăng ký</a>
                </div>
            </div>
        </div>
        <div class="pop_right login_item">
            <img class="lazyload" src="/images/load.gif" data-src="/images/login/VnnId_anh.jpg" alt="icon web demo"
                onerror="this.onerror=null; this.src='fallback-image.jpg';" />
        </div>
    </div>
</div>