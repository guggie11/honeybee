<?php $__env->startSection('content'); ?>

        <!-- start Home Slider -->
<?php echo $__env->make('frontEnd.includes.slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- end Home Slider -->


<?php if(count($TextBanners)>0): ?>
    <?php $__currentLoopData = $TextBanners->slice(0,1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $TextBanner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
        try {
            $TextBanner_type = $TextBanner->webmasterBanner->type;
        } catch (Exception $e) {
            $TextBanner_type = 0;
        }
        ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php
    $title_var = "title_" . trans('backLang.boxCode');
    $details_var = "details_" . trans('backLang.boxCode');
    $file_var = "file_" . trans('backLang.boxCode');

    $col_width = 12;
    if (count($TextBanners) == 2) {
        $col_width = 6;
    }
    if (count($TextBanners) == 3) {
        $col_width = 4;
    }
    if (count($TextBanners) > 3) {
        $col_width = 3;
    }
    ?>
    <section class="content-row-no-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <?php $__currentLoopData = $TextBanners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $TextBanner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-<?php echo e($col_width); ?>">
                                <div class="box">
                                    <div class="box-gray aligncenter">
                                        <?php if($TextBanner->icon !=""): ?>
                                            <div class="icon">
                                                <i class="fa <?php echo e($TextBanner->icon); ?> fa-3x"></i>
                                            </div>
                                        <?php elseif($TextBanner->$file_var !=""): ?>
                                            <img src="<?php echo e(URL::to('uploads/banners/'.$TextBanner->$file_var)); ?>"
                                                 alt="<?php echo e($TextBanner->$title_var); ?>"/>
                                        <?php endif; ?>
                                        <h4><?php echo $TextBanner->$title_var; ?></h4>
                                        <?php if($TextBanner->$details_var !=""): ?>
                                            <p><?php echo nl2br($TextBanner->$details_var); ?></p>
                                        <?php endif; ?>

                                    </div>
                                    <?php if($TextBanner->link_url !=""): ?>
                                        <div class="box-bottom">
                                            <a href="<?php echo $TextBanner->link_url; ?>"><?php echo e(trans('frontLang.moreDetails')); ?></a>
                                        </div>
                                    <?php endif; ?>

                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if(count($HomeTopics)>0): ?>
    <section class="content-row-bg">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="home-row-head">
                        <h3 class="heading"><?php echo e(trans('frontLang.homeContents1Title')); ?></h3>
                        <small><?php echo e(trans('frontLang.homeContents1desc')); ?></small>
                    </div>
                    <div class="row">
                        <?php
                        $title_var = "title_" . trans('backLang.boxCode');
                        $title_var2 = "title_" . trans('backLang.boxCodeOther');
                        $details_var = "details_" . trans('backLang.boxCode');
                        $details_var2 = "details_" . trans('backLang.boxCodeOther');
                        $section_url = "";
                        ?>
                        <?php $__currentLoopData = $HomeTopics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $HomeTopic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                            if ($HomeTopic->$title_var != "") {
                                $title = $HomeTopic->$title_var;
                            } else {
                                $title = $HomeTopic->$title_var2;
                            }
                            if ($HomeTopic->$details_var != "") {
                                $details = $details_var;
                            } else {
                                $details = $details_var2;
                            }
                            $section_url = $HomeTopic->webmasterSection->name;
                            ?>
                            <div class="col-lg-4 text-center">
                                <h4>
                                    <?php if($HomeTopic->icon !=""): ?>
                                        <i class="fa <?php echo $HomeTopic->icon; ?> "></i>&nbsp;
                                    <?php endif; ?>
                                    <?php echo e($title); ?>

                                </h4>
                                <?php if($HomeTopic->photo_file !=""): ?>
                                    <img src="<?php echo e(URL::to('uploads/topics/'.$HomeTopic->photo_file)); ?>"
                                         alt="<?php echo e($title); ?>"/>
                                <?php endif; ?>
                                <p class="text-justify"><?php echo e(str_limit(strip_tags($HomeTopic->$details), $limit = 400, $end = '...')); ?>

                                    &nbsp; <a href="<?php echo e(route('FrontendTopic',["section"=>$HomeTopic->webmasterSection->name,"id"=>$HomeTopic->id])); ?>"><?php echo e(trans('frontLang.readMore')); ?>

                                        <i
                                                class="fa fa-caret-<?php echo e(trans('backLang.right')); ?>"></i></a>
                                </p>

                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="more-btn">
                            <a href="<?php echo e(url($section_url)); ?>" class="btn btn-theme"><i
                                        class="fa fa-angle-left"></i>&nbsp; <?php echo e(trans('frontLang.viewMore')); ?>

                                &nbsp;<i
                                        class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

        </div>
    </section>
<?php endif; ?>


<?php if(count($HomePhotos)>0): ?>
    <section class="content-row-no-bg">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="home-row-head">
                        <h3 class="heading"><?php echo e(trans('frontLang.homeContents2Title')); ?></h3>
                        <small><?php echo e(trans('frontLang.homeContents2desc')); ?></small>
                    </div>
                    <div class="row">
                        <section id="projects">
                            <ul id="thumbs" class="portfolio">
                                <?php
                                $title_var = "title_" . trans('backLang.boxCode');
                                $title_var2 = "title_" . trans('backLang.boxCodeOther');
                                $section_url = "";
                                $ph_count = 0;
                                ?>
                                <?php $__currentLoopData = $HomePhotos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $HomePhoto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                    if ($HomePhoto->$title_var != "") {
                                        $title = $HomePhoto->$title_var;
                                    } else {
                                        $title = $HomePhoto->$title_var2;
                                    }
                                    $section_url = $HomePhoto->webmasterSection->name;
                                    ?>
                                    <?php $__currentLoopData = $HomePhoto->photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($ph_count<12): ?>
                                            <li class="col-lg-2 design" data-id="id-0" data-type="web">
                                                <div class="relative">
                                                    <div class="item-thumbs">
                                                        <a class="hover-wrap fancybox" data-fancybox-group="gallery"
                                                           title="<?php echo e($title); ?>"
                                                           href="<?php echo e(URL::to('uploads/topics/'.$photo->file)); ?>">
                                                            <span class="overlay-img"></span>
                                                            <span class="overlay-img-thumb"><i class="fa fa-search-plus"></i></span>
                                                        </a>
                                                        <!-- Thumb Image and Description -->
                                                        <img src="<?php echo e(URL::to('uploads/topics/'.$photo->file)); ?>"
                                                             alt="<?php echo e($title); ?>">
                                                    </div>
                                                </div>
                                            </li>
                                        <?php endif; ?>
                                        <?php
                                        $ph_count++;
                                        ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </ul>
                        </section>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="more-btn">
                                <a href="<?php echo e(url($section_url)); ?>" class="btn btn-theme"><i
                                            class="fa fa-angle-left"></i>&nbsp; <?php echo e(trans('frontLang.viewMore')); ?>

                                    &nbsp;<i
                                            class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <?php endif; ?>


                </div>
            </div>
        </div>
    </section>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('frontEnd.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>