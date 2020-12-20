<?php

namespace App\Http\Controllers;
use App\Models\contact;
use Illuminate\Http\Request;


class Contact_AdController extends Controller
{
    public function index()
    {
        $ds = contact::All();
        return view('admin.contact.all', compact('ds'));
    }
    public function destroy($id)  {
        $delete = contact::find($id);
        $delete->delete();
        return redirect('/contact');
    }
}
