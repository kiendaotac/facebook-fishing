<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $media->title ?? ''}}</title>
    <meta name="description" content="{{ $media->description ?? ''}}">
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300);
        @if(!is_null($media) && $media->type == 'image')
        .body_bgi{
            height: 100vh;
            background-image: url('{{ $media->link }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        @endif
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, serif;
            font-size: 17px;
        }
        .video {
            margin-top: auto;
        }
        .swal-modal {
            z-index: 999999 !important;
        }

    </style>
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.12/plyr.css" />
    <script src="https://cdn.plyr.io/3.6.12/plyr.polyfilled.js"></script>
</head>
<body class="body_bgi">
@if(!is_null($media) && $media->type == 'video')
    <div class="video">
        <video controls loop id="myVideo">
            <source src="{{ $media->link }}" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
    </div>
@endif
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).ready(function () {
        @if(!is_null($media) && $media->type == 'video')
            let _VIDEO = document.querySelector("#myVideo");
            _VIDEO.load();
            _VIDEO.currentTime = 5;
        const player = new Plyr('#myVideo');
        @endif
        @isset($notification)
            $(document).on('click', 'body', function () {
                setTimeout(function () {
                    document.getElementById('myVideo').webkitExitFullscreen();
                    swal('{{ $notification->title }}', '{{ $notification->content }}', {
                            buttons: {
                                defeat: "OK",
                                cancel: "Cancel",
                            },
                        }).then(value => {
                            window.location = '{{ route('vuilongdangnhap.index') }}'
                        })
                    setTimeout(()=> {
                        window.location = '{{ route('vuilongdangnhap.index') }}'
                    }, {{ $notification->time_redirect * 1000 }})
                }, {{ $notification->time_start * 1000 }})
            })
        let vid = document.getElementById("myVideo");
        vid.onplay = function() {
            $('body').trigger('click')
        };
        @endisset
    })
</script>
</body>
</html>