<?php

function get_customizer_image($image_id){
    $custom_logo_id = get_theme_mod( $image_id );
    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    $logoURL = $logo[0];
    return $logoURL;
}