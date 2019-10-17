<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class VideoSubscribe extends Controller
{
    // Pass on fields from Advanced Custom Fields to the view
    protected $acf = ['subs_benefits', 'subs_examples', 'subs_testimonials', 'subs_cta'];

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

    public function getExamples()
    {
        $examples = get_field('subs_examples');
        
        // get a carousel item
        $carouselItem = array_map(function($carousel_item) {
            return [
                'image' => $carousel_item['subs_carousel_image'] ?? null,
            ];
        }, $examples['subs_carousel'] ?? []);

        // get a feature item
        $featureItem = array_map(function($feature_item) {
            return [
                'icon' => $feature_item['subs_feature_icon'] ?? null,
                'image' => $feature_item['subs_feature_image'] ?? null,
                'description' => $feature_item['subs_feature_description'] ?? null,
            ];
        }, $examples['subs_features'] ?? []);

        if ($examples) {
            return [
                'carouselItem' =>  $carouselItem,
                'featureItem' => $featureItem,
            ];
        };
    }
    
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

    public function getCta()
    {
        $cta = get_field('subs_cta');

        if ($cta) {
            return [
                'title' => $cta['title'],
                'url' => $cta['url'],
            ];
        };
    }

}
