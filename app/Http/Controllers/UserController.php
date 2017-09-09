<?php
namespace App\Http\Controllers;

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
//use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use function MongoDB\BSON\fromJSON;
use View;
use Auth;
use Validator;



class UserController extends Controller
{
    //登录页面
    public function getLogin()
    {
        return view::make('admin/login');
//        $info = Request::get('username','password');
//        $dd = DB::SELECT('select * from admin where username=? ',[$info]);
//        var_dump($course);
        //dd($course);
//        return View::make('admin.login')->with('info',$dd);

        // return view('admin/login');
    }
    //登录操作

    /**
     *
     */
    public function postLogin(Request $request)
    {

        //$name = Request::get('username');
        //$pass=Request::get('password');

        //dd($d);
        //$data1==$d->username && $data2==$d->password
        // $tmp = $request->get('username');
        //$pw=$request->get('pas sword');

        //表单的验证
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);
        //return view('admin.login');

        //管理员的查询
        $data1 = Input::get('username');
        $data2 = Input::get('password');

        //  $d=DB::SELECT('select username from admin where username=? ',[$data1]);
        //$d1=DB::SELECT('select password from admin where password=?',[$data2]);
        $d = DB::SELECT('select password from admin where username=?', [$data1]);
        //      $dd=DB::SELECT('select password from admin where password=? ',[$data2]);
        return view('admin.post');
    }
}

       // print_r($data1);
        //$dd  =json_encode($dd);
//        print_r($d);
//        print_r($dd);
//        if( $data1==$d&&$data2==$dd){
//            return view('admin.post');
//        }els
