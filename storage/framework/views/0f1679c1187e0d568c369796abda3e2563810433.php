<?php $__env->startSection('headerInclude'); ?>
    <link href="<?php echo e(URL::to("backEnd/libs/js/iconpicker/fontawesome-iconpicker.min.css")); ?>" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="padding">
        <div class="box">
            <div class="box-header dker">
                <h3><i class="material-icons">&#xe3c9;</i> <?php echo e(trans('backLang.bannerEdit')); ?></h3>
                <small>
                    <a href="<?php echo e(route('adminHome')); ?>"><?php echo e(trans('backLang.home')); ?></a> /
                    <a href=""><?php echo e(trans('backLang.adsBanners')); ?></a>
                </small>
            </div>
            <div class="box-tool">
                <ul class="nav">
                    <li class="nav-item inline">
                        <a class="nav-link" href="<?php echo e(route("Banners")); ?>">
                            <i class="material-icons md-18">×</i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="box-body">
                <?php echo e(Form::open(['route'=>['BannersUpdate',$Banners->id],'method'=>'POST', 'files' => true])); ?>


                <?php echo Form::hidden('section_id',$Banners->section_id); ?>


                <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                    <div class="form-group row">
                        <label for="title_ar"
                               class="col-sm-2 form-control-label"><?php echo trans('backLang.bannerTitle'); ?>

                            <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.arabicBox'); ?><?php endif; ?>
                        </label>
                        <div class="col-sm-10">
                            <?php echo Form::text('title_ar',$Banners->title_ar, array('placeholder' => '','class' => 'form-control','id'=>'title_ar','required'=>'', 'dir'=>trans('backLang.rtl'))); ?>

                        </div>
                    </div>
                <?php endif; ?>
                <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
                    <div class="form-group row">
                        <label for="title_en"
                               class="col-sm-2 form-control-label"><?php echo trans('backLang.bannerTitle'); ?>


                            <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.englishBox'); ?><?php endif; ?>
                        </label>
                        <div class="col-sm-10">
                            <?php echo Form::text('title_en',$Banners->title_en, array('placeholder' => '','class' => 'form-control','id'=>'title_en','required'=>'', 'dir'=>trans('backLang.ltr'))); ?>

                        </div>
                    </div>
                <?php endif; ?>
                <?php if($WebmasterBanner->type==2): ?>
                    <div class="form-group row">
                        <label for="video_type"
                               class="col-sm-2 form-control-label"><?php echo trans('backLang.bannerVideoType'); ?></label>
                        <div class="col-sm-10">
                            <div class="radio">
                                <label class="ui-check ui-check-md">
                                    <?php echo Form::radio('video_type','0',($Banners->video_type==0) ? true : false, array('id' => 'video_type1','class'=>'has-value','onclick'=>'document.getElementById("youtube_link_div").style.display="none";document.getElementById("vimeo_link_div").style.display="none";document.getElementById("files_div").style.display="block";document.getElementById("youtube_link").value=""')); ?>

                                    <i class="dark-white"></i>
                                    <?php echo e(trans('backLang.bannerVideoType1')); ?>

                                </label>
                                &nbsp; &nbsp;
                                <label class="ui-check ui-check-md">
                                    <?php echo Form::radio('video_type','1',($Banners->video_type==1) ? true : false, array('id' => 'video_type2','class'=>'has-value','onclick'=>'document.getElementById("vimeo_link_div").style.display="none";document.getElementById("youtube_link_div").style.display="block";document.getElementById("files_div").style.display="none";document.getElementById("youtube_link").value=""')); ?>

                                    <i class="dark-white"></i>
                                    <?php echo e(trans('backLang.bannerVideoType2')); ?>

                                </label>
                                &nbsp; &nbsp;
                                <label class="ui-check ui-check-md">
                                    <?php echo Form::radio('video_type','2',($Banners->video_type==2) ? true : false, array('id' => 'video_type2','class'=>'has-value','onclick'=>'document.getElementById("vimeo_link_div").style.display="block";document.getElementById("youtube_link_div").style.display="none";document.getElementById("files_div").style.display="none";document.getElementById("vimeo_link").value=""')); ?>

                                    <i class="dark-white"></i>
                                    <?php echo e(trans('backLang.bannerVideoType3')); ?>

                                </label>
                            </div>
                        </div>
                    </div>


                    <div class="form-group row" id="youtube_link_div"
                         style="display: <?php echo e(($Banners->video_type==1) ? "block" : "none"); ?>">
                        <label for="youtube_link"
                               class="col-sm-2 form-control-label"><?php echo trans('backLang.bannerVideoUrl'); ?></label>
                        <div class="col-sm-10">
                            <?php echo Form::text('youtube_link',$Banners->youtube_link, array('placeholder' => 'https://www.youtube.com/watch?v=JQs4QyKnYMQ','class' => 'form-control','id'=>'youtube_link', 'dir'=>trans('backLang.ltr'))); ?>

                        </div>
                    </div>

                    <div class="form-group row" id="vimeo_link_div"
                         style="display: <?php echo e(($Banners->video_type==2) ? "block" : "none"); ?>">
                        <label for="youtube_link"
                               class="col-sm-2 form-control-label"><?php echo trans('backLang.bannerVideoUrl2'); ?></label>
                        <div class="col-sm-10">
                            <?php echo Form::text('vimeo_link',$Banners->youtube_link, array('placeholder' => 'https://vimeo.com/131766159','class' => 'form-control','id'=>'vimeo_link', 'dir'=>trans('backLang.ltr'))); ?>

                        </div>
                    </div>
                <?php endif; ?>


                <?php if($WebmasterBanner->type!=0): ?>
                    <?php if($WebmasterBanner->type==1): ?>
                        <?php
                        $ttile = "bannerPhoto";
                        $file1 = "file_ar";
                        $file2 = "file_en";
                        $file_allow = "image/*";
                        ?>
                    <?php else: ?>
                        <?php
                        $ttile = "topicVideo";
                        $file1 = "file2_ar";
                        $file2 = "file2_en";
                        $file_allow = "*'";
                        ?>
                    <?php endif; ?>
                    <div id="files_div" style="display: <?php echo e(($Banners->video_type == 0) ? "block" : "none"); ?>">
                        <div class="form-group row">
                            <label for="file_ar"
                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.'.$ttile); ?> <?php echo trans('backLang.arabicBox'); ?></label>
                            <div class="col-sm-10">
                                <?php if($Banners->file_ar!=""): ?>
                                    <?php if($WebmasterBanner->type==1): ?>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="col-sm-4 box p-a-xs">
                                                    <a target="_blank"
                                                       href="<?php echo e(URL::to('uploads/banners/'.$Banners->file_ar)); ?>"><img
                                                                src="<?php echo e(URL::to('uploads/banners/'.$Banners->file_ar)); ?>"
                                                                class="img-responsive">
                                                        <?php echo e($Banners->file_ar); ?>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <a target="_blank"
                                           href="<?php echo e(URL::to('uploads/banners/'.$Banners->file_ar)); ?>"><?php echo $Banners->file_ar; ?></a>
                                    <?php endif; ?>
                                <?php endif; ?>
                                <?php echo Form::file($file1, array('class' => 'form-control','id'=>'file_ar','accept'=>$file_allow)); ?>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file_en"
                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.'.$ttile); ?> <?php echo trans('backLang.englishBox'); ?></label>
                            <div class="col-sm-10">
                                <?php if($Banners->file_en!=""): ?>
                                    <?php if($WebmasterBanner->type==1): ?>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="col-sm-4 box p-a-xs">
                                                    <a target="_blank"
                                                       href="<?php echo e(URL::to('uploads/banners/'.$Banners->file_en)); ?>"><img
                                                                src="<?php echo e(URL::to('uploads/banners/'.$Banners->file_en)); ?>"
                                                                class="img-responsive">
                                                        <?php echo e($Banners->file_en); ?>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <a target="_blank"
                                           href="<?php echo e(URL::to('uploads/banners/'.$Banners->file_en)); ?>"><?php echo $Banners->file_en; ?></a>
                                    <?php endif; ?>
                                <?php endif; ?>
                                <?php echo Form::file($file2, array('class' => 'form-control','id'=>'file_en','accept'=>$file_allow)); ?>

                            </div>
                        </div>
                        <div class="form-group row m-t-md" style="margin-top: 0 !important;">
                            <div class="col-sm-offset-2 col-sm-10">
                                <small>
                                    <i class="material-icons">&#xe8fd;</i>
                                    <?php if($WebmasterBanner->type==1): ?>
                                        <?php echo trans('backLang.imagesTypes'); ?>

                                    <?php else: ?>
                                        <?php echo trans('backLang.videoTypes'); ?>

                                    <?php endif; ?>
                                </small>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if($WebmasterBanner->desc_status): ?>

                    <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                        <div class="form-group row">
                            <label for="details_ar"
                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.bannerDetails'); ?>

                                <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.arabicBox'); ?><?php endif; ?>
                            </label>
                            <div class="col-sm-10">
                                <?php echo Form::textarea('details_ar',$Banners->details_ar, array('placeholder' => '','class' => 'form-control', 'dir'=>trans('backLang.rtl'),'rows'=>'3')); ?>

                            </div>
                        </div>

                    <?php endif; ?>
                    <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
                        <div class="form-group row">
                            <label for="details_en"
                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.bannerDetails'); ?>

                                <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.englishBox'); ?><?php endif; ?>
                            </label>
                            <div class="col-sm-10">
                                <?php echo Form::textarea('details_en',$Banners->details_en, array('placeholder' => '','class' => 'form-control', 'dir'=>trans('backLang.ltr'),'rows'=>'3')); ?>

                            </div>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>

                <?php if($WebmasterBanner->link_status): ?>
                    <div class="form-group row">
                        <label for="link_url"
                               class="col-sm-2 form-control-label"><?php echo trans('backLang.bannerLinkUrl'); ?></label>
                        <div class="col-sm-10">
                            <?php echo Form::text('link_url',$Banners->link_url, array('placeholder' => 'http://www.site.com','class' => 'form-control','id'=>'link_url', 'dir'=>trans('backLang.ltr'))); ?>

                        </div>
                    </div>
                <?php endif; ?>

                <?php if($WebmasterBanner->type==0): ?>
                    <div class="form-group row">
                        <label for="code"
                               class="col-sm-2 form-control-label"><?php echo trans('backLang.bannerCode'); ?></label>
                        <div class="col-sm-10">
                            <?php echo Form::textarea('code',$Banners->code, array('placeholder' => '','class' => 'form-control', 'dir'=>trans('backLang.ltr'),'rows'=>'3')); ?>

                        </div>
                    </div>
                <?php endif; ?>


                <?php if($WebmasterBanner->icon_status): ?>
                    <div class="form-group row">
                        <label for="icon"
                               class="col-sm-2 form-control-label"><?php echo trans('backLang.sectionIcon'); ?></label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <?php echo Form::text('icon',$Banners->icon, array('placeholder' => '','class' => 'form-control icp icp-auto','id'=>'title_en', 'data-placement'=>'bottomRight')); ?>

                                <span class="input-group-addon"></span>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="form-group row">
                    <label for="link_status"
                           class="col-sm-2 form-control-label"><?php echo trans('backLang.status'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('status','1',($Banners->status==1) ? true : false, array('id' => 'status1','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.active')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('status','0',($Banners->status==0) ? true : false, array('id' => 'status2','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(trans('backLang.notActive')); ?>

                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row m-t-md">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary m-t"><i class="material-icons">
                                &#xe31b;</i> <?php echo trans('backLang.update'); ?></button>
                        <a href="<?php echo e(route("Banners")); ?>"
                           class="btn btn-default m-t"><i class="material-icons">
                                &#xe5cd;</i> <?php echo trans('backLang.cancel'); ?></a>
                    </div>
                </div>

                <?php echo e(Form::close()); ?>

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