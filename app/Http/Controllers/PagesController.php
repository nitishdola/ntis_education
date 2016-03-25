<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Course;

class PagesController extends Controller
{
    public function about() {
	$title = "About NTIS Education";
    	return view('pages.about', compact('title'));
    }

    public function contact() {
	$title = "NTIS Education : Contact NTIS for inquiry";
    	return view('pages.contact',compact('title'));
    }

    public function apply_online() {
    	return view('pages.apply_online');
    }

    public function cca() {
	$title = "NTIS Education Courses: Certificate in Computer Application";
    	$info =  Course::whereId(1)->first()->toArray(); //dd($info);
    	return view('pages.cca', compact('info', 'title'));
    }

    public function dcat() {
	$title = "NTIS Education Courses: Diploma in Computer Application and Technology";
    	$info =  Course::whereId(2)->first()->toArray(); //dd($info);
    	return view('pages.dcat', compact('info', 'title'));
    }

    public function adcap() {
	$title = "NTIS Education Courses: Advanced Diploma in Computer Application & Programming";
    	$info =  Course::whereId(3)->first()->toArray(); //dd($info);
    	return view('pages.adcap', compact('info', 'title'));
    }

    public function pdcst() {
	$title = "NTIS Education Courses: Professional Diploma in Computer Software & Technology";
    	$info =  Course::whereId(4)->first()->toArray(); //dd($info);
    	return view('pages.pdcst', compact('info', 'title'));
    }
    public function dcht() {
	$title = "NTIS Education Courses: Diploma in Computer Hardware Technology";
    	$info =  Course::whereId(5)->first()->toArray(); //dd($info);
    	return view('pages.dcht', compact('info', 'title'));
    }

    public function adchnt() {
	$title = "NTIS Education Courses: Advanced Diploma in Computer Hardware and Networking Technology";
    	$info =  Course::whereId(6)->first()->toArray(); //dd($info);
    	return view('pages.adchnt', compact('info', 'title'));
    }

    public function pdcht() {
	$title = "NTIS Education Courses: Professional Diploma in Computer Hardware Technology";
    	$info =  Course::whereId(7)->first()->toArray(); //dd($info);
    	return view('pages.pdcht', compact('info', 'title'));
    }

    public function pgdca() {
	$title = "NTIS Education Courses: Post Graduate Diploma in Computer Application";
    	$info =  Course::whereId(8)->first()->toArray(); //dd($info);
    	return view('pages.pgdca',compact('info', 'title'));
    }

    public function track() {
        return view('pages.track');
    }
}

