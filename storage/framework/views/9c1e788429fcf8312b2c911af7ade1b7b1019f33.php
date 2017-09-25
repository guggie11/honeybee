<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('backEnd.users.permissions.view', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="padding">
        <div class="box">

            <div class="box-header dker">
                <h3><?php echo e(trans('backLang.users')); ?></h3>
                <small>
                    <a href="<?php echo e(route('adminHome')); ?>"><?php echo e(trans('backLang.home')); ?></a> /
                    <a href=""><?php echo e(trans('backLang.settings')); ?></a>
                </small>
            </div>

            <?php if($Users->total() >0): ?>
                <div class="row p-a pull-right" style="margin-top: -70px;">
                    <div class="col-sm-12">
                        <a class="btn btn-fw primary" href="<?php echo e(route("usersCreate")); ?>">
                            <i class="material-icons">&#xe7fe;</i>
                            &nbsp; <?php echo e(trans('backLang.newUser')); ?>

                        </a>
                    </div>
                </div>
            <?php endif; ?>
            <?php if($Users->total() == 0): ?>
                <div class="row p-a">
                    <div class="col-sm-12">
                        <div class=" p-a text-center ">
                            <?php echo e(trans('backLang.noData')); ?>

                            <br>
                            <br>
                            <a class="btn btn-fw primary" href="<?php echo e(route("usersCreate")); ?>">
                                <i class="material-icons">&#xe7fe;</i>
                                &nbsp; <?php echo e(trans('backLang.newUser')); ?>

                            </a>

                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if($Users->total() > 0): ?>
                <?php echo e(Form::open(['route'=>'usersUpdateAll','method'=>'post'])); ?>

                <div class="table-responsive">
                    <table class="table table-striped  b-t">
                        <thead>
                        <tr>
                            <th style="width:20px;">
                                <label class="ui-check m-a-0">
                                    <input id="checkAll" type="checkbox"><i></i>
                                </label>
                            </th>
                            <th><?php echo e(trans('backLang.fullName')); ?></th>
                            <th><?php echo e(trans('backLang.loginEmail')); ?></th>
                            <th><?php echo e(trans('backLang.Permission')); ?></th>
                            <th class="text-center" style="width:50px;"><?php echo e(trans('backLang.status')); ?></th>
                            <th class="text-center" style="width:200px;"><?php echo e(trans('backLang.options')); ?></th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php $__currentLoopData = $Users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $User): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><label class="ui-check m-a-0">
                                        <input type="checkbox" name="ids[]" value="<?php echo e($User->id); ?>"><i
                                                class="dark-white"></i>
                                        <?php echo Form::hidden('row_ids[]',$User->id, array('class' => 'form-control row_no')); ?>

                                    </label>
                                </td>
                                <td>
                                    <?php echo $User->name; ?>

                                </td>

                                <td>
                                    <small><?php echo $User->email; ?></small>
                                </td>
                                <td>
                                    <small><?php echo e($User->permissionsGroup->name); ?></small>
                                </td>
                                <td class="text-center">
                                    <i class="fa <?php echo e(($User->status==1) ? "fa-check text-success":"fa-times text-danger"); ?> inline"></i>
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-sm success"
                                       href="<?php echo e(route("usersEdit",["id"=>$User->id])); ?>">
                                        <small><i class="material-icons">&#xe3c9;</i> <?php echo e(trans('backLang.edit')); ?>

                                        </small>
                                    </a>

                                    <button class="btn btn-sm warning" data-toggle="modal"
                                            data-target="#m-<?php echo e($User->id); ?>" ui-toggle-class="bounce"
                                            ui-target="#animate">
                                        <small><i class="material-icons">&#xe872;</i> <?php echo e(trans('backLang.delete')); ?>

                                        </small>
                                    </button>


                                </td>
                            </tr>
                            <!-- .modal -->
                            <div id="m-<?php echo e($User->id); ?>" class="modal fade" data-backdrop="true">
                                <div class="modal-dialog" id="animate">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title"><?php echo e(trans('backLang.confirmation')); ?></h5>
                                        </div>
                                        <div class="modal-body text-center p-lg">
                                            <p>
                                                <?php echo e(trans('backLang.confirmationDeleteMsg')); ?>

                                                <br>
                                                <strong>[ <?php echo e($User->name); ?> ]</strong>
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn dark-white p-x-md"
                                                    data-dismiss="modal"><?php echo e(trans('backLang.no')); ?></button>
                                            <a href="<?php echo e(route("usersDestroy",["id"=>$User->id])); ?>"
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
                            <small class="text-muted inline m-t-sm m-b-sm"><?php echo e(trans('backLang.showing')); ?> <?php echo e($Users->firstItem()); ?>

                                -<?php echo e($Users->lastItem()); ?> <?php echo e(trans('backLang.of')); ?>

                                <strong><?php echo e($Users->total()); ?></strong> <?php echo e(trans('backLang.records')); ?></small>
                        </div>
                        <div class="col-sm-6 text-right text-center-xs">
                            <?php echo $Users->links(); ?>

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