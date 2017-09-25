<header>
    <div class="site-top">
        <div class="container">
            <div>
                <div class="pull-right">
                    <strong>
                        <a href="<?php echo e(route("adminHome")); ?>"><i class="fa fa-cog"></i> <?php echo e(trans('frontLang.dashboard')); ?>

                        </a>
                    </strong>
                    <?php if($WebmasterSettings->languages_count ==2): ?>
                        &nbsp; | &nbsp;
                        <strong>
                            <?php if(App::getLocale()=="ar"): ?>
                                <a href="<?php echo e(URL::to('lang/en')); ?>"><i class="fa fa-language "></i> English</a>
                            <?php else: ?>
                                <a href="<?php echo e(URL::to('lang/ar')); ?>"><i class="fa fa-language "></i> العــربيــة</a>
                            <?php endif; ?>

                        </strong>
                    <?php endif; ?>
                </div>
                <div class="pull-left">
                    <?php if(Helper::GeneralSiteSettings("contact_t3") !=""): ?>
                        <i class="fa fa-phone"></i> &nbsp;<a
                                href="call:<?php echo e(Helper::GeneralSiteSettings("contact_t5")); ?>"><span
                                    dir="ltr"><?php echo e(Helper::GeneralSiteSettings("contact_t5")); ?></span></a>
                    <?php endif; ?>
                    <?php if(Helper::GeneralSiteSettings("contact_t6") !=""): ?>
                        <span class="top-email">
                        &nbsp; | &nbsp;
                    <i class="fa fa-envelope"></i> &nbsp;<a
                                    href="mailto:<?php echo e(Helper::GeneralSiteSettings("contact_t6")); ?>"><?php echo e(Helper::GeneralSiteSettings("contact_t6")); ?></a>
                    </span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo e(route("Home")); ?>">
                    <?php if(Helper::GeneralSiteSettings("style_logo_" . trans('backLang.boxCode')) !=""): ?>
                        <img alt=""
                             src="<?php echo e(URL::to('uploads/settings/'.Helper::GeneralSiteSettings("style_logo_" . trans('backLang.boxCode')))); ?>">
                    <?php else: ?>
                        <img alt="" src="<?php echo e(URL::to('uploads/settings/nologo.png')); ?>">
                    <?php endif; ?>

                </a>
            </div>
            <?php echo $__env->make('frontEnd.includes.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </div>
</header>