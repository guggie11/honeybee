<?php $__env->startSection('content'); ?>
    <div class="padding">
        <div class="app-body-inner">
            <div class="row-col row-col-xs">
                <!-- column -->
                <div class="col-sm-2 col-md-2 w w-auto-sm b-r">
                    <div class="row-col">
                        <div class="row-row">
                            <div class=" hover">
                                <div class="row-inner"><br>
                                    <div class="nav nav-pills nav-stacked m-t-sm">
                                        <div class="row-row">
                                            <div class="col-sm-9 p-a-0">
                                                <br>
                                                <ul class="list">
                                                    <?php
                                                    if (Session::has('ContactToEdit')) {
                                                        $group_id = Session::get('ContactToEdit')->group_id;
                                                    }
                                                    ?>
                                                    <li class="marginBottom5"><a
                                                                href="<?php echo e(route('contacts')); ?>" <?php echo ($group_id=="") ? " style='font-weight: bold;color:#0cc2aa'":""; ?>> <?php echo e(trans('backLang.allContacts')); ?>


                                                            <small>(<?php echo e($AllContactsCount); ?>)</small>

                                                        </a>
                                                    </li>

                                                    <?php $__currentLoopData = $ContactsGroups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ContactsGroup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li class="marginBottom5"
                                                            onmouseover="document.getElementById('grpRow<?php echo e($ContactsGroup->id); ?>').style.display='block'"
                                                            onmouseout="document.getElementById('grpRow<?php echo e($ContactsGroup->id); ?>').style.display='none'">
                                                            <a href="<?php echo e(route("contacts",["group_id"=>$ContactsGroup->id])); ?>" <?php echo ($ContactsGroup->id == $group_id) ? " style='font-weight: bold;color:#0cc2aa'":""; ?> > <?php echo $ContactsGroup->name; ?>


                                                                <small>(<?php echo e(count($ContactsGroup->contacts)); ?>)</small>

                                                            </a>

                                                            <div id="grpRow<?php echo e($ContactsGroup->id); ?>"
                                                                 class="pull-right displayNone">
                                                                <a class="btn btn-sm success p-a-0 m-a-0"
                                                                   title="<?php echo e(trans('backLang.edit')); ?>"
                                                                   href="<?php echo e(route("contactsEditGroup",["id"=>$ContactsGroup->id])); ?>">
                                                                    <small>&nbsp;<i class="material-icons">&#xe3c9;</i>&nbsp;
                                                                    </small>
                                                                </a>
                                                                <?php if(@Auth::user()->permissionsGroup->delete_status): ?>
                                                                    <button class="btn btn-sm warning p-a-0 m-a-0"
                                                                            data-toggle="modal"
                                                                            data-target="#mg-<?php echo e($ContactsGroup->id); ?>"
                                                                            ui-toggle-class="bounce"
                                                                            title="<?php echo e(trans('backLang.delete')); ?>"
                                                                            ui-target="#animate">
                                                                        <small>&nbsp;<i class="material-icons">
                                                                                &#xe872;</i>&nbsp;
                                                                        </small>
                                                                    </button>

                                                                <?php endif; ?>
                                                            </div>
                                                            <!-- .modal -->
                                                            <div id="mg-<?php echo e($ContactsGroup->id); ?>" class="modal fade"
                                                                 data-backdrop="true">
                                                                <div class="modal-dialog" id="animate">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"><?php echo e(trans('backLang.confirmation')); ?></h5>
                                                                        </div>
                                                                        <div class="modal-body text-center p-lg">
                                                                            <p>
                                                                                <?php echo e(trans('backLang.confirmationDeleteMsg')); ?>

                                                                                <br>
                                                                                <strong>[ <?php echo e($ContactsGroup->name); ?>

                                                                                    ]</strong>
                                                                            </p>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                    class="btn dark-white p-x-md"
                                                                                    data-dismiss="modal"><?php echo e(trans('backLang.no')); ?></button>
                                                                            <a href="<?php echo e(route("contactsDestroyGroup",["id"=>$ContactsGroup->id])); ?>"
                                                                               class="btn danger p-x-md"><?php echo e(trans('backLang.yes')); ?></a>
                                                                        </div>
                                                                    </div><!-- /.modal-content -->
                                                                </div>
                                                            </div>
                                                            <!-- / .modal -->
                                                        </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                                    <li class="marginBottom5"><a
                                                                <?php echo ($group_id=="wait") ? " style='font-weight: bold;color:#0cc2aa'":""; ?>

                                                                href="<?php echo e(route("contacts",["group_id"=>"wait"])); ?>"> <?php echo e(trans('backLang.waitActivation')); ?>


                                                            <small>(<?php echo e($WaitContactsCount); ?>)</small>

                                                        </a></li>
                                                    <li>
                                                        <a <?php echo ($group_id=="blocked") ? " style='font-weight: bold;color:#0cc2aa'":""; ?> href="<?php echo e(route("contacts",["group_id"=>"blocked"])); ?>"> <?php echo e(trans('backLang.blockedContacts')); ?>


                                                            <small>( <?php echo e($BlockedContactsCount); ?>)</small>

                                                        </a></li>
                                                </ul>
                                                <div class="p-y">
                                                    <?php if(Session::has('EditContactsGroup')): ?>
                                                        <?php echo e(Form::open(['route'=>['contactsUpdateGroup',Session::get('EditContactsGroup')->id],'method'=>'POST'])); ?>

                                                        <div class="input-group input-group-sm">
                                                            <?php echo Form::text('name',Session::get('EditContactsGroup')->name, array('placeholder' => trans('backLang.newGroup'),'class' => 'form-control','id'=>'name','required'=>'')); ?>

                                                            <span class="input-group-btn">
                <button class="btn btn-default b-a no-shadow" type="submit"><?php echo trans('backLang.save'); ?></button>
              </span>
                                                        </div>
                                                        <?php echo e(Form::close()); ?>

                                                    <?php else: ?>
                                                        <?php if(@Auth::user()->permissionsGroup->add_status): ?>
                                                            <?php echo e(Form::open(['route'=>['contactsStoreGroup'],'method'=>'POST'])); ?>

                                                            <div class="input-group input-group-sm">
                                                                <?php echo Form::text('name','', array('placeholder' => trans('backLang.newGroup'),'class' => 'form-control','id'=>'name','required'=>'')); ?>

                                                                <span class="input-group-btn">
                <button class="btn btn-default b-a no-shadow" type="submit"><?php echo trans('backLang.add'); ?></button>
              </span>
                                                            </div>
                                                        <?php endif; ?>
                                                        <?php echo e(Form::close()); ?>

                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="<?php echo e(route('contacts')); ?>"
                                           class="btn btn-sm white btn-addon primary m-b-1"><i class="material-icons">
                                                &#xe02e;</i> <?php echo e(trans('backLang.newContacts')); ?>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>


                        </div>
                    </div>
                </div>
                <!-- /column -->
                <?php if($Contacts->total() > 0): ?>
                        <!-- column -->
                <div class="col-sm-4 col-md-3 bg b-r">
                    <div class="row-col">
                        <div class="p-a-xs b-b">
                            <?php echo e(Form::open(['route'=>['contactsSearch'],'method'=>'POST'])); ?>

                            <div class="input-group">
                                <button type="submit" style="padding-top: 10px;"
                                        class="input-group-addon no-border no-bg pull-left"><i class="fa fa-search"></i>
                                </button>
                                <input type="text" style="width: 85%" name="q" required value="<?php echo e($search_word); ?>"
                                       class="form-control no-border no-bg"
                                       placeholder="<?php echo e(trans('backLang.searchAllContacts')); ?>">
                            </div>
                            <?php echo e(Form::close()); ?>

                        </div>
                        <div class="row-row">
                            <div class="row-body scrollable hover">
                                <div class="row-inner">
                                    <div class="list inset">

                                        <?php $__currentLoopData = $Contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <?php
                                            $active_cls = "";
                                            ?>
                                            <?php if(Session::has('ContactToEdit')): ?>
                                                <?php if(Session::get('ContactToEdit')->id == $Contact->id): ?>
                                                    <?php
                                                    $active_cls = "primary";
                                                    ?>
                                                <?php endif; ?>
                                            <?php endif; ?>

                                            <div class="list-item pointer <?php echo e($active_cls); ?>"
                                                 onclick="javascript: location.href='<?php echo e(route("contactsEdit",["id"=>$Contact->id])); ?>'">
                                                <div class="list-left">
                    <span class="w-40 avatar">
                        <a href="<?php echo e(route("contactsEdit",["id"=>$Contact->id])); ?>">
                            <?php if($Contact->photo!=""): ?>
                                <img src="<?php echo e(URL::to('uploads/contacts/'.$Contact->photo)); ?>" class="img-circle">
                            <?php else: ?>
                                <img src="<?php echo e(URL::to('uploads/contacts/profile.jpg')); ?>" class="img-circle"
                                     style="opacity: 0.5">
                            <?php endif; ?>
                        </a>
                    </span>
                                                </div>
                                                <div class="list-body">
                                                    <a href="<?php echo e(route("contactsEdit",["id"=>$Contact->id])); ?>">
                                                        <?php if($Contact->first_name !="" || $Contact->last_name !=""): ?>
                                                            <?php echo e($Contact->first_name); ?> <?php echo e($Contact->last_name); ?>

                                                        <?php else: ?>
                                                            <?php echo e(substr($Contact->email,0, strpos($Contact->email, "@"))); ?>

                                                        <?php endif; ?>
                                                        <small class="block"><i
                                                                    class="fa fa-phone m-r-sm text-muted"></i>
                                                            <span dir="ltr">
                                                                <?php if($Contact->phone !=""): ?>
                                                                    <?php echo e($Contact->phone); ?>

                                                                <?php else: ?>
                                                                    <?php echo e(substr($Contact->email, strpos($Contact->email, "@"))); ?>

                                                                <?php endif; ?>
                                                            </span>
                                                        </small>
                                                    </a>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if($Contacts->total() > env('BACKEND_PAGINATION')): ?>
                            <div class="p-a b-t text-center">
                                <?php echo $Contacts->links(); ?>

                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- /column -->
                <?php endif; ?>

                <?php if(Session::has('ContactToEdit')): ?>
                        <!-- column -->
                <div class="col-sm-6 col-md-7">
                    <div class="row-col">
                        <div class="p-a-sm">
                            <div>
                                <a class="btn btn-sm white"><i class="material-icons">
                                        &#xe3c9;</i> <?php echo e(trans('backLang.editContacts')); ?></a>

                            </div>
                        </div>
                        <div class="row-row">
                            <div class="row-body">
                                <div class="row-inner">
                                    <div class="padding">
                                        <?php if(Session::has('doneMessage2')): ?>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="alert alert-success">
                                                        <button type="button" class="close" data-dismiss="alert"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                        <?php echo e(Session::get('doneMessage2')); ?>

                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <?php echo e(Form::open(['route'=>['contactsUpdate',Session::get('ContactToEdit')->id],'method'=>'POST', 'files' => true])); ?>

                                        <div class="row-col h-auto m-b-1">
                                            <div class="col-sm-3">
                                                <div class="avatar w-64 inline">
                                                    <?php if(Session::get('ContactToEdit')->photo !=""): ?>
                                                        <img id="photo_preview"
                                                             src="<?php echo e(URL::to('uploads/contacts/'.Session::get('ContactToEdit')->photo)); ?>">
                                                    <?php else: ?>
                                                        <img id="photo_preview"
                                                             src="<?php echo e(URL::to('uploads/contacts/profile.jpg')); ?>"
                                                             style="opacity: 0.2">
                                                    <?php endif; ?>
                                                </div>
                                                <div class="form-file">
                                                    <input id="photo_file" type="file" name="file" accept="image/*">
                                                    <button class="btn white btn-sm">
                                                        <small>
                                                            <small><?php echo e(trans('backLang.selectFile')); ?> ..</small>
                                                        </small>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 v-m h2 _300">
                                                <div class="p-l-xs">
                                                    <?php echo Form::text('first_name',Session::get('ContactToEdit')->first_name, array('placeholder' =>trans('backLang.firstName'),'class' => 'form-control w-sm inline','id'=>'first_name','required'=>'')); ?>

                                                    <?php echo Form::text('last_name',Session::get('ContactToEdit')->last_name, array('placeholder' =>trans('backLang.lastName'),'class' => 'form-control w-sm inline','id'=>'last_name','required'=>'')); ?>

                                                    <?php if(count($ContactsGroups) >0): ?>
                                                        <select name="group_id" id="country_id"
                                                                class="form-control c-select w-sm inline"
                                                                style="margin-top: 6px;">
                                                            <option value="">- - <?php echo trans('backLang.group'); ?> - -
                                                            </option>

                                                            <?php $__currentLoopData = $ContactsGroups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($Group->id); ?>" <?php echo e(($Group->id == Session::get('ContactToEdit')->group_id) ? "selected='selected'":""); ?>><?php echo e($Group->name); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                        </select>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- fields -->
                                        <div class="form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label"><?php echo e(trans('backLang.contactPhone')); ?></label>
                                                <div class="col-sm-6">
                                                    <?php echo Form::text('phone',Session::get('ContactToEdit')->phone, array('placeholder' =>'','class' => 'form-control','id'=>'phone')); ?>

                                                </div>
                                                <?php if(Session::get('ContactToEdit')->phone !=""): ?>
                                                    <div class="col-sm-3">
                                                        <a href="tel:<?php echo e(Session::get('ContactToEdit')->phone); ?>"
                                                           class="btn white pull-right" style="width: 100%">
                                                            <small>
                                                                <i class="material-icons">
                                                                    &#xe0b1;</i> <?php echo e(trans('backLang.callNow')); ?>

                                                            </small>
                                                        </a>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label"><?php echo e(trans('backLang.contactEmail')); ?></label>
                                                <div class="col-sm-6">
                                                    <?php echo Form::email('email',Session::get('ContactToEdit')->email, array('placeholder' =>'','class' => 'form-control','id'=>'email','required'=>'')); ?>

                                                </div>
                                                <div class="col-sm-3">
                                                    <a href="<?php echo e(route("webmails",["group_id"=>"create","stat"=>"email","wid"=>'new',"contact_email"=>Session::get('ContactToEdit')->email])); ?>"
                                                       style="width: 100%" class="btn white pull-right">
                                                        <small>
                                                            <i class="material-icons">
                                                                &#xe151;</i> <?php echo e(trans('backLang.sendEmail')); ?>

                                                        </small>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label"><?php echo e(trans('backLang.companyName')); ?></label>
                                                <div class="col-sm-9">
                                                    <?php echo Form::text('company',Session::get('ContactToEdit')->company, array('placeholder' =>'','class' => 'form-control','id'=>'company')); ?>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label"><?php echo trans('backLang.country'); ?></label>
                                                <div class="col-sm-6">
                                                    <select name="country_id" id="country_id"
                                                            class="form-control c-select">
                                                        <option value="">- - <?php echo trans('backLang.country'); ?> - -
                                                        </option>
                                                        <?php
                                                        $title_var = "title_" . trans('backLang.boxCode');
                                                        $title_var2 = "title_" . trans('backLang.boxCodeOther');
                                                        ?>
                                                        <?php $__currentLoopData = $Countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php
                                                            if ($country->$title_var != "") {
                                                                $title = $country->$title_var;
                                                            } else {
                                                                $title = $country->$title_var2;
                                                            }
                                                            ?>
                                                            <option value="<?php echo e($country->id); ?>" <?php echo e(($country->id == Session::get('ContactToEdit')->country_id) ? "selected='selected'":""); ?>><?php echo e($title); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                                <div class="col-sm-3">
                                                    <?php echo Form::text('city',Session::get('ContactToEdit')->city, array('placeholder' =>trans('backLang.city'),'class' => 'form-control','id'=>'city')); ?>

                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label"><?php echo e(trans('backLang.notes')); ?></label>
                                                <div class="col-sm-9">
                                                    <?php echo Form::textarea('notes',Session::get('ContactToEdit')->notes, array('placeholder' => '','class' => 'form-control','rows'=>'3')); ?>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label"><?php echo e(trans('backLang.status')); ?></label>
                                                <div class="col-sm-9">
                                                    <div class="radio">
                                                        <label class="ui-check ui-check-md">
                                                            <?php echo Form::radio('status','1',(Session::get('ContactToEdit')->status==1) ? true : false, array('id' => 'status1','class'=>'has-value')); ?>

                                                            <i class="dark-white"></i>
                                                            <?php echo e(trans('backLang.active')); ?>

                                                        </label>

                                                        &nbsp; &nbsp;
                                                        <label class="ui-check ui-check-md">
                                                            <?php echo Form::radio('status','2',(Session::get('ContactToEdit')->status==2) ? true : false, array('id' => 'status3','class'=>'has-value')); ?>

                                                            <i class="dark-white"></i>
                                                            <?php echo e(trans('backLang.waitActivation')); ?>

                                                        </label>
                                                        &nbsp; &nbsp;
                                                        <label class="ui-check ui-check-md">
                                                            <?php echo Form::radio('status','0',(Session::get('ContactToEdit')->status==0) ? true : false, array('id' => 'status2','class'=>'has-value')); ?>

                                                            <i class="dark-white"></i>
                                                            <?php echo e(trans('backLang.notActive')); ?>

                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                    <?php if(@Auth::user()->permissionsGroup->delete_status): ?>
                                                        <button class="btn warning pull-right" data-toggle="modal"
                                                                data-target="#mc-<?php echo e(Session::get('ContactToEdit')->id); ?>"
                                                                ui-toggle-class="bounce"
                                                                ui-target="#animate">
                                                            <small><i class="material-icons">
                                                                    &#xe872;</i> <?php echo e(trans('backLang.deleteContacts')); ?>

                                                            </small>
                                                        </button>
                                                        <?php endif; ?>
                                                                <!-- .modal -->
                                                        <div id="mc-<?php echo e(Session::get('ContactToEdit')->id); ?>"
                                                             class="modal fade"
                                                             data-backdrop="true">
                                                            <div class="modal-dialog" id="animate">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"><?php echo e(trans('backLang.confirmation')); ?></h5>
                                                                    </div>
                                                                    <div class="modal-body text-center p-lg">
                                                                        <p>
                                                                            <?php echo e(trans('backLang.confirmationDeleteMsg')); ?>

                                                                            <br>
                                                                            <strong>[ <?php echo e(Session::get('ContactToEdit')->first_name); ?>  <?php echo e(Session::get('ContactToEdit')->last_name); ?>

                                                                                ]</strong>
                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                                class="btn dark-white p-x-md"
                                                                                data-dismiss="modal"><?php echo e(trans('backLang.no')); ?></button>
                                                                        <a href="<?php echo e(route("contactsDestroy",["id"=>Session::get('ContactToEdit')->id])); ?>"
                                                                           class="btn danger p-x-md"><?php echo e(trans('backLang.yes')); ?></a>
                                                                    </div>
                                                                </div><!-- /.modal-content -->
                                                            </div>
                                                        </div>
                                                        <!-- / .modal -->

                                                        <button type="submit" class="btn btn-primary"><i
                                                                    class="material-icons">
                                                                &#xe31b;</i> <?php echo trans('backLang.save'); ?></button>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- / fields -->
                                        <?php echo e(Form::close()); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /column -->

                <?php else: ?>

                        <!-- column -->
                <div class="col-sm-6 col-md-7">
                    <div class="row-col">
                        <div class="p-a-sm">
                            <div>
                                <a class="btn btn-sm white"><i class="material-icons">
                                        &#xe02e;</i> <?php echo e(trans('backLang.newContacts')); ?></a>
                            </div>
                        </div>
                        <div class="row-row">
                            <div class="row-body">
                                <div class="row-inner">
                                    <div class="padding">
                                        <?php echo e(Form::open(['route'=>['contactsStore'],'method'=>'POST', 'files' => true ])); ?>

                                        <div class="row-col h-auto m-b-1">
                                            <div class="col-sm-3">
                                                <div class="avatar w-64 inline">
                                                    <img id="photo_preview"
                                                         src="<?php echo e(URL::to('uploads/contacts/profile.jpg')); ?>"
                                                         style="opacity: 0.2">
                                                </div>
                                                <div class="form-file">
                                                    <input id="photo_file" type="file" name="file" accept="image/*">
                                                    <button class="btn white btn-sm">
                                                        <small>
                                                            <small><?php echo e(trans('backLang.selectFile')); ?> ..</small>
                                                        </small>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 v-m h2 _300">
                                                <div class="p-l-xs">
                                                    <?php echo Form::text('first_name','', array('placeholder' =>trans('backLang.firstName'),'class' => 'form-control w-sm inline','id'=>'first_name','required'=>'')); ?>

                                                    <?php echo Form::text('last_name','', array('placeholder' =>trans('backLang.lastName'),'class' => 'form-control w-sm inline','id'=>'last_name','required'=>'')); ?>


                                                    <?php if(count($ContactsGroups) >0): ?>
                                                        <select name="group_id" id="country_id"
                                                                class="form-control c-select w-sm inline"
                                                                style="margin-top: 6px;">
                                                            <option value="">- - <?php echo trans('backLang.group'); ?> - -
                                                            </option>
                                                            <?php $__currentLoopData = $ContactsGroups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($Group->id); ?>" <?php echo e(($Group->id == $group_id) ? "selected='selected'":""); ?>><?php echo e($Group->name); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- fields -->
                                        <div class="form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label"><?php echo e(trans('backLang.contactPhone')); ?></label>
                                                <div class="col-sm-9">
                                                    <?php echo Form::text('phone','', array('placeholder' =>'','class' => 'form-control','id'=>'phone')); ?>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label"><?php echo e(trans('backLang.contactEmail')); ?></label>
                                                <div class="col-sm-9">
                                                    <?php echo Form::email('email','', array('placeholder' =>'','class' => 'form-control','id'=>'email','required'=>'')); ?>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label"><?php echo e(trans('backLang.companyName')); ?></label>
                                                <div class="col-sm-9">
                                                    <?php echo Form::text('company','', array('placeholder' =>'','class' => 'form-control','id'=>'company')); ?>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label"><?php echo trans('backLang.country'); ?></label>
                                                <div class="col-sm-9">
                                                    <select name="country_id" id="country_id"
                                                            class="form-control c-select">
                                                        <option value="">- - <?php echo trans('backLang.country'); ?> - -
                                                        </option>
                                                        <?php
                                                        $title_var = "title_" . trans('backLang.boxCode');
                                                        $title_var2 = "title_" . trans('backLang.boxCodeOther');
                                                        ?>
                                                        <?php $__currentLoopData = $Countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php
                                                            if ($country->$title_var != "") {
                                                                $title = $country->$title_var;
                                                            } else {
                                                                $title = $country->$title_var2;
                                                            }
                                                            ?>
                                                            <option value="<?php echo e($country->id); ?>"><?php echo e($title); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label"><?php echo e(trans('backLang.city')); ?></label>
                                                <div class="col-sm-9">
                                                    <?php echo Form::text('city','', array('placeholder' =>'','class' => 'form-control','id'=>'city')); ?>

                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label"><?php echo e(trans('backLang.notes')); ?></label>
                                                <div class="col-sm-9">
                                                    <?php echo Form::textarea('notes','', array('placeholder' => '','class' => 'form-control','rows'=>'3')); ?>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                    <button type="submit" class="btn btn-primary"><i
                                                                class="material-icons">
                                                            &#xe31b;</i> <?php echo trans('backLang.add'); ?></button>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- / fields -->
                                        <?php echo e(Form::close()); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /column -->
                <?php endif; ?>

            </div>
        </div>
    </div>
    <style>
        .app-footer {
            display: none;
        }
    </style>
    <script type="text/javascript">
        function readURL(input) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#photo_preview').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#photo_file").change(function () {
            readURL(this);
            $('#photo_preview').css("opacity", 1);
        });
    </script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footerInclude'); ?>
    <script type="text/javascript">
        function readURL(input) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#photo_preview').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#photo_file").change(function () {
            readURL(this);
            $('#photo_preview').css("opacity", 1);
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backEnd.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>