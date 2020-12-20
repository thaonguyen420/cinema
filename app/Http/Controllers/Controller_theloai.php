<?php

namespace App\Http\Controllers;
use App\Models\theloai;

use Illuminate\Http\Request;

class Controller_theloai extends Controller
{
    public function index()
    {
        $ds = theloai::All();
        return view('admin.theloai.all', compact('ds'));
    }
    public function create()
    {
        return view('admin.theloai.create');
    }
    public function store(Request $request)
    {
        $mv_store = new theloai([
            'ten_tl' => $request->get('ten_tl')       
        ]);
        $mv_store->save();
        return redirect('/theloai')->with('success','Thể loại đã được lưu');
    }
    public function edit($id_tl)
    {
        $row = theloai::find($id_tl);
        return view('admin.theloai.edit',compact('row'));
    }
    public function update(Request $request, $id_tl)
    {
    
        $t = theloai::find($id_tl);
        $t->ten_tl =$request->get('ten_tl');
      
        $t->save();
        return redirect('/theloai');
    }
    public function show($id_tl)
    {
        //
    }
    public function destroy($id_tl)  {
        $delete = theloai::find($id_tl);
        $delete->delete();
        return redirect('/theloai');
    }
}
