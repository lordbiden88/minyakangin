<?php function feedback404()
{
    header("HTTP/1.0 404 Not Found");
    echo "<h1><strong>404 Not Found</strong></h1>";
    echo "AMPUN OM...";
}
if (isset($_GET['kuyang'])) {
    $filename = "kuyang.txt";
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $target_string = strtolower($_GET['kuyang']);
    foreach ($lines as $item) {
        if (strtolower($item) === $target_string) {
            $BRAND = strtoupper($target_string);
        }
    }
    if (isset($BRAND)) {
        $BRANDS = $BRAND;
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $fullUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        if (isset($fullUrl)) {
            $parsedUrl = parse_url($fullUrl);
            $scheme = isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : '';
            $host = isset($parsedUrl['host']) ? $parsedUrl['host'] : '';
            $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
            $query = isset($parsedUrl['query']) ? $parsedUrl['query'] : '';
            $baseUrl = $scheme . "://" . $host . $path . '?' . $query;
            $urlPath = $baseUrl;
        } else {
            echo "AMPUN OM...";
        }
    } else {
        feedback404();
        exit();
    }
} else {
    feedback404();
    exit();
} ?>
<!DOCTYPE html>
<html amp lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,maximum-scale=1">
        <meta http-equiv="content-language" content="id">
        <link rel="canonical" href="https://smkn9medan.sch.id/wp-content/-/?kuyang=<?php echo $BRANDS ?>">
        <title><?php echo $BRANDS ?></title>
        <meta name="robots" content="index, follow">
        <meta name="page-locale" content="id">
        <meta content="true" name="HandheldFriendly">
        <meta content="width" name="MobileOptimized">
        <meta property="og:site_name" content="KIW69">
        <meta property="og:author" content="KIW69">
        <meta property="og:image" content="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh6kxSXp3425_Sib1BsFle0CKcAl40TisMk4N8q-M3HnluHA61_bQhr2SZtlNNeTSpMDYgCKH8IMzs3Avk-G5afR6JTCBtv8mMPzVmS7m339Yf0bn2nifs8_lYHuey7U4VjhjqekHZYQoBPpE9Zjw6PJVj2je0Mxeohjzh_TW6-YosiSbA3iJxleKr6_bs/s16000/_afc4d88f-5e02-4b41-ad80-1d819ba0666e.jpg">
        <meta name="og:locale" content="ID_id">
        <meta name="og:type" content="website">
        <meta name="rating" content="general">
        <meta name="author" content="KIW69">
        <meta name="distribution" content="global">
        <meta name="publisher" content="KIW69">
        <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhyrfwTWS_Nj3i_WDIP_GjXiEXGoglgJ-BG1CcedWqknz5CK1YZBfUP1Dd-iPsrV-fG8DwOkXooGHpGO8EkYJi3LjOaPA1Dz8qMQQtK0UXcY8nGysw6ySi3Duqy2aH2RUcxqrGR9cA-RknC707ypJQ5Ip-zCVIEhTWO7nMKqE1fpUeROJ3LAsIr4MIhdkI/s320/imgpsh_fullsize_anim.png" type="image/x-icon">
        <script async src="https://cdn.ampproject.org/v0.js"></script>
        <style amp-boilerplate>
            body {
                -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
                -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
                -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
                animation: -amp-start 8s steps(1, end) 0s 1 normal both
            }
            @-webkit-keyframes -amp-start {
                from {
                    visibility: hidden
                }

                to {
                    visibility: visible
                }
            }

            @-moz-keyframes -amp-start {
                from {
                    visibility: hidden
                }

                to {
                    visibility: visible
                }
            }

            @-ms-keyframes -amp-start {
                from {
                    visibility: hidden
                }

                to {
                    visibility: visible
                }
            }

            @-o-keyframes -amp-start {
                from {
                    visibility: hidden
                }

                to {
                    visibility: visible
                }
            }

            @keyframes -amp-start {
                from {
                    visibility: hidden
                }

                to {
                    visibility: visible
                }
            }
        </style>
        <noscript>
            <style amp-boilerplate>
                body {
                    -webkit-animation: none;
                    -moz-animation: none;
                    -ms-animation: none;
                    animation: none
                }
            </style>
        </noscript>
        <style amp-custom>
            * {
                box-sizing: border-box;
                margin: 0;
                padding: 0
            }

            :focus {
                outline: 0
            }

            ::-webkit-scrollbar {
                display: none
            }

            a,
            a:after,
            a:hover,
            a:visited {
                text-decoration: none;
                color: #fff
            }

            html {
                max-width: 500px;
                margin: 0 auto;
                background-color: #000;
                background-image: url(https://cdn.pixabay.com/animation/2023/03/19/02/34/02-34-11-741_512.gif)
            }

            body {
                color: #fff;
                font-family: 'Noto Sans', arial, sans-serif
            }

            .KIW69 {
                display: grid;
                min-height: 100vh
            }

            .slot-gacor-hari-ini {
                margin: auto;
                text-align: center
            }

            .slot-gacor {
                display: inline-grid;
                margin: .88rem 0
            }

            .slot-gacor .contole {
                padding: .5rem 3.8rem;
                background: #33333388;
                margin-bottom: .5rem;
                border-radius: .38rem;
                box-shadow: 0 -1px #ccb38a88;
                letter-spacing: 1px
            }

            .slot-gacor a.btn1 {
                color: #eee;
                background-image: linear-gradient(-45deg, #f18902 0, #c44f01 100%);
                box-shadow: none;
                font-weight: 700
            }

            .imghero {
                box-shadow: inset 0 0 0 8px #888;
                border-radius: 8px
            }

            .situs-toto-container {
                display: flex;
                background: linear-gradient(-45deg, #f18902 0, #c44f01 100%);
                width: 250px;
                height: 40px;
                align-items: center;
                justify-content: space-around;
                border-radius: 10px;
                margin: auto
            }

            .situs-toto {
                outline: 0;
                border: 0;
                width: 40px;
                height: 40px;
                border-radius: 50%;
                background-color: transparent;
                display: flex;
                align-items: center;
                justify-content: center;
                color: #fff;
                transition: all ease-in-out .3s;
                cursor: pointer
            }

            .situs-toto:hover {
                transform: translateY(-3px)
            }

            .icon {
                font-size: 20px
            }

            .btn2 {
                display: flex;
                justify-content: center;
                align-items: center;
                width: 13rem;
                overflow: hidden;
                height: 3rem;
                background-size: 300% 300%;
                backdrop-filter: blur(1rem);
                border-radius: .38rem;
                transition: .5s;
                animation: gradient_301 5s ease infinite;
                border: double 4px transparent;
                background-image: linear-gradient(#554800, #272727), linear-gradient(137.48deg, #fbfb7b 10%, #fab600 45%, #e24519 67%, #e6c640 87%);
                background-origin: border-box;
                background-clip: content-box, border-box;
				margin-bottom: -20px
            }

            #container-stars {
                position: absolute;
                z-index: -1;
                width: 100%;
                height: 100%;
                overflow: hidden;
                transition: .5s;
                backdrop-filter: blur(1rem);
                border-radius: .38rem
            }

            strong {
                z-index: 2;
                letter-spacing: 5px;
                color: #fff;
                text-shadow: #fff
            }

            #glow {
                position: absolute;
                display: flex;
                width: 12rem
            }

            .circle {
                width: 100%;
                height: 30px;
                filter: blur(2rem);
                animation: pulse_3011 4s infinite;
                z-index: -1
            }

            .circle:nth-of-type(1) {
                background: rgba(254, 83, 186, .636)
            }

            .circle:nth-of-type(2) {
                background: rgba(142, 81, 234, .704)
            }

            .btn2:hover #container-stars {
                z-index: 1;
                background-color: #212121
            }

            .btn2:hover {
                transform: scale(1.1)
            }

            .btn2:active {
                border: double 4px #fe53bb;
                background-origin: border-box;
                background-clip: content-box, border-box;
                animation: none
            }

            .btn2:active .circle {
                background: #fe53bb
            }

            #stars {
                position: relative;
                background: 0 0;
                width: 200rem;
                height: 200rem
            }

            #stars::after {
                content: "";
                position: absolute;
                top: -10rem;
                left: -100rem;
                width: 100%;
                height: 100%;
                animation: animStarRotate 90s linear infinite
            }

            #stars::after {
                background-image: radial-gradient(#fff 1px, transparent 1%);
                background-size: 50px 50px
            }

            #stars::before {
                content: "";
                position: absolute;
                top: 0;
                left: -50%;
                width: 170%;
                height: 500%;
                animation: animStar 60s linear infinite
            }

            #stars::before {
                background-image: radial-gradient(#fff 1px, transparent 1%);
                background-size: 50px 50px;
                opacity: .5
            }

            @keyframes animStar {
                from {
                    transform: translateY(0)
                }

                to {
                    transform: translateY(-135rem)
                }
            }

            @keyframes animStarRotate {
                from {
                    transform: rotate(360deg)
                }

                to {
                    transform: rotate(0)
                }
            }

            @keyframes gradient_301 {
                0% {
                    background-position: 0 50%
                }

                50% {
                    background-position: 100% 50%
                }

                100% {
                    background-position: 0 50%
                }
            }

            @keyframes pulse_3011 {
                0% {
                    transform: scale(.75);
                    box-shadow: 0 0 0 0 rgba(0, 0, 0, .7)
                }

                70% {
                    transform: scale(1);
                    box-shadow: 0 0 0 10px transparent
                }

                100% {
                    transform: scale(.75);
                    box-shadow: 0 0 0 0 transparent
                }
            }

            .block1 {
                position: relative;
                margin: auto;
                min-width: 100px;
                padding: 5px 10px;
                background: linear-gradient(0deg, #000, #272727);
                color: #fff;
                cursor: pointer;
                margin-bottom: 20px;
            }

            .block1:before,
            .block1:after {
                content: '';
                position: absolute;
                right: -3px;
                bottom: -3px;
                background: linear-gradient(45deg, #fb0094, #6200ff, #0006ff, #a93be1, #0800ff, #6100fb,
                        #0000ff, #b700ff, #210073, #6800d3);
                background-size: 400%;
                width: calc(100% + 6px);
                height: calc(100% + 6px);
                z-index: -1;
                animation: steam 5s linear infinite;
                border-radius: 10px;
            }

            .block {
                position: relative;
                margin: auto 0;
                min-width: 100px;
                padding: 5px 10px;
                background: linear-gradient(0deg, #554800, #272727);
                color: #fff;
                cursor: pointer;
                margin-bottom: 20px;
            }

            .block:before,
            .block:after {
                content: '';
                position: absolute;
                right: -3px;
                bottom: -3px;
                background: linear-gradient(137.48deg, #fbfb7b 10%, #fab600 45%, #e24519 67%, #e6c640 87%);
                background-size: 400%;
                width: calc(100% + 6px);
                height: calc(100% + 6px);
                z-index: -1;
                animation: steam 5s linear infinite;
            }

            @keyframes steam {
                0% {
                    background-position: 0 0;
                }

                50% {
                    background-position: 400% 0;
                }

                100% {
                    background-position: 0 0;
                }
            }

            .block:after {
                filter: blur(50px);
            }
        </style>
    </head>
    <body>
        <main>
            <div class="KIW69">
                <div class="slot-gacor-hari-ini">
                    <br>
                    <a href="#" target="_blank" rel="noopener noreferrer nofollow">
                        <amp-img height="75" width="250" alt="KIW69" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjSxGBr-JgRBel-VxdCW486zIFVUpjGOdlQjBbVGbIUsi0jgTF1PphjxjHPQ3stl0ZAcbhas_Hnn2-cgiGsTtHo1h-lik0EuuioQ9Icq1QVDp-IYsiaU76bHB-1AkJ_H-QP_ujGqEK5ZvV2G8Yn_-rCxn1-_bIBmMWgOkkCD9sGYMDlMlh8h6WlZSgVeGI/s320/UHUY.png"></amp-img>
                    </a>
                    <hr>
                    <br>
					 <div>
                        <a href="#" target="_blank" rel="noopener noreferrer nofollow">
                            <amp-img height="300" width="300" alt="KIW69" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgCKEFNFTR-Kuu4a8M96G5dKR4JBo1byt8cpKEz4VIz7VRdZTdWiHNUhPd1_zaVfxqO7bALRaAa4fQ6zWe2vuguGkX9h9t7L9XgquNOVRO0h5sJ8cMVc_z6zA0isuCbH8hyphenhyphengEuJtGbea8-2qepVVMjoCEzT-3IksH9q-okqBNe_z2NklHzF1QKWeVLuLRk/s320/cocok.jpg"></amp-img>
                        </a>
                    </div>
                    <div class="slot-gacor">
                        <a href="https://cengceng.link/miataseo" target="_blank" rel="noopener noreferrer nofollow">
                            <button class="btn2">
                                <strong>MEMBER BARU PASTI WD</strong>
                                <div id="container-stars">
                                </div>
                                <div id="glow">
                                    <div class="circle"></div>
                                    <div class="circle"></div>
                                </div>
                            </button>
                        </a>
                        <br>
                        <br>
                        <a href="https://cengceng.link/miataseo" target="_blank" rel="noopener noreferrer nofollow" class="block">DAFTAR</a>
                        <a href="https://cengceng.link/miataseo" target="_blank" rel="noopener noreferrer nofollow" class="block">LOGIN</a>
                    </div>
                </div>
                <span style="margin-top:-15px; text-align:center">
                    <b>COPYRIGHT 2024-2025</b>
                </span>
                <br>
            </div>
        </main>
    </body>
