<!doctype html>
<html>
<head>
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
    <meta charset="UTF-8">
</head>
<body>
<div id="header">
    <h1>Online Training for Programmer</h1>

    <form action="web.php" method="get">
        <input type="text" name="name" id="text">
        <input type="submit" value="search">
    </form>

</div>
<div id="nav">
    PHP<br><br>
    Java<br><br>
    Python<br><br>
    C<br><br>
    C++<br><br>
</div>
<div id="section">

<ul>
        <?php $__currentLoopData = $course; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $courses): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li> course number:<?php echo e($courses->cno); ?></li>

            <li>course name:<?php echo e($courses->cname); ?></li>
 <?php       session_start();
        //会话开始，这样你才可以调用session
        $_SESSION['val'] = $courses->cname;?>
            <li>teacher name:<?php echo e($courses->tname); ?></li>
            <li>course detail:<?php echo e($courses->detail); ?></li>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</br></br>
                <form action="ApplyController/getCalendar?name=<?php echo e($courses->cname); ?>" method="get">
                    <button type="Submit" >Apply</button>
                </form>


    </ul>

</div>

<div id="footer">
</div>
</body></html>
