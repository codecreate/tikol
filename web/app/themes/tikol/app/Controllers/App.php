<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    // Pass on all fields from Advanced Custom Fields to the view
    protected $acf = true;

    public static function getHeroImage(){

        $heroObj = (object)[
        'image' => get_field('hi_image') ? get_field('hi_image') : null,
        'title' => get_field('hi_title') ? get_field('hi_title') : null,
        'button1' => get_field('hi_button_1') ? get_field('hi_button_1') : null,
        'button2' => get_field('hi_button_1') ? get_field('hi_button_1') : null,
        ];

        return $heroObj;
    }


    // get navs back in format for bootstrap navbar
    public static function create_bootstrap_menu($theme_location)
    {
        if (($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location])) {

            $menu_list = '<nav class="navbar navbar-expand-sm navbar-light navbar-custom justify-content-between align-items-baseline">' . "\n";

            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            $menu_list .= '<a class="navbar-brand" href="' . home_url() . '"><img src="'.$image[0].'" alt="" /></a>';

            $menu_list .= '<!-- Collect the nav links, forms, and other content for toggling -->';


            $menu = get_term($locations[$theme_location], 'nav_menu');
            $menu_items = wp_get_nav_menu_items($menu->term_id);

            $menu_list .= '<div class="collapse navbar-collapse" id="navbarSupportedContent">' . "\n";
            $menu_list .= '<ul class="navbar-nav mr-auto">' . "\n";
            $menu_list .= '<li class="nav-item text-right"><a href="#" class="nav-link" id="nav-close"><i class="fas fa-times"></i></a></li>' . "\n";

            foreach ($menu_items as $menu_item) {
                if ($menu_item->menu_item_parent == 0) {

                    $parent = $menu_item->ID;

                    $menu_array = array();
                    $bool = false;
                    foreach ($menu_items as $submenu) {
                        if ($submenu->menu_item_parent == $parent) {
                            $bool = true;
                            $menu_array[] = '<li><a href="' . $submenu->url . '">' . $submenu->title . '</a></li>' . "\n";
                        }
                    }
                    if ($bool == true && count($menu_array) > 0) {

                        $menu_list .= '<li class="nav-item dropdown">' . "\n";
                        $menu_list .= '<a class="nav-link" href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">' . $menu_item->title . ' <span class="caret"></span></a>' . "\n";

                        $menu_list .= '<ul class="dropdown-menu">' . "\n";
                        $menu_list .= implode("\n", $menu_array);
                        $menu_list .= '</ul>' . "\n";

                    } else {

                        $activeClass = get_post_meta( $menu_item->ID, '_menu_item_object_id', true ) == get_the_id() ? ' active' : '';
                        $menu_list .= '<li class="nav-item'.$activeClass.'">' . "\n";
                        $menu_list .= '<a class="nav-link" href="' . $menu_item->url . '">' . $menu_item->title .'</a>' . "\n";
                    }

                }

                // end <li>
                $menu_list .= '</li>' . "\n";
            }

            $menu_list .= '</ul>' . "\n";
            $menu_list .= '</div>' ."\n";
            $menu_list .= '<button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">' . "\n";
            $menu_list .= 'MENU<span class="navbar-toggler-icon"></span>' . "\n";
            $menu_list .= '</button>' . "\n";
            $menu_list .= '</nav>' . "\n";

        } else {
            $menu_list = '<!-- no menu defined in location "' . $theme_location . '" -->';
        }

        echo $menu_list;
    }

}
