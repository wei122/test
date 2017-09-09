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
    <p><font size="50px">Successfully loged in</p>
</div>
<body>
{{--@if(Session::has('message'))--}}
{{--<small>{{Session::get('message')}}</small>--}}
{{--@endif--}}
</body>