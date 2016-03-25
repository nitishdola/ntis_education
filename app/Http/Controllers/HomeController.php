<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Admit,App\Certificate,App\Result;

class HomeController extends Controller
{
    public function index() {
    	return view('home.index');
    }

    public function admin() {
    	$admits = Admit::whereStatus(1)->count();
    	$certificates = Certificate::whereStatus(1)->count();
    	$results = Certificate::whereStatus(1)->count();
    	return view('home.admin_home', compact('admits', 'certificates', 'results'));
    }
}
