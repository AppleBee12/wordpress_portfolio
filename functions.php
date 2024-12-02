<?php

register_nav_menus( array(
  'main_menu'   => __( 'Main Menu', 'applebee' ),
  'footer_menu' => __( 'footer Menu', 'applebee' )
) );

dd_theme_support( 'post-thumbnails' );