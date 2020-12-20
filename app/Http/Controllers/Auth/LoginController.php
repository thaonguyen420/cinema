<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    protected function validator(array $data)
    {
        
        $rules =[
           
            'email' => 'Email|ends_with:@gmail.com',
            'password' => ['required','min:4','max:6'],
          

            
    ];
    $messages = [
        
        'email.email' =>' Nhập email đi bạn',
        'email.unique' =>' Đã có người dùng email này',
        'email.ends_with' => ':attribute là phải @gmail.com',
        'password.required'=>'Nhập mật khẩu đi ',
        'password.min' => 'Từ 4 đến 6 ký tự ',
        'password.max' => 'Từ 4 đến 6 ký tự ',
       
    ];     
    $vd = Validator::make($data, $rules,$messages);
    return $vd;
    }
}
