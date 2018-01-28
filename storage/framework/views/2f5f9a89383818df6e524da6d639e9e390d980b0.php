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

                <h1>Election Name</h1> 

                <div>
                    <form action="/elections" method="post">
                        <?php echo e(csrf_field()); ?>

                        <input type="text" name="name" value="BTW2017">
                        <input type="hidden" name="id" value="1">
                        <input type="hidden" name="state" value="0">
                        <input type="submit" value="Save">
                    </form> 
                </div>

                <h1>Election Candidates</h1> 

                <div>
                    <a href="/elections/<?php echo e($election['id']); ?>/candidates/create">Create New Candidate</a>

                    <?php $__currentLoopData = $candidates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $candidate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div>
                            <?php echo e($candidate['name']); ?>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>