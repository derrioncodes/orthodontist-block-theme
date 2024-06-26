<?php 

get_header(); 

while(have_posts()) {
    the_post();?>
    
    <main>
        <section class="single-page-section">
            <div class="single-page-container">
                <?php pageBanner(); ?>

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
                    
                    <?php 
                    $testArray = get_pages(array(
                        'child_of' => get_the_ID()
                    ));

                    if($theParentPage or $testArray ) { ?>
                    <div class="page-widget">
                        <div class="widget-header">
                            <h3>
                                <a href="<?php get_permalink($theParentPage) ?>"><?php echo get_the_title($theParentPage) ?></a>
                            </h3>
                        </div>
                        <div class="widget-links">
                            <ul>
                                <?php 
                                if($theParentPage){
                                    $findChildrenOf = $theParentPage;
                                } else {
                                    $findChildrenOf = get_the_ID();
                                }
                                 wp_list_pages(array(
                                    'title_li' => NULL,
                                    'child_of' => $findChildrenOf,
                                    'sort_column' => 'menu_order'
                                 ));

                                ?>
                            </ul>
                        </div>
                    </div>
                   <?php } ?>
                   
                    

                </div>
            </div>
            
        </section>

    </main>
    
    <?php
}

get_footer();

?>