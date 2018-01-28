<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Elections</div>

                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                </div>

                <div>
                    Total: <?php echo e(sizeof($elections)); ?>

                </div> 

                <h1>List of Elections</h1> 
                <div>
                    <?php $__currentLoopData = $elections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $election): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div>
                            <?php echo e($election['name']); ?>

                            <?php echo e(App\Election::getStateString($election['state'])); ?>

                       
                            <a href="votes/create/<?php echo e($election['id']); ?>">vote</a>
                            <?php if($election['user_id'] == $user_id): ?>                            
                                | <a href="/elections/<?php echo e($election['id']); ?>/edit">edit</a>
                            <?php else: ?>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
 

                <h1>Create New Election</h1>

                <form action="/elections" method="post">
                    <?php echo e(csrf_field()); ?>

                    <input type="text" name="name" value="BTW2017">
                    <input type="hidden" name="id" value="1">
                    <input type="hidden" name="state" value="0">
                    <input type="submit" value="Create New Election">
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>