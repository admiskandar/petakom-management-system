<?php

namespace App\Http\Controllers;

use App\Models\ReportRecord;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reports = ReportRecord::all();
        return view('ManageReport.ReportHome', ["reports" => $reports]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('ManageReport.AddProposal');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //store a new proposal
        $newProposal = ReportRecord::create([
            'title' => $request->title,
            'objective' => $request->objective,
            'organizer' => $request->organizer,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'location' => $request->location,
            'participation' => $request->participation,
            'budget' => $request->budget,
            'status' => 0,
            'user_id' => auth()->user()->id,
        ]);

        // return view('ManageReport.ReportHome');
        return redirect()->route('report.index',$newProposal->id);
        // return redirect()->back();//redirect ke page sama
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ReportRecord $proposal)
    {
        //
        if($proposal->user_id == auth()->user()->id){
            return view('ManageReport.EditProposal', [
                'data' => $proposal,
                ]); //returns the edit view with the post
        }
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
    public function destroy(ReportRecord $proposal)
    {
        //delete data
        if($proposal->user_id == auth()->user()->id){
            $proposal->delete();
        }

        return redirect()->route('report.index');
    }
}
