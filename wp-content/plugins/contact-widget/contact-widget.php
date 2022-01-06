<?php

/** 
 * Plugin Name: Ajax Contact Widget
 * Description: Simple Ajax Powered contact form widget
 * Version    : 1.0
 * Author     : Ahmad Raza
 * Author URL : http://me.com/
 * License    : GPL2
 **/

 /** Include JavaScript **/
    function add_scripts() {
        wp_enqueue_script('contact-scripts', plugins_url().'/contact-widget/js/script.js', array('jquery'), '1.0.0', false);
    }
    add_action('wp_enqueue_script', 'add_scripts');


    /** Include Class **/
    include("class.contact-widget.php");

    /** Include  Widget **/
    function register_contact_widget() {
        register_widget('Contact-widget');
    }
    add_action('widget_init', 'register_contact_widget');

?>