<?php

namespace App\Http\Controllers;

use App\Continent;
use App\Http\Requests\AdminToursRequest;
use App\Photo;
use App\Tour;
use Illuminate\Support\Facades\Session;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * working for all users view
     */
    public function index()
    {
        $tours = Tour::all();
        $continents = Continent::all();
        return view('admin/tour/index',compact('tours','continents'));
//        return view('admin/tour/tourDetails',compact('tours'));
//        $users = User::all();
//        return view('admin.usersDetails', compact('users'));

    }
    public function detail()
    {
        $tours = Tour::all();
        $continents = Continent::all();
        return view('admin/tour/tourDetails',compact('tours','continents'));
//        return view('admin/tour/tourDetails',compact('tours'));
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
        $continent = Continent::pluck('name','id')->all();
        return view('admin.tour.createTour',compact('continent'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function store(AdminToursRequest $request)
    {
        $input = $request->all();
        if ($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }
        Session::flash('created_tour','The Tour page has been created');
          Tour::create($input);
        return redirect('/admin/tour');

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
        $tour = Tour::findOrFail($id);
        return view('admin/tour/showTour',compact('tour'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tour = Tour::findOrFail($id);
        $continents = Continent::pluck('name','id')->all();
        return view('admin/tour/editTour',compact('tour','continents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminToursRequest $request, $id)
    {
        $tour = Tour::findOrFail($id);
        $input = $request->all();
        if ($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }
        Session::flash('edited_tour','The Tour page has been edited');
        $tour->update($input);
        return redirect('/admin/tour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tour = Tour::findOrFail($id);
//        unlink(public_path().$tour->photo->file);
        $tour->delete();
        Session::flash('deleted_tour','The Tour page has been deleted');
        return redirect('admin/tour');
    }
}
