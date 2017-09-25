<!DOCTYPE html>
<html lang="<?php echo e(trans('backLang.code')); ?>" dir="<?php echo e(trans('backLang.direction')); ?>">
<head>
    <?php echo $__env->make('backEnd.includes.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>
<div class="app" id="app">

    <!-- ############ LAYOUT START-->
    <div class="center-block w-xxl w-auto-xs p-y-md">
        <div class="navbar">
            <div class="pull-center">
                <div>
                    <a class="navbar-brand"><img src="<?php echo e(URL::to('backEnd/assets/images/logo.png')); ?>" alt="."> <span class="hidden-folded inline"><?php echo e(trans('backLang.control')); ?></span></a>
                </div>
            </div>
        </div>
        <div class="p-a-md box-color r box-shadow-z1 text-color m-a">
            <div class="m-b">
                <?php echo e(trans('backLang.forgotPassword')); ?>

                <p class="text-xs m-t"><?php echo e(trans('backLang.enterYourEmail')); ?></p>
            </div>
            <?php if(session('status')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>

            <form name="reset" method="POST" action="<?php echo e(url('/password/email')); ?>">
                <?php echo e(csrf_field()); ?>

                <div class="md-form-group <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                    <input type="email"  name="email" value="<?php echo e(old('email')); ?>" class="md-input" required>
                    <label><?php echo e(trans('backLang.yourEmail')); ?></label>
                </div>
                <?php if($errors->has('email')): ?>
                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                <?php endif; ?>
                <button type="submit" class="btn primary btn-block p-x-md"><?php echo e(trans('backLang.sendPasswordResetLink')); ?></button>
            </form>
        </div>
        <p id="alerts-container"></p>
        <div class="p-v-lg text-center"><?php echo e(trans('backLang.returnTo')); ?> <a href="<?php echo e(url('/login')); ?>" class="text-primary _600"><?php echo e(trans('backLang.signIn')); ?></a></div>
    </div>

    <!-- ############ LAYOUT END-->


</div>
<?php echo $__env->make('backEnd.includes.foot', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>