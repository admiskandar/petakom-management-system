<?php

namespace App\Http\Controllers;

use App\Models\ActivityRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ActivityController extends Controller
{
    public function index()
    {
        return view('ManageActivity.ActivityInterface');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ManageActivity.AddActivityInterface');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ActivityRecord::create(
            [
                "activity_name" => $request->input('activity_name'),
                "activity_date" => $request->input('activity_date'),
                "activity_notes" => $request->input('activity_notes'),
                "activity_venue" => $request->input('activity_venue'),

            ]
        );
        return redirect()->route('activity.ActivityInterface');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $post = ActivityRecord::all();

        return view(
            
            'ManageActivity.ViewActivityInterface',
            compact('post') //fetch data from db
            
        
        );
    }

    public function showListActivity(Request $request, $id){

        $activityPost = ActivityRecord::select(
            
            'activity_name',
            'activity_date',
            'activity_notes',
            'activity_venue',

        )->where ('id', '=', $id)->first();


        return view('ManageActivity.UpdateActivityInterface',compact('activityPost')
            
        );
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

    public function editPage(Request $request, $id){

        $activityPost = ActivityRecord::find($id);
        return view('ManageActivity.UpdateActivityInterface',compact('activityPost')
            
        );
    }

    public function update(Request $request, $id)
    {
        $post = ActivityRecord::find($id);

        $post->update([

            "activity_name" => $request->input('activity_name'),
            "activity_date" => $request->input('activity_date'),
            "activity_notes" => $request->input('activity_notes'),
            "activity_venue" => $request->input('activity_venue'),
            
        ]);

        return redirect()->back()->with('message', 'Your activity details has been updated successfully!');
    }

    
    //delete data
    public function destroy($id)
    {
        DB::delete('delete from activities where id = ?', [$id]);

        return redirect()->back();
    }
}
