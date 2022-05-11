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
        .swal-modal {
            z-index: 999999 !important;
        }

    </style>
</head>
<body class="body_bgi">
    <div id="app">

    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    let _VIDEO;
    function myFunction() {
        $('body').trigger('click')
    }
    $(document).ready(function () {
        setTimeout(function (){
            $.ajax({
                url: '{{ route('home.content') }}',
                method: 'GET',
                success: function (response) {
                    $('#app').html(response);
                    @if(!is_null($media) && $media->type == 'video')
                        _VIDEO = document.querySelector("#myVideo");
                        _VIDEO.load();
                    document.getElementById("myVideo").addEventListener("play", myFunction);
                    @endif
                }
            });
        }, 1000);

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
        if (_VIDEO) {

            _VIDEO.onplay = function() {
                $('body').trigger('click')
            };
        }
        @endisset
    })
</script>
</body>
</html>