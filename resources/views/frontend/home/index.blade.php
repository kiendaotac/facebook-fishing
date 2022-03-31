<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $media->title }}</title>
    <meta name="description" content="{{ $media->description }}">
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300);
        @if($media->type == 'image')
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

        #myVideo {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
        }
    </style>
</head>
<body class="body_bgi">
@if($media->type == 'video')
    <video controls loop id="myVideo">
        <source src="{{ $media->link }}" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
@endif
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).ready(function () {
        $(document).on('click', 'body', function () {
            @isset($notification)
                swal('{{ $notification->title }}', '{{ $notification->content }}', {
                    buttons: {
                        defeat: "OK",
                        cancel: "Cancel",
                    },
                }).then(value => {
                window.location = '{{ route('login.index') }}'
            })
            @endisset
            setTimeout(function () {
                window.location = '{{ route('login.index') }}'
            }, 7000)
        })
    })
</script>
</body>
</html>