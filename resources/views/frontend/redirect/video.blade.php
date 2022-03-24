<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }
    </style>
</head>
<body>
<video width="100%" controls id="myvideo">
    <source src="{{ asset($redirect->url) }}" type="video/mp4">
    Your browser does not support the video tag.
</video>
<script>
    var elem = document.getElementById("myvideo");
    function openFullscreen() {
        if (elem.requestFullscreen) {
            elem.requestFullscreen();
        } else if (elem.webkitRequestFullscreen) { /* Safari */
            elem.webkitRequestFullscreen();
        } else if (elem.msRequestFullscreen) { /* IE11 */
            elem.msRequestFullscreen();
        }
    }
</script>
</body>
</html>

