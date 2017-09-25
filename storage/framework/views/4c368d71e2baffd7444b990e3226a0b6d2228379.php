<?php $__env->startSection('content'); ?>
    <div class="padding">
        <div class="box">
            <div class="box-header dker">
                <h3><i class="material-icons">&#xe03b;</i> <?php echo e(trans('backLang.newPermissions')); ?></h3>
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
                <?php echo e(Form::open(['route'=>['permissionsStore'],'method'=>'POST'])); ?>


                <div class="form-group row">
                    <label for="name"
                           class="col-sm-2 form-control-label"><?php echo trans('backLang.title'); ?>

                    </label>
                    <div class="col-sm-10">
                        <?php echo Form::text('name','', array('placeholder' => '','class' => 'form-control','id'=>'name','required'=>'')); ?>

                    </div>
                </div>


                <div class="form-group row">
                    <label for="permissions1"
                           class="col-sm-2 form-control-label"><?php echo trans('backLang.dataManagements'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label class="ui-check ui-check-md" style="margin-bottom: 5px;">
                                <?php echo Form::radio('view_status','1',true, array('id' => 'view_status1','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.dataManagements1')); ?>

                            </label>
                            <br>
                            <label class="ui-check ui-check-md" style="margin-bottom: 5px;">
                                <?php echo Form::radio('view_status','0',false, array('id' => 'view_status2','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.dataManagements2')); ?>

                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="analytics_status"
                           class="col-sm-2 form-control-label"><?php echo trans('backLang.activeApps'); ?>

                    </label>
                    <div class="col-sm-10">


                        <div class="checkbox">
                            <label class="ui-check">
                                <?php echo Form::checkbox('analytics_status','1',false, array('id' => 'analytics_status')); ?>

                                <i class="dark-white"></i><label
                                        for="analytics_status"><?php echo e(trans('backLang.visitorsAnalytics')); ?></label>
                            </label>
                        </div>


                        <div class="checkbox">
                            <label class="ui-check">
                                <?php echo Form::checkbox('newsletter_status','1',false, array('id' => 'newsletter_status')); ?>

                                <i class="dark-white"></i><label
                                        for="newsletter_status"><?php echo e(trans('backLang.newsletter')); ?></label>
                            </label>
                        </div>


                        <div class="checkbox">
                            <label class="ui-check">
                                <?php echo Form::checkbox('inbox_status','1',false, array('id' => 'inbox_status')); ?>

                                <i class="dark-white"></i><label
                                        for="inbox_status"><?php echo e(trans('backLang.siteInbox')); ?></label>
                            </label>
                        </div>

                        <div class="checkbox">
                            <label class="ui-check">
                                <?php echo Form::checkbox('calendar_status','1',false, array('id' => 'calendar_status')); ?>

                                <i class="dark-white"></i><label
                                        for="calendar_status"><?php echo e(trans('backLang.calendar')); ?></label>
                            </label>
                        </div>

                        <div class="checkbox">
                            <label class="ui-check">
                                <?php echo Form::checkbox('banners_status','1',false, array('id' => 'banners_status')); ?>

                                <i class="dark-white"></i><label
                                        for="banners_status"><?php echo e(trans('backLang.adsBanners')); ?></label>
                            </label>
                        </div>


                        <div class="checkbox">
                            <label class="ui-check">
                                <?php echo Form::checkbox('settings_status','1',false, array('id' => 'settings_status')); ?>

                                <i class="dark-white"></i><label
                                        for="settings_status"><?php echo e(trans('backLang.generalSettings')); ?></label>
                            </label>
                        </div>


                        <div class="checkbox">
                            <label class="ui-check">
                                <?php echo Form::checkbox('webmaster_status','1',false, array('id' => 'webmaster_status')); ?>

                                <i class="dark-white"></i><label
                                        for="webmaster_status"><?php echo e(trans('backLang.webmasterTools')); ?></label>
                            </label>
                        </div>

                    </div>
                </div>


                <div class="form-group row">
                    <label for="data_sections0"
                           class="col-sm-2 form-control-label"><?php echo trans('backLang.activeSiteSections'); ?>

                    </label>
                    <div class="col-sm-10">

                        <?php $i = 0; ?>
                        <?php $__currentLoopData = $GeneralWebmasterSections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $WebmasterSection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="checkbox">
                                <label class="ui-check">
                                    <?php echo Form::checkbox('data_sections[]',$WebmasterSection->id,false, array('id' => 'data_sections'.$i)); ?>

                                    <i class="dark-white"></i><label
                                            for="data_sections<?php echo e($i); ?>"><?php echo trans('backLang.'.$WebmasterSection->name); ?></label>
                                </label>
                            </div>
                                <?php $i++; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>


                <div class="form-group row">
                    <label for="add_status1"
                           class="col-sm-2 form-control-label"><?php echo trans('backLang.addPermission'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label class="ui-check ui-check-md" style="margin-bottom: 5px;">
                                <?php echo Form::radio('add_status','1',true, array('id' => 'add_status1','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.yes')); ?>

                            </label>
                            <br>
                            <label class="ui-check ui-check-md" style="margin-bottom: 5px;">
                                <?php echo Form::radio('add_status','0',false, array('id' => 'add_status2','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.no')); ?>

                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="edit_status1"
                           class="col-sm-2 form-control-label"><?php echo trans('backLang.editPermission'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label class="ui-check ui-check-md" style="margin-bottom: 5px;">
                                <?php echo Form::radio('edit_status','1',true, array('id' => 'edit_status1','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.yes')); ?>

                            </label>
                            <br>
                            <label class="ui-check ui-check-md" style="margin-bottom: 5px;">
                                <?php echo Form::radio('edit_status','0',false, array('id' => 'edit_status2','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.no')); ?>

                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="delete_status1"
                           class="col-sm-2 form-control-label"><?php echo trans('backLang.deletePermission'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label class="ui-check ui-check-md" style="margin-bottom: 5px;">
                                <?php echo Form::radio('delete_status','1',true, array('id' => 'delete_status1','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.yes')); ?>

                            </label>
                            <br>
                            <label class="ui-check ui-check-md" style="margin-bottom: 5px;">
                                <?php echo Form::radio('delete_status','0',false, array('id' => 'delete_status2','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.no')); ?>

                            </label>
                        </div>
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