<?php

namespace App\Http\Controllers;

use App\Models\BulletinRecord;
use App\Models\BookmarkRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class BulletinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bulletins = BulletinRecord::all();
        return view('ManageBulletin.BulletinBoard', compact('bulletins'));
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
        // $request->validate([
        //     // 'bulletin_name'=> 'required',
        //     // 'bulletin_category'=> 'required',
        //     // 'bulletin_date'=> 'required',
        //     // 'bulletin_tag'=> 'required',
        //     // 'bulletin_excerpt'=> 'required',
        //     // 'bulletin_detail'=> 'required',
        //     // 'bulletin_pdf'=> 'required',
        //     'bulletin_image'=> 'required|image|mimes:png,jpg,jpeg|max:2048',
        //     // 'bulletin_video'=> 'required',
        //     // 'bulletin_link' => 'required'
        // ]);


        $bulletin = new BulletinRecord;
        $bulletin -> bulletin_name = $request->input('bulletin_name');
        $bulletin -> bulletin_category = $request->input('bulletin_category');
        $bulletin -> bulletin_date = $request->input('bulletin_date');
        $bulletin -> bulletin_tag = $request->input('bulletin_tag');
        $bulletin -> bulletin_excerpt = $request->input('bulletin_excerpt');
        $bulletin -> bulletin_detail = $request->input('bulletin_detail');
        $bulletin -> bulletin_link = $request->input('bulletin_link');
        

        if($request->hasfile('bulletin_pdf'))
        {
            $file = $request->file('bulletin_pdf');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/pdf/', $filename);
            $bulletin->bulletin_pdf = $filename;
        }

        if($request->hasfile('bulletin_image'))
        {
            $file = $request->file('bulletin_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/images/', $filename);
            $bulletin->bulletin_image = $filename;
        }

        if($request->hasfile('bulletin_video'))
        {
            $file = $request->file('bulletin_video');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/videos/', $filename);
            $bulletin->bulletin_video = $filename;
        }
   
        $bulletin->save();
        
        $bulletin_id = BulletinRecord::find($bulletin->id);
        return view ('ManageBulletin.SinglePost', ["bulletin"=>$bulletin_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bulletin = BulletinRecord::find($id);
        return view ('ManageBulletin.SinglePost', ["bulletin"=>$bulletin]);

        // change column bulletin_id to id because of this https://laracasts.com/discuss/channels/laravel/unknown-column-find-and-i-did-not-find-it
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bulletin = BulletinRecord::find($id);
        return view ('ManageBulletin.EditPost', ["bulletin"=>$bulletin]);
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
        // //To validate required fields
        // $request->validate([
        //     'bulletin_name'=> 'required',
        //     'bulletin_category'=> 'required',
        //     'bulletin_date'=> 'required',
        //     'bulletin_tag'=> 'required',
        //     'bulletin_excerpt'=> 'required',
        //     'bulletin_detail'=> 'required',
        //     // 'bulletin_pdf'=> 'required',
        //     // 'bulletin_image'=> 'required',
        //     // 'bulletin_video'=> 'required',
        //     'bulletin_link' => 'required'
        // ]);

        $bulletin = BulletinRecord::find($id);
        // getting values from form
        $bulletin -> bulletin_name = $request->get('bulletin_name');
        $bulletin -> bulletin_category = $request->get('bulletin_category');
        $bulletin -> bulletin_date = $request->get('bulletin_date');
        $bulletin -> bulletin_tag = $request->get('bulletin_tag');
        $bulletin -> bulletin_excerpt = $request->get('bulletin_excerpt');
        $bulletin -> bulletin_detail = $request->get('bulletin_detail');
        $bulletin -> bulletin_link = $request->get('bulletin_link');
        

        if($request->hasfile('bulletin_pdf')){
            $destination = 'uploads/pdf/'.$bulletin->bulletin_pdf;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('bulletin_pdf');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/pdf/', $filename);
            $bulletin->bulletin_pdf = $filename;
        }

        if($request->hasfile('bulletin_image')){
            $destination = 'uploads/images/'.$bulletin->bulletin_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('bulletin_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/images/', $filename);
            $bulletin->bulletin_image = $filename;
        }
        
        if($request->hasfile('bulletin_video')){
            $destination = 'uploads/videos/'.$bulletin->bulletin_video;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('bulletin_video');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/videos/', $filename);
            $bulletin->bulletin_video = $filename;
        }
        $bulletin->update();

        $bulletin_id = BulletinRecord::find($bulletin->id);
        return view ('ManageBulletin.SinglePost', ["bulletin"=>$bulletin_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bulletin = BulletinRecord::find($id);
        $destination = 'uploads/pdf/'.$bulletin->bulletin_pdf;
        if(File::exists($destination))
        {
            File::delete($destination);
        }

        $destination = 'uploads/images/'.$bulletin->bulletin_image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }

        $destination = 'uploads/videos/'.$bulletin->bulletin_video;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $bulletin->delete();
        return redirect ('/bulletin'); 
    }


    public function filterBulletinCategory(Request $request)
    {
        $category = $request->input('category');
        $bulletins = BulletinRecord::where('bulletin_category', $category)->get();
        return view('ManageBulletin.BulletinBoard', compact('bulletins'));
    }
    public function filterBulletinTag(Request $request)
    {
        $tag = $request->input('tag');
        $bulletins = BulletinRecord::where('bulletin_tag', $tag)->get();
        return view('ManageBulletin.BulletinBoard', compact('bulletins'));
    }
    
    public function sortBulletin(Request $request)
    {
        $sort = $request->input('sort');
        if ($sort == 'asc') {
            $bulletins = BulletinRecord::orderBy('bulletin_date', 'asc')->get();
        } else {
            $bulletins = BulletinRecord::orderBy('bulletin_date', 'desc')->get();
        }
        return view('ManageBulletin.BulletinBoard', compact('bulletins'));
    }


    public function searchBulletin(Request $request)
    {
        $search = $request->input('search');
        if ($search) {
            $bulletins = BulletinRecord::where('bulletin_name', 'like', '%' . $search . '%')->get();
        } else {
            $bulletins = BulletinRecord::get();
        }
        return view('ManageBulletin.BulletinBoard', compact('bulletins'));
    }


    // BOOKMARK
    public function ViewBookmark()
    {
        $user_id = Auth::id();
        $bookmarks = BookmarkRecord::where('user_id', 'like', '%'.$user_id.'%')->get();
        return view('ManageBulletin.MyBookmark', compact('bookmarks'));
    }

    public function AddBookmark($id)
    {
        $user_id = Auth::id();
        $bulletin = BulletinRecord::find($id);
        $bookmark = new BookmarkRecord;
        $bookmark -> bulletin_id = $bulletin->id;
        $bookmark -> user_id = $user_id;
        $bookmark->save();
        return back()->with('success', 'Item bookmarked successfully');
    }

    public function DeleteBookmark($id)
    {
        $bookmark = BookmarkRecord::find($id);
        $bookmark->delete();
        return back();
    }

    public function filterBookmarkCategory(Request $request)
    {
        $user_id = Auth::id();
        $bulletin = BulletinRecord::all();
        $category = $request->input('category');
        $bookmarks = BookmarkRecord::where('user_id', 'like', '%'.$user_id.'%')->with('bulletin')->whereHas('bulletin', function ($query) use ($category) {
            $query->where('bulletin_category', $category);
        })->get();

        return view('ManageBulletin.MyBookmark', compact('bookmarks'));
    }

    public function filterBookmarkTag(Request $request)
    {
        $user_id = Auth::id();
        $bulletin = BulletinRecord::all();
        $tag = $request->input('tag');
        $bookmarks = BookmarkRecord::where('user_id', 'like', '%'.$user_id.'%')->with('bulletin')->whereHas('bulletin', function ($query) use ($tag) {
            $query->where('bulletin_tag', $tag);
        })->get();

        return view('ManageBulletin.MyBookmark', compact('bookmarks'));
    }

    public function sortBookmark(Request $request)
    {
        $user_id = Auth::id();
        $sort = $request->input('sort');
        if ($sort == 'asc') {
            $bookmarks = BookmarkRecord::where('user_id', 'like', '%'.$user_id.'%')
                ->join('bulletins', 'bookmarks.bulletin_id', '=', 'bulletins.id')
                ->orderBy('bulletins.bulletin_date', 'asc')
                ->get();

        } else {
            $bookmarks = BookmarkRecord::where('user_id', 'like', '%'.$user_id.'%')
                ->join('bulletins', 'bookmarks.bulletin_id', '=', 'bulletins.id')
                ->orderBy('bulletins.bulletin_date', 'desc')
                ->get();

        }
        return view('ManageBulletin.MyBookmark', compact('bookmarks'));
    }

    public function searchBookmark(Request $request)
    {
        $user_id = Auth::id();
        $search = $request->input('search');
        if ($search) {
            $bookmarks = BookmarkRecord::join('bulletins', 'bookmarks.bulletin_id', '=', 'bulletins.id')
                ->where('user_id', 'like', '%'.$user_id.'%')
                ->where('bulletins.bulletin_name', 'like', '%' . $search . '%')
                ->get();
        } else {
            $bookmarks = BookmarkRecord::get();
        }
        return view('ManageBulletin.MyBookmark', compact('bookmarks'));
    }


    


}


// refer https://www.fundaofwebit.com/post/laravel-8-crud-with-image-upload-tutorial
