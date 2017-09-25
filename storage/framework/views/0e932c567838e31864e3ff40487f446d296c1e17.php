<!DOCTYPE html>
<html  lang="<?php echo e(trans('backLang.code')); ?>" dir="<?php echo e(trans('backLang.direction')); ?>">
<head>
    <?php echo $__env->make('backEnd.includes.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>

<div class="app" id="app">

    <!-- ############ LAYOUT START-->

    <!-- content -->
    <div class="app-body indigo bg-auto w-full">
        <div class="text-center pos-rlt p-y-md">
            <h1 class="text-shadow text-white text-4x">
                <span class="text-2x font-bold block m-t-lg">404</span>
            </h1>
            <p class="h5 m-y-lg text-u-c font-bold"><?php echo e(trans('backLang.notFound')); ?>.</p>
            <a href="<?php echo e(URL::previous()); ?>" class="md-btn amber-700 md-raised p-x-md">
                <span class="text-white"><?php echo e(trans('backLang.returnTo')); ?> <i class="material-icons">&#xe5c4;</i></span>
            </a>
        </div>
    </div>
    <!-- / -->


    <!-- ############ LAYOUT END-->

</div>


<?php echo $__env->make('backEnd.includes.foot', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldContent('footerInclude'); ?>
</body>
</html>
