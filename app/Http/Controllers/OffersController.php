<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Offer;
use Validator, Redirect,DB, Session, Hashids, Auth;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class OffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $results = Offer::whereStatus(1)->paginate(20);
        return view('offers.index', compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('offers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($data = $request->all(), Offer::$rules);
        if ($validator->fails()) return Redirect::back()->withErrors($validator)->withInput();

        $destination_path = 'uploads/offers/'.date('Y-m-d');
        $title = $request->get('title');
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()){
                $fileName = md5(date('Y-m-d H:i:s').uniqid()).'_'.str_replace(' ','-',strtolower($title)).'.'.$request->file('image')->getClientOriginalExtension();
                $request->file('image')->move($destination_path, $fileName);
                //$data['cv_url'] = 'candidates/'.$candidate->id.'/'.$fileName;
                $data['image_url'] = $destination_path.'/'.$fileName;
            }
        }
        Offer::create($data);
        return Redirect::route('offer_view_path')->with('message', 'New Offer has been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy( $id)
    {
        $message = '<div class="alert alert-success">Offer removed successfully !</div>'; 
        $offer = Offer::findOrFail($id); 
        $offer->status = 0;
        if($offer->save()) {
            return Redirect::route('offer_view_path')->with('status', $message);
        }
    }
}
