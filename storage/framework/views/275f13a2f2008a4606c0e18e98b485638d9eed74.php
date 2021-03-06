<?php $__env->startSection('content'); ?>
    <div class="padding">
        <div class="box">
            <div class="box-header dker">
                <h3><i class="material-icons">&#xe02e;</i> <?php echo e(trans('backLang.sectionNew')); ?></h3>
                <small>
                    <a href="<?php echo e(route('adminHome')); ?>"><?php echo e(trans('backLang.home')); ?></a> /
                    <?php echo e(trans('backLang.webmasterTools')); ?> /
                    <a href=""><?php echo e(trans('backLang.siteSectionsSettings')); ?></a>
                </small>
            </div>
            <div class="box-tool">
                <ul class="nav">
                    <li class="nav-item inline">
                        <a class="nav-link" href="<?php echo e(route("WebmasterSections")); ?>">
                            <i class="material-icons md-18">×</i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="box-body">
                <?php echo e(Form::open(['route'=>['WebmasterSectionsStore'],'method'=>'POST'])); ?>


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
                                <?php echo e(trans('backLang.typeTextPages')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('type','1',false, array('id' => 'site_status2','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.typePhotos')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('type','2',false, array('id' => 'site_status3','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.typeVideos')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('type','3',false, array('id' => 'site_status4','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.typeSounds')); ?>

                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="sections_status1"
                           class="col-sm-2 form-control-label"><?php echo trans('backLang.hasCategories'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('sections_status','0',true, array('id' => 'sections_status1','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.withoutCategories')); ?>

                            </label>
                            <br>
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('sections_status','1',false, array('id' => 'sections_status2','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.mainCategoriesOnly')); ?>

                            </label>
                            <br>
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('sections_status','2',false, array('id' => 'sections_status3','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.mainAndSubCategories')); ?>

                            </label>
                        </div>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="comments_status1"
                           class="col-sm-2 form-control-label"><?php echo trans('backLang.reviewsAvailable'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('comments_status','1',true, array('id' => 'comments_status1','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.yes')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('comments_status','0',false, array('id' => 'comments_status2','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.no')); ?>

                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="date_status1"
                           class="col-sm-2 form-control-label"><?php echo trans('backLang.dateField'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('date_status','1',true, array('id' => 'date_status1','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.yes')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('date_status','0',false, array('id' => 'date_status2','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.no')); ?>

                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="expire_date_status1"
                           class="col-sm-2 form-control-label"><?php echo trans('backLang.expireDateField'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('expire_date_status','1',true, array('id' => 'expire_date_status1','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.yes')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('expire_date_status','0',false, array('id' => 'expire_date_status2','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.no')); ?>

                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="longtext_status1"
                           class="col-sm-2 form-control-label"><?php echo trans('backLang.longTextField'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('longtext_status','1',true, array('id' => 'longtext_status1','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.yes')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('longtext_status','0',false, array('id' => 'longtext_status2','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.no')); ?>

                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="editor_status1"
                           class="col-sm-2 form-control-label"><?php echo trans('backLang.allowEditor'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('editor_status','1',true, array('id' => 'editor_status1','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.yes')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('editor_status','0',false, array('id' => 'editor_status2','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.no')); ?>

                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="attach_file_status1"
                           class="col-sm-2 form-control-label"><?php echo trans('backLang.attachFileField'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('attach_file_status','1',true, array('id' => 'attach_file_status1','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.yes')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('attach_file_status','0',false, array('id' => 'attach_file_status2','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.no')); ?>

                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="section_icon_status1"
                           class="col-sm-2 form-control-label"><?php echo trans('backLang.sectionIconPicker'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('section_icon_status','1',true, array('id' => 'section_icon_status1','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.yes')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('section_icon_status','0',false, array('id' => 'section_icon_status2','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.no')); ?>

                            </label>
                        </div>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="icon_status1"
                           class="col-sm-2 form-control-label"><?php echo trans('backLang.topicsIconPicker'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('icon_status','1',true, array('id' => 'icon_status1','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.yes')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('icon_status','0',false, array('id' => 'icon_status2','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.no')); ?>

                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="multi_images_status1"
                           class="col-sm-2 form-control-label"><?php echo trans('backLang.additionalImages'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('multi_images_status','1',true, array('id' => 'multi_images_status1','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.yes')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('multi_images_status','0',false, array('id' => 'multi_images_status2','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.no')); ?>

                            </label>
                        </div>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="extra_attach_file_status1"
                           class="col-sm-2 form-control-label"><?php echo trans('backLang.additionalFiles'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('extra_attach_file_status','1',true, array('id' => 'extra_attach_file_status1','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.yes')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('extra_attach_file_status','0',false, array('id' => 'extra_attach_file_status2','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.no')); ?>

                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="maps_status1"
                           class="col-sm-2 form-control-label"><?php echo trans('backLang.attachGoogleMaps'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('maps_status','1',true, array('id' => 'maps_status1','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.yes')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('maps_status','0',false, array('id' => 'maps_status2','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.no')); ?>

                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="maps_status1"
                           class="col-sm-2 form-control-label"><?php echo trans('backLang.attachOrderForm'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('order_status','1', true, array('id' => 'maps_status1','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.yes')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('order_status','0',false, array('id' => 'maps_status2','class'=>'has-value')); ?>

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
                        <a href="<?php echo e(route("WebmasterSections")); ?>"
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