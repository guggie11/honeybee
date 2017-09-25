<meta charset="utf-8">
<title><?php echo e($PageTitle); ?> <?php echo e(($PageTitle !="")? "|":""); ?> <?php echo e(Helper::GeneralSiteSettings("site_title_" . trans('backLang.boxCode'))); ?></title>
<meta name="description" content="<?php echo e($PageDescription); ?>"/>
<meta name="keywords" content="<?php echo e($PageKeywords); ?>"/>
<meta name="author" content="<?php echo e(URL::to('')); ?>"/>

<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link href="<?php echo e(URL::to('frontEnd/css/bootstrap.min.css')); ?>" rel="stylesheet"/>
<link href="<?php echo e(URL::to('frontEnd/css/fancybox/jquery.fancybox.css')); ?>" rel="stylesheet">
<link href="<?php echo e(URL::to('frontEnd/css/jcarousel.css')); ?>" rel="stylesheet"/>
<link href="<?php echo e(URL::to('frontEnd/css/flexslider.css')); ?>" rel="stylesheet"/>
<link href="<?php echo e(URL::to('frontEnd/css/style.css')); ?>" rel="stylesheet"/>
<link href="<?php echo e(URL::to('frontEnd/css/color.css')); ?>" rel="stylesheet"/>

<?php if( trans('backLang.direction')=="rtl"): ?>
<link href="<?php echo e(URL::to('frontEnd/css/rtl.css')); ?>" rel="stylesheet"/>
<?php endif; ?>

<!-- Favicon and Touch Icons -->
<?php if(Helper::GeneralSiteSettings("style_fav") !=""): ?>
    <link href="<?php echo e(URL::to('uploads/settings/'.Helper::GeneralSiteSettings("style_fav"))); ?>" rel="shortcut icon"
          type="image/png">
<?php else: ?>
    <link href="<?php echo e(URL::to('uploads/settings/nofav.png')); ?>" rel="shortcut icon" type="image/png">
<?php endif; ?>
<?php if(Helper::GeneralSiteSettings("style_apple") !=""): ?>
    <link href="<?php echo e(URL::to('uploads/settings/'.Helper::GeneralSiteSettings("style_apple"))); ?>" rel="apple-touch-icon">
    <link href="<?php echo e(URL::to('uploads/settings/'.Helper::GeneralSiteSettings("style_apple"))); ?>" rel="apple-touch-icon"
          sizes="72x72">
    <link href="<?php echo e(URL::to('uploads/settings/'.Helper::GeneralSiteSettings("style_apple"))); ?>" rel="apple-touch-icon"
          sizes="114x114">
    <link href="<?php echo e(URL::to('uploads/settings/'.Helper::GeneralSiteSettings("style_apple"))); ?>" rel="apple-touch-icon"
          sizes="144x144">
<?php else: ?>
    <link href="<?php echo e(URL::to('uploads/settings/nofav.png')); ?>" rel="apple-touch-icon">
    <link href="<?php echo e(URL::to('uploads/settings/nofav.png')); ?>" rel="apple-touch-icon" sizes="72x72">
    <link href="<?php echo e(URL::to('uploads/settings/nofav.png')); ?>" rel="apple-touch-icon" sizes="114x114">
    <link href="<?php echo e(URL::to('uploads/settings/nofav.png')); ?>" rel="apple-touch-icon" sizes="144x144">
<?php endif; ?>
