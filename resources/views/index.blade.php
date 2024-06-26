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
        background: linear-gradient(to right, rgb(62, 104, 189), rgb(71, 164, 204), rgb(119, 212, 202), rgb(227, 217, 195), rgb(222, 205, 180), rgb(207, 185, 155), rgb(245, 205, 115));
        overflow-y: hidden;
        overflow-x: hidden;
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
        background-size: cover;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6), 0 6px 20px 0 rgba(0, 0, 0, 0.6);
        animation: 15s container-welcome ease infinite;
    }
    @keyframes container-welcome {
    0% {
        transform: translate(2px, -2px);
    }

    10% {
        transform: translate(-2px, 2px);
    }
    20% {
        transform: translate(2px, -2px);
    }
    30% {
        transform: translate(-2px, 2px);
    }
    40% {
        transform: translate(2px, -2px);
    }
    50% {
        transform: translate(-2px, 2px);
    }
    60% {
        transform: translate(2px, -2px);
    }
    70% {
        transform: translate(-2px, 2px);
    }
    80% {
        transform: translate(2px, -2px);
    }
    90% {
        transform: translate(-2px, 2px);
    }
    100% {
        transform: translate(2px, -2px);
    }
    }
    .image-container {
        position: fixed;
        display: flex;
        flex-direction: row;
    }
    .banner-1a {
        width: 270px;
        height: 250px;
        border-top-left-radius: 20px;
        user-select: none;
        pointer-events: none;
        -webkit-user-drag: none;
        -moz-user-drag: none;
        -o-user-drag: none;
        -ms-user-drag: none;
        cursor: default;
        opacity: 0;
        animation: banner-1a 12s infinite 0s;
        transition: opacity 1s ease-in-out;
    }
    @keyframes banner-1a {
        0% {
            opacity: 0;
        }
        10% {
            opacity: 1;
        }
        30% {
            opacity: 1;
        }
        40% {
            opacity: 0;
        }
        100% {
            opacity: 0;
        }
    }
    .banner-1b {
        position: relative;
        width: 270px;
        height: 250px;
        border-top-left-radius: 20px;
        user-select: none;
        pointer-events: none;
        -webkit-user-drag: none;
        -moz-user-drag: none;
        -o-user-drag: none;
        -ms-user-drag: none;
        cursor: default;
        top: -254.2px;
        opacity: 0;
        animation: banner-1b 12s infinite 4s;
        transition: opacity 1s ease-in-out;
    }
    @keyframes banner-1b {
        0% {
            opacity: 0;
        }
        10% {
            opacity: 1;
        }
        30% {
            opacity: 1;
        }
        40% {
            opacity: 0;
        }
        100% {
            opacity: 0;
        }
    }
    .banner-1c {
        position: relative;
        width: 270px;
        height: 250px;
        border-top-left-radius: 20px;
        user-select: none;
        pointer-events: none;
        -webkit-user-drag: none;
        -moz-user-drag: none;
        -o-user-drag: none;
        -ms-user-drag: none;
        cursor: default;
        top: -508.34px;
        opacity: 0;
        animation: banner-1c 12s infinite 8s;
        transition: opacity 1s ease-in-out;
    }
    @keyframes banner-1c {
        0% {
            opacity: 0;
        }
        10% {
            opacity: 1;
        }
        30% {
            opacity: 1;
        }
        40% {
            opacity: 0;
        }
        100% {
            opacity: 0;
        }
    }
    .banner-2a {
        width: 275px;
        height: 250px;
        user-select: none;
        pointer-events: none;
        -webkit-user-drag: none;
        -moz-user-drag: none;
        -o-user-drag: none;
        -ms-user-drag: none;
        cursor: default;
        opacity: 1;
        animation: banner-2a 12s infinite 5s;
        transition: opacity 1s ease-in-out;
    }
    @keyframes banner-2a {
        0% {
            opacity: 0;
        }
        10% {
            opacity: 1;
        }
        30% {
            opacity: 1;
        }
        40% {
            opacity: 0;
        }
        100% {
            opacity: 0;
        }
    }
    .banner-2b {
        position: relative;
        width: 275px;
        height: 250px;
        user-select: none;
        pointer-events: none;
        -webkit-user-drag: none;
        -moz-user-drag: none;
        -o-user-drag: none;
        -ms-user-drag: none;
        cursor: default;
        top: -254px;
        opacity: 0;
        animation: banner-2b 12s infinite 9s;
        transition: opacity 1s ease-in-out;
    }
    @keyframes banner-2b {
        0% {
            opacity: 0;
        }
        10% {
            opacity: 1;
        }
        30% {
            opacity: 1;
        }
        40% {
            opacity: 0;
        }
        100% {
            opacity: 0;
        }
    }
    .banner-2c {
        position: relative;
        width: 275px;
        height: 250px;
        user-select: none;
        pointer-events: none;
        -webkit-user-drag: none;
        -moz-user-drag: none;
        -o-user-drag: none;
        -ms-user-drag: none;
        cursor: default;
        top: -508px;
        opacity: 0;
        animation: banner-2c 12s infinite 1s;
        transition: opacity 1s ease-in-out;
    }
    @keyframes banner-2c {
        0% {
            opacity: 0;
        }
        10% {
            opacity: 1;
        }
        30% {
            opacity: 1;
        }
        40% {
            opacity: 0;
        }
        100% {
            opacity: 0;
        }
    }
    .banner-3a {
        width: 255px;
        height: 250px;
        border-top-right-radius: 20px;
        user-select: none;
        pointer-events: none;
        -webkit-user-drag: none;
        -moz-user-drag: none;
        -o-user-drag: none;
        -ms-user-drag: none;
        cursor: default;
        opacity: 1;
        animation: banner-3a 12s infinite 6s;
        transition: opacity 1s ease-in-out;
    }
    @keyframes banner-3a {
        0% {
            opacity: 0;
        }
        10% {
            opacity: 1;
        }
        30% {
            opacity: 1;
        }
        40% {
            opacity: 0;
        }
        100% {
            opacity: 0;
        }
    }
    .banner-3b {
        position: relative;
        width: 255px;
        height: 250px;
        border-top-right-radius: 20px;
        user-select: none;
        pointer-events: none;
        -webkit-user-drag: none;
        -moz-user-drag: none;
        -o-user-drag: none;
        -ms-user-drag: none;
        cursor: default;
        top: -254px;
        opacity: 0;
        animation: banner-3b 12s infinite 10s;
        transition: opacity 1s ease-in-out;
    }
    @keyframes banner-3b {
        0% {
            opacity: 0;
        }
        10% {
            opacity: 1;
        }
        30% {
            opacity: 1;
        }
        40% {
            opacity: 0;
        }
        100% {
            opacity: 0;
        }
    }
    .banner-3c {
        position: relative;
        width: 255px;
        height: 250px;
        border-top-right-radius: 20px;
        user-select: none;
        pointer-events: none;
        -webkit-user-drag: none;
        -moz-user-drag: none;
        -o-user-drag: none;
        -ms-user-drag: none;
        cursor: default;
        top: -508px;
        opacity: 0;
        animation: banner-3c 12s infinite 2s;
        transition: opacity 1s ease-in-out;
    }
    @keyframes banner-3c {
        0% {
            opacity: 0;
        }
        10% {
            opacity: 1;
        }
        30% {
            opacity: 1;
        }
        40% {
            opacity: 0;
        }
        100% {
            opacity: 0;
        }
    }
    .logo-fassashion {
        position: relative;
        background-color: rgb(255, 255, 255);
        margin-left: 330px;
        max-width: 150px;
        max-height: 150px;
        border-radius: 50%;
        top: 175px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6), 0 6px 20px 0 rgba(0, 0, 0, 0.6);
        user-select: none;
        pointer-events: none;
        -webkit-user-drag: none;
        -moz-user-drag: none;
        -o-user-drag: none;
        -ms-user-drag: none;
        cursor: default;
    }
    .welcome-fassashion-title-text {
        position: relative;
        margin-left: 160px;
        top: 165px;
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
        -webkit-text-stroke: 1px;
        -webkit-text-stroke-color: rgb(0, 0, 0);
        text-shadow: 0 0 10px rgb(222, 205, 180),
                            0 0 20px rgb(222, 205, 180),
                            0 0 40px rgb(222, 205, 180),
                            0 0 80px rgb(222, 205, 180),
                            0 0 120px rgb(222, 205, 180),
                            0 0 200px rgb(222, 205, 180),
                            0 0 300px rgb(222, 205, 180),
                            0 0 400px rgb(222, 205, 180);
        font-weight: bold;
        color: rgb(222, 205, 180);
        user-select: none;
        cursor: default;
    }
    .welcome-fassashion-text::selection {
        background: none;
        color: none;
    }
    .welcome-fassashion-text::-moz-selection  {
        background: none;
        color: none;
    }
    .container-button {
        position: fixed;
        margin-top: 250px;
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
        -webkit-user-drag: none;
        -moz-user-drag: none;
        -o-user-drag: none;
        -ms-user-drag: none;
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
        margin-left: 450px;
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
        -webkit-user-drag: none;
        -moz-user-drag: none;
        -o-user-drag: none;
        -ms-user-drag: none;
    }
    .visit-our-website:hover {
        color: rgb(180, 180, 180);
        background-color: rgb(255, 104, 230);
    }
    .scroll-down-limit {
        width: 250px;
        height: 5px;
        background-color: rgb(255, 255, 255);
        border-radius: 50px;
        border: 2px solid rgb(0, 0, 0);
        margin-top: 60px;
        margin-left: 480px;
    }
    .container-elemen-1 {
        width: 250px;
        height: 250px;
        size: 20px;
    }
    .container-elemen-picture-1 {
        width: 325px;
        height: 325px;
        position: relative;
        right: 115px;
        bottom: 300px;
        filter: drop-shadow(0px 16px 10px rgba(0, 0, 0, 0.6));
        -webkit-filter: drop-shadow(0px 16px 10px rgba(0, 0, 0, 0.6));
        -moz-filter: drop-shadow(0px 16px 10px rgba(0, 0, 0, 0.6));
        -ms-filter: drop-shadow(0px 16px 10px rgba(0, 0, 0, 0.6));
        -o-filter: drop-shadow(0px 16px 10px rgba(0, 0, 0, 0.6));
        animation: 15s container-elemen-1 ease infinite 2s, 2.25s container-elemen-picture-1 ease 0s;
        user-select: none;
        pointer-events: none;
        -webkit-user-drag: none;
        -moz-user-drag: none;
        -o-user-drag: none;
        -ms-user-drag: none;
        cursor: default;
    }
    @keyframes container-elemen-1 {
    0% {
        transform: translate(0px, -5px);
    }

    10% {
        transform: translate(0px, 5px);
    }
    20% {
        transform: translate(0px, -5px);
    }
    30% {
        transform: translate(0px, 5px);
    }
    40% {
        transform: translate(0px, -5px);
    }
    50% {
        transform: translate(0px, 5px);
    }
    60% {
        transform: translate(0px, -5px);
    }
    70% {
        transform: translate(0px, 5px);
    }
    80% {
        transform: translate(0px, -5px);
    }
    90% {
        transform: translate(0px, 5px);
    }
    100% {
        transform: translate(0px, -5px);
    }
    }
    @keyframes container-elemen-picture-1 {
        0% {
            transform: translate(-300px, 300px)
        }
        100% {
            transform: translate(0px, 0px)
        }
    }
    .container-elemen-picture-2 {
        width: 200px;
        height: 200px;
        position: relative;
        right: 5px;
        bottom: 875px;
        filter: drop-shadow(0px 16px 10px rgba(0, 0, 0, 0.6));
        -webkit-filter: drop-shadow(0px 16px 10px rgba(0, 0, 0, 0.6));
        -moz-filter: drop-shadow(0px 16px 10px rgba(0, 0, 0, 0.6));
        -ms-filter: drop-shadow(0px 16px 10px rgba(0, 0, 0, 0.6));
        -o-filter: drop-shadow(0px 16px 10px rgba(0, 0, 0, 0.6));
        animation: 15s container-elemen-2 ease infinite 2.5s, 1.75s container-elemen-picture-2 ease .5s, .5s container-elemen-picture-2b ease 0s;
        user-select: none;
        pointer-events: none;
        -webkit-user-drag: none;
        -moz-user-drag: none;
        -o-user-drag: none;
        -ms-user-drag: none;
        cursor: default;
    }
    @keyframes container-elemen-2 {
    0% {
        transform: translate(0px, -5px);
    }

    10% {
        transform: translate(0px, 5px);
    }
    20% {
        transform: translate(0px, -5px);
    }
    30% {
        transform: translate(0px, 5px);
    }
    40% {
        transform: translate(0px, -5px);
    }
    50% {
        transform: translate(0px, 5px);
    }
    60% {
        transform: translate(0px, -5px);
    }
    70% {
        transform: translate(0px, 5px);
    }
    80% {
        transform: translate(0px, -5px);
    }
    90% {
        transform: translate(0px, 5px);
    }
    100% {
        transform: translate(0px, -5px);
    }
    }
    @keyframes container-elemen-picture-2 {
        0% {
            transform: translate(-300px, -300px);
        }
        100% {
            transform: translate(0px, 0px);
        }
    }
    @keyframes container-elemen-picture-2b {
        0%, 100% {
            opacity: 0%;
        }
    }
    .container-elemen-picture-3 {
        width: 175px;
        height: 175px;
        position: relative;
        right: -1050px;
        bottom: 1000px;
        filter: drop-shadow(0px 16px 10px rgba(0, 0, 0, 0.6));
        -webkit-filter: drop-shadow(0px 16px 10px rgba(0, 0, 0, 0.6));
        -moz-filter: drop-shadow(0px 16px 10px rgba(0, 0, 0, 0.6));
        -ms-filter: drop-shadow(0px 16px 10px rgba(0, 0, 0, 0.6));
        -o-filter: drop-shadow(0px 16px 10px rgba(0, 0, 0, 0.6));
        animation: 15s container-elemen-3 ease infinite 3s, 2.50s container-elemen-picture-3 ease 1s, 1s container-elemen-picture-3b ease 0s;
        user-select: none;
        pointer-events: none;
        -webkit-user-drag: none;
        -moz-user-drag: none;
        -o-user-drag: none;
        -ms-user-drag: none;
        cursor: default;
    }
    @keyframes container-elemen-3 {
    0% {
        transform: translate(0px, -5px);
    }

    10% {
        transform: translate(0px, 5px);
    }
    20% {
        transform: translate(0px, -5px);
    }
    30% {
        transform: translate(0px, 5px);
    }
    40% {
        transform: translate(0px, -5px);
    }
    50% {
        transform: translate(0px, 5px);
    }
    60% {
        transform: translate(0px, -5px);
    }
    70% {
        transform: translate(0px, 5px);
    }
    80% {
        transform: translate(0px, -5px);
    }
    90% {
        transform: translate(0px, 5px);
    }
    100% {
        transform: translate(0px, -5px);
    }
    }
    @keyframes container-elemen-picture-3 {
        0% {
            transform: translate(300px, -300px);
        }
        100% {
            transform: translate(0px, 0px);
        }
    }
    @keyframes container-elemen-picture-3b {
        0%, 100% {
            opacity: 0%;
        }
    }
    .container-elemen-picture-4 {
        width: 250px;
        height: 250px;
        position: relative;
        right: -950px;
        bottom: 850px;
        filter: drop-shadow(0px 16px 10px rgba(0, 0, 0, 0.6));
        -webkit-filter: drop-shadow(0px 16px 10px rgba(0, 0, 0, 0.6));
        -moz-filter: drop-shadow(0px 16px 10px rgba(0, 0, 0, 0.6));
        -ms-filter: drop-shadow(0px 16px 10px rgba(0, 0, 0, 0.6));
        -o-filter: drop-shadow(0px 16px 10px rgba(0, 0, 0, 0.6));
        animation: 15s container-elemen-4 ease infinite 3.5s, 2s container-elemen-picture-4 ease 1.5s, 1.5s container-elemen-picture-4b ease 0s;
        user-select: none;
        pointer-events: none;
        -webkit-user-drag: none;
        -moz-user-drag: none;
        -o-user-drag: none;
        -ms-user-drag: none;
        cursor: default;
    }
    @keyframes container-elemen-4 {
    0% {
        transform: translate(0px, -5px);
    }

    10% {
        transform: translate(0px, 5px);
    }
    20% {
        transform: translate(0px, -5px);
    }
    30% {
        transform: translate(0px, 5px);
    }
    40% {
        transform: translate(0px, -5px);
    }
    50% {
        transform: translate(0px, 5px);
    }
    60% {
        transform: translate(0px, -5px);
    }
    70% {
        transform: translate(0px, 5px);
    }
    80% {
        transform: translate(0px, -5px);
    }
    90% {
        transform: translate(0px, 5px);
    }
    100% {
        transform: translate(0px, -5px);
    }
    }
    @keyframes container-elemen-picture-4 {
        0% {
            transform: translate(300px, 300px);
        }
        100% {
            transform: translate(0px, 0px);
        }
    }
    @keyframes container-elemen-picture-4b {
        0%, 100% {
            opacity: 0%;
        }
    }
</style>
<link rel="icon" type="asset/img/png" href="{{asset('img/logo-fassashion.png')}}" alt="logo-fassashion">
<body>
    <div class="container-welcome">
        <div class="image-container">
            <div class="image-display">
            <img src="{{asset('img/sepatu.jpeg')}}" alt="banner-1a" class="banner-1a" id="banner-1a" draggable="false">
            <img src="{{asset('img/bros.jpeg')}}" alt="banner-1b" class="banner-1b" id="banner-1b" draggable="false">
            <img src="{{asset('img/kalung.jpeg')}}" alt="banner-1c" class="banner-1c" id="banner-1c" draggable="false">
</div>
<div class="image-display">
            <img src="{{asset('img/setelan.jpeg')}}" alt="banner-2a" class="banner-2a" id="banner-2a" draggable="false">
            <img src="{{asset('img/baju-islamic-1.jpeg')}}" alt="banner-2b" class="banner-2b" id="banner-2b" draggable="false">
            <img src="{{asset('img/baju-renang.jpeg')}}" alt="banner-2c" class="banner-2c" id="banner-2c" draggable="false">
            </div>
            <div class="image-display">
            <img src="{{asset('img/tas.jpeg')}}" alt="banner-3a" class="banner-3a" id="banner-3a" draggable="false">
            <img src="{{asset('img/jas-coklat.jpeg')}}" alt="banner-3b" class="banner-3b" id="banner-3b" draggable="false">
            <img src="{{asset('img/kemeja-putih-lengan-panjang.jpeg')}}" alt="banner-3c" class="banner-3c" id="banner-3c" draggable="false">
            </div>
        </div>
        <div class="logo-fassashion">
            <img src="{{asset('img/logo-fassashion.png')}}" alt="logo-fassashion" width="150px" height="150px" id="logo-fassashion" draggable="false">
        </div>
        <div class="welcome-fassashion-title-text">
        <h1 class="welcome-fassashion-text">Welcome to Fassashion</h1>
    </div>
        <div class="container-button">
        <a href="read-more-container.html" class="read-more">Read More</a>
        <a href="visit-out-website-container.html" class="visit-our-website">Visit Now</a>
        </div>
    </div>
    <div class="scroll-down-limit"></div>
    <div class="container-elemen-1">
        <img src="{{asset('img/t-shirt-2.png')}}" alt="container" class="container-elemen-picture-1" id="container-elemen-picture-1" draggable="false"></img>
    </div>
    <div class="container-elemen-2">
        <img src="{{asset('img/celana-2.png')}}" alt="container" class="container-elemen-picture-2" id="container-elemen-picture-2" draggable="false"></img>
    </div>
    <div class="container-elemen-3">
        <img src="{{asset('img/gelang-2.png')}}" alt="container" class="container-elemen-picture-3" id="container-elemen-picture-3" draggable="false"></img>
    </div>
    <div class="container-elemen-4">
        <img src="{{asset('img/topi-2.png')}}" alt="container" class="container-elemen-picture-4" id="container-elemen-picture-4" draggable="false"></img>
    </div>
    </div>
    </div>
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
    <script>
    document.getElementById('banner-1a').
    ondragstart = function() {
        return false;
    };
    document.getElementById('banner-1b').
    ondragstart = function() {
        return false;
    };
    document.getElementById('banner-1c').
    ondragstart = function() {
        return false;
    };
    document.getElementById('banner-2a').
    ondragstart = function() {
        return false;
    };
    document.getElementById('banner-2b').
    ondragstart = function() {
        return false;
    };
    document.getElementById('banner-2c').
    ondragstart = function() {
        return false;
    };
    document.getElementById('banner-3a').
    ondragstart = function() {
        return false;
    };
    document.getElementById('banner-3b').
    ondragstart = function() {
        return false;
    };
    document.getElementById('banner-3c').
    ondragstart = function() {
        return false;
    };
    document.getElementById('container-elemen-picture-1').
    ondragstart = function() {
        return false;
    };
    document.getElementById('container-elemen-picture-2').
    ondragstart = function() {
        return false;
    };
    document.getElementById('container-elemen-picture-3').
    ondragstart = function() {
        return false;
    };
    document.getElementById('container-elemen-picture-4').
    ondragstart = function() {
        return false;
    };
</script>
</body>
</html>
