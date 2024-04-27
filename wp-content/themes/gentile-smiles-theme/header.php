<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>Document</title>
</head>
<body>
    
<header>
        <nav class="desktop-nav">
            <div class="brand-name">
                <a href="#">Gentle &nbsp;<span>| ORTHODONTICS</span></a>
            </div>
            <ul class="nav-links">
                <li>
                    <a href="#">Who We Are</a>
                </li>
                <li>
                    <a href="#">What We Do</a>
                </li>
                <li>
                    <a href="#">New Patients</a>
                </li>
                <li>
                    <a href="#">Contact Us</a>
                </li>
            </ul>

            <button type="button" class="nav-button">
                <a href="#">
                    Free Exam
                </a>
            </button>

            <button type="button" class="open-mobile-menu">
                <a href="#">
                    <i class="fa fa-bars"></i>
                </a>
            </button>
        </nav>

        <section class="mobile-nav_container">
            <div class="mobile-nav">
                <div class="mobile-nav_header">
                    <!-- <div class="brand-logo_text"><a href="#">Brand</a></div> -->

                    <div class="brand-name">
                        <a href="#">Gentle &nbsp;<span>| ORTHODONTICS</span></a>
                    </div>
                    
                    <button class="close-mobile-menu-btn"><i class="fa fa-close"></i></button>
                </div>
            </div>
            <ul class="mobile-nav_menu">
                <li><a href="#">Who We Are</a></li>
                <li><a href="#">What We Do</a></li>
                <li><a href="#">New Patients</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
            <div class="free-exam_btn">
                <button type="button" class="free-exam-nav-button">
                    <a href="#">
                        Free Exam
                    </a>
                </button>
            </div>
        </section>
    </header>