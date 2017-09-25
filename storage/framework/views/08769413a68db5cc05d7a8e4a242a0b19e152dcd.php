<?php
// Current Full URL
$fullPagePath = Request::url();
// Char Count of Backend folder Plus 1
$envAdminCharCount = strlen(env('BACKEND_PATH')) + 1;
// URL after Root Path EX: admin/home
$urlAfterRoot = substr($fullPagePath, strpos($fullPagePath, env('BACKEND_PATH')) + $envAdminCharCount);
?>
<?php
$category_title_var = "title_" . trans('backLang.boxCode');
?>
<div class="navbar-collapse collapse ">
    <ul class="nav navbar-nav">
        <?php
        $link_title_var = "title_" . trans('backLang.boxCode');
        ?>
        <?php $__currentLoopData = $HeaderMenuLinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $HeaderMenuLink): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($HeaderMenuLink->type==3): ?>
                <?php
                // Section with drop list
                ?>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown"
                       data-delay="0" data-close-others="true"><?php echo e($HeaderMenuLink->$link_title_var); ?> <i class="fa fa-angle-down"></i></a>

                    <?php if(count($HeaderMenuLink->webmasterSection->sections) >0): ?>
                        
                        <ul class="dropdown-menu">
                            <?php $__currentLoopData = $HeaderMenuLink->webmasterSection->sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $MnuCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a href="<?php echo e(route('FrontendTopicsByCat',["section"=>$HeaderMenuLink->webmasterSection->name,"cat"=>$MnuCategory->id])); ?>">
                                        <?php if($MnuCategory->icon !==""): ?>
                                            <i class="fa <?php echo e($MnuCategory->icon); ?>"></i> &nbsp;
                                        <?php endif; ?>
                                        <?php echo e($MnuCategory->$category_title_var); ?></a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php elseif(count($HeaderMenuLink->webmasterSection->topics) >0): ?>
                        
                        <ul class="dropdown-menu">
                            <?php $__currentLoopData = $HeaderMenuLink->webmasterSection->topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $MnuTopic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a href="<?php echo e(route('FrontendTopic',["section"=>$HeaderMenuLink->webmasterSection->name,"id"=>$MnuTopic->id])); ?>">
                                        <?php if($MnuTopic->icon !==""): ?>
                                            <i class="fa <?php echo e($MnuTopic->icon); ?>"></i> &nbsp;
                                        <?php endif; ?>
                                        <?php echo e($MnuTopic->$category_title_var); ?></a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php endif; ?>

                </li>
            <?php elseif($HeaderMenuLink->type==2): ?>
                <?php
                // Section Link
                ?>
                <li>
                    <a href="<?php echo e(url($HeaderMenuLink->webmasterSection->name)); ?>"><?php echo e($HeaderMenuLink->$link_title_var); ?></a>
                </li>
            <?php elseif($HeaderMenuLink->type==1): ?>
                <?php
                // Direct Link
                ?>
                <li><a href="<?php echo e(url($HeaderMenuLink->link)); ?>"><?php echo e($HeaderMenuLink->$link_title_var); ?></a></li>
            <?php else: ?>
                <?php
                // Main title ( have drop down menu )
                ?>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown"
                       data-delay="0" data-close-others="true"><?php echo e($HeaderMenuLink->$link_title_var); ?></a>
                    <?php if(count($HeaderMenuLink->subMenus) >0): ?>
                        <ul class="dropdown-menu">
                            <?php $__currentLoopData = $HeaderMenuLink->subMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subMenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($subMenu->type==3): ?>
                                    <?php
                                    // sub menu - Section will drop list
                                    ?>
                                    <li><a href="javascript:void(0)" class="dropdown-toggle " data-toggle="dropdown"
                                           data-hover="dropdown" data-delay="0"
                                           data-close-others="true"><?php echo e($subMenu->$link_title_var); ?></a>
                                        <?php
                                        // make list
                                        // - check is categories list
                                        // - or pages list
                                        ?>

                                        <?php if(count($subMenu->webmasterSection->sections) >0): ?>
                                            
                                            <ul class="dropdown-menu">
                                                <?php $__currentLoopData = $subMenu->webmasterSection->sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SubMnuCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li>
                                                        <a href="<?php echo e(route('FrontendTopicsByCat',["section"=>$subMenu->webmasterSection->name,"cat"=>$SubMnuCategory->id])); ?>">
                                                            <?php if($SubMnuCategory->icon !==""): ?>
                                                                <i class="fa <?php echo e($SubMnuCategory->icon); ?>"></i> &nbsp;
                                                            <?php endif; ?>
                                                            <?php echo e($SubMnuCategory->$category_title_var); ?></a>
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        <?php elseif(count($subMenu->webmasterSection->topics) >0): ?>
                                            
                                            <ul class="dropdown-menu">
                                                <?php $__currentLoopData = $subMenu->webmasterSection->topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SubMnuTopic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li>
                                                        <a href="<?php echo e(route('FrontendTopic',$SubMnuTopic->id)); ?>"><?php echo e($SubMnuTopic->$category_title_var); ?></a>
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        <?php endif; ?>

                                    </li>
                                <?php elseif($subMenu->type==2): ?>
                                    <?php
                                    // sub menu - Section Link
                                    ?>
                                    <li>
                                        <a href="<?php echo e(url($subMenu->webmasterSection->name)); ?>"><?php echo e($subMenu->$link_title_var); ?></a>
                                    </li>
                                <?php elseif($subMenu->type==1): ?>
                                    <?php
                                    // sub menu - Direct Link
                                    ?>
                                    <li><a href="<?php echo e(url($subMenu->link)); ?>"><?php echo e($subMenu->$link_title_var); ?></a>
                                    </li>
                                <?php else: ?>
                                    <?php
                                    // sub menu - Main title ( have drop down menu )
                                    ?>
                                    <li><a href="javascript:void(0)"><?php echo e($subMenu->$link_title_var); ?></a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php endif; ?>
                </li>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </ul>
</div>