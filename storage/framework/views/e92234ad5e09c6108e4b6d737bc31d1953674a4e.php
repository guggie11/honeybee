<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <br><br>
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome</div>

                    <div class="panel-body">
                        <p>
                            This is Your Application's Landing Page.
                        </p>
                        <a href="<?php echo e(url('/admin')); ?>" class="btn btn-primary">
                            Click here to login to SMARTEND
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontEnd.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>