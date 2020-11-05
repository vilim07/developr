<?php
function boxed_posts_alt(){
    ob_start();
    $query = new WP_Query(
        array(
            'post_type' => 'boxed-posts',
            'post_status' => 'publish',
            'order' => 'ASC',
            'orderby' => 'menu_order',
            'posts_per_page' => -1
        )
        );

    if($query->have_posts()):?>
    <div class="latest-container-alt">
        <?php while ($query->have_posts()):
            $query->the_post();?>

            <div class="latest-alt">

                <?php if(has_post_thumbnail()):?>
                    <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>"></a>
                    <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a><br>
                    <p><?php the_excerpt() ?></p>

                <?php endif; ?>

            </div>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>
<?php
wp_reset_query();
return ob_get_clean();
}
add_shortcode('boxed_posts_alt', 'boxed_posts_alt');