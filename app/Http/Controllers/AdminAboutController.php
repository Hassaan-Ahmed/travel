<?php

namespace App\Http\Controllers;

use App\About;
use App\Http\Requests\AdminAboutRequest;
use App\Photo;
use Illuminate\Support\Facades\Session;

class AdminAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * working for all users view
     */
    public function index()
    {
        $abouts = About::all();
//        return view('about-us-home',compact('abouts'));
        return view('admin/about/aboutDetails',compact('abouts'));
//        $users = User::all();
//        return view('admin.usersDetails', compact('users'));

    }

    public function getUs()
    {
        $abouts = About::all();
        return view('about-us-home',compact('abouts'));
//        $users = User::all();
//        return view('admin.usersDetails', compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.createAbout');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function store(AdminAboutRequest $request)
    {
        $input = $request->all();
        if ($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }
          About::create($input);
        Session::flash('created_about','The About page has been created');
        return redirect('/admin/about');

//
//       return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $abouts = About::findOrFail($id);
        return view('about-me',compact('abouts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $abouts = About::findOrFail($id);
        return view('admin/about/editAbout',compact('abouts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminAboutRequest $request, $id)
    {
        $about = About::findOrFail($id);
        $input = $request->all();
        if ($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }
        $about->update($input);
        Session::flash('edited_about','The About page has been edited');
        return redirect('/admin/about');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = About::findOrFail($id);
//        unlink(public_path().$about->photo->file);
        $about->delete();
        Session::flash('deleted_about','The About page has been deleted');
        return redirect('admin/about');
    }
}
