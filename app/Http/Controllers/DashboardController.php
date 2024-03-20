<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {

        if(Auth::id()) {

            $userType = Auth()->user()->user_type;

            if($userType == 'user') {
                return view('dashboard');
            } else if($userType== 'admin') {
                return view('admin.dashboard');
            } else {
                return back();
            }
        }
    }
}
