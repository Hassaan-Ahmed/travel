<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Session;

class AdminContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('admin/contact/index',compact('contacts'));
//        $users = User::all();
//        return view('admin.usersDetails', compact('users'));

    }
    public function detail()
    {
        $contacts = Contact::all();
        return view('admin/contact/contactDetails',compact('contacts'));
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
        return view('admin.contact.createContact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function store(ContactRequest $request)
    {
        $input = $request->all();
        Contact::create($input);
        Session::flash('created_contact','The Contact page has been created');
        return redirect('/admin/contact');

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
        $contacts= Contact::findOrFail($id);
        return view('admin/contact/editContact',compact('contacts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContactRequest $request, $id)
    {
        $contact = Contact::findOrFail($id);
        $input = $request->all();
        $contact->update($input);
        Session::flash('edited_contact','The Contact page has been updated');
        return redirect('/admin/contact');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contacts= Contact::findOrFail($id);
//        unlink(public_path().$about->photo->file);
        $contacts->delete();
        Session::flash('deleted_contact','The Contact page has been deleted');
        return redirect('admin/contact');
    }
}
