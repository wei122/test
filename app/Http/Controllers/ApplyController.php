<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
class ApplyController extends Controller
{
    public function getCalendar()
    {
        session_start();

        $name=$_SESSION['val'];
        //dd($name);
       // $name = $_COOKIE['name'];
        $course=DB::SELECT('select * from course where cname=?',[$name]);
        //$cal= implode("", array_keys($calendar));
       //print_r($calendar);
       //dd($calendar);
        return view('application')->with('course',$course);
}}
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/20
 * Time: 12:03
 */