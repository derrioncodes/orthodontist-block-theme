<?php
get_header(); ?>

<main>
    <section class="meet-the-team_section">
        <div class="single-page-container team-members">
            <div class="single-page-banner" style="background-image: url(<?php echo get_theme_file_uri('/images/single-page-banner.png')?>;">
                <div id="overlay"></div>
                <div class="banner">
                    <h1>Meet the Team</h1>
                    
                </div>
            </div>
        </div>

       
            
        <div class="breadcrumb_container meet-the-team">
            <a class="parent-page" href="<?php echo site_url('/who-we-are') ?>">Back to Who We Are</a>
            <div class="child-page">Meet the Team</div>
        </div>
                    

        <div class="team-container">
            <?php while(have_posts()){
                the_post(); ?>
                <div class="team-member">
                    <div class="team-member_image">
                        <img src="<?php echo get_theme_file_uri('/images/Dr Johnson.png')?>" alt="">
                    </div>
                    <div class="team-member_info">
                        <h3><?php  the_title();?></h3>
                        <p><?php  the_content();?></p>
                    </div>
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