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
        /* overflow-y: hidden;
        overflow-x: hidden; */
    }
    .container-welcome {
        position: relative;
        max-width: 100%;
        width: 800px;
        height: 485px;
        margin-left: 210px;
        margin-top: 80px;
        border: 2px solid rgb(255, 0, 0);
        border-radius: 20px;
        position: relative;
        background-image: url('img/background-wallpaper-2.jpeg');
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6), 0 6px 20px 0 rgba(0, 0, 0, 0.6);
        animation: 15s container-welcome ease infinite;
    }
    @keyframes container-welcome {
      0% {
        transform: translate(5px, -5px);
      }

      10% {
        transform: translate(-5px, 5px);
    }
    20% {
        transform: translate(5px, -5px);
    }
    30% {
        transform: translate(-5px, 5px);
    }
    40% {
        transform: translate(5px, -5px);
    }
    50% {
        transform: translate(-5px, 5px);
    }
    60% {
        transform: translate(5px, -5px);
    }
    70% {
        transform: translate(-5px, 5px);
    }
    80% {
        transform: translate(5px, -5px);
    }
    90% {
        transform: translate(-5px, 5px);
    }
    100% {
        transform: translate(5px, -5px);
    }
  }
    .image-container {
      display: flex;
      flex-direction: row;
    }
    .banner-1 {
      width: 270px;
      height: 250px;
      border-top-left-radius: 20px;
    }
    .banner-2 {
      width: 300px;
      height: 250px;
    }
    .banner-3 {
      width: 300px;
      height: 250px;
      border-top-right-radius: 20px;
    }
    .logo-fassashion {
      position: relative;
      background-color: rgb(255, 255, 255);
      margin-left: 330px;
      max-width: 150px;
      max-height: 150px;
      border-radius: 50%;
      top: -70px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6), 0 6px 20px 0 rgba(0, 0, 0, 0.6);
    }
    .welcome-fassashion-title-text {
      position: relative;
      margin-left: 160px;
      top: -75px;
      background-image: url('img/background-kayu.jpg');
      max-width: 430px;
      height: 40px;
      border-radius: 50px;
      padding-left: 25px;
      padding-right: 25px;
      cursor: default;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6), 0 6px 20px 0 rgba(0, 0, 0, 0.6);
    }
    .welcome-fassashion-text {
      position: relative;
      font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      white-space: nowrap;
      letter-spacing: 5px;
      -webkit-text-stroke: .5px;
        -webkit-text-stroke-color: rgb(255, 255, 255);
        font-weight: bold;
    }
    .read-more {
      position: relative;
      text-decoration: none;
      background-color: rgb(0, 215, 255);
      color: rgb(255, 255, 255);
      width: 110px;
      height: 40px;
      margin-left: 40px;
      border-radius: 50px;
      border: 1px solid rgb(0, 0, 0);
      padding-left: 10px;
      padding-right: 10px;
      padding-top: 2px;
      padding-bottom: 2px;
      font-size: 20px;
      top: -25px;
      font-weight: bold;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6), 0 6px 20px 0 rgba(0, 0, 0, 0.6);
      -webkit-text-stroke: .5px;
        -webkit-text-stroke-color: rgb(0, 0, 0);
        font-family:Verdana, Geneva, Tahoma, sans-serif;
        white-space: nowrap;
    }
    .read-more:hover {
      color: rgb(180, 180, 180);
      background-color: rgb(85, 244, 255);
    }
    .visit-our-website {
      position: relative;
      text-decoration: none;
      background-color: rgb(255, 0, 210);
      color: rgb(255, 255, 255);
      width: 110px;
      height: 40px;
      margin-left: 350px;
      border-radius: 50px;
      border: 1px solid rgb(0, 0, 0);
      padding-left: 10px;
      padding-right: 10px;
      padding-top: 2px;
      padding-bottom: 2px;
      font-size: 20px;
      top: -25px;
      font-weight: bold;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6), 0 6px 20px 0 rgba(0, 0, 0, 0.6);
      -webkit-text-stroke: .5px;
        -webkit-text-stroke-color: rgb(0, 0, 0);
        font-family:Verdana, Geneva, Tahoma, sans-serif;
        white-space: nowrap;
    }
    .visit-our-website:hover {
      color: rgb(180, 180, 180);
      background-color: rgb(255, 104, 230);
    }
</style>
<link rel="icon" type="asset/img/png" href="{{asset('img/logo-fassashion.png')}}" alt="logo-fassashion">
<body>
    <div class="container-welcome">
        <div class="image-container">
            <img src="{{asset('img/sepatu.jpeg')}}" alt="banner-1" class="banner-1">
            <img src="{{asset('img/setelan.jpeg')}}" alt="banner-2" class="banner-2">
            <img src="{{asset('img/tas.jpeg')}}" alt="banner-3" class="banner-3">
        </div>
        <div class="logo-fassashion">
            <img src="{{asset('img/logo-fassashion.png')}}" alt="logo-fassashion" width="150px" height="150px">
        </div>
        <div class="welcome-fassashion-title-text">
        <h1 class="welcome-fassashion-text">Welcome to Fassashion</h1>
  </div>
        <div class="container-button">
        <a href="read-more-container.html" class="read-more">Read More</a>
        <a href="visit-out-website-container.html" class="visit-our-website">Visit Our Website</a>
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
