<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Phim;
use App\Models\comment;
use App\Models\category_movie;

use Illuminate\Http\Request;

class Phim_FE extends Controller
{
    public function index(){
        return view("index");
    }
    public function chitietphim($movieId){
        $movies = Phim::where("movieId",$movieId)->first();
        $comment=comment::where("movieId",$movieId)->get();
        $data = ['movies'=>$movies,'comment'=>$comment];
        return view("front_end.page.single-movie", $data);
    }
    function comment(Request $request,$movieId){
        $data=array(
            'name' => $request -> name,
            'email' => $request -> email,
            'content' => $request -> content,
            'movieId'=>$movieId
        );
        comment::create($data);
        return redirect("single-movie/$movieId");
    }

    public function search(Request $request){
        $search = $request->get('search');
        $post = Phim::where("name","like","%".$search."%")->get();
        return view("front_end.page.search",['post'=>$post],['search'=>$search]);
    }
    
    public function filmKind()
    {
        $ten_tl= category_movie::All();
         return view("front_end.page.movie",['ten_tl'=>$ten_tl]);
    }
}
