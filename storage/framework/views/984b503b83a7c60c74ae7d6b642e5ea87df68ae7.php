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
                <h3><i class="material-icons">
                        &#xe3c9;</i> <?php echo e(trans('backLang.topicEdit')); ?> <?php echo trans('backLang.'.$WebmasterSection->name); ?>

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

        </div>


        <?php
        $tab_1 = "active";
        $tab_2 = "";
        $tab_3 = "";
        $tab_4 = "";
        $tab_5 = "";
        if (Session::has('activeTab')) {
            if (Session::get('activeTab') == "seo") {
                $tab_1 = "";
                $tab_2 = "active";
                $tab_3 = "";
                $tab_4 = "";
                $tab_5 = "";
            }
            if (Session::get('activeTab') == "photos") {
                $tab_1 = "";
                $tab_2 = "";
                $tab_3 = "active";
                $tab_4 = "";
                $tab_5 = "";
            }
            if (Session::get('activeTab') == "comments") {
                $tab_1 = "";
                $tab_2 = "";
                $tab_3 = "";
                $tab_4 = "active";
                $tab_5 = "";
            }
            if (Session::get('activeTab') == "maps") {
                $tab_1 = "";
                $tab_2 = "";
                $tab_3 = "";
                $tab_4 = "";
                $tab_5 = "active";
            }
        }
        ?>
        <div class="box nav-active-border b-info">
            <ul class="nav nav-md">
                <li class="nav-item inline">
                    <a class="nav-link <?php echo e($tab_1); ?>" href data-toggle="tab" data-target="#tab_details">
                        <span class="text-md"><i class="material-icons">
                                &#xe31e;</i> <?php echo e(trans('backLang.topicTabDetails')); ?></span>
                    </a>
                </li>

                <?php if($WebmasterSection->multi_images_status): ?>
                    <li class="nav-item inline">
                        <a class="nav-link  <?php echo e($tab_3); ?>" href data-toggle="tab" data-target="#tab_photos">
                    <span class="text-md"><i class="material-icons">
                            &#xe251;</i>
                        <?php echo e(trans('backLang.topicAdditionalPhotos')); ?>

                        <?php if(count($Topics->photos)>0): ?>
                            <span class="label rounded"><?php echo e(count($Topics->photos)); ?></span>
                        <?php endif; ?>
                    </span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if($WebmasterSection->comments_status): ?>
                    <li class="nav-item inline">
                        <a class="nav-link  <?php echo e($tab_4); ?>" href data-toggle="tab" data-target="#tab_comments">
                    <span class="text-md"><i class="material-icons">
                            &#xe0b9;</i> <?php echo e(trans('backLang.comments')); ?>

                        <?php if(count($Topics->comments)>0): ?>
                            <span class="label rounded"><?php echo e(count($Topics->comments)); ?></span>
                        <?php endif; ?>
                    </span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if($WebmasterSection->maps_status): ?>
                    <li class="nav-item inline">
                        <a class="nav-link  <?php echo e($tab_5); ?>" id="mapTabLink" href data-toggle="tab"
                           data-target="#tab_maps">
                    <span class="text-md"><i class="material-icons">
                            &#xe0c8;</i> <?php echo e(trans('backLang.topicGoogleMaps')); ?>

                        <?php if(count($Topics->maps)>0): ?>
                            <span class="label rounded"><?php echo e(count($Topics->maps)); ?></span>
                        <?php endif; ?>
                    </span>
                        </a>
                    </li>
                <?php endif; ?>

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
                        <?php echo e(Form::open(['route'=>['topicsUpdate',"webmasterId"=>$WebmasterSection->id,"id"=>$Topics->id],'method'=>'POST', 'files' => true])); ?>


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
                                            <?php echo Form::text('date',$Topics->date, array('placeholder' => '','class' => 'form-control','id'=>'date','required'=>'')); ?>

                                            <span class="input-group-addon">
                  <span class="fa fa-calendar"></span>
              </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        <?php else: ?>
                            <?php echo Form::hidden('date',$Topics->date, array('placeholder' => '','class' => 'form-control','id'=>'date')); ?>

                        <?php endif; ?>

                        <?php if($WebmasterSection->sections_status!=0): ?>
                            <div class="form-group row">
                                <label for="section_id"
                                       class="col-sm-2 form-control-label"><?php echo trans('backLang.sectionFather'); ?> </label>
                                <div class="col-sm-10">
                                    <select name="section_id" id="section_id" class="form-control c-select">
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
                                            <option value="<?php echo e($fatherSection->id); ?>" <?php echo e(($fatherSection->id == $Topics->section_id) ? "selected='selected'":""); ?>><?php echo e($title); ?></option>
                                            <?php $__currentLoopData = $fatherSection->fatherSections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subFatherSection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php
                                                if ($subFatherSection->$title_var != "") {
                                                    $title = $subFatherSection->$title_var;
                                                } else {
                                                    $title = $subFatherSection->$title_var2;
                                                }
                                                ?>
                                                <option value="<?php echo e($subFatherSection->id); ?>" <?php echo e(($subFatherSection->id == $Topics->section_id) ? "selected='selected'":""); ?>>
                                                    &nbsp; &nbsp; - <?php echo e($title); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                            </div>
                        <?php else: ?>
                            <?php echo Form::hidden('section_id',$Topics->section_id); ?>

                        <?php endif; ?>

                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                            <div class="form-group row">
                                <label for="title_ar"
                                       class="col-sm-2 form-control-label"><?php echo trans('backLang.topicName'); ?>

                                    <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.arabicBox'); ?><?php endif; ?>
                                </label>
                                <div class="col-sm-10">
                                    <?php echo Form::text('title_ar',$Topics->title_ar, array('placeholder' => '','class' => 'form-control','id'=>'title_ar','required'=>'', 'dir'=>trans('backLang.rtl'))); ?>

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
                                    <?php echo Form::text('title_en',$Topics->title_en, array('placeholder' => '','class' => 'form-control','id'=>'title_en','required'=>'', 'dir'=>trans('backLang.ltr'))); ?>

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
                                                <?php echo Form::textarea('details_ar',$Topics->details_ar, array('ui-jp'=>'summernote','placeholder' => '','class' => 'form-control summernote', 'dir'=>trans('backLang.rtl'),'ui-options'=>'{height: 300}')); ?>

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
                                                <?php echo Form::textarea('details_en',$Topics->details_en, array('ui-jp'=>'summernote','placeholder' => '','class' => 'form-control', 'dir'=>trans('backLang.ltr'),'ui-options'=>'{height: 300}')); ?>

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
                                            <?php echo Form::textarea('details_ar',$Topics->details_ar, array('placeholder' => '','class' => 'form-control', 'dir'=>trans('backLang.rtl'),'rows'=>'5')); ?>

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
                                            <?php echo Form::textarea('details_en',$Topics->details_en, array('placeholder' => '','class' => 'form-control', 'dir'=>trans('backLang.ltr'),'rows'=>'5')); ?>

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
                                            <?php echo Form::radio('video_type','0',($Topics->video_type==0) ? true : false, array('id' => 'video_type1','class'=>'has-value','onclick'=>'document.getElementById("embed_link_div").style.display="none";document.getElementById("youtube_link_div").style.display="none";document.getElementById("vimeo_link_div").style.display="none";document.getElementById("files_div").style.display="block";document.getElementById("youtube_link").value=""')); ?>

                                            <i class="dark-white"></i>
                                            <?php echo e(trans('backLang.bannerVideoType1')); ?>

                                        </label>
                                        &nbsp; &nbsp;
                                        <label class="ui-check ui-check-md">
                                            <?php echo Form::radio('video_type','1',($Topics->video_type==1) ? true : false, array('id' => 'video_type2','class'=>'has-value','onclick'=>'document.getElementById("embed_link_div").style.display="none";document.getElementById("youtube_link_div").style.display="block";document.getElementById("vimeo_link_div").style.display="none";document.getElementById("files_div").style.display="none";document.getElementById("youtube_link").value=""')); ?>

                                            <i class="dark-white"></i>
                                            <?php echo e(trans('backLang.bannerVideoType2')); ?>

                                        </label>
                                        &nbsp; &nbsp;
                                        <label class="ui-check ui-check-md">
                                            <?php echo Form::radio('video_type','2',($Topics->video_type==2) ? true : false, array('id' => 'video_type2','class'=>'has-value','onclick'=>'document.getElementById("embed_link_div").style.display="none";document.getElementById("vimeo_link_div").style.display="block";document.getElementById("youtube_link_div").style.display="none";document.getElementById("files_div").style.display="none";document.getElementById("vimeo_link").value=""')); ?>

                                            <i class="dark-white"></i>
                                            <?php echo e(trans('backLang.bannerVideoType3')); ?>

                                        </label>
                                        &nbsp; &nbsp;
                                        <label class="ui-check ui-check-md">
                                            <?php echo Form::radio('video_type','3',($Topics->video_type==3) ? true : false, array('id' => 'video_type3','class'=>'has-value','onclick'=>'document.getElementById("embed_link_div").style.display="block";document.getElementById("vimeo_link_div").style.display="none";document.getElementById("youtube_link_div").style.display="none";document.getElementById("files_div").style.display="none";document.getElementById("embed_link").value=""')); ?>

                                            <i class="dark-white"></i>
                                            Embed
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div id="files_div" style="display: <?php echo e(($Topics->video_type ==0) ? "block" : "none"); ?>">
                                <div class="form-group row">
                                    <label for="video_file"
                                           class="col-sm-2 form-control-label"><?php echo trans('backLang.topicVideo'); ?></label>
                                    <div class="col-sm-10">
                                        <?php if($Topics->video_type==0 && $Topics->video_file!=""): ?>
                                            <div class="box p-a-xs">

                                                <video width="380" height="230" controls>
                                                    <source src="<?php echo e(URL::to('uploads/topics/'.$Topics->video_file)); ?>"
                                                            type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                                <br>
                                                <a target="_blank"
                                                   href="<?php echo e(URL::to('uploads/topics/'.$Topics->video_file)); ?>">
                                                    <?php echo e($Topics->video_file); ?> </a>
                                            </div>
                                        <?php endif; ?>
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
                            <div class="form-group row" id="youtube_link_div"
                                 style="display: <?php echo e(($Topics->video_type==1) ? "block" : "none"); ?>">
                                <label for="youtube_link"
                                       class="col-sm-2 form-control-label"><?php echo trans('backLang.bannerVideoUrl'); ?></label>
                                <div class="col-sm-10">
                                    <?php echo Form::text('youtube_link',$Topics->video_file, array('placeholder' => 'https://www.youtube.com/watch?v=JQs4QyKnYMQ','class' => 'form-control','id'=>'youtube_link', 'dir'=>trans('backLang.ltr'))); ?>

                                </div>
                            </div>
                            <div class="form-group row" id="vimeo_link_div" style="display: <?php echo e(($Topics->video_type ==2) ? "block" : "none"); ?>">
                                <label for="youtube_link"
                                       class="col-sm-2 form-control-label"><?php echo trans('backLang.bannerVideoUrl2'); ?></label>
                                <div class="col-sm-10">
                                    <?php echo Form::text('vimeo_link',$Topics->video_file, array('placeholder' => 'https://vimeo.com/131766159','class' => 'form-control','id'=>'vimeo_link', 'dir'=>trans('backLang.ltr'))); ?>

                                </div>
                            </div>

                            <div class="form-group row" id="embed_link_div" style="display: <?php echo e(($Topics->video_type ==3) ? "block" : "none"); ?>">
                                <label for="embed_link"
                                       class="col-sm-2 form-control-label"><?php echo trans('backLang.bannerVideoUrl2'); ?></label>
                                <div class="col-sm-10">
                                    <?php echo Form::textarea('embed_link',$Topics->video_file, array('placeholder' => '','class' => 'form-control','id'=>'embed_link', 'dir'=>trans('backLang.ltr'),'rows'=>'3')); ?>

                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if($WebmasterSection->type==3): ?>
                            <div class="form-group row">
                                <label for="audio_file"
                                       class="col-sm-2 form-control-label"><?php echo trans('backLang.topicAudio'); ?></label>
                                <div class="col-sm-10">
                                    <?php if($Topics->audio_file!=""): ?>
                                        <div class="box p-a-xs">
                                            <audio controls>
                                                <source src="<?php echo e(URL::to('uploads/topics/'.$Topics->audio_file)); ?>"
                                                        type="audio/mpeg">
                                                Your browser does not support the audio element.
                                            </audio>
                                            <br>
                                            <a target="_blank"
                                               href="<?php echo e(URL::to('uploads/topics/'.$Topics->audio_file)); ?>"> <?php echo e($Topics->audio_file); ?> </a>
                                        </div>
                                    <?php endif; ?>
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
                                <?php if($Topics->photo_file!=""): ?>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div id="topic_photo" class="col-sm-4 box p-a-xs">
                                                <a target="_blank"
                                                   href="<?php echo e(URL::to('uploads/topics/'.$Topics->photo_file)); ?>"><img
                                                            src="<?php echo e(URL::to('uploads/topics/'.$Topics->photo_file)); ?>"
                                                            class="img-responsive">
                                                    <?php echo e($Topics->photo_file); ?>

                                                </a>
                                                <br>
                                                <a onclick="document.getElementById('topic_photo').style.display='none';document.getElementById('photo_delete').value='1';document.getElementById('undo').style.display='block';"
                                                   class="btn btn-sm btn-default"><?php echo trans('backLang.delete'); ?></a>
                                            </div>
                                            <div id="undo" class="col-sm-4 p-a-xs" style="display: none">
                                                <a onclick="document.getElementById('topic_photo').style.display='block';document.getElementById('photo_delete').value='0';document.getElementById('undo').style.display='none';">
                                                    <i class="material-icons">
                                                        &#xe166;</i> <?php echo trans('backLang.undoDelete'); ?></a>
                                            </div>

                                            <?php echo Form::hidden('photo_delete','0', array('id'=>'photo_delete')); ?>

                                        </div>
                                    </div>
                                <?php endif; ?>

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
                                        <?php echo Form::text('icon',$Topics->icon, array('placeholder' => '','class' => 'form-control icp icp-auto','id'=>'title_en', 'data-placement'=>'bottomRight')); ?>

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
                                    <?php if($Topics->attach_file!=""): ?>
                                        <div id="topic_attach" class="col-sm-4 box p-a-xs">
                                            <a target="_blank"
                                               href="<?php echo e(URL::to('uploads/topics/'.$Topics->attach_file)); ?>"> <?php echo e($Topics->attach_file); ?> </a>
                                            <br>
                                            <a onclick="document.getElementById('topic_attach').style.display='none';document.getElementById('attach_delete').value='1';document.getElementById('undo2').style.display='block';"
                                               class="btn btn-sm btn-default"><?php echo trans('backLang.delete'); ?></a>
                                        </div>
                                        <div id="undo2" class="col-sm-4 p-a-xs" style="display: none">
                                            <a onclick="document.getElementById('topic_attach').style.display='block';document.getElementById('attach_delete').value='0';document.getElementById('undo2').style.display='none';">
                                                <i class="material-icons">
                                                    &#xe166;</i> <?php echo trans('backLang.undoDelete'); ?></a>
                                        </div>
                                        <?php echo Form::hidden('attach_delete','0', array('id'=>'attach_delete')); ?>

                                    <?php endif; ?>
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

                        <div class="form-group row">
                            <label for="link_status"
                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.status'); ?></label>
                            <div class="col-sm-10">
                                <div class="radio">
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('status','1',($Topics->status==1) ? true : false, array('id' => 'status1','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.active')); ?>

                                    </label>
                                    &nbsp; &nbsp;
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('status','0',($Topics->status==0) ? true : false, array('id' => 'status2','class'=>'has-value')); ?>

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
                                <a href="<?php echo e(route('topics',$WebmasterSection->id)); ?>"
                                   class="btn btn-default m-t"><i class="material-icons">
                                        &#xe5cd;</i> <?php echo trans('backLang.cancel'); ?></a>
                            </div>
                        </div>

                        <?php echo e(Form::close()); ?>

                    </div>
                </div>


                <?php if($WebmasterSection->multi_images_status): ?>
                    <div class="tab-pane  <?php echo e($tab_3); ?>" id="tab_photos">

                        <div class="box-body">

                            <div>
                                <?php echo e(Form::open(['route'=>['topicsPhotosEdit',"webmasterId"=>$WebmasterSection->id,"id"=>$Topics->id],'method'=>'POST','class'=>'dropzone white', 'files' => true])); ?>

                                <div class="dz-message" ui-jp="dropzone"
                                     ui-options="{ url: '<?php echo e(URL::to('backEnd/api/dropzone')); ?>' }">
                                    <h4 class="m-t-lg m-b-md"><?php echo e(trans('backLang.topicDropFiles')); ?></h4>
                                    <span class="text-muted block m-b-lg">( <?php echo e(trans('backLang.topicDropFiles2')); ?>

                                        )</span>
                                </div>
                                <?php echo e(Form::close()); ?>

                                <br>
                            </div>
                            <?php if(count($Topics->photos)>0): ?>
                                <div class="row">
                                    <?php echo e(Form::open(['route'=>['topicsPhotosUpdateAll',$WebmasterSection->id,$Topics->id],'method'=>'post'])); ?>

                                    <?php $__currentLoopData = $Topics->photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-xs-6 col-sm-4 col-md-3">
                                            <div class="box p-a-xs">
                                                <div class="pull-right">
                                                    <?php echo Form::text('row_no_'.$photo->id,$photo->row_no, array('class' => 'pull-left form-control row_no','id'=>'row_no','style'=>'margin:0;margin-bottom:5px')); ?>

                                                </div>
                                                <label class="ui-check m-a-0">
                                                    <input type="checkbox" name="ids[]" value="<?php echo e($photo->id); ?>"><i
                                                            class="dark-white"></i>
                                                    <?php echo Form::hidden('row_ids[]',$photo->id, array('class' => 'form-control row_no')); ?>

                                                </label>
                                                <img src="<?php echo e(URL::to('uploads/topics/'.$photo->file)); ?>"
                                                     alt="<?php echo e($photo->title); ?>" title="<?php echo e($photo->title); ?>"
                                                     style="height: 150px"
                                                     class="img-responsive">
                                                <div class="p-a-sm">
                                                    <div class="text-ellipsis">
                                                        <?php if(@Auth::user()->permissionsGroup->delete_status): ?>
                                                            <button class="btn btn-sm warning pull-right"
                                                                    data-toggle="modal"
                                                                    data-target="#mx-<?php echo e($photo->id); ?>"
                                                                    ui-toggle-class="bounce"
                                                                    ui-target="#animate"
                                                                    title="<?php echo e(trans('backLang.delete')); ?>"
                                                                    style="padding: 0 5px 2px;">
                                                                <small><i class="material-icons">&#xe872;</i></small>
                                                            </button>
                                                        <?php endif; ?>
                                                        <a href="<?php echo e(URL::to('uploads/topics/'.$photo->file)); ?>"
                                                           target="_blank">  <?php echo e(($photo->title !="") ? $photo->title:$photo->file); ?></a>
                                                    </div>
                                                </div>

                                                <!-- .modal -->
                                                <div id="mx-<?php echo e($photo->id); ?>" class="modal fade" data-backdrop="true">
                                                    <div class="modal-dialog" id="animate">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"><?php echo e(trans('backLang.confirmation')); ?></h5>
                                                            </div>
                                                            <div class="modal-body text-center p-lg">
                                                                <p>
                                                                    <?php echo e(trans('backLang.confirmationDeleteMsg')); ?>

                                                                    <br>
                                                                    <strong>[ <?php echo e(($photo->title !="") ? $photo->title:$photo->file); ?>

                                                                        ]</strong>
                                                                </p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn dark-white p-x-md"
                                                                        data-dismiss="modal"><?php echo e(trans('backLang.no')); ?></button>
                                                                <a href="<?php echo e(route("topicsPhotosDestroy",["webmasterId"=>$WebmasterSection->id,"id"=>$Topics->id,"photo_id"=>$photo->id])); ?>"
                                                                   class="btn danger p-x-md"><?php echo e(trans('backLang.yes')); ?></a>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div>
                                                </div>
                                                <!-- / .modal -->
                                            </div>
                                        </div>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <!-- .modal -->
                                        <div id="mx-all" class="modal fade" data-backdrop="true">
                                            <div class="modal-dialog" id="animate">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"><?php echo e(trans('backLang.confirmation')); ?></h5>
                                                    </div>
                                                    <div class="modal-body text-center p-lg">
                                                        <p>
                                                            <?php echo e(trans('backLang.confirmationDeleteMsg')); ?>

                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn dark-white p-x-md"
                                                                data-dismiss="modal"><?php echo e(trans('backLang.no')); ?></button>
                                                        <button type="submit"
                                                                class="btn danger p-x-md"><?php echo e(trans('backLang.yes')); ?></button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div>
                                        </div>
                                        <!-- / .modal -->

                                        <label class="ui-check m-a-0">
                                            <input id="checkAll"
                                                   type="checkbox"><i></i> <?php echo e(trans('backLang.checkAll')); ?>

                                        </label>
                                        <div class="pull-right">
                                            <select name="action" id="action"
                                                    class="input-sm form-control w-sm inline v-middle" required>
                                                <option value=""><?php echo e(trans('backLang.bulkAction')); ?></option>
                                                <option value="order"><?php echo e(trans('backLang.saveOrder')); ?></option>
                                                <?php if(@Auth::user()->permissionsGroup->delete_status): ?>
                                                    <option value="delete"><?php echo e(trans('backLang.deleteSelected')); ?></option>
                                                <?php endif; ?>
                                            </select>
                                            <button type="submit" id="submit_all"
                                                    class="btn btn-sm white"><?php echo e(trans('backLang.apply')); ?></button>
                                            <button id="submit_show_msg" class="btn btn-sm white" data-toggle="modal"
                                                    style="display: none"
                                                    data-target="#mx-all" ui-toggle-class="bounce"
                                                    ui-target="#animate"><?php echo e(trans('backLang.apply')); ?>

                                            </button>
                                        </div>
                                    </div>

                                    <?php echo e(Form::close()); ?>

                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if($WebmasterSection->comments_status): ?>
                    <div class="tab-pane  <?php echo e($tab_4); ?>" id="tab_comments">

                        <div class="box-body">
                            <?php if(Session::has('commentST')): ?>
                                <?php if(Session::get('commentST') == "create"): ?>

                                    <div>
                                        <?php echo e(Form::open(['route'=>['topicsCommentsStore',$WebmasterSection->id,$Topics->id],'method'=>'POST', 'files' => true ])); ?>



                                        <div class="form-group row">
                                            <label for="name"
                                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.topicCommentName'); ?>

                                            </label>
                                            <div class="col-sm-10">
                                                <?php echo Form::text('name','', array('placeholder' => '','class' => 'form-control','id'=>'name','required'=>'')); ?>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email"
                                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.topicCommentEmail'); ?>

                                            </label>
                                            <div class="col-sm-10">
                                                <?php echo Form::email('email','', array('placeholder' => '','class' => 'form-control','id'=>'email','required'=>'')); ?>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="comment"
                                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.topicComment'); ?>

                                            </label>
                                            <div class="col-sm-10">
                                                <?php echo Form::textarea('comment','', array('placeholder' => '','class' => 'form-control','id'=>'comment','required'=>'','rows'=>'5')); ?>

                                            </div>
                                        </div>


                                        <div class="form-group row m-t-md">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-primary m-t"><i
                                                            class="material-icons">
                                                        &#xe31b;</i> <?php echo trans('backLang.add'); ?></button>
                                                <a href="<?php echo e(route('topicsComments',[$WebmasterSection->id,$Topics->id])); ?>"
                                                   class="btn btn-default m-t"><i class="material-icons">
                                                        &#xe5cd;</i> <?php echo trans('backLang.cancel'); ?></a>
                                            </div>
                                        </div>

                                        <?php echo e(Form::close()); ?>

                                    </div>

                                <?php endif; ?>

                                <?php if(Session::get('commentST') == "edit"): ?>
                                    <div>
                                        <?php echo e(Form::open(['route'=>['topicsCommentsUpdate',$WebmasterSection->id,$Topics->id,Session::get('Comment')->id],'method'=>'POST', 'files' => true ])); ?>



                                        <div class="form-group row">
                                            <label for="name"
                                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.topicCommentName'); ?>

                                            </label>
                                            <div class="col-sm-10">
                                                <?php echo Form::text('name',Session::get('Comment')->name, array('placeholder' => '','class' => 'form-control','id'=>'name','required'=>'')); ?>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email"
                                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.topicCommentEmail'); ?>

                                            </label>
                                            <div class="col-sm-10">
                                                <?php echo Form::email('email',Session::get('Comment')->email, array('placeholder' => '','class' => 'form-control','id'=>'email','required'=>'')); ?>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="comment"
                                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.topicComment'); ?>

                                            </label>
                                            <div class="col-sm-10">
                                                <?php echo Form::textarea('comment',Session::get('Comment')->comment, array('placeholder' => '','class' => 'form-control','id'=>'comment','required'=>'','rows'=>'5')); ?>

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="link_status"
                                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.status'); ?></label>
                                            <div class="col-sm-10">
                                                <div class="radio">
                                                    <label class="ui-check ui-check-md">
                                                        <?php echo Form::radio('status','1',(Session::get('Comment')->status==1) ? true : false, array('id' => 'status1','class'=>'has-value')); ?>

                                                        <i class="dark-white"></i>
                                                        <?php echo e(trans('backLang.active')); ?>

                                                    </label>
                                                    &nbsp; &nbsp;
                                                    <label class="ui-check ui-check-md">
                                                        <?php echo Form::radio('status','0',(Session::get('Comment')->status==0) ? true : false, array('id' => 'status2','class'=>'has-value')); ?>

                                                        <i class="dark-white"></i>
                                                        <?php echo e(trans('backLang.notActive')); ?>

                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row m-t-md">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-primary m-t"><i
                                                            class="material-icons">
                                                        &#xe31b;</i> <?php echo trans('backLang.update'); ?></button>
                                                <a href="<?php echo e(route('topicsComments',[$WebmasterSection->id,$Topics->id])); ?>"
                                                   class="btn btn-default m-t"><i class="material-icons">
                                                        &#xe5cd;</i> <?php echo trans('backLang.cancel'); ?></a>
                                            </div>
                                        </div>

                                        <?php echo e(Form::close()); ?>

                                    </div>
                                <?php endif; ?>
                            <?php else: ?>

                                <?php if(count($Topics->comments)>0): ?>
                                    <div class="row p-a">
                                        <div class="col-sm-12">
                                            <a class="btn btn-fw primary"
                                               href="<?php echo e(route("topicsCommentsCreate",[$WebmasterSection->id,$Topics->id])); ?>">
                                                <i class="material-icons">&#xe02e;</i>
                                                &nbsp; <?php echo e(trans('backLang.topicNewComment')); ?>

                                            </a>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if(count($Topics->comments) == 0): ?>
                                    <div class="row p-a">
                                        <div class="col-sm-12">
                                            <div class=" p-a text-center light ">
                                                <?php echo e(trans('backLang.noData')); ?>

                                                <br>
                                                <br>
                                                <a class="btn btn-fw primary"
                                                   href="<?php echo e(route("topicsCommentsCreate",[$WebmasterSection->id,$Topics->id])); ?>">
                                                    <i class="material-icons">&#xe02e;</i>
                                                    &nbsp; <?php echo e(trans('backLang.topicNewComment')); ?>

                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if(count($Topics->comments)>0): ?>
                                    <?php echo e(Form::open(['route'=>['topicsCommentsUpdateAll',$WebmasterSection->id,$Topics->id],'method'=>'post'])); ?>

                                    <div class="row">
                                        <table class="table table-striped  b-t">
                                            <thead>
                                            <tr>
                                                <th style="width:20px;">
                                                    <label class="ui-check m-a-0">
                                                        <input id="checkAll2" type="checkbox"><i></i>
                                                    </label>
                                                </th>
                                                <th><?php echo e(trans('backLang.topicCommentName')); ?></th>
                                                <th><?php echo e(trans('backLang.topicComment')); ?></th>
                                                <th class="text-center"
                                                    style="width:50px;"><?php echo e(trans('backLang.status')); ?></th>
                                                <th class="text-center"
                                                    style="width:200px;"><?php echo e(trans('backLang.options')); ?></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $__currentLoopData = $Topics->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><label class="ui-check m-a-0">
                                                            <input type="checkbox" name="ids[]"
                                                                   value="<?php echo e($comment->id); ?>"><i
                                                                    class="dark-white"></i>
                                                            <?php echo Form::hidden('row_ids[]',$comment->id, array('class' => 'form-control row_no')); ?>

                                                        </label>
                                                    </td>
                                                    <td>
                                                        <?php echo Form::text('row_no_'.$comment->id,$comment->row_no, array('class' => 'pull-left form-control row_no','id'=>'row_no2')); ?>

                                                        <?php echo e($comment->name); ?>

                                                        <div>
                                                            <small>
                                                                <?php echo e($comment->email); ?>

                                                            </small>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <small><?php echo e($comment->date); ?></small>
                                                        <div>
                                                            <small><?php echo e($comment->comment); ?></small>
                                                        </div>
                                                    </td>

                                                    <td class="text-center">
                                                        <i class="fa <?php echo e(($comment->status==1) ? "fa-check text-success":"fa-times text-danger"); ?> inline"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="btn btn-sm success"
                                                           href="<?php echo e(route("topicsCommentsEdit",["webmasterId"=>$WebmasterSection->id,"id"=>$Topics->id,"comment_id"=>$comment->id])); ?>">
                                                            <small><i class="material-icons">
                                                                    &#xe3c9;</i> <?php echo e(trans('backLang.edit')); ?></small>
                                                        </a>
                                                        <?php if(@Auth::user()->permissionsGroup->delete_status): ?>
                                                            <button class="btn btn-sm warning" data-toggle="modal"
                                                                    data-target="#mc-<?php echo e($comment->id); ?>"
                                                                    ui-toggle-class="bounce"
                                                                    ui-target="#animate">
                                                                <small><i class="material-icons">
                                                                        &#xe872;</i> <?php echo e(trans('backLang.delete')); ?>

                                                                </small>
                                                            </button>
                                                        <?php endif; ?>

                                                    </td>
                                                </tr>
                                                <!-- .modal -->
                                                <div id="mc-<?php echo e($comment->id); ?>" class="modal fade" data-backdrop="true">
                                                    <div class="modal-dialog" id="animate">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"><?php echo e(trans('backLang.confirmation')); ?></h5>
                                                            </div>
                                                            <div class="modal-body text-center p-lg">
                                                                <p>
                                                                    <?php echo e(trans('backLang.confirmationDeleteMsg')); ?>

                                                                    <br>
                                                                    <strong>[ <?php echo $comment->name; ?> ]</strong>
                                                                </p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn dark-white p-x-md"
                                                                        data-dismiss="modal"><?php echo e(trans('backLang.no')); ?></button>
                                                                <a href="<?php echo e(route("topicsCommentsDestroy",["webmasterId"=>$WebmasterSection->id,"id"=>$Topics->id,"comment_id"=>$comment->id])); ?>"
                                                                   class="btn danger p-x-md"><?php echo e(trans('backLang.yes')); ?></a>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div>
                                                </div>
                                                <!-- / .modal -->
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 hidden-xs">
                                            <!-- .modal -->
                                            <div id="mc-all" class="modal fade" data-backdrop="true">
                                                <div class="modal-dialog" id="animate">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"><?php echo e(trans('backLang.confirmation')); ?></h5>
                                                        </div>
                                                        <div class="modal-body text-center p-lg">
                                                            <p>
                                                                <?php echo e(trans('backLang.confirmationDeleteMsg')); ?>

                                                            </p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn dark-white p-x-md"
                                                                    data-dismiss="modal"><?php echo e(trans('backLang.no')); ?></button>
                                                            <button type="submit"
                                                                    class="btn danger p-x-md"><?php echo e(trans('backLang.yes')); ?></button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div>
                                            </div>
                                            <!-- / .modal -->

                                            <select name="action" id="action2"
                                                    class="input-sm form-control w-sm inline v-middle" required>
                                                <option value=""><?php echo e(trans('backLang.bulkAction')); ?></option>
                                                <option value="order"><?php echo e(trans('backLang.saveOrder')); ?></option>
                                                <option value="activate"><?php echo e(trans('backLang.activeSelected')); ?></option>
                                                <option value="block"><?php echo e(trans('backLang.blockSelected')); ?></option>
                                                <?php if(@Auth::user()->permissionsGroup->delete_status): ?>
                                                    <option value="delete"><?php echo e(trans('backLang.deleteSelected')); ?></option>
                                                <?php endif; ?>
                                            </select>
                                            <button type="submit" id="submit_all2"
                                                    class="btn btn-sm white"><?php echo e(trans('backLang.apply')); ?></button>
                                            <button id="submit_show_msg2" class="btn btn-sm white" data-toggle="modal"
                                                    style="display: none"
                                                    data-target="#mc-all" ui-toggle-class="bounce"
                                                    ui-target="#animate"><?php echo e(trans('backLang.apply')); ?>

                                            </button>
                                        </div>
                                    </div>
                                    <?php echo e(Form::close()); ?>

                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>


                <?php if($WebmasterSection->maps_status): ?>
                    <div class="tab-pane  <?php echo e($tab_5); ?>" id="tab_maps">

                        <div class="box-body">

                            <div class="row">
                                <?php if(Session::has('mapST')): ?>

                                    <?php if(Session::get('mapST') == "edit"): ?>
                                        <div class="col-sm-offset-2 col-sm-8">
                                            <br>
                                            <?php echo e(Form::open(['route'=>['topicsMapsUpdate',$WebmasterSection->id,$Topics->id,Session::get('Map')->id],'method'=>'POST', 'files' => true ])); ?>



                                            <div class="form-group row">
                                                <label for="longitude"
                                                       class="col-sm-3 form-control-label"><?php echo trans('backLang.topicMapLocation'); ?>

                                                </label>
                                                <div class="col-sm-5">
                                                    <?php echo Form::text('longitude',Session::get('Map')->longitude, array('placeholder' => '','class' => 'form-control','id'=>'longitude','required'=>'')); ?>

                                                </div>
                                                <div class="col-sm-4">
                                                    <?php echo Form::text('latitude',Session::get('Map')->latitude, array('placeholder' => '','class' => 'form-control','id'=>'latitude','required'=>'')); ?>

                                                </div>
                                            </div>


                                            <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                                                <div class="form-group row">
                                                    <label for="title_ar"
                                                           class="col-sm-3 form-control-label"><?php echo trans('backLang.topicMapTitle'); ?>

                                                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.arabicBox'); ?><?php endif; ?>
                                                    </label>
                                                    <div class="col-sm-9">
                                                        <?php echo Form::text('title_ar',Session::get('Map')->title_ar, array('placeholder' => '','class' => 'form-control','id'=>'title_ar', 'dir'=>trans('backLang.rtl'))); ?>

                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                                <div class="form-group row">
                                                    <label for="title_en"
                                                           class="col-sm-3 form-control-label"><?php echo trans('backLang.topicMapTitle'); ?>

                                                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.englishBox'); ?><?php endif; ?>
                                                    </label>
                                                    <div class="col-sm-9">
                                                        <?php echo Form::text('title_en',Session::get('Map')->title_en, array('placeholder' => '','class' => 'form-control','id'=>'title_en', 'dir'=>trans('backLang.ltr'))); ?>

                                                    </div>
                                                </div>
                                            <?php endif; ?>

                                            <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                                                <div class="form-group row">
                                                    <label for="details_ar"
                                                           class="col-sm-3 form-control-label"><?php echo trans('backLang.topicMapDetails'); ?>

                                                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.arabicBox'); ?><?php endif; ?>
                                                    </label>
                                                    <div class="col-sm-9">
                                                        <?php echo Form::textarea('details_ar',Session::get('Map')->details_ar, array('placeholder' => '','class' => 'form-control','id'=>'details_ar','rows'=>'3', 'dir'=>trans('backLang.rtl'))); ?>

                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                                <div class="form-group row">
                                                    <label for="details_en"
                                                           class="col-sm-3 form-control-label"><?php echo trans('backLang.topicMapDetails'); ?>

                                                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.englishBox'); ?><?php endif; ?>
                                                    </label>
                                                    <div class="col-sm-9">
                                                        <?php echo Form::textarea('details_en',Session::get('Map')->details_en, array('placeholder' => '','class' => 'form-control','id'=>'details_en','rows'=>'3', 'dir'=>trans('backLang.ltr'))); ?>

                                                    </div>
                                                </div>
                                            <?php endif; ?>

                                            <div class="form-group row">
                                                <label for="link_status"
                                                       class="col-sm-3 form-control-label"><?php echo trans('backLang.topicMapIcon'); ?></label>
                                                <div class="col-sm-9">
                                                    <div class="radio">
                                                        <label class="ui-check ui-check-md">
                                                            <?php echo Form::radio('icon','0',true, array('id' => 'status1','class'=>'has-value')); ?>

                                                            <i class="dark-white"></i>
                                                            <img src="<?php echo e(URL::to('backEnd/assets/images/marker_0.png')); ?>"
                                                                 style="width: 25px;">
                                                        </label>
                                                        <label class="ui-check ui-check-md">
                                                            <?php echo Form::radio('icon','1',(Session::get('Map')->icon==1) ? true : false, array('id' => 'status2','class'=>'has-value')); ?>

                                                            <i class="dark-white"></i>
                                                            <img src="<?php echo e(URL::to('backEnd/assets/images/marker_1.png')); ?>"
                                                                 style="width: 25px;">
                                                        </label>
                                                        <label class="ui-check ui-check-md">
                                                            <?php echo Form::radio('icon','2',(Session::get('Map')->icon==2) ? true : false, array('id' => 'status2','class'=>'has-value')); ?>

                                                            <i class="dark-white"></i>
                                                            <img src="<?php echo e(URL::to('backEnd/assets/images/marker_2.png')); ?>"
                                                                 style="width: 25px;">
                                                        </label>
                                                        <label class="ui-check ui-check-md">
                                                            <?php echo Form::radio('icon','3',(Session::get('Map')->icon==3) ? true : false, array('id' => 'status2','class'=>'has-value')); ?>

                                                            <i class="dark-white"></i>
                                                            <img src="<?php echo e(URL::to('backEnd/assets/images/marker_3.png')); ?>"
                                                                 style="width: 25px;">
                                                        </label>
                                                        <label class="ui-check ui-check-md">
                                                            <?php echo Form::radio('icon','4',(Session::get('Map')->icon==4) ? true : false, array('id' => 'status2','class'=>'has-value')); ?>

                                                            <i class="dark-white"></i>
                                                            <img src="<?php echo e(URL::to('backEnd/assets/images/marker_4.png')); ?>"
                                                                 style="width: 25px;">
                                                        </label>
                                                        <label class="ui-check ui-check-md">
                                                            <?php echo Form::radio('icon','5',(Session::get('Map')->icon==5) ? true : false, array('id' => 'status2','class'=>'has-value')); ?>

                                                            <i class="dark-white"></i>
                                                            <img src="<?php echo e(URL::to('backEnd/assets/images/marker_5.png')); ?>"
                                                                 style="width: 25px;">
                                                        </label>
                                                        <label class="ui-check ui-check-md">
                                                            <?php echo Form::radio('icon','6',(Session::get('Map')->icon==6) ? true : false, array('id' => 'status2','class'=>'has-value')); ?>

                                                            <i class="dark-white"></i>
                                                            <img src="<?php echo e(URL::to('backEnd/assets/images/marker_6.png')); ?>"
                                                                 style="width: 25px;">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="link_status"
                                                       class="col-sm-3 form-control-label"><?php echo trans('backLang.status'); ?></label>
                                                <div class="col-sm-9">
                                                    <div class="radio">
                                                        <label class="ui-check ui-check-md">
                                                            <?php echo Form::radio('status','1',(Session::get('Map')->status==1) ? true : false, array('id' => 'status1','class'=>'has-value')); ?>

                                                            <i class="dark-white"></i>
                                                            <?php echo e(trans('backLang.active')); ?>

                                                        </label>
                                                        &nbsp; &nbsp;
                                                        <label class="ui-check ui-check-md">
                                                            <?php echo Form::radio('status','0',(Session::get('Map')->status==0) ? true : false, array('id' => 'status2','class'=>'has-value')); ?>

                                                            <i class="dark-white"></i>
                                                            <?php echo e(trans('backLang.notActive')); ?>

                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row m-t-md">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                    <button type="submit" class="btn btn-primary m-t"><i
                                                                class="material-icons">
                                                            &#xe31b;</i> <?php echo trans('backLang.update'); ?></button>
                                                    <a href="<?php echo e(route('topicsMaps',[$WebmasterSection->id,$Topics->id])); ?>"
                                                       class="btn btn-default m-t"><i class="material-icons">
                                                            &#xe5cd;</i> <?php echo trans('backLang.cancel'); ?></a>
                                                </div>
                                            </div>

                                            <?php echo e(Form::close()); ?>

                                        </div>
                                    <?php endif; ?>

                                <?php else: ?>
                                    <div>
                                        <div id="mmn-<?php echo e($Topics->id); ?>" class="modal fade"
                                             data-backdrop="true">
                                            <div class="modal-dialog" id="animate">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"><?php echo e(trans('backLang.topicNewMap')); ?></h5>
                                                    </div>
                                                    <?php echo e(Form::open(['route'=>['topicsMapsStore',$WebmasterSection->id,$Topics->id],'method'=>'POST', 'files' => true ])); ?>

                                                    <div class="modal-body p-lg">
                                                        <div>

                                                            <div class="form-group row">
                                                                <label for="longitude"
                                                                       class="col-sm-3 form-control-label"><?php echo trans('backLang.topicMapLocation'); ?>

                                                                </label>
                                                                <div class="col-sm-5">
                                                                    <?php echo Form::text('longitude','', array('placeholder' => '','class' => 'form-control','id'=>'longitude','required'=>'')); ?>

                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <?php echo Form::text('latitude','', array('placeholder' => '','class' => 'form-control','id'=>'latitude','required'=>'')); ?>

                                                                </div>
                                                            </div>


                                                            <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                                                                <div class="form-group row">
                                                                    <label for="title_ar"
                                                                           class="col-sm-3 form-control-label"><?php echo trans('backLang.topicMapTitle'); ?>

                                                                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.arabicBox'); ?><?php endif; ?>
                                                                    </label>
                                                                    <div class="col-sm-9">
                                                                        <?php echo Form::text('title_ar','', array('placeholder' => '','class' => 'form-control','id'=>'title_ar', 'dir'=>trans('backLang.rtl'))); ?>

                                                                    </div>
                                                                </div>
                                                            <?php endif; ?>
                                                            <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                                                <div class="form-group row">
                                                                    <label for="title_en"
                                                                           class="col-sm-3 form-control-label"><?php echo trans('backLang.topicMapTitle'); ?>

                                                                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.englishBox'); ?><?php endif; ?>
                                                                    </label>
                                                                    <div class="col-sm-9">
                                                                        <?php echo Form::text('title_en','', array('placeholder' => '','class' => 'form-control','id'=>'title_en', 'dir'=>trans('backLang.ltr'))); ?>

                                                                    </div>
                                                                </div>
                                                            <?php endif; ?>

                                                            <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                                                                <div class="form-group row">
                                                                    <label for="details_ar"
                                                                           class="col-sm-3 form-control-label"><?php echo trans('backLang.topicMapDetails'); ?>

                                                                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.arabicBox'); ?><?php endif; ?>
                                                                    </label>
                                                                    <div class="col-sm-9">
                                                                        <?php echo Form::textarea('details_ar','', array('placeholder' => '','class' => 'form-control','id'=>'details_ar','rows'=>'3', 'dir'=>trans('backLang.rtl'))); ?>

                                                                    </div>
                                                                </div>
                                                            <?php endif; ?>
                                                            <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                                                <div class="form-group row">
                                                                    <label for="details_en"
                                                                           class="col-sm-3 form-control-label"><?php echo trans('backLang.topicMapDetails'); ?>

                                                                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.englishBox'); ?><?php endif; ?>
                                                                    </label>
                                                                    <div class="col-sm-9">
                                                                        <?php echo Form::textarea('details_en','', array('placeholder' => '','class' => 'form-control','id'=>'details_en','rows'=>'3', 'dir'=>trans('backLang.ltr'))); ?>

                                                                    </div>
                                                                </div>
                                                            <?php endif; ?>


                                                            <div class="form-group row">
                                                                <label for="link_status"
                                                                       class="col-sm-3 form-control-label"><?php echo trans('backLang.topicMapIcon'); ?></label>
                                                                <div class="col-sm-9">
                                                                    <div class="radio">
                                                                        <label class="ui-check ui-check-md">
                                                                            <?php echo Form::radio('icon','0',true, array('id' => 'status1','class'=>'has-value')); ?>

                                                                            <i class="dark-white"></i>
                                                                            <img src="<?php echo e(URL::to('backEnd/assets/images/marker_0.png')); ?>"
                                                                                 style="width: 25px;">
                                                                        </label>
                                                                        <label class="ui-check ui-check-md">
                                                                            <?php echo Form::radio('icon','1',false, array('id' => 'status2','class'=>'has-value')); ?>

                                                                            <i class="dark-white"></i>
                                                                            <img src="<?php echo e(URL::to('backEnd/assets/images/marker_1.png')); ?>"
                                                                                 style="width: 25px;">
                                                                        </label>
                                                                        <label class="ui-check ui-check-md">
                                                                            <?php echo Form::radio('icon','2',false, array('id' => 'status2','class'=>'has-value')); ?>

                                                                            <i class="dark-white"></i>
                                                                            <img src="<?php echo e(URL::to('backEnd/assets/images/marker_2.png')); ?>"
                                                                                 style="width: 25px;">
                                                                        </label>
                                                                        <label class="ui-check ui-check-md">
                                                                            <?php echo Form::radio('icon','3',false, array('id' => 'status2','class'=>'has-value')); ?>

                                                                            <i class="dark-white"></i>
                                                                            <img src="<?php echo e(URL::to('backEnd/assets/images/marker_3.png')); ?>"
                                                                                 style="width: 25px;">
                                                                        </label>
                                                                        <label class="ui-check ui-check-md">
                                                                            <?php echo Form::radio('icon','4',false, array('id' => 'status2','class'=>'has-value')); ?>

                                                                            <i class="dark-white"></i>
                                                                            <img src="<?php echo e(URL::to('backEnd/assets/images/marker_4.png')); ?>"
                                                                                 style="width: 25px;">
                                                                        </label>
                                                                        <label class="ui-check ui-check-md">
                                                                            <?php echo Form::radio('icon','5',false, array('id' => 'status2','class'=>'has-value')); ?>

                                                                            <i class="dark-white"></i>
                                                                            <img src="<?php echo e(URL::to('backEnd/assets/images/marker_5.png')); ?>"
                                                                                 style="width: 25px;">
                                                                        </label>
                                                                        <label class="ui-check ui-check-md">
                                                                            <?php echo Form::radio('icon','6',false, array('id' => 'status2','class'=>'has-value')); ?>

                                                                            <i class="dark-white"></i>
                                                                            <img src="<?php echo e(URL::to('backEnd/assets/images/marker_6.png')); ?>"
                                                                                 style="width: 25px;">
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button"
                                                                class="btn dark-white p-x-md"
                                                                data-dismiss="modal"><?php echo e(trans('backLang.cancel')); ?></button>
                                                        <button type="submit"
                                                                class="btn btn-primary p-x-md"><?php echo e(trans('backLang.add')); ?></button>
                                                    </div>
                                                    <?php echo e(Form::close()); ?>

                                                </div><!-- /.modal-content -->
                                            </div>
                                        </div>
                                        <div class="row p-a" style="display: none">
                                            <div class="col-sm-12">
                                                <button class="btn btn-fw primary" data-toggle="modal"
                                                        data-target="#mmn-<?php echo e($Topics->id); ?>"
                                                        ui-toggle-class="bounce" id="mapNew"
                                                        ui-target="#animate">
                                                    <i class="material-icons">&#xe02e;</i>
                                                    &nbsp; <?php echo e(trans('backLang.topicNewMap')); ?>

                                                </button>
                                            </div>
                                        </div>
                                        <?php if(count($Topics->maps) == 0): ?>
                                            <div class="row p-a" id="mapDivBtns">
                                                <div class="col-sm-12">
                                                    <div class=" p-a text-center light ">
                                                        <?php echo e(trans('backLang.noData')); ?>

                                                        <br>
                                                        <br>
                                                        <a class="btn btn-fw primary" id="mapDivNew">
                                                            <i class="material-icons">&#xe02e;</i>
                                                            &nbsp; <?php echo e(trans('backLang.topicNewMap')); ?>

                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <div class="col-sm-5">
                                            <?php if(count($Topics->maps)>0): ?>
                                                <?php echo e(Form::open(['route'=>['topicsMapsUpdateAll',$WebmasterSection->id,$Topics->id],'method'=>'post'])); ?>

                                                <div class="row">
                                                    <table class="table table-striped  b-t">
                                                        <thead>
                                                        <tr>
                                                            <th style="width:20px;">
                                                                <label class="ui-check m-a-0">
                                                                    <input id="checkAll3" type="checkbox"><i></i>
                                                                </label>
                                                            </th>
                                                            <th><?php echo e(trans('backLang.topicCommentName')); ?></th>
                                                            <th class="text-center"
                                                                style="width:30px;"><?php echo e(trans('backLang.status')); ?></th>
                                                            <th class="text-center"
                                                                style="width:110px;"><?php echo e(trans('backLang.options')); ?></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $title_var = "title_" . trans('backLang.boxCode');
                                                        $title_var2 = "title_" . trans('backLang.boxCodeOther');
                                                        ?>
                                                        <?php $__currentLoopData = $Topics->maps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $map): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php
                                                            if ($map->$title_var != "") {
                                                                $title = $map->$title_var;
                                                            } else {
                                                                $title = $map->$title_var2;
                                                            }
                                                            ?>
                                                            <tr>
                                                                <td><label class="ui-check m-a-0">
                                                                        <input type="checkbox" name="ids[]"
                                                                               value="<?php echo e($map->id); ?>"><i
                                                                                class="dark-white"></i>
                                                                        <?php echo Form::hidden('row_ids[]',$map->id, array('class' => 'form-control row_no')); ?>

                                                                    </label>
                                                                </td>
                                                                <td>
                                                                    <?php echo Form::text('row_no_'.$map->id,$map->row_no, array('class' => 'pull-left form-control row_no','id'=>'row_no3')); ?>

                                                                    <img src="<?php echo e(URL::to('backEnd/assets/images/marker_').$map->icon.".png"); ?>"
                                                                         style="width: 20px;">
                                                                    <?php if($title !=""): ?>
                                                                        <small><?php echo $title; ?></small>
                                                                    <?php else: ?>
                                                                        <small>
                                                                            <?php echo $map->longitude; ?>

                                                                        </small>
                                                                    <?php endif; ?>
                                                                </td>

                                                                <td class="text-center">
                                                                    <i class="fa <?php echo e(($map->status==1) ? "fa-check text-success":"fa-times text-danger"); ?> inline"></i>
                                                                </td>
                                                                <td class="text-center">
                                                                    <a class="btn btn-sm success"
                                                                       href="<?php echo e(route("topicsMapsEdit",["webmasterId"=>$WebmasterSection->id,"id"=>$Topics->id,"map_id"=>$map->id])); ?>">
                                                                        <small><i class="material-icons">
                                                                                &#xe3c9;</i></small>
                                                                    </a>
                                                                    <?php if(@Auth::user()->permissionsGroup->delete_status): ?>
                                                                        <button class="btn btn-sm warning"
                                                                                data-toggle="modal"
                                                                                data-target="#mm-<?php echo e($map->id); ?>"
                                                                                ui-toggle-class="bounce"
                                                                                ui-target="#animate">
                                                                            <small><i class="material-icons">
                                                                                    &#xe872;</i></small>
                                                                        </button>
                                                                    <?php endif; ?>

                                                                </td>
                                                            </tr>
                                                            <!-- .modal -->
                                                            <div id="mm-<?php echo e($map->id); ?>" class="modal fade"
                                                                 data-backdrop="true">
                                                                <div class="modal-dialog" id="animate">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"><?php echo e(trans('backLang.confirmation')); ?></h5>
                                                                        </div>
                                                                        <div class="modal-body text-center p-lg">
                                                                            <p>
                                                                                <?php echo e(trans('backLang.confirmationDeleteMsg')); ?>

                                                                                <br>
                                                                                <strong><?php echo $title; ?></strong>
                                                                                <br>
                                                                                <small>[
                                                                                    <?php echo $map->longitude; ?>

                                                                                    , <?php echo $map->latitude; ?>

                                                                                    ]
                                                                                </small>

                                                                            </p>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                    class="btn dark-white p-x-md"
                                                                                    data-dismiss="modal"><?php echo e(trans('backLang.no')); ?></button>
                                                                            <a href="<?php echo e(route("topicsMapsDestroy",["webmasterId"=>$WebmasterSection->id,"id"=>$Topics->id,"map_id"=>$map->id])); ?>"
                                                                               class="btn danger p-x-md"><?php echo e(trans('backLang.yes')); ?></a>
                                                                        </div>
                                                                    </div><!-- /.modal-content -->
                                                                </div>
                                                            </div>
                                                            <!-- / .modal -->
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                        </tbody>
                                                    </table>

                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 hidden-xs">
                                                        <!-- .modal -->
                                                        <div id="mm-all" class="modal fade" data-backdrop="true">
                                                            <div class="modal-dialog" id="animate">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"><?php echo e(trans('backLang.confirmation')); ?></h5>
                                                                    </div>
                                                                    <div class="modal-body text-center p-lg">
                                                                        <p>
                                                                            <?php echo e(trans('backLang.confirmationDeleteMsg')); ?>

                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                                class="btn dark-white p-x-md"
                                                                                data-dismiss="modal"><?php echo e(trans('backLang.no')); ?></button>
                                                                        <button type="submit"
                                                                                class="btn danger p-x-md"><?php echo e(trans('backLang.yes')); ?></button>
                                                                    </div>
                                                                </div><!-- /.modal-content -->
                                                            </div>
                                                        </div>
                                                        <!-- / .modal -->

                                                        <select name="action" id="action3"
                                                                class="input-sm form-control w-sm inline v-middle"
                                                                required>
                                                            <option value=""><?php echo e(trans('backLang.bulkAction')); ?></option>
                                                            <option value="order"><?php echo e(trans('backLang.saveOrder')); ?></option>
                                                            <option value="activate"><?php echo e(trans('backLang.activeSelected')); ?></option>
                                                            <option value="block"><?php echo e(trans('backLang.blockSelected')); ?></option>
                                                            <?php if(@Auth::user()->permissionsGroup->delete_status): ?>
                                                                <option value="delete"><?php echo e(trans('backLang.deleteSelected')); ?></option>
                                                            <?php endif; ?>
                                                        </select>
                                                        <button type="submit" id="submit_all3"
                                                                class="btn btn-sm white"><?php echo e(trans('backLang.apply')); ?></button>
                                                        <button id="submit_show_msg3" class="btn btn-sm white"
                                                                data-toggle="modal"
                                                                style="display: none"
                                                                data-target="#mm-all" ui-toggle-class="bounce"
                                                                ui-target="#animate"><?php echo e(trans('backLang.apply')); ?>

                                                        </button>
                                                    </div>
                                                </div>
                                                <?php echo e(Form::close()); ?>

                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <?php
                                    $map_dsp = "style='display:none'";
                                    $map_wds = "12";
                                    if (count($Topics->maps) > 0) {
                                        $map_dsp = "";
                                        $map_wds = "7";
                                    }
                                    ?>
                                    <div id="mapDiv" class="col-sm-<?php echo e($map_wds); ?>" <?php echo $map_dsp; ?>>

                                        <br>
                                        <div style="margin-bottom: 3px;">
                                            <small>
                                                <?php echo trans('backLang.topicMapClick'); ?> ,
                                                <a data-toggle="modal"
                                                   data-target="#mmn-<?php echo e($Topics->id); ?>"
                                                   ui-toggle-class="bounce"
                                                   ui-target="#animate">
                                                    <u>
                                                        <?php echo trans('backLang.topicMapORClick'); ?>

                                                    </u>
                                                </a>
                                            </small>
                                        </div>
                                        <div id="map" style="height: 400px"></div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        </div>
                    </div>
                <?php endif; ?>

                <?php if(Helper::GeneralWebmasterSettings("seo_status")): ?>
                    <div class="tab-pane  <?php echo e($tab_2); ?>" id="tab_seo">

                        <div class="box-body">
                            <?php echo e(Form::open(['route'=>['topicsSEOUpdate',"webmasterId"=>$WebmasterSection->id,"id"=>$Topics->id],'method'=>'POST', 'files' => true])); ?>


                            <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                                <div class="form-group row">
                                    <label for="seo_title_ar"
                                           class="col-sm-2 form-control-label"><?php echo trans('backLang.topicSEOTitle'); ?>

                                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.arabicBox'); ?><?php endif; ?>
                                    </label>
                                    <div class="col-sm-10">
                                        <?php echo Form::text('seo_title_ar',$Topics->seo_title_ar, array('placeholder' => '','class' => 'form-control','id'=>'title_ar','maxlength'=>'65', 'dir'=>trans('backLang.rtl'))); ?>

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
                                        <?php echo Form::text('seo_title_en',$Topics->seo_title_en, array('placeholder' => '','class' => 'form-control','id'=>'title_en','maxlength'=>'65', 'dir'=>trans('backLang.ltr'))); ?>

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
                                        <?php echo Form::textarea('seo_description_ar',$Topics->seo_description_ar, array('placeholder' => trans('backLang.metaDescription'),'class' => 'form-control','id'=>'seo_description_ar','maxlength'=>'165', 'dir'=>trans('backLang.rtl'),'rows'=>'2')); ?>

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
                                        <?php echo Form::textarea('seo_description_en',$Topics->seo_description_en, array('placeholder' => trans('backLang.metaDescription'),'class' => 'form-control','id'=>'seo_description_en','maxlength'=>'165', 'dir'=>trans('backLang.ltr'),'rows'=>'2')); ?>

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
                                        <?php echo Form::textarea('seo_keywords_ar',$Topics->seo_keywords_ar, array('placeholder' => trans('backLang.metaKeywords'),'class' => 'form-control','id'=>'seo_keywords_ar', 'dir'=>trans('backLang.rtl'),'rows'=>'2')); ?>

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
                                        <?php echo Form::textarea('seo_keywords_en',$Topics->seo_keywords_en, array('placeholder' => trans('backLang.metaKeywords'),'class' => 'form-control','id'=>'seo_keywords_en', 'dir'=>trans('backLang.ltr'),'rows'=>'2')); ?>

                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="form-group row m-t-md">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary m-t"><i class="material-icons">
                                            &#xe31b;</i> <?php echo trans('backLang.update'); ?></button>
                                    <a href="<?php echo e(route('topics',$WebmasterSection->id)); ?>"
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
    <script type="text/javascript">
        $("#checkAll").click(function () {
            $('input:checkbox').not(this).prop('checked', this.checked);
        });
        $("#action").change(function () {
            if (this.value == "delete") {
                $("#submit_all").css("display", "none");
                $("#submit_show_msg").css("display", "inline-block");
            } else {
                $("#submit_all").css("display", "inline-block");
                $("#submit_show_msg").css("display", "none");
            }
        });

        $("#checkAll2").click(function () {
            $('input:checkbox').not(this).prop('checked', this.checked);
        });
        $("#action2").change(function () {
            if (this.value == "delete") {
                $("#submit_all2").css("display", "none");
                $("#submit_show_msg2").css("display", "inline-block");
            } else {
                $("#submit_all2").css("display", "inline-block");
                $("#submit_show_msg2").css("display", "none");
            }
        });

        $("#checkAll3").click(function () {
            $('input:checkbox').not(this).prop('checked', this.checked);
        });
        $("#action3").change(function () {
            if (this.value == "delete") {
                $("#submit_all3").css("display", "none");
                $("#submit_show_msg3").css("display", "inline-block");
            } else {
                $("#submit_all3").css("display", "inline-block");
                $("#submit_show_msg3").css("display", "none");
            }
        });

        $("#mapDivNew").click(function () {
            $("#mapDiv").css("display", "block");
            $("#mapDivBtns").css("display", "none");
        });

    </script>
    <?php if($WebmasterSection->maps_status): ?>
        <script type="text/javascript"
                src="http://maps.google.com/maps/api/js?key=AIzaSyAgzruFTTvea0LEmw_jAqknqskKDuJK7dM&language=<?php echo e(App::getLocale()); ?>"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                // var iconURLPrefix = 'http://maps.google.com/mapfiles/ms/icons/';
                var iconURLPrefix = "<?php echo e(URL::to('backEnd/assets/images/')."/"); ?>";
                var icons = [
                    iconURLPrefix + 'marker_0.png',
                    iconURLPrefix + 'marker_1.png',
                    iconURLPrefix + 'marker_2.png',
                    iconURLPrefix + 'marker_3.png',
                    iconURLPrefix + 'marker_4.png',
                    iconURLPrefix + 'marker_5.png',
                    iconURLPrefix + 'marker_6.png'
                ]

                var map = new google.maps.Map($('#map')[0], {
                    zoom: 7,
                    <?php
                            if(count($Topics->maps) > 0){
                            ?>
                    center: new google.maps.LatLng(<?php echo $Topics->maps[0]->longitude; ?>, <?php echo $Topics->maps[0]->latitude; ?>),
                    <?php
                            }else{
                            ?>
                    center: new google.maps.LatLng(31.012773903012743, 30.208982467651367),
                    <?php
                            }
                            ?>
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                });

                        <?php
                        $title_var = "title_" . trans('backLang.boxCode');
                        $title_var2 = "title_" . trans('backLang.boxCodeOther');
                        if(count($Topics->maps) > 0){
                        foreach($Topics->maps as $map){
                        if ($map->$title_var != "") {
                            $title = $map->$title_var;
                        } else {
                            $title = $map->$title_var2;
                        }
                        ?>
                var latlng1 = new google.maps.LatLng(<?php echo $map->longitude; ?>, <?php echo $map->latitude; ?>);
                var marker = new google.maps.Marker({
                    position: latlng1,
                    icon: icons[<?php echo $map->icon; ?>],
                    title: "<?php echo $title; ?>"
                });
                marker.setMap(map);

                        <?php
                        }
                        }
                        ?>
                var geocoder = new google.maps.Geocoder();
                google.maps.event.addListener(map, 'click', function (e) {
                    var marker = new google.maps.Marker({
                        position: e["latLng"],
                        icon: icons[Math.floor(Math.random() * (6 - 0 + 1) + 0)],
                        title: "New Map"
                    });

                    geocoder.geocode({
                        'latLng': e.latLng
                    }, function (results, status) {
                        if (status == google.maps.GeocoderStatus.OK) {
                            if (results[0]) {
                                <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                                $("#details_ar").val(results[0].formatted_address);
                                <?php endif; ?>
                                <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                $("#details_en").val(results[0].formatted_address);
                                <?php endif; ?>

                            }
                        }
                    });

                    marker.setMap(map);
                    $("#longitude").val(e.latLng.lat());
                    $("#latitude").val(e.latLng.lng());
                    $("#mapNew").click()
                });


                $("#mapTabLink").click(function () {
                    setTimeout(function () {
                        google.maps.event.trigger(map, 'resize');
                    }, 1000);
                });
                $("#mapDivNew").click(function () {
                    google.maps.event.trigger(map, 'resize');
                });


            });
        </script>
    <?php endif; ?>
    <script src="<?php echo e(URL::to("backEnd/libs/js/iconpicker/fontawesome-iconpicker.js")); ?>"></script>
    <script>
        $(function () {
            $('.icp-auto').iconpicker({placement: '<?php echo e((trans('backLang.direction')=="rtl")?"topLeft":"topRight"); ?>'});
        });
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backEnd.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>