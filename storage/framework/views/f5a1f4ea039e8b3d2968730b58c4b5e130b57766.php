<!DOCTYPE html>
<html  lang="<?php echo e(trans('backLang.code')); ?>" dir="<?php echo e(trans('backLang.direction')); ?>">
<head>
    <?php echo $__env->make('backEnd.includes.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('headerInclude'); ?>
</head>
<body>

<div class="app" id="app">

    <!-- ############ LAYOUT START-->

    <!-- aside -->
    <?php echo $__env->make('backEnd.includes.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- / aside -->

    <!-- content -->
    <div id="content" class="app-content box-shadow-z0" role="main">
        <?php echo $__env->make('backEnd.includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('backEnd.includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div ui-view class="app-body" id="view">

            <!-- ############ PAGE START-->
                <?php echo $__env->make('backEnd.includes.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo $__env->yieldContent('content'); ?>
            <!-- ############ PAGE END-->

        </div>
    </div>
    <!-- / -->

    <!-- theme switcher -->
    <?php echo $__env->make('backEnd.includes.settings', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- / -->

    <!-- ############ LAYOUT END-->

</div>


<?php echo $__env->make('backEnd.includes.foot', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldContent('footerInclude'); ?>

</body>
</html>
