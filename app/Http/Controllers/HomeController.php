<?php

namespace App\Http\Controllers;

use App\Bu;
use App\Contact;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'admin'])->except('store', 'welcome');
    }


    public function welcome()
    {

        $bus = Bu::where('status',1)->take(12)->get();
        $bus_count = Bu::count();
        $bu_sale = Bu::where('rent', 0)->count();
        $bu_rent = Bu::where('rent', 1)->count();

        $users = User::where('admin', 0)->take(8)->get();

        return view('welcome', compact('bus', 'bus_count', 'bu_sale', 'bu_rent', 'users'));

    }

    public function index()
    {

        $contacts = Contact::all();
        return view('admin.contact.index', compact('contacts'));


    }

    public function admin_form()
    {

        return view('admin.contact.form');


    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'type' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Contact::create($request->all());
        return back()->with('send', 'تم إرسال الرساله');

    }

    public function edit($id)
    {

        $contact = Contact::find($id);

        $contact->update(['view' => 1]);
        return view('admin.contact.edit', compact('contact'));


    }

    public function update(Request $request, $id)
    {

        $contact = Contact::find($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'type' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $contact->update($request->all());

        return redirect('/admin-panel/contact/index')->with('updated', 'تم التعديل علي البيانات بنجاح');


    }

    public function destroy($id)
    {

        $contact = Contact::find($id);

        $contact->delete();
        return redirect('/admin-panel/contact/index')->with('deleted', 'تم حذف البيانات بنجاح');

    }

}
