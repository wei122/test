)


 
 
 
 
 
<script>
    function myfunction() {

        <?php echo e(Auth::user()->count); ?>+1;
        commit();

   }
    
</script>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><font size="30px">Calender</font></div>

                    <form action="http://localhost:10001/test/public/" method="get">
                    <div class="panel-body">

                        
                        
                        
                            
                        
                    <?php
//                   print_r($calendar);	// 输出：Is your name O\'reilly?


                        ?>
                        <?php $__currentLoopData = $course; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $courses): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li> <?php echo e($courses->calendar); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </br></br>
                        <input type="submit" value="comfirm" onclick="myfunction()">


                    </div></form>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>