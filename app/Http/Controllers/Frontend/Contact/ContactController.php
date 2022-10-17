<?php

namespace App\Http\Controllers\Frontend\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $page = "Events | Contact Us";
        $active = "Contact";
        $data['page'] = $page;
        $data['active'] = $active;
        return view('frontend.contact.index', $data);
    }
}
