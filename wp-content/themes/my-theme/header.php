<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">
<head>

    <!-- ** Basic Page Needs ** -->
    <meta charset="utf-8">
    <?php wp_head(); ?>
    <title>Promodise - Startup Business Bootstrap Template</title>

    <!-- ** Mobile Specific Metas ** -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Business Bootstrap Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Promodise Template v1.0">

    <!-- theme meta -->
    <meta name="theme-name" content="promodise" />

    <!--Favicon-->
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

</head>
<body data-spy="scroll" data-target="#mainNav">

<nav class="navbar navbar-expand-lg fixed-top trans-navigation">
    <div class="container">
       <?php
            if (has_custom_logo()){
                echo get_custom_logo();
            }
       ?>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon">
             <i class="fa fa-bars"></i>
           </span>
       </button>

        <div class="collapse navbar-collapse justify-content-end" id="mainNav">
            <ul class="navbar-nav ">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#!" id="navbarWelcome" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Home <i class="fas fa-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarWelcome">
                        <li><a class="dropdown-item" href="index.html">Home-1</a></li>
                        <li><a class="dropdown-item" href="index-2.html">Home-2</a></li>
                        <li><a class="dropdown-item" href="index-3.html">Onepage</a></li>

                        <li class="dropdown dropdown-submenu dropright">
                            <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0301" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>

                            <ul class="dropdown-menu" aria-labelledby="dropdown0301">
                                <li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
                                <li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu dropleft">
                            <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0501" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>

                            <ul class="dropdown-menu" aria-labelledby="dropdown0501">
                                <li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
                                <li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link smoth-scroll" href="about.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link smoth-scroll" href="service.html">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link smoth-scroll" href="pricing.html">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link smoth-scroll" href="blog.html">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link smoth-scroll" href="contact.html">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--MAIN HEADER AREA END -->
