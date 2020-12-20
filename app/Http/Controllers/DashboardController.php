<?php

namespace App\Http\Controllers;
use App\Models\Phim;
use App\Models\User;
use App\Models\News;
use App\Models\theater;
use App\Models\comment;
use App\Models\room;
use App\Models\book_combo;
use App\Models\combo;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $countMovie = Phim::count('movieId');
        $countUser = User::count('id');
        $countNew = News::count('new_id');
        $countTheater = theater:: count('theaterId');
        $countComment = comment::count('id_comment');
        $countRoom =room::count('roomId');
        $countB_combo =book_combo::count('id');
        $countCombo =combo::count('id_combo');
        $data = ['countCombo'=>$countCombo,'countB_combo'=>$countB_combo,'countRoom'=>$countRoom,'countMovie'=>$countMovie,'countUser'=>$countUser,'countNew'=>$countNew,'countTheater'=>$countTheater,'countComment'=>$countComment];
        return view('admin.dashboard.all',$data);
    }
    
}
