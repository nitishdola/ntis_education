<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Admit,App\Certificate,App\Result, App\Offer;

class HomeController extends Controller
{
    public function index() {
    	$offers = Offer::whereStatus(1)->get();
    	return view('home.index', compact('offers'));
    }

    public function admin() {
    	$admits = Admit::whereStatus(1)->count();
    	$certificates = Certificate::whereStatus(1)->count();
    	$results = Certificate::whereStatus(1)->count();
    	
    	return view('home.admin_home', compact('admits', 'certificates', 'results'));
    }
}
