<?php $__env->startSection('content'); ?>
    <div class="padding">
        <div class="box">
            <div class="box-header dker">
                <h3><i class="material-icons">&#xe02e;</i> <?php echo e(trans('backLang.sectionNew')); ?></h3>
                <small>
                    <a href="<?php echo e(route('adminHome')); ?>"><?php echo e(trans('backLang.home')); ?></a> /
                    <?php echo e(trans('backLang.webmasterTools')); ?> /
                    <a href=""><?php echo e(trans('backLang.adsBannersSettings')); ?></a>
                </small>
            </div>
            <div class="box-tool">
                <ul class="nav">
                    <li class="nav-item inline">
                        <a class="nav-link" href="<?php echo e(route("WebmasterBanners")); ?>">
                            <i class="material-icons md-18">×</i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="box-body">
                <?php echo e(Form::open(['route'=>['WebmasterBannersStore'],'method'=>'POST'])); ?>


                <div class="form-group row">
                    <label for="name"
                           class="col-sm-2 form-control-label"><?php echo trans('backLang.sectionName'); ?></label>
                    <div class="col-sm-10">
                        <?php echo Form::text('name','', array('placeholder' => trans('backLang.langVar'),'class' => 'form-control','id'=>'name','required'=>'')); ?>

                    </div>
                </div>
                <div class="form-group row">
                    <label for="type"
                           class="col-sm-2 form-control-label"><?php echo trans('backLang.sectionType'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('type','0',true, array('id' => 'site_status1','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.sectionTypeCode')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('type','1',false, array('id' => 'site_status2','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.sectionTypePhoto')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('type','2',false, array('id' => 'site_status3','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.sectionTypeVideo')); ?>

                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="width"
                           class="col-sm-2 form-control-label"><?php echo trans('backLang.size'); ?></label>
                    <div class="col-sm-2">
                        <?php echo Form::number('width','', array('placeholder' => trans('backLang.width'),'class' => 'form-control','id'=>'width','required'=>'','min'=>'0')); ?>

                    </div>
                    <div class="col-sm-1 text-center" style="width: 30px !important;padding-top: 10px;">
                        X
                    </div>
                    <div class="col-sm-2">
                        <?php echo Form::number('height','', array('placeholder' => trans('backLang.height'),'class' => 'form-control','id'=>'height','required'=>'','min'=>'0')); ?>

                    </div>
                    <div class="col-sm-1 text-center" style="width: 30px !important;padding-top: 10px;">
                        PX
                    </div>
                </div>
                <div class="form-group row">
                    <label for="desc_status"
                           class="col-sm-2 form-control-label"><?php echo trans('backLang.descriptionBox'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('desc_status','1',true, array('id' => 'desc_status1','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.yes')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('desc_status','0',false, array('id' => 'desc_status2','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.no')); ?>

                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="link_status"
                           class="col-sm-2 form-control-label"><?php echo trans('backLang.linkBox'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('link_status','1',true, array('id' => 'link_status1','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.yes')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('link_status','0',false, array('id' => 'link_status2','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.no')); ?>

                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="icon_status1"
                           class="col-sm-2 form-control-label"><?php echo trans('backLang.iconPicker'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('icon_status','1',false, array('id' => 'icon_status1','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.yes')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('icon_status','0',true, array('id' => 'icon_status2','class'=>'has-value')); ?>

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
                        <a href="<?php echo e(route("WebmasterBanners")); ?>"
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