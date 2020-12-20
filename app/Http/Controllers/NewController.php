<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
use App\Models\News;
use App\Models\CateNew;
use App\Models\comment;
class NewController extends Controller
{
    // public function AuthLogin(){
    //     $admin_id = Session::get('admin_id');
    //     if($admin_id){
    //         return Redirect::to('dashboard');
    //     }else{
    //         return Redirect::to('admin')->send();
    //     }
    // }
    public function add_new(){
        // $this->AuthLogin();
        $cate_new = CateNew::orderBy('cate_new_id','DESC')->get();

       

        return view('admin.news.add_new')->with(compact('cate_new'));
    	

    }
    public function all_new(){
        // $this->AuthLogin();
        $new = News::with('cate_new')->orderBy('new_id')->get();
        
    	return view('admin.news.list_new')->with(compact('new',$new));

    }

    public function save_new(Request $request){
        //  $this->AuthLogin();
        $data = $request->all();
        $new = new News();
        $new->new_title = $data['new_title'];
        $new->new_slug = $data['new_slug'];
        $new->new_desc = $data['new_desc'];
        $new->new_content = $data['new_content'];
        $new->new_meta_keywords = $data['new_meta_keywords'];
        $new->cate_new_id = $data['cate_new_id'];
        
        
        $get_image = $request->file('new_image');
      
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName(); // lấy tên của hình ảnh
            $name_image = current(explode('.',$get_name_image)); //
            $image =  $name_image.rand(0,999).'.'.$get_image->getClientOriginalExtension();

            $get_image->move('public/upload/news',$image);

            $new->new_image = $image;

            $new->save();
            Session::put('message','Thêm bài viết thành công');
            return redirect()->back();
        }else{
            Session::put('message','Bạn chưa thêm ảnh bài viết');
            return redirect()->back();
        }
        
    }

    public function delete_new($new_id){
        $new = News::find($new_id); // find: tìm ra 1 danh mục sản phẩm dựa trên id 
        $new_image = $new->new_image;

        
            $new->delete();

    	Session::put('message','Xoá bài viết thành công');
    	return redirect()->back();
    }

    public function edit_new($new_id){
        $cate_new = CateNew::orderBy('cate_new_id')->get();
        $new = News::find($new_id);
        return view('admin.news.edit_new')->with(compact('new','cate_new'));
    }

    public function update_new(Request $request, $new_id){
        $data = $request->all();
        $new = News::find($new_id);
        $new->new_title = $data['new_title'];
        $new->new_slug = $data['new_slug'];
        $new->new_desc = $data['new_desc'];
        $new->new_content = $data['new_content'];
        $new->new_meta_keywords = $data['new_meta_keywords'];
        $new->cate_new_id = $data['cate_new_id'];
        
        $get_image = $request->file('new_image');
      
        if($get_image){
            // xoá ảnh cũ
            $new_image_old = $new->new_image;
            $path = 'public/upload/news/'.$new_image_old;
            unlink($path);
            //cập nhật ảnh mới
            $get_name_image = $get_image->getClientOriginalName(); // lấy tên của hình ảnh
            $name_image = current(explode('.',$get_name_image)); //
            $image =  $name_image.rand(0,999).'.'.$get_image->getClientOriginalExtension();

            $get_image->move('public/upload/news',$image);

            $new->new_image = $image;
        }
        $new->save();
        Session::put('message','Cập nhật bài viết thành công');
        return redirect()->back();
    }

    // hiển thị tin tức
    public function news_single($new_id){
        $new = News::orderBy('new_id')->first();
        $new = News::find($new_id);
        return view("front_end.page.news-single")->with(compact('new'));
    }

    // public function comment(Request $request,$new_id){
    //     $data=array(
    //         'name' => $request -> name,
    //         'email' => $request -> email,
    //         'content' => $request -> content,
    //         'new_id'=>$new_id
    //     );
    //     comment::create($data);
    //     return redirect("front_end.page.news-single/$new_id");
    // }
}

