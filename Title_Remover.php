<?php
/**
* Plugin Name:Post Title Remover
* Plugin URI: https://github.com/Ierofantis/Title-Post-Remover
* Description:A plugin that removes titles from posts
* Version: 1.0 
* License: FBI-CIA
*/

add_filter( 'the_title', function ($title) { return "";});

add_filter( 'widget_posts_args', function ($args) { return "";});
?>