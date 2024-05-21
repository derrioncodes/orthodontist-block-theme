<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title></title>
</head>
<body <?php body_class(); ?>>
    
<header>
        <nav class="desktop-nav">
            <div class="brand-name">
                <a href="<?php echo site_url() ?>">Gentle &nbsp;<span>| ORTHODONTICS</span></a>
            </div>


            <ul class="nav-links">
                <li <?php if (is_page('who-we-are') or wp_get_post_parent_id(0) == 26 )  echo 'class = "current-menu-item" ' ?>>
                    <a href="<?php echo site_url('/who-we-are') ?>">Who We Are</a>
                </li>
                <li <?php if (is_page('what-we-do') or wp_get_post_parent_id(0) == 92 )  echo 'class = "current-menu-item" ' ?>>
                    <a href="<?php echo site_url('/what-we-do') ?>">What We Do</a>
                </li>
                <li>
                    <a href="#">New Patients</a>
                </li>
                <li>
                    <a href="#">Contact Us</a>
                </li>
            </ul>

            <a class="btn transparent-bg__brand-blue-outline__btn nav-button" href="#">
                Free Exam
            </a>

            
            <button class="open-mobile-menu" type="button">
                <i class="fa fa-bars"></i>
            </button>
            
            <!-- <button type="button" class="open-mobile-menu">
                <a href="#">
                    <i class="fa fa-bars"></i>
                </a>
            </button> -->
        </nav>

        <section class="mobile-nav_container">
            <div class="mobile-nav">
                <div class="mobile-nav_header">
                    <!-- <div class="brand-logo_text"><a href="#">Brand</a></div> -->

                    <div class="brand-name">
                        <a href="#">Gentle &nbsp;<span>| ORTHODONTICS</span></a>
                    </div>
                    
                    <button class="close-mobile-menu-btn">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
            </div>
            <ul class="mobile-nav_menu">
                <li><a href="#">Who We Are</a></li>
                <li><a href="#">What We Do</a></li>
                <li><a href="#">New Patients</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
            <div class="free-exam_btn">
                <a class="btn transparent-bg__brand-blue-outline__btn free-exam-nav-button" href="#">
                    Free Exam
                </a>
            </div>
            
        </section>

    </header>