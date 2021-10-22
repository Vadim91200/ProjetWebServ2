<!DOCTYPE html>
<html lang="fr">

<head>
    <title>My Online shop</title>
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

<header class="py-sm-3 pt-3 pb-2" id="home">
    <div class="container">
        <!-- nav -->
        <div class="top-w3pvt d-flex">
            <div id="logo">
                <h1> <a href="index.php?controller=home"><span class="log-w3pvt">B</span>aggage</a> <label class="sub-des">Online Store</label></h1>
            </div>

            <div class="forms ml-auto">
                <a href="index.php?controller=login" class="btn"><span class="fa fa-user-circle-o"></span> Sign In</a>
                <a href="index.php?controller=register" class="btn"><span class="fa fa-pencil-square-o"></span> Sign Up</a>
            </div>
        </div>
        <div class="nav-top-wthree">
            <nav>
                <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                <input type="checkbox" id="drop" />
                <ul class="menu">
                    <?php foreach([
                        ['controller' => 'home', 'label' => 'Home'],
                        ['controller' => 'shop', 'label' => 'Shop'],
                        ['controller' => 'contact', 'label' => 'Contact Us']
                    ] as $item) {
                    ?>

                        <li <?php if ($item['controller'] == $controller) echo 'class="active"' ?>><a href="index.php?controller=<?php echo $item['controller'] ?>"><?php echo $item['label'] ?></a></li>
                    <?php } ?>
                </ul>
            </nav>
            <!-- //nav -->
            <div class="clearfix"></div>
        </div>
    </div>
</header>
