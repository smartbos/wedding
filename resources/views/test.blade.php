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
            padding-bottom: 100px;
        }

        .content-section > .container_small {
            padding-bottom: 20px;
        }

        .cover {
            object-fit: cover;
        }

        .maptext {
            padding: 10px 30px 0 30px;
            font-size: 14px;
            color:#555555;
        }

        #first-img {
            width: 100%;
            height:200px;
            background-image: url("http://www.koreahouse.or.kr/design/default/images/info01_img01.gif");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: 50% 50%;
        }

        #second-img {
            width: 100%;
            height:200px;
            background-image: url('http://cdn.pinspot.co.kr/room/1155/960x720/XshT2aJYrtG1lMvq47eZ.JPG');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: 50% 65%;
        }​​
    </style>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<script>
    // This is called with the results from from FB.getLoginStatus().
    function statusChangeCallback(response) {
        console.log('statusChangeCallback');
        console.log(response);
        // The response object is returned with a status field that lets the
        // app know the current login status of the person.
        // Full docs on the response object can be found in the documentation
        // for FB.getLoginStatus().
        if (response.status === 'connected') {
            // Logged into your app and Facebook.
            testAPI();
        } else if (response.status === 'not_authorized') {
            // The person is logged into Facebook, but not your app.
            document.getElementById('status').innerHTML = 'Please log ' +
                    'into this app.';
        } else {
            // The person is not logged into Facebook, so we're not sure if
            // they are logged into this app or not.
            document.getElementById('status').innerHTML = 'Please log ' +
                    'into Facebook.';
        }
    }

    // This function is called when someone finishes with the Login
    // Button.  See the onlogin handler attached to it in the sample
    // code below.
    function checkLoginState() {
        FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
        });
    }

    window.fbAsyncInit = function() {
        FB.init({
            appId      : '361562150596021',
            cookie     : true,  // enable cookies to allow the server to access
                                // the session
            xfbml      : true,  // parse social plugins on this page
            version    : 'v2.2' // use version 2.2
        });

        // Now that we've initialized the JavaScript SDK, we call
        // FB.getLoginStatus().  This function gets the state of the
        // person visiting this page and can return one of three states to
        // the callback you provide.  They can be:
        //
        // 1. Logged into your app ('connected')
        // 2. Logged into Facebook, but not your app ('not_authorized')
        // 3. Not logged into Facebook and can't tell if they are logged into
        //    your app or not.
        //
        // These three cases are handled in the callback function.

        FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
        });

    };

    // Load the SDK asynchronously
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    // Here we run a very simple test of the Graph API after login is
    // successful.  See statusChangeCallback() for when this call is made.
    function testAPI() {
        console.log('Welcome!  Fetching your information.... ');
        FB.api('/me', function(response) {
            console.log('Successful login for: ' + response.name);
            document.getElementById('status').innerHTML =
                    'Thanks for logging in, ' + response.name + '!';
        });
    }
</script>

<!--
  Below we include the Login Button social plugin. This button uses
  the JavaScript SDK to present a graphical Login button that triggers
  the FB.login() function when clicked.
-->

<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>

<div id="status">
</div>
</body>

</html>

