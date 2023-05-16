<?php

function rafi_customizar_register($wp_customize){
  
    // Header area function
  $wp_customize->add_section('rafi_header_area', array(
  'title'=>__('Header Area','Junaetfarukrafi'),
  'description'=> 'If you intarested to update your header area,you can do it here.'
    ));
  
  $wp_customize->add_setting('rafi_logo', array(
      'default'=> get_bloginfo('template_directory') . '/img/logo.png',
        ));
  
  $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'rafi_logo', array(
  
    'label' => 'Logo Upload',
    'description' => 'If you intarested t o change or update your logo you can do it.',
    'setting' => 'rafi_logo',
    'section' => 'rafi_header_area',   
  
  )));
  
  // Menu Position Option
  $wp_customize->add_section('rafi_menu_option', array(
    'title'=>__('Menu Position Option','Junaetfarukrafi'),
    'description'=> 'If you intarested to update your Menu Position Option,you can do it here.'
  ));
  
  $wp_customize->add_setting('rafi_menu_position', array(
    'default'=> 'right_menu',
      ));
  
  $wp_customize-> add_control ('rafi_menu_position', array(
    'label'=>'Menu Position',
    'description' => 'select your menu position',
    'setting' => 'rafi_menu_position',
    'section' => 'rafi_menu_option',
    'type'=> 'radio',
    'choices' => array(
      'left_menu' => 'Left Menu',
      'right_menu' => 'Right Menu',
      'center_menu' => 'Center Menu',
    ),
      ));
  
  // Footer Option
  $wp_customize->add_section('rafi_footer_option', array(
    'title'=>__('Footer Option','Junaetfarukrafi'),
    'description'=> 'If you intarested to update your footer seeting,you can do it here.'
  ));
  
  $wp_customize->add_setting('rafi_copyright_section', array(
    'default'=> '&copy; Copyright 2023 | Junaet Faruk Rafi',
      ));
  
  $wp_customize-> add_control ('rafi_copyright_section', array(
    'label'=>'Copyright Text',
    'description' => 'If need you can update from here',
    'setting' => 'rafi_copyright_section',
    'section' => 'rafi_footer_option',
  
      ));
  }
  add_action('customize_register','rafi_customizar_register');  