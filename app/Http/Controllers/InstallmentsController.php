<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\BranchApplication, App\Installment;
use Validator, Redirect;
class InstallmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $applications = [''=>'Select Student Code'] + BranchApplication::where('status', '=', 1)->lists('student_code', 'id')->toArray(); //dump($applications);
        return view('installments.create', compact('applications'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($data = $request->all(), Installment::$rules);
        if ($validator->fails())
          return Redirect::back()->withErrors($validator)->withInput()->with('message', 'Some fields has errors. Please correct it and then try again');
        $message    = '';

  
        $data['pay_date'] = date('Y-m-d', strtotime($data['pay_date']));


        if($installment = Installment::create($data)) {
            $message .= '<div class="alert alert-success">Installment added successfully !</div>'; 
        }else{
            $message .= '<div class="alert alert-success">unable to add Installment !</div>';
        }
        return Redirect::route('installment.search_result')->with('message', 'Installment added !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($branch_application_id)
    {
        $results = Installment::where('branch_application_id', $branch_application_id)->get();
        $info = BranchApplication::findOrFail($branch_application_id);
        return view('installments.show', compact('results', 'info'));
    }

    public function search() {
        $branch_applications = [''=>'Select Student Code'] + BranchApplication::where('status', '=', 1)->lists('student_code', 'id')->toArray(); //
        return view('installments.search', compact('branch_applications'));
    }

    public function search_result(Request $request) {
        $matchThese = [];
        $pay_date_from  = '1970-01-01';
        $pay_date_to    = date('Y-m-d');

        if($request->application_id) {
            $matchThese['branch_application_id'] = $request->branch_application_id;
        }

        if($request->name) {
            $matchThese['name'] = trim($request->name);
        }

        if($request->pay_date_from) {
            $date_from = $request->pay_date_from;
        }

        if($request->pay_date_to) {
            $date_to = $request->pay_date_to;
        }

        $results = Installment::where($matchThese)->where('pay_date', '>=', $pay_date_from)->where('pay_date', '<=', $pay_date_to)->with('branch_application')->get();
        return view('installments.search_result', compact('results'));
    }

    public function public_search() {
        return view('installments.public_search');
    }

    public function public_search_result(Request $request) {
        $branch_application = BranchApplication::where('student_code', $request->student_code)->first();
        $results = [];
        if($branch_application) {
            $branch_application_id = $branch_application->id;
            $results = Installment::where('branch_application_id', $branch_application_id)->with('branch_application')->get();
        }

        return view('installments.public_search_result', compact('results', 'branch_application'));
    }

    public function edit($id) {
        $applications = [''=>'Select Student Code'] + BranchApplication::where('status', '=', 1)->lists('student_code', 'id')->toArray(); //dump($applications);
        $installment = Installment::findOrFail($id);
        return view('installments.edit', compact('applications', 'installment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($data = $request->all(), Installment::$rules);
        if ($validator->fails())
          return Redirect::back()->withErrors($validator)->withInput()->with('message', 'Some fields has errors. Please correct it and then try again');
      
        $installment = Installment::findOrFail($id);
        $installment->branch_application_id = $request->branch_application_id;
        $installment->paid_amount = $request->paid_amount;
        $installment->pay_date = $request->pay_date;

        $installment->save();

        return Redirect::route('installment.search_result')->with('message', 'Installment updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
