<?php
/*
Plugin Name: Footer-plugin
Plugin URI: https://simplonline.co/
Description: My first Footer Plugin
Author: Taha
Version: 1.0
Author URI: https://simplonline.co/
*/

if(!defined('ABSPATH'))
{
    exit;
}

add_action('admin_menu','addMenu');

add_action('wp_enqueue_scripts', 'prefix_add_my_stylesheet');

function prefix_add_my_stylesheet() {
    // Respects SSL, Style.css is relative to the current file
    wp_register_style( 'prefix-style', plugins_url('/css/yourfooter.css', __FILE__) );
    wp_enqueue_style( 'prefix-style' );
  }
function addMenu()
{
    add_menu_page("MyFooter","MyFooter",4,"MyFooter","examplefooter",'dashicons-admin-generic');
}
function examplefooter()
{
    include_once('Footer.php');
}
function your_function() {
    
  echo"<footer id='foot'>
    <div class='d1'>
    <div class='titre'>
      <h3>About Us</h3>
    </div>
    <div id='text' rows='4' cols='50'>
      <p>".get_option('footer_textarea')."</p>
    </div>
    </div>
    <div class='d1'>
    <div class='titre1'>
    <h3>Contact</h3>
  </div>
  <div id='info'>
    <div>
    <h6>Adresse :</h6><p>".get_option('footer_adresse')."</p>
    </div>
    <div>
    <h6>Phone :</h6><p>".get_option('footer_number')."</p>
    </div>
   </div> 
    </div>
    <div class='d1'>
    <div class='titre'>
    <h3>Social media</h3>
    </div>
     <div class='media'>
     <a href='https://twitter.com/login?lang=fr'>
     <img title='Twitter' alt='Twitter' src='https://socialmediawidgets.files.wordpress.com/2014/03/01_twitter1.png' width='50' height='50' />
     </a>
     <a href='https://fr.linkedin.com/'>
     <img title='LinkedIn' alt='LinkedIn' src='https://socialmediawidgets.files.wordpress.com/2014/03/07_linkedin1.png' width='50' height='50' />
     </a>
     <a href='https://fr-fr.facebook.com/'>
     <img title='Facebook' alt='Facebook' src='https://socialmediawidgets.files.wordpress.com/2014/03/02_facebook1.png' width='50' height='50' />
     </a>
     <a href='https://www.pinterest.fr/'>
     <img title='Pinterest' alt='Pinterest' src='https://socialmediawidgets.files.wordpress.com/2014/03/13_pinterest1.png' width='50' height='50' />
     </a>
     </div>
    </div>
    </div>
    <div id='copy'>
    <a href='".get_option('footer_link')."'>
    ".get_option('footer_text')."
    </a>
    </div>
  </footer>";
}
add_action( 'wp_footer', 'your_function');
?>
