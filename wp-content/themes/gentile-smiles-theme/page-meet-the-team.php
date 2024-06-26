<?php
get_header(); ?>

<main>
    <section class="meet-the-team_section">
        <div class="single-page-container team-members">
            
            <?php pageBanner(); ?>
        </div>

       
            
        <div class="breadcrumb_container meet-the-team">
            <a class="parent-page" href="<?php echo site_url('/who-we-are') ?>">Back to Who We Are</a>
            <div class="child-page">Meet the Team</div>
        </div>
                    

        <div class="team-container">

                <div class="team-member">
                    <div class="team-member_image">
                        <img src="<?php echo get_theme_file_uri('/images/Dr Johnson.png')?>" alt="">
                    </div>
                    <div class="team-member_info">
                        <h3>Simon Johnson</h3>
                        <p>Orthodontist</p>
                    </div>
                </div>

            <?php 
            $teamMembers = new WP_Query(array(
                'post_type' => 'team',
                'meta_key'=> 'team_member_occupation',
                'orderby'=> 'meta_value',
                'order' => 'ASC'
            ));
            
            while($teamMembers -> have_posts()){
                $teamMembers -> the_post(); ?>
                <div class="team-member">
                    <div class="team-member_image">
                        <?php the_post_thumbnail('teamPortrait'); ?>
                    </div>
                    <div class="team-member_info">
                        <h3><?php the_field('team_member_name'); ?></h3>
                        <p><?php  the_field('team_member_occupation');?></p>
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