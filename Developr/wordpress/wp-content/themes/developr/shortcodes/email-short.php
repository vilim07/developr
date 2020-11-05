<?php
function email_short(){
    $query = new WP_Query(
        array(
            'post_type' => 'email-short',
            'post_status' => 'publish',
            'orderby' => 'menu_order',
        )
        );
        $query->the_post();
        $email = get_the_title();
        wp_reset_query();
        return $email;
}
add_shortcode('email_short', 'email_short');