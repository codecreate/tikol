<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Landing extends Controller
{
    // Pass on fields from Advanced Custom Fields to the view
    protected $acf = ['lp_aside', 'lp_cta_blocks'];

    public function getLpLinkBlocks(){
        return array_map(function($link_block) {
            return [
                'image' => $link_block['lp_cta_image'] ?? null,
                'link' => $link_block['lp_cta_link'] ?? null,
            ];
        }, get_field('lp_cta_blocks') ?? []);

    }

    public function getLpAside(){
        return get_field('lp_aside');
    }

}
