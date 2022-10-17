<?php

namespace App\Http\Controllers\Frontend\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $page = "Events | About Us";
        $active = "About";
        $data['page'] = $page;
        $data['active'] = $active;
        return view('frontend.about.index', $data);
    }

    
}
