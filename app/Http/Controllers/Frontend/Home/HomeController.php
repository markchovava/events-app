<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $page = "Events | Home";
        $active = "Home";
        $data['page'] = $page;
        $data['active'] = $active;
        return view('frontend.home.index', $data);
    }
}
