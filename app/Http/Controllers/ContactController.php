<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $contacts = Contact::paginate(10);
        return view('contacts.index',compact('contacts'));
    }
    public function add()
    {
        return view('contacts.add');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'names'=>'required',
            'email'=>'required|email|unique:contacts,email',
            'telephone'=>'required',
        ]);

        $contacts = new Contact();
        $contacts->names = $request->names;
        $contacts->company = $request->company;
        $contacts->location = $request->location;
        $contacts->email = $request->email;
        $contacts->telephone = $request->telephone;
        $contacts->save();

        return redirect()->route('contacts')->with('success','Your contacts was saved successfully');

    }
    public function edit($id)
    {
        $contacts = Contact::findORFail($id);
        return view('contacts.edit', compact('contacts'));

    }
    public function updating(Request $request, $id)
    {
        $this->validate($request,[
            'names'=>'required',
            'email'=>'required',
            'telephone'=>'required',
        ]);

        $contacts = Contact::find($id);
        $contacts->names = $request->names;
        $contacts->company = $request->company;
        $contacts->location = $request->location;
        $contacts->email = $request->email;
        $contacts->telephone = $request->telephone;
        $contacts->update();

        return redirect()->route('contacts')->with('success','Your contacts was updated successfully');
    }
    public function destroy($id)
    {
        $record = Contact::find($id); // Replace $id with the ID of the record you want to delete

        if ($record) {
            // Delete the record
            $record->delete();
            }
        return redirect()->route('contacts')->with('success','Your contacts was deleted successfully');
    }
}
