<?php

namespace App\Http\Controllers;

use App\Continent;
use App\Http\Requests\AdminContinentRequest;
use App\Photo;
use Illuminate\Support\Facades\Session;

class AdminContinentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $continents = Continent::all();
        return view('admin.continent.continent',compact('continents'));
//        return view('welcome',compact('continents'));
//        return view('admin.continent.continentDetails',compact('continents'));
    }
    public function detail()
    {
        $continents = Continent::all();
//        return view('admin.continent.continent',compact('continents'));
//        return view('welcome',compact('continents'));
        return view('admin.continent.continentDetails',compact('continents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.continent.createContinent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminContinentRequest $request)
    {
        $input = $request->all();
        if ($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }
        Session::flash('created_continent','The Continent has been created');
        Continent::create($input);
        return redirect('/admin/continent');

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $continents = Continent::findOrFail($id);
        return view('admin/continent/editContinent',compact('continents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminContinentRequest $request, $id)
    {
        $continent = Continent::findOrFail($id);
        $input = $request->all();
        if ($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }
        Session::flash('edited_continent','The Continent has been edited');
        $continent->update($input);
        return redirect('/admin/continent');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $continent = Continent::findOrFail($id);
        unlink(public_path().$continent->photo->file);
        $continent->delete();
        Session::flash('deleted_continent','The Continent has been deleted');
        return redirect('admin/continent');
    }
}
