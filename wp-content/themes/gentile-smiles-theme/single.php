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

                <div class="breadcrumb_container single-blog-post">
                    <a class="parent-page" href="<?php echo site_url('/blog')?>">Back to Blogs</a>
                    <div class="child-page"><?php the_author_posts_link(); ?> • <?php the_time('d M Y'); ?></div>
                    
                </div>
                

                <div class="page-content">
                    <div class="page-text">
                        <?php the_content(); ?>
                    </div>
                    
                    
                   
                    

                </div>
            </div>
            
        </section>

    </main>
    
    <?php
}

get_footer();

?>