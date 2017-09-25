<?php $__env->startSection('content'); ?>
    <div class="padding">
        <div class="box">
            <div class="box-header dker">
                <h3><i class="material-icons">&#xe02e;</i> <?php echo e(trans('backLang.newUser')); ?></h3>
                <small>
                    <a href="<?php echo e(route('adminHome')); ?>"><?php echo e(trans('backLang.home')); ?></a> /
                    <a href=""><?php echo e(trans('backLang.settings')); ?></a> /
                    <a href=""><?php echo e(trans('backLang.usersPermissions')); ?></a>
                </small>
            </div>
            <div class="box-tool">
                <ul class="nav">
                    <li class="nav-item inline">
                        <a class="nav-link" href="<?php echo e(route("users")); ?>">
                            <i class="material-icons md-18">×</i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="box-body">
                <?php echo e(Form::open(['route'=>['usersStore'],'method'=>'POST', 'files' => true ])); ?>


                <div class="form-group row">
                    <label for="name"
                           class="col-sm-2 form-control-label"><?php echo trans('backLang.fullName'); ?>

                    </label>
                    <div class="col-sm-10">
                        <?php echo Form::text('name','', array('placeholder' => '','class' => 'form-control','id'=>'name','required'=>'')); ?>

                    </div>
                </div>

                <div class="form-group row">
                    <label for="email"
                           class="col-sm-2 form-control-label"><?php echo trans('backLang.loginEmail'); ?>

                    </label>
                    <div class="col-sm-10">
                        <?php echo Form::email('email','', array('placeholder' => '','class' => 'form-control','id'=>'email','required'=>'')); ?>

                    </div>
                </div>

                <div class="form-group row">
                    <label for="password"
                           class="col-sm-2 form-control-label"><?php echo trans('backLang.loginPassword'); ?>

                    </label>
                    <div class="col-sm-10">
                        <?php echo Form::text('password','', array('placeholder' => '','class' => 'form-control','id'=>'password','required'=>'')); ?>

                    </div>
                </div>

                <div class="form-group row">
                    <label for="photo"
                           class="col-sm-2 form-control-label"><?php echo trans('backLang.personalPhoto'); ?></label>
                    <div class="col-sm-10">
                        <?php echo Form::file('photo', array('class' => 'form-control','id'=>'photo','accept'=>'image/*')); ?>

                        <small>
                            <i class="material-icons">&#xe8fd;</i>
                            <?php echo trans('backLang.imagesTypes'); ?>

                        </small>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="permissions1"
                           class="col-sm-2 form-control-label"><?php echo trans('backLang.Permission'); ?></label>
                    <div class="col-sm-10">
                        <select name="permissions_id" id="permissions_id" required class="form-control c-select">
                            <option value="">- - <?php echo trans('backLang.selectPermissionsType'); ?> - -</option>
                            <?php $__currentLoopData = $Permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($Permission->id); ?>"><?php echo e($Permission->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>

                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-12">
                        <strong><?php echo e(trans('backLang.connectEmailToConnect')); ?></strong>
                        <hr>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="connect_email"
                           class="col-sm-2 form-control-label"><?php echo trans('backLang.connectEmail'); ?>

                    </label>
                    <div class="col-sm-10">
                        <?php echo Form::email('connect_email','', array('placeholder' => '','class' => 'form-control','id'=>'connect_email')); ?>

                    </div>
                </div>
                <div class="form-group row">
                    <label for="connect_password"
                           class="col-sm-2 form-control-label"><?php echo trans('backLang.connectPassword'); ?>

                    </label>
                    <div class="col-sm-10">
                        <?php echo Form::text('connect_password','', array('placeholder' => '','class' => 'form-control','id'=>'connect_password')); ?>

                    </div>
                </div>

                <div class="form-group row m-t-md">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary m-t"><i class="material-icons">
                                &#xe31b;</i> <?php echo trans('backLang.add'); ?></button>
                        <a href="<?php echo e(route("users")); ?>"
                           class="btn btn-default m-t"><i class="material-icons">
                                &#xe5cd;</i> <?php echo trans('backLang.cancel'); ?></a>
                    </div>
                </div>

                <?php echo e(Form::close()); ?>

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backEnd.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>