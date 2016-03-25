<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Exam;

class ExamsController extends Controller
{
    public function __construct(Exam $exam) {
        $this->exam = $exam;
    }

    public function index() {
        $exams = Exam::whereStatus('1')->get();
        return view('exams.index', compact('exams'));
    }

    public function create() {
        
    	return view('exams.create');
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
        $name = $data['name'];
        $name = date('Y-m-d', strtotime($name));
        $data['name'] = $name;

        $admission_last_date = $data['admission_last_date'];
        $admission_last_date = date('Y-m-d', strtotime($admission_last_date));
        $data['admission_last_date'] = $admission_last_date;
        
        if($this->exam->create($data)) {
            $message .= '<div class="alert alert-success">Exam Date added successfully !</div>'; 
        }else{
            $message .= '<div class="alert alert-success">unable to add exam date !</div>';
        }
        return redirect('exam-dates/add')->with('status', $message);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $exams = $this->exam->whereId($id)->first();
        return view('exams.edit', compact('exams'));    
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
        $name = $data['name'];
        $name = date('Y-m-d', strtotime($name));
        $data['name'] = $name;

        $admission_last_date = $data['admission_last_date'];
        $admission_last_date = date('Y-m-d', strtotime($admission_last_date));
        $data['admission_last_date'] = $admission_last_date;

        $exam    = $this->exam->find($id); 
        $input = array_except($data, '_method');


        if($exam->update($input)) { 
            $message .= '<div class="alert alert-success">Exam edited successfully !</div>'; 
        }else{
            $message .= '<div class="alert alert-danger">Unable to edit exam !</div>'; 
        } 

        return redirect('exams')->with('status', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy( $id)
    {
        $message = '<div class="alert alert-success">Exam removed successfully !</div>'; 
        $exam = $this->exam->find($id); 
        $exam->status = 0;
        if($exam->save()) {
            return redirect('exams')->with('status', $message);
        }
    }


    
}
