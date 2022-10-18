<?php

namespace App\Http\Controllers\Frontend\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function register(){
        $page = "Events | Client Register";
        $active = "Register";
        $data['page'] = $page;
        $data['active'] = $active;
        return view('frontend.client.register', $data);
    }
}
