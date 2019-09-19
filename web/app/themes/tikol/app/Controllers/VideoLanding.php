<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class VideoLanding extends Controller
{
    // Pass on fields from Advanced Custom Fields to the view
    protected $acf = ['tuning_into_kids', 'hero_area', 'vlp_hero_video', 'vlp_hero_text','vlp_sample_videos', 'vlp_event_promotion'];

    public function getTuningIntoKidsArea()
    {
        $area = get_field('tuning_into_kids');
        $videoSamples = array_map(function($sample_video) {
            return [
                'video' => $sample_video['vlp_sample_video'] ?? null,
            ];
        }, $area['vlp_sample_videos'] ?? []);

        if ($area) {
            return [
                'subtitle' => $area['vlp_subtitle'] ?? null,
                'video' => $area['hero_area']['vlp_hero_video'] ?? null,
                'text' => $area['hero_area']['vlp_hero_text'] ?? null,
                'samples' =>  $videoSamples,
            ];
        };
    }

    public function getParentingProgramsArea()
    {
        $area = get_field('parenting_programs');

        if ($area) {
            return [
                'heading' => $area['vlp_heading'] ?? null,
                'content' => $area['vlp_content'] ?? null,
                'cta' => $area['vlp_call_to_action'] ?? null,
            ];
        };
    }
}
