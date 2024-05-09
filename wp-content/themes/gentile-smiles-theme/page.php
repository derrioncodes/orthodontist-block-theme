<?php 

get_header(); 

while(have_posts()) {
    the_post();?>
    
    <main>
        <section class="single-page-section">
            <div class="single-page-container">
                <div class="single-page-banner" style="background-image: url(<?php echo get_theme_file_uri('/images/single-page-banner.png')?>;">
                    <div id="overlay"></div>
                    <div class="banner">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>

                <?php 
                $theParentPage = wp_get_post_parent_id(get_the_ID());
                    if($theParentPage) { ?>
                        <div class="breadcrumb_container">
                            <a class="parent-page" href="<?php echo get_permalink($theParentPage)?>">Back to <?php echo get_the_title($theParentPage); ?></a>
                            <div class="child-page"><?php the_title(); ?></div>
                        </div>
                    <?php }
                ?>
                

                <div class="page-content">
                    <div class="page-text">
                        <?php the_content(); ?>
                    </div>
                    
                    <!-- <div class="page-widget">
                        <div class="widget-header">
                            <h3>In this Section</h3>
                        </div>
                        <div class="widget-links">
                            <ul>
                                <li>
                                    <a href="#">What sets us apart</a>
                                </li>
                                <li>
                                    <a href="#">Meet Dr. Johnson</a>
                                </li>
                                <li>
                                    <a href="#">Meet the team</a>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                   
                    

                </div>
            </div>
            
        </section>

    </main>
    
    <?php
}

get_footer();

?>