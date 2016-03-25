<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Result;
use App\Exam;
use App\Course;
use DB, Input;

class ResultsController extends Controller
{
    public function __construct(Result $result) {
        $this->result = $result;
    }

    public function index() {
        $exams = [''=>'Select Exam Date'] + Exam::where('status', '=', 1)->lists('name', 'id')->toArray();
        return view('results.index', compact('exams'));
    }

    public function admin_view() {
        //$exams = [''=>'Select Exam Date'] + Exam::lists('name', 'id')->toArray(); //dd($courses);
        $exams = [''=>'Select Exam Date'] + Exam::where('status', '=', 1)->lists('name', 'id')->toArray();
        return view('results.admin_view', compact('exams'));
    }

    public function api_get_all_result() {
       $res = DB::table('results')
            ->join('admits', 'admits.roll_number', '=', 'results.roll_number')
            ->select('results.*', 'results.id as resultid', 'admits.*')
            ->orderBy('marks_obtained', 'desc')->get();
        //return json_encode($res);

    }

    public function create() {
        $courses = [''=>'Select Course'] + Course::orderBy('name')->whereStatus(1)->lists('name', 'id')->toArray(); 
    	$exams   = [''=>'Select Exam Date'] + Exam::where('status', '=', 1)->lists('name', 'id')->toArray(); //dd($courses);
    	return view('results.create', compact('exams', 'courses'));
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
        $exam_id = $data['exam_id'];
        $roll_number = $data['roll_number'];
        $marks_obtained = $data['marks_obtained'];
        $course_id = $data['course_id'];
        $course_fee = $data['course_fee'];

        $check_if_roll_number_exists = $this->result->check_if_roll_number_exists($roll_number, $exam_id);
        if($check_if_roll_number_exists) {

            $check_if_mark_exists = $this->result->check_if_mark_exists($roll_number, $exam_id);

            if(!$check_if_mark_exists){

                if($this->result->create($req->all())) {
                $message .= '<div class="alert alert-success">Result added successfully for roll number <b>'.$roll_number.'</b> !</div>'; 
                }else{
                    $message .= '<div class="alert alert-success">unable to add result !</div>';
                }
            }else{
                $message .= '<div class="alert alert-danger">Result already added for roll number  <b>'.$roll_number.'</b> !</div>';

            }


        }else{
            $message .= '<div class="alert alert-danger">Roll  number <b>'.$roll_number.'</b>  does not exist !</div>';
        }
        
        return redirect('results/add')->with('status', $message);
    }

    public function view(Request $req) {
        $data = $req->all();
        $exam_id = $data['exam_id'];
        $message = '';
        
        $res = DB::table('results')
            ->join('exams', 'exams.id', '=', 'results.exam_id')
            ->join('admits', 'admits.roll_number', '=', 'results.roll_number')
            ->join('courses', 'courses.id', '=', 'results.course_id')
            ->where('exams.id', '=', $exam_id)
            ->select('results.*', 'results.id as resultid', 'admits.*', 'exams.*', 'courses.name as courseName')
            ->orderBy('marks_obtained', 'desc')->paginate(25);
        

        if(!empty($res)) {
            $exam_date = date('d/m/Y', strtotime($res[0]->name));
            return view('results.view', [
                'res' => $res->appends(Input::except('page')),
                'exam_date' => $exam_date
            ]);

            //return view('results.view', compact('res', 'exam_date'));
        }else{
            $message .= '<div class="alert alert-danger">No Results Found !</div>';
            return redirect('results')->with('status', $message);
        }
    }


    public function admin_view_result(Request $req, $admin_view = false) {
        $data = $req->all();
        $exam_id = $data['exam_id'];
        $message = '';
        
        $res = DB::table('results')
            ->join('exams', 'exams.id', '=', 'results.exam_id')
            ->join('admits', 'admits.roll_number', '=', 'results.roll_number')
            ->join('courses', 'courses.id', '=', 'results.course_id')
            ->where('exams.id', '=', $exam_id)
            ->select('results.*', 'results.id as resultid', 'admits.*', 'exams.*', 'courses.name as courseName')
            ->orderBy('marks_obtained', 'desc')->get();

        if(!empty($res)) {
            $exam_date = date('d/m/Y', strtotime($res[0]->name));
            return view('results.admin_result_view', compact('res', 'exam_date'));
        }else{
            $message .= '<div class="alert alert-danger">No Results Found !</div>';
            return redirect('results/admin-view')->with('status', $message);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $exams = [''=>'Select Exam Date'] + Exam::lists('name', 'id')->toArray();
        $courses = [''=>'Select Course'] + Course::whereStatus(1)->lists('name', 'id')->toArray(); 

        $result = $this->result->whereId($id)->first();
        return view('results.edit', compact('result', 'exams', 'courses'));    
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

        $result    = $this->result->find($id); 
        $input = array_except($req->all(), '_method');


        if($result->update($input)) { 
            $message .= '<div class="alert alert-success">Result edited successfully !</div>'; 
        }else{
            $message .= '<div class="alert alert-danger">Unable to edit result !</div>'; 
        } 

        return redirect('results')->with('status', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $result = $this->result->find($id);
        $message =  '<div class="alert alert-danger">Result removed !</div>';
        if($result->delete()) {
            return redirect('results')->with('status', $message);
        }
    }


    public function search() {
	$title = "NTIS Education : View your selection result";
        $date = strtotime('2015-08-28');
        $now  = time(); 
        if( $now < $date ) {
            return view('results.early_search');
        }
        return view('results.search', compact('title'));
    }

    public function admin_search() {
        return view('results.search');
    }

    public function search_result(Request $req) {
	
	$title = "NTIS Education : View your selection result";

        $data = $req->all();
        $roll_number = $data['roll_number'];

        if (strpos($roll_number,'NT-') !== false) {
            $roll_number = $roll_number;
        }else{
            $roll_number = 'NT-'.$roll_number;
        }

        $res = DB::table('results')
            ->join('exams', 'exams.id', '=', 'results.exam_id')
            ->join('admits', 'admits.roll_number', '=', 'results.roll_number')
            ->join('courses', 'courses.id', '=', 'results.course_id')
            ->where('admits.roll_number', '=', $roll_number)
            ->select('results.*', 'admits.*', 'exams.*', 'courses.code as courseCode')
            ->orderBy('marks_obtained', 'desc')->get();

        //$result = $this->result->whereRoll_number($roll_number)->first();

        return view('results.view_result', compact('res', 'title'));
    }





}
