<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserFormRequest;
use App\Photo;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return view('user.profile');
    }

    public function profile(){
        return view('user/profile', array('users'=>Auth::user()));
    }

//    public function update_image(UserPhotoRequest $request){
//        $profiles = $request->all();
//        if($request->hasFile('photo_id')){
//            $file = Input::file('photo_id');
//            $file->move(public_path(). '/uploads/avatars/',$file->getClientOrignalName());
//            $url = URL::to("/").'uploads/avatars/'.$file->$file->getClientOrignalName();
//        }
//        $profiles->photo_id = $url;
//        $profiles->save();
//        return view('user/profile', array('users'=>Auth::user()));
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('user/profile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserFormRequest $request)
    {
//        if (trim($request->password)==''){
//            $input = $request->except('password');
//        }else{
//            $input->$request->all();
//            $input['password'] = bcrypt($request->password);
//        }
//        $input = $request->all();
//        if ($file = $request->file('photo_id')){
//            Session::flash('edited_user','The User page has been edited');
//            $name = time() . $file->getClientOriginalName();
//            $file->move('images', $name);
//            $photo = Photo::create(['file'=>$name]);
//            $input['photo_id'] = $photo->id;
//        }
//        Session::flash('update_user','The User info has been updated');
//        User::create($input);
//        return redirect('/user/profile');
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
        $user = User::findOrFail($id);
        return view('user/updateProfile',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserFormRequest $request, $id)
    {
        $about = User::findOrFail($id);
        if (trim($request->password)==''){
            $input = $request->except('password');
        }
        else{
            $input = $request->all();
            $input['password'] = bcrypt($request->password);
        }
        if ($request->file('photo_id'== '')){
            $input = $request->except('photo_id');
        }

        elseif ($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }
        $about->update($input);
        Session::flash('edited_profile','The profile has been updated');
//        $input['password'] = bcrypt($request->password);
        return redirect('/user/profile');
//return $request->all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
