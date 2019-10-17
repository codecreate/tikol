<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Staff extends Controller
{
    // Pass on fields from Advanced Custom Fields to the view
    protected $acf = ['staff_member'];

    public function getStaff(){
        return array_map(function($staff_member) {
            return [
                'title' => $staff_member['staff_member_title'] ?? null,
                'position' => $staff_member['staff_member_position'] ?? null,
                'image' => $staff_member['staff_member_image'] ?? null,
                'description' => $staff_member['staff_member_description'] ?? null,
            ];
        }, get_field('staff_member') ?? []);

    }
}