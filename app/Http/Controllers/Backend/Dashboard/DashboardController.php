<?php

namespace App\Http\Controllers\Backend\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $active = 'Dashboard';
        $data['active'] = $active;
        
        return view('backend.dashboard.index', $data);
    }
}
