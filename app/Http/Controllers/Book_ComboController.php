<?php

namespace App\Http\Controllers;
use App\Models\book_combo;

use Illuminate\Http\Request;

class Book_ComboController extends Controller
{
    public function index()
    {
        $ds = book_combo::All();
        return view('admin.book_combo.all', compact('ds'));
    }
    public function destroy($id)  {
        $delete = book_combo::find($id);
        $delete->delete();
        return redirect('/book_combo');
    }
}
