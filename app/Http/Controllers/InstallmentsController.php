<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Application, App\Installment;
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
        //$applications = Application::where('processed', 1)->where('status', 1)->select('name')->get();
        $applications = [''=>'Select Student Code'] + Application::where('processed', 1)->where('status', '=', 1)->where('branch_apply', 1)->lists('student_code', 'id')->toArray(); //dump($applications);
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
        return Redirect::route('installment.view', $request->application_id)->with('message', 'Installment added !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($application_id)
    {
        $results = Installment::where('application_id', $application_id)->get();
        $info = Application::findOrFail($application_id);
        return view('installments.show', compact('results', 'info'));
    }

    public function search() {
        $applications = [''=>'Select Student Code'] + Application::where('processed', 1)->where('status', '=', 1)->where('branch_apply', 1)->lists('student_code', 'id')->toArray(); //
        return view('installments.search', compact('applications'));
    }

    public function search_result(Request $request) {
        $matchThese = [];
        $pay_date_from  = '1970-01-01';
        $pay_date_to    = date('Y-m-d');

        if($request->application_id) {
            $matchThese['application_id'] = $request->application_id;
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

        $results = Installment::where($matchThese)->where('pay_date', '>=', $pay_date_from)->where('pay_date', '<=', $pay_date_to)->with('application')->get();
        return view('installments.search_result', compact('results'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
