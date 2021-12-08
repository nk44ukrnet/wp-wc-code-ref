<?php
/**
 * fancy lab theme customizer
 * @package Fancy Lab
 */

function fancy_lab_customizer($wp_customize)
{

    //copyright section
    $wp_customize->add_section(
        'sec_copyright', [
            'title' => __('Copyright Settings', 'fancy-lab'),
            'descriptions' => __('Copyright Section', 'fancy-lab'),
        ]
    );

    // Field 1 - Copyright Text Box
    $wp_customize->add_setting(
        'set_copyright', array(
            'type' => 'theme_mod', //option / theme_mod (theme modification)
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field' //sanitize buit in wp functions
        )
    );

    $wp_customize->add_control(
        'set_copyright', array(
            'label' => __('Copyright', 'fancy-lab'),
            'description' => __('Please, add your copyright information here', 'fancy-lab'),
            'section' => 'sec_copyright',
            'type' => 'text' //radio, textarea, select
        )
    );

    ////////////////////////////////////////////////////////
//slider section
    $wp_customize->add_section(
        'sec_slider', [
            'title' => 'Slider Settings',
            'descriptions' => 'Slider Section'
        ]
    );
    // ---- //
    //field 2 - Slider page number 1
    $wp_customize->add_setting(
        'set_slider_page1', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_slider_page1', array(
            'label' => 'Set slider page 1',
            'description' => 'Set slider page 1',
            'section' => 'sec_slider',
            'type' => 'dropdown-pages'
        )
    );

    //field 3 - Slider page number 1 - button text
    $wp_customize->add_setting(
        'set_slider_button_text1', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_slider_button_text1', array(
            'label' => 'Button Text for page 1',
            'description' => 'Set Button Text for page 1',
            'section' => 'sec_slider',
            'type' => 'text'
        )
    );

    //field 4 - Slider page number 1 - button URL
    $wp_customize->add_setting(
        'set_slider_button_url1', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_slider_button_url1', array(
            'label' => 'URL for page 1',
            'description' => 'Set Button URL for page 1',
            'section' => 'sec_slider',
            'type' => 'url'
        )
    );

    // ---- //
    //field 5 - Slider page number 1
    $wp_customize->add_setting(
        'set_slider_page2', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_slider_page2', array(
            'label' => 'Set slider page 2',
            'description' => 'Set slider page 2',
            'section' => 'sec_slider',
            'type' => 'dropdown-pages'
        )
    );

    //field 6 - Slider page number 1 - button text
    $wp_customize->add_setting(
        'set_slider_button_text2', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_slider_button_text2', array(
            'label' => 'Button Text for page 2',
            'description' => 'Set Button Text for page 2',
            'section' => 'sec_slider',
            'type' => 'text'
        )
    );

    //field 7 - Slider page number 1 - button URL
    $wp_customize->add_setting(
        'set_slider_button_url2', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_slider_button_url2', array(
            'label' => 'URL for page 2',
            'description' => 'Set Button URL for page 2',
            'section' => 'sec_slider',
            'type' => 'url'
        )
    );

    // ---- //
    //field 8 - Slider page number 1
    $wp_customize->add_setting(
        'set_slider_page3', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_slider_page3', array(
            'label' => 'Set slider page 3',
            'description' => 'Set slider page 3',
            'section' => 'sec_slider',
            'type' => 'dropdown-pages'
        )
    );

    //field 9 - Slider page number 1 - button text
    $wp_customize->add_setting(
        'set_slider_button_text3', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_slider_button_text3', array(
            'label' => 'Button Text for page 3',
            'description' => 'Set Button Text for page 3',
            'section' => 'sec_slider',
            'type' => 'text'
        )
    );

    //field 10 - Slider page number 1 - button URL
    $wp_customize->add_setting(
        'set_slider_button_url3', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_slider_button_url3', array(
            'label' => 'URL for page 3',
            'description' => 'Set Button URL for page 3',
            'section' => 'sec_slider',
            'type' => 'url'
        )
    );

    ////////////////////////////////////////////////////////
//Home page settings
    $wp_customize->add_section(
        'sec_home_page', [
            'title' => 'Home Page Products and Blog Settings',
            'descriptions' => 'Slider Section'
        ]
    );

    $wp_customize->add_setting(
        'set_popular_max_num', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_popular_max_num', array(
            'label' => 'Popular Products Max Number',
            'description' => 'Popular Products Max Number',
            'section' => 'sec_home_page',
            'type' => 'number'
        )
    );


    $wp_customize->add_setting(
        'set_popular_max_col', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_popular_max_col', array(
            'label' => 'Popular Products Max Columns',
            'description' => 'Popular Products Max Columns',
            'section' => 'sec_home_page',
            'type' => 'number'
        )
    );


    $wp_customize->add_setting(
        'set_new_max_num', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_new_max_num', array(
            'label' => 'New Products Max Number',
            'description' => 'New Products Max Number',
            'section' => 'sec_home_page',
            'type' => 'number'
        )
    );


    $wp_customize->add_setting(
        'set_new_max_col', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_new_max_col', array(
            'label' => 'New Products Max Columns',
            'description' => 'New Products Max Columns',
            'section' => 'sec_home_page',
            'type' => 'number'
        )
    );

    //deal of the week checkbox

    $wp_customize->add_setting(
        'set_deal_show', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'fancy_lab_sanitize_checkbox'
        )
    );

    $wp_customize->add_control(
        'set_deal_show', array(
            'label' => 'Display deal of the week?',
            'section' => 'sec_home_page',
            'type' => 'checkbox'
        )
    );

    //deal of the week product id

    $wp_customize->add_setting(
        'set_deal', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_deal', array(
            'label' => 'Deal of the week product ID',
            'description' => 'Product ID to display',
            'section' => 'sec_home_page',
            'type' => 'number'
        )
    );



}

add_action('customize_register', 'fancy_lab_customizer');

function fancy_lab_sanitize_checkbox( $checked ) {
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
}