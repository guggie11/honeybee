<?php $__env->startSection('content'); ?>
    <div class="padding">
        <div class="box">
            <div class="box-header dker">
                <h3><?php echo e(trans('backLang.sectionsOf')); ?>  <?php echo trans('backLang.'.$WebmasterSection->name); ?></h3>
                <small>
                    <a href="<?php echo e(route('adminHome')); ?>"><?php echo e(trans('backLang.home')); ?></a> /
                    <a><?php echo trans('backLang.'.$WebmasterSection->name); ?></a> /
                    <a><?php echo e(trans('backLang.sectionsOf')); ?>  <?php echo trans('backLang.'.$WebmasterSection->name); ?></a>
                </small>
            </div>
            <?php if($Sections->total() > 0): ?>
                <?php if(@Auth::user()->permissionsGroup->add_status): ?>
                    <div class="row p-a">
                        <div class="col-sm-12">
                            <a class="btn btn-fw primary" href="<?php echo e(route("sectionsCreate",$WebmasterSection->id)); ?>">
                                <i class="material-icons">&#xe02e;</i>
                                &nbsp; <?php echo e(trans('backLang.sectionNew')); ?></a>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
            <?php if($Sections->total() == 0): ?>
                <div class="row p-a">
                    <div class="col-sm-12">
                        <div class=" p-a text-center ">
                            <?php echo e(trans('backLang.noData')); ?>

                            <br>
                            <br>
                            <?php if(@Auth::user()->permissionsGroup->add_status): ?>
                                <a class="btn btn-fw primary" href="<?php echo e(route("sectionsCreate",$WebmasterSection->id)); ?>">
                                    <i class="material-icons">&#xe02e;</i>
                                    &nbsp; <?php echo e(trans('backLang.sectionNew')); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if($Sections->total() > 0): ?>
                <?php echo e(Form::open(['route'=>['sectionsUpdateAll',$WebmasterSection->id],'method'=>'post'])); ?>

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
                            <th class="text-center" style="width:100px;"><?php echo e(trans('backLang.contents')); ?></th>
                            <th class="text-center" style="width:100px;"><?php echo e(trans('backLang.visits')); ?></th>
                            <th class="text-center" style="width:50px;"><?php echo e(trans('backLang.status')); ?></th>
                            <th class="text-center" style="width:200px;"><?php echo e(trans('backLang.options')); ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $title_var = "title_" . trans('backLang.boxCode');
                        $title_var2 = "title_" . trans('backLang.boxCodeOther');
                        ?>
                        <?php $__currentLoopData = $Sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                            if ($Section->$title_var != "") {
                                $title = $Section->$title_var;
                            } else {
                                $title = $Section->$title_var2;
                            }
                            ?>
                            <tr>
                                <td><label class="ui-check m-a-0">
                                        <input type="checkbox" name="ids[]" value="<?php echo e($Section->id); ?>"><i
                                                class="dark-white"></i>
                                        <?php echo Form::hidden('row_ids[]',$Section->id, array('class' => 'form-control row_no')); ?>

                                    </label>
                                </td>
                                <td>
                                    <?php if($Section->photo !=""): ?>
                                        <div class="pull-right">
                                            <img src="<?php echo e(URL::to('uploads/sections/'.$Section->photo)); ?>"
                                                 style="height: 30px" alt="<?php echo e($title); ?>">
                                        </div>
                                    <?php endif; ?>
                                    <?php echo Form::text('row_no_'.$Section->id,$Section->row_no, array('class' => 'form-control row_no','id'=>'row_no')); ?>

                                    <?php if($Section->icon !=""): ?>
                                        <i class="fa <?php echo $Section->icon; ?> "></i>
                                    <?php endif; ?>
                                    <?php echo e($title); ?></td>
                                <td class="text-center">
                                    <?php echo count($Section->topics); ?>

                                </td>
                                <td class="text-center">
                                    <?php echo $Section->visits; ?>

                                </td>

                                <td class="text-center">
                                    <i class="fa <?php echo e(($Section->status==1) ? "fa-check text-success":"fa-times text-danger"); ?> inline"></i>
                                </td>
                                <td class="text-center">
                                    <?php if(@Auth::user()->permissionsGroup->edit_status): ?>
                                        <a class="btn btn-sm success"
                                           href="<?php echo e(route("sectionsEdit",["webmasterId"=>$WebmasterSection->id,"id"=>$Section->id])); ?>">
                                            <small><i class="material-icons">&#xe3c9;</i> <?php echo e(trans('backLang.edit')); ?>

                                            </small>
                                        </a>
                                    <?php endif; ?>
                                        <?php if(@Auth::user()->permissionsGroup->delete_status): ?>
                                        <button class="btn btn-sm warning" data-toggle="modal"
                                                data-target="#m-<?php echo e($Section->id); ?>" ui-toggle-class="bounce"
                                                ui-target="#animate">
                                            <small><i class="material-icons">&#xe872;</i> <?php echo e(trans('backLang.delete')); ?>

                                            </small>
                                        </button>
                                    <?php endif; ?>

                                </td>
                            </tr>
                            <!-- .modal -->
                            <div id="m-<?php echo e($Section->id); ?>" class="modal fade" data-backdrop="true">
                                <div class="modal-dialog" id="animate">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title"><?php echo e(trans('backLang.confirmation')); ?></h5>
                                        </div>
                                        <div class="modal-body text-center p-lg">
                                            <p>
                                                <?php echo e(trans('backLang.confirmationDeleteMsg')); ?>

                                                <br>
                                                <strong>[ <?php echo e($title); ?> ]</strong>
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn dark-white p-x-md"
                                                    data-dismiss="modal"><?php echo e(trans('backLang.no')); ?></button>
                                            <a href="<?php echo e(route("sectionsDestroy",["webmasterId"=>$WebmasterSection->id,"id"=>$Section->id])); ?>"
                                               class="btn danger p-x-md"><?php echo e(trans('backLang.yes')); ?></a>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div>
                            </div>
                            <!-- / .modal -->


                            <?php $__currentLoopData = $Section->fatherSections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subSection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                if ($subSection->$title_var != "") {
                                    $title = $subSection->$title_var;
                                } else {
                                    $title = $subSection->$title_var2;
                                }
                                ?>
                                <tr>
                                    <td><label class="ui-check m-a-0">
                                            <input type="checkbox" name="ids[]" value="<?php echo e($subSection->id); ?>"><i
                                                    class="dark-white"></i>
                                            <?php echo Form::hidden('row_ids[]',$subSection->id, array('class' => 'form-control row_no')); ?>

                                        </label>
                                    </td>
                                    <td>
                                        <?php if($subSection->photo !=""): ?>
                                            <div class="pull-right">
                                                <img src="<?php echo e(URL::to('uploads/sections/'.$subSection->photo)); ?>"
                                                     style="height: 30px" alt="<?php echo e($title); ?>">
                                            </div>
                                        <?php endif; ?>
                                        <img src="<?php echo e(URL::to('backEnd/assets/images/treepart_'.trans('backLang.direction').'.png')); ?>"
                                             class="submenu_tree">
                                        <?php echo Form::text('row_no_'.$subSection->id,$subSection->row_no, array('class' => 'form-control row_no','id'=>'row_no')); ?>

                                        <?php if($subSection->icon !=""): ?>
                                            <i class="fa <?php echo $subSection->icon; ?> "></i>
                                        <?php endif; ?>
                                        <?php echo $title; ?></td>
                                    <td class="text-center">
                                        <?php echo $subSection->visits; ?>

                                    </td>
                                    <td class="text-center">
                                        <?php echo $subSection->visits; ?>

                                    </td>
                                    <td class="text-center">
                                        <i class="fa <?php echo e(($subSection->status==1) ? "fa-check text-success":"fa-times text-danger"); ?> inline"></i>
                                    </td>
                                    <td class="text-center">
                                        <?php if(@Auth::user()->permissionsGroup->edit_status): ?>
                                            <a class="btn btn-sm success"
                                               href="<?php echo e(route("sectionsEdit",["webmasterId"=>$WebmasterSection->id,"id"=>$subSection->id])); ?>">
                                                <small><i class="material-icons">
                                                        &#xe3c9;</i> <?php echo e(trans('backLang.edit')); ?>

                                                </small>
                                            </a>
                                        <?php endif; ?>
                                            <?php if(@Auth::user()->permissionsGroup->delete_status): ?>
                                            <button class="btn btn-sm warning" data-toggle="modal"
                                                    data-target="#m-<?php echo e($subSection->id); ?>" ui-toggle-class="bounce"
                                                    ui-target="#animate">
                                                <small><i class="material-icons">
                                                        &#xe872;</i> <?php echo e(trans('backLang.delete')); ?>

                                                </small>
                                            </button>
                                        <?php endif; ?>

                                    </td>
                                </tr>
                                <!-- .modal -->
                                <div id="m-<?php echo e($subSection->id); ?>" class="modal fade" data-backdrop="true">
                                    <div class="modal-dialog" id="animate">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title"><?php echo e(trans('backLang.confirmation')); ?></h5>
                                            </div>
                                            <div class="modal-body text-center p-lg">
                                                <p>
                                                    <?php echo e(trans('backLang.confirmationDeleteMsg')); ?>

                                                    <br>
                                                    <strong>[ <?php echo e($title); ?> ]</strong>
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn dark-white p-x-md"
                                                        data-dismiss="modal"><?php echo e(trans('backLang.no')); ?></button>
                                                <a href="<?php echo e(route("sectionsDestroy",["webmasterId"=>$WebmasterSection->id,"id"=>$subSection->id])); ?>"
                                                   class="btn danger p-x-md"><?php echo e(trans('backLang.yes')); ?></a>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div>
                                </div>
                                <!-- / .modal -->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

                            <?php if(@Auth::user()->permissionsGroup->edit_status): ?>
                                <select name="action" id="action" class="input-sm form-control w-sm inline v-middle"
                                        required>
                                    <option value=""><?php echo e(trans('backLang.bulkAction')); ?></option>
                                    <option value="order"><?php echo e(trans('backLang.saveOrder')); ?></option>
                                    <option value="activate"><?php echo e(trans('backLang.activeSelected')); ?></option>
                                    <option value="block"><?php echo e(trans('backLang.blockSelected')); ?></option>
                                    <?php if(@Auth::user()->permissionsGroup->delete_status): ?>
                                        <option value="delete"><?php echo e(trans('backLang.deleteSelected')); ?></option>
                                    <?php endif; ?>
                                </select>
                                <button type="submit" id="submit_all"
                                        class="btn btn-sm white"><?php echo e(trans('backLang.apply')); ?></button>
                                <button id="submit_show_msg" class="btn btn-sm white" data-toggle="modal"
                                        style="display: none"
                                        data-target="#m-all" ui-toggle-class="bounce"
                                        ui-target="#animate"><?php echo e(trans('backLang.apply')); ?>

                                </button>
                            <?php endif; ?>
                        </div>

                        <div class="col-sm-3 text-center">
                            <small class="text-muted inline m-t-sm m-b-sm"><?php echo e(trans('backLang.showing')); ?> <?php echo e($Sections->firstItem()); ?>

                                -<?php echo e($Sections->lastItem()); ?> <?php echo e(trans('backLang.of')); ?>

                                <strong><?php echo e($Sections->total()); ?></strong> <?php echo e(trans('backLang.records')); ?></small>
                        </div>
                        <div class="col-sm-6 text-right text-center-xs">
                            <?php echo $Sections->links(); ?>

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