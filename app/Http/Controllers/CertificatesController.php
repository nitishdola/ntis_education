<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Certificate;
use App\Course;

use DB;


class CertificatesController extends Controller
{
    public function __construct(Certificate $certificate) {
        $this->certificate = $certificate;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$certificates = $this->certificate->all();
        $certificates = Certificate::orderBy('student_name')->with('certificate')->whereStatus('1')->paginate(20);
        return view('certificates.index', compact('certificates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $courses =  [''=>'Select Department/Center'] + Course::whereStatus(1)->orderBy('name')->lists('name', 'id')->toArray();
        return view('certificates.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $req)
    {
        $message    = '';

        

        $data = $req->all();
        $period_from = $data['period_from'];
        $period_from = date('Y-m-d', strtotime($period_from));
        $data['period_from'] = $period_from;

        $period_to = $data['period_to'];
        $period_to = date('Y-m-d', strtotime($period_to));
        $data['period_to'] = $period_to;

        $issue_date = $data['issue_date'];
        $issue_date = date('Y-m-d', strtotime($issue_date));
        $data['issue_date'] = $issue_date;
        if($this->certificate->create($data)) {
            $message .= '<div class="alert alert-success">Certificate added successfully !</div>'; 
        }else{
            $message .= '<div class="alert alert-success">unable to add Certificate !</div>';
        }
        return redirect('certificates/add')->with('status', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $courses =  Course::lists('name', 'id'); //dd($courses);
        $courses[-1] = 'Select Course';

        $certificate = $this->certificate->whereId($id)->first();
        return view('certificates.edit', compact('certificate', 'courses'));    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request variable
     * @return Response
     */
    public function update(Request $req, $id)
    {
        $message = '';
        $data = $req->all();
        $period_from = $data['period_from'];
        $period_from = date('Y-m-d', strtotime($period_from));
        $data['period_from'] = $period_from;

        $period_to = $data['period_to'];
        $period_to = date('Y-m-d', strtotime($period_to));
        $data['period_to'] = $period_to;

        $issue_date = $data['issue_date'];
        $issue_date = date('Y-m-d', strtotime($issue_date));
        $data['issue_date'] = $issue_date;

        $certificate    = $this->certificate->find($id); 
        $input = array_except($data, '_method');


        if($certificate->update($input)) { 
            $message .= '<div class="alert alert-success">Certificate edited successfully !</div>'; 
        }else{
            $message .= '<div class="alert alert-danger">Unable to edit cartificate !</div>'; 
        } 

        return redirect('certificates')->with('status', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id = null)
    {
        $message = '<div class="alert alert-success">Certificate removed successfully !</div>';
        $certificate = $this->certificate->find($id); 
        $certificate->status = 0;
        if($certificate->save()) {
            return redirect('certificates')->with('status', $message);
        }
    }

    public function search(Request $req) {
        
        if(!empty($req->all())) {
            $data = $req->all();
            $option = $data['option'];

            $message    = '';

            if($option == 'sname') {
                $student_name = $data['name'];
                $matchThese = ['certificates.student_name' => $student_name, 'certificates.status' => 1];

                $res = DB::table('certificates')
                    ->join('courses', 'courses.id', '=', 'certificates.course_id')
                    ->where($matchThese)
                    ->where('certificates.status',1)
                    ->select('certificates.*', 'courses.name', 'courses.code', 'courses.duration')
                    ->get();

                if(!empty($res)) {
                    return view('certificates.track_result', compact('res'));
                }else{
                    $message .= '<div class="alert alert-danger"> No results found !</div>';
                    return redirect('track')->with('status', $message);
                }
                
            }else if($option == 'regno') {
                $registration_number = $data['registration_number'];

                $matchThese = ['certificates.registration_number' => $registration_number, 'certificates.status' => 1];

                $res = DB::table('certificates')
                    ->join('courses', 'courses.id', '=', 'certificates.course_id')
                    ->where($matchThese)
                    ->select('certificates.*', 'courses.name', 'courses.code', 'courses.duration')
                    ->get();
                if(!empty($res)) {
                    return view('certificates.track_result', compact('res'));
                }else{
                    $message .= '<div class="alert alert-danger"> No results found !</div>';
                    return redirect('track')->with('status', $message);
                }
                
            }
        }
    }
}
