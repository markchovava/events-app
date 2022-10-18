<?php

namespace App\Http\Controllers\Frontend\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    
    public function index(){
        $page = "Events | Events";
        $active = "Events";
        $data['page'] = $page;
        $data['active'] = $active;

        return view('frontend.event.index', $data);
    }
    public function view(){
        $page = "Events | Events | Event";
        $active = "Events";
        $data['page'] = $page;
        $data['active'] = $active;

        return view('frontend.event.view', $data);
    }

    public function register(){
        $page = "Events | Register";
        $active = "Register";
        $data['page'] = $page;
        $data['active'] = $active;
        return view('frontend.event.register', $data);
    }


}
