<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class EntryMeta extends Controller
{
    // Pass on fields from Advanced Custom Fields to the view
    protected $acf = ['custom_post_author'];

    public function get_custom_author(){
        return get_field('custom_post_author');
    }

}

