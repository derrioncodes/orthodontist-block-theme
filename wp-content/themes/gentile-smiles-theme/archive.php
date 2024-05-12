<?php
get_header(); ?>

<main>
    <section class="all-blogs_section">
        <div class="single-page-container all-blogs-banner">
            <div class="single-page-banner" style="background-image: url(<?php echo get_theme_file_uri('/images/single-page-banner.png')?>;">
                <div id="overlay"></div>
                <div class="banner">
                    <h1><?php if(is_category()) {
                        echo 'Category - ';single_cat_title();
                    } 
                    if(is_author()){
                        echo 'Posts by '; the_author();
                    } ?></h1>
                </div>
            </div>
        </div>

        <div class="all-blogs_container">

            <?php while(have_posts()){
                the_post(); ?>

                <div class="single-blog">
                    <div class="blog-image">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo get_theme_file_uri('/images/blog1image.png')?>" alt="" />
                        </a>
                        
                    </div>
                    
                    <div class="blog-info">
                        <p class="author"> <?php the_author_posts_link(); ?> • <?php the_time('d M Y'); ?></p>
                        <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title();?></h3>
                        <div class="blog_excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>

                    <?php get_the_category_list(' ')?>
                        <?php the_category();
                    ?>
                </div>

            <?php }
            ?>
        </div>
        <div class="pagination-links">  
        <?php 
            echo paginate_links();
        ?>
            
        </div>
        

    </section>
</main>

<?php get_footer();
?>