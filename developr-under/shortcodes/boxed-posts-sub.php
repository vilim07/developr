<?php
function boxed_posts_sub(){
    ob_start();
    $query = new WP_Query(
        array(
            'post_type' => 'boxed-posts',
            'post_status' => 'publish',
            'order' => 'ASC',
            'orderby' => 'menu_order',
            'posts_per_page' => 10
        )
        );

    if($query->have_posts()):?>
        <?php while ($query->have_posts()):
            $query->the_post();?>

            <div class="latest-sub">
                    <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
            </div>
            
        <?php endwhile; ?>
    </div>
    <?php endif; ?>
<?php
wp_reset_query();
return ob_get_clean();
}
add_shortcode('boxed_posts_sub', 'boxed_posts_sub');