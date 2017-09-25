<?php $__env->startSection('content'); ?>
    <?php
    $title_var = "title_" . trans('backLang.boxCode');
    $title_var2 = "title_" . trans('backLang.boxCodeOther');
    $details_var = "details_" . trans('backLang.boxCode');
    $details_var2 = "details_" . trans('backLang.boxCodeOther');
    if ($Topic->$title_var != "") {
        $title = $Topic->$title_var;
    } else {
        $title = $Topic->$title_var2;
    }
    if ($Topic->$details_var != "") {
        $details = $details_var;
    } else {
        $details = $details_var2;
    }
    $section = "";
    try {
        if ($Topic->section->$title_var != "") {
            $section = $Topic->section->$title_var;
        } else {
            $section = $Topic->section->$title_var2;
        }
    } catch (Exception $e) {
        $section = "";
    }
    ?>
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo e(route('Home')); ?>"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i>
                        </li>
                        <li class="active"><?php echo e($title); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <article>
                        <?php if($WebmasterSection->type==2 && $Topic->video_file!=""): ?>
                            
                            <div class="post-video">
                                <div class="video-container">
                                    <?php if($Topic->video_type ==1): ?>
                                        <?php
                                        $Youtube_id = Helper::Get_youtube_video_id($Topic->video_file);
                                        ?>
                                        <?php if($Youtube_id !=""): ?>
                                            
                                            <iframe allowfullscreen
                                                    src="https://www.youtube.com/embed/<?php echo e($Youtube_id); ?>">
                                            </iframe>
                                        <?php endif; ?>
                                    <?php elseif($Topic->video_type ==2): ?>
                                        <?php
                                        $Vimeo_id = Helper::Get_vimeo_video_id($Topic->video_file);
                                        ?>
                                        <?php if($Vimeo_id !=""): ?>
                                            
                                            <iframe allowfullscreen
                                                    src="http://player.vimeo.com/video/<?php echo e($Vimeo_id); ?>?title=0&amp;byline=0">
                                            </iframe>
                                        <?php endif; ?>

                                    <?php else: ?>
                                        <video width="100%" height="300" controls>
                                            <source src="<?php echo e(URL::to('uploads/topics/'.$Topic->video_file)); ?>"
                                                    type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    <?php endif; ?>


                                </div>
                            </div>
                        <?php elseif($WebmasterSection->type==3 && $Topic->audio_file!=""): ?>
                            
                            <div class="post-video">
                                <div class="video-container">
                                    <audio controls>
                                        <source src="<?php echo e(URL::to('uploads/topics/'.$Topic->audio_file)); ?>"
                                                type="audio/mpeg">
                                        Your browser does not support the audio element.
                                    </audio>

                                </div>
                            </div>

                        <?php elseif(count($Topic->photos)>0): ?>
                            
                            <div class="post-slider">
                                <!-- start flexslider -->
                                <div id="post-slider" class="flexslider">
                                    <ul class="slides">
                                        <?php if($Topic->photo_file !=""): ?>
                                            <li>
                                                <img src="<?php echo e(URL::to('uploads/topics/'.$Topic->photo_file)); ?>"
                                                     alt="<?php echo e($title); ?>"/>
                                            </li>
                                        <?php endif; ?>
                                        <?php $__currentLoopData = $Topic->photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <img src="<?php echo e(URL::to('uploads/topics/'.$photo->file)); ?>"
                                                     alt="<?php echo e($photo->title); ?>"/>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </ul>
                                </div>
                                <!-- end flexslider -->
                            </div>

                        <?php else: ?>
                            
                            <div class="post-image">
                                <?php if($Topic->photo_file !=""): ?>
                                    <img src="<?php echo e(URL::to('uploads/topics/'.$Topic->photo_file)); ?>"
                                         alt="<?php echo e($title); ?>"/>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <?php echo $Topic->$details; ?>

                    </article>
                </div>
            </div>
            <?php if(count($Topic->maps) >0): ?>
                <div class="row">
                    <div class="col-md-12">
                        <h4><i class="fa fa-map-marker"></i> <?php echo e(trans('frontLang.locationMap')); ?></h4>
                        <div id="google-map"></div>
                        <br>
                    </div>
                </div>
            <?php endif; ?>
            <div class="row">

                <div class="col-lg-6">
                    <h4 id="contact_div"><i class="fa fa-envelope"></i> <?php echo e(trans('frontLang.getInTouch')); ?></h4>

                    <div id="sendmessage"><i class="fa fa-check-circle"></i>
                        &nbsp;<?php echo e(trans('frontLang.youMessageSent')); ?></div>
                    <div id="errormessage"><?php echo e(trans('frontLang.youMessageNotSent')); ?></div>

                    <?php echo e(Form::open(['route'=>['contactPage'],'method'=>'POST','class'=>'contactForm'])); ?>

                    <div class="form-group">
                        <?php echo Form::text('contact_name',"", array('placeholder' => trans('frontLang.yourName'),'class' => 'form-control','id'=>'name', 'data-msg'=> trans('frontLang.enterYourName'),'data-rule'=>'minlen:4')); ?>

                        <div class="alert alert-warning validation"></div>
                    </div>
                    <div class="form-group">
                        <?php echo Form::email('contact_email',"", array('placeholder' => trans('frontLang.yourEmail'),'class' => 'form-control','id'=>'email', 'data-msg'=> trans('frontLang.enterYourEmail'),'data-rule'=>'email')); ?>

                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <?php echo Form::text('contact_phone',"", array('placeholder' => trans('frontLang.phone'),'class' => 'form-control','id'=>'phone', 'data-msg'=> trans('frontLang.enterYourPhone'),'data-rule'=>'minlen:4')); ?>

                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <?php echo Form::text('contact_subject',"", array('placeholder' => trans('frontLang.subject'),'class' => 'form-control','id'=>'subject', 'data-msg'=> trans('frontLang.enterYourSubject'),'data-rule'=>'minlen:4')); ?>

                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <?php echo Form::textarea('contact_message','', array('placeholder' => trans('frontLang.message'),'class' => 'form-control','id'=>'message','rows'=>'6', 'data-msg'=> trans('frontLang.enterYourMessage'),'data-rule'=>'required')); ?>

                        <div class="validation"></div>
                    </div>

                    <?php if(env('NOCAPTCHA_STATUS', false)): ?>
                        <div class="form-group">
                            <?php echo app('captcha')->display($attributes = [], $lang = App::getLocale()); ?>

                        </div>
                    <?php endif; ?>
                    <div>
                        <button type="submit" class="btn btn-theme"><?php echo e(trans('frontLang.sendMessage')); ?></button>
                    </div>
                    <?php echo e(Form::close()); ?>

                </div>
                <div class="col-lg-1">
                </div>
                <div class="col-lg-5 contacts">
                    <h4><i class="fa fa-envelope"></i> <?php echo e(trans('frontLang.contactDetails')); ?></h4>
                    <?php if(Helper::GeneralSiteSettings("contact_t1_" . trans('backLang.boxCode')) !=""): ?>
                        <address>
                            <strong><?php echo e(trans('frontLang.address')); ?>:</strong><br>
                            <i class="fa fa-map-marker"></i>
                            &nbsp;<?php echo e(Helper::GeneralSiteSettings("contact_t1_" . trans('backLang.boxCode'))); ?>

                        </address>
                    <?php endif; ?>
                    <?php if(Helper::GeneralSiteSettings("contact_t3") !=""): ?>
                        <p>
                            <strong><?php echo e(trans('frontLang.callPhone')); ?>:</strong><br>
                            <i class="fa fa-phone"></i> &nbsp;<span
                                    dir="ltr"><?php echo e(Helper::GeneralSiteSettings("contact_t3")); ?></span>
                        </p>
                    <?php endif; ?>
                    <?php if(Helper::GeneralSiteSettings("contact_t5") !=""): ?>
                        <p>
                            <strong><?php echo e(trans('frontLang.callMobile')); ?>:</strong><br>
                            <i class="fa fa-phone"></i> &nbsp;<span
                                    dir="ltr"><?php echo e(Helper::GeneralSiteSettings("contact_t5")); ?></span>
                        </p>
                    <?php endif; ?>
                    <?php if(Helper::GeneralSiteSettings("contact_t4") !=""): ?>
                        <p>
                            <strong><?php echo e(trans('frontLang.callFax')); ?>:</strong><br>
                            <i class="fa fa-fax"></i> &nbsp;<span
                                    dir="ltr"><?php echo e(Helper::GeneralSiteSettings("contact_t4")); ?></span>
                        </p>
                    <?php endif; ?>
                    <?php if(Helper::GeneralSiteSettings("contact_t6") !=""): ?>
                        <p>
                            <strong><?php echo e(trans('frontLang.email')); ?>:</strong><br>
                            <i class="fa fa-envelope"></i> &nbsp;<?php echo e(Helper::GeneralSiteSettings("contact_t6")); ?>

                        </p>
                    <?php endif; ?>
                    <?php if(Helper::GeneralSiteSettings("contact_t7_" . trans('backLang.boxCode')) !=""): ?>
                        <p>
                            <strong><?php echo e(trans('frontLang.callTimes')); ?>:</strong><br>
                            <i class="fa fa-clock-o"></i>
                            &nbsp;<?php echo e(Helper::GeneralSiteSettings("contact_t7_" . trans('backLang.boxCode'))); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footerInclude'); ?>
    <?php if(count($Topic->maps) >0): ?>
        <?php $__currentLoopData = $Topic->maps->slice(0,1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $map): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
            $MapCenter = $map->longitude . "," . $map->latitude;
            ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php
        $map_title_var = "title_" . trans('backLang.boxCode');
        $map_details_var = "details_" . trans('backLang.boxCode');
        ?>
        <script type="text/javascript"
                src="http://maps.google.com/maps/api/js?key=AIzaSyAgzruFTTvea0LEmw_jAqknqskKDuJK7dM"></script>

        <script type="text/javascript">
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

            var locations = [
                    <?php $__currentLoopData = $Topic->maps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $map): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                ['<?php echo "<strong>" . $map->$map_title_var . "</strong>" . "<br>" . $map->$map_details_var; ?>', <?php echo $map->longitude; ?>, <?php echo $map->latitude; ?>, <?php echo $map->id; ?>, <?php echo $map->icon; ?>],
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            ];

            var map = new google.maps.Map(document.getElementById('google-map'), {
                zoom: 6,
                draggable: false,
                scrollwheel: false,
                center: new google.maps.LatLng(<?php echo $MapCenter; ?>),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });

            var infowindow = new google.maps.InfoWindow();

            var marker, i;

            for (i = 0; i < locations.length; i++) {
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                    icon: icons[locations[i][4]],
                    map: map
                });

                google.maps.event.addListener(marker, 'click', (function (marker, i) {
                    return function () {
                        infowindow.setContent(locations[i][0]);
                        infowindow.open(map, marker);
                    }
                })(marker, i));
            }
        </script>
    <?php endif; ?>
    <script type="text/javascript">

        jQuery(document).ready(function ($) {
            "use strict";

            //Contact
            $('form.contactForm').submit(function () {

                var f = $(this).find('.form-group'),
                        ferror = false,
                        emailExp = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;

                f.children('input').each(function () { // run all inputs

                    var i = $(this); // current input
                    var rule = i.attr('data-rule');

                    if (rule !== undefined) {
                        var ierror = false; // error flag for current input
                        var pos = rule.indexOf(':', 0);
                        if (pos >= 0) {
                            var exp = rule.substr(pos + 1, rule.length);
                            rule = rule.substr(0, pos);
                        } else {
                            rule = rule.substr(pos + 1, rule.length);
                        }

                        switch (rule) {
                            case 'required':
                                if (i.val() === '') {
                                    ferror = ierror = true;
                                }
                                break;

                            case 'minlen':
                                if (i.val().length < parseInt(exp)) {
                                    ferror = ierror = true;
                                }
                                break;

                            case 'email':
                                if (!emailExp.test(i.val())) {
                                    ferror = ierror = true;
                                }
                                break;

                            case 'checked':
                                if (!i.attr('checked')) {
                                    ferror = ierror = true;
                                }
                                break;

                            case 'regexp':
                                exp = new RegExp(exp);
                                if (!exp.test(i.val())) {
                                    ferror = ierror = true;
                                }
                                break;
                        }
                        i.next('.validation').html('<i class=\"fa fa-info\"></i> &nbsp;' + ( ierror ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Input') : '' )).show();
                        !ierror ? i.next('.validation').hide() : i.next('.validation').show();
                    }
                });
                f.children('textarea').each(function () { // run all inputs

                    var i = $(this); // current input
                    var rule = i.attr('data-rule');

                    if (rule !== undefined) {
                        var ierror = false; // error flag for current input
                        var pos = rule.indexOf(':', 0);
                        if (pos >= 0) {
                            var exp = rule.substr(pos + 1, rule.length);
                            rule = rule.substr(0, pos);
                        } else {
                            rule = rule.substr(pos + 1, rule.length);
                        }

                        switch (rule) {
                            case 'required':
                                if (i.val() === '') {
                                    ferror = ierror = true;
                                }
                                break;

                            case 'minlen':
                                if (i.val().length < parseInt(exp)) {
                                    ferror = ierror = true;
                                }
                                break;
                        }
                        i.next('.validation').html('<i class=\"fa fa-info\"></i> &nbsp;' + ( ierror ? (i.attr('data-msg') != undefined ? i.attr('data-msg') : 'wrong Input') : '' )).show();
                        !ierror ? i.next('.validation').hide() : i.next('.validation').show();
                    }
                });
                if (ferror) return false;
                else var str = $(this).serialize();
                var xhr = $.ajax({
                    type: "POST",
                    url: "<?php echo route("contactPageSubmit"); ?>",
                    data: str,
                    success: function (msg) {
                        if (msg == 'OK') {
                            $("#sendmessage").addClass("show");
                            $("#errormessage").removeClass("show");
                            $("#name").val('');
                            $("#email").val('');
                            $("#phone").val('');
                            $("#subject").val('');
                            $("#message").val('');
                            $(window).scrollTop($('#contact_div').offset().top);
                        }
                        else {
                            $("#sendmessage").removeClass("show");
                            $("#errormessage").addClass("show");
                            $('#errormessage').html(msg);
                        }

                    }
                });
                //console.log(xhr);
                return false;
            });

        });
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontEnd.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>