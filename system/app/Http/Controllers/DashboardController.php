<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Pendaftaran;

class DashboardController extends Controller
{
    function dashboard(){
		return view('dashboard');
	}
}
