<?php

namespace App\Http\Controllers;
use App\Models\comment;
use Illuminate\Http\Request;
class CommentController extends Controller
{
    public function index()
    {
        $ds = comment::All();
        return view('admin.comment.all', compact('ds'));
    }
    public function destroy($id_comment)  {
        $delete = comment::find($id_comment);
        $delete->delete();
        return redirect('/comment');
    }
}
