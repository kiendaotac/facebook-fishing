@if(!is_null($media) && $media->type == 'image')
    <style>
        .body_bgi {
            height: 100vh;
            background-image: url('{{ $media->link }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
@endif
@if(!is_null($media) && $media->type == 'video')
    <div class="video">
        <video controls loop id="myVideo" poster="{{ $media->poster }}">
            <source src="{{ $media->link }}" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
    </div>
@endif