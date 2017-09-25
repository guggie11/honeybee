<?php
// Current Full URL
$fullPagePath = Request::url();
// Char Count of Backend folder Plus 1
$envAdminCharCount = strlen(env('BACKEND_PATH')) + 1;
// URL after Root Path EX: admin/home
$urlAfterRoot = substr($fullPagePath, strpos($fullPagePath, env('BACKEND_PATH')) + $envAdminCharCount);
?>

<div id="aside" class="app-aside modal fade folded md nav-expand">
    <div class="left navside dark dk" layout="column">
        <div class="navbar navbar-md no-radius">
            <!-- brand -->
            <a class="navbar-brand" href="<?php echo e(route('adminHome')); ?>">
                <img src="<?php echo e(URL::to('backEnd/assets/images/logo.png')); ?>" alt="Control">
                <span class="hidden-folded inline"><?php echo e(trans('backLang.control')); ?></span>
            </a>
            <!-- / brand -->
        </div>
        <div flex class="hide-scroll">
            <nav class="scroll nav-active-primary">

                <ul class="nav" ui-nav>
                    <li class="nav-header hidden-folded">
                        <small class="text-muted"><?php echo e(trans('backLang.main')); ?></small>
                    </li>

                    <li>
                        <a href="<?php echo e(route('adminHome')); ?>" onclick="location.href='<?php echo e(route('adminHome')); ?>'">
                  <span class="nav-icon">
                    <i class="material-icons">&#xe3fc;</i>
                  </span>
                            <span class="nav-text"><?php echo e(trans('backLang.dashboard')); ?></span>
                        </a>
                    </li>


                    <?php if(Helper::GeneralWebmasterSettings("analytics_status")): ?>
                        <?php
                        $currentFolder = "analytics"; // Put folder name here
                        $PathCurrentFolder = substr($urlAfterRoot, 0, strlen($currentFolder));

                        $currentFolder2 = "ip"; // Put folder name here
                        $PathCurrentFolder2 = substr($urlAfterRoot, 0, strlen($currentFolder2));

                        $currentFolder3 = "visitors"; // Put folder name here
                        $PathCurrentFolder3 = substr($urlAfterRoot, 0, strlen($currentFolder3));
                        ?>
                        <li <?php echo e(($PathCurrentFolder==$currentFolder || $PathCurrentFolder2==$currentFolder2  || $PathCurrentFolder3==$currentFolder3) ? 'class=active' : ''); ?>>
                            <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>
                  <span class="nav-icon">
                    <i class="material-icons">&#xe1b8;</i>
                  </span>
                                <span class="nav-text"><?php echo e(trans('backLang.visitorsAnalytics')); ?></span>
                            </a>
                            <ul class="nav-sub">
                                <li>
                                    <a onclick="location.href='<?php echo e(route('analytics', 'date')); ?>'">
                                        <span class="nav-text"><?php echo e(trans('backLang.visitorsAnalyticsBydate')); ?></span>
                                    </a>
                                </li>

                                <?php
                                $currentFolder = "analytics/country"; // Put folder name here
                                $PathCurrentFolder = substr($urlAfterRoot, 0, strlen($currentFolder));
                                ?>
                                <li <?php echo e(($PathCurrentFolder==$currentFolder) ? 'class=active' : ''); ?>>
                                    <a onclick="location.href='<?php echo e(route('analytics', 'country')); ?>'">
                                        <span class="nav-text"><?php echo e(trans('backLang.visitorsAnalyticsByCountry')); ?></span>
                                    </a>
                                </li>

                                <?php
                                $currentFolder = "analytics/city"; // Put folder name here
                                $PathCurrentFolder = substr($urlAfterRoot, 0, strlen($currentFolder));
                                ?>
                                <li <?php echo e(($PathCurrentFolder==$currentFolder) ? 'class=active' : ''); ?>>
                                    <a onclick="location.href='<?php echo e(route('analytics', 'city')); ?>'">
                                        <span class="nav-text"><?php echo e(trans('backLang.visitorsAnalyticsByCity')); ?></span>
                                    </a>
                                </li>

                                <?php
                                $currentFolder = "analytics/os"; // Put folder name here
                                $PathCurrentFolder = substr($urlAfterRoot, 0, strlen($currentFolder));
                                ?>
                                <li <?php echo e(($PathCurrentFolder==$currentFolder) ? 'class=active' : ''); ?>>
                                    <a onclick="location.href='<?php echo e(route('analytics', 'os')); ?>'">
                                        <span class="nav-text"><?php echo e(trans('backLang.visitorsAnalyticsByOperatingSystem')); ?></span>
                                    </a>
                                </li>

                                <?php
                                $currentFolder = "analytics/browser"; // Put folder name here
                                $PathCurrentFolder = substr($urlAfterRoot, 0, strlen($currentFolder));
                                ?>
                                <li <?php echo e(($PathCurrentFolder==$currentFolder) ? 'class=active' : ''); ?>>
                                    <a onclick="location.href='<?php echo e(route('analytics', 'browser')); ?>'">
                                        <span class="nav-text"><?php echo e(trans('backLang.visitorsAnalyticsByBrowser')); ?></span>
                                    </a>
                                </li>

                                <?php
                                $currentFolder = "analytics/referrer"; // Put folder name here
                                $PathCurrentFolder = substr($urlAfterRoot, 0, strlen($currentFolder));
                                ?>
                                <li <?php echo e(($PathCurrentFolder==$currentFolder) ? 'class=active' : ''); ?>>
                                    <a onclick="location.href='<?php echo e(route('analytics', 'referrer')); ?>'">
                                        <span class="nav-text"><?php echo e(trans('backLang.visitorsAnalyticsByReachWay')); ?></span>
                                    </a>
                                </li>
                                <?php
                                $currentFolder = "analytics/hostname"; // Put folder name here
                                $PathCurrentFolder = substr($urlAfterRoot, 0, strlen($currentFolder));
                                ?>
                                <li <?php echo e(($PathCurrentFolder==$currentFolder) ? 'class=active' : ''); ?>>
                                    <a onclick="location.href='<?php echo e(route('analytics', 'hostname')); ?>'">
                                        <span class="nav-text"><?php echo e(trans('backLang.visitorsAnalyticsByHostName')); ?></span>
                                    </a>
                                </li>
                                <?php
                                $currentFolder = "analytics/org"; // Put folder name here
                                $PathCurrentFolder = substr($urlAfterRoot, 0, strlen($currentFolder));
                                ?>
                                <li <?php echo e(($PathCurrentFolder==$currentFolder) ? 'class=active' : ''); ?>>
                                    <a onclick="location.href='<?php echo e(route('analytics', 'org')); ?>'">
                                        <span class="nav-text"><?php echo e(trans('backLang.visitorsAnalyticsByOrganization')); ?></span>
                                    </a>
                                </li>
                                <?php
                                $currentFolder = "visitors"; // Put folder name here
                                $PathCurrentFolder = substr($urlAfterRoot, 0, strlen($currentFolder));
                                ?>
                                <li <?php echo e(($PathCurrentFolder==$currentFolder) ? 'class=active' : ''); ?>>
                                    <a onclick="location.href='<?php echo e(route('visitors')); ?>'">
                                        <span class="nav-text"><?php echo e(trans('backLang.visitorsAnalyticsVisitorsHistory')); ?></span>
                                    </a>
                                </li>
                                <?php
                                $currentFolder = "ip"; // Put folder name here
                                $PathCurrentFolder = substr($urlAfterRoot, 0, strlen($currentFolder));
                                ?>
                                <li <?php echo e(($PathCurrentFolder==$currentFolder) ? 'class=active' : ''); ?>>
                                    <a href="<?php echo e(route('visitorsIP')); ?>">
                                        <span class="nav-text"><?php echo e(trans('backLang.visitorsAnalyticsIPInquiry')); ?></span>
                                    </a>
                                </li>


                            </ul>
                        </li>
                    <?php endif; ?>
                    <?php if(Helper::GeneralWebmasterSettings("newsletter_status")): ?>
                        <?php if(@Auth::user()->permissionsGroup->newsletter_status): ?>
                            <?php
                            $currentFolder = "contacts"; // Put folder name here
                            $PathCurrentFolder = substr($urlAfterRoot, 0, strlen($currentFolder));
                            ?>
                            <li <?php echo e(($PathCurrentFolder==$currentFolder) ? 'class=active' : ''); ?>>
                                <a href="<?php echo e(route('contacts')); ?>">
<span class="nav-icon">
<i class="material-icons">&#xe7ef;</i>
</span>
                                    <span class="nav-text"><?php echo e(trans('backLang.newsletter')); ?></span>
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>

                    <?php if(Helper::GeneralWebmasterSettings("inbox_status")): ?>
                        <?php if(@Auth::user()->permissionsGroup->inbox_status): ?>
                            <?php
                            $currentFolder = "webmails"; // Put folder name here
                            $PathCurrentFolder = substr($urlAfterRoot, 0, strlen($currentFolder));
                            ?>
                            <li <?php echo e(($PathCurrentFolder==$currentFolder) ? 'class=active' : ''); ?>>
                                <a href="<?php echo e(route('webmails')); ?>">
                  <span class="nav-icon">
                    <i class="material-icons">&#xe156;</i>
                  </span>
                                    <span class="nav-text"><?php echo e(trans('backLang.siteInbox')); ?></span>
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>

                    <?php if(Helper::GeneralWebmasterSettings("calendar_status")): ?>
                        <?php if(@Auth::user()->permissionsGroup->calendar_status): ?>
                            <?php
                            $currentFolder = "calendar"; // Put folder name here
                            $PathCurrentFolder = substr($urlAfterRoot, 0, strlen($currentFolder));
                            ?>
                            <li <?php echo e(($PathCurrentFolder==$currentFolder) ? 'class=active' : ''); ?>>
                                <a href="<?php echo e(route('calendar')); ?>" onclick="location.href='<?php echo e(route('calendar')); ?>'">
                  <span class="nav-icon">
                    <i class="material-icons">&#xe5c3;</i>
                  </span>
                                    <span class="nav-text"><?php echo e(trans('backLang.calendar')); ?></span>
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>
                    <li class="nav-header hidden-folded">
                        <small class="text-muted"><?php echo e(trans('backLang.siteData')); ?></small>
                    </li>

                    <?php
                    $data_sections_arr = explode(",", Auth::user()->permissionsGroup->data_sections);
                    ?>
                    <?php $__currentLoopData = $GeneralWebmasterSections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $GeneralWebmasterSection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(in_array($GeneralWebmasterSection->id,$data_sections_arr)): ?>
                            <?php
                            $LiIcon = "&#xe2c8;";
                            if ($GeneralWebmasterSection->type == 3) {
                                $LiIcon = "&#xe050;";
                            }
                            if ($GeneralWebmasterSection->type == 2) {
                                $LiIcon = "&#xe63a;";
                            }
                            if ($GeneralWebmasterSection->type == 1) {
                                $LiIcon = "&#xe251;";
                            }
                            if ($GeneralWebmasterSection->type == 0) {
                                $LiIcon = "&#xe2c8;";
                            }
                            if ($GeneralWebmasterSection->name == "sitePages") {
                                $LiIcon = "&#xe3e8;";
                            }
                            if ($GeneralWebmasterSection->name == "articles") {
                                $LiIcon = "&#xe02f;";
                            }
                            if ($GeneralWebmasterSection->name == "services") {
                                $LiIcon = "&#xe540;";
                            }
                            if ($GeneralWebmasterSection->name == "news") {
                                $LiIcon = "&#xe307;";
                            }
                            if ($GeneralWebmasterSection->name == "products") {
                                $LiIcon = "&#xe8f6;";
                            }

                            ?>
                            <?php if($GeneralWebmasterSection->sections_status > 0): ?>
                                <li <?php echo e(($GeneralWebmasterSection->id== @$WebmasterSection->id) ? 'class=active' : ''); ?>>
                                    <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>
                  <span class="nav-icon">
                    <i class="material-icons"><?php echo $LiIcon; ?></i>
                  </span>
                                        <span class="nav-text"><?php echo trans('backLang.'.$GeneralWebmasterSection->name); ?></span>
                                    </a>
                                    <ul class="nav-sub">
                                        <?php if($GeneralWebmasterSection->sections_status > 0): ?>

                                            <?php
                                            $currentFolder = "sections"; // Put folder name here
                                            $PathCurrentFolder = substr($urlAfterRoot,
                                                    (strlen($GeneralWebmasterSection->id) + 1), strlen($currentFolder));
                                            ?>
                                            <li <?php echo e(($PathCurrentFolder==$currentFolder) ? 'class=active' : ''); ?> >
                                                <a href="<?php echo e(route('sections',$GeneralWebmasterSection->id)); ?>">
                                                    <span class="nav-text"><?php echo e(trans('backLang.sectionsOf')); ?> <?php echo e(trans('backLang.'.$GeneralWebmasterSection->name)); ?></span>
                                                </a>
                                            </li>
                                        <?php endif; ?>

                                        <?php
                                        $currentFolder = "topics"; // Put folder name here
                                        $PathCurrentFolder = substr($urlAfterRoot,
                                                (strlen($GeneralWebmasterSection->id) + 1), strlen($currentFolder));
                                        ?>
                                        <li <?php echo e(($PathCurrentFolder==$currentFolder) ? 'class=active' : ''); ?> >
                                            <a href="<?php echo e(route('topics',$GeneralWebmasterSection->id)); ?>">
                                                <span class="nav-text"><?php echo trans('backLang.'.$GeneralWebmasterSection->name); ?></span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>

                            <?php else: ?>
                                <li <?php echo e(($GeneralWebmasterSection->id== @$WebmasterSection->id) ? 'class=active' : ''); ?>>
                                    <a href="<?php echo e(route('topics',$GeneralWebmasterSection->id)); ?>">
                  <span class="nav-icon">
                    <i class="material-icons"><?php echo $LiIcon; ?></i>
                  </span>
                                        <span class="nav-text"><?php echo trans('backLang.'.$GeneralWebmasterSection->name); ?></span>
                                    </a>
                                </li>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                    <?php if(Helper::GeneralWebmasterSettings("banners_status")): ?>
                        <?php if(@Auth::user()->permissionsGroup->banners_status): ?>
                            <?php
                            $currentFolder = "banners"; // Put folder name here
                            $PathCurrentFolder = substr($urlAfterRoot, 0, strlen($currentFolder));
                            ?>
                            <li <?php echo e(($PathCurrentFolder==$currentFolder) ? 'class=active' : ''); ?> >
                                <a href="<?php echo e(route('Banners')); ?>">
<span class="nav-icon">
<i class="material-icons">&#xe433;</i>
</span>
                                    <span class="nav-text"><?php echo e(trans('backLang.adsBanners')); ?></span>
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>


                    <li class="nav-header hidden-folded">
                        <small class="text-muted"><?php echo e(trans('backLang.settings')); ?></small>
                    </li>

                    <?php if(Helper::GeneralWebmasterSettings("settings_status")): ?>
                        <?php if(@Auth::user()->permissionsGroup->settings_status): ?>
                            <?php
                            $currentFolder = "settings"; // Put folder name here
                            $PathCurrentFolder = substr($urlAfterRoot, 0, strlen($currentFolder));

                            $currentFolder2 = "menus"; // Put folder name here
                            $PathCurrentFolder2 = substr($urlAfterRoot, 0, strlen($currentFolder2));

                            $currentFolder3 = "users"; // Put folder name here
                            $PathCurrentFolder3 = substr($urlAfterRoot, 0, strlen($currentFolder2));
                            ?>
                            <li <?php echo e(($PathCurrentFolder==$currentFolder || $PathCurrentFolder2==$currentFolder2 || $PathCurrentFolder3==$currentFolder3 ) ? 'class=active' : ''); ?>>
                                <a>
<span class="nav-caret">
<i class="fa fa-caret-down"></i>
</span>
<span class="nav-icon">
<i class="material-icons">&#xe8b8;</i>
</span>
                                    <span class="nav-text"><?php echo e(trans('backLang.generalSiteSettings')); ?></span>
                                </a>
                                <ul class="nav-sub">
                                    <?php
                                    $currentFolder = "settings"; // Put folder name here
                                    $PathCurrentFolder = substr($urlAfterRoot, 0, strlen($currentFolder));
                                    ?>
                                    <li <?php echo e(($PathCurrentFolder==$currentFolder) ? 'class=active' : ''); ?>>
                                        <a href="<?php echo e(route('settings')); ?>"   onclick="location.href='<?php echo e(route('settings')); ?>'">
                                            <span class="nav-text"><?php echo e(trans('backLang.generalSettings')); ?></span>
                                        </a>
                                    </li>
                                    <?php
                                    $currentFolder = "menus"; // Put folder name here
                                    $PathCurrentFolder = substr($urlAfterRoot, 0, strlen($currentFolder));
                                    ?>
                                    <li <?php echo e(($PathCurrentFolder==$currentFolder) ? 'class=active' : ''); ?>>
                                        <a href="<?php echo e(route('menus')); ?>">
                                            <span class="nav-text"><?php echo e(trans('backLang.siteMenus')); ?></span>
                                        </a>
                                    </li>
                                    <?php
                                    $currentFolder = "users"; // Put folder name here
                                    $PathCurrentFolder = substr($urlAfterRoot, 0, strlen($currentFolder));
                                    ?>
                                    <li <?php echo e(($PathCurrentFolder==$currentFolder) ? 'class=active' : ''); ?>>
                                        <a href="<?php echo e(route('users')); ?>">
                                            <span class="nav-text"><?php echo e(trans('backLang.usersPermissions')); ?></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>


                    <?php if(@Auth::user()->permissionsGroup->webmaster_status): ?>
                        <?php
                        $currentFolder = "webmaster"; // Put folder name here
                        $PathCurrentFolder = substr($urlAfterRoot, 0, strlen($currentFolder));
                        ?>
                        <li <?php echo e(($PathCurrentFolder==$currentFolder) ? 'class=active' : ''); ?>>
                            <a>
<span class="nav-caret">
<i class="fa fa-caret-down"></i>
</span>
<span class="nav-icon">
<i class="material-icons">&#xe8be;</i>
</span>
                                <span class="nav-text"><?php echo e(trans('backLang.webmasterTools')); ?></span>
                            </a>
                            <ul class="nav-sub">
                                <?php
                                $PathCurrentSubFolder = substr($urlAfterRoot, 0, (strlen($currentFolder) + 1));
                                ?>
                                <li <?php echo e(($PathCurrentFolder==$PathCurrentSubFolder) ? 'class=active' : ''); ?>>
                                    <a href="<?php echo e(route('webmasterSettings')); ?>">
                                        <span class="nav-text"><?php echo e(trans('backLang.generalSettings')); ?></span>
                                    </a>
                                </li>
                                <?php
                                $currentSubFolder = "sections"; // Put folder name here
                                $PathCurrentSubFolder = substr($urlAfterRoot, (strlen($currentFolder) + 1),
                                        strlen($currentSubFolder));
                                ?>
                                <li <?php echo e(($PathCurrentSubFolder==$currentSubFolder) ? 'class=active' : ''); ?>>
                                    <a href="<?php echo e(route('WebmasterSections')); ?>">
                                        <span class="nav-text"><?php echo e(trans('backLang.siteSectionsSettings')); ?></span>
                                    </a>
                                </li>
                                <?php
                                $currentSubFolder = "banners"; // Put folder name here
                                $PathCurrentSubFolder = substr($urlAfterRoot, (strlen($currentFolder) + 1),
                                        strlen($currentSubFolder));
                                ?>
                                <li <?php echo e(($PathCurrentSubFolder==$currentSubFolder) ? 'class=active' : ''); ?>>
                                    <a href="<?php echo e(route('WebmasterBanners')); ?>">
                                        <span class="nav-text"><?php echo e(trans('backLang.adsBannersSettings')); ?></span>
                                    </a>
                                </li>

                                <?php
                                $currentSubFolder = "translations"; // Put folder name here
                                $PathCurrentSubFolder = substr($urlAfterRoot, (strlen($currentFolder) + 1),
                                        strlen($currentSubFolder));
                                ?>
                                <li <?php echo e(($PathCurrentSubFolder==$currentSubFolder) ? 'class=active' : ''); ?>>
                                    <a href="<?php echo e(url(env('BACKEND_PATH').'/webmaster/translations')); ?>">
                                        <span class="nav-text"><?php echo e(trans('backLang.translations')); ?></span>
                                    </a>
                                </li>

                            </ul>
                        </li>

                    <?php endif; ?>
                </ul>
            </nav>
        </div>
        <div flex-no-shrink>
            <div>
                <nav ui-nav>
                    <ul class="nav">

                        <li>
                            <div class="b-b b m-t-sm"></div>
                        </li>
                        <li class="no-bg"><a href="<?php echo e(url('/logout')); ?>"
                                             onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <span class="nav-icon"><i class="material-icons">&#xe8ac;</i></span>
                                <span class="nav-text"><?php echo e(trans('backLang.logout')); ?></span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>