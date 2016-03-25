<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Admit;
use App\Exam;
use DB;

class AdmitsController extends Controller
{
    public function __construct(Admit $admit) {
        $this->admit = $admit;
    }


    public function index() {
        //$admits = Exam::whereStatus('1')->get();
        $admits = DB::table('admits')
                    ->join('exams', 'exams.id', '=', 'admits.exam_id')
                    ->where('admits.status', '=', 1)
                    ->select('admits.*', 'exams.name')
                    ->orderBy('student_name')
                    ->paginate(20);
        return view('admits.index', compact('admits'));
    }

    public function create() {
    	$exams = [''=>'Select Exam Date'] + Exam::where('status', '=', 1)->lists('name', 'id')->toArray();
    	return view('admits.create', compact('exams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $req)
    {
        $message    = '';

        $roll_number    = trim($req->get('roll_number'));

        $check          = $this->admit->check_if_rollno_exists($roll_number); 

        if(!$check) {
           if($this->admit->create($req->all())) {
            $message .= '<div class="alert alert-success">Admit added successfully !</div>'; 
            }else{
                $message .= '<div class="alert alert-danger">unable to add admit !</div>';
            } 
        }else{
            $message .= '<div class="alert alert-danger">Roll Number <b>'.$roll_number.'</b> already exists !</div>';
        }
        
        return redirect('admit/add')->with('status', $message);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $exams = [''=>'Select Exam Date'] + Exam::lists('name', 'id')->toArray(); //dd($courses);

        $admit = $this->admit->whereId($id)->first();
        return view('admits.edit', compact('exams', 'admit'));    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request variable
     * @return Response
     */
    public function update(Request $req, $id){
        $message = '';

    
        //$id             = $req->get('id');

        $admit    = $this->admit->find($id); 
        $data = $req->all();
        $input = array_except($data, '_method');


        if($admit->update($input)) { 
            $message .= '<div class="alert alert-success">Admit edited successfully !</div>'; 
        }else{
            $message .= '<div class="alert alert-danger">Unable to edit admit !</div>'; 
        } 

        return redirect('admits')->with('status', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy( $id = null)
    {
         $message = '<div class="alert alert-success">Admit removed successfully !</div>'; 
        $admit = $this->admit->find($id); 
        $admit->status = 0;
        if($admit->save()) {
            return redirect('admits')->with('status', $message);
        }
    }
}
