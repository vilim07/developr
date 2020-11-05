<?php
function past_projects(){
    ob_start();
    $query = new WP_Query(
        array(
            'post_type' => 'past-projects',
            'post_status' => 'publish',
            'order' => 'DESC',
            'orderby' => 'date',
            'posts_per_page' => -1
        )
        );

    if($query->have_posts()):?>
    <div class="projects-container">
        <?php while ($query->have_posts()):
            $query->the_post();?>

            <div class="project">
                <?php if(has_post_thumbnail()):?>
                    <a href="<?php echo get_field('link'); ?>"><img src="<?php the_post_thumbnail_url(); ?>"><h1><?php the_title(); ?></h1></a>
                    <p><?php the_excerpt(); ?></p>
                <?php endif; ?>

            </div>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>
<?php
wp_reset_query();
return ob_get_clean();
}
add_shortcode('past_projects', 'past_projects');