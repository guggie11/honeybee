<!DOCTYPE html>
<html lang="<?php echo e(trans('backLang.code')); ?>" dir="<?php echo e(trans('backLang.direction')); ?>">
<head>
    <?php echo $__env->make('frontEnd.includes.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('frontEnd.includes.colors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<?php
$bdy_class = "";
$bdy_bg_color = "";
$bdy_bg_image = "";
if (Helper::GeneralSiteSettings("style_type")) {
    $bdy_class = "boxed-layout";
    if (Helper::GeneralSiteSettings("style_bg_type") == 0) {
        $bdy_bg_color = "background-color: #000;";
        if (Helper::GeneralSiteSettings("style_bg_color") != "") {
            $bdy_bg_color = "background-attachment: fixed;background-color: " . Helper::GeneralSiteSettings("style_bg_color") . ";";
        }
        $bdy_bg_image = "";
    } elseif (Helper::GeneralSiteSettings("style_bg_type") == 1) {
        $bdy_bg_color = "";
        $bdy_bg_image = "background-attachment: fixed;background-image:url(" . URL::to('uploads/pattern/' . Helper::GeneralSiteSettings("style_bg_pattern")) . ")";
    } elseif (Helper::GeneralSiteSettings("style_bg_type") == 2) {
        $bdy_bg_color = "";
        $bdy_bg_image = "background-attachment: fixed;background-image:url(" . URL::to('uploads/settings/' . Helper::GeneralSiteSettings("style_bg_image")) . ")";
    }
}
?>

<body class="js <?php echo $bdy_class; ?>" style=" <?php echo $bdy_bg_color; ?> <?php echo $bdy_bg_image; ?>">
<div id="wrapper">
    <!-- start header -->
    <?php echo $__env->make('frontEnd.includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- end header -->

    <!-- Content Section -->
    <?php echo $__env->yieldContent('content'); ?>
            <!-- end of Content Section -->

    <!-- start footer -->
    <?php echo $__env->make('frontEnd.includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- end footer -->
</div>
<?php echo $__env->make('frontEnd.includes.foot', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldContent('footerInclude'); ?>

<?php if(Helper::GeneralSiteSettings("style_preload")): ?>
    <div id="preloader"></div>

    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(window).load(function () {
                $('#preloader').fadeOut('slow', function () {
                    // $(this).remove();
                });
            });
        });
    </script>
<?php endif; ?>
</body>
</html>