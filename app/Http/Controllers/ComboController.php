<?php

namespace App\Http\Controllers;
use App\Models\combo;

use Illuminate\Http\Request;

class ComboController extends Controller
{
    public function index()
    {
        $ds = combo::All();
        return view('admin.combo.all', compact('ds'));
    }
    public function destroy($id_combo)  {
        $delete = combo::find($id_combo);
        $delete->delete();
        return redirect('/combo');
    }
}
