<?php

namespace App\Http\Controllers;
use App\Models\theater;

use Illuminate\Http\Request;

class TheaterController extends Controller
{
    public function index()
    {
        $ds = theater::All();
        return view('admin.theater.all', compact('ds'));
    }
    public function create()
    {
        return view('admin.theater.create');
    }
    public function store(Request $request)
    {
        

        $mv_store = new theater([
           
            'name' => $request->get('name'),
            'address' => $request->get('address'),
         
           
        ]);
        $mv_store->save();
        return redirect('/theater');
    }
    public function edit($theaterId)
    {
        $row = theater::find($theaterId);
        return view('admin.theater.edit',compact('row'));
    }
    public function update(Request $request, $theaterId)
    {
    
        $t = theater::find($theaterId);
      
        $t->name =$request->get('name');
        $t->address = $request->get('address');
        $t->save();
        return redirect('/theater');
    }
    public function show($theaterId)
    {
        //
    }
    public function destroy($theaterId)  {
        $delete = theater::find($theaterId);
        $delete->delete();
        return redirect('/theater');
    }
}
