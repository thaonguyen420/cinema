<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Slider;
// use CategoryProductModel;
use Session;
use App\Models\CateNew;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class CategoryNew extends Controller
{
    public function add_category_new(){
        // $this->AuthLogin();
    	return view('admin.news.add_category_new');
    }
    public function all_category_new(){
        // $this->AuthLogin();

        $category_new = CateNew::orderBy('cate_new_id','DESC')->paginate(5);
        
    	return view('admin.news.list_category_new')->with(compact('category_new'));


    }

    public function save_category_new(Request $request){
        // $this->AuthLogin();
    	$data = $request->all();
        $category_new = new CateNew();
        $category_new->cate_new_name = $data['cate_new_name'];
        $category_new->cate_new_slug = $data['cate_new_slug'];
        $category_new->save();
        
    	Session::put('message','Thêm danh mục bài viết thành công');
    	return redirect()->back();
    }

    public function edit_category_new($category_id){
        // $this->AuthLogin();
        $category_new = CateNew::find($category_id); // find: tìm ra 1 danh mục sản phẩm dựa trên id 
        return view('admin.news.edit_category_new')->with(compact('category_new'));
    }

    public function update_category_new(Request $request, $category_id){
        $data = $request->all();
        $category_new = CateNew::find($category_id); // find: tìm ra 1 danh mục sản phẩm dựa trên id 
        $category_new->cate_new_name = $data['cate_new_name'];
        $category_new->cate_new_slug = $data['cate_new_slug'];
        $category_new->save();
        
    	Session::put('message','Cập nhật danh mục bài viết thành công');
    	return redirect('/all-category-new');
    }
    
    public function delete_category_new($category_id){
        $category_new = CateNew::find($category_id); // find: tìm ra 1 danh mục sản phẩm dựa trên id 
        $category_new->delete();
        
    	Session::put('message','Xoá danh mục bài viết thành công');
    	return redirect()->back();
    }
  
}
