<?php
/*
Plugin Name: Redes sociales
Plugin URI : https://github.com/KronosSolucionesTIC/pluginWP
Description : Shortcode para redes sociales en Wordpress
Autor: Alejandro Marin
Version: 0.9
Author URI: https://github.com/KronosSolucionesTIC
 */

function social_aulainformativa($atts)
{
    $args = shortcode_atts(array(
        'facebook' => 'http://www.facebook.com',
        'twitter'  => 'http://www.twitter.com',
        'youtube'  => 'http://www.youtube.com',
    ), $atts);

    $uf = $args["facebook"];
    $ut = $args["twitter"];
    $uy = $args["youtube"];

    $facebook = "<a href='" . $uf . "' target='_blank'>Facebook</a>";
    $twitter  = "<a href='" . $ut . "' target='_blank'>Twitter</a>";
    $youtube  = "<a href='" . $uy . "' target='_blank'>Youtube</a>";

    $social = $facebook . ' ' . $twitter . ' ' . $youtube;

    return $social;
}

add_shortcode("social_aulainformativa", "social_aulainformativa");
