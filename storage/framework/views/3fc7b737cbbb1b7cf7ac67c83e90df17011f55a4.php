<?php $__env->startSection('headerInclude'); ?>
    <link href="<?php echo e(URL::to("backEnd/libs/js/iconpicker/fontawesome-iconpicker.min.css")); ?>" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="padding">
        <div class="box m-b-0">
            <div class="box-header dker">
                <h3><i class="material-icons">&#xe3c9;</i> <?php echo e(trans('backLang.sectionEdit')); ?></h3>
                <small>
                    <a href="<?php echo e(route('adminHome')); ?>"><?php echo e(trans('backLang.home')); ?></a> /
                    <a><?php echo trans('backLang.'.$WebmasterSection->name); ?></a> /
                    <a><?php echo e(trans('backLang.sectionsOf')); ?>  <?php echo trans('backLang.'.$WebmasterSection->name); ?></a>
                </small>
            </div>
            <div class="box-tool">
                <ul class="nav">
                    <li class="nav-item inline">
                        <a class="nav-link" href="<?php echo e(route('sections',$WebmasterSection->id)); ?>">
                            <i class="material-icons md-18">×</i>
                        </a>
                    </li>
                </ul>
            </div>

        </div>

        <?php
        $tab_1 = "active";
        $tab_2 = "";
        if (Session::has('activeTab')) {
            if (Session::get('activeTab') == "seo") {
                $tab_1 = "";
                $tab_2 = "active";
            }
        }
        ?>
        <div class="box nav-active-border b-info">
            <ul class="nav nav-md">
                <li class="nav-item inline">
                    <a class="nav-link <?php echo e($tab_1); ?>" href data-toggle="tab" data-target="#tab_details">
                        <span class="text-md"><i class="material-icons">
                                &#xe31e;</i> <?php echo e(trans('backLang.topicTabSection')); ?></span>
                    </a>
                </li>
                <?php if(Helper::GeneralWebmasterSettings("seo_status")): ?>
                    <li class="nav-item inline">
                        <a class="nav-link  <?php echo e($tab_2); ?>" href data-toggle="tab" data-target="#tab_seo">
                    <span class="text-md"><i class="material-icons">
                            &#xe8e5;</i> <?php echo e(trans('backLang.seoTabTitle')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
            <div class="tab-content clear b-t">
                <div class="tab-pane  <?php echo e($tab_1); ?>" id="tab_details">
                    <div class="box-body">
                        <?php echo e(Form::open(['route'=>['sectionsUpdate',"webmasterId"=>$WebmasterSection->id,"id"=>$Sections->id],'method'=>'POST', 'files' => true])); ?>


                        <?php if($WebmasterSection->sections_status==2): ?>
                            <div class="form-group row">
                                <label for="father_id"
                                       class="col-sm-2 form-control-label"><?php echo trans('backLang.sectionFather'); ?> </label>
                                <div class="col-sm-10">
                                    <select name="father_id" id="father_id" class="form-control c-select">
                                        <option value="0">- - <?php echo trans('backLang.sectionNoFather'); ?> - -</option>
                                        <?php
                                        $title_var = "title_" . trans('backLang.boxCode');
                                        $title_var2 = "title_" . trans('backLang.boxCodeOther');
                                        ?>
                                        <?php $__currentLoopData = $fatherSections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fatherSection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                            if ($fatherSection->$title_var != "") {
                                                $title = $fatherSection->$title_var;
                                            } else {
                                                $title = $fatherSection->$title_var2;
                                            }
                                            ?>
                                            <option value="<?php echo e($fatherSection->id); ?>" <?php echo e(($fatherSection->id == $Sections->father_id) ? "selected='selected'":""); ?>><?php echo e($title); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                            </div>
                        <?php else: ?>
                            <?php echo Form::hidden('father_id',$Sections->father_id); ?>

                        <?php endif; ?>

                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                            <div class="form-group row">
                                <label for="title_ar"
                                       class="col-sm-2 form-control-label"><?php echo trans('backLang.sectionName'); ?>

                                    <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.arabicBox'); ?><?php endif; ?>
                                </label>
                                <div class="col-sm-10">
                                    <?php echo Form::text('title_ar',$Sections->title_ar, array('placeholder' => '','class' => 'form-control','id'=>'title_ar','required'=>'', 'dir'=>trans('backLang.rtl'))); ?>

                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
                            <div class="form-group row">
                                <label for="title_en"
                                       class="col-sm-2 form-control-label"><?php echo trans('backLang.sectionName'); ?>

                                    <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.englishBox'); ?><?php endif; ?>
                                </label>
                                <div class="col-sm-10">
                                    <?php echo Form::text('title_en',$Sections->title_en, array('placeholder' => '','class' => 'form-control','id'=>'title_en','required'=>'', 'dir'=>trans('backLang.ltr'))); ?>

                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="form-group row">
                            <label for="photo"
                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.sectionIcon'); ?></label>
                            <div class="col-sm-10">
                                <?php if($Sections->photo!=""): ?>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="col-sm-4 box p-a-xs">
                                                <a target="_blank"
                                                   href="<?php echo e(URL::to('uploads/sections/'.$Sections->photo)); ?>"><img
                                                            src="<?php echo e(URL::to('uploads/sections/'.$Sections->photo)); ?>"
                                                            class="img-responsive">
                                                    <?php echo e($Sections->photo); ?>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php echo Form::file('photo', array('class' => 'form-control','id'=>'photo','accept'=>'image/*')); ?>

                            </div>
                        </div>

                        <div class="form-group row m-t-md" style="margin-top: 0 !important;">
                            <div class="col-sm-offset-2 col-sm-10">
                                <small>
                                    <i class="material-icons">&#xe8fd;</i>
                                    <?php echo trans('backLang.imagesTypes'); ?>

                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="link_status"
                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.status'); ?></label>
                            <div class="col-sm-10">
                                <div class="radio">
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('status','1',($Sections->status==1) ? true : false, array('id' => 'status1','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.active')); ?>

                                    </label>
                                    &nbsp; &nbsp;
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('status','0',($Sections->status==0) ? true : false, array('id' => 'status2','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.notActive')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>

                        <?php if($WebmasterSection->section_icon_status): ?>
                            <div class="form-group row">
                                <label for="icon"
                                       class="col-sm-2 form-control-label"><?php echo trans('backLang.sectionIcon'); ?></label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <?php echo Form::text('icon',$Sections->icon, array('placeholder' => '','class' => 'form-control icp icp-auto','id'=>'title_en', 'data-placement'=>'bottomRight')); ?>

                                        <span class="input-group-addon"></span>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="form-group row m-t-md">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary m-t"><i class="material-icons">
                                        &#xe31b;</i> <?php echo trans('backLang.update'); ?></button>
                                <a href="<?php echo e(route('sections',$WebmasterSection->id)); ?>"
                                   class="btn btn-default m-t"><i class="material-icons">
                                        &#xe5cd;</i> <?php echo trans('backLang.cancel'); ?></a>
                            </div>
                        </div>

                        <?php echo e(Form::close()); ?>

                    </div>
                </div>
                <?php if(Helper::GeneralWebmasterSettings("seo_status")): ?>
                    <div class="tab-pane  <?php echo e($tab_2); ?>" id="tab_seo">

                        <div class="box-body">
                            <?php echo e(Form::open(['route'=>['sectionsSEOUpdate',"webmasterId"=>$WebmasterSection->id,"id"=>$Sections->id],'method'=>'POST', 'files' => true])); ?>


                            <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                                <div class="form-group row">
                                    <label for="seo_title_ar"
                                           class="col-sm-2 form-control-label"><?php echo trans('backLang.topicSEOTitle'); ?>

                                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.arabicBox'); ?><?php endif; ?>
                                    </label>
                                    <div class="col-sm-10">
                                        <?php echo Form::text('seo_title_ar',$Sections->seo_title_ar, array('placeholder' => '','class' => 'form-control','id'=>'title_ar','maxlength'=>'65', 'dir'=>trans('backLang.rtl'))); ?>

                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                <div class="form-group row">
                                    <label for="seo_title_en"
                                           class="col-sm-2 form-control-label"><?php echo trans('backLang.topicSEOTitle'); ?>

                                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.englishBox'); ?><?php endif; ?>
                                    </label>
                                    <div class="col-sm-10">
                                        <?php echo Form::text('seo_title_en',$Sections->seo_title_en, array('placeholder' => '','class' => 'form-control','id'=>'title_en','maxlength'=>'65', 'dir'=>trans('backLang.ltr'))); ?>

                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                                <div class="form-group row">
                                    <label for="seo_description_ar"
                                           class="col-sm-2 form-control-label"><?php echo trans('backLang.topicSEODesc'); ?>

                                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.arabicBox'); ?><?php endif; ?>
                                    </label>
                                    <div class="col-sm-10">
                                        <?php echo Form::textarea('seo_description_ar',$Sections->seo_description_ar, array('placeholder' => trans('backLang.metaDescription'),'class' => 'form-control','id'=>'seo_description_ar','maxlength'=>'165', 'dir'=>trans('backLang.rtl'),'rows'=>'2')); ?>

                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                <div class="form-group row">
                                    <label for="seo_description_en"
                                           class="col-sm-2 form-control-label"><?php echo trans('backLang.topicSEODesc'); ?>

                                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.englishBox'); ?><?php endif; ?>
                                    </label>
                                    <div class="col-sm-10">
                                        <?php echo Form::textarea('seo_description_en',$Sections->seo_description_en, array('placeholder' => trans('backLang.metaDescription'),'class' => 'form-control','id'=>'seo_description_en','maxlength'=>'165', 'dir'=>trans('backLang.ltr'),'rows'=>'2')); ?>

                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                                <div class="form-group row">
                                    <label for="seo_keywords_ar"
                                           class="col-sm-2 form-control-label"><?php echo trans('backLang.topicSEOKeywords'); ?>

                                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.arabicBox'); ?><?php endif; ?>
                                    </label>
                                    <div class="col-sm-10">
                                        <?php echo Form::textarea('seo_keywords_ar',$Sections->seo_keywords_ar, array('placeholder' => trans('backLang.metaKeywords'),'class' => 'form-control','id'=>'seo_keywords_ar', 'dir'=>trans('backLang.rtl'),'rows'=>'2')); ?>

                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                <div class="form-group row">
                                    <label for="seo_keywords_en"
                                           class="col-sm-2 form-control-label"><?php echo trans('backLang.topicSEOKeywords'); ?>

                                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.englishBox'); ?><?php endif; ?>
                                    </label>
                                    <div class="col-sm-10">
                                        <?php echo Form::textarea('seo_keywords_en',$Sections->seo_keywords_en, array('placeholder' => trans('backLang.metaKeywords'),'class' => 'form-control','id'=>'seo_keywords_en', 'dir'=>trans('backLang.ltr'),'rows'=>'2')); ?>

                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="form-group row m-t-md">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary m-t"><i class="material-icons">
                                            &#xe31b;</i> <?php echo trans('backLang.update'); ?></button>
                                    <a href="<?php echo e(route('sections',$WebmasterSection->id)); ?>"
                                       class="btn btn-default m-t"><i class="material-icons">
                                            &#xe5cd;</i> <?php echo trans('backLang.cancel'); ?></a>
                                </div>
                            </div>

                            <?php echo e(Form::close()); ?>

                        </div>

                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footerInclude'); ?>

    <script src="<?php echo e(URL::to("backEnd/libs/js/iconpicker/fontawesome-iconpicker.js")); ?>"></script>
    <script>
        $(function () {
            $('.icp-auto').iconpicker({placement: '<?php echo e((trans('backLang.direction')=="rtl")?"topLeft":"topRight"); ?>'});
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backEnd.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>