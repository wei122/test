@extends('layouts.app'))

{{--/**--}}
 {{--* Created by PhpStorm.--}}
 {{--* User: Administrator--}}
 {{--* Date: 2017/8/19--}}
 {{--* Time: 16:00--}}
 {{--*/--}}
<script>
    function myfunction() {

        {{ Auth::user()->count}}+1;
        commit();

   }
    
</script>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><font size="30px">Calender</font></div>

                    <form action="http://localhost:10001/test/public/" method="get">
                    <div class="panel-body">

                        {{--display searched course calendar--}}
                        {{-- Auth::user()->name --}}
                        {{--@if(Session::has('calendar'))--}}
                            {{--<h2>{{ Session::get('calendar')}}</h2>--}}
                        {{--@endif--}}
                    <?php
//                   print_r($calendar);	// 输出：Is your name O\'reilly?


                        ?>
                        @foreach($course as $courses)
                            <li> {{$courses->calendar}}</li>
                        @endforeach
                        </br></br>
                        <input type="submit" value="comfirm" onclick="myfunction()">


                    </div></form>

                </div>
            </div>
        </div>
    </div>
@endsection