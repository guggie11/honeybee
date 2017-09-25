<?php $__env->startSection('content'); ?>
    <div class="padding">
        <div class="box">
            <div class="box-header dker">
                <h3><?php echo e(trans('backLang.siteSectionsSettings')); ?></h3>
                <small>
                    <a href="<?php echo e(route('adminHome')); ?>"><?php echo e(trans('backLang.home')); ?></a> /
                    <?php echo e(trans('backLang.webmasterTools')); ?> /
                    <a href=""><?php echo e(trans('backLang.siteSectionsSettings')); ?></a>
                </small>
            </div>
            <div class="row p-a">
                <div class="col-sm-12">
                    <a class="btn btn-fw primary" href="<?php echo e(route("WebmasterSectionsCreate")); ?>">
                        <i class="material-icons">&#xe02e;</i>
                        &nbsp; <?php echo e(trans('backLang.sectionNew')); ?></a>
                </div>
            </div>
            <?php if($WebmasterSections->total() == 0): ?>
                <div class="row p-a">
                    <div class="col-sm-12">
                        <div class=" p-a text-center light ">
                            <?php echo e(trans('backLang.noData')); ?>

                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if($WebmasterSections->total() > 0): ?>
                <?php echo e(Form::open(['route'=>'WebmasterSectionsUpdateAll','method'=>'post'])); ?>

                <div class="table-responsive">
                    <table class="table table-striped  b-t">
                        <thead>
                        <tr>
                            <th style="width:20px;">
                                <label class="ui-check m-a-0">
                                    <input id="checkAll" type="checkbox"><i></i>
                                </label>
                            </th>
                            <th><?php echo e(trans('backLang.sectionName')); ?></th>
                            <th><?php echo e(trans('backLang.sectionType')); ?></th>
                            <th><?php echo e(trans('backLang.hasCategories')); ?></th>
                            <th class="text-center" style="width:50px;"><?php echo e(trans('backLang.status')); ?></th>
                            <th class="text-center" style="width:200px;"><?php echo e(trans('backLang.options')); ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $WebmasterSections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $WebmasterSection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><label class="ui-check m-a-0">
                                        <input type="checkbox" name="ids[]" value="<?php echo e($WebmasterSection->id); ?>"><i
                                                class="dark-white"></i>
                                        <?php echo Form::hidden('row_ids[]',$WebmasterSection->id, array('class' => 'form-control row_no')); ?>

                                    </label>
                                </td>
                                <td>
                                    <?php echo Form::text('row_no_'.$WebmasterSection->id,$WebmasterSection->row_no, array('class' => 'form-control row_no','id'=>'row_no')); ?>

                                    <?php echo trans('backLang.'.$WebmasterSection->name); ?></td>
                                <td><?php echo ($WebmasterSection->type==3) ? "<span class='label blue'><i class='material-icons'>&#xe050;</i>  ".trans('backLang.typeSounds')."</span>":""; ?>

                                    <?php echo ($WebmasterSection->type==2) ? "<span class='label red'><i class='material-icons'>&#xe63a;</i>  ".trans('backLang.typeVideos')."</span>":""; ?>

                                    <?php echo ($WebmasterSection->type==1) ? "<span class='label green'><i class='material-icons'>&#xe251;</i>  ".trans('backLang.typePhotos')."</span>":""; ?>

                                    <?php echo ($WebmasterSection->type==0) ? "<span class='label'><i class='material-icons'>&#xe165;</i>  ".trans('backLang.typeTextPages')."</span>":""; ?>

                                </td>
                                <td>
                                    <?php echo ($WebmasterSection->sections_status==2) ? "<span class='label'><i class='material-icons'>&#xe23e;</i>  ".trans('backLang.mainAndSubCategories')."</span>":""; ?>

                                    <?php echo ($WebmasterSection->sections_status==1) ? "<span class='label'><i class='material-icons'>&#xe241;</i>  ".trans('backLang.mainCategoriesOnly')."</span>":""; ?>

                                    <?php echo ($WebmasterSection->sections_status==0) ? "<span class='label'><i class='material-icons'>&#xe14b;</i>  ".trans('backLang.withoutCategories')."</span>":""; ?>

                                </td>
                                <td class="text-center">
                                    <i class="fa <?php echo e(($WebmasterSection->status==1) ? "fa-check text-success":"fa-times text-danger"); ?> inline"></i>
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-sm success"
                                       href="<?php echo e(route("WebmasterSectionsEdit",["id"=>$WebmasterSection->id])); ?>">
                                        <small><i class="material-icons">&#xe3c9;</i> <?php echo e(trans('backLang.edit')); ?>

                                        </small>
                                    </a>

                                    <button class="btn btn-sm warning" data-toggle="modal"
                                            data-target="#m-<?php echo e($WebmasterSection->id); ?>" ui-toggle-class="bounce"
                                            ui-target="#animate">
                                        <small><i class="material-icons">&#xe872;</i> <?php echo e(trans('backLang.delete')); ?>

                                        </small>
                                    </button>


                                </td>
                            </tr>
                            <!-- .modal -->
                            <div id="m-<?php echo e($WebmasterSection->id); ?>" class="modal fade" data-backdrop="true">
                                <div class="modal-dialog" id="animate">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title"><?php echo e(trans('backLang.confirmation')); ?></h5>
                                        </div>
                                        <div class="modal-body text-center p-lg">
                                            <p>
                                                <?php echo e(trans('backLang.confirmationDeleteMsg')); ?>

                                                <br>
                                                <strong>[ <?php echo e(trans('backLang.'.$WebmasterSection->name)); ?> ]</strong>
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn dark-white p-x-md"
                                                    data-dismiss="modal"><?php echo e(trans('backLang.no')); ?></button>
                                            <a href="<?php echo e(route("WebmasterSectionsDestroy",["id"=>$WebmasterSection->id])); ?>"
                                               class="btn danger p-x-md"><?php echo e(trans('backLang.yes')); ?></a>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div>
                            </div>
                            <!-- / .modal -->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>

                </div>
                <footer class="dker p-a">
                    <div class="row">
                        <div class="col-sm-3 hidden-xs">
                            <!-- .modal -->
                            <div id="m-all" class="modal fade" data-backdrop="true">
                                <div class="modal-dialog" id="animate">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title"><?php echo e(trans('backLang.confirmation')); ?></h5>
                                        </div>
                                        <div class="modal-body text-center p-lg">
                                            <p>
                                                <?php echo e(trans('backLang.confirmationDeleteMsg')); ?>

                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn dark-white p-x-md"
                                                    data-dismiss="modal"><?php echo e(trans('backLang.no')); ?></button>
                                            <button type="submit"
                                                    class="btn danger p-x-md"><?php echo e(trans('backLang.yes')); ?></button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div>
                            </div>
                            <!-- / .modal -->

                            <select name="action" id="action" class="input-sm form-control w-sm inline v-middle"
                                    required>
                                <option value=""><?php echo e(trans('backLang.bulkAction')); ?></option>
                                <option value="order"><?php echo e(trans('backLang.saveOrder')); ?></option>
                                <option value="activate"><?php echo e(trans('backLang.activeSelected')); ?></option>
                                <option value="block"><?php echo e(trans('backLang.blockSelected')); ?></option>
                                <option value="delete"><?php echo e(trans('backLang.deleteSelected')); ?></option>
                            </select>
                            <button type="submit" id="submit_all"
                                    class="btn btn-sm white"><?php echo e(trans('backLang.apply')); ?></button>
                            <button id="submit_show_msg" class="btn btn-sm white" data-toggle="modal"
                                    style="display: none"
                                    data-target="#m-all" ui-toggle-class="bounce"
                                    ui-target="#animate"><?php echo e(trans('backLang.apply')); ?>

                            </button>
                        </div>

                        <div class="col-sm-3 text-center">
                            <small class="text-muted inline m-t-sm m-b-sm"><?php echo e(trans('backLang.showing')); ?> <?php echo e($WebmasterSections->firstItem()); ?>

                                -<?php echo e($WebmasterSections->lastItem()); ?> <?php echo e(trans('backLang.of')); ?>

                                <strong><?php echo e($WebmasterSections->total()); ?></strong> <?php echo e(trans('backLang.records')); ?>

                            </small>
                        </div>
                        <div class="col-sm-6 text-right text-center-xs">
                            <?php echo $WebmasterSections->links(); ?>

                        </div>
                    </div>
                </footer>
                <?php echo e(Form::close()); ?>


                <script type="text/javascript">
                    $("#checkAll").click(function () {
                        $('input:checkbox').not(this).prop('checked', this.checked);
                    });
                    $("#action").change(function () {
                        if (this.value == "delete") {
                            $("#submit_all").css("display", "none");
                            $("#submit_show_msg").css("display", "inline-block");
                        } else {
                            $("#submit_all").css("display", "inline-block");
                            $("#submit_show_msg").css("display", "none");
                        }
                    });
                </script>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footerInclude'); ?>
    <script type="text/javascript">
        $("#checkAll").click(function () {
            $('input:checkbox').not(this).prop('checked', this.checked);
        });
        $("#action").change(function () {
            if (this.value == "delete") {
                $("#submit_all").css("display", "none");
                $("#submit_show_msg").css("display", "inline-block");
            } else {
                $("#submit_all").css("display", "inline-block");
                $("#submit_show_msg").css("display", "none");
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backEnd.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>