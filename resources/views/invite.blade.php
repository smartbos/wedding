<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lee & Wang's Wedding</title>

    <!-- Bootstrap Core CSS -->
    <link href="/startbootstrap-grayscale-1.0.4/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/startbootstrap-grayscale-1.0.4/css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        body {
            background-color: #ffffff;
            color: #000000;
        }

        .navbar-custom {
            background-color: #ffffff;
        }

        .navbar-custom a {
            color: #000000;
        }

        .navbar-custom.top-nav-collapse {
            background-color: #ffffff;
            color: #000000;
        }

        .navbar-custom.top-nav-collapse a {
            color: #000000;
        }

        .navbar-custom .nav li a:hover,
        .navbar-custom .nav li.active a:hover {
            color: #42dca3;
        }

        #first, #second {
            color:#000000;
            position: relative;
            background: #ffffff;
            overflow: hidden;
            opacity: 1;
        }

        .content-section {
            padding-top:150px;
            padding-bottom:0;
        }

        .content-section > .container {
            padding-bottom: 50px;
        }

        .cover {
            object-fit: cover;
        }

        #first-img {
            width: 100%;
            height: 200px;
            background-image: url("http://www.koreahouse.or.kr/design/default/images/info01_img01.gif");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: 50% 50%;
        }

        #second-img {
            width: 100%;
            height: 200px;
            background-image: url('http://cdn.pinspot.co.kr/room/1155/960x720/XshT2aJYrtG1lMvq47eZ.JPG');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: 50% 50%;
        }​​
    </style>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">
                <!--李炫錫 王宣映 結婚-->
                Lee & Wang's Wedding
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#first">Wedding</a>
                </li>
                <li>
                    <a class="page-scroll" href="#second">Party</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Contact</a>
                </li>
                <li>
                    <a class="page-scroll" href="#match">Some</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Intro Header -->
<!--
<header class="intro">
    <div class="intro-body">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="brand-heading">왕선영 이현석 결혼</h1>
                    <p class="intro-text">A free, responsive, one page Bootstrap theme.<br>Created by Start Bootstrap.</p>
                    <a href="#about" class="btn btn-circle page-scroll">
                        <i class="fa fa-angle-double-down animated"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
-->

<section id="first" class="content-section text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>1부 전통혼례</h2>
                <p>2015년 11월 6일 오후 4시</p>
                <p>
                    서울시 중구 퇴계로36길 10 한국의집
                </p>
            </div>
        </div>
    </div>
    <div id="first-img"></div>
</section>

<!-- Map Section -->
<div id="map2" style="width:100%;height:50%;"></div>

<section id="second" class="content-section text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>2부 웨딩파티</h2>
                <p>2015년 11월 6일 오후 7시</p>
                <p>
                    서울시 마포구 토정로 136-13 J&C빌딩 5층
                </p>
            </div>
        </div>
    </div>
    <div id="second-img"></div>
</section>

<!-- Map Section -->
<div id="map3" style="width:100%;height:50%;"></div>

<!-- Contact Section -->
<section id="contact" class="content-section text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Gilchi?</h2>
                <p></p>
                <p>못찾겠다 꾀꼬리 외칠 번호</p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="tel:010-2956-3707" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">신랑 010.2956.3707</span></a>
                    </li>
                    <li>
                        <a href="tel:010-2956-3707" class="btn btn-default btn-lg"><i class="fa fa-home fa-fw"></i> <span class="network-name">신부 010.6889.1227</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<hr>

<section id="match" class="content-section text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Solo?</h2>
                <p>
                    신랑신부 지인들 참 좋은데, 정말 좋은데, 뭐라고 설명할 방법이 없네. <br>
                </p>
                <p>
                    @if(!Auth::check())
                        @if($user && $user->want_match)
                            <a href="/matchOut" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-lw"></i> 신청취소</a>
                        @else
                            <a href="/matchIn" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-lw"></i> 소개팅인듯 소개팅아닌 소개팅같은거 <br/>페이스북으로 신청</a>
                            <br />
                            <span style="color:#aaaaaa; font-size:16px;">못해줄 수도 있습니다...<br> 페이스북에 게시하지 않습니다</span>
                        @endif
                    @else
                        @if($user && $user->want_match)
                            <a href="/matchOut" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-lw"></i> 신청취소</a>
                        @else
                            <a href="/matchIn" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-lw"></i> 소개팅인듯 소개팅아닌 <br/>소개팅같은거 신청</a>
                            <br />
                            <span style="color:#aaaaaa; font-size:16px;">못해줄 수도 있습니다...</span>
                        @endif
                    @endif
                </p>
            </div>
        </div>
    </div>
</section>

<!-- jQuery -->
<script src="/startbootstrap-grayscale-1.0.4/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/startbootstrap-grayscale-1.0.4/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="/startbootstrap-grayscale-1.0.4/js/jquery.easing.min.js"></script>

<!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
<script type="text/javascript">

    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map2'), {
            center: {lat: 37.5603973, lng: 126.9946112},
            zoom: 17,
            scrollwheel: false,
            draggable: false
        });

        var marker = new google.maps.Marker({
            position: {lat: 37.5603973, lng: 126.9946112},
            map: map,
            title: '한국의집'
        });

        map = new google.maps.Map(document.getElementById('map3'), {
            center: {lat: 37.5448814, lng: 126.9258274},
            zoom: 16
        });

        var marker = new google.maps.Marker({
            position: {lat: 37.5448814, lng: 126.9258274},
            map: map,
            title: 'J&C빌딩'
        });
    }

</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRoTaTIiYr-xf7nhUR8sQcCRBNVaoQjg0&callback=initMap"></script>

<!-- Custom Theme JavaScript -->
<script src="/startbootstrap-grayscale-1.0.4/js/grayscale.js"></script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-69156579-1', 'auto');
    ga('send', 'pageview');

</script>
</body>

</html>

