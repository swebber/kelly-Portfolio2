<?php
$isActive = function ($page) use ($controller) {
    echo ($controller == $page) ? ' class="active"' : '';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <!--<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>-->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://use.fontawesome.com/7a60f06c6d.js"></script>
        <title></title>
        <link rel="stylesheet" href="/assets/css/fonts.css">
        <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/css/main.css">
    </head>
    <body>
        <div class="container">
            <!-- Static navbar -->
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div>
                        <a class="navbar-brand" href="/">Kelly Webber</a> <span class="sub-brand">Graphic Design</span>
                    </div>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li <?php $isActive('home'); ?>><a href="/">Home</a></li>
                        <li <?php $isActive('about'); ?>><a href="/about">About</a></li>
                        <li <?php $isActive('portfolio'); ?>><a href="/portfolio">Portfolio</a></li>
                        <li <?php $isActive('resume'); ?>><a href="/resume">Resume</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </nav>

            <?php require_once('routes.php'); ?>
            <footer>
                <p>
                    <a href="mailto:kwebber@mica.edu" target="_blank"><i class="fa fa-envelope-o fa-3x" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/kteagan94/" target="_blank"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a>
                    <a href="https://www.behance.net/Kelly-Webber" target="_blank"><i class="fa fa-behance fa-3x" aria-hidden="true"></i></a>
                </p>
                <p><i>Baltimore, MD + Philadelphia, PA</i></p>
            </footer>
        </div> <!-- container -->

        <!-- Bootstrap and core JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/jquery/dist/jquery.min.js"><\/script>');</script>
        <script src="/assets/bootstrap/js/bootstrap.min.js"></script>

    </body>
</html>
