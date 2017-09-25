<?php
$connectEmailAddress = "";
$connectEmailPassword = "";
$connectDomainURL = "";
$nMsgCount = "";
if (Auth::user()->connect_email != "" && Auth::user()->connect_password) {
    try {
        $connectEmailAddress = Auth::user()->connect_email; // Full email address
        $connectEmailPassword = Auth::user()->connect_password;        // Email password
        $connectDomainURL = substr($connectEmailAddress, strpos($connectEmailAddress, "@") + 1);
        $useHTTPS = true;
    } catch (Exception $e) {

    }
}
?>

<div class="app-header white box-shadow navbar-md">
    <div class="navbar">
        <!-- Open side - Naviation on mobile -->
        <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up">
            <i class="material-icons">&#xe5d2;</i>
        </a>
        <!-- / -->

        <!-- Page title - Bind to $state's title -->
        <div class="navbar-item pull-left h5" ng-bind="$state.current.data.title" id="pageTitle"></div>

        <!-- navbar right -->
        <ul class="nav navbar-nav pull-right">
            <li class="nav-item p-t p-b">
                <a class="btn btn-sm info marginTop2" href="<?php echo e(route("Home")); ?>" target="_blank"
                   title="<?php echo e(trans('backLang.sitePreview')); ?>">
                    <i class="material-icons">&#xe895;</i> <?php echo e(trans('backLang.sitePreview')); ?>

                </a>
            </li>
            <?php
            $alerts = count(Helper::webmailsAlerts()) + count(Helper::eventsAlerts());
            ?>
            <?php if($alerts >0): ?>
                <li class="nav-item dropdown pos-stc-xs">
                    <a class="nav-link" href data-toggle="dropdown">
                        <i class="material-icons">&#xe7f5;</i>
                        <?php if($alerts >0): ?>
                            <span class="label label-sm up warn"><?php echo e($alerts); ?></span>
                        <?php endif; ?>
                    </a>
                    <div class="dropdown-menu pull-right w-xl animated fadeInUp no-bg no-border no-shadow">
                        <div class="box dark">
                            <div class="box p-a scrollable maxHeight320">
                                <ul class="list-group list-group-gap m-a-0">
                                    <?php $__currentLoopData = Helper::webmailsAlerts(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $webmailsAlert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="list-group-item lt box-shadow-z0 b">
                                    <span class="clear block">
                                        <small><?php echo e($webmailsAlert->from_name); ?></small><br>
                                        <a href="<?php echo e(route("webmailsEdit",["id"=>$webmailsAlert->id])); ?>"
                                           class="text-primary"><?php echo e($webmailsAlert->title); ?></a>
                                        <br>
                                        <small class="text-muted">
                                            <?php echo e(date('d M Y  h:i A', strtotime($webmailsAlert->date))); ?>

                                        </small>
                                    </span></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php $__currentLoopData = Helper::eventsAlerts(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eventsAlert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="list-group-item lt box-shadow-z0 b">
                                    <span class="clear block">
                                        <a href="<?php echo e(route("calendarEdit",["id"=>$eventsAlert->id])); ?>"
                                           class="text-primary"><?php echo e($eventsAlert->title); ?></a>
                                        <br>
                                        <small class="text-muted">
                                            <?php if($eventsAlert->type ==3 || $eventsAlert->type ==2): ?>
                                                <?php echo e(date('d M Y  h:i A', strtotime($eventsAlert->start_date))); ?>

                                            <?php else: ?>
                                                <?php echo e(date('d M Y', strtotime($eventsAlert->start_date))); ?>

                                            <?php endif; ?>
                                        </small>
                                    </span></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            <?php endif; ?>
            <li class="nav-item dropdown">
                <a class="nav-link clear" href data-toggle="dropdown">
                  <span class="avatar w-32">
                      <?php if(Auth::user()->photo !=""): ?>
                          <img src="<?php echo e(URL::to('uploads/users/'.Auth::user()->photo)); ?>" alt="<?php echo e(Auth::user()->name); ?>"
                               title="<?php echo e(Auth::user()->name); ?>">
                      <?php else: ?>
                          <img src="<?php echo e(URL::to('backEnd/assets/images/profile.jpg')); ?>" alt="<?php echo e(Auth::user()->name); ?>"
                               title="<?php echo e(Auth::user()->name); ?>">
                      <?php endif; ?>
                      <i class="on b-white bottom"></i>
                  </span>
                </a>
                <div class="dropdown-menu pull-right dropdown-menu-scale">
                    <a class="dropdown-item"
                       href="<?php echo e(route('webmails')); ?>"><span><?php echo e(trans('backLang.siteInbox')); ?></span>
                        <?php if(count(Helper::webmailsAlerts()) >0): ?>
                            <span class="label warn m-l-xs"><?php echo e(count(Helper::webmailsAlerts())); ?></span>
                        <?php endif; ?>
                    </a>
                    <?php if( $connectEmailAddress !="" ): ?>
                        <a class="dropdown-item" target="_blank"
                           href="<?php echo 'http' . ($useHTTPS ? 's' : '') . '://' . $connectDomainURL . ':' . ($useHTTPS ? '2096' : '2095') . '/login/?user=' . $connectEmailAddress . '&pass=' . $connectEmailPassword . '&failurl=http://' . $connectDomainURL; ?>"><span><?php echo e(trans('backLang.openWebmail')); ?></span>
                            <?php if($nMsgCount >0 ): ?>
                                <span class="label warn m-l-xs"><?php echo e($nMsgCount); ?></span>
                            <?php endif; ?>
                        </a>
                    <?php endif; ?>
                    <?php if(Auth::user()->permissions ==0 || Auth::user()->permissions ==1): ?>
                        <a class="dropdown-item"
                           href="<?php echo e(route('usersEdit',Auth::user()->id)); ?>"><span><?php echo e(trans('backLang.profile')); ?></span></a>
                    <?php endif; ?>
                    <div class="dropdown-divider"></div>
                    <a onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                       class="dropdown-item" href="<?php echo e(url('/logout')); ?>"><?php echo e(trans('backLang.logout')); ?></a>

                    <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                        <?php echo e(csrf_field()); ?>

                    </form>
                </div>
            </li>

            <li class="nav-item hidden-md-up">
                <a class="nav-link" data-toggle="collapse" data-target="#collapse">
                    <i class="material-icons">&#xe5d4;</i>
                </a>
            </li>
        </ul>
        <!-- / navbar right -->

        <!-- navbar collapse -->
        <div class="collapse navbar-toggleable-sm" id="collapse">
            <?php echo e(Form::open(['route'=>['adminFind'],'method'=>'POST', 'role'=>'search', 'class' => "navbar-form form-inline pull-right pull-none-sm navbar-item v-m" ])); ?>


            <div class="form-group l-h m-a-0">
                <div class="input-group input-group-sm"><input type="text" name="q" class="form-control p-x b-a rounded"
                                                               placeholder="<?php echo e(trans('backLang.search')); ?>..." required> <span
                            class="input-group-btn"><button type="submit" class="btn white b-a rounded no-shadow"><i
                                    class="fa fa-search"></i></button></span></div>
            </div>
            <?php echo e(Form::close()); ?>

                    <!-- link and dropdown -->
            <ul class="nav navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link" href data-toggle="dropdown">
                        <i class="fa fa-fw fa-plus text-muted"></i>
                        <span><?php echo e(trans('backLang.new')); ?> </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-scale">
                        <?php
                        $data_sections_arr = explode(",", Auth::user()->permissionsGroup->data_sections);
                        $clr_ary = array("info", "danger", "success", "accent",);
                        $ik = 0;
                        ?>
                        <?php if(@Auth::user()->permissionsGroup->add_status): ?>
                            <?php $__currentLoopData = $GeneralWebmasterSections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $headerWebmasterSection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(in_array($headerWebmasterSection->id,$data_sections_arr)): ?>
                                    <?php
                                    $LiIcon = "&#xe2c8;";
                                    if ($headerWebmasterSection->type == 3) {
                                        $LiIcon = "&#xe050;";
                                    }
                                    if ($headerWebmasterSection->type == 2) {
                                        $LiIcon = "&#xe63a;";
                                    }
                                    if ($headerWebmasterSection->type == 1) {
                                        $LiIcon = "&#xe251;";
                                    }
                                    if ($headerWebmasterSection->type == 0) {
                                        $LiIcon = "&#xe2c8;";
                                    }
                                    if ($headerWebmasterSection->name == "sitePages") {
                                        $LiIcon = "&#xe3e8;";
                                    }
                                    if ($headerWebmasterSection->name == "articles") {
                                        $LiIcon = "&#xe02f;";
                                    }
                                    if ($headerWebmasterSection->name == "services") {
                                        $LiIcon = "&#xe540;";
                                    }
                                    if ($headerWebmasterSection->name == "news") {
                                        $LiIcon = "&#xe307;";
                                    }
                                    if ($headerWebmasterSection->name == "products") {
                                        $LiIcon = "&#xe8f6;";
                                    }

                                    ?>
                                    <a class="dropdown-item"
                                       href="<?php echo e(route("topicsCreate",$headerWebmasterSection->id)); ?>"><span><i
                                                    class="material-icons"><?php echo $LiIcon; ?></i> &nbsp;<?php echo trans('backLang.'.$headerWebmasterSection->name); ?></span></a>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php if(@Auth::user()->permissionsGroup->banners_status): ?>
                                <a class="dropdown-item" href="<?php echo e(route("Banners")); ?>"><i class="material-icons">
                                        &#xe433;</i>
                                    &nbsp;<?php echo e(trans('backLang.adsBanners')); ?></a>
                            <?php endif; ?>
                            <div class="dropdown-divider"></div>

                            <?php if(Helper::GeneralWebmasterSettings("newsletter_status")): ?>
                                <?php if(@Auth::user()->permissionsGroup->newsletter_status): ?>
                                    <a class="dropdown-item" href="<?php echo e(route("contacts")); ?>"><i class="material-icons">
                                            &#xe7ef;</i>
                                        &nbsp;<?php echo e(trans('backLang.newContacts')); ?></a>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if(Helper::GeneralWebmasterSettings("inbox_status")): ?>
                            <?php if(@Auth::user()->permissionsGroup->inbox_status): ?>
                                <a class="dropdown-item" href="<?php echo e(route("webmails",["group_id"=>"create"])); ?>"><i
                                            class="material-icons">&#xe0be;</i> &nbsp;<?php echo e(trans('backLang.compose')); ?>

                                </a>
                            <?php endif; ?>
                        <?php endif; ?>

                    </div>
                </li>
            </ul>
            <!-- / -->
        </div>
        <!-- / navbar collapse -->
    </div>
</div>