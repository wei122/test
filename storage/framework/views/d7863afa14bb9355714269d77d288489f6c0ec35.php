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

    
    
    
    
</div>

<div id="section">
    <form action="<?php echo e(action('UserController@postLogin')); ?>" method="get">
        username:<input type="text" name="username">
        password:<input type="password" name="password">
        <input type="submit" value="submit">
    </form>
    <?php if(count($errors) > 0): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
</div>
<body>



</body>