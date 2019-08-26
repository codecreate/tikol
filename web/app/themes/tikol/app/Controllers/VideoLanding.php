<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class VideoLanding extends Controller
{
    // Pass on fields from Advanced Custom Fields to the view
    protected $acf = ['vlp_hero_video', 'vlp_sample_videos', 'vlp_event_promotion'];

    public function getVlpHero(){
        return get_field('vlp_hero_video');
    }

    public function getVlpSamples(){
        return array_map(function($sample_video) {
            return [
                'video' => $sample_video['vlp_sample_video'] ?? null,
            ];
        }, get_field('vlp_sample_videos') ?? []);
    }

    public function getVlpEventPromo(){
        $vlp_event_promotion = get_field('vlp_event_promotion');
        if ($vlp_event_promotion) {
            return [
                'heading' => $vlp_event_promotion['vlp_heading'] ?? null,
                'content' => $vlp_event_promotion['vlp_content'] ?? null,
                'cta' => $vlp_event_promotion['vlp_call_to_action'] ?? null,
            ];
        }
    }
}
