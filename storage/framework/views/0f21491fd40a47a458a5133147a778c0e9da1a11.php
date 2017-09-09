<?php $__env->startSection('content'); ?>
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
            -webkit-box-shadow: 2px 2px 5px rgba(0,0,0,0.3);
            -moz-box-shadow: 2px 2px 5px rgba(0,0,0,0.3);
            box-shadow: 2px 2px 5px rgba(0,0,0,0.3);
        }


        #footer {
            background-color:black;
            color:white;
            clear:both;
            text-align:center;
            padding:5px;
        }
    </style>


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
        <img src="2.jpeg" width="800px", height="400px" style="margin-left: 60px;">
    </div>

    <div id="footer">
    </div>
    </body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>