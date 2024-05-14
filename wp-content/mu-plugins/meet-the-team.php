<?php

function gentile_smiles_meet_the_team_posts(){
    register_post_type('team', array(
        'rewrite' => array('slug' => 'who-we-are/team'),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Team',
            'add_new_item' => 'Add New Team Member',
            'edit_item' => 'Edit Team Member',
            'all_items' => 'All Team Members',
            'singular_name' => 'Team',
            'add_new' => 'Add New Member'
        ),
        'menu_icon' => 'dashicons-buddicons-buddypress-logo'
    ));
}

add_action('init', 'gentile_smiles_meet_the_team_posts');
?>