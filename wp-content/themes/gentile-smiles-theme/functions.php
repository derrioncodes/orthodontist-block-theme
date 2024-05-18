<?php

function pageBanner($args = NULL){
    if(!isset($args['title'])) {
      $args['title'] = get_the_title();
    }



    if (!isset($args['banner'])) {
        if(get_field('page_banner_background_image') AND !is_archive() AND !is_home()){
            $args['banner'] = get_field('page_banner_background_image')['sizes']['pageBanner'];
        } else {
            $args['banner'] = get_theme_file_uri('/images/single-page-banner.png');
        }

    }

    ?>
    <div class="single-page-banner" style="background-image: url(<?php echo $args['banner']; ?>);">
        <div id="overlay"></div>
        <div class="banner">
            <h1><?php echo $args['title'] ?></h1>
        </div>
    </div>
<?php }

function gentile_smiles_files(){
    wp_enqueue_script('main-js', get_theme_file_uri('/src/index.js'), NULL, '1.0', true );

    wp_enqueue_style('font-awesome', '//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap' );
    wp_enqueue_style('google-fonts', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('main_styles', get_theme_file_uri('/css/styles.css'));
    wp_enqueue_style('header_styles', get_theme_file_uri('/css/nav.css'));
    wp_enqueue_style('hero_styles', get_theme_file_uri('/css/hero.css'));
    wp_enqueue_style('home_services_styles', get_theme_file_uri('/css/home-services.css'));
    wp_enqueue_style('know_us_styles', get_theme_file_uri('/css/know-us.css'));
    wp_enqueue_style('meet_doctor_styles', get_theme_file_uri('/css/meet-doctor.css'));
    wp_enqueue_style('what_we_do_styles', get_theme_file_uri('/css/what-we-do.css'));
    wp_enqueue_style('reviews_styles', get_theme_file_uri('/css/reviews.css'));
    wp_enqueue_style('single_page_styles', get_theme_file_uri('/css/single-page.css'));
    wp_enqueue_style('all_blogs_styles', get_theme_file_uri('/css/blogs.css'));
    wp_enqueue_style('all_team_styles', get_theme_file_uri('/css/team.css'));
    wp_enqueue_style('footer_styles', get_theme_file_uri('/css/footer.css'));
}

add_action('wp_enqueue_scripts', 'gentile_smiles_files');

function gentile_smiles_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('teamPortrait', 236, 350);
    add_image_size('pageBanner', 1500, 250, true);
}

add_action('after_setup_theme', 'gentile_smiles_features');





?>

