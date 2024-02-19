<?php global $homeo_chakra ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

   <?php wp_head(); ?>

</head>
<body>
<!--#Header Start-->
<header class="homeochakra-main-header w-100">
    <div class="header-top w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="d-flex justify-content-end">
                    <ul>
                        <!-- *Dispalying Data from Redux* -->
                        <!-- <li><a href="<?php //echo $homeo_chakra['login-link'] ?>"><i class="fa-solid fa-key"></i> <?php// echo $homeo_chakra['login-label'] ?></a></li> -->
                        <?php if( is_user_logged_in() ){ ?>
                        <li><a href="<?php echo wp_logout_url( home_url()); ?>" title="Logout"><i class="fa-regular fa-circle-user"></i> Logout</a><li>
                        <?php }else{ ?>
                        <li><a href="<?php echo $homeo_chakra['login-link'] ?>"><i class="fa-solid fa-user-nurse"></i> <?php echo $homeo_chakra['login-label'] ?></a></li>
                        <li><a href="<?php echo $homeo_chakra['register-link'] ?>"><i class="fa-sharp fa-solid fa-notes-medical"></i> <?php echo $homeo_chakra['register-label'] ?></a></li>
                        <?php } ?>
                        <li><a href="<?php echo $homeo_chakra['tc-link'] ?>" target="_blank"><button type="button" class="btn btn-login"><?php echo $homeo_chakra['tc-label'] ?></button></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-nav w-100">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <a href="<?php echo get_site_url(); ?>" class="homeochakra-header-logo"><img src="<?php echo $homeo_chakra['header-logo']['url'] ?>" alt="Homeochakra"></a> 
                <nav class="homeochakra-nav">
                    <div class="hamburger">
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                    <div class="homeochakra-nav__sup homeochakra-desktop-menu">

                        <?php
                            /**
                             * Display Main Menu
                             */ 

                            $args = array(
                                'theme_location' => 'main-menu',
                                'menu' => 'main-menu',
                                'container' => '',
                                'container_class' => 'a1care-nav__sup a1care-desktop-menu',
                                'items_wrap' => '<ul id = "%1$s" class = "homeochakra-nav__sup__list">%3$s</ul>',
                            );
                        
                            wp_nav_menu( $args );
                        ?>
                        
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="homeochakra-nav__sup homeochakra-mobile-menu">

        <?php
            /**
             * Display Main Menu
             */ 

            $args = array(
                'theme_location'    => 'main-menu',
                'menu'              => 'main-menu',
                'container'         => '',
                'container_class'   => 'a1care-nav__sup a1care-desktop-menu',
                'items_wrap'        => '<ul id = "%1$s" class = "homeochakra-nav__sup__list">%3$s</ul>',
                'after'             => '<i class="arw-nav fas fa-plus"></i>',
            );
        
            wp_nav_menu( $args );
        ?>
        
    </div>
</header>
<!--#Header End-->