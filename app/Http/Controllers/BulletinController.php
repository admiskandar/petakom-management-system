<?php

namespace App\Http\Controllers;

use App\Models\BulletinRecord;
use Illuminate\Http\Request;

class BulletinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $bulletins = BulletinRecord::all();
        return view('ManageBulletin.BulletinBoard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ManageBulletin.NewPost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //To validate required fields
        $request->validate([
            'bulletin_name'=> 'required',
            'bulletin_category'=> 'required',
            'bulletin_date'=> 'required',
            'bulletin_tag'=> 'required',
            'bulletin_excerpt'=> 'required',
            'bulletin_detail'=> 'required',
            // 'bulletin_pdf'=> 'required',
            // 'bulletin_image'=> 'required',
            // 'bulletin_video'=> 'required',
            'bulletin_link' => 'required'
        ]);

        // BulletinRecord::create($request->all());

        //Getting values from the form
        $bulletin = new BulletinRecord([
            'bulletin_name' => $request->get('bulletin_name'),
            'bulletin_category' => $request->get('bulletin_category'),
            'bulletin_date' => $request->get('bulletin_date'),
            'bulletin_tag' => $request->get('bulletin_tag'),
            'bulletin_excerpt' => $request->get('bulletin_excerpt'),
            'bulletin_detail' => $request->get('bulletin_detail'),
            // 'bulletin_pdf' => $request->get('bulletin_pdf'),
            // 'bulletin_image' => $request->get('bulletin_image'),
            // 'bulletin_video' => $request->get('bulletin_video'),
            'bulletin_link' => $request->get('bulletin_link')
        ]);
        $bulletin->save();
        
        return view('ManageBulletin.SinglePost');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('ManageBulletin.SinglePost');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('ManageBulletin.EditPost');
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
        return view('ManageBulletin.SinglePost');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return view('ManageBulletin.BulletinBoard');
    }
}
