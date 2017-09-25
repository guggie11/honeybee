<?php $__env->startSection('content'); ?>
    <div class="padding">
        <div class="box">
            <div class="box-header dker">
                <h3><i class="material-icons">&#xe02e;</i> <?php echo e(trans('backLang.newLink')); ?></h3>
                <small>
                    <a href="<?php echo e(route('adminHome')); ?>"><?php echo e(trans('backLang.home')); ?></a> /
                    <a href=""><?php echo e(trans('backLang.settings')); ?></a> /
                    <a href=""><?php echo e(trans('backLang.siteMenus')); ?></a>
                </small>
            </div>
            <div class="box-tool">
                <ul class="nav">
                    <li class="nav-item inline">
                        <a class="nav-link" href="<?php echo e(route("menus",["ParentMenuId"=>$ParentMenuId])); ?>">
                            <i class="material-icons md-18">×</i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="box-body">
                <?php echo e(Form::open(['route'=>['menusStore',$ParentMenuId],'method'=>'POST', 'files' => true ])); ?>

                <?php echo Form::hidden('ParentMenuId',$ParentMenuId); ?>


                <div class="form-group row">
                    <label for="father_id"
                           class="col-sm-2 form-control-label"><?php echo trans('backLang.fatherSection'); ?> </label>
                    <div class="col-sm-10">
                        <select name="father_id" id="father_id" class="form-control c-select">
                            <option value="<?php echo e($ParentMenuId); ?>">- - <?php echo trans('backLang.sectionNoFather'); ?> - -
                            </option>
                            <?php
                            $title_var = "title_" . trans('backLang.boxCode');
                            $title_var2 = "title_" . trans('backLang.boxCodeOther');
                            ?>
                            <?php $__currentLoopData = $FatherMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $FatherMenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                if ($FatherMenu->$title_var != "") {
                                    $title = $FatherMenu->$title_var;
                                } else {
                                    $title = $FatherMenu->$title_var2;
                                }
                                ?>
                                <option value="<?php echo e($FatherMenu->id); ?>"><?php echo e($title); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                </div>

                <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                    <div class="form-group row">
                        <label for="title_ar"
                               class="col-sm-2 form-control-label"><?php echo trans('backLang.sectionTitle'); ?>

                            <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.arabicBox'); ?><?php endif; ?>
                        </label>
                        <div class="col-sm-10">
                            <?php echo Form::text('title_ar','', array('placeholder' => '','class' => 'form-control','id'=>'title_ar','required'=>'', 'dir'=>trans('backLang.rtl'))); ?>

                        </div>
                    </div>
                <?php endif; ?>
                <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
                    <div class="form-group row">
                        <label for="title_en"
                               class="col-sm-2 form-control-label"><?php echo trans('backLang.sectionTitle'); ?>

                            <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.englishBox'); ?><?php endif; ?>
                        </label>
                        <div class="col-sm-10">
                            <?php echo Form::text('title_en','', array('placeholder' => '','class' => 'form-control','id'=>'title_en','required'=>'', 'dir'=>trans('backLang.ltr'))); ?>

                        </div>
                    </div>
                <?php endif; ?>


                <div class="form-group row">
                    <label for="link_status"
                           class="col-sm-2 form-control-label"><?php echo trans('backLang.linkType'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('type','0',true, array('id' => 'status1','class'=>'has-value','onclick'=>'document.getElementById("link_div").style.display="none";document.getElementById("cat_div").style.display="none"')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.linkType1')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('type','1',false, array('id' => 'status2','class'=>'has-value','onclick'=>'document.getElementById("link_div").style.display="block";document.getElementById("cat_div").style.display="none"')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.linkType2')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('type','2',false, array('id' => 'status2','class'=>'has-value','onclick'=>'document.getElementById("link_div").style.display="none";document.getElementById("cat_div").style.display="block"')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.linkType3')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('type','3',false, array('id' => 'status2','class'=>'has-value','onclick'=>'document.getElementById("link_div").style.display="none";document.getElementById("cat_div").style.display="block"')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.linkType4')); ?>

                            </label>
                        </div>
                    </div>
                </div>
                <div id="link_div" class="form-group row" style="display: none">
                    <label for="link"
                           class="col-sm-2 form-control-label"><?php echo trans('backLang.linkURL'); ?>

                    </label>
                    <div class="col-sm-10">
                        <?php echo Form::text('link','', array('placeholder' => '','class' => 'form-control','id'=>'title_ar', 'dir'=>trans('backLang.ltr'))); ?>

                    </div>
                </div>
                <div id="cat_div" class="form-group row"  style="display: none">
                    <label for="link"
                           class="col-sm-2 form-control-label"><?php echo trans('backLang.linkSection'); ?>

                    </label>
                    <div class="col-sm-10">
                        <select name="cat_id" id="cat_id" class="form-control c-select">
                            <option value="<?php echo e($ParentMenuId); ?>">- - <?php echo trans('backLang.linkSection'); ?> - -
                            </option>

                            <?php $__currentLoopData = $GeneralWebmasterSections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $WSection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($WSection->id); ?>"><?php echo trans('backLang.'.$WSection->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>


                <div class="form-group row m-t-md">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary m-t"><i class="material-icons">
                                &#xe31b;</i> <?php echo trans('backLang.add'); ?></button>
                        <a href="<?php echo e(route("menus",["ParentMenuId"=>$ParentMenuId])); ?>"
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