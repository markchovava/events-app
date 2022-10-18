<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $active = 'Users';
        $data['active'] = $active;

        return view('backend.user.index', $data);
    }

    public function add(){
        $active = 'Users';
        $data['active'] = $active;
        
        return view('backend.user.add', $data);
    }
}
