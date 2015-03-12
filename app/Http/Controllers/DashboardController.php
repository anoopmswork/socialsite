<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
         $this->middleware('auth');
    }
    
      /**
     * Create a new controller instance.
     *
     * @return view
     */
     public function viewDashboard() {
        return view('dashboard.dashboard');
    }
}
