<?php
namespace App\Http\Controllers;
use App\Models\room;
use Illuminate\Http\Request;
class roomController extends Controller
{
    public function index()
    {
        $ds = room::All();
        return view('admin.room.all', compact('ds'));
    }
    public function create()
    {
        return view('admin.room.create');
    }
    public function store(Request $request)
    {
        $mv_store = new room([
            'number' => $request->get('number'),
            'status' => $request->get('status'),
            'theaterId' => $request->get('theaterId'),
           
        ]);
        $mv_store->save();
        return redirect('/room')->with('success','Thể loại đã được lưu');
    }
    public function edit($roomId)
    {
        $row = room::find($roomId);
        return view('admin.room.edit',compact('row'));
    }
    public function update(Request $request, $roomId)
    {
    
        $t = room::find($roomId);
        $t->number =$request->get('number');
        $t->status = $request->get('status');
        $t->theaterId = $request->get('theaterId');
        
        $t->save();
        return redirect('/room');
    }
    public function show($roomId)
    {
        //
    }
    public function destroy($roomId)  {
        $delete = room::find($roomId);
        $delete->delete();
        return redirect('/room');
    }
    // public function count(){
    //     $count_movies = Phim::where
    // }
}