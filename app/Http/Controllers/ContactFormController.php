<?php

namespace App\Http\Controllers;
use App\Models\contact;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function index()
    {
        $ds = contact::All();
        return view('admin.contact.all', compact('ds'));
    }
    public function create(){
        return view('contact.create');
    }

    public function store(Request $request){
     
            $contact = new contact([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'content' => $request->get('content'),
            ]);
            $contact->save();
        
        $data = request()->validate([
            'name'=> 'required',
            'email'=> 'required',
            'content'=> 'required',

        ]);
        Mail::to('thaonguyenvivo2000@gmail.com')->send(new ContactFormMail($data));
       return redirect('contacts');
    }
    public function destroy($id)  {
        $delete = contact::find($id);
        $delete->delete();
        return redirect('/contacts');
    }
 
}
