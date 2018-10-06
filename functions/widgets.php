<?php

function bst_widgets_init() {

  /*
  Sidebar (one widget area)
   */
  register_sidebar( array(
    'name'            => __( 'Sidebar', 'bst' ),
    'id'              => 'sidebar-widget-area',
    'description'     => __( 'The sidebar widget area', 'bst' ),
    'before_widget'   => '<section class="%1$s %2$s default-sidebar">',
    'after_widget'    => '</section>',
    'before_title'    => '<h4>',
    'after_title'     => '</h4>',
  ) );
  

     register_sidebar( array(
    'name'            => __( 'Home Twitter Sidebar', 'bst' ),
    'id'              => 'home-twitter-sidebar-widget-area',
    'description'     => __( 'The Home Twitter sidebar widget area', 'bst' ),
    'before_widget'   => '<section class="%1$s %2$s">',
    'after_widget'    => '</section>',
    'before_title'    => '<h3 class="widget-title">',
    'after_title'     => '</h3>',
  ) );
     register_sidebar( array(
    'name'            => __( 'Home Facebook Sidebar', 'bst' ),
    'id'              => 'home-facebook-sidebar-widget-area',
    'description'     => __( 'The Home Facebook sidebar widget area', 'bst' ),
    'before_widget'   => '<section class="%1$s %2$s">',
    'after_widget'    => '</section>',
    'before_title'    => '<h3 class="widget-title">',
    'after_title'     => '</h3>',
  ) );  

  
  
  /*
  Footer (three widget areas)
   */
  register_sidebar( array(
    'name'            => __( 'Footer', 'bst' ),
    'id'              => 'footer-widget-area',
    'description'     => __( 'The footer widget area', 'bst' ),
    'before_widget'   => '<div class="%1$s %2$s col-sm-4">',
    'after_widget'    => '</div>',
    'before_title'    => '<h4>',
    'after_title'     => '</h4>',
  ) );

}
add_action( 'widgets_init', 'bst_widgets_init' );
