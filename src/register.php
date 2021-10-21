<!--
Author:W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Baggage Ecommerce Category Bootstrap Responsive Web Template | Sign Up :: W3layouts</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Baggage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->
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
        <?php include 'header.php'; ?>
        <!-- //header -->

    </div>

    <!-- //banner-->
    <!--/login -->
    <section class="banner-bottom py-5">
        <div class="container">
            <div class="content-grid">
                <div class="text-center icon">
                    <span class="fa fa-user-circle-o"></span>
                </div>
                <div class="content-bottom">
                    <form action="proccess_register.php" method="post">
                        <div class="field-group">
                            
                            <div class="content-input-field">
                                <input name="LastName" id="text1" type="text" value="" placeholder="User LastName" required="">
                            </div>
                        </div>
                        <div class="field-group">
                            
                            <div class="content-input-field">
                                <input name="FirstName" id="text2" type="text" value="" placeholder="User FirstName" required="">
                            </div>
                        </div>
                        <div class="field-group">

                            <div class="content-input-field">
                                <input name="username" id="text3" type="email" value="" placeholder="User Email" required="">
                            </div>
                        </div>
                        <div class="field-group">

                            <div class="content-input-field">
                                <input name="userphone" id="text4" type="text" value="" placeholder="UserPhone" required="">
                            </div>
                        </div>
                        <div class="field-group">
                            <div class="content-input-field">
                                <input name="password" id="myInput" type="Password" placeholder="Password">
                            </div>
                        </div>
                        <div class="content-input-field">
                            <button type="submit" class="btn">Sign Up</button>
                        </div>
                        <div class="list-login-bottom text-center mt-lg-5 mt-4">

                            <a href="#" class="">By clicking Signup, I agree to your terms</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
