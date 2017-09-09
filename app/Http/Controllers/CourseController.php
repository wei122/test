<?php
namespace App\Http\Controllers;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/22
 * Time: 10:33
 */
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Request;
use View;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
class CourseController extends Controller
{
    public function test1()
    {

        $input = Request::get('name');
        $course = DB::SELECT('select * from course where cname=? ',[$input]);
        return View::make('info')->with('course',$course);

    }
    public function test2()
    {

        $input = Request::get('name');
        $course = DB::SELECT('select * from course where cname=? ',[$input]);
        return View::make('info')->with('course',$course);

    }
}