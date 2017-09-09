<!DOCTYPE html>
<html>
<head>
    <title>main</title>
    <style type="text/css">
        body{background: linear-gradient(black,white);
            /*background: -webkit-linear-gradient(left, red, orange, yellow, green, blue, indigo, violet); /* Safari 5.1 - 6.0 */
            /* background: -o-linear-gradient(left, red, orange, yellow, green, blue, indigo, violet);  Opera 11.1 - 12.0
             background: -moz-linear-gradient(left, red, orange, yellow, green, blue, indigo, violet);*/ /* Firefox 3.6 - 15 */
            /* 标准的语法（必须放在最后） */
        }
    </style>
</head>
<body>
<p style="text-align: center; margin-top: 50px "><img src="logo.png" height="50px" width="50px"><font size="50px" color="grey" style="font-style: italic;">Programming Training Land</font></p>
<hr width="800px">
<p style="text-align: center; ">

    <a href="<?php echo e(route('login')); ?>"><font color="grey">Login as learner</font></a><br>
    <a href="<?php echo e(route('admin/login')); ?>"><font color="grey">Login as administrator</font></a>

</p>
<table style="margin-top: 50px" id="hu">
    <tr><th>

<!--            <form action="" title="Login" method="Post" style="border-style: solid; ">-->
<!--                <p style="background-color: green; margin-top: 0;height: 35px;">Login</p>-->
<!--                <p><strong>username:</strong></p>-->
<!--                <input type="username" name="username" style="width: 100px">-->
<!--                <p><strong>password:</strong></p>-->
<!--                <input type="password" name="password" style="width: 100px"></br></br>-->
<!--                <button type="submit" name="submit" style="border-style:outset;">Login</button></br>-->
<!--                <a href="">Forget password?</a></br>-->
<!--                <a href="">Register now?</a>-->
<!--                </br> </form>-->
<!---->
<!---->
<!---->
<!--        </th>-->
        <th>
            <p style="margin-top: 0"><font size="10px" ><strong>Welcome</strong></font></br>
                Thank you for visiting this website for programming language</br>
                This website is about various language training of programming </br>
                Please enter your username and password first</br>
                You'll see some different views exclude home page
            </p>
        </th>
        <th>
            <img src="bb.png" style="width: 500px">
        </th></tr>
</table><p style="text-align: center">
    <font color="#808080" size="1">Powered by MAC,CS Faculty in University of Windsor</br>© Copyright
        2017 ProgrammingLearn Incorporated. All rights reserved.</font></p></br></br></body>
</html>
<?php
//$username=$_POST["username"];
//$password=$_POST["password"];
//$conn=mysql_connect("localhost","root","weixiao1993");
//$sql="SELECT password FROM user WHERE username='$username'";
//mysql_select_db('new');
//$mesg=mysql_query($sql,$conn);
//if(! $mesg)
//{
//    die('Could not get data: ' . mysql_error());
//}
//while($row = mysql_fetch_array($mesg, MYSQL_ASSOC))
//{
//    //echo "password : {$row['password']}";
//    if ($row['password'] == $password)
//    {
//        $url = "home.php";
//        $message = urlencode("Successfully Login!!");
//        header("location:home.php?url=$url&message=$message");
//    }
//mysql_close($conn);
?>
