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
                        <li><a href="<?php echo e(route("Home")); ?>"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i>
                        </li>
                        <?php if($WebmasterSection->id != 1): ?>
                            <li class="active"><?php echo trans('backLang.'.$WebmasterSection->name); ?></li>
                        <?php else: ?>
                            <li class="active"><?php echo e($title); ?></li>
                        <?php endif; ?>
                        <?php if(count($CurrentCategory) >0): ?>
                            <?php
                            $category_title_var = "title_" . trans('backLang.boxCode');
                            ?>
                            <li class="active"><i
                                        class="icon-angle-right"></i><?php echo e($CurrentCategory->$category_title_var); ?></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-<?php echo e((count($Categories)>0)? "8":"12"); ?>">

                    <article>
                        <?php if($WebmasterSection->type==2 && $Topic->video_file!=""): ?>
                            
                            <div class="post-video">
                                <div class="post-heading">
                                    <h1>
                                        <?php if($Topic->icon !=""): ?>
                                            <i class="fa <?php echo $Topic->icon; ?> "></i>&nbsp;
                                        <?php endif; ?>
                                        <?php echo e($title); ?>

                                    </h1>
                                </div>
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
                                        <video width="100%" height="300" controls autoplay>
                                            <source src="<?php echo e(URL::to('uploads/topics/'.$Topic->video_file)); ?>"
                                                    type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    <?php endif; ?>


                                </div>
                            </div>
                        <?php elseif($WebmasterSection->type==3 && $Topic->audio_file!=""): ?>
                            
                            <div class="post-video">
                                <div class="post-heading">
                                    <h1>
                                        <?php if($Topic->icon !=""): ?>
                                            <i class="fa <?php echo $Topic->icon; ?> "></i>&nbsp;
                                        <?php endif; ?>
                                        <?php echo e($title); ?>

                                    </h1>
                                </div>
                                <?php if($Topic->photo_file !=""): ?>
                                    <img src="<?php echo e(URL::to('uploads/topics/'.$Topic->photo_file)); ?>"
                                         alt="<?php echo e($title); ?>"/>
                                <?php endif; ?>
                                <div>
                                    <audio controls autoplay>
                                        <source src="<?php echo e(URL::to('uploads/topics/'.$Topic->audio_file)); ?>"
                                                type="audio/mpeg">
                                        Your browser does not support the audio element.
                                    </audio>

                                </div>
                            </div>

                        <?php elseif(count($Topic->photos)>0): ?>
                            
                            <div class="post-slider">
                                <div class="post-heading">
                                    <h1>
                                        <?php if($Topic->icon !=""): ?>
                                            <i class="fa <?php echo $Topic->icon; ?> "></i>&nbsp;
                                        <?php endif; ?>
                                        <?php echo e($title); ?>

                                    </h1>
                                </div>
                                <!-- start flexslider -->
                                <div class="p-slider flexslider">
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
                                <div class="post-heading">
                                    <h1>
                                        <?php if($Topic->icon !=""): ?>
                                            <i class="fa <?php echo $Topic->icon; ?> "></i>&nbsp;
                                        <?php endif; ?>
                                        <?php echo e($title); ?>

                                    </h1>
                                </div>
                                <?php if($Topic->photo_file !=""): ?>
                                    <img src="<?php echo e(URL::to('uploads/topics/'.$Topic->photo_file)); ?>"
                                         alt="<?php echo e($title); ?>"/>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <?php echo $Topic->$details; ?>

                        <?php if($Topic->attach_file !=""): ?>
                            <?php
                            $file_ext = strrchr($Topic->attach_file, ".");
                            $file_ext = strtolower($file_ext);
                            ?>
                            <div class="bottom-article">
                                <?php if($file_ext ==".jpg"|| $file_ext ==".jpeg"|| $file_ext ==".png"|| $file_ext ==".gif"): ?>
                                    <div class="text-center">
                                        <img src="<?php echo e(URL::to('uploads/topics/'.$Topic->attach_file)); ?>"
                                             alt="<?php echo e($title); ?>"/>
                                    </div>
                                <?php else: ?>
                                    <a href="<?php echo e(URL::to('uploads/topics/'.$Topic->attach_file)); ?>">
                                        <strong><i class="fa fa-paperclip"></i>
                                            &nbsp;<?php echo e(trans('frontLang.downloadAttach')); ?></strong>
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <div class="bottom-article">
                            <ul class="meta-post">
                                <?php if($WebmasterSection->date_status): ?>
                                    <li><i class="fa fa-calendar"></i> <a><?php echo $Topic->date; ?></a></li>
                                <?php endif; ?>
                                <li><i class="fa fa-user"></i> <a
                                            href="<?php echo e(route('FrontendUserTopics',$Topic->created_by)); ?>"><?php echo e($Topic->user->name); ?></a>
                                </li>
                                <li><i class="fa fa-eye"></i> <a><?php echo e(trans('frontLang.visits')); ?>

                                        : <?php echo $Topic->visits; ?></a></li>
                                <?php if($WebmasterSection->comments_status): ?>
                                    <li><i class="fa fa-comments"></i><a href="#comments"><?php echo e(count($Topic->comments)); ?>

                                            Comments</a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                            <div class="pull-right">
                                <?php echo e(trans('frontLang.share')); ?> :
                                <ul class="social-network share">
                                    <li><a href="<?php echo e(Helper::SocialShare("facebook", $PageTitle)); ?>" class="facebook"
                                           data-placement="top"
                                           title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="<?php echo e(Helper::SocialShare("twitter", $PageTitle)); ?>" class="twitter"
                                           data-placement="top" title="Twitter"
                                           target="_blank"><i
                                                    class="fa fa-twitter"></i></a></li>
                                    <li><a href="<?php echo e(Helper::SocialShare("google", $PageTitle)); ?>" class="google"
                                           data-placement="top"
                                           title="Google+"
                                           target="_blank"><i
                                                    class="fa fa-google-plus"></i></a></li>
                                    <li><a href="<?php echo e(Helper::SocialShare("linkedin", $PageTitle)); ?>" class="linkedin"
                                           data-placement="top" title="linkedin"
                                           target="_blank"><i
                                                    class="fa fa-linkedin"></i></a></li>
                                    <li><a href="<?php echo e(Helper::SocialShare("tumblr", $PageTitle)); ?>" class="pintrest"
                                           data-placement="top" title="Pinterest"
                                           target="_blank"><i
                                                    class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <?php if(count($Topic->maps) >0): ?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <br>
                                    <h4><?php echo e(trans('frontLang.locationMap')); ?></h4>
                                    <div id="google-map"></div>
                                </div>
                            </div>
                        <?php endif; ?>


                        <?php if($WebmasterSection->comments_status): ?>
                            <div id="comments">
                                <?php if(count($Topic->comments)>0): ?>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <br>
                                            <h4><i class="fa fa-comments"></i> <?php echo e(trans('frontLang.comments')); ?></h4>
                                            <hr>
                                        </div>
                                    </div>
                                    <?php $__currentLoopData = $Topic->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                        $dtformated = date('d M Y h:i A', strtotime($comment->date));
                                        ?>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <img src="<?php echo e(URL::to('uploads/contacts/profile.jpg')); ?>" class="profile"
                                                     alt="<?php echo e($comment->name); ?>">
                                                <div class="pullquote-left">
                                                    <strong><?php echo e($comment->name); ?></strong>
                                                    <div><small><small><?php echo e($dtformated); ?></small></small></div>
                                                    <?php echo nl2br(strip_tags($comment->comment)); ?>

                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <br>
                                        <h4><i class="fa fa-plus"></i> <?php echo e(trans('frontLang.newComment')); ?></h4>
                                        <div class="bottom-article newcomment">
                                            <div id="sendmessage"><i class="fa fa-check-circle"></i>
                                                &nbsp;<?php echo e(trans('frontLang.youCommentSent')); ?> &nbsp; <a
                                                        href="<?php echo e(url()->current()); ?>"><i
                                                            class="fa fa-refresh"></i> <?php echo e(trans('frontLang.refresh')); ?>

                                                </a>
                                            </div>
                                            <div id="errormessage"><?php echo e(trans('frontLang.youMessageNotSent')); ?></div>

                                            <?php echo e(Form::open(['route'=>['Home'],'method'=>'POST','class'=>'commentForm'])); ?>

                                            <div class="form-group">
                                                <?php echo Form::text('comment_name',"", array('placeholder' => trans('frontLang.yourName'),'class' => 'form-control','id'=>'comment_name', 'data-msg'=> trans('frontLang.enterYourName'),'data-rule'=>'minlen:4')); ?>

                                                <div class="alert alert-warning validation"></div>
                                            </div>
                                            <div class="form-group">
                                                <?php echo Form::email('comment_email',"", array('placeholder' => trans('frontLang.yourEmail'),'class' => 'form-control','id'=>'comment_email', 'data-msg'=> trans('frontLang.enterYourEmail'),'data-rule'=>'email')); ?>

                                                <div class="validation"></div>
                                            </div>
                                            <div class="form-group">
                                                <?php echo Form::textarea('comment_message','', array('placeholder' => trans('frontLang.comment'),'class' => 'form-control','id'=>'comment_message','rows'=>'5', 'data-msg'=> trans('frontLang.enterYourComment'),'data-rule'=>'required')); ?>

                                                <div class="validation"></div>
                                            </div>

                                            <?php if(env('NOCAPTCHA_STATUS', false)): ?>
                                                <div class="form-group">
                                                    <?php echo app('captcha')->display($attributes = [], $lang = App::getLocale()); ?>

                                                </div>
                                            <?php endif; ?>
                                            <div>
                                                <input type="hidden" name="topic_id" value="<?php echo e($Topic->id); ?>">
                                                <button type="submit"
                                                        class="btn btn-theme"><?php echo e(trans('frontLang.sendComment')); ?></button>
                                            </div>
                                            <?php echo e(Form::close()); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if($WebmasterSection->order_status): ?>
                            <div id="order">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <br>
                                        <h4><i class="fa fa-cart-plus"></i> <?php echo e(trans('frontLang.orderForm')); ?></h4>
                                        <div class="bottom-article newcomment">
                                            <div id="ordersendmessage"><i class="fa fa-check-circle"></i>
                                                &nbsp;<?php echo e(trans('frontLang.youOrderSent')); ?>

                                            </div>
                                            <div id="ordererrormessage"><?php echo e(trans('frontLang.youMessageNotSent')); ?></div>

                                            <?php echo e(Form::open(['route'=>['Home'],'method'=>'POST','class'=>'orderForm'])); ?>

                                            <div class="form-group">
                                                <?php echo Form::text('order_name',"", array('placeholder' => trans('frontLang.yourName'),'class' => 'form-control','id'=>'order_name', 'data-msg'=> trans('frontLang.enterYourName'),'data-rule'=>'minlen:4')); ?>

                                                <div class="alert alert-warning validation"></div>
                                            </div>
                                            <div class="form-group">
                                                <?php echo Form::text('order_phone',"", array('placeholder' => trans('frontLang.phone'),'class' => 'form-control','id'=>'order_phone', 'data-msg'=> trans('frontLang.enterYourPhone'),'data-rule'=>'minlen:4')); ?>

                                                <div class="validation"></div>
                                            </div>
                                            <div class="form-group">
                                                <?php echo Form::email('order_email',"", array('placeholder' => trans('frontLang.yourEmail'),'class' => 'form-control','id'=>'order_email', 'data-msg'=> trans('frontLang.enterYourEmail'),'data-rule'=>'email')); ?>

                                                <div class="validation"></div>
                                            </div>
                                            <div class="form-group">
                                                <?php echo Form::number('order_qty',"", array('placeholder' => trans('frontLang.quantity'),'class' => 'form-control','id'=>'order_qty', 'data-msg'=> trans('frontLang.yourQuantity'),'data-rule'=>'minlen:1','min'=>'1')); ?>

                                                <div class="validation"></div>
                                            </div>
                                            <div class="form-group">
                                                <?php echo Form::textarea('order_message','', array('placeholder' => trans('frontLang.notes'),'class' => 'form-control','id'=>'order_message','rows'=>'5')); ?>

                                                <div class="validation"></div>
                                            </div>

                                            <?php if(env('NOCAPTCHA_STATUS', false)): ?>
                                                <div class="form-group">
                                                    <?php echo app('captcha')->display($attributes = [], $lang = App::getLocale()); ?>

                                                </div>
                                            <?php endif; ?>
                                            <div>
                                                <input type="hidden" name="topic_id" value="<?php echo e($Topic->id); ?>">
                                                <button type="submit"
                                                        class="btn btn-theme"><?php echo e(trans('frontLang.sendOrder')); ?></button>
                                            </div>
                                            <?php echo e(Form::close()); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </article>
                </div>
                <?php if(count($Categories) >0): ?>
                    <?php echo $__env->make('frontEnd.includes.slide', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php endif; ?>
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

            <?php if($WebmasterSection->comments_status): ?>
            //Comment
            $('form.commentForm').submit(function () {

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
                $.ajax({
                    type: "POST",
                    url: "<?php echo route("commentSubmit"); ?>",
                    data: str,
                    success: function (msg) {
                        if (msg == 'OK') {
                            $("#sendmessage").addClass("show");
                            $("#errormessage").removeClass("show");
                            $("#comment_name").val('');
                            $("#comment_email").val('');
                            $("#comment_message").val('');
                        }
                        else {
                            $("#sendmessage").removeClass("show");
                            $("#errormessage").addClass("show");
                            $('#errormessage').html(msg);
                        }

                    }
                });
                return false;
            });
            <?php endif; ?>

            <?php if($WebmasterSection->order_status): ?>

            //Order
            $('form.orderForm').submit(function () {

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
                if (ferror) return false;
                else var str = $(this).serialize();
                var xhr = $.ajax({
                    type: "POST",
                    url: "<?php echo route("orderSubmit"); ?>",
                    data: str,
                    success: function (msg) {
                        if (msg == 'OK') {
                            $("#ordersendmessage").addClass("show");
                            $("#ordererrormessage").removeClass("show");
                            $("#order_name").val('');
                            $("#order_phone").val('');
                            $("#order_email").val('');
                            $("#order_qty").val('');
                            $("#order_message").val('');
                        }
                        else {
                            $("#ordersendmessage").removeClass("show");
                            $("#ordererrormessage").addClass("show");
                            $('#ordererrormessage').html(msg);
                        }

                    }
                });
                //console.log(xhr);
                return false;
            });

            <?php endif; ?>
        });
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontEnd.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>