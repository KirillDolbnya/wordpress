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
            <?php
            wp_nav_menu([
                'theme_location' => 'header',
                'container'       => false,
                'menu_class'      => 'navbar-nav',
                'menu_id'      => false,
                'echo'            => true,
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'           => 2,
                'walker'          => new bootstrap_4_walker_nav_menu()
            ]);
            ?>
        </div>
    </div>
</nav>
<!--MAIN HEADER AREA END -->
