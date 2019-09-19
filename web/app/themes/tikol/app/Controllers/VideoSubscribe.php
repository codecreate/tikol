<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class VideoSubscribe extends Controller
{
    // Pass on fields from Advanced Custom Fields to the view
    protected $acf = ['subs_benefits', 'subs_benefits', 'subs_testimonials'];

    public function getSubscribeBenefits()
    {
        $benefits = get_field('subs_benefits');
        if ($benefits) {
            return [
                'subtitle' => $benefits['subs_subtitle'] ?? null,
                'price' => $benefits['subs_price'] ?? null,
                'cta' => $benefits['subs_cta'] ?? null,
                'image' => $benefits['subs_image'] ?? null,
            ];
        }
    }
}
