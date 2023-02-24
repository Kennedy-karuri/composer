<?php

/**
 * @package tutorialPlugin
 */

namespace Inc\Pages;


class ExternalApi{

public function register(){

    add_shortcode('users',array($this,'get_api'));
}


public function get_api(){

    $url = 'https://dummyjson.com/products';

    $args = [];

    $results = wp_remote_get($url, $args);

    $data = json_decode(wp_remote_retrieve_body($results));

    echo '<pre>';
        var_dump($data);
    echo '</pre>';

    
}


}