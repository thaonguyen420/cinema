<?php
namespace App\Http\Controllers;
use App\Models\Phim;
use Illuminate\Http\Request;
class Controller_Phim extends Controller
{
    public function index()
    {
        $ds = Phim::All();
        return view('admin.phim.all', compact('ds'));
    }
    public function create()
    {
        return view('admin.phim.create');
    }
    public function store(Request $request)
    {
        $arr= explode("/",$request->get('release_date'));
        if (count($arr)==3) $n = $arr[2]."-". $arr[1]."-".$arr[0];
        else $n = date("Y-m-d");

        $file_name_col='';
        $file_name_row='';
        if($request->hasFile('col')){
                
                $file = $request->file('col');
                $ext = $file->getClientOriginalExtension();
                $col = uniqid().".".$ext;    
                // 1
                $file->move("upload/images",$col);
                $file_name_col = "upload/images/".$col;
            }
            if($request->hasFile('row')){
                
                $file = $request->file('row');
                $ext = $file->getClientOriginalExtension();
                $row = uniqid().".".$ext;    
                // 1
                $file->move("upload/images",$row);
                $file_name_row = "upload/images/".$row;
            }

        $mv_store = new Phim([
            'name' => $request->get('name'),
            'trailer' => $request->get('trailer'),
            'content' => $request->get('content'),
            'id_tl' => $request->get('id_tl'),
            'time' => $request->get('time'),
            'director' => $request->get('director'),
            'actor' => $request->get('actor'),
            'price' => $request->get('price'),
            'phimhot' => $request->get('phimhot'),
            'nation' => $request->get('nation'),
            'language' => $request->get('language'),
            'producer' => $request->get('producer'),
            'release_date' => $n,
            'row' =>$file_name_row,
        ]);
        $mv_store->save();
        return redirect('/phim')->with('success','Thể loại đã được lưu');
    }
    public function edit($movieId)
    {
        $row = Phim::find($movieId);
        return view('admin.phim.edit',compact('row'));
    }
    public function update(Request $request, $movieId)
    {
    
        $t = Phim::find($movieId);
        $t->name =$request->get('name');
        $t->trailer =$request->get('trailer');
        $t->content = $request->get('content');
        $t->id_tl = $request->get('id_tl');
        $t->time = $request->get('time');
        $t->director = $request->get('director');
        $t->actor = $request->get('actor');
        $t->price = $request->get('price');
        $t->phimhot = $request->get('phimhot');
        $t->nation = $request->get('nation');
        $t->language = $request->get('language');
        $t->producer = $request->get('producer');
        $t->release_date = $request->get('release_date');
        
        if($request->hasFile('row'))
        {
            $file = $request->file('row');
            $ext = $file->getClientOriginalExtension();
            $row = uniqid().".".$ext;    
            // 1
            $file->move("upload/images",$row);
            $t->row = "upload/images/".$row;
        }
        $t->save();
        return redirect('/phim');
    }
    public function show($movieId)
    {
        //
    }
    public function destroy($movieId)  {
        $delete = Phim::find($movieId);
        $delete->delete();
        return redirect('/phim');
    }
    // public function count(){
    //     $count_movies = Phim::where
    // }
}