<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
class BannerController extends Controller
{
    public function manage_banner(){
        $all_banner = Banner::orderBy('banner_id','DESC')->get();
        return view('admin.banner.list_banner')->with(compact('all_banner'));
    }

    public function add_banner(){
        return view('admin.banner.add_banner');
    }

    public function save_banner(Request $request){
       //  $this->AuthLogin();
       $data = $request->all();
       
       $get_image = $request->file('banner_image');
     
       if($get_image){
           $get_name_image = $get_image->getClientOriginalName(); // lấy tên của hình ảnh
           $name_image = current(explode('.',$get_name_image)); //
           $image =  $name_image.rand(0,999).'.'.$get_image->getClientOriginalExtension();
           $get_image->move('public/upload/banner',$image);
           $banner = new Banner();
           $banner->banner_name = $data['banner_name'];
           $banner->banner_image = $image;
           $banner->banner_desc = $data['banner_desc'];

           $banner->save();
           Session::put('message','Thêm banner thành công');
           return redirect('add-banner');
       }else{
           Session::put('message','Bạn chưa thêm banner');
           return redirect('add-banner');
       }
   }
  
   public function delete_banner($banner_id){
    $banner = Banner::find($banner_id); // find: tìm ra 1 danh mục sản phẩm dựa trên id 
    $banner_image = $banner->new_image;
        $banner->delete();

    Session::put('message','Xoá bài viết thành công');
    return redirect()->back();
}

public function edit_banner($banner_id){
    $banner = Banner::find($banner_id);
    return view('admin.banner.edit_banner')->with(compact('banner'));
}

public function update_banner(Request $request, $banner_id){
    $data = $request->all();
    $banner = Banner::find($banner_id);
    $banner->banner_name = $data['banner_name'];
    $banner->banner_desc = $data['banner_desc'];
    
    $get_image = $request->file('new_image');
  
    if($get_image){
        // xoá ảnh cũ
        $banner_image_old = $banner->banner_image;
        $path = 'public/upload/banner/'.$banner_image_old;
        unlink($path);
        //cập nhật ảnh mới
        $get_banner_image = $get_image->getClientOriginalName(); // lấy tên của hình ảnh
        $name_image = current(explode('.',$get_banner_image)); //
        $image =  $name_image.rand(0,999).'.'.$get_image->getClientOriginalExtension();

        $get_image->move('public/upload/banner',$image);

        $banner->banner_image = $image;
    }
    $banner->save();
    Session::put('message','Cập nhật banner thành công');
    return redirect()->back();
}

}
