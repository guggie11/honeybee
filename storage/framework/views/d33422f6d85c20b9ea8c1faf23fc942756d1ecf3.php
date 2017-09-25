<?php if(count($SliderBanners)>0): ?>
    <section id="featured">
        <!-- start slider -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Slider -->
                    <?php $__currentLoopData = $SliderBanners->slice(0,1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SliderBanner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        try {
                            $SliderBanner_type = $SliderBanner->webmasterBanner->type;
                        } catch (Exception $e) {
                            $SliderBanner_type = 0;
                        }
                        ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php
                    $title_var = "title_" . trans('backLang.boxCode');
                    $details_var = "details_" . trans('backLang.boxCode');
                    $file_var = "file_" . trans('backLang.boxCode');
                    ?>
                    <?php if($SliderBanner_type==0): ?>
                        
                        <div class="text-center">
                            <?php $__currentLoopData = $SliderBanners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SliderBanner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($SliderBanner->$details_var !=""): ?>
                                    <div><?php echo $SliderBanner->$details_var; ?></div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php elseif($SliderBanner_type==1): ?>
                        
                        <div id="main-slider" class="flexslider">
                            <ul class="slides">
                                <?php $__currentLoopData = $SliderBanners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SliderBanner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <img src="<?php echo e(URL::to('uploads/banners/'.$SliderBanner->$file_var)); ?>"
                                             alt="<?php echo e($SliderBanner->$title_var); ?>"/>
                                        <div class="flex-caption">
                                            <?php if($SliderBanner->$details_var !=""): ?>
                                                <h3><?php echo $SliderBanner->$title_var; ?></h3>
                                            <?php endif; ?>
                                            <?php if($SliderBanner->$details_var !=""): ?>
                                                <p><?php echo nl2br($SliderBanner->$details_var); ?></p>
                                            <?php endif; ?>
                                            <?php if($SliderBanner->link_url !=""): ?>
                                                <a href="<?php echo $SliderBanner->link_url; ?>"
                                                   class="btn btn-theme"><?php echo e(trans('frontLang.moreDetails')); ?></a>
                                            <?php endif; ?>
                                        </div>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php else: ?>
                        
                        <div class="text-center">
                            <?php $__currentLoopData = $SliderBanners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SliderBanner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($SliderBanner->youtube_link !=""): ?>
                                    <?php if($SliderBanner->video_type ==1): ?>
                                        <?php
                                        $Youtube_id = Helper::Get_youtube_video_id($SliderBanner->youtube_link);
                                        ?>
                                        <?php if($Youtube_id !=""): ?>
                                            
                                            <iframe width="100%" height="500" frameborder="0" allowfullscreen
                                                    src="https://www.youtube.com/embed/<?php echo e($Youtube_id); ?>">
                                            </iframe>
                                        <?php endif; ?>
                                    <?php elseif($SliderBanner->video_type ==2): ?>
                                        <?php
                                        $Vimeo_id = Helper::Get_vimeo_video_id($SliderBanner->youtube_link);
                                        ?>
                                        <?php if($Vimeo_id !=""): ?>
                                            
                                            <iframe width="100%" height="500" frameborder="0" allowfullscreen
                                                    src="http://player.vimeo.com/video/<?php echo e($Vimeo_id); ?>?title=0&amp;byline=0">
                                            </iframe>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                                <?php if($SliderBanner->video_type ==0): ?>
                                    <?php if($SliderBanner->$file_var !=""): ?>
                                            
                                        <video width="100%" height="500" controls>
                                            <source src="<?php echo e(URL::to('uploads/banners/'.$SliderBanner->$file_var)); ?>"
                                                    type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    <?php endif; ?>
                                <?php endif; ?>
                                <?php if($SliderBanner->$details_var !=""): ?>
                                    <div><?php echo $SliderBanner->$details_var; ?></div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <?php endif; ?>
                                <!-- end slider -->
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>