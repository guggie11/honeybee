<?php $__env->startSection('content'); ?>
    <div class="padding">

        <?php echo e(Form::open(['route'=>['webmasterSettingsUpdate'],'method'=>'POST'])); ?>


        <div class="col-md-6">
            <div class="form-group">
                <label><i class="material-icons">&#xe8c0;</i> <?php echo e(trans('backLang.appsSettings')); ?></label>
                <hr>
            </div>

            <div class="checkbox">
                <label class="ui-check">
                    <?php echo Form::checkbox('analytics_status','1',$WebmasterSetting->analytics_status, array('id' => 'analytics_status')); ?>

                    <i class="dark-white"></i><label
                            for="analytics_status"><?php echo e(trans('backLang.visitorsAnalytics')); ?></label>
                </label>
            </div>

            <div class="checkbox">
                <label class="ui-check">
                    <?php echo Form::checkbox('inbox_status','1',$WebmasterSetting->inbox_status, array('id' => 'inbox_status')); ?>

                    <i class="dark-white"></i><label for="inbox_status"><?php echo e(trans('backLang.siteInbox')); ?></label>
                </label>
            </div>

            <div class="checkbox">
                <label class="ui-check">
                    <?php echo Form::checkbox('calendar_status','1',$WebmasterSetting->calendar_status, array('id' => 'calendar_status')); ?>

                    <i class="dark-white"></i><label for="calendar_status"><?php echo e(trans('backLang.calendar')); ?></label>
                </label>
            </div>

            <div class="checkbox">
                <label class="ui-check">
                    <?php echo Form::checkbox('banners_status','1',$WebmasterSetting->banners_status, array('id' => 'banners_status')); ?>

                    <i class="dark-white"></i><label for="banners_status"><?php echo e(trans('backLang.adsBanners')); ?></label>
                </label>
            </div>


            <div class="checkbox">
                <label class="ui-check">
                    <?php echo Form::checkbox('newsletter_status','1',$WebmasterSetting->newsletter_status, array('id' => 'newsletter_status')); ?>

                    <i class="dark-white"></i><label for="newsletter_status"><?php echo e(trans('backLang.newsletter')); ?></label>
                </label>
            </div>

            <div class="checkbox">
                <label class="ui-check">
                    <?php echo Form::checkbox('settings_status','1',$WebmasterSetting->settings_status, array('id' => 'settings_status')); ?>

                    <i class="dark-white"></i><label
                            for="settings_status"><?php echo e(trans('backLang.generalSettings')); ?></label>
                </label>
            </div>


        </div>
        <div class="col-md-6">

            <div class="form-group">
                <label><i class="material-icons">&#xe8a4;</i> <?php echo e(trans('backLang.fieldsSettings')); ?></label>
                <hr>
            </div>
            <div class="form-group">
                <label><?php echo e(trans('backLang.arabicLanguageFields')); ?> : </label>
                <div class="radio">
                    <label class="ui-check ui-check-md">
                        <?php echo Form::radio('ar_box_status','1',$WebmasterSetting->ar_box_status ? true : false , array('id' => 'ar_box_status1','class'=>'has-value')); ?>

                        <i class="dark-white"></i>
                        <?php echo e(trans('backLang.active')); ?>

                    </label>
                    &nbsp; &nbsp;
                    <label class="ui-check ui-check-md">
                        <?php echo Form::radio('ar_box_status','0',$WebmasterSetting->ar_box_status ? false : true , array('id' => 'ar_box_status2','class'=>'has-value')); ?>

                        <i class="dark-white"></i>
                        <?php echo e(trans('backLang.notActive')); ?>

                    </label>
                </div>
            </div>
            <div class="form-group">
                <label><?php echo e(trans('backLang.englishLanguageFields')); ?> : </label>
                <div class="radio">
                    <label class="ui-check ui-check-md">
                        <?php echo Form::radio('en_box_status','1',$WebmasterSetting->en_box_status ? true : false , array('id' => 'en_box_status1','class'=>'has-value')); ?>

                        <i class="dark-white"></i>
                        <?php echo e(trans('backLang.active')); ?>

                    </label>
                    &nbsp; &nbsp;
                    <label class="ui-check ui-check-md">
                        <?php echo Form::radio('en_box_status','0',$WebmasterSetting->en_box_status ? false : true , array('id' => 'en_box_status2','class'=>'has-value')); ?>

                        <i class="dark-white"></i>
                        <?php echo e(trans('backLang.notActive')); ?>

                    </label>
                </div>
            </div>
            <div class="form-group">
                <label><?php echo e(trans('backLang.seoTab')); ?> : </label>
                <div class="radio">
                    <label class="ui-check ui-check-md">
                        <?php echo Form::radio('seo_status','1',$WebmasterSetting->seo_status ? true : false , array('id' => 'seo_status1','class'=>'has-value')); ?>

                        <i class="dark-white"></i>
                        <?php echo e(trans('backLang.active')); ?>

                    </label>
                    &nbsp; &nbsp;
                    <label class="ui-check ui-check-md">
                        <?php echo Form::radio('seo_status','0',$WebmasterSetting->seo_status ? false : true , array('id' => 'seo_status2','class'=>'has-value')); ?>

                        <i class="dark-white"></i>
                        <?php echo e(trans('backLang.notActive')); ?>

                    </label>
                </div>
            </div>

        </div>
        <div class="col-md-12">

            <div class="form-group">
                <label><i class="material-icons">&#xe895;</i> <?php echo e(trans('backLang.frontSettings')); ?></label>
                <hr>
            </div>
        </div>
        <div class="col-md-6">

            <div class="form-group">
                <label><?php echo e(trans('backLang.headerMenu')); ?> : </label>
                <select name="header_menu_id" id="header_menu_id" class="form-control c-select">
                    <option value="0">- - <?php echo trans('backLang.none'); ?> - -</option>
                    <?php
                    $title_var = "title_" . trans('backLang.boxCode');
                    $title_var2 = "title_" . trans('backLang.boxCodeOther');
                    ?>
                    <?php $__currentLoopData = $ParentMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ParentMenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        if ($ParentMenu->$title_var != "") {
                            $title = $ParentMenu->$title_var;
                        } else {
                            $title = $ParentMenu->$title_var2;
                        }
                        ?>
                        <option value="<?php echo e($ParentMenu->id); ?>" <?php echo e(($ParentMenu->id == $WebmasterSetting->header_menu_id) ? "selected='selected'":""); ?>><?php echo e($title); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label><?php echo e(trans('backLang.footerMenu')); ?> : </label>
                <select name="footer_menu_id" id="footer_menu_id" class="form-control c-select">
                    <option value="0">- - <?php echo trans('backLang.none'); ?> - -</option>
                    <?php
                    $title_var = "title_" . trans('backLang.boxCode');
                    $title_var2 = "title_" . trans('backLang.boxCodeOther');
                    ?>
                    <?php $__currentLoopData = $ParentMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ParentMenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        if ($ParentMenu->$title_var != "") {
                            $title = $ParentMenu->$title_var;
                        } else {
                            $title = $ParentMenu->$title_var2;
                        }
                        ?>
                        <option value="<?php echo e($ParentMenu->id); ?>" <?php echo e(($ParentMenu->id == $WebmasterSetting->footer_menu_id) ? "selected='selected'":""); ?>><?php echo e($title); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="form-group">
                <label><?php echo e(trans('backLang.homeSlideBanners')); ?> : </label>
                <select name="home_banners_section_id" id="home_banners_section_id" class="form-control c-select">
                    <option value="0">- - <?php echo trans('backLang.none'); ?> - -</option>
                    <?php $__currentLoopData = $WebmasterBanners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $WebmasterBanner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        ?>
                        <option value="<?php echo e($WebmasterBanner->id); ?>" <?php echo e(($WebmasterBanner->id == $WebmasterSetting->home_banners_section_id) ? "selected='selected'":""); ?>><?php echo trans('backLang.'.$WebmasterBanner->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>


            <div class="form-group">
                <label><?php echo e(trans('backLang.homeTextBanners')); ?> : </label>
                <select name="home_text_banners_section_id" id="home_text_banners_section_id"
                        class="form-control c-select">
                    <option value="0">- - <?php echo trans('backLang.none'); ?> - -</option>
                    <?php $__currentLoopData = $WebmasterBanners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $WebmasterBanner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        ?>
                        <option value="<?php echo e($WebmasterBanner->id); ?>" <?php echo e(($WebmasterBanner->id == $WebmasterSetting->home_text_banners_section_id) ? "selected='selected'":""); ?>><?php echo trans('backLang.'.$WebmasterBanner->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="form-group">
                <label><?php echo e(trans('backLang.sideBanners')); ?> : </label>
                <select name="side_banners_section_id" id="side_banners_section_id" class="form-control c-select">
                    <option value="0">- - <?php echo trans('backLang.none'); ?> - -</option>
                    <?php $__currentLoopData = $WebmasterBanners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $WebmasterBanner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        ?>
                        <option value="<?php echo e($WebmasterBanner->id); ?>" <?php echo e(($WebmasterBanner->id == $WebmasterSetting->side_banners_section_id) ? "selected='selected'":""); ?>><?php echo trans('backLang.'.$WebmasterBanner->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>


            <div class="form-group">
                <label><?php echo e(trans('backLang.activeLanguages')); ?> : </label>
                <div class="radio">
                    <label class="ui-check ui-check-md">
                        <?php echo Form::radio('languages_count','2',($WebmasterSetting->languages_count == 2)? true : false , array('id' => 'languages_count2','class'=>'has-value')); ?>

                        <i class="dark-white"></i>
                        <?php echo e(trans('backLang.activeLanguages2')); ?>

                    </label>
                    &nbsp; &nbsp;
                    <label class="ui-check ui-check-md">
                        <?php echo Form::radio('languages_count','1',($WebmasterSetting->languages_count == 1) ? true : false , array('id' => 'languages_count1','class'=>'has-value')); ?>

                        <i class="dark-white"></i>
                        <?php echo e(trans('backLang.activeLanguages1')); ?>

                    </label>
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label><?php echo e(trans('backLang.newsletterGroup')); ?> : </label>
                <select name="newsletter_contacts_group" id="newsletter_contacts_group" class="form-control c-select">
                    <option value="0">- - <?php echo trans('backLang.none'); ?> - -</option>
                    <?php $__currentLoopData = $ContactsGroups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ContactsGroup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        ?>
                        <option value="<?php echo e($ContactsGroup->id); ?>" <?php echo e(($ContactsGroup->id == $WebmasterSetting->newsletter_contacts_group) ? "selected='selected'":""); ?>><?php echo $ContactsGroup->name; ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="form-group">
                <label><?php echo e(trans('backLang.homeRow1')); ?> : </label>
                <select name="home_content1_section_id" id="home_content1_section_id" class="form-control c-select">
                    <option value="0">- - <?php echo trans('backLang.none'); ?> - -</option>
                    <?php $__currentLoopData = $GeneralWebmasterSections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $WebmasterSection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        ?>
                        <option value="<?php echo e($WebmasterSection->id); ?>" <?php echo e(($WebmasterSection->id == $WebmasterSetting->home_content1_section_id) ? "selected='selected'":""); ?>><?php echo trans('backLang.'.$WebmasterSection->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="form-group">
                <label><?php echo e(trans('backLang.homeRow2')); ?> : </label>
                <select name="home_content2_section_id" id="home_content2_section_id" class="form-control c-select">
                    <option value="0">- - <?php echo trans('backLang.none'); ?> - -</option>
                    <?php $__currentLoopData = $GeneralWebmasterSections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $WebmasterSection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        ?>
                        <option value="<?php echo e($WebmasterSection->id); ?>" <?php echo e(($WebmasterSection->id == $WebmasterSetting->home_content2_section_id) ? "selected='selected'":""); ?>><?php echo trans('backLang.'.$WebmasterSection->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="form-group">
                <label><?php echo e(trans('backLang.homeRow3')); ?> : </label>
                <select name="latest_news_section_id" id="latest_news_section_id" class="form-control c-select">
                    <option value="0">- - <?php echo trans('backLang.none'); ?> - -</option>
                    <?php $__currentLoopData = $GeneralWebmasterSections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $WebmasterSection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        ?>
                        <option value="<?php echo e($WebmasterSection->id); ?>" <?php echo e(($WebmasterSection->id == $WebmasterSetting->latest_news_section_id) ? "selected='selected'":""); ?>><?php echo trans('backLang.'.$WebmasterSection->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="form-group">
                <label><?php echo e(trans('backLang.contactPageId')); ?> : </label>
                <select name="contact_page_id" id="contact_page_id" class="form-control c-select">
                    <option value="0">- - <?php echo trans('backLang.none'); ?> - -</option>
                    <?php
                    $title_var = "title_" . trans('backLang.boxCode');
                    $title_var2 = "title_" . trans('backLang.boxCodeOther');
                    ?>
                    <?php $__currentLoopData = $SitePages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SitePage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        if ($SitePage->$title_var != "") {
                        $title = $SitePage->$title_var;
                        } else {
                        $title = $SitePage->$title_var2;
                        }
                        ?>
                        <option value="<?php echo e($SitePage->id); ?>" <?php echo e(($SitePage->id == $WebmasterSetting->contact_page_id) ? "selected='selected'":""); ?>><?php echo e($title); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="form-group">
                <label><?php echo e(trans('backLang.commentsStatus')); ?> : </label>
                <div class="radio">
                    <label class="ui-check ui-check-md">
                        <?php echo Form::radio('new_comments_status','1',$WebmasterSetting->new_comments_status ? true : false , array('id' => 'new_comments_status1','class'=>'has-value')); ?>

                        <i class="dark-white"></i>
                        <?php echo e(trans('backLang.automaticPublish')); ?>

                    </label>
                    &nbsp; &nbsp;
                    <label class="ui-check ui-check-md">
                        <?php echo Form::radio('new_comments_status','0',$WebmasterSetting->new_comments_status ? false : true , array('id' => 'new_comments_status2','class'=>'has-value')); ?>

                        <i class="dark-white"></i>
                        <?php echo e(trans('backLang.manualByAdmin')); ?>

                    </label>
                </div>
            </div>


        </div>
        <div class="col-md-12">
            <hr>
            <button type="submit" class="btn btn-info m-t"><?php echo e(trans('backLang.update')); ?></button>
        </div>
        <?php echo e(Form::close()); ?>

        <div class="row">
            <br>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backEnd.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>