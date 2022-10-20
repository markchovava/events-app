<?php

namespace App\Http\Controllers\Frontend\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $active = 'Clients';
        $data['active'] = $active;

        return view('backend.client.index', $data);
    }

    public function add(){
        $active = 'Clients';
        $data['active'] = $active;

        return view('backend.client.add', $data);
    }

    public function register(){
        $page = "Events | Client Register";
        $active = "Register";
        $data['page'] = $page;
        $data['active'] = $active;
        return view('frontend.client.register', $data);
    }
}
