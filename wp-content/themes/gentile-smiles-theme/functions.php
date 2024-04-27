<?php

function gentile_smiles_files(){
    wp_enqueue_script('main-js', get_theme_file_uri('/js/app.js'), NULL, '1.0', true );

    wp_enqueue_style('font-awesome', '//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap' );
    wp_enqueue_style('google-fonts', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('main_styles', get_theme_file_uri('/css/styles.css'));
    wp_enqueue_style('header_styles', get_theme_file_uri('/css/nav.css'));
    wp_enqueue_style('hero_styles', get_theme_file_uri('/css/hero.css'));
    wp_enqueue_style('footer_styles', get_theme_file_uri('/css/footer.css'));
}

add_action('wp_enqueue_scripts', 'gentile_smiles_files');

?>

