<?php

/**
 * @package tutorialPlugin
 */

 namespace Inc\Base;

 class Enqueue extends Controller{

    public function register(){
        add_action('admin_enqueue_scripts' , array($this, 'enqueue'));

    }

    public function enqueue(){

        wp_enqueue_style('bootstrap_css',$this->plugin_url.'/assets/bootstrap.css');
        wp_enqueue_script( 'bootstrap_js',$this->plugin_url.'/assets/bootstrap.js');
        wp_enqueue_style('custom-css',$this->plugin_url. '/assets/tutorial1.css');
        wp_enqueue_script('custom-js',$this->plugin_url. '/assets/tutorial1.js');

    }
 }