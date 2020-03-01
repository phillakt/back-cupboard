<?php

add_action('wp_enqueue_scripts', 'theme_scripts');

function theme_scripts()
{
    wp_enqueue_style('main-css', get_template_directory_uri() . './style/main.css');
    wp_enqueue_script('main-js', get_template_directory_uri() . './js/main.js', null, false);
    wp_enqueue_script('fontawesome', 'https://use.fontawesome.com/releases/v5.0.6/js/all.js');
}

add_theme_support('menus');

add_theme_support('post-thumbnails');


class Catalog
{

    public static $title;

    public static $post_name;

    public static $link;

    private static function wpq()
    {
        return $my_posts = new WP_Query;
    }

    private static function field($arg = [], $field)
    {
        $myposts = self::wpq()->query($arg);

        foreach ($myposts as $pst) {
            echo get_field($field, $pst->ID);
        }
    }

    private static function fieldLink($arg = [])
    {
        $myposts = self::wpq()->query($arg);

        foreach ($myposts as $pst) {

            echo self::$link = '/'. $pst->post_type . '/' . $pst->post_name;
        }
    }


    public static function getImg($arg = [], $field)
    {
        self::field($arg, $field);
    }

    public static function getTitle($arg = [], $field)
    {
        self::field($arg, $field);
    }

    public static function getLink($arg = [])
    {
        self::fieldLink($arg);
    }
}