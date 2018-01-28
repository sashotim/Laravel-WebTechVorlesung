<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Candidate</div>

                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                </div>

                <div>
                    <form action="/candidates" method="post">
                        <?php echo e(csrf_field()); ?>

                        <input type="text" name="name" placeholder="Name">
                        <input type="hidden" name="candidate_id" value="<?php echo e($candidate_id); ?>">
                        <input type="hidden" name="election_id" value="<?php echo e($candidate->election_id); ?>"> 
                        <input type="submit" value="Save">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>