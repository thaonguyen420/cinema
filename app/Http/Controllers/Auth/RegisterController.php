<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Carbon\Carbon;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        
        $rules =[
            'name' => ['required', 'string', 'min:3'],
            'email' => 'Email|ends_with:@gmail.com',
            'password' => ['required','min:4','max:6'],
            'born' =>['required','date'],
            'state' => 'exists:states'

            
    ];
    $messages = [
        'name.required'=> 'Chưa nhập họ tên bạn ơi',
        'name.min' => 'Họ tên ngắn quá',
        'email.email' =>' Nhập email đi bạn',
        'email.unique' =>' Đã có người dùng email này',
        'email.ends_with' => ':attribute là phải @gmail.com',
        'password.required'=>'Nhập mật khẩu đi ',
        'password.min' => 'Từ 4 đến 6 ký tự ',
        'password.max' => 'Từ 4 đến 6 ký tự ',
        'password_confirmationd.required'=>'Bạn quên nhập lại mật khẩu',
        'born.required'=> 'Nhấn chọn ngày sinh',
        'email.state' => "Đã tồn tại tài khoản"
    ];     
    $vd = Validator::make($data, $rules,$messages);
    return $vd;
    }
   
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
      
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'born' =>  Carbon::parse($data['born']),
        ]);
    }
}
