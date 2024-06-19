<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fassashion</title>
</head>
<style>
    body {
        padding: 0;
        margin: 0;
        background: linear-gradient(to right, rgb(0, 89, 255), rgb(4, 0, 255), rgb(105, 0, 255), rgb(230, 0, 255), rgb(235, 60, 255), rgb(240, 110, 255), rgb(247, 175, 255));
        overflow-y: hidden;
        overflow-x: hidden;
    }
    .container-welcome {
        max-width: 100%;
        height: 135px;
        background: linear-gradient(rgb(205, 205, 205), rgb(205, 205, 205), rgb(205, 205, 205));
    }
</style>
<link rel="icon" type="image/png" href="img/logo-fassashion.png">
<body>
    <div class="container-welcome">
        <div class="image-container">
            <img src="container-banner-1.png" alt="banner-1" class="banner-1">
            <img src="container-banner-2.png" alt="banner-2" class="banner-2">
            <img src="container-banner-3.png" alt="banner-3" class="banner-3">
        </div>
        <div class="logo-fassashion">
            <img src="{{asset('resources/img/logo-fassashion.png')}}" alt="logo-fassashion" width="150px" height="150px">
        </div>
        <div class="welcome-fassashion-title-text">
        <h1 class="welcome-fassashion-text">Welcome to Fassashion</h1>
        <div class="container-button">
        <a href="read-more-container.html" class="read-more">Read More <span class="elemen-panah-1"></span><span class="elemen-garis-1"></span></a>
        <a href="visit-out-website-container.html" class="visit-our-website">Visit Our Website <span class="elemen-panah-2"></span></a>
        </div>
        </div>
    </div>
    <div class="scroll-down-limit"></div>
    <script>
    if ('WebSocket' in window) {
      (function () {
        function refreshCSS() {
          var sheets = [].slice.call(document.getElementsByTagName("link"));
          var head = document.getElementsByTagName("head")[0];
          for (const element of sheets) {
            var elem = element;
            var parent = elem.parentElement || head;
            parent.removeChild(elem);
            var rel = elem.rel;
            if (elem.href && (typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet")) {
              var url = elem.href.replace(/(&|\\?)_cacheOverride=\d+/, '');
              elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
            }
            parent.appendChild(elem);
          }
        }
        var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
        var address = protocol + window.location.host + window.location.pathname + '/ws';
        var socket = new WebSocket(address);
        socket.onmessage = function (msg) {
          if (msg.data == 'reload') window.location.reload();
          else if (msg.data == 'refreshcss') refreshCSS();
        };
        if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
          console.log('Muat Ulang Langsung Diaktifkan!.');
          sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
        }
      })();
    }
    else {
      console.error('Tingkatkan Browser Anda. Browser Ini TIDAK Mendukung WebSocket Untuk Muat Ulang Langsung');
    }
  </script>
</body>
</html>
