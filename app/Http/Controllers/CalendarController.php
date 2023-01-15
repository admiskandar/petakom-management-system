<?php

namespace App\Http\Controllers;

use App\Models\CalendarRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Response;

class CalendarController extends Controller
{

    public function index()
    {
        // $events = array();
        // $calendarRecords = DB::table('calendars')->get();

        // dd($calendarRecords->title);

    
        // foreach ($calendarRecords as $calendarRecord) {
        //     $events[] = [
        //         'title' => $calendarRecord->title,
        //         'date' => $calendarRecord->date,
        //         // 'end' => $calendarRecords->end,
        //     ];
        // }

        // return $events;
        $calendar = CalendarRecord::all();
        return view('ManageCalendar.CalendarHomePage', ["calendar" => $calendar]);
    }

    public function loadCalendar()
    {

        return view('ManageCalendar.AddCalendarPage');
    }

    public function store(Request $request)
    {
        $selectionOptions = [1 => 'Sports', 2 => 'Meeting', 3 => 'Competition', 4 => 'Event'];
        $selected = $selectionOptions[$request->input('category')];

        CalendarRecord::create(
            [
                // "id" => $request->input('id'),
                // "created_at" => $request->input('created_at'),
                // "updated_at" => $request->input('updated_at'),

                "date" => $request->input('date'),
                "category" => $selected,
                "title" => $request->input('title'),
                "message" => $request->input('message'),
                "url" => $request->input('url'),
            ]
            
        );

        return redirect()->route('calendar.ListCalendarPage')->with('alert','Your data has been successfully added');;
    }

    public function show(Request $request)
    {
        $post = CalendarRecord::all();

        return view(

            'ManageCalendar.ListCalendarPage',
            compact('post')


        );
    }

    public function showCalendar(Request $request, $id)
    {

        $calendarPost = CalendarRecord::select(

            'id',
            'date',
            'category',
            'title',
            'message',
            'url'

        )->where('id', '=', $id)->first();


        return view(
            'ManageCalendar.UpdateCalendarPage',
            compact('calendarPost')

        );
    }


    public function update(Request $request, $id)
    {
        $post = CalendarRecord::find($id);

        $post->update([
            "date" => $request->input('date'),
            "category" => $request->input('category'),
            "title" => $request->input('title'),
            "message" => $request->input('message'),
            "url" => $request->input('url'),
        ]);

        return redirect()->route('calendar.ListCalendarPage')->with('message', 'Your details has been updated successfully!');
    }

    public function destroy($id)
    {
        DB::delete('delete from calendars where id = ?', [$id]);

        return redirect()->back();
    }
}
