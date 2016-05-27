<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Application, App\Course;
use Validator, Redirect;

class ApplicationsController extends Controller
{
    public function apply_online() {
    	$courses = [''=>'Select Course'] + Course::orderBy('name')->lists('name', 'id')->toArray();
    	return view('applications.apply_online', compact('courses'));
    }

    public function post_online(Request $request) {
    	$validator = Validator::make($data = $request->all(), Application::$rules);
        if ($validator->fails())
          return Redirect::back()->withErrors($validator)->withInput()->with('message', 'Some fields has errors. Please correct it and then try again');
        
        if ($request->hasFile('photo')) {
            if ($request->file('photo')->isValid()){
                $img_path = 'uploads/photos/'.date('Y-m-d');
                $destination_path = public_path( $img_path );
                $fileName = strtolower(str_replace(' ', '-', $request->name)).'-'.time().'_ntis.'.$request->file('photo')->getClientOriginalExtension();
                $request->file('photo')->move($destination_path, $fileName);
                $data['photo'] = $img_path.'/'.$fileName;
            }
        }
        $data['dob'] = date('Y-m-d H:i:s', strtotime($request->dob));
        Application::create($data);
    	return Redirect::route('home_path', array('apply_success' => 1))->with('message', 'Application submitted successfully !');
    }

    public function view_applications() {
        $results = Application::where('processed', 0)->orderBy('created_at', 'DESC')->where('status', 1)->with('course')->paginate(30);

        return view('applications.view_applications', compact('results'));
    }

    public function viewApplication($id) {
        $result = Application::findOrFail($id);
        return view('applications.view_application', compact('result', 'id'));
    }

    public function processApplication(Request $request) {
        $application = Application::findOrFail($request->id);
        $application->code_number = $request->code_number;
        $application->student_code = $request->student_code;
        $application->center_code = $request->center_code;
        $application->student_reg_number = $request->student_reg_number;
        $application->verified_by = $request->verified_by;
        $application->processed = 1;

        $application->save();
        return Redirect::route('applications.view_all')->with('message', 'Application processed successfully !');

    }

    public function rejectApplication($id) {
        $application = Application::findOrFail($id);
        $application->status = 0;
        $application->save();
        return Redirect::route('applications.view_all')->with('message', 'Application rejected successfully !');
    }

    public function view_accepted_applications() {
        $results = Application::where('processed', 1)->where('status', 1)->with('course')->paginate(30);

        return view('applications.view_accepted_applications', compact('results'));
    }

    public function viewApplicationPrint($id) {
        $result = Application::findOrFail($id);
        return view('applications.view_application_print', compact('result', 'id'));
    }


    public function search_applications_admin() {
        return view('applications.admin_application_search');
    }

    public function search_applications_admin_result(Request $request) {
        $where['status'] = 1;

        if($request->get('code_number')) {
            $where['code_number'] = $request->get('code_number');
        }

        if($request->get('center_code')) {
            $where['center_code'] = $request->get('center_code');
        }

        if($request->get('student_code')) {
            $where['student_code'] = $request->get('student_code');
        }

        if($request->get('student_reg_number')) {
            $where['student_reg_number'] = $request->get('student_reg_number');
        }

        $results = Application::where($where)->paginate(20);
        return view('applications.search_applications_admin_result', compact('results'));
    }
}
