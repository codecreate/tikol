<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Training extends Controller
{
    // Pass on fields from Advanced Custom Fields to the view
    protected $acf = ['subs_testimonials'];

    
    public function getTestimonials()
    {
        $testimonials = get_field('subs_testimonials');

        // get a testimonial item
        $testimonialItem = array_map(function($testimonial_item) {
            return [
                'author' => $testimonial_item['subs_testimonial_author'] ?? null,
                'role' => $testimonial_item['subs_testimonial_role'] ?? null,
                'quote' => $testimonial_item['subs_testimonial_quote'] ?? null,
            ];
        }, $testimonials ?? []);

        if ($testimonials) {
            return [
                'testimonialItem' => $testimonialItem,
            ];
        };
    }

}
