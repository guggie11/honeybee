<?php $__env->startSection('headerInclude'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::to("backEnd/assets/styles/flags.css")); ?>"/>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="padding">
        <div class="box">
            <div class="box-header dker">
                <h3><?php echo e(trans('backLang.visitorsAnalyticsVisitorsHistory')); ?></h3>
                <small>
                    <a href="<?php echo e(route('adminHome')); ?>"><?php echo e(trans('backLang.home')); ?></a> /
                    <a href=""><?php echo e(trans('backLang.visitorsAnalytics')); ?></a>
                </small>
            </div>


            <div class="table-responsive">
                <table class="table table-striped  b-t">
                    <thead>
                    <tr>
                        <th class="text-center"><?php echo e(trans('backLang.topicDate')); ?></th>
                        <th class="text-center"><?php echo e(trans('backLang.ip')); ?></th>
                        <th><?php echo e(trans('backLang.visitorsAnalyticsByCity')); ?></th>
                        <th><?php echo e(trans('backLang.visitorsAnalyticsByCountry')); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $ii = 1;
                    ?>
                    <?php $__currentLoopData = $AnalyticsVisitors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Analytic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="text-center" >
                                <small><?php echo e($Analytic->date); ?> &nbsp; <?php echo e(date('h:i A', strtotime($Analytic->time))); ?></small>
                            </td>
                            <td class="text-center dker text-info"><a href="<?php echo e(route("visitorsIP",$Analytic->ip)); ?>"><?php echo e($Analytic->ip); ?></a></td>
                            <td><?php echo e($Analytic->city); ?></td>
                            <?php
                            $flag = "";
                            $country_code = strtolower($Analytic->country_code);
                            if ($country_code != "unknown") {
                                $flag = "<div class='flag flag-$country_code' style='display: inline-block'></div> ";
                            }
                                    ?>
                            <td><?php echo $flag; ?> &nbsp;<?php echo e($Analytic->country); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
                <br>
                <div class="text-center">
                    <?php echo $AnalyticsVisitors->links(); ?>

                </div>
                <br>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footerInclude'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backEnd.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>