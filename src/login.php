<?php session_start() ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title></title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Baggage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
    <!-- //Fonts -->

</head>

<body>
    <div class="main-sec inner-page">
        <!-- //header -->
        <header class="py-sm-3 pt-3 pb-2" id="home">
            <div class="container">
                <!-- nav -->
                <div class="top-w3pvt d-flex">
                    <div id="logo">
                        <h1> <a href="index.html"><span class="log-w3pvt">B</span>aggage</a> <label class="sub-des">Online Store</label></h1>
                    </div>

                    <div class="forms ml-auto">
                        <a href="login.html" class="btn"><span class="fa fa-user-circle-o"></span> Sign In</a>
                        <a href="register.html" class="btn"><span class="fa fa-pencil-square-o"></span> Sign Up</a>
                    </div>
                </div>
                <div class="nav-top-wthree">
                    <nav>
                        <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu">
                            <li class="active"><a href="index.html">Home</a></li>                            
                            <li><a href="shop.html">Catalogue</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                    <!-- //nav -->
                    <div class="clearfix"></div>
                </div>
            </div>
        </header>
        <!-- //header -->

    </div>

    <!-- //banner-->
    <!--/login -->
    <section class="banner-bottom py-5">
        <div class="container">
            <div class="content-grid">
                <div class="text-center icon">
                    <span class="fa fa-unlock-alt"></span>
                </div>
                <div class="content-bottom">
                    <form action="proccess_login.php" method="post">
                        <div class="field-group">
                            <div class="content-input-field">
                                <input name="username" id="username" type="text" value="" placeholder="User Name" required="">
                            </div>
                        </div>
                        <div class="field-group">
                            <div class="content-input-field">
                                <input name="password" id="myInput" type="Password" placeholder="Password">
                            </div>
                        </div>
                        <div class="content-input-field">
                            <button type="submit" class="btn">Sign In</button>
                        </div>
                        <ul class="list-login">
                            <li class="switch-slide">
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                    keep Logged in
                                </label>
                            </li>
                            <li>
                                <a href="#" class="text-right">Forgot password?</a>
                            </li>
                            <li class="clearfix"></li>
                        </ul>
                        <ul class="list-login-bottom">
                            <li class="">
                                <a href="register.html" class="">Don't have an Account?</a>
                            </li>
                            <li class="">
                                <a href="#" class="text-right">Need Help?</a>
                            </li>
                            <li class="clearfix"></li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /login -->

</body>

</html>
