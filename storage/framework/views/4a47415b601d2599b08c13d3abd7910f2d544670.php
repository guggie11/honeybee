<div class="col-lg-4">
    <aside class="right-sidebar">
        <div class="widget">
            <?php echo e(Form::open(['route'=>['searchTopics'],'method'=>'POST','class'=>'form-search'])); ?>

            <div class="input-group input-group-sm">
                <?php echo Form::text('search_word',@$search_word, array('placeholder' => trans('frontLang.search'),'class' => 'form-control','id'=>'search_word','required'=>'')); ?>

                <span class="input-group-btn">
                    <button type="submit" class="btn btn-theme"><i class="fa fa-search"></i></button>
                </span>
            </div>

            <?php echo e(Form::close()); ?>

        </div>

        <?php if(count($Categories)>0): ?>
            <?php
            $category_title_var = "title_" . trans('backLang.boxCode');
            ?>
            <div class="widget">
                <h5 class="widgetheading"><?php echo e(trans('frontLang.categories')); ?></h5>
                <ul class="cat">
                    <?php $__currentLoopData = $Categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $active_cat = ""; ?>
                        <?php if($CurrentCategory!="none"): ?>
                            <?php if(count($CurrentCategory) >0): ?>
                                <?php if($Category->id == $CurrentCategory->id): ?>
                                    <?php $active_cat = "class=active"; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                        <li>
                            <?php if($Category->icon !==""): ?>
                                <i class="fa <?php echo e($Category->icon); ?>"></i> &nbsp;
                            <?php endif; ?>
                            <a <?php echo e($active_cat); ?>

                               href="<?php echo e(route('FrontendTopicsByCat',["section"=>$Category->webmasterSection->name,"cat"=>$Category->id])); ?>"><?php echo e($Category->$category_title_var); ?></a><span
                                    class="pull-right">(<?php echo e(count($Category->topics)); ?>)</span></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>

        <?php endif; ?>
        <?php if(count($TopicsMostViewed)>0): ?>
            <?php
            $side_title_var = "title_" . trans('backLang.boxCode');
            $side_title_var2 = "title_" . trans('backLang.boxCodeOther');
            ?>
            <div class="widget">
                <h5 class="widgetheading"><?php echo e(trans('frontLang.mostViewed')); ?></h5>
                <ul class="recent">
                    <?php $__currentLoopData = $TopicsMostViewed; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $TopicMostViewed): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        if ($TopicMostViewed->$side_title_var != "") {
                            $side_title = $TopicMostViewed->$side_title_var;
                        } else {
                            $side_title = $TopicMostViewed->$side_title_var2;
                        }
                        ?>
                        <li>
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="<?php echo e(route('FrontendTopic',["section"=>$TopicMostViewed->webmasterSection->name,"id"=>$TopicMostViewed->id])); ?>">
                                        <?php if($TopicMostViewed->photo_file !=""): ?>
                                            <img src="<?php echo e(URL::to('uploads/topics/'.$TopicMostViewed->photo_file)); ?>"
                                                 class="pull-left" alt="<?php echo e($side_title); ?>"/>
                                        <?php elseif($TopicMostViewed->webmasterSection->type==2 && $TopicMostViewed->video_file!=""): ?>
                                            <?php if($Topic->video_type ==1): ?>
                                                <?php
                                                $Youtube_id = Helper::Get_youtube_video_id($Topic->video_file);
                                                ?>
                                                <?php if($Youtube_id !=""): ?>
                                                    <img src="http://img.youtube.com/vi/<?php echo e($Youtube_id); ?>/0.jpg"
                                                         class="pull-left" alt="<?php echo e($side_title); ?>"/>
                                                <?php endif; ?>
                                            <?php elseif($Topic->video_type ==2): ?>
                                                <?php
                                                $Vimeo_id = Helper::Get_vimeo_video_id($Topic->video_file);
                                                ?>
                                                <?php if($Vimeo_id !=""): ?>
                                                    <?php
                                                    $hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$Vimeo_id.php"));
                                                    ?>

                                                    <img src="<?php echo e($hash[0]['thumbnail_large']); ?>"
                                                         class="pull-left" alt="<?php echo e($side_title); ?>"/>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </a>
                                    <h6>
                                        <a href="<?php echo e(route('FrontendTopic',["section"=>$TopicMostViewed->webmasterSection->name,"id"=>$TopicMostViewed->id])); ?>"><?php echo e($side_title); ?></a>
                                    </h6>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <?php if(count($SideBanners)>0): ?>
            <div class="widget">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Slider -->
                        <?php
                        $SideBanner_type = 0;
                        ?>
                        <?php $__currentLoopData = $SideBanners->slice(0,1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SideBanner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                            try {
                                $SideBanner_type = $SideBanner->webmasterBanner->type;
                            } catch (Exception $e) {
                                $SideBanner_type = 0;
                            }
                            ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        $title_var = "title_" . trans('backLang.boxCode');
                        $details_var = "details_" . trans('backLang.boxCode');
                        $file_var = "file_" . trans('backLang.boxCode');
                        ?>
                        <?php if($SideBanner_type==0): ?>
                            
                            <div class="text-center">
                                <?php $__currentLoopData = $SideBanners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SideBanner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($SideBanner->$details_var !=""): ?>
                                        <div><?php echo $SideBanner->$details_var; ?></div>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php elseif($SideBanner_type==1): ?>
                            
                            <div class="text-center">
                                <?php $__currentLoopData = $SideBanners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SideBanner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div>
                                        <?php if($SideBanner->link_url !=""): ?>
                                            <a href="<?php echo $SideBanner->link_url; ?>">
                                                <?php endif; ?>
                                                <img src="<?php echo e(URL::to('uploads/banners/'.$SideBanner->$file_var)); ?>"
                                                     alt="<?php echo e($SideBanner->$title_var); ?>"/>
                                                <?php if($SideBanner->link_url !=""): ?>
                                            </a>
                                        <?php endif; ?>
                                        <?php if($SideBanner->$details_var !=""): ?>
                                            <p><?php echo nl2br($SideBanner->$details_var); ?></p>
                                        <?php endif; ?>

                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php else: ?>
                            
                            <div class="text-center">
                                <?php $__currentLoopData = $SideBanners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SideBanner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($SideBanner->youtube_link !=""): ?>
                                        <?php if($SideBanner->video_type ==1): ?>
                                            <?php
                                            $Youtube_id = Helper::Get_youtube_video_id($SideBanner->youtube_link);
                                            ?>
                                            <?php if($Youtube_id !=""): ?>
                                                
                                                <iframe width="100%" height="500" frameborder="0" allowfullscreen
                                                        src="https://www.youtube.com/embed/<?php echo e($Youtube_id); ?>">
                                                </iframe>
                                            <?php endif; ?>
                                        <?php elseif($SideBanner->video_type ==2): ?>
                                            <?php
                                            $Vimeo_id = Helper::Get_vimeo_video_id($SideBanner->youtube_link);
                                            ?>
                                            <?php if($Vimeo_id !=""): ?>
                                                
                                                <iframe width="100%" height="500" frameborder="0" allowfullscreen
                                                        src="http://player.vimeo.com/video/<?php echo e($Vimeo_id); ?>?title=0&amp;byline=0">
                                                </iframe>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    <?php if($SideBanner->video_type ==0): ?>
                                        <?php if($SideBanner->$file_var !=""): ?>
                                            
                                            <video width="100%" height="500" controls>
                                                <source src="<?php echo e(URL::to('uploads/banners/'.$SideBanner->$file_var)); ?>"
                                                        type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    <?php if($SideBanner->$details_var !=""): ?>
                                        <div><?php echo $SideBanner->$details_var; ?></div>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <?php endif; ?>
                                    <!-- end slider -->
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </aside>
</div>