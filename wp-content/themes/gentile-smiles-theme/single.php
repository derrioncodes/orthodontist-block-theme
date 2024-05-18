<?php 

get_header(); 

while(have_posts()) {
    the_post();?>
    
    <main>
        <section class="single-page-section">
            <div class="single-page-container">

            <?php 
                pageBanner();
            ?>
                

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