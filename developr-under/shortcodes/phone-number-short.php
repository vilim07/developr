<?php
function phone_number_short(){
    $query = new WP_Query(
        array(
            'post_type' => 'phone-number-short',
            'post_status' => 'publish'
        )
        );
        $query->the_post();
        $phone = get_the_title();
        wp_reset_query();
        return $phone;

}
add_shortcode('phone_number_short', 'phone_number_short');