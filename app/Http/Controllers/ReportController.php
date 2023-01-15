<?php

namespace App\Http\Controllers;

use App\Models\ReportRecord;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $report = ReportRecord::all();
        return view('ManageReport.ReportHome', ["reports" => $report]);

        // $proposals = ReportRecord::with('reports')->get();
        // return view('ManageReport.ViewProposal', ['proposals' => $proposals]);
    }

    public function indexReport()
    {
        //
        $data = ReportRecord::all();
        $data->setTable('reports');
        return view('ManageReport.ViewProposal', ["datas" => $data]);
    }

    public function generate()
    {
        //
        $report = ReportRecord::all();
        return view('ManageReport.ViewProposal', ["reports" => $report]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ManageReport.AddProposal');
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
        return redirect()->route('report.ReportHomePage', $newProposal->id);
        // return redirect()->back();//redirect ke page sama
    }

    public function storeReport(Request $request, $id)
    {
        $report = new ReportRecord();
        $report->setTable('reports');
        $report->proposal_id = $id;
        $report->date = Carbon::now();
        $report->status = 1;
        $report->save();

        return redirect()->route('report.ViewProposal');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ReportRecord  $proposal
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Retrieve the report data from the database
        $proposal = ReportRecord::join('users', 'proposals.user_id', '=', 'users.id') //join table proposals with users
            ->select('proposals.*', 'users.name')
            ->where('proposals.id', $id)
            ->first();

        // Show the report detail page
        return view('ManageReport.ViewReport', [
            'proposal' => $proposal,
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReportRecord  $proposal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $reports = ReportRecord::find($id);
        if ($reports->user_id == auth()->user()->id) {
            return view('ManageReport.EditProposal', [
                'reports' => $reports,
            ]); //returns the edit view with the post
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReportRecord  $proposal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $report = ReportRecord::findOrFail($id);
        $validatedData = $request->validate([
            'title' => 'required',
            'objective' => 'required',
            'objective' => 'required',
            'organizer' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'location' => 'required',
            'participation' => 'required',
            'budget' => 'required',

        ]);

        $report->update($validatedData);
        return redirect()->route('report.ReportHomePage')->with('success', 'Report updated successfully!');
    }

    // update status to approved
    public function updateStatusApproved(Request $request, $id)
    {
        // Find the report record
        $proposal = ReportRecord::findOrFail($id);

        // Validate the request data
        $validatedData = $request->validate([
            'statusApproved' => 'required|numeric',
        ]);

        // Update the status in the report record
        $proposal->status = $validatedData['statusApproved'];
        $proposal->update();

        // Redirect with a success message
        return redirect()->route('report.ReportHomePage')->with('success', 'Report updated successfully!');
    }
    // Update status to reject
    public function updateStatusReject(Request $request, $id)
    {
        // Find the report record
        $proposal = ReportRecord::findOrFail($id);

        // Validate the request data
        $validatedData = $request->validate([
            'statusReject' => 'required|numeric',
        ]);

        // Update the status in the report record
        $proposal->status = $validatedData['statusReject'];
        $proposal->update();

        // Redirect with a success message
        return redirect()->route('report.ReportHomePage')->with('success', 'Report updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReportRecord  $proposal
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReportRecord $report)
    {

        // check if user is authorized to delete the report
        if ($report->user_id != auth()->user()->id) {
            return redirect()->back()->with('error', 'You are not authorized to delete this report.');
        }

        // delete data
        $report->delete();
        session()->flash('success', 'Report record deleted successfully.');

        // redirect to previous page
        return redirect()->back();
    }
}
