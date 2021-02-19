<?php

function decagon_social_icons_section( $wp_customize ){
    $wp_customize -> add_setting('decagon_facebook_icon', [
        'default' => '',
    ]);
    $wp_customize -> add_setting('decagon_twitter_icon', [
        'default' => '',
    ]);
    $wp_customize -> add_setting('decagon_instagram_icon', [
        'default' => '',
    ]);
    $wp_customize -> add_setting('decagon_linkedin_icon', [
        'default' => '',
    ]);


    $wp_customize-> add_section( 'decagon_social_icons', [
        'title' => __( 'Decagon Social Icons', 'decagon' ),
        'priority' => 30
    ]);


    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'decagon_facebook_icon',
            array(
                'label'      => __( 'Facebook icon', 'decagon' ),
                'section'    => 'decagon_social_icons',
                'settings'   => 'decagon_facebook_icon',
                
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'decagon_twitter_icon',
            array(
                'label'      => __( 'Twitter icon', 'decagon' ),
                'section'    => 'decagon_social_icons',
                'settings'   => 'decagon_twitter_icon',
                
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'decagon_instagram_icon',
            array(
                'label'      => __( 'Instagram icon', 'decagon' ),
                'section'    => 'decagon_social_icons',
                'settings'   => 'decagon_instagram_icon',
                
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'decagon_linkedin_icon',
            array(
                'label'      => __( 'LinkedIn icon', 'decagon' ),
                'section'    => 'decagon_social_icons',
                'settings'   => 'decagon_linkedin_icon',
                
            )
        )
    );
}

function decagon_social_url_section( $wp_customize ){
    $wp_customize -> add_setting('decagon_facebookURL', [
        'default' => '',
    ]);
    $wp_customize -> add_setting('decagon_twitterURL', [
        'default' => '',
    ]);
    $wp_customize -> add_setting('decagon_instagramURL', [
        'default' => '',
    ]);
    $wp_customize -> add_setting('decagon_linkedinURL', [
        'default' => '',
    ]);


    $wp_customize-> add_section( 'decagon_social_url', [
        'title' => __( 'Decagon Social URL', 'decagon' ),
        'priority' => 30
    ]);


    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'decagon_facebookURL',
            array(
                'label'      => __( 'Facebook URL', 'decagon' ),
                'section'    => 'decagon_social_url',
                'settings'   => 'decagon_facebookURL',
                
            ) 
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'decagon_twitterURL',
            array(
                'label'      => __( 'Twitter URL', 'decagon' ),
                'section'    => 'decagon_social_url',
                'settings'   => 'decagon_twitterURL',
                
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'decagon_instagramURL',
            array(
                'label'      => __( 'Instagram URL', 'decagon' ),
                'section'    => 'decagon_social_url',
                'settings'   => 'decagon_instagramURL',
                
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'decagon_linkedinURL',
            array(
                'label'      => __( 'LinkedIn URL', 'decagon' ),
                'section'    => 'decagon_social_url',
                'settings'   => 'decagon_linkedinURL',
                
            )
        )
    );
}