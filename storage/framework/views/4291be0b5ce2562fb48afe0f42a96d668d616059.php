<?php $__env->startSection('headerInclude'); ?>
    <link href="<?php echo e(URL::to("backEnd/libs/jquery/bootstrap-daterangepicker/daterangepicker-bs3.css")); ?>" rel="stylesheet"
          type="text/css"/>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="padding">
        <div class="row m-b">
            <div class="col-sm-6 m-b-sm">
                <h3> <?php echo e(trans('backLang.visitorsAnalytics')); ?> [ <?php echo e(trans('backLang.'.$statText)); ?> ]</h3>
            </div>
            <div class="col-sm-6 text-sm-right">
                <div class="btn-group m-l-xs m-t-1">
                    <?php echo e(Form::open(['route'=>['analyticsFilter',$stat],'method'=>'POST', 'id' => "form_ofchangedate" ])); ?>

                    <div id="dashboard-report-range" class="btn btn-sm primary"
                         data-placement="top" data-original-title="Change dashboard date range">
                        <i class="fa fa-calendar"></i>
								<span>
								</span>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <input type="hidden" id="this_daterangepicker_start"
                           name="this_daterangepicker_start"
                           value="<?php echo date("d-m-Y", strtotime($daterangepicker_start)); ?>"/>
                    <input type="hidden" id="this_daterangepicker_end" name="this_daterangepicker_end"
                           value="<?php echo date("d-m-Y", strtotime($daterangepicker_end)); ?>"/>
                    <?php echo e(Form::close()); ?>

                </div>
            </div>
        </div>
        <div class="row m-b">
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="box-color p-a-3 primary">
                    <div class="pull-right m-l">
            <span class="w-56 dker text-center rounded">
              <i class="text-lg material-icons">&#xe7fb;</i>
            </span>
                    </div>
                    <div class="clear">
                        <h3 class="m-a-0 text-lg"><a href><?php echo e($TotalVisitors); ?></a></h3>
                        <small class="text-muted"><?php echo e(trans('backLang.visitors')); ?></small>
                    </div>
                </div>
                <div class="box-color p-a-3 warn">
                    <div class="pull-right m-l">
            <span class="w-56 dker text-center rounded">
              <i class="text-lg material-icons">&#xe54b;</i>
            </span>
                    </div>
                    <div class="clear">
                        <h3 class="m-a-0 text-lg"><a href><?php echo e($TotalPages); ?></a></h3>
                        <small class="text-muted"><?php echo e(trans('backLang.pageViews')); ?></small>
                    </div>
                </div>
            </div>
            <div class="col-sm-9 col-md-9">
                <div class="box">
                    <div class="box-header">
                        <h3><?php echo e(trans('backLang.diagram')); ?></h3>
                        <small><?php echo e(trans('backLang.barDiagram')); ?></small>
                    </div>
                    <div class="box-body">
                        <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
              [
                {
                  data: [
                  <?php
                        $ii = 1;
                        ?>
                        <?php $__currentLoopData = $AnalyticsValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <?php if($ii<=10): ?>
                        <?php if($ii!=1): ?>
                                ,
                                <?php endif; ?>
                        <?php
                        $i2 = 0;
                        ?>
                        <?php $__currentLoopData = $id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        if ($i2 == 1) {
                        ?>
                                [<?php echo e($ii); ?>, <?php echo e($val); ?>]
                                <?php
                        }
                        $i2++;
                        ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        <?php $ii++;?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                ],
                                                                bars: { show: true, barWidth: 0.25, lineWidth: 1, fillColor: { colors: [{ opacity: 0.8 }, { opacity: 1}] }, order:1 }
                                                              },
                                                              {
                                                                data: [
                                                                                  <?php
                        $ii = 1;
                        ?>
                        <?php $__currentLoopData = $AnalyticsValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <?php if($ii<=10): ?>
                        <?php if($ii!=1): ?>
                                ,
                                <?php endif; ?>
                        <?php
                        $i2 = 0;
                        ?>
                        <?php $__currentLoopData = $id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        if ($i2 == 2) {
                        ?>
                                [<?php echo e($ii); ?>, <?php echo e($val); ?>]
                                <?php
                        }
                        $i2++;
                        ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        <?php $ii++;?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                ],
                                bars: { show: true, barWidth: 0.25, lineWidth: 1, fillColor: { colors: [{ opacity: 0.8 }, { opacity: 1}] }, order:2 }
                              }
                            ],
                            {
                              colors: ['#0cc2aa','#fcc100'],
                              series: { shadowSize: 3 },
                              xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
                              yaxis:{ show: true, font: { color: '#ccc' }},
                              grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
                              tooltip: true,
                              tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
                            }
                          " style="height:207px">
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="box m-b-0">
                <div class="table-responsive">
                    <table class="table table-striped  b-t">
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th><?php echo e(trans('backLang.'.$statText)); ?></th>
                            <th class="text-center"><?php echo e(trans('backLang.visitors')); ?></th>
                            <th class="text-center"><?php echo e(trans('backLang.pageViews')); ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $ii = 1;
                        ?>
                        <?php $__currentLoopData = $AnalyticsValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($ii<=60): ?>
                                <tr>
                                    <td class="text-center"><?php echo e($ii); ?></td>
                                    <?php
                                    $i2 = 0;
                                    ?>
                                    <?php $__currentLoopData = $id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                        if ($i2 == 0) {
                                        if (strlen($val) > 80) {
                                        $val0 = $val;
                                        $val = substr($val, 0, 80) . "..";
                                        ?>
                                        <td title="<?php echo e($val0); ?>"><?php echo e($val); ?></td>
                                        <?php
                                        }else{
                                        ?>
                                        <td><?php echo e($val); ?></td>
                                        <?php
                                        }
                                        }else{
                                        ?>
                                        <td class="text-center"><?php echo e($val); ?></td>
                                        <?php
                                        }
                                        $i2++;
                                        ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tr>
                            <?php endif; ?>
                            <?php $ii++;?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footerInclude'); ?>
    <script src="<?php echo e(URL::to("backEnd/libs/jquery/bootstrap-daterangepicker/moment.min.js")); ?>"
            type="text/javascript"></script>
    <script src="<?php echo e(URL::to("backEnd/libs/jquery/bootstrap-daterangepicker/daterangepicker.js")); ?>"
            type="text/javascript"></script>
    <script type="text/javascript">
        var Index = function () {
            return {
                initDashboardDaterange: function () {

                    $('#dashboard-report-range').daterangepicker({
                                opens: ('<?php echo e(trans('backLang.left')); ?>'),
                                startDate: '<?php echo date("d-m-Y", strtotime($daterangepicker_start)); ?>',
                                endDate: '<?php echo date("d-m-Y", strtotime($daterangepicker_end)); ?>',
                                minDate: '<?php echo $min_visitor_date; ?>',
                                maxDate: '<?php echo $max_visitor_date; ?>',
                                showDropdowns: false,
                                showWeekNumbers: false,
                                timePicker: false,
                                timePickerIncrement: 1,
                                timePicker12Hour: true,
                                ranges: {
                                    '<?php echo e(trans('backLang.today')); ?>': [moment(), moment()],
                                    '<?php echo e(trans('backLang.yesterday')); ?>': [moment().subtract('days', 1), moment().subtract('days', 1)],
                                    '<?php echo e(trans('backLang.last7Days')); ?>': [moment().subtract('days', 6), moment()],
                                    '<?php echo e(trans('backLang.last30Days')); ?>': [moment().subtract('days', 29), moment()],
                                    '<?php echo e(trans('backLang.thisMonth')); ?>': [moment().startOf('month'), moment().endOf('month')],
                                    '<?php echo e(trans('backLang.lastMonth')); ?>': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                                },
                                buttonClasses: ['btn'],
                                applyClass: 'primary',
                                cancelClass: 'default',
                                format: 'DD-MM-YYYY',
                                separator: ' <?php echo e(trans('backLang.applyTo')); ?> ',
                                locale: {
                                    applyLabel: '<?php echo e(trans('backLang.apply')); ?>',
                                    fromLabel: '<?php echo e(trans('backLang.applyFrom')); ?>',
                                    toLabel: '<?php echo e(trans('backLang.applyTo')); ?>',
                                    customRangeLabel: '<?php echo e(trans('backLang.customRange')); ?>',
                                    daysOfWeek: [<?php echo trans('backLang.weekDays'); ?>],
                                    monthNames: [<?php echo trans('backLang.monthsNames'); ?>],
                                    firstDay: 1
                                }
                            },
                            function (start, end) {
                                $('#dashboard-report-range span').html(start.format('MMMM D , YYYY') + ' - ' + end.format('MMMM D , YYYY'));
                                $("#this_daterangepicker_start").val(start.format('YYYY-MM-DD'));
                                $("#this_daterangepicker_end").val(end.format('YYYY-MM-DD'));
                                $("#form_ofchangedate").submit();
                            }
                    );


                    $('#dashboard-report-range span').html("<?php echo $daterangepicker_start_text; ?>" + ' - ' + "<?php echo $daterangepicker_end_text; ?>");
                    $("#this_daterangepicker_start").val("<?php echo $daterangepicker_start; ?>");
                    $("#this_daterangepicker_end").val("<?php echo $daterangepicker_end; ?>");
                    $('#dashboard-report-range').show();
                }
            };

        }();
        jQuery(document).ready(function () {
            Index.initDashboardDaterange();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backEnd.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>