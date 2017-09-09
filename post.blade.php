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
                    <div class="panel-heading"><font size="30px">Post Here</font></div>

                    <form action="http://localhost:10001/test/public/" method="get">
                        <div class="panel-body">




                        </div></form>

                </div>
            </div>
        </div>
    </div>
@endsection