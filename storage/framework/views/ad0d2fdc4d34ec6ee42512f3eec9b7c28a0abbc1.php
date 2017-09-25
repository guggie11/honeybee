<?php
$footer_style = "";
if (Helper::GeneralSiteSettings("style_footer_bg") != "") {
    $bg_file = URL::to('uploads/settings/' . Helper::GeneralSiteSettings("style_footer_bg"));
    $bg_color = Helper::GeneralSiteSettings("style_color1");
    $footer_style = "style='background: $bg_color url($bg_file) repeat-x center top'";
}
if (Helper::GeneralSiteSettings("style_footer") != 1) {
    $footer_style = "style=padding:0";
}
?>
<footer <?php echo $footer_style; ?>>
    <?php if(Helper::GeneralSiteSettings("style_footer")==1): ?>
        <?php
        $bx1w = 3;
        $bx2w = 3;
        $bx3w = 3;
        $bx4w = 3;
        if (count($LatestNews) == 0 && Helper::GeneralSiteSettings("style_subscribe") == 0) {
            $bx1w = 6;
            $bx2w = 6;
            $bx3w = 6;
            $bx4w = 6;
        } elseif (count($LatestNews) == 0 || Helper::GeneralSiteSettings("style_subscribe") == 0) {
            $bx1w = 4;
            $bx2w = 4;
            $bx3w = 4;
            $bx4w = 4;
        }

        ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-<?php echo e($bx1w); ?>">
                    <div class="widget contacts">
                        <h4 class="widgetheading"><i
                                    class="fa fa-bullhorn"></i>&nbsp; <?php echo e(trans('frontLang.contactDetails')); ?></h4>
                        <?php if(Helper::GeneralSiteSettings("contact_t1_" . trans('backLang.boxCode')) !=""): ?>
                            <address>
                                <strong><?php echo e(trans('frontLang.address')); ?>:</strong><br>
                                <i class="fa fa-map-marker"></i>
                                &nbsp;<?php echo e(Helper::GeneralSiteSettings("contact_t1_" . trans('backLang.boxCode'))); ?>

                            </address>
                        <?php endif; ?>
                        <?php if(Helper::GeneralSiteSettings("contact_t3") !=""): ?>
                            <p>
                                <strong><?php echo e(trans('frontLang.callUs')); ?>:</strong><br>
                                <i class="fa fa-phone"></i> &nbsp;<a
                                        href="call:<?php echo e(Helper::GeneralSiteSettings("contact_t3")); ?>"><span
                                            dir="ltr"><?php echo e(Helper::GeneralSiteSettings("contact_t3")); ?></span></a></p>
                        <?php endif; ?>
                        <?php if(Helper::GeneralSiteSettings("contact_t6") !=""): ?>
                            <p>
                                <strong><?php echo e(trans('frontLang.email')); ?>:</strong><br>
                                <i class="fa fa-envelope"></i> &nbsp;<a
                                        href="mailto:<?php echo e(Helper::GeneralSiteSettings("contact_t6")); ?>"><?php echo e(Helper::GeneralSiteSettings("contact_t6")); ?></a>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if(count($LatestNews)>0): ?>
                    <?php
                    $footer_title_var = "title_" . trans('backLang.boxCode');
                    $footer_title_var2 = "title_" . trans('backLang.boxCodeOther');
                    ?>
                    <div class="col-lg-<?php echo e($bx2w); ?>">
                        <div class="widget">
                            <h4 class="widgetheading"><i
                                        class="fa fa-rss"></i>&nbsp; <?php echo e(trans('frontLang.latestNews')); ?>

                            </h4>
                            <ul class="link-list">
                                <?php $__currentLoopData = $LatestNews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $LatestNew): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                    if ($LatestNew->$footer_title_var != "") {
                                        $LatestNew_title = $LatestNew->$footer_title_var;
                                    } else {
                                        $LatestNew_title = $LatestNew->$footer_title_var2;
                                    }
                                    ?>
                                    <li>
                                        <a href="<?php echo e(route('FrontendTopic',["section"=>$LatestNew->webmasterSection->name,"id"=>$LatestNew->id])); ?>"><?php echo e($LatestNew_title); ?></a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="col-lg-<?php echo e($bx3w); ?>">
                    <div class="widget">
                        <?php
                        $link_title_var = "title_" . trans('backLang.boxCode');
                        $main_title_var = "FooterMenuLinks_name_" . trans('backLang.boxCode');
                        ?>
                        <h4 class="widgetheading"><i class="fa fa-bookmark"></i>&nbsp; <?php echo e($$main_title_var); ?></h4>
                        <ul class="link-list">
                            <?php $__currentLoopData = $FooterMenuLinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $FooterMenuLink): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($FooterMenuLink->type==3 || $FooterMenuLink->type==2): ?>
                                    
                                    <li>
                                        <a href="<?php echo e(url($FooterMenuLink->webmasterSection->name)); ?>"><?php echo e($FooterMenuLink->$link_title_var); ?></a>
                                    </li>
                                <?php elseif($FooterMenuLink->type==1): ?>
                                    
                                    <li>
                                        <a href="<?php echo e(url($FooterMenuLink->link)); ?>"><?php echo e($FooterMenuLink->$link_title_var); ?></a>
                                    </li>
                                <?php else: ?>
                                    
                                    <li><a><?php echo e($FooterMenuLink->$link_title_var); ?></a></li>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
                <?php echo $__env->make('frontEnd.includes.subscribe', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            </div>
        </div>
    <?php endif; ?>
    <div id="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright">
                        <?php
                        $site_title_var = "site_title_" . trans('backLang.boxCode');
                        ?>
                        &copy; <?php echo date("Y") ?> <?php echo e(trans('frontLang.AllRightsReserved')); ?>

                        . <a><?php echo e($WebsiteSettings->$site_title_var); ?></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="social-network">
                        <?php if($WebsiteSettings->social_link1): ?>
                            <li><a href="<?php echo e($WebsiteSettings->social_link1); ?>" data-placement="top" title="Facebook"
                                   target="_blank"><i
                                            class="fa fa-facebook"></i></a></li>
                        <?php endif; ?>
                        <?php if($WebsiteSettings->social_link2): ?>
                            <li><a href="<?php echo e($WebsiteSettings->social_link2); ?>" data-placement="top" title="Twitter"
                                   target="_blank"><i
                                            class="fa fa-twitter"></i></a></li>
                        <?php endif; ?>
                        <?php if($WebsiteSettings->social_link3): ?>
                            <li><a href="<?php echo e($WebsiteSettings->social_link3); ?>" data-placement="top" title="Google+"
                                   target="_blank"><i
                                            class="fa fa-google-plus"></i></a></li>
                        <?php endif; ?>
                        <?php if($WebsiteSettings->social_link4): ?>
                            <li><a href="<?php echo e($WebsiteSettings->social_link4); ?>" data-placement="top" title="linkedin"
                                   target="_blank"><i
                                            class="fa fa-linkedin"></i></a></li>
                        <?php endif; ?>
                        <?php if($WebsiteSettings->social_link5): ?>
                            <li><a href="<?php echo e($WebsiteSettings->social_link5); ?>" data-placement="top" title="Youtube"
                                   target="_blank"><i
                                            class="fa fa-youtube-play"></i></a></li>
                        <?php endif; ?>
                        <?php if($WebsiteSettings->social_link6): ?>
                            <li><a href="<?php echo e($WebsiteSettings->social_link6); ?>" data-placement="top" title="Instagram"
                                   target="_blank"><i
                                            class="fa fa-instagram"></i></a></li>
                        <?php endif; ?>
                        <?php if($WebsiteSettings->social_link7): ?>
                            <li><a href="<?php echo e($WebsiteSettings->social_link7); ?>" data-placement="top" title="Pinterest"
                                   target="_blank"><i
                                            class="fa fa-pinterest"></i></a></li>
                        <?php endif; ?>
                        <?php if($WebsiteSettings->social_link8): ?>
                            <li><a href="<?php echo e($WebsiteSettings->social_link8); ?>" data-placement="top" title="Tumblr"
                                   target="_blank"><i
                                            class="fa fa-tumblr"></i></a></li>
                        <?php endif; ?>
                        <?php if($WebsiteSettings->social_link9): ?>
                            <li><a href="<?php echo e($WebsiteSettings->social_link9); ?>" data-placement="top" title="Flickr"
                                   target="_blank"><i
                                            class="fa fa-flickr"></i></a></li>
                        <?php endif; ?>
                        <?php if($WebsiteSettings->social_link10): ?>
                            <li><a href="whatsapp://call?number=<?php echo e($WebsiteSettings->social_link10); ?>"
                                   data-placement="top"
                                   title="Whatsapp" target="_blank"><i
                                            class="fa fa-whatsapp"></i></a></li>
                        <?php endif; ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>