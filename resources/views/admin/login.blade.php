<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
</head>

</html>

<style>
    body{
        background-color: transparent;
    }
    #header {
        background-color:black;
        color:white;
        text-align:center;
        padding:5px;
    }
    #nav {
        line-height: 30px;
        background-color: #eeeeee;
        height: 300px;
        width: 100px;
        float: left;
        padding: 5px;
    }
    #section {
        padding: 20px;
        margin-left: 200px;
        border: 6px;
        position: relative;
    }


    #footer {
        background-color:black;
        color:white;
        clear:both;
        text-align:center;
        padding:5px;
    }
</style>


<div id="header">
    <h1>Online Training for Programmer</h1>

    {{--<form action="web.php" method="get">--}}
    {{--<input type="text" name="name" id="text">--}}
    {{--<input type="submit" value="search">--}}
    {{--</form>--}}
</div>

<div id="section">
    <form action="{{action('UserController@postLogin')}}" method="get">
        username:<input type="text" name="username">
        password:<input type="password" name="password">
        <input type="submit" value="submit">
    </form>
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
<body>
{{--@if(Session::has('message'))--}}
{{--<small>{{Session::get('message')}}</small>--}}
{{--@endif--}}
</body>