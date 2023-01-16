<?php

namespace App\Http\Controllers;

use App\Models\ElectionData;
use App\Models\VoterData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class ElectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all from database
        $election = ElectionData::all();

        $election = ElectionData::get();
        return view('ManageElection.ListCandidatePage', ["election" => $election]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ManageElection.AddCandidatePage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate the request
        $request->validate([
            'candidate_picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $election = new ElectionData;
        $election->candidate_name = $request->input('candidate_name');
        $election->candidate_faculty = $request->input('candidate_faculty');
        $election->candidate_course = $request->input('candidate_course');
        $election->candidate_year = $request->input('candidate_year');
        $election->candidate_manifesto = $request->input('candidate_manifesto');
        $election->election_year = $request->input('election_year');
        if ($request->hasfile('candidate_picture')) {
            $file = $request->file('candidate_picture');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/candidates/', $filename);
            $election->candidate_picture = $filename;
        }
        $election->total_vote = 0;

        $election->save();
        return redirect()->route('election.index')->with('success', 'Candidate added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $election = ElectionData::find($id);
        return view('ManageElection.ViewCandidatePage', ['election' => $election]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $election = ElectionData::find($id);
        return view('ManageElection.UpdateCandidatePage', ['election' => $election]);
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
        $request->validate([
            'candidate_picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $election = ElectionData::find($id);
        $election->candidate_name = $request->input('candidate_name');
        $election->candidate_faculty = $request->input('candidate_faculty');
        $election->candidate_course = $request->input('candidate_course');
        $election->candidate_year = $request->input('candidate_year');
        $election->candidate_manifesto = $request->input('candidate_manifesto');
        $election->election_year = $request->input('election_year');
        if ($request->hasfile('candidate_picture')) {
            $destination = 'uploads/candidates/' . $election->candidate_picture;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('candidate_picture');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/candidates/', $filename);
            $election->candidate_picture = $filename;
        }
        $election->update();
        return redirect()->route('election.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $election = ElectionData::find($id);
        $destination = 'uploads/candidates/' . $election->candidate_picture;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $election->delete();
        return redirect()->back()->with('status', 'Student Image Deleted Successfully');
    }

    public function filter(Request $request)
    {
        $year = $request->input('year');
        $election = ElectionData::where('election_year', $year)->get();
        return view('ManageElection.ListCandidatePage', ["election" => $election]);
    }

    public function leaderboard()
    {
        $election = ElectionData::all();

        $election = ElectionData::get();

        return view('ManageElection.ViewLeaderboard', ["election" => $election]);
    }

    public function ranking(Request $request)
    {

        $year = $request->input('year');
        $request->session()->put('year', $year);
        $election = ElectionData::where('election_year', $year)->get();
        return view('ManageElection.ViewLeaderboard', ["election" => $election]);
    }

    public function sort(Request $request)
    {
        $sort = $request->input('sort');
        if ($sort == 'asc') {
            $election = ElectionData::orderBy('total_vote', 'asc')->get();
        } else {
            $election = ElectionData::orderBy('total_vote', 'desc')->get();
        }
        return view('ManageElection.ViewLeaderboard', ["election" => $election]);
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        if ($search) {
            $election = ElectionData::where('candidate_name', 'like', '%' . $search . '%')->get();
        } else {
            $election = ElectionData::get();
        }
        return view('ManageElection.ListCandidatePage', ["election" => $election]);
    }

    public function filter2(Request $request)
    {
        $year = $request->input('year');
        $election = ElectionData::where('election_year', $year)->get();
        return view('ManageElection.ViewCandidateInterface', ["election" => $election]);
    }

    public function vote()
    {
        $user_id = Auth::id();
        $date = Carbon::now()->format('Y');
        $election = ElectionData::where('election_year', 'like', '%'.$date.'%')->get();
        $vote = VoterData::where('user_id', 'like', '%'.$user_id.'%')->orderBy('voter.user_id', 'desc')->first();
        // $vote = VoterData::where('user_id', 'like', '%'.$user_id.'%')->latest()->first();

        // $election = ElectionData::join('voter', 'election.election_year', '=', 'voter.vote_year')
        //     ->select('election.*', 'voter.*')
        //     ->get();

        // return view('ManageElection.ViewCandidateInterface', ["election" => $election, "vote" => $vote, "date" => $date]  );
        return view('ManageElection.ViewCandidateInterface')->with('election', $election)->with('vote', $vote)->with('date', $date);
    }


    public function voteedit($id)
    {
        
        $user_id = Auth::id();
        $election = ElectionData::find($id);
        $election -> total_vote += 1;
        $voter = new VoterData;
        $voter -> user_id = $user_id;
        $voter -> election_id = $election->id;
        $voter -> vote_year = $election->election_year;
        
        $voter->save();
        $election ->update();
        // return view('dashboard');
        return redirect()->route('election.index');

    }




}
