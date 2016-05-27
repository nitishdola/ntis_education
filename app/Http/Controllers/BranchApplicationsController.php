<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\BranchApplication, App\Course;
use Validator, Redirect;
class BranchApplicationsController extends Controller
{
    public function application_submit() {
        $courses = [''=>'Select Course'] + Course::orderBy('name')->lists('name', 'id')->toArray();
        return view('branch_applications.application_submit', compact('courses'));
    }

    public function branch_submit(Request $request) {
        $validator = Validator::make($data = $request->all(), BranchApplication::$rules);
        if ($validator->fails())
          return Redirect::back()->withErrors($validator)->withInput()->with('message', 'Some fields has errors. Please correct it and then try again');
        
        if ($request->hasFile('form')) {
            if ($request->file('form')->isValid()){
                $img_path = 'uploads/forms/'.date('Y-m-d');
                $destination_path = public_path( $img_path );
                $fileName = strtolower(str_replace(' ', '-', $request->name)).'-'.time().'_ntis.'.$request->file('form')->getClientOriginalExtension();
                $request->file('form')->move($destination_path, $fileName);
                $data['form'] = $img_path.'/'.$fileName;
            }
        }
        $data['dob'] = date('Y-m-d H:i:s', strtotime($request->dob));
        BranchApplication::create($data);
        return Redirect::route('branch.applications')->with('message', 'Application submitted successfully !');
    }

    public function branch_applications() {
        $results = BranchApplication::where('status', 1)->with('course')->paginate(30);

        return view('branch_applications.view_applications', compact('results'));
    }

    public function branch_application_info() {
        $branch_application_id = $_GET['branch_application_id'];
        return BranchApplication::whereId($branch_application_id)->first();
    }

    public function disable($id) {
        $branch_application = BranchApplication::findOrFail($id);
        $branch_application->status = 0;
        $branch_application->save();
        return Redirect::route('branch.applications')->with('message', 'Application removed successfully !');
        
    }
}
