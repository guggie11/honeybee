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
                <h3><i class="material-icons">
                        &#xe02e;</i> <?php echo e(trans('backLang.topicNew')); ?> <?php echo trans('backLang.'.$WebmasterSection->name); ?>

                </h3>
                <small>
                    <a href="<?php echo e(route('adminHome')); ?>"><?php echo e(trans('backLang.home')); ?></a> /
                    <a><?php echo trans('backLang.'.$WebmasterSection->name); ?></a>
                </small>
            </div>
            <div class="box-tool">
                <ul class="nav">
                    <li class="nav-item inline">
                        <a class="nav-link" href="<?php echo e(route('topics',$WebmasterSection->id)); ?>">
                            <i class="material-icons md-18">×</i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="box-body">
                <?php echo e(Form::open(['route'=>['topicsStore',$WebmasterSection->id],'method'=>'POST', 'files' => true ])); ?>


                <?php if($WebmasterSection->date_status): ?>
                    <div class="form-group row">
                        <label for="date"
                               class="col-sm-2 form-control-label"><?php echo trans('backLang.topicDate'); ?>

                        </label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <div class='input-group date' ui-jp="datetimepicker" ui-options="{
                format: 'YYYY-MM-DD',
                icons: {
                  time: 'fa fa-clock-o',
                  date: 'fa fa-calendar',
                  up: 'fa fa-chevron-up',
                  down: 'fa fa-chevron-down',
                  previous: 'fa fa-chevron-left',
                  next: 'fa fa-chevron-right',
                  today: 'fa fa-screenshot',
                  clear: 'fa fa-trash',
                  close: 'fa fa-remove'
                }
              }">
                                    <?php echo Form::text('date',date("Y-m-d"), array('placeholder' => '','class' => 'form-control','id'=>'date','required'=>'')); ?>

                                    <span class="input-group-addon">
                  <span class="fa fa-calendar"></span>
              </span>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php else: ?>
                    <?php echo Form::hidden('date',date("Y-m-d"), array('placeholder' => '','class' => 'form-control','id'=>'date')); ?>

                <?php endif; ?>

                <?php if($WebmasterSection->sections_status!=0): ?>
                    <div class="form-group row">
                        <label for="section_id"
                               class="col-sm-2 form-control-label"><?php echo trans('backLang.topicSection'); ?> </label>
                        <div class="col-sm-10">
                            <select name="section_id" id="section_id" class="form-control c-select" required>
                                <option value="">- - <?php echo trans('backLang.topicSelectSection'); ?> - -</option>
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
                                    <option value="<?php echo e($fatherSection->id); ?>"><?php echo e($title); ?></option>
                                    <?php $__currentLoopData = $fatherSection->fatherSections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subFatherSection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                        if ($subFatherSection->$title_var != "") {
                                            $title = $subFatherSection->$title_var;
                                        } else {
                                            $title = $subFatherSection->$title_var2;
                                        }
                                        ?>
                                        <option value="<?php echo e($subFatherSection->id); ?>"> &nbsp; &nbsp;
                                            - <?php echo e($title); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                    </div>
                <?php else: ?>
                    <?php echo Form::hidden('section_id','0'); ?>

                <?php endif; ?>

                <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                    <div class="form-group row">
                        <label for="title_ar"
                               class="col-sm-2 form-control-label"><?php echo trans('backLang.topicName'); ?>

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
                               class="col-sm-2 form-control-label"><?php echo trans('backLang.topicName'); ?>

                            <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.englishBox'); ?><?php endif; ?>
                        </label>
                        <div class="col-sm-10">
                            <?php echo Form::text('title_en','', array('placeholder' => '','class' => 'form-control','id'=>'title_en','required'=>'', 'dir'=>trans('backLang.ltr'))); ?>

                        </div>
                    </div>
                <?php endif; ?>

                <?php if($WebmasterSection->longtext_status): ?>

                    <?php if($WebmasterSection->editor_status): ?>
                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                            <div class="form-group row">
                                <label for="details_ar"
                                       class="col-sm-2 form-control-label"><?php echo trans('backLang.bannerDetails'); ?>

                                    <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.arabicBox'); ?><?php endif; ?>
                                </label>
                                <div class="col-sm-10">
                                    <div class="box p-a-xs">
                                        <?php echo Form::textarea('details_ar','<div dir=rtl><br></div>', array('ui-jp'=>'summernote','placeholder' => '','class' => 'form-control summernote', 'dir'=>trans('backLang.rtl'),'ui-options'=>'{height: 300}')); ?>

                                    </div>
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
                                    <div class="box p-a-xs">
                                        <?php echo Form::textarea('details_en','<div dir=ltr><br></div>', array('ui-jp'=>'summernote','placeholder' => '','class' => 'form-control', 'dir'=>trans('backLang.ltr'),'ui-options'=>'{height: 300}')); ?>

                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php else: ?>
                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                            <div class="form-group row">
                                <label for="details_ar"
                                       class="col-sm-2 form-control-label"><?php echo trans('backLang.bannerDetails'); ?>

                                    <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.arabicBox'); ?><?php endif; ?>
                                </label>
                                <div class="col-sm-10">
                                    <?php echo Form::textarea('details_ar','', array('placeholder' => '','class' => 'form-control', 'dir'=>trans('backLang.rtl'),'rows'=>'5')); ?>

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
                                    <?php echo Form::textarea('details_en','', array('placeholder' => '','class' => 'form-control', 'dir'=>trans('backLang.ltr'),'rows'=>'5')); ?>

                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endif; ?>

                <?php if($WebmasterSection->type==2): ?>
                    <div class="form-group row">
                        <label for="video_type"
                               class="col-sm-2 form-control-label"><?php echo trans('backLang.bannerVideoType'); ?></label>
                        <div class="col-sm-10">
                            <div class="radio">
                                <label class="ui-check ui-check-md">
                                    <?php echo Form::radio('video_type','0',true, array('id' => 'video_type1','class'=>'has-value','onclick'=>'document.getElementById("youtube_link_div").style.display="none";document.getElementById("embed_link_div").style.display="none";document.getElementById("vimeo_link_div").style.display="none";document.getElementById("files_div").style.display="block";document.getElementById("youtube_link").value=""')); ?>

                                    <i class="dark-white"></i>
                                    <?php echo e(trans('backLang.bannerVideoType1')); ?>

                                </label>
                                &nbsp; &nbsp;
                                <label class="ui-check ui-check-md">
                                    <?php echo Form::radio('video_type','1',false, array('id' => 'video_type2','class'=>'has-value','onclick'=>'document.getElementById("youtube_link_div").style.display="block";document.getElementById("embed_link_div").style.display="none";document.getElementById("vimeo_link_div").style.display="none";document.getElementById("files_div").style.display="none";document.getElementById("youtube_link").value=""')); ?>

                                    <i class="dark-white"></i>
                                    <?php echo e(trans('backLang.bannerVideoType2')); ?>

                                </label>
                                &nbsp; &nbsp;
                                <label class="ui-check ui-check-md">
                                    <?php echo Form::radio('video_type','2',false, array('id' => 'video_type2','class'=>'has-value','onclick'=>'document.getElementById("vimeo_link_div").style.display="block";document.getElementById("embed_link_div").style.display="none";document.getElementById("youtube_link_div").style.display="none";document.getElementById("files_div").style.display="none";document.getElementById("vimeo_link").value=""')); ?>

                                    <i class="dark-white"></i>
                                    <?php echo e(trans('backLang.bannerVideoType3')); ?>

                                </label>
                                &nbsp; &nbsp;
                                <label class="ui-check ui-check-md">
                                    <?php echo Form::radio('video_type','3',false, array('id' => 'video_type3','class'=>'has-value','onclick'=>'document.getElementById("embed_link_div").style.display="block";document.getElementById("vimeo_link_div").style.display="none";document.getElementById("youtube_link_div").style.display="none";document.getElementById("files_div").style.display="none";document.getElementById("embed_link").value=""')); ?>

                                    <i class="dark-white"></i>
                                    Embed
                                </label>
                            </div>
                        </div>
                    </div>

                    <div id="files_div">
                        <div class="form-group row">
                            <label for="video_file"
                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.topicVideo'); ?></label>
                            <div class="col-sm-10">
                                <?php echo Form::file('video_file', array('class' => 'form-control','id'=>'video_file','accept'=>'*')); ?>

                            </div>
                        </div>

                        <div class="form-group row m-t-md" style="margin-top: 0 !important;">
                            <div class="col-sm-offset-2 col-sm-10">
                                <small>
                                    <i class="material-icons">&#xe8fd;</i>
                                    <?php echo trans('backLang.videoTypes'); ?>

                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row" id="youtube_link_div" style="display: none">
                        <label for="youtube_link"
                               class="col-sm-2 form-control-label"><?php echo trans('backLang.bannerVideoUrl'); ?></label>
                        <div class="col-sm-10">
                            <?php echo Form::text('youtube_link','', array('placeholder' => 'https://www.youtube.com/watch?v=JQs4QyKnYMQ','class' => 'form-control','id'=>'youtube_link', 'dir'=>trans('backLang.ltr'))); ?>

                        </div>
                    </div>
                    <div class="form-group row" id="vimeo_link_div" style="display: none">
                        <label for="youtube_link"
                               class="col-sm-2 form-control-label"><?php echo trans('backLang.bannerVideoUrl2'); ?></label>
                        <div class="col-sm-10">
                            <?php echo Form::text('vimeo_link','', array('placeholder' => 'https://vimeo.com/131766159','class' => 'form-control','id'=>'vimeo_link', 'dir'=>trans('backLang.ltr'))); ?>

                        </div>
                    </div>
                    <div class="form-group row" id="embed_link_div" style="display: none">
                        <label for="embed_link"
                               class="col-sm-2 form-control-label">Embed Code</label>
                        <div class="col-sm-10">
                            <?php echo Form::textarea('embed_link','', array('placeholder' => '','class' => 'form-control','id'=>'embed_link', 'dir'=>trans('backLang.ltr'),'rows'=>'3')); ?>

                        </div>
                    </div>
                <?php endif; ?>

                <?php if($WebmasterSection->type==3): ?>
                    <div class="form-group row">
                        <label for="audio_file"
                               class="col-sm-2 form-control-label"><?php echo trans('backLang.topicAudio'); ?></label>
                        <div class="col-sm-10">
                            <?php echo Form::file('audio_file', array('class' => 'form-control','id'=>'audio_file','accept'=>'audio/*')); ?>

                        </div>
                    </div>

                    <div class="form-group row m-t-md" style="margin-top: 0 !important;">
                        <div class="col-sm-offset-2 col-sm-10">
                            <small>
                                <i class="material-icons">&#xe8fd;</i>
                                <?php echo trans('backLang.audioTypes'); ?>

                            </small>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="form-group row">
                    <label for="photo_file"
                           class="col-sm-2 form-control-label"><?php echo trans('backLang.topicPhoto'); ?></label>
                    <div class="col-sm-10">
                        <?php echo Form::file('photo_file', array('class' => 'form-control','id'=>'photo_file','accept'=>'image/*')); ?>

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

                <?php if($WebmasterSection->icon_status): ?>
                <div class="form-group row">
                    <label for="icon"
                           class="col-sm-2 form-control-label"><?php echo trans('backLang.sectionIcon'); ?></label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <?php echo Form::text('icon','', array('placeholder' => '','class' => 'form-control icp icp-auto','id'=>'title_en', 'data-placement'=>'bottomRight')); ?>

                            <span class="input-group-addon"></span>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php if($WebmasterSection->attach_file_status): ?>
                    <div class="form-group row">
                        <label for="attach_file"
                               class="col-sm-2 form-control-label"><?php echo trans('backLang.topicAttach'); ?></label>
                        <div class="col-sm-10">
                            <?php echo Form::file('attach_file', array('class' => 'form-control','id'=>'attach_file')); ?>

                        </div>
                    </div>
                    <div class="form-group row m-t-md" style="margin-top: 0 !important;">
                        <div class="col-sm-offset-2 col-sm-10">
                            <small>
                                <i class="material-icons">&#xe8fd;</i>
                                <?php echo trans('backLang.attachTypes'); ?>

                            </small>
                        </div>
                    </div>
                <?php endif; ?>


                <div class="form-group row m-t-md">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary m-t"><i class="material-icons">
                                &#xe31b;</i> <?php echo trans('backLang.add'); ?></button>
                        <a href="<?php echo e(route('topics',$WebmasterSection->id)); ?>"
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
        $(function() {
            $('.icp-auto').iconpicker({ placement: '<?php echo e((trans('backLang.direction')=="rtl")?"topLeft":"topRight"); ?>'});
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backEnd.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>