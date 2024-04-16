<?php 

add_theme_support('post-thumbnails');
add_theme_support('custom-header');


register_nav_menus(
    array(
        'primary_menu'=>'Top Menus',
        'sub_menu'=> 'Footer Menu'
     
    )
    );
require_once 'inc/inc.php';
// require_once 'include.php';

    function matgix_customization($arg){


    // Hero panal for customization header

    $arg->add_panel('hero', array(
        'title' => 'Hero',
        'description' => 'I need a hero.',
        'prority' => 200, 
    ));
    //  Hero Heading
    $arg->add_section('hero_header', array(
        'title' => 'Hero Header',
        'description' => 'Here you can change heading and description of the hero section.',
        'priority' => 1,
        'panel' => 'hero',
    ));

    $arg->add_setting('hero_heading', array(
        'default' => 'Powerful Digital Solutions With Gp.',
        'type' => 'theme_mod',
    ));
    $arg->add_control('hero_heading', array(
        'label' => 'Heading',
        'type' => 'text',
        'priority' => 2,
        'section' => 'hero_header',
    ));
    // Hero Description
    $arg->add_setting('hero_description', array(
        'default' => 'We are team of talented digital marketers',
        'type' => 'theme_mod',
    ));
    $arg->add_control('hero_description', array(
        'label' => 'Description',
        'type' => 'text',
        'priority' => 3,
        'section' => 'hero_header',
    ));

    }

    add_action('customize_register', 'matgix_customization');

?>